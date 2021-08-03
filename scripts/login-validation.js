// -----Login Page Validation-----

var loginButton = document
  .getElementById("login-button")
  .addEventListener("click", checkFieldLogin);
var usernameLogin = document.getElementById("username");
var passwordLogin = document.getElementById("password");
var errorMsgUser = document.querySelector(".error-user");

function checkFieldLogin(event) {
  if (usernameLogin.value == "" || passwordLogin.value == "") {
    errorMsgUser.style.display = "block";
  } else {
    errorMsgUser.style.display = "none";
  }
  event.preventDefault();
}
