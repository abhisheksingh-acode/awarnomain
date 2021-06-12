// dropdown FAQs

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

// toggle template fields

var pageSelect = document.querySelector("#pageSelect");

pageSelect.addEventListener("change", (e) => {
  let page = e.target.value;
  let con;
  switch (page) {
    case "web":
      con = 1;
      break;
    case "app":
      con = 2;
      break;
    case "digital marketing":
      con = 0;
      break;

    default:
      con = 0;
      break;
  }
  if (con == 1) {
    document.querySelector(".selectWeb").style.display = "block";
  } else {
    document.querySelector(".selectWeb").style.display = "none";
  }
});

// ajax request for dependent india states

document.querySelector("#selectState").addEventListener("change", (e) => {
  let xml = new XMLHttpRequest();

  xml.open("GET", "ajax.php?country=" + e.target.value, true);
  xml.send();

  xml.onreadystatechange = () => {
    if (xml.readyState == 4 && xml.status == 200) {
      document.querySelector("#stateList").innerHTML = xml.responseText;
    }
  };
});

// // ajax for delete query

// document.querySelectorAll('a').forEach((e)=>{
//   e.addEventListener('click',(v)=>{
//     let ajax = new XMLHttpRequest();
//     ajax.open('GET','ajax.php?',true);

//     ajax.send();

//   })
// })

// rich text editor

// var editor2cfg = {};
// editor2cfg.toolbar = "basic";
// var RTE = new RichTextEditor("#postEditor2", editor2cfg);

// prevent form to refresh page

// document.querySelectorAll("form").forEach((e) => {
//   e.addEventListener("submit", (v) => {
//     // v.preventDefault();
//   });
// });
