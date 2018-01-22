var Images = [];
var autoLaunchStore = false;
var TagPrefix = "MS";
var RequestIdTagName = "RequestId";
var CoreTags = ["App.Id", "Culture", "PageId", "PageVer", "App.Culture"];


function toggleMoreLess(buttonObj) {
    // toggle the text between read more/less
    if ($(buttonObj).text() == more) {
        $(buttonObj).text(less);
    } else {
        $(buttonObj).text(more);
    }

    // remove height restriction on div
    $(buttonObj).parent().find(".readMoreText").toggleClass("readMoreTextTrunc");
}

function enableMoreButtons() {
    $(".readMoreInit").each(function (index) {
        var clientHeight = this.getBoundingClientRect().height == null
            ? this.getBoundingClientRect().bottom - this.getBoundingClientRect().top
            : this.getBoundingClientRect().height;
        // $.browser is deprecated and removed in jQuery 1.9
        if ($.browser.msie && $.browser.version == "9.0") {
            clientHeight = getOffsetHeight(this);
        }
        if (this.scrollHeight > Math.ceil(clientHeight)) {
            $(this).removeClass("readMoreInit");
            $(this).parent().find(".readMoreButton").css("display", "inline");
            $(this).parent().find(".readMoreButton").bind("click", function (event) { toggleMoreLess(this); return false; });
        }
    });
}

function getOffsetHeight(elm) {
    var cStyle = elm.ownerDocument
        && elm.ownerDocument.defaultView
        && elm.ownerDocument.defaultView.getComputedStyle
        && elm.ownerDocument.defaultView.getComputedStyle(elm, null);
    var str = cStyle && cStyle.getPropertyValue('height') || '';
    if (str && str.indexOf('.') > -1) {
        return parseFloat(str)
			+ parseInt(cStyle.getPropertyValue('padding-top'))
			+ parseInt(cStyle.getPropertyValue('padding-bottom'))
			+ parseInt(cStyle.getPropertyValue('border-top-width'))
			+ parseInt(cStyle.getPropertyValue('border-bottom-width'));
    } else {
        return elm.offsetHeight;
    }
}

function bindImageButtons() {
    $(".imageButton").bind("click", function (event) { selectImage(this); return false; });
}

function isHighContrast() {
    return isHighContrastLightBg() || isHighContrastDarkBg();
}

function isHighContrastLightBg() {
    if (typeof msMatchMedia == "function") {
        return msMatchMedia("screen and (-ms-high-contrast: black-on-white)").matches;
    }
    return false;
}

function isHighContrastDarkBg() {
    if (typeof msMatchMedia == "function") {
        return msMatchMedia("screen and (-ms-high-contrast)").matches && !isHighContrastLightBg();
    }
    return false;
}

function composeImageName(prefixName, state) {
    return composeImagePath("dark", "light", prefixName + "_" + state, true);
}

function composeImagePath(prefixDark, prefixLight, state, useTextColor) {
    if (isHighContrastLightBg()) {
        return imageUrl + prefixDark + "_" + state + ".png";
    } else if (isHighContrastDarkBg()) {
        return imageUrl + prefixLight + "_" + state + ".png";
    }

    return imageUrl + (useTextColor && !isDarkText ? prefixLight : prefixDark) + "_" + state + ".png";
}

function composeLogoPath(id) {
    if (isHighContrastLightBg() && $(id).attr("data-hcltaltsrc") != null) {
        return $(id).attr("data-hcltaltsrc");
    } else if (isHighContrastDarkBg() && $(id).attr("data-hcdkaltsrc") != null) {
        return $(id).attr("data-hcdkaltsrc");
    }

    return $(id).attr("src");
}

function assignImages() {
    if ($("#Stars").length > 0) {
        var noneStar = '<img src="' + composeImagePath("dark", "white", "none", false) + '" />';
        var fullStar = '<img src="' + composeImagePath("dark", "white", "full", false) + '" />';

        for (var i = 0; i < 5; i++) {
            $("#Stars").prepend(noneStar);
            $("#StarOverlay").prepend(fullStar);
        }
    }
}

