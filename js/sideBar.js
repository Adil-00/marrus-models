const rangeSliderMobile = document.querySelector("#range-slider");
const input1Mobile = document.querySelector("#input-1");
const input2Mobile = document.querySelector("#input-2");
const inputsMobile = [input1, input2];

if (rangeSliderMobile) {
  noUiSlider.create(rangeSliderMobile, {
    start: [1, 999999],
    connect: true,
    step: 1,
    range: {
      min: [1],
      max: [999999],
    },
  });

  rangeSliderMobile.noUiSlider.on("update", (values, handle) => {
    inputs[handle].value = Math.round(values[handle]);
  });
}

const categoryes = document.querySelectorAll(".category");

categoryes.forEach((category) => {
  category.childNodes[1].addEventListener("click", () => {
    if (!category.classList.contains("category__active"))
      return category.classList.add("category__active");

    category.classList.remove("category__active");
  });
});

const filters = document.querySelectorAll(".filter");

filters.forEach((filter) => {
  filter.childNodes[1].addEventListener("click", () => {
    if (!filter.classList.contains("filter__active"))
      return filter.classList.add("filter__active");

    filter.classList.remove("filter__active");
  });
});
