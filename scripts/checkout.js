var checkAvailable = document
  .getElementById("availablity-button")
  .addEventListener("click", showAvailablity);

var availablity = document.getElementById("available");
var checkoutButton = document.querySelector(".checkout");
var checkoutBox = document.querySelector(".checkout-box");
var calculatePrice = document
  .getElementById("price-button")
  .addEventListener("click", showPrice);

var price = document.getElementById("price");

checkoutButton.addEventListener("click", openCheckout);

var detailsBox = document.querySelector(".details-box");

function showAvailablity() {
  availablity.style.display = "block";
  checkoutButton.style.display = "block";
}

function showPrice() {
  price.style.display = "block";
}

function openCheckout() {
  checkoutBox.style.display = "block";
  detailsBox.style.display = "none";
}