function assignStars() {
    var noneStar = '<img src="' + composeImagePath("dark", "white", "none", false) + '" />';
    var fullStar = '<img src="' + composeImagePath("dark", "white", "full", false) + '" />';

    $('.Stars').each(function (i, obj) { 
        for (var i = 0; i < 5; i++) {
            $(this).prepend(noneStar);
        }
    });
    $('.StarOverlay').each(function (i, obj) {
        for (var i = 0; i < 5; i++) {
            $(this).prepend(fullStar);
        }
    });
}

function configureNavButtons(nextButtonState, prevButtonState) {
    var nextNavFunction = function (event) { nextImage(this); return false; };
    var prevNavFunction = function (event) { prevImage(this); return false; };
    var disabledNavFunction = function (event) { event.stopPropagation(); return false; }
    setNavButtonState("#ImageNextButton", "#nextImg", isRtl ? "previous" : "next", nextButtonState ? nextNavFunction : disabledNavFunction, nextButtonState);
    setNavButtonState("#ImagePrevButton", "#prevImg", isRtl ? "next" : "previous", prevButtonState ? prevNavFunction : disabledNavFunction, prevButtonState);
}

function setNavButtonState(buttonName, imageName, prefixName, clickFunction, isEnabled) {
    var imageButton = $(buttonName);
    if (imageButton.attr("buttonState") != isEnabled.toString()) {
        unBindNavButton(imageButton);
        if (isEnabled) {
            bindNavButton(imageButton, imageName, prefixName);
            $(imageName).attr("src", composeImageName(prefixName, "rest"));
        } else {
            $(imageName).attr("src", composeImageName(prefixName, "disabled"));
        }
        imageButton.bind("click.pdp", clickFunction);
        imageButton.attr("buttonState", isEnabled.toString());
    }
}

function bindNavButton(imageButton, imageName, prefixName) {
    imageButton.bind("mouseover.pdp", function () { $(imageName).attr("src", composeImageName(prefixName, "hover")); });
    imageButton.bind("mouseout.pdp", function () { $(imageName).attr("src", composeImageName(prefixName, "rest")); });
    imageButton.bind("mousedown.pdp", function () { $(imageName).attr("src", composeImageName(prefixName, "pressed")); });
    imageButton.bind("mouseup.pdp", function () { $(imageName).attr("src", composeImageName(prefixName, "hover")); });
}

function unBindNavButton(imageButton) {
    imageButton.unbind("click.pdp");
    imageButton.unbind("mouseover.pdp");
    imageButton.unbind("mouseout.pdp");
    imageButton.unbind("mousedown.pdp");
    imageButton.unbind("mouseup.pdp");
}

function bindLaunchStoreButton() {
    $("#LaunchStoreButton").bind("click", function (event) { event.stopPropagation(); launchStore(false); return false; });
}

function selectTab(tabButtonObj) {
    var curSelection = $(tabButtonObj).parent().find(".tabSelected").first();
    if (tabButtonObj != curSelection) {
        var hidePanel = document.getElementById($(curSelection).attr("panel"));
        var showPanel = document.getElementById($(tabButtonObj).attr("panel"));
        $(curSelection).removeClass("tabSelected");
        $(tabButtonObj).addClass("tabSelected");
        $(hidePanel).css("display", "none");
        $(showPanel).css("display", "block");
        enableMoreButtons();
    }
}

