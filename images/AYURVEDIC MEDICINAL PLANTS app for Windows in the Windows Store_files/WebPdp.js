function getMetaContents(metaName) {
    var meta = document.getElementsByTagName('meta'),
        node = meta[metaName];
    if (node == null)
        return null;

    return node.content;
}

function instrDisabled() {
    if (typeof instrEnabled != 'undefined' && !instrEnabled) {
        return true;
    }
    return false;
}

sendEvent = function (events, statusElement, dataElement) {
    var postVal = window.XceWeb.postEvent(events)
    .done(function (data, textStatus, jqXHR) {
    }).fail(function (jqXHR, testStatus, errorThrown) {
    });
}

onPageActionSearch = function (searchUrl) {
    if (instrDisabled()) {
        return;
    }

    var events = [{
        name: 'PageAction',
        content: {
            'UPA': {
                'UserId': '',
                'ActionTypeId': -1,
                'ActionInputMethodId': -1,
                'PageUri': document.URL,
                'PageName': getMetaContents("MS.PageId"),
                'PageTypeId': 3,
                'TemplateId': 0,
                'DestPageUri': searchUrl,
                'DestPageTypeId': 3,
                'ScreenStateId': -1,
                'CampaignId': ocid,
                'GroupId': '',
                'ContentJsonVersion': 1.1,
                'Content': ''
            },
            'WebPdp:PageAction': {
                'UserAgent': navigator.userAgent,
            }
        }
    }];

    sendEvent(events, "PageActionSearchStatus", "PageActionSearchData");
}

onPageActionProtocol = function (protocolUri) {
    if (instrDisabled()) {
        return;
    }

    var events = [{
        name: 'PageAction',
        content: {
            'UPA': {
                'UserId': '',
                'ActionTypeId': -1,
                'ActionInputMethodId': -1,
                'PageUri': document.URL,
                'PageName': getMetaContents("MS.PageId"),
                'PageTypeId': 3,
                'TemplateId': 0,
                'DestPageUri': protocolUri,
                'DestPageTypeId': 1,
                'ScreenStateId': -1,
                'CampaignId': ocid,
                'GroupId': '',
                'ContentJsonVersion': 1.1,
                'Content': ''
            },
            'WebPdp:PageAction': {
                'UserAgent': navigator.userAgent,
            }
        }
    }];

    sendEvent(events, "PageActionProtocolStatus", "PageActionProtocolData");
}

onPageActionLink = function (linkUri) {
    if (instrDisabled()) {
        return;
    }

    var events = [{
        name: 'PageAction',
        content: {
            'UPA': {
                'UserId': '',
                'ActionTypeId': -1,
                'ActionInputMethodId': -1,
                'PageUri': document.URL,
                'PageName': getMetaContents("MS.PageId"),
                'PageTypeId': 3,
                'TemplateId': 0,
                'DestPageUri': linkUri,
                'DestPageTypeId': 3,
                'ScreenStateId': -1,
                'CampaignId': ocid,
                'GroupId': '',
                'ContentJsonVersion': 1.1,
                'Content': ''
            },
            'WebPdp:PageAction': {
                'UserAgent': navigator.userAgent,
            }
        }
    }];

    sendEvent(events, "PageActionLinkStatus", "PageActionLinkData");
}


onPageView = function () {
    if (instrDisabled()) {
        return;
    }

    var events = [{
        name: 'PageView',
        content: {
            'UPV': {
                'UserId': '',
                'PageUri': document.URL,
                'PageName': getMetaContents("MS.PageId"),
                'RefererPageUri': document.referrer,
                'PageTypeId': 3,
                'RefererPageTypeId': 3,
                'PageTags': '',
                'PageParameters': '',
                'ProductCatalogId': 10,
                'ProductId': getMetaContents("MS.App.Id"),
                'TemplateId': 0,
                'ResolutionWidth': screen.width,
                'ResolutionHeight': screen.height,
                'ScreenStateId': -1,
                'ColorDepth': -1,
                'SkinId': '',
                'CampaignId': ocid,
                'GroupId': '',
                'ContentJsonVersion': 1.1,
                'Content': ''
            },
            'WebPdp:PageView': {
                'UserAgent': navigator.userAgent,
                'SessionID': Wol.ContentInstrumentation.Logging.GetSessionID(),
                'Cookie': document.cookie,
            }
        }
    }];

    sendEvent(events, "PageViewStatus", "PageViewData");
}

onPageViewError = function () {
    if (instrDisabled()) {
        return;
    }

    var events = [{
        name: 'PageView',
        content: {
            "UPV": {
                'UserId': '',
                'PageUri': document.URL,
                'PageName': getMetaContents("MS.PageId"),
                'RefererPageUri': document.referrer,
                'PageTypeId': 3,
                'RefererPageTypeId': 3,
                'PageTags': '',
                'PageParameters': '',
                'ProductCatalogId': 10,
                'ProductId': '',
                'TemplateId': 0,
                'ResolutionWidth': screen.width,
                'ResolutionHeight': screen.height,
                'ScreenStateId': -1,
                'ColorDepth': -1,
                'SkinId': '',
                'CampaignId': ocid,
                'GroupId': '',
                'ContentJsonVersion': 1.1,
                'Content': '',
            },
            'WebPdp:PageView': {
                'UserAgent': navigator.userAgent,
                'SessionID': Wol.ContentInstrumentation.Logging.GetSessionID(),
                'Cookie': document.cookie,
            }
        }
    }];

    sendEvent(events, "PageViewErrorStatus", "PageViewErrorData");
}

