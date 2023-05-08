"use strict";
import { feelings , doing } from "./feelings.js";
import { fetch_All } from "./fetch.js";

function $(selector) {
  return document.querySelector(selector);
}

export function search(text) {
  var question = text.toLowerCase();
  if (
    question.includes("hi") ||
    question.includes("hii") ||
    question.includes("hello") ||
    question.includes("hey") ||
    question.includes("hy")
  ) {
    return "Yes ! I'm SIRI . I'm a virtual assistant . how may i help you sir ?";
  } else if (
    question.includes("what is your name") ||
    question.includes("who are you") ||
    question.includes("what's your name") ||
    question.includes("tell me about yourself") ||
    question.includes("your name") ||
    question.includes("about yourself")
  ) {
    return "Hello ! I'm SIRI . I'm a virtual assistant !";
  } else if (
    question.includes("what is fvourite color") ||
    question.includes("your color") ||
    question.includes("what's your color") ||
    question.includes("tell me about preference") ||
    question.includes("your favourite color") ||
    question.includes("about theme") ||
    question.includes("which color do you like") ||
    question.includes("do you like color")
  ) {
    return "Wow as an AI , I've also likes and dislikes . Yes I love colors and my favourite color is BLUE and GREEN .";
  } else if (
    question.includes("what is your boss name") ||
    question.includes("your boss") ||
    question.includes("what's your creators name") ||
    question.includes("tell me about your boss") ||
    question.includes("your creator") ||
    question.includes("about your creator") ||
    question.includes("who made you") ||
    question.includes("who make you") ||
    question.includes("who developed you") ||
    question.includes("your developer") ||
    question.includes("what's your maker name") ||
    question.includes("tell me about your developer") ||
    question.includes("who created you") ||
    question.includes("your favourite developer") ||
    question.includes("who has made you") ||
    question.includes("who has created you")
  ) {
    return `Sure sir , Ghs Julian He is a web developer and web desginer . Has created me . You can know more about
    himself . If you want i can give you his contact details . Thank You !`;
  } else if (
    question.includes("how are you") ||
    question.includes("are you okay") ||
    question.includes("how are you doing") ||
    question.includes("how are you feeling today") ||
    question.includes("what's up")
  ) {
    var random = Math.floor(Math.random() * feelings.length);
    return feelings[random];
    /* fetch_All({
      url: "public/server/index.json",
      method: "POST",
      body: new FormData(),
    });*/
  } else if (
    question.includes("how are you") ||
    question.includes("are you okay") ||
    question.includes("how are you doing") ||
    question.includes("how are you feeling today") ||
    question.includes("what's up")
  ) {
    var random = Math.floor(Math.random() * feelings.length);
    return feelings[random];
    /* fetch_All({
      url: "public/server/index.json",
      method: "POST",
      body: new FormData(),
    });*/
    } else if (
    question.includes("what are you doing") ||
    question.includes("are you working") ||
    question.includes("are you free") ||
    question.includes("what are you doing now") ||
    question.includes("are you doing something")
  ) {
    var rand = Math.floor(Math.random() * doing.length);
    return doing[rand];
    /* fetch_All({
      url: "public/server/index.json",
      method: "POST",
      body: new FormData(),
    });*/
  } else {
    return "I Dont't Understand Sir !";
  }
}