function selectImage(newSelection) {
    var curSelection = $(newSelection).parent().find(".imageButtonSelected").first();
    if (newSelection != curSelection) {
        $(curSelection).removeClass("imageButtonSelected");
        $(newSelection).addClass("imageButtonSelected");
        var url = $(newSelection).attr("imgurl");
        var title = $(newSelection).attr("title");
        var caption = $(newSelection).attr("imgcaption");
        var alttext = $(newSelection).attr("alttext");
        var ariaLabel = $(newSelection).attr("imgaria");
        var screenshotImage = $("#ScreenshotImage");
        if (screenshotImage != null) {
            screenshotImage.attr("src", url);
            screenshotImage.attr("title", title);
            screenshotImage.attr("alt", alttext);
            screenshotImage.bind("onerror", function () { setfallbackImage(this) });
            $("#ScreenshotView").attr("aria-label", ariaLabel);
        }
        var captionText = $("#ImageCaptionText");
        if (captionText != null) {
            $(captionText).text(caption);
            $(captionText).attr("title", caption);
        }

        var collection = $(newSelection).parent().find(".imageButton");
        var elements = $(collection).size();
        var index = $(collection).index(newSelection);

        if (index == 0) {
            configureNavButtons(true, false);
        } else if (index == elements - 1) {
            configureNavButtons(false, true);
        } else {
            configureNavButtons(true, true);
        }
    }
}

function nextImage() {
    var curSelection = $("#ScreenshotImageButtons").find(".imageButtonSelected").first();
    curSelection = $(curSelection).next();
    selectImage($(curSelection));
}

function prevImage() {
    var curSelection = $("#ScreenshotImageButtons").find(".imageButtonSelected").first();
    curSelection = $(curSelection).prev();
    selectImage($(curSelection));
}

function preloadScreenshotImages() {
    $("#ScreenshotImageButtons").find(".imageButton").each(
    function (idx) {
        if (idx > 0) {
            Images[idx] = new Image();
            Images[idx].src = $(this).attr("imgurl");
        }
    });
}

function initScreenshots() {
    var firstImage = $("#ScreenshotImageButtons").find(".imageButton").first();
    if (firstImage.length > 0) {
        selectImage($(firstImage));
        setTimeout("preloadScreenshotImages()", 100);
    }
}

function setfallbackImage(img) {
    img.src = imageUrl + "none.png";
}

function launchStoreIframe(storeUrl) {
    var sessionId = "";
    if (biEnabled) {
        sessionId = Wol.ContentInstrumentation.Logging.GetSessionID();

        storeUrl += "&sessionId=" + sessionId;
    }
    storeUrl += "&form=WEBPDP";

    if (typeof ocid != 'undefined' && ocid) {
        storeUrl += "&ocid=" + ocid;
    }

    onPageActionProtocol(storeUrl);
    $("#wsFrame").attr("src", storeUrl.toString());
}
function launchStore(automatic) {
    if (biEnabled) {
        Wol.ContentInstrumentation.Logging.LogCustomBI("LaunchStore", { LaunchStore: automatic ? "Auto" : "Manual" });
    }
    launchStoreIframe("ms-windows-store:PDP?PFN=" + packageFamilyName);
}
function launchStoreAppsByDev(pubName) {
    if (biEnabled) {
        Wol.ContentInstrumentation.Logging.LogCustomBI("LaunchStoreAppsByDev", { });
    }
    launchStoreIframe("ms-windows-store:Publisher?name=" + pubName);
}
function launchStoreAppsByDevTitle(pubName) {
    if (biEnabled) {
        Wol.ContentInstrumentation.Logging.LogCustomBI("LaunchStoreAppsByDev", {});
    }
    launchStoreIframe("ms-windows-store:Publisher?name=" + pubName);
}
function launchStoreRelatedApps(pfn) {
    if (biEnabled) {
        Wol.ContentInstrumentation.Logging.LogCustomBI("LaunchStoreSimilarApps", { });
    }
    launchStoreIframe("ms-windows-store:SimilarApps?PFN=" + pfn);
}

