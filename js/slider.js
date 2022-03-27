const sliderItem = document.querySelectorAll(".payment__midImg");

sliderItem.forEach((item) => {
  item.addEventListener("click", () => {
    const sliderItemActive = document.querySelectorAll(
      ".payment__content .active"
    );

    sliderItemActive.forEach((item) => {
      item.classList.remove("active");
    });

    item.classList.add("active");
  });
});
