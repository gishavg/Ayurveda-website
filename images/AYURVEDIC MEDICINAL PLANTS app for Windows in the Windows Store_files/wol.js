
function bindSearchBox() {
    var searchQueryTextInputArea = $("input.SearchQueryTextInput").first();
    searchQueryTextInputArea.bind("focus", function (event) { searchHasFocus(this); return false; });
    searchQueryTextInputArea.bind("blur", function (event) { searchLostFocus(this); return false; });
    searchQueryTextInputArea.bind("keypress", function (event) { searchBoxOnKeyPress(event); return true; });
    $('#SearchButton').bind("click", searchTriggered);
}

function searchHasFocus(searchQueryTextInputArea) {
    $('.SearchQuery').addClass('SearchQueryHasFocus');
    $('#SearchButton').addClass('accentButtonFocus');
    document.getElementById("searchIcon").src = imageUrl + "searchIcon24Trans.png";
}

function searchLostFocus(searchQueryTextInputArea) {
    $('.SearchQuery').removeClass('SearchQueryHasFocus');
    $('#SearchButton').removeClass('accentButtonFocus');
    document.getElementById("searchIcon").src = imageUrl + "searchIcon24.png";
}

function searchTriggered() {
    var searchTerm = document.getElementById("SearchQueryTextInputArea").value;
    var encodedSearchTerm = encodeURIComponent(searchTerm);

    var searchurl = wolSearchUrl + "#q=" + encodedSearchTerm + "&s=Store";
    if (typeof ocid != 'undefined' && ocid) {
        searchurl += "&ocid=" + ocid;
    }

    
    onPageActionSearch(searchurl);

    window.location.href = searchurl;
}

function searchBoxOnKeyPress(e) {
    if (e.which === 13) {
        this.searchTriggered();
        e.preventDefault();
    }
}
