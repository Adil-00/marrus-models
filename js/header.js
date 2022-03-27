const widthScreen = window.screen.width;

const headerUp = document.querySelector(".header__up");
const headerUpHeight = headerUp.offsetHeight;

const haederNav = document.querySelector(".header__nav");
const haederNavHeight = haederNav.offsetHeight;

const haederMid = document.querySelector(".header__mid");
const haederMidHeight = haederMid.offsetHeight;

const haederFilter = document.querySelector(".header__filter");
const haederFilterHeight = haederFilter.offsetHeight;

const haederLogoVioltet = document.querySelector(".header__logoViolet");
const haederCatalog = document.querySelector(".header__catalog");
const headerCatalogList = document.querySelector(".haeder__catalogList");

const catalogBtnClose = document.querySelector(".catalog__btnClose");
const catalogBurgerMenu = document.querySelector(".catalog__burgerMenu");

const headerSearch = document.querySelector(".header__search");

const user = {
  name: "vasa",
  getName: () => this.name,
};

console.log(user.getName());

window.addEventListener("scroll", () => {
  let scrollDistance = window.scrollY;

  if (scrollDistance >= headerUpHeight + haederNavHeight && widthScreen > 768) {
    haederMid.classList.add("p-fixed");
    haederFilter.style.marginTop = `${haederMidHeight}px`;
    haederLogoVioltet.classList.add("d-none");
    haederCatalog.classList.remove("d-none");
  } else if (scrollDistance >= headerUpHeight && widthScreen <= 768) {
    haederMid.classList.add("p-fixed");
    headerUp.style.marginBottom = `${100 + 48}px`;
  } else {
    headerUp.style.marginBottom = `0px`;
    haederFilter.style.marginTop = `0px`;
    haederMid.classList.remove("p-fixed");
    haederLogoVioltet.classList.remove("d-none");
    haederCatalog.classList.add("d-none");

    haederCatalog.classList.remove("open");
    haederCatalog.classList.add("close");

    if (widthScreen <= 768) {
      haederCatalog.style.background = "none";
    } else {
      Object.assign(haederCatalog.style, {
        background: "#f2f2f2",
        color: "#333333",
      });
    }

    catalogBtnClose.classList.add("d-none");
    catalogBurgerMenu.classList.remove("d-none");
    headerCatalogList.classList.add("d-none");
  }
});

haederCatalog.addEventListener("click", () => {
  if (haederCatalog.classList.contains("close")) {
    haederCatalog.classList.add("open");
    haederCatalog.classList.remove("close");
    if (widthScreen <= 768) {
      haederCatalog.style.background = "none";
    } else {
      Object.assign(haederCatalog.style, {
        background: "#e4d1ef",
        color: "#8134AF",
      });
    }

    catalogBtnClose.classList.remove("d-none");
    catalogBurgerMenu.classList.add("d-none");
    headerCatalogList.classList.remove("d-none");
  } else {
    haederCatalog.classList.remove("open");
    haederCatalog.classList.add("close");

    if (widthScreen <= 768) {
      haederCatalog.style.background = "none";
    } else {
      Object.assign(haederCatalog.style, {
        background: "#f2f2f2",
        color: "#333333",
      });
    }

    catalogBtnClose.classList.add("d-none");
    catalogBurgerMenu.classList.remove("d-none");
    headerCatalogList.classList.add("d-none");
  }
});

headerSearch.addEventListener("click", () => {
  haederCatalog.classList.remove("open");
  haederCatalog.classList.add("close");

  if (widthScreen <= 768) {
    haederCatalog.style.background = "none";
  } else {
    Object.assign(haederCatalog.style, {
      background: "#f2f2f2",
      color: "#333333",
    });
  }

  catalogBtnClose.classList.add("d-none");
  catalogBurgerMenu.classList.remove("d-none");
  headerCatalogList.classList.add("d-none");
});

const currency = document.querySelector(".currency");
const currencyList = document.querySelector(".currency-list");
const currencyListChildren = document.querySelectorAll(".currency-list li");
const currencyActiveChildren = document.querySelectorAll(".currency-active li");

currency.addEventListener("click", () => {
  if (!currencyList.classList.contains("d-none")) {
    currencyList.classList.add("d-none");
    currency.classList.remove("currencyActive");

    return;
  }
  currency.classList.add("currencyActive");
  currencyList.classList.remove("d-none");
});

const changeCurrency = () => {
  const id = JSON.parse(localStorage.getItem("currency"));

  if (id) {
    currencyActiveChildren.forEach((item) => {
      if (item.getAttribute("data-id") === id) {
        item.classList.remove("d-none");

        return;
      }

      item.classList.add("d-none");
    });

    currencyListChildren.forEach((item) => {
      if (item.getAttribute("data-id") === id) {
        item.classList.add("d-none");

        return;
      }

      item.classList.remove("d-none");
    });
  } else {
    localStorage.setItem("currency", JSON.stringify("1"));
    changeCurrency();
  }
};

changeCurrency();

currencyListChildren.forEach((item) => {
  item.addEventListener("click", () => {
    localStorage.setItem(
      "currency",
      JSON.stringify(item.getAttribute("data-id"))
    );

    changeCurrency();
  });
});
