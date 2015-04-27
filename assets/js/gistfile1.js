/**
 * Author: Richard Willis - badsyntax.co
 * Example here:  http://demos.badsyntax.co/places-search-bootstrap/example.html
 *
 * Please note: This is not a reliable method of geocoding the address. Using the 
 * PlacesService is a much better approach. View the example above for an example 
 * of using the PlacesService to geocode the address.
 */

var service = new google.maps.places.AutocompleteService();
var geocoder = new google.maps.Geocoder();

$(field).typeahead({
  source: function(query, process) {
    service.getPlacePredictions({ input: query }, function(predictions, status) {
      if (status == google.maps.places.PlacesServiceStatus.OK) {
        process($.map(predictions, function(prediction) {
          return prediction.description;
        }));
      }
    });
  },
  updater: function (item) {
    geocoder.geocode({ address: item }, function(results, status) {
      if (status != google.maps.GeocoderStatus.OK) {
        alert('Cannot find address');
        return;
      }
      map.setCenter(results[0].geometry.location);
      map.setZoom(12); 
    });
    return item;
  }
});