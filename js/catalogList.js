const screenWidth = window.screen.width;

const haederCatalogList = document.querySelector(".haeder__catalogList");
const currencyMobile = document.querySelector(".haeder__catalogList .currency");
const catalogListNav = document.querySelector(".catalogList__nav");
const filterTitle = document.querySelector(".filter__title");
const catalogListFilter = document.querySelector(".catalogList__filter");
const filterContent = document.querySelector(".filter__content");
const filterCatalog = document.querySelectorAll(".catalogList__filter li");

console.log(currencyMobile);

const addFilter__content = () => {
  if (screenWidth <= 950) {
    catalogListNav.classList.add("d-none");
    filterTitle.classList.add("d-none");
    catalogListFilter.classList.add("d-none");
    currencyMobile.classList.add("d-none");
  }

  filterContent.innerHTML = "";

  filterContent.insertAdjacentHTML(
    "beforeend",
    `   <div class="content__header"> 
            <img src="./img/Arrow btn back.png" alt=""/> 
            <span>Женщинам</span>
        </div>

        <ul> 
            <li><a href="#">Платья и сарафаны</a></li>
            <li><a href="#">Блузки и рубашки</a></li>
            <li><a href="#">Туники</a></li>
            <li><a href="#">Брюки и шорты</a></li>
            <li><a href="#">Юбки</a></li>
            <li><a href="#">Костюмы</a></li>
            <li><a href="#">Верхняя одежда</a></li>
            <li><a href="#">Кордиганы, джемпера, кофты и свитера</a></li>
            <li><a href="#">Водолазки</a></li>
            <li><a href="#">Фтуболки и топы</a></li>
            <li><a href="#">Жилеты</a></li>
            <li><a href="#">Пиджаки и жакеты</a></li>
            <li><a href="#">Толстовки</a></li>
            <li><a href="#">Халаты</a></li>
            <li><a href="#">Одежда ждля беременных</a></li>
            <li><a href="#">Бельё</a></li>
            <li><a href="#">Комбинезоны</a></li>
            <li><a href="#">Женские карнавальные костюмы</a></li>
        </ul> `
  );

  const catalogListContentHeader = document.querySelector(".content__header");

  catalogListContentHeader.addEventListener("click", () => {
    if (screenWidth <= 950) {
      filterContent.innerHTML = "";

      catalogListNav.classList.remove("d-none");
      filterTitle.classList.remove("d-none");
      catalogListFilter.classList.remove("d-none");
      currencyMobile.classList.remove("d-none");
    }
  });
};

filterCatalog.forEach((item) => {
  item.addEventListener("click", () => {
    addFilter__content();
  });
});

const currencyListMobile = document.querySelectorAll(
  ".currency-list-mobile li"
);

const changeCurrencyMobile = () => {
  const id = localStorage.getItem("currency-mobile");

  if (id) {
    currencyListMobile.forEach((item) => {
      if (item.getAttribute("data-id") === id) {
        item.classList.add("active");

        return;
      }

      item.classList.remove("active");
    });
  } else {
    localStorage.setItem("currency-mobile", "1");

    changeCurrencyMobile();
  }
};

changeCurrencyMobile();

currencyListMobile.forEach((item) => {
  item.addEventListener("click", () => {
    localStorage.setItem("currency-mobile", item.getAttribute("data-id"));

    changeCurrencyMobile();
  });
});
