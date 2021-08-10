var checkAvailable = document
  .getElementById("availablity-button")
  .addEventListener("click", showAvailablity);
var availablity = document.getElementById("available");
var cancelButton = document.getElementById("cancel-btn");
cancelButton.addEventListener("click", backToBook);
var checkoutButton = document.querySelector(".checkout");
var checkoutBox = document.querySelector(".checkout-box");
var calculatePrice = document
  .getElementById("price-button")
  .addEventListener("click", showPrice);
var price = document.getElementById("price");
checkoutButton.addEventListener("click", openCheckout);
var detailsBox = document.querySelector(".details-box");
var pickDate = document.querySelector(".pick");
var dropDate = document.querySelector(".drop");
var pickTime = document.querySelector(".pickTime");
var dropTime = document.querySelector(".dropTime");
var errorFill = document.querySelector(".fill");
var errorCorrect = document.querySelector(".correct");
var diffDays = 0;
var carPrice = document.querySelector(".car-price");
var totalPrice = document.querySelector(".totalPrice");
var notAvailable = document.getElementById("not-available");
var pickDateSumm = document.querySelector("#pickDateSumm");
var dropDateSumm = document.querySelector("#dropDateSumm");
var pickTimeSumm = document.querySelector("#pickTimeSumm");
var dropTimeSumm = document.querySelector("#dropTimeSumm");
var editButton = document.querySelector("#edit-btn");
editButton.addEventListener("click", backToDetails);

var checkoutSubmit = document.querySelector("#checkout-btn");
checkoutSubmit.addEventListener("click", fillInfo);
function showAvailablity() {
  // availablity.style.display = "block";
  // checkoutButton.style.display = "block";
  errorFill.style.display = "none";
  errorCorrect.style.display = "none";

  const date1 = new Date(pickDate.value);
  const date2 = new Date(dropDate.value);
  const diffTime = date2 - date1;
  diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

  if (
    pickDate.value == "" ||
    dropDate.value == "" ||
    pickTime.value == "" ||
    dropTime.value == ""
  ) {
    errorFill.style.display = "block";
  } else if (diffDays <= 0) {
    errorCorrect.style.display = "block";
  } else {
    availablity.style.display = "block";
    if (notAvailable != null) {
      checkoutButton.style.display = "none";
    } else {
      checkoutButton.style.display = "block";
    }
  }
}

function showPrice() {
  errorFill.style.display = "none";
  errorCorrect.style.display = "none";
  const date1 = new Date(pickDate.value);
  const date2 = new Date(dropDate.value);
  const diffTime = date2 - date1;
  diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

  if (
    pickDate.value == "" ||
    dropDate.value == "" ||
    pickTime.value == "" ||
    dropTime.value == ""
  ) {
    errorFill.style.display = "block";
  } else if (diffDays <= 0) {
    errorCorrect.style.display = "block";
  } else {
    price.style.display = "block";
    price.innerHTML = diffDays * parseInt(carPrice.textContent) + " SAR";
  }
}

function openCheckout(index) {
  pickDateSumm.innerHTML = pickDate.value;
  dropDateSumm.innerHTML = dropDate.value;
  pickTimeSumm.innerHTML = pickTime.value;
  dropTimeSumm.innerHTML = dropTime.value;
  document.getElementById("pickdate").value = pickDate.value;
  document.getElementById("dropdate").value = dropDate.value;
  document.getElementById("picktime").value = pickTime.value;
  document.getElementById("droptime").value = dropTime.value;
  document.getElementById("droptime").value = dropTime.value;
  checkoutBox.style.display = "block";
  detailsBox.style.display = "none";
  totalPrice.innerHTML = diffDays * parseInt(carPrice.textContent);
  index.preventDefault();
  console.log(window.location.href);
}

function backToBook(index) {
  if (confirm("Are you sure you want to cancel (Data will not be saved)")) {
    location.href = "./booking.php";
  }
  index.preventDefault();
}

function backToDetails(index2) {
  checkoutBox.style.display = "none";
  detailsBox.style.display = "block";
  index2.preventDefault();
  availablity.style.display = "none";
  checkoutButton.style.display = "none";
  price.style.display = "none";
}

function fillInfo() {
  document.getElementById("pricedb").value =
    document.querySelector(".totalPrice").textContent;
  document.getElementById("carname").value =
    document.querySelector(".carname").textContent;
}
