(function () {

    var self = this;

    this.XceWeb = {};

    if (typeof jQuery != 'undefined') {
        this.XceWeb.useJQuery = true;
    } else if (typeof WinJS != 'undefined') {
        this.XceWeb.useJQuery = false;
    } else {
        throw new Error('This module requires jquery or WinJS.');
    }

    this.XceWeb.userIdHash = function (userHash) {
        return '$[DATA(xuid:hash=' + userHash + ')]';
    };

    this.XceWeb.DeviceType = {
        Unknown: 'Unknown',
        Xbox: 'Xbox',
        Xbox360: 'Xbox360',
        XboxOne: 'XboxOne',
        WinUnk: 'WinUnk',
        Win7: 'Win7',
        Win8: 'Win8',
        Web: 'Web',
        WinPhoneUnk: 'WinPhoneUnk',
        WinPhone7: 'WinPhone7',
        WinPhone8: 'WinPhone8',
        Kin: 'Kin',
        IosUnk: 'IosUnk',
        IosPhone: 'IosPhone',
        IosTablet: 'IosTablet',
        AndroidUnk: 'AndroidUnk',
        AndroidPhone: 'AndroidPhone',
        AndroidTablet: 'AndroidTablet',
        Zune: 'Zune'
    };

    // To set the promise for auth token, provide a promise that returns the token.
    // Examples:
    // JQuery:
    // window.XceWeb.config.getAuthToken = function() { return $.Deferred().resolve('XBL3.0 x=*;<token>').promise(); }
    // WinJS:
    // window.XceWeb.config.getAuthToken = function() { return WinJS.Promise.as('XBL3.0 x=*;<token>'); }
    this.XceWeb.config = {
        url: 'https://data-vef.xboxlive.com/event/web/auth',
        getAuthToken: null,
        deviceType: this.XceWeb.DeviceType.Unknown
    };

    this.XceWeb.sequenceClock = {
        uniqueId: 'w' + Math.floor((Math.random() * 8999) + 1000) + ':',
        sequenceId: 1
    };

    this.XceWeb.nextSequenceId = function () {
        var sequenceClock = window.XceWeb.sequenceClock;
        return sequenceClock.uniqueId + sequenceClock.sequenceId++;
    };

    this.XceWeb.postEvent = function (eventData) {

        var eventPsv = '';

        if (this.useJQuery ? $.isArray(eventData) : Array.isArray(eventData)) {
            for (var i = 0; i < eventData.length; i++) {
                var data = eventData[i];
                data.content.Ms = data.content.Ms || new Object();
                data.content.Ms.EventName = data.name;
                eventPsv += self.XceWeb[data.name](data.content) + '\n';
            }
        }
        else {
            eventData.content.Ms = eventData.content.Ms || new Object();
            eventData.content.Ms.EventName = eventData.name;
            eventPsv = self.XceWeb[eventData.name](eventData.content);
        }

        if (!window.XceWeb.config.getAuthToken) {
            return makeRequest(eventPsv, true, null);
        }
        else {
            if (this.useJQuery) {
                return window.XceWeb.config.getAuthToken().then(
                    function (authToken) {
                        return makeRequest(eventPsv, authToken, authToken);
                    },
                    function () {
                        return makeRequest(eventPsv, false, null);
                    });
            }
            else {
                return window.XceWeb.config.getAuthToken().then(
                    function complete(token) {
                        return makeRequest(eventPsv, false, token);
                    },
                    function error(token) {
                        return makeRequest(eventPsv, false, null);
                    });
            }
        }
    };

    function makeRequest(data, useAuth, authToken) {
        if (this.XceWeb.useJQuery) {
            $.support.cors = true;
        }

        var vortexUrl = window.XceWeb.config.url;

        if (useAuth || authToken) {
            vortexUrl = vortexUrl.replace(/\/unauth$/, '/auth');
        }
        else {
            vortexUrl = vortexUrl.replace(/\/auth$/, '/unauth');
        }

        var requestOptions = {
            accepts: { text: 'application/json' },
            url: vortexUrl,
            type: 'post',
            dataType: 'text',
            cache: false,
            data: data,
            crossDomain: true,
            headers: {
                'Content-Type': 'text/psv',
                'X-XBL-Contract-Version': 3,
                'X-XBL-Device-Type': window.XceWeb.config.deviceType
            }
        };

        if (this.XceWeb.useJQuery) {
            requestOptions.beforeSend = function (xhr, settings) {
                if (authToken) {
                    xhr.setRequestHeader('Authorization', authToken);
                }
                else {
                    xhr.setRequestHeader('xbl-authz-actor-10', '*');
                }
            }

            return $.ajax(requestOptions);
        } else {
            requestOptions.customRequestInitializer = function (xhr) {
                if (authToken) {
                    xhr.setRequestHeader('Authorization', authToken);
                }
                else {
                    xhr.setRequestHeader('xbl-authz-actor-10', '*');
                }
            }

            return WinJS.xhr(requestOptions);
        }
    }

    function escapeString(data) {
        if (typeof data == 'string' || data instanceof String) {
            return data.replace(/[\\\|]/g, '\\$&').replace(/\n/g, '\\n').replace(/\r/g, '\\r');
        }
        else if (Object.prototype.toString.call(data) === '[object Date]') {
            return data.toISOString();
        }
        else if (typeof data == 'boolean') {
            return data ? 1 : 0;
        }

        return data;
    }

    function defaultIfEmptyNumber(data) {
        return data ? escapeString(data) : 0;
    }

    function defaultIfEmptyDecimal(data) {
        return data || isNaN(data) ? escapeString(data) : 0.0;
    }

    function defaultIfEmptyBoolean(data) {
        return data ? escapeString(data) : 0;
    }

    function defaultIfEmptyGuid(data) {
        return data ? escapeString(data) : '00000000-0000-0000-0000-000000000000';
    }

    function PartA(eventContent) {
        return [eventContent.Ms.EventName, new Date().toISOString(), null, null, null, null, null, null, 100.0, 66050, window.XceWeb.nextSequenceId()].join("|");
    };

    function UPA_4(eventContent) {
        var eventSchema = eventContent["UPA"];
        return [escapeString(eventSchema.UserId), defaultIfEmptyNumber(eventSchema.ActionTypeId), defaultIfEmptyNumber(eventSchema.ActionInputMethodId), escapeString(eventSchema.PageUri), escapeString(eventSchema.PageName), defaultIfEmptyNumber(eventSchema.PageTypeId), escapeString(eventSchema.TemplateId), escapeString(eventSchema.DestPageUri), defaultIfEmptyNumber(eventSchema.DestPageTypeId), defaultIfEmptyNumber(eventSchema.ScreenStateId), escapeString(eventSchema.CampaignId), escapeString(eventSchema.GroupId), defaultIfEmptyDecimal(eventSchema.ContentJsonVersion), escapeString(eventSchema.Content)].join("|");
    };

    function WebPdp_PageAction_1(eventContent) {
        var eventSchema = eventContent["WebPdp:PageAction"];
        return [escapeString(eventSchema.UserAgent)].join("|");
    };

    function UPV_5(eventContent) {
        var eventSchema = eventContent["UPV"];
        return [escapeString(eventSchema.UserId), escapeString(eventSchema.PageUri), escapeString(eventSchema.PageName), escapeString(eventSchema.RefererPageUri), defaultIfEmptyNumber(eventSchema.PageTypeId), defaultIfEmptyNumber(eventSchema.RefererPageTypeId), escapeString(eventSchema.PageTags), escapeString(eventSchema.PageParameters), defaultIfEmptyNumber(eventSchema.ProductCatalogId), escapeString(eventSchema.ProductId), escapeString(eventSchema.TemplateId), defaultIfEmptyNumber(eventSchema.ResolutionWidth), defaultIfEmptyNumber(eventSchema.ResolutionHeight), defaultIfEmptyNumber(eventSchema.ScreenStateId), defaultIfEmptyNumber(eventSchema.ColorDepth), escapeString(eventSchema.SkinId), escapeString(eventSchema.CampaignId), escapeString(eventSchema.GroupId), defaultIfEmptyDecimal(eventSchema.ContentJsonVersion), escapeString(eventSchema.Content)].join("|");
    };

    function WebPdp_PageView_1(eventContent) {
        var eventSchema = eventContent["WebPdp:PageView"];
        return [escapeString(eventSchema.UserAgent), escapeString(eventSchema.SessionID), escapeString(eventSchema.Cookie)].join("|");
    };

    // window.XceWeb.postEvent({
    //     name: 'PageAction',
    //     content: {
    //         'UPA': {
    //           'UserId': window.XceWeb.userIdHash('1234567'),
    //           'ActionTypeId': 0,
    //           'ActionInputMethodId': 0,
    //           'PageUri': '',
    //           'PageName': '',
    //           'PageTypeId': 0,
    //           'TemplateId': '',
    //           'DestPageUri': '',
    //           'DestPageTypeId': 0,
    //           'ScreenStateId': 0,
    //           'CampaignId': '',
    //           'GroupId': '',
    //           'ContentJsonVersion': 0.0,
    //           'Content': '',
    //         },
    //         'WebPdp:PageAction': {
    //           'UserAgent': '',
    //         },
    //     }
    // });
    this.XceWeb.PageAction = function (eventContent) {
        eventContent.Ms.EventName = "WebPdp." + eventContent.Ms.EventName;
        return ["0.9.UPA-4.1", PartA(eventContent), UPA_4(eventContent), WebPdp_PageAction_1(eventContent)].join("|");
    };

    // window.XceWeb.postEvent({
    //     name: 'PageView',
    //     content: {
    //         'UPV': {
    //           'UserId': window.XceWeb.userIdHash('1234567'),
    //           'PageUri': '',
    //           'PageName': '',
    //           'RefererPageUri': '',
    //           'PageTypeId': 0,
    //           'RefererPageTypeId': 0,
    //           'PageTags': '',
    //           'PageParameters': '',
    //           'ProductCatalogId': 0,
    //           'ProductId': '',
    //           'TemplateId': '',
    //           'ResolutionWidth': 0,
    //           'ResolutionHeight': 0,
    //           'ScreenStateId': 0,
    //           'ColorDepth': 0,
    //           'SkinId': '',
    //           'CampaignId': '',
    //           'GroupId': '',
    //           'ContentJsonVersion': 0.0,
    //           'Content': '',
    //         },
    //         'WebPdp:PageView': {
    //           'UserAgent': '',
    //           'SessionID': '',
    //           'Cookie': '',
    //         },
    //     }
    // });
    this.XceWeb.PageView = function (eventContent) {
        eventContent.Ms.EventName = "WebPdp." + eventContent.Ms.EventName;
        return ["0.9.UPV-5.1", PartA(eventContent), UPV_5(eventContent), WebPdp_PageView_1(eventContent)].join("|");
    };

})();
