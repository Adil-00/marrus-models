const arrNews = [
  {
    img: "./img/1.png",
  },
  {
    img: "./img/2.png",
  },
  {
    img: "./img/3.png",
  },
];

const funcNews1 = () => {
  const rowNews = document.querySelector(".block__news1 .row__news");
  const newsPages = document.querySelector(".block__news1 .news__pages");

  let productsnumberOfCards = 1;
  let productscurrentPage = 1;

  const addCardProducts = () => {
    let firstCountryIndex = (productscurrentPage - 1) * productsnumberOfCards;
    let lastCountryIndex = firstCountryIndex + productsnumberOfCards;

    const currentCountry = arrNews.slice(firstCountryIndex, lastCountryIndex);

    rowNews.innerHTML = " ";

    currentCountry.forEach((item) => {
      rowNews.insertAdjacentHTML(
        "beforeEnd",
        `   <div class="news__img">
          <img
            src=${item.img}
            alt=""
          />
        </div>`
      );
    });
  };

  addCardProducts();

  const productsPageNumbers = [];

  for (let i = 1; i <= Math.ceil(arrNews.length / productsnumberOfCards); i++) {
    productsPageNumbers.push(i);
  }

  productsPageNumbers.forEach((item) => {
    newsPages.insertAdjacentHTML(
      "beforeEnd",
      `<li class="page ${item === 1 ? "active" : " "}" data-key=${item}></li>`
    );
  });

  const pageAll = document.querySelectorAll(".block__news .news__pages .page");

  pageAll.forEach((item) => {
    item.addEventListener("click", () => {
      const key = item.getAttribute("data-key");

      productscurrentPage = key;

      pageAll.forEach((active) => {
        active.classList.remove("active");
      });

      item.classList.add("active");
      addCardProducts();
    });
  });
};

funcNews1();

const funcNews2 = () => {
  const rowNews = document.querySelector(".block__news2 .row__news");
  const newsPages = document.querySelector(".block__news2 .news__pages");

  let productsnumberOfCards = 1;
  let productscurrentPage = 1;

  const addCardProducts = () => {
    let firstCountryIndex = (productscurrentPage - 1) * productsnumberOfCards;
    let lastCountryIndex = firstCountryIndex + productsnumberOfCards;

    const currentCountry = arrNews.slice(firstCountryIndex, lastCountryIndex);

    rowNews.innerHTML = " ";

    currentCountry.forEach((item) => {
      rowNews.insertAdjacentHTML(
        "beforeEnd",
        `   <div class="news__img">
            <img
              src=${item.img}
              alt=""
            />
          </div>`
      );
    });
  };

  addCardProducts();

  const productsPageNumbers = [];

  for (let i = 1; i <= Math.ceil(arrNews.length / productsnumberOfCards); i++) {
    productsPageNumbers.push(i);
  }

  productsPageNumbers.forEach((item) => {
    newsPages.insertAdjacentHTML(
      "beforeEnd",
      `<li class="page ${item === 1 ? "active" : " "}" data-key=${item}></li>`
    );
  });

  const pageAll = document.querySelectorAll(".block__news2 .news__pages .page");

  pageAll.forEach((item) => {
    item.addEventListener("click", () => {
      const key = item.getAttribute("data-key");

      productscurrentPage = key;

      pageAll.forEach((active) => {
        active.classList.remove("active");
      });

      item.classList.add("active");
      addCardProducts();
    });
  });
};

funcNews2();

const funcNews3 = () => {
  const rowNews = document.querySelector(".block__news3 .row__news");
  const newsPages = document.querySelector(".block__news3 .news__pages");

  let productsnumberOfCards = 1;
  let productscurrentPage = 1;

  const addCardProducts = () => {
    let firstCountryIndex = (productscurrentPage - 1) * productsnumberOfCards;
    let lastCountryIndex = firstCountryIndex + productsnumberOfCards;

    const currentCountry = arrNews.slice(firstCountryIndex, lastCountryIndex);

    rowNews.innerHTML = " ";

    currentCountry.forEach((item) => {
      rowNews.insertAdjacentHTML(
        "beforeEnd",
        `   <div class="news__img">
              <img
                src=${item.img}
                alt=""
              />
            </div>`
      );
    });
  };

  addCardProducts();

  const productsPageNumbers = [];

  for (let i = 1; i <= Math.ceil(arrNews.length / productsnumberOfCards); i++) {
    productsPageNumbers.push(i);
  }

  productsPageNumbers.forEach((item) => {
    newsPages.insertAdjacentHTML(
      "beforeEnd",
      `<li class="page ${item === 1 ? "active" : " "}" data-key=${item}></li>`
    );
  });

  const pageAll = document.querySelectorAll(".block__news3 .news__pages .page");

  pageAll.forEach((item) => {
    item.addEventListener("click", () => {
      const key = item.getAttribute("data-key");

      productscurrentPage = key;

      pageAll.forEach((active) => {
        active.classList.remove("active");
      });

      item.classList.add("active");
      addCardProducts();
    });
  });
};

funcNews3();

