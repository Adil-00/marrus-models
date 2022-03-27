<header class="header">
  <div class="header__up">
    <div class="container">
      <div class="top__content">
        <div class="header__logoWhite">
          <img src="./img/logo_white.svg" alt="" />
        </div>

        <div class="header__title">Новый принцип <span> работы!</span></div>
      </div>
    </div>
  </div>

  <div class="header__down">
    <div class="container">
      <div class="header__nav">
        <ul class="nav">
          <li><a href="#">О нас</a></li>
          <li><a href="#">Как заказать</a></li>
          <li><a href="#">Как работать с KGMART.RU</a></li>
          <li><a href="#">Доставка</a></li>
          <li><a href="#">Отзывы</a></li>
          <li><a href="#">Постоянным клиентам</a></li>
          <li><a href="#">Услуги</a></li>
        </ul>

        <div class="currency">
          <ul class="currency-active">
            <li class="d-none" data-id="1">
              <img src="./img/currency/kyrgyzstan 2.svg" alt="" />
              <p>Киргизия (KGS)</p>
            </li>
            <li class="d-none" data-id="2">
              <img src="img/currency/united-states 1.svg" alt="" />
              <p>США (USD)</p>
            </li>
            <li class="d-none" data-id="3">
              <img src="img/currency/russia 1.svg" alt="" />
              <p>Россия (RUB)</p>
            </li>
            <li class="d-none" data-id="4">
              <img src="img/currency/european-union 1.svg" alt="" />
              <p>Европа (EUR)</p>
            </li>
          </ul>

          <img src="./img/currency/arrow.svg" alt="" class="currency-arrow" />

          <ul class="currency-list d-none">
            <li data-id="1">
              <img src="./img/currency/kyrgyzstan 2.svg" alt="" />
              <p>Киргизия (KGS)</p>
            </li>
            <li data-id="2">
              <img src="img/currency/united-states 1.svg" alt="" />
              <p>США (USD)</p>
            </li>
            <li data-id="3">
              <img src="img/currency/russia 1.svg" alt="" />
              <p>Россия (RUB)</p>
            </li>
            <li data-id="4">
              <img src="img/currency/european-union 1.svg" alt="" />
              <p>Европа (EUR)</p>
            </li>
          </ul>
        </div>
      </div>

      <div class="header__mid">
        <div class="mid">
          <div class="header__logoViolet">
            <img src="./img/logo_violet.svg" alt="" />
          </div>

          <div class="header__catalog close d-none">
            <img
              class="catalog__btnClose d-none"
              src="./img/icon__btnExitViolet.svg"
              alt=""
            />
            <img class="catalog__burgerMenu" src="./img/menu.svg" alt="" />
            <span>Каталог</span>
          </div>

          <?php require("catalogList.php") ?>

          <label class="header__search">
            <div class="search__iconBlack">
              <img src="./img/icon_searchblack.svg" alt="" />
            </div>

            <input type="text" placeholder="Найти среди 266 227 товаров..." />

            <div class="search__iconWrite">
              <img src="./img/icon_search.svg" alt="" />
            </div>
          </label>

          <div class="mid__nav">
            <ul>
              <li class="nav__user">
                <a class="nav-user" href="#"
                  ><img src="./img/icno_user.svg" alt="" />
                  <p>Войти</p></a
                >

                <div class="user__popup">
                  <div class="popup__item">
                    <img src="img/popup icon/like.svg" alt="" />
                    <a href="#" >Избранное</a>
                  </div>
                  <div class="popup__item">
                    <img src="img/popup icon/sent 3.svg" alt="" />
                    <a href="#" >Лист ожидания</a>
                  </div>
                  <div class="popup__item">
                    <img src="img/popup icon/sent 3.svg" alt="" />
                    <a href="#" >Мои заказы</a>
                  </div>
                  <div class="popup__item">
                    <img src="img/popup icon/messages.svg" alt="" />
                    <a href="#" >Сообщения</a>
                  </div>
                  <div class="popup__item">
                    <img src="img/popup icon/comment 2.svg" alt="" />
                    <a href="#" >Мои отзывы</a>
                  </div>
                  <div class="popup__item">
                    <img src="img/popup icon/profile.svg" alt="" />
                    <a href="#">Мои данные</a>
                  </div>
                </div>
              </li>
              <li>
                <a href="#"
                  ><img src="./img/icon_messages.svg" alt="" />
                  <p>Сообщения</p></a
                >
              </li>
              <li>
                <a href="#"
                  ><img src="./img/icon_delivery.svg" alt="" />
                  <p>Доставка</p></a
                >
              </li>
              <li>
                <a href="#"
                  ><img src="./img/icon_basket.svg" alt="" />
                  <p>Корзина</p></a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="header__filter">
        <ul>
          <li>
            <a href="#"
              >Женщинам<img
                class="arrow_down"
                src="./img/arrow_down.png"
                alt=""
            /></a>
          </li>
          <li>
            <a href="#"
              >Детям<img class="arrow_down" src="./img/arrow_down.png" alt=""
            /></a>
          </li>
          <li>
            <a href="#"
              >Мужчинам<img
                class="arrow_down"
                src="./img/arrow_down.png"
                alt=""
            /></a>
          </li>
          <li>
            <a href="#"
              >Разное<img class="arrow_down" src="./img/arrow_down.png" alt=""
            /></a>
          </li>
          <li>
            <a href="#"
              >Карнавал<img
                class="arrow_down"
                src="./img/arrow_down.png"
                alt=""
            /></a>
          </li>
          <li>
            <a href="#">Зима</a>
          </li>
          <li>
            <a href="#">Новинки</a>
          </li>
          <li>
            <a href="#"
              ><img
                class="percent_web"
                src="./img/percent_web.png"
                alt=""
              />Распродажа</a
            >
          </li>
          <li>
            <a href="#">Акции</a>
          </li>
          <li>
            <a href="#"
              ><img class="xx_web" src="./img/xx_web.png" alt="" /> Большие
              размеры</a
            >
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>

<script src="./js/header.js"></script>
