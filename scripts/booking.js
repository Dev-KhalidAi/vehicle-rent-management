var bookNowButton = document.getElementsByClassName("book-car");
// bookNowButton.addEventListener("click", bookNow);
for (var j = 0; j < bookNowButton.length; j++) {
  bookNowButton[j].addEventListener("click", bookNow);
}
var namee = document.querySelector(".name");
var carsInfo = [];

function bookNow(index) {
  for (var i = 0; i < index.target.nextElementSibling.children.length; i++) {
    carsInfo[i] =
      index.target.nextElementSibling.children[i].children[1].textContent;
  }

  carsInfo[4] = index.target.parentElement.children[0].src;

  location.href =
    "./checkout.php?name=" +
    carsInfo[0] +
    "  " +
    carsInfo[1] +
    "&price=" +
    carsInfo[3] +
    "&image=" +
    carsInfo[4];
}
