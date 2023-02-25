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
// console.log("working");

window.weatherWidgetConfig = window.weatherWidgetConfig || [];
window.weatherWidgetConfig.push({
  selector: ".weatherWidget",
  apiKey: "JG3428A3BRXBAEDVAC2ZQB9H9",
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

let prod_container;

const rings_data = [
  { name: "SeaWave", location: "images/rings/r1.jpg", price: 2500 },
  { name: "Candle", location: "images/rings/r2.jpg", price: 3000 },
  { name: "Maurice", location: "images/rings/r3.jpg", price: 4500 },
  { name: "SunFlower", location: "images/rings/r4.jpg", price: 12500 },
  { name: "SweetHearts", location: "images/rings/r5.jpg", price: 5500 },
  { name: "Aztecs", location: "images/rings/r6.jpg", price: 2900 },
  { name: "Meduza", location: "images/rings/r7.jpeg", price: 3500 },
  { name: "Rae Lil", location: "images/rings/r8.jpeg", price: 5000 },
  { name: "Venom", location: "images/rings/r9.jpg", price: 2500 },
  { name: "Scarlit", location: "images/rings/r10.jpg", price: 4500 },
];

// const brace_data = [
//   { name: "Maeve", location: "images/brace/b1.jpg", price: 2500 },
//   { name: "Monica", location: "images/brace/b2.jpeg", price: 3000 },
//   { name: "Kagayama", location: "images/brace/b3.jpg", price: 4500 },
//   { name: "Hearts", location: "images/brace/b4.jpeg", price: 12500 },
//   { name: "Double-hearts", location: "images/brace/b5.jpeg", price: 5500 },
//   { name: "Stars", location: "images/brace/b6.jpg", price: 2900 },
//   { name: "Daisy", location: "images/brace/b7.jpeg", price: 3500 },
//   { name: "Flowers", location: "images/brace/b8.png", price: 5000 },
//   { name: "Venom", location: "images/brace/b9.jpeg", price: 2500 },
//   { name: "Bexxy", location: "images/brace/b10.jpeg", price: 4500 },
// ];

// const chain_data = [
//   { name: "BigHeart", location: "images/chains/c1.jpeg", price: 25000 },
//   { name: "Sandal Tower", location: "images/chains/c2.jpeg", price: 30000 },
//   { name: "LuckyLeaf", location: "images/chains/c3.jpeg", price: 40500 },
//   { name: "Five Spade", location: "images/chains/c4.png", price: 10500 },
//   { name: "Diamond-hearts", location: "images/chains/c5.jpeg", price: 59500 },
//   { name: "Dolphin", location: "images/chains/c6.jpg", price: 20900 },
//   { name: "Baby feet", location: "images/chains/c7.jpeg", price: 35700 },
//   { name: "Ohm jai", location: "images/chains/c8.jpeg", price: 55000 },
//   { name: "S-Love", location: "images/chains/c9.jpeg", price: 23500 },
//   { name: "Marvel", location: "images/chains/c10.jpeg", price: 45400 },
// ];

let Datum = [rings_data, brace_data, chain_data];

const displayer = (choice) => {
  prod_container = document.getElementById("prod_container");

  if (choice === "ring") {
    data = Datum[0];
  } else if (choice === "chain") {
    data = Datum[1];
  } else {
    data = Datum[2];
  }
  console.log(choice);
  prod_container.removeChild(prod_container.firstElementChild);

  let items = document.createElement("div");
  items.classList.add("items");
  for (let j = 0; j < 2; j++) {
    let row_div = document.createElement("div");
    row_div.classList.add("row");
    for (let i = 0; i < 5; i++) {
      let col_div = document.createElement("div");
      col_div.classList.add("col");
      let card = document.createElement("div");
      card.classList.add("card");
      let image = document.createElement("img");
      image.src = data[i + 5 * j].location;
      image.classList.add("card-img-top");
      card.append(image);
      let card_body = document.createElement("div");
      card_body.classList.add("card-body");
      let card_title = document.createElement("h5");
      card_title.classList.add("card-title");
      card_title.innerText = data[i + 5 * j].name;
      card_body.append(card_title);
      let card_text = document.createElement("p");
      card_text.classList.add("card-text");
      card_text.innerText = "$" + data[i + 5 * j].price;
      card_body.append(card_text);
      let button = document.createElement("a");
      button.onclick = buy;
      button.classList.add("btn");
      button.classList.add("btn-danger");
      button.innerText = "Buy";
      button.href = "#";
      card_body.append(button);
      card.append(card_body);
      col_div.append(card);
      row_div.append(col_div);
    }
    items.append(row_div);
  }
  prod_container.append(items);
};

//   const buy = (e) => {
//     document.getElementById("overlay").style.display = "flex";
//     document.getElementById("buyer").style.display = "block";
//     e.preventDefault();
//     console.log("Buy");
//   };

//   const back = () => {
//     document.getElementById("overlay").style.display = "none";
//     document.getElementById("buyer").style.display = "none";
//   };

//   const success = () => {
//     document.getElementById("overlay").style.display = "none";
//     document.getElementById("buyer").style.display = "none";
//     alert("Your Order has been placed Successfully!!!!");
//   };
