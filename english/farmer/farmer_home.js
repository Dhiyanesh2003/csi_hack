//   let city_ = "";
//   let country_ = "";
//   let url = "http://ipinfo.io/json";
//   const locator = () => {
//     fetch(url)
//       .then((res) => res.json())
//       .then((out) => {
//         city_ = out.city;
//         country_ = out.country;
//         console.log(city_ + ", " + country_);
//       })
//       .catch((err) => {
//         city_ = "Chennai";
//       });
//   };
//   locator;
//   console.log(city_, country_, "asd");
console.log("Weather forecast Loaded...");

window.weatherWidgetConfig = window.weatherWidgetConfig || [];
window.weatherWidgetConfig.push({
  selector: ".weatherWidget",
  // apiKey: "JG3428A3BRXBAEDVAC2ZQB9H9",
  location: "Chennai",
  unitGroup: "metric",
  forecastDays: 5,
  title: "Chennai, IN",
  showTitle: true,
  showConditions: true,
});

(function () {
  var d = document,
    s = d.createElement("script");
  s.src =
    "https://www.visualcrossing.com/widgets/forecast-simple/weather-forecast-widget-simple.js";
  s.setAttribute("data-timestamp", +new Date());
  (d.head || d.body).appendChild(s);
})();
