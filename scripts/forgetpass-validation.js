var retrievePass = document
  .getElementById("retrieve")
  .addEventListener("click", checkField);
var email = document.getElementById("email");
var errorMsg = document.querySelector(".error-field");

function checkField(event) {
  if (email.value == "") {
    errorMsg.style.display = "block";
  } else {
    errorMsg.style.display = "none";
  }
  event.preventDefault();
}
