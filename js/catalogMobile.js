const sortBtn = document.querySelector(".mobile-button .sort");
const windowSort = document.querySelector(".mobile .sort");
const windowSortBG = document.querySelector(".mobile .sort-bacground");

console.log(sortBtn);

sortBtn.addEventListener("click", () => {
  windowSort.classList.remove("d-none");
  windowSortBG.classList.remove("d-none");
});

windowSortBG.addEventListener("click", () => {
  windowSort.classList.add("d-none");
  windowSortBG.classList.add("d-none");
});

const rangeSlider = document.querySelector("#range-slider-mobile");
const input1 = document.querySelector("#input-1-mobile");
const input2 = document.querySelector("#input-2-mobile");
const inputs = [input1, input2];

if (rangeSlider) {
  noUiSlider.create(rangeSlider, {
    start: [1, 999999],
    connect: true,
    step: 1,
    range: {
      min: [1],
      max: [999999],
    },
  });

  rangeSlider.noUiSlider.on("update", (values, handle) => {
    inputs[handle].value = Math.round(values[handle]);
  });
}

const filterCloseBtn = document.querySelector(".mobile-filter .button-ext img");
const filterBtn = document.querySelector(".mobile-button .filter");
const filterWindowBG = document.querySelector(".mobile .filter-bacground");
const filterWindow = document.querySelector(".mobile .mobile-filter");

filterBtn.addEventListener("click", () => {
  filterWindowBG.classList.remove("d-none");
  filterWindow.classList.remove("d-none");
});

filterWindowBG.addEventListener("click", () => {
  filterWindow.classList.add("d-none");
  filterWindowBG.classList.add("d-none");
});

filterCloseBtn.addEventListener("click", () => {
  filterWindow.classList.add("d-none");
  filterWindowBG.classList.add("d-none");
});
