var acc = document.getElementsByClassName("drop-down-menu");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active-drop-down");

    /* Toggle between hiding and showing the active panel */
  });
}

var pageSelect = document.querySelector("#pageSelect");

pageSelect.addEventListener("change", (e) => {
  let page = e.target.value;
  let con;
  switch (page) {
    case "web":
      con = 1;
      break;
    case "mobile":
      con = 2;
      break;
    case "portfolio":
      con = 0;
      break;
    case "contact":
      con = 0;
      break;
    case "career":
      con = 0;
      break;

    default:
      con = 0;
      break;
  }
  if (con == 1) {
    document.querySelector("#homePageSectionData").style.display = "block";
  } else {
    document.querySelector("#homePageSectionData").style.display = "none";
  }
});
