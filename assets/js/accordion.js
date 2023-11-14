const toggleBtn = document.querySelectorAll(".js-accordionButton");
const accordionContents = document.querySelectorAll(".accordion-content");

toggleBtn.forEach((button, index) => {
  button.addEventListener("click", () => {
    accordionContents[index].classList.toggle("is-open");

    if (accordionContents[index].classList.contains("js-accordion-1")) {
      accordionContents[index].classList.add("is-seimai5kg");
    }
  });
});