function launchStoreCategory(categoryId, subcategoryId) {
    if (biEnabled) {
        Wol.ContentInstrumentation.Logging.LogCustomBI("LaunchStoreCategory", { });
    }
    
    if (!subcategoryId){
        subcategoryId = 0;
    }
    launchStoreIframe("ms-windows-store:category?cid=" + categoryId + "&scid=" + subcategoryId);
}

function launchStoreHome() {
    if (biEnabled) {
        Wol.ContentInstrumentation.Logging.LogCustomBI("LaunchStoreHome", {});
    }

    launchStoreIframe("ms-windows-store:category?Home");
}

function initBI() {
    Wol.ContentInstrumentation.Logging.SetTagConfig(TagPrefix, RequestIdTagName, CoreTags);
    Wol.ContentInstrumentation.Logging.SetEnvironment(biServer, false);
    Wol.ContentInstrumentation.Logging.Init();
}

function toggleLanguages() {
    $("#LanguagesTextCollapsed").toggle();
    $("#LanguagesTextFull").toggle();
    if ($("#LanguagesTextCollapsed").css("display") == 'none') {
        $("#ToggleLanguages").html(collapseLanguages);
    }
    else {
        $("#ToggleLanguages").html(expandLanguages);
    }
}

function toggleEula() {
    $("#EulaBody").toggle();
}

function bindStoreDeepLinks() {
    $(".launchStoreAppsByDev").each(function (event) {
        $(this).bind("click", function (event) { launchStoreAppsByDev(publisherName); return false; })
    });
    $(".launchStoreAppsByDevTitle").each(function (event) {
        $(this).bind("click", function (event) { launchStoreAppsByDevTitle(publisherName); return false; })
    });
    $(".launchStoreRelatedApps").each(function (event) {
        $(this).bind("click", function (event) { launchStoreRelatedApps(packageFamilyName); return false; })
    });
    $(".launchStoreCategory").each(function (event) {
        $(this).bind("click", function (event) { launchStoreCategory(categoryId); return false; })
    });
    $(".launchStoreCategoryWSub").each(function (event) {
        $(this).bind("click", function (event) { launchStoreCategory(categoryId, subCategoryId); return false; })
    });
    $(".launchStoreHome").each(function (event) {
        $(this).bind("click", function (event) { launchStoreHome(); return false; })
    });
}

function adjustForHighContrast() {
    $("#WindowsLogo").attr("src", composeLogoPath("#WindowsLogo"));
    $("#StoreLogo").attr("src", composeLogoPath("#StoreLogo"));
    $("#UniversalAppLogo").attr("src", composeLogoPath("#UniversalAppLogo"));
    $("#MainUniversalAppLogo").attr("src", composeLogoPath("#MainUniversalAppLogo"));
    if (isHighContrastDarkBg()) {
        $("#LaunchStoreButton").addClass("HighContrastButtonDarkBg");
    }
    else if (isHighContrastLightBg()) {
        $("#LaunchStoreButton").addClass("HighContrastButtonLightBg");
    }
}

function adjustPricePromoStringStyle() {
    if ($("#PromoString").css("width") == $("#PromoString").css("max-width")) {
        $("#PromoString").removeClass("PromoStringSmall");
    }
}

$(document).ready(function () {
    enableMoreButtons();
    bindImageButtons();
    bindLaunchStoreButton();
    bindSearchBox();
    bindStoreDeepLinks();
    initScreenshots();
    assignImages();
    assignStars();
    adjustPricePromoStringStyle();

    if (isHighContrast()) {
        adjustForHighContrast();
    }

    if (biEnabled) {
        if (autoLaunchStore) {
            Wol.ContentInstrumentation.Logging.onInitComplete = function () {
                onPageView();
                launchStore(true);
            }
        }
        else {
            Wol.ContentInstrumentation.Logging.onInitComplete = function () {
                onPageView();
            };
        }

        initBI();
    }
    else {
        onPageView();
        if (autoLaunchStore) {
            launchStore(true);
        }
    }
});