var map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 12
  });
  infoWindow = new google.maps.InfoWindow();

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      function(position) {
        var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };

        //infoWindow.setPosition(pos);
        //infoWindow.setContent('Location found.');
        //infoWindow.open(map);
        map.setCenter(pos);
      },
      function() {
        handleLocationError(true, infoWindow, map.getCenter());
      }
    );
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(
    browserHasGeolocation
      ? "Error: The Geolocation service failed."
      : "Error: Your browser doesn't support geolocation."
  );
  infoWindow.open(map);
}

function getLocation() {
  var currentLat = map.getCenter().lat();
  var currentLon = map.getCenter().lng();
  console.log(currentLat + " " + currentLon);
  getWeatherInfo(currentLat, currentLon);
}

function getWeatherInfo(latitude, longitude) {
  var data_file =
    "http://api.openweathermap.org/data/2.5/weather?lat=" +
    latitude +
    "&lon=" +
    longitude +
    "&units=metric&APPID=bcc4494fab8d013bf08572bf17c0b460";
  var http_request = new XMLHttpRequest();
  try {
    // Opera 8.0+, Firefox, Chrome, Safari
    http_request = new XMLHttpRequest();
  } catch (e) {
    // Internet Explorer Browsers
    try {
      http_request = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try {
        http_request = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e) {
        // Something went wrong
        alert("Your browser broke!");
        return false;
      }
    }
  }

  http_request.onreadystatechange = function() {
    if (http_request.readyState == 4) {
      var weatherObject = JSON.parse(http_request.responseText);
      console.log(weatherObject);
      createCard(latitude, longitude, weatherObject);
    } else {
      //console.log(http_request.readyState);
    }
  };

  http_request.open("GET", data_file, true);
  http_request.send();
}

function createCard(lati, long, json) {
  var pos = {
    lat: lati,
    lng: long
  };

  //console.log(json.weather[0].description);
  infoWindow = new google.maps.InfoWindow();
  infoWindow.setPosition(pos);
  if (json.weather[0].description == "clear sky" && json.main.temp > 20) {
    infoWindow.setContent(
      '<div class="infoWindow">' +
        "<h3>" +
        "YES, It's sunny here and " +
        json.main.temp +
        "° !" +
        "</h3>" +
        '<img src="img/tenor.gif" width="100px" height="100px" >' +
        '<a href="http://www.google.com/search?q=Cheap+tickets+' +
        json.id +
        '">' +
        "<h3>" +
        "Book a flight to " +
        json.id +
        " ?" +
        "</h3>" +
        "</a>" +
        "</div>"
    );
  } else {
    infoWindow.setContent(
      '<div class="infoWindow">' +
        "<h3>" +
        "NO, there is a " +
        json.weather[0].description +
        " in:" +
        "</h3>" +
        '<img src="img/rain.gif" width="100px" height="100px" >' +
        "<h3>" +
        json.id +
        json.name +
        "</h3>" +
        "</div>"
    );
  }

  infoWindow.open(map);
}
