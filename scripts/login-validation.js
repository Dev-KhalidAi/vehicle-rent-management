// -----Login Page Validation-----

var loginButton = document.getElementById("login-button");
loginButton.addEventListener("click", checkFieldLogin);

var usernameLogin = document.getElementById("username");
var passwordLogin = document.getElementById("password");
var errorMsgUser = document.querySelector(".error-user");

function checkFieldLogin(event) {
  loginButton.disabled = false;

  if (usernameLogin.value == "" || passwordLogin.value == "") {
    loginButton.disabled = true;
    errorMsgUser.style.display = "block";
  } else {
    errorMsgUser.style.display = "none";
    loginButton.disabled = false;
  }
}
