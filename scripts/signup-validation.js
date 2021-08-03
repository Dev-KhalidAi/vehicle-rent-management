// -----Signup Page Validation-----

var signupButton = document
  .getElementById("signup-button")
  .addEventListener("click", checkFieldSignup);
var firstname = document.getElementById("firstname");
var lastname = document.getElementById("lastname");
var email = document.getElementById("email");
var usernameSignup = document.getElementById("username-signup");
var passwordSignup = document.getElementById("password-signup");
var rePassword = document.getElementById("re-password");
var signupButton = document
  .getElementById("signup-button")
  .addEventListener("click", checkFieldSignup);
var errorMsgFields = document.querySelector(".error-field");
var errorMsgRePass = document.querySelector(".error-repass");

function checkFieldSignup(event) {
  console.log("hi");
  if (
    firstname.value == "" ||
    lastname.value == "" ||
    email.value == "" ||
    usernameSignup.value == "" ||
    passwordSignup.value == "" ||
    rePassword.value == ""
  ) {
    errorMsgFields.style.display = "block";
  } else {
    errorMsgFields.style.display = "none";

    if (passwordSignup.value != rePassword.value) {
      errorMsgRePass.style.display = "block";
    } else {
      errorMsgRePass.style.display = "none";
    }
  }

  event.preventDefault();
}
