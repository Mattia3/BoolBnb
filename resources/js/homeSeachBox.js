import { services } from '@tomtom-international/web-sdk-services';
import SearchBox from '@tomtom-international/web-sdk-plugin-searchbox';

let searchbox = document.getElementById('ttSearch');
var APIKEY = 'cYIXTXUp7yVKyDMAcyRlG3xxdxXtmotj';
var options = {
    searchOptions: {
        key: APIKEY,
        language: 'it-IT',
        limit: 5,
    },
    autocompleteOptions: {
        key: APIKEY,
        language: 'it-IT'
    },
    placeholder: "Dove vuoi andare?"
};

var ttSearchBox = new SearchBox(services, options);
var searchBoxHTML = ttSearchBox.getSearchBoxHTML();
searchbox.append(searchBoxHTML);

// ----------

ttSearchBox.on('tomtom.searchbox.resultselected', function (event)
{
    // console.log(event.data.result);
    const results = event.data.result.position;
    sessionStorage.setItem('location', JSON.stringify(results));
    window.location.href = '/search';
});