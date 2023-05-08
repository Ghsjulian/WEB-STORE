"use strict";
import { fetch_All } from "./fetch.js";
function $(selector) {
  return document.querySelector(selector);
}

/*============Menu Icons Showing===========*/
$("#menu").onclick = (e) => {
  e.preventDefault();
  $(".side-bar").classList.toggle("mobile");
  //var cs = getComputedStyle($(".side-bar"));
  //var display = cs.getPropertyValue("display");
  /*  if (display == "none") {
    $(".side-bar").style.display = "block";
  } else {
    $(".side-bar").style.display = "none";
  }*/
};
/*
var links = $(".side-bar").querySelectorAll("a");
links.forEach((element) => {
  element.onclick = (e) => {
    e.preventDefault();
    $(".side-bar").classList.toggle("mobile");
  };
});
*/

$(".__confirm").onclick = (e) => {
  e.preventDefault();
  var error = [];
  var frm = $("#myfrm");
  var err = $("._error");
  var success = $("._success");
  var user_name = $("#user_name").value.trim();
  var user_location = $("#location").value.trim();
  var user_phone = $("#user_phone").value.trim();
  var form_data = new FormData(frm);

  if (user_name == "") {
    error[0] = "Enter Full Name";
    err.style.display = "block";
    err.textContent = error[0];
  } else if (user_location == "") {
    error[0] = "Enter Your Location";
    err.style.display = "block";
    err.textContent = error[0];
  } else if (user_phone == "") {
    error[0] = "Enter Phone Number";
    err.style.display = "block";
    err.textContent = error[0];
  } else {
    error[0] = "";
  }
  if (error[0] == "") {
    err.style.display = "none";
    success.style.display = "block";
    fetch_All({ url: "public/server/__function__.php", body: form_data });
  }
};
