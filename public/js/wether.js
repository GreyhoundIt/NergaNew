$(document).ready(function() {
    getLocation().then(function(data) {
        var city = data.city;
        getWeather(city).then(function(data) {
            var weatherType = data.weather[0].description;
            var weatherId = data.weather[0].icon;
            var tempF = Math.round(data.main.temp);
            var tempC = Math.round((tempF - 32) / 1.8);
            var wind = data.wind.speed;
            console.log(weatherType);
            $('#weather').html(weatherType);
            $('#icon').html('<img src="http://openweathermap.org/img/w/'+weatherId+'.png"/>');
            $('#tempC').html(tempC + "&#176;C");
            $('#tempF').html(tempF + "&#176;F");
            $('#wind').html(wind + " mph");
        })
    });
});


function getWeather(place) {
    return $.getJSON('http://api.openweathermap.org/data/2.5/weather?q=' + place + '&units=imperial&APPID=90d625c068e3f3d7818b9e4237871e21');
}