const funcNews4 = () => {
  const rowNews = document.querySelector(".block__news4 .row__news");
  const newsPages = document.querySelector(".block__news4 .news__pages");

  let productsnumberOfCards = 1;
  let productscurrentPage = 1;

  const addCardProducts = () => {
    let firstCountryIndex = (productscurrentPage - 1) * productsnumberOfCards;
    let lastCountryIndex = firstCountryIndex + productsnumberOfCards;

    const currentCountry = arrNews.slice(firstCountryIndex, lastCountryIndex);

    rowNews.innerHTML = " ";

    currentCountry.forEach((item) => {
      rowNews.insertAdjacentHTML(
        "beforeEnd",
        `   <div class="news__img">
                <img
                  src=${item.img}
                  alt=""
                />
            </div>`
      );
    });
  };

  addCardProducts();

  const productsPageNumbers = [];

  for (let i = 1; i <= Math.ceil(arrNews.length / productsnumberOfCards); i++) {
    productsPageNumbers.push(i);
  }

  productsPageNumbers.forEach((item) => {
    newsPages.insertAdjacentHTML(
      "beforeEnd",
      `<li class="page ${item === 1 ? "active" : " "}" data-key=${item}></li>`
    );
  });

  const pageAll = document.querySelectorAll(".block__news4 .news__pages .page");

  pageAll.forEach((item) => {
    item.addEventListener("click", () => {
      const key = item.getAttribute("data-key");

      productscurrentPage = key;

      pageAll.forEach((active) => {
        active.classList.remove("active");
      });

      item.classList.add("active");
      addCardProducts();
    });
  });
};

funcNews4();

const funcNews5 = () => {
  const rowNews = document.querySelector(".block__news5 .row__news");
  const newsPages = document.querySelector(".block__news5 .news__pages");

  let productsnumberOfCards = 1;
  let productscurrentPage = 1;

  const addCardProducts = () => {
    let firstCountryIndex = (productscurrentPage - 1) * productsnumberOfCards;
    let lastCountryIndex = firstCountryIndex + productsnumberOfCards;

    const currentCountry = arrNews.slice(firstCountryIndex, lastCountryIndex);

    rowNews.innerHTML = " ";

    currentCountry.forEach((item) => {
      rowNews.insertAdjacentHTML(
        "beforeEnd",
        `   <div class="news__img">
                  <img
                    src=${item.img}
                    alt=""
                  />
            </div>`
      );
    });
  };

  addCardProducts();

  const productsPageNumbers = [];

  for (let i = 1; i <= Math.ceil(arrNews.length / productsnumberOfCards); i++) {
    productsPageNumbers.push(i);
  }

  productsPageNumbers.forEach((item) => {
    newsPages.insertAdjacentHTML(
      "beforeEnd",
      `<li class="page ${item === 1 ? "active" : " "}" data-key=${item}></li>`
    );
  });

  const pageAll = document.querySelectorAll(".block__news5 .news__pages .page");

  pageAll.forEach((item) => {
    item.addEventListener("click", () => {
      const key = item.getAttribute("data-key");

      productscurrentPage = key;

      pageAll.forEach((active) => {
        active.classList.remove("active");
      });

      item.classList.add("active");
      addCardProducts();
    });
  });
};

funcNews5();

const funcNews6 = () => {
  const rowNews = document.querySelector(".block__news6 .row__news");
  const newsPages = document.querySelector(".block__news6 .news__pages");

  let productsnumberOfCards = 1;
  let productscurrentPage = 1;

  const addCardProducts = () => {
    let firstCountryIndex = (productscurrentPage - 1) * productsnumberOfCards;
    let lastCountryIndex = firstCountryIndex + productsnumberOfCards;

    const currentCountry = arrNews.slice(firstCountryIndex, lastCountryIndex);

    rowNews.innerHTML = " ";

    currentCountry.forEach((item) => {
      rowNews.insertAdjacentHTML(
        "beforeEnd",
        `   <div class="news__img">
                    <img
                      src=${item.img}
                      alt=""
                    />
             </div>`
      );
    });
  };

  addCardProducts();

  const productsPageNumbers = [];

  for (let i = 1; i <= Math.ceil(arrNews.length / productsnumberOfCards); i++) {
    productsPageNumbers.push(i);
  }

  productsPageNumbers.forEach((item) => {
    newsPages.insertAdjacentHTML(
      "beforeEnd",
      `<li class="page ${item === 1 ? "active" : " "}" data-key=${item}></li>`
    );
  });

  const pageAll = document.querySelectorAll(".block__news6 .news__pages .page");

  pageAll.forEach((item) => {
    item.addEventListener("click", () => {
      const key = item.getAttribute("data-key");

      productscurrentPage = key;

      pageAll.forEach((active) => {
        active.classList.remove("active");
      });

      item.classList.add("active");
      addCardProducts();
    });
  });
};

funcNews6();

const popUpBtn = document.querySelectorAll(".pop-up__btn");
const modalBagraund = document.querySelector(".modal__bagraund");
const closeModal = document.querySelector(".modal__btn_close");
const modal = document.querySelector(".modal");

popUpBtn.forEach((item) => {
  item.addEventListener("click", () => {
    modal.classList.remove("d-none");
    modalBagraund.classList.remove("d-none");
  });
});

closeModal.addEventListener("click", () => {
  modal.classList.add("d-none");
  modalBagraund.classList.add("d-none");
});

modalBagraund.addEventListener("click", () => {
  console.log("hello");
  modal.classList.add("d-none");
  modalBagraund.classList.add("d-none");
});
