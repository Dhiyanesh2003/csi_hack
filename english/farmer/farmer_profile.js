console.log("Profile script loaded...");

// Get user's profile data fom database and assgin to variables here....
// ..........

let userName = "Dhiyanesh S";
let phone = "7338942092";
let mailId = "dhiyanesh7338942092@gmail.com";
let address = "2/158 Kalaimagal Nagar 2nd Cross Street, Karapakkam, Chennai 97";

//loads data into DOM...
let nameLabel = document.getElementById("userName");
nameLabel.innerHTML = userName;
let phoneLabel = document.getElementById("phone");
phoneLabel.innerHTML = phone;
let mailLabel = document.getElementById("mailId");
mailLabel.innerHTML = mailId;
let addressLabel = document.getElementById("address");
addressLabel.innerHTML = address;

const get_input = () => {
  event.preventDefault();
  let Details_cont = document.getElementById("profile_form");
  Details_cont.innerHTML =
    "<label class='det'>User Name: </label><input id='nameField' class='det' type='text' value='" +
    userName +
    "' /><label class='det'>Phone Number: </label><input id='phoneField' class='det' type='text' value='" +
    phone +
    "'  /><label class='det'>E-mail ID: </label><input id='mailField' class='det' type='text' value='" +
    mailId +
    "' /><label class='det'>Address: </label><input id='addressField' class='det' type='text' value='" +
    address +
    "'/><br />";
  let edit_button = document.getElementById("edit_button");
  edit_button.style.display = "none";
  let save_button = document.getElementById("save_button");
  save_button.style.display = "block";
};

const save_input = () => {
  event.preventDefault();
  let new_userName = document.getElementById("nameField").value;
  let new_phone = document.getElementById("phoneField").value;
  let new_mailId = document.getElementById("mailField").value;
  let new_address = document.getElementById("addressField").value;

  //   Upload these new values to profile data in database
  //   ..............
  userName = new_userName;
  phone = new_phone;
  mailId = new_mailId;
  address = new_address;

  //   updating the GUI
  let Details_cont = document.getElementById("profile_form");
  Details_cont.innerHTML =
    "<label class='det'>User Name: </label><span id='userName'>" +
    new_userName +
    "</span><label class='det'>Phone Number: </label><span id='phone'>" +
    new_phone +
    "</span><label class='det'>E-mail ID: </label><span id='mailId'>" +
    new_mailId +
    "</span><label class='det'>Address: </label><span id='address'> " +
    new_address +
    "</span><br>";
  let edit_button = document.getElementById("edit_button");
  edit_button.style.display = "block";
  let save_button = document.getElementById("save_button");
  save_button.style.display = "none";
};
