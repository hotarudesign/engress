"use strict";
const acBtn = document.querySelectorAll(".faq__item__body-btn");
const showAnswer = document.querySelectorAll(".faq__item__answer");

for (let i = 0; i < acBtn.length; i++) {
  acBtn[i].addEventListener("click", () => {
    acBtn[i].classList.toggle("is-open");
    showAnswer[i].classList.toggle("is-show");
  });
}

window.addEventListener("DOMContentLoaded", () => {
  [].forEach.call(document.querySelectorAll("[data-href]"), function (x) {
    x.addEventListener("click", () => {
      location.href = x.dataset["href"];
    });
  });
});
