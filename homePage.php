<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style/style.css" />
    <title>Document</title>
  </head>
  <body>
    <?php require('header.php')?>

    <ul class="fixNavMenu">
      <li class="active">
        <a href="#"
          ><img src="./img/home-violet.svg" alt="" />
          <p>Главная</p>
        </a>
      </li>

      <li>
        <a href="#"
          ><img src="./img/messages-grey.svg" alt="" />
          <div class="count"><p>3</p></div>
          <p>Чат</p></a
        >
      </li>

      <li>
        <a href="#"
          ><img src="./img/shopcard grey.svg" alt="" />
          <div class="count"><p>2</p></div>
          <p>Корзина</p></a
        >
      </li>

      <li>
        <a href="#"
          ><img src="./img/profile-grey.svg" alt="" />
          <p>Профиль</p></a
        >
      </li>
    </ul>

    <?php require("slider.php")?>

    <section class="different">
      <div class="container">
        <div class="different__top">
          <p>
            Игра в кальмара <br />
            <span>костюмы</span>
          </p>
          <img src="./img/Squid Costumes Game.png" alt="" />
        </div>

        <div class="different__mid">
          <div class="different__link">
            <span
              >Акция на платья для <br />
              девочек</span
            >
            <img src="./img/Special offer for dresses for girls.png" alt="" />
          </div>

          <div class="different__link">
            <span
              >Таможенное <br />
              оформление</span
            >
            <img src="./img/Customs clearance.png" alt="" />
          </div>

          <div class="different__link">
            <span
              >Подборка женских <br />
              брюк</span
            >
            <img src="./img/A selection of women's trousers.png" alt="" />
          </div>

          <div class="different__link">
            <span>Женские костюмы</span>
            <img src="./img/Women's suits.png" alt="" />
          </div>

          <div class="different__link">
            <span
              >Топ 10 производителей <br />
              детской одежды</span
            >
            <img
              src="./img/Top 10 manufacturers of children's clothing.png"
              alt=""
            />
          </div>

          <div class="different__link">
            <span>Коллекция платьев</span>
            <img src="./img/Collection of dresses.png" alt="" />
          </div>
        </div>

        <div class="different__bottom">
          <p>
            Документы для <br />
            <span>маркетплейсов</span>
          </p>
          <img src="./img/Documents for marketplaces.png" alt="" />
        </div>
      </div>
    </section>

    <section class="product__list">
      <div class="container">
        <div class="product__header">
          <div class="prodcut__title">Популярные товары</div>

          <div class="product__filter">
            <ul>
              <li><a class="active" href="#">Все товары</a></li>
              <li><a href="#">Женские</a></li>
              <li><a href="#">Мужские</a></li>
              <li><a href="#">Детские</a></li>
            </ul>
          </div>

          <div class="product__btnAllProduct"><a href="#">Смотреть всё</a></div>
        </div>

        <div class="product__content">
          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_1.png" alt="" />
              <div class="pop-up__btn">Быстрый просмотр</div>
            </div>

            <div class="product__name vip">
              Платье /<span> Doorbek</span> <img src="img/crown 1.svg" alt="" />
            </div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_2.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_3.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_4.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">1800 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_5.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_6.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_7.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_8.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_9.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_10.png" alt="" />
              <span>-30%</span>
              <img
                class="product__icon_favorite"
                src="./img/like.png"
                alt=""
              />>
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_1.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_2.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_3.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_4.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">1800 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_5.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="block__news block__news1">
        <section class="row__news">
          <!-- <div class="news_        <img
              src="./img/Contact the manufacturer without intermediaries.png"
              alt=""
            />
          </div>
  
          <div class="news__text">
            Контактируй <br />
            с производителем <br />
            <span>без посредников</span>
          </div> -->
        </section>

        <ul class="news__pages">
          <!-- <li class="page active"></li>
          <li class="page"></li> -->
        </ul>
      </div>
    </div>

    <section class="product__list">
      <div class="container">
        <div class="product__header">
          <div class="prodcut__title">Новые товары</div>

          <div class="product__filter">
            <ul>
              <li><a class="active" href="#">Все товары</a></li>
              <li><a href="#">Женские</a></li>
              <li><a href="#">Мужские</a></li>
              <li><a href="#">Детские</a></li>
            </ul>
          </div>

          <div class="product__btnAllProduct"><a href="#">Смотреть всё</a></div>
        </div>

        <div class="product__content">
          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_1.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_2.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_3.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_4.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">1800 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_5.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_6.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_7.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_8.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_9.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_10.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_1.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_2.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_3.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_4.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">1800 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_5.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="block__news block__news2">
        <section class="row__news">
          <!-- <div class="news__img">
            <img src="./img/New Year's sale.png" alt="" />
          </div>
  
          <div class="news__text">
            Новогодняя
            <br />
            <span>распродажа</span>
          </div> -->
        </section>

        <ul class="news__pages">
          <!-- <li class="page active"></li>
        <li class="page"></li> -->
        </ul>
      </div>
    </div>

    <section class="product__list">
      <div class="container">
        <div class="product__header">
          <div class="prodcut__title">Маркетплейс</div>

          <div class="product__filter">
            <ul>
              <li><a class="active" href="#">Все товары</a></li>
              <li><a href="#">Женские</a></li>
              <li><a href="#">Мужские</a></li>
              <li><a href="#">Детские</a></li>
            </ul>
          </div>

          <div class="product__btnAllProduct"><a href="#">Смотреть всё</a></div>
        </div>

        <div class="product__content">
          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_1.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_2.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_3.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_4.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">1800 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_5.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_6.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_7.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_8.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_9.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_10.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_1.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_2.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_3.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_4.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">1800 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_5.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="block__news block__news3">
        <section class="row__news">
          <!-- <div class="news__img">
            <img src="./img/Factory Anfisa.png" alt="" />
          </div>
  
          <div class="news__text">
            Фабрика
            <br />
            <span>Anfisa</span>
          </div> -->
        </section>

        <ul class="news__pages">
          <!-- <li class="page active"></li>
          <li class="page"></li> -->
        </ul>
      </div>
    </div>

    <section class="product__list">
      <div class="container">
        <div class="product__header">
          <div class="prodcut__title">Товары байеров</div>

          <div class="product__filter">
            <ul>
              <li><a class="active" href="#">Все товары</a></li>
              <li><a href="#">Женские</a></li>
              <li><a href="#">Мужские</a></li>
              <li><a href="#">Детские</a></li>
            </ul>
          </div>

          <div class="product__btnAllProduct"><a href="#">Смотреть всё</a></div>
        </div>

        <div class="product__content">
          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_1.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_2.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_3.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_4.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">1800 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_5.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_6.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_7.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_8.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_9.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_10.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_1.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_2.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_3.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_4.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">1800 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_5.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="block__news block__news4">
        <section class="row__news">
          <!-- <div class="news__img">
            <img src="./img/MarussPhotostudio.png" alt="" />
          </div>
  
          <div class="news__text">
            Maruss
            <br />
            <span>Photostudio</span>
          </div> -->
        </section>

        <ul class="news__pages">
          <!-- <li class="page active"></li>
          <li class="page"></li> -->
        </ul>
      </div>
    </div>

    <section class="product__list">
      <div class="container">
        <div class="product__header">
          <div class="prodcut__title">Товар с видео</div>

          <div class="product__filter">
            <ul>
              <li><a class="active" href="#">Все товары</a></li>
              <li><a href="#">Женские</a></li>
              <li><a href="#">Мужские</a></li>
              <li><a href="#">Детские</a></li>
            </ul>
          </div>

          <div class="product__btnAllProduct"><a href="#">Смотреть всё</a></div>
        </div>

        <div class="product__content">
          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_1.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_2.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_3.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_4.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">1800 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_5.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_6.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_7.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_8.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_9.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_10.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_1.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_2.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_3.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_4.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">1800 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_5.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="block__news block__news5">
        <section class="row__news">
          <!-- <div class="news__img">
            <img src="./img/Products with videos.png" alt="" />
          </div> -->

          <!-- <div class="news__text">
            Товары
            <br />
            <span>с видео</span>
          </div> -->
        </section>

        <ul class="news__pages">
          <!-- <li class="page active"></li>
          <li class="page"></li> -->
        </ul>
      </div>
    </div>

    <section class="product__list">
      <div class="container">
        <div class="product__header">
          <div class="prodcut__title">Высокий рейтинг</div>

          <div class="product__btnAllProduct"><a href="#">Смотреть всё</a></div>
        </div>

        <div class="product__content">
          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_1.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_2.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_3.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_4.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">1800 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_5.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>
        </div>
      </div>
    </section>

    <section class="product__list">
      <div class="container">
        <div class="product__header">
          <div class="prodcut__title">Всё до 399 сом</div>

          <div class="product__btnAllProduct"><a href="#">Смотреть всё</a></div>
        </div>

        <div class="product__content">
          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_6.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_7.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_8.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_9.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_10.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>
        </div>
      </div>
    </section>

    <section class="product__list">
      <div class="container">
        <div class="product__header">
          <div class="prodcut__title">Ликвидация</div>

          <div class="product__filter">
            <ul>
              <li><a class="active" href="#">Все товары</a></li>
              <li><a href="#">Женские</a></li>
              <li><a href="#">Мужские</a></li>
              <li><a href="#">Детские</a></li>
            </ul>
          </div>

          <div class="product__btnAllProduct"><a href="#">Смотреть всё</a></div>
        </div>

        <div class="product__content">
          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_1.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_2.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_3.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_4.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">1800 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_5.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_6.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_7.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_8.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_9.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_10.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_1.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Doorbek</span></div>

            <div class="product__price">350 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_2.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Aisha_43</span></div>

            <div class="product__price">280 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_3.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> DN</span></div>

            <div class="product__price">600 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_4.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Nazima</span></div>

            <div class="product__price">1800 сом</div>
          </div>

          <div class="product__card">
            <div class="product__img">
              <img src="./img/product_img_5.png" alt="" />
            </div>

            <div class="product__name">Платье /<span> Kenje</span></div>

            <div class="product__price">900 сом</div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="block__news block__news6">
        <section class="row__news">
          <!-- <div class="news__img">
            <img src="./img/ProductsfromMail_Stellato.png" alt="" />
          </div> -->

          <!-- <div class="news__text">
            Товары <br />
            от Mil_Stella
            <br />
            <span>до 50%</span>
          </div> -->
        </section>

        <ul class="news__pages">
          <!-- <li class="page active"></li>
          <li class="page"></li> -->
        </ul>
      </div>
    </div>

    <section class="news">
      <div class="container">
        <div class="news__header">
          <div class="news__title">Новости</div>
          <ul class="news__filter">
            <li><a class="active" href="#">Все новости</a></li>
            <li><a href="#">Новости компании</a></li>
            <li><a href="#">Категория новостей</a></li>
            <li><a href="#">Вторая категория новостей</a></li>
          </ul>

          <div class="news__btnAllNews">Смотреть все новости</div>
        </div>

        <div class="news__cards">
          <div class="news__card">
            <div class="card__img">
              <img src="./img/unsplash_TXxiFuQLBKQ.png" alt="" />
              <span class="violet">новости компании</span>
            </div>

            <div class="card__text">
              Покупай товар до выхода в <br />
              продажу
            </div>
          </div>

          <div class="news__card">
            <div class="card__img">
              <img src="./img/unsplash_RYWEyXopmM4.png" alt="" />
              <span class="yellow">другая категория</span>
            </div>

            <div class="card__text">Новинки от Zaira_style</div>
          </div>

          <div class="news__card">
            <div class="card__img">
              <img src="./img/unsplash_alw-CwGFmwQ.png" alt="" />
              <span class="green">еще другая</span>
            </div>

            <div class="card__text">
              Как узнать актуальность <br />
              товара?
            </div>
          </div>

          <div class="news__card">
            <div class="card__img">
              <img src="./img/unsplash_MYbhN8KaaEc.png" alt="" />
              <span class="violet">новости компании</span>
            </div>

            <div class="card__text">
              Покупай товар до выхода в <br />
              продажу
            </div>
          </div>

          <div class="news__card">
            <div class="card__img">
              <img src="./img/unsplash_K0c8ko3e6AA.png" alt="" />
              <span class="violet">новости компании</span>
            </div>

            <div class="card__text">Новинки от Zaira_style</div>
          </div>

          <div class="news__card">
            <div class="card__img">
              <img src="./img/unsplash_buYlndcNnjM.png" alt="" />
              <span class="violet">новости компании</span>
            </div>

            <div class="card__text">
              Как узнать актуальность <br />
              товара?
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-------------------Modal window---------------------------->

    <div class="modal__bagraund d-none"></div>
    <section class="modal d-none">
      <div class="modal__btn_close">
        <img src="./img/close.svg" alt="" />
      </div>

      <div class="modal__imgCol">
        <div class="imgCol__mainImg">
          <img src="./img/product_card-img main.png" alt="" />
        </div>

        <div class="imgCol__varintImg">
          <div class="variant active">
            <img src="./img/product_card-img 1.png" alt="" />
          </div>
          <div class="variant">
            <img src="./img/product_card-img 2.png" alt="" />
          </div>
          <div class="variant">
            <img src="./img/product_card-img 3.png" alt="" />
          </div>
          <div class="variant">
            <img src="./img/product_card-img 4.png" alt="" />
          </div>
          <div class="variant">
            <img src="./img/product_card-img 5.png" alt="" />
          </div>
        </div>
      </div>

      <div class="modal__title">Прада повседневные на молнии</div>

      <div class="modal__row">
        <div class="article">Артикул: <span>240461</span></div>

        <div class="factory">
          <div class="factory__title">Фабрика:</div>
          <div class="factory__text">Doorbek</div>
        </div>

        <div class="modal__ratingProduct">
          <div class="ratingProduct__title title">Рейтинг:</div>

          <div class="ratingProduct__rating">
            <img src="./img/Star yellow.svg" alt="" />
            <img src="./img/Star yellow.svg" alt="" />
            <img src="./img/Star yellow.svg" alt="" />
            <img src="./img/Star yellow.svg" alt="" />
            <img src="./img/Star grey.svg" alt="" />
          </div>
        </div>
      </div>

      <div class="modal__informationCol">
        <div class="informationCol__yourPrice">
          <div class="yourPrice__title title">Ваша цена:</div>

          <div class="yourPrice__price">
            <div class="newPrice">350 сом</div>
            <div class="oldPrice">740 сом</div>
          </div>
        </div>

        <div class="informationCol__sizeRange">
          <div class="sizeRange__title title">Размерный ряд:</div>

          <div class="sizeRange__size">
            <div class="size">36</div>
            <div class="size">38</div>
            <div class="size">40</div>
            <div class="size">42</div>
          </div>
        </div>

        <div class="informationCol__chooseAColor">
          <div class="chooseAColor__title title">Выберите цвет:</div>
          <div class="chooseAColor__color">
            <div class="color active">
              <img src="./img/product_card-img 1.png" alt="" />
            </div>
            <div class="color">
              <img src="./img/product_card-img 2.png" alt="" />
            </div>
            <div class="color">
              <img src="./img/product_card-img 3.png" alt="" />
            </div>
            <div class="color">
              <img src="./img/product_card-img 4.png" alt="" />
            </div>
            <div class="color">
              <img src="./img/product_card-img 5.png" alt="" />
            </div>
          </div>
        </div>

        <div class="informationCol__btn">
          <div class="btn__addToCart">Добавить в корзину</div>

          <div class="btn__toFavorites">
            <img src="./img/icon_favorite.png" alt="" /> В избранное
          </div>
        </div>
      </div>

      <div class="ourServices">
        <div class="ourServices__title title">Наши услуги:</div>
        <div class="ourServices__services">
          <div class="services">
            <img src="./img/Layer 2 (2).svg" alt="" /><span
              >Подбор аналогов</span
            >
          </div>
          <div class="services">
            <img src="./img/Layer 2 (3).svg" alt="" /><span>Сбор товара</span>
          </div>
          <div class="services">
            <img src="./img/Layer 2 (1).svg" alt="" /><span>Фото</span>
          </div>
          <div class="services">
            <img src="./img/Layer 2 (4).svg" alt="" /><span
              >Страхование доставки</span
            >
          </div>
          <div class="services">
            <img src="./img/Layer 2 (5).svg" alt="" /><span
              >Безопасный платёж</span
            >
          </div>
          <div class="services">
            <img src="./img/Layer 2 (6).svg" alt="" /><span
              >Таможенное оформление</span
            >
          </div>
          <div class="services">
            <img src="./img/Layer 2 (7).svg" alt="" /><span
              >Проверка брака</span
            >
          </div>

          <div class="services">
            <img src="./img/Group 944.svg" alt="" /><span>Маркировка</span>
          </div>
        </div>
      </div>

      <div class="modal__sideBar">
        <div class="aboutTheProduct">
          <div class="aboutTheProduct__title">О товаре:</div>
          <ul class="aboutTheProduct__text">
            <li>Артикул: <span>240461</span></li>
            <li>Наличие: <span>В наличии</span></li>
            <li>Сезон: <span>Круглогодичный</span></li>
            <li>Пол: <span>Детский</span></li>
            <li>Комплектация: <span>Платье</span></li>
            <li>Ткань: <span>Прада</span></li>
            <li>В упаковке: <span>4 шт</span></li>
          </ul>
        </div>

        <div class="productDetails">
          <ul class="productDetails__text">
            <li>Комплектация: <span>платье</span></li>
            <li>Страна-производитель: <span>Киргизия</span></li>
            <li>Гарантии: <span>есть</span></li>
            <li>Сезон: <span>круглогодичный</span></li>
            <li>Ткань: <span>прада</span></li>
            <li>Тип платья: <span>повседневные</span></li>
            <li>Вид застежки: <span>Молния</span></li>
            <li>Вырез горловины: <span>округлый</span></li>
            <li>Длина изделия по спинке, см.: <span>74</span></li>
            <li>Декоративные элементы: <span>без элементов</span></li>
            <li>Возрастная категория: <span>школьное</span></li>
            <li>Длина изделия: <span>миди</span></li>
            <li>Тип рукавов: <span>длинные</span></li>
            <li>Конструктивные элементы: <span>без элементов</span>.</li>
            <li>Покрой: <span>полуприлегающий</span></li>
            <li>Тип карманов: <span>без карманов</span></li>
            <li>
              Числовые параметры соответствуют размеру: <span>36-42</span>
            </li>
            <li>Материал подкладки: <span>без подклада</span></li>
          </ul>
        </div>
      </div>

      <div class="MoreInformation__btn">Больше информации о товаре</div>
    </section>

    <?php require('footer.php')?>
    <script src="./js/main.js"></script>
  </body>
</html>
