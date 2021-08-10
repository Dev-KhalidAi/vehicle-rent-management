const header = document.querySelector(".header");

window.onscroll = () => {
  if (this.scrollY >= 200) {
    header.style.background = "black";
    header.style.zIndex = "2";
    header.style.padding = "0px 50px 0px 50px";
    header.style.borderRadius = " 0px 0px 20px 20px";
    header.style.top = "0";
  } else if (this.scrollY == 0) {
    header.style.top = "-100px";
    header.style.background = "";
    header.style.width = "";
  }
};
