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
  <?php require("header.php") ?>


    <div class="container">
      <div class="ProductPath">Главная / Платья от производителя</div>

      <div class="personal-account">
        <div class="sidebar">
          <div class="title">Личный кабинет</div>

          <div class="box">
            <div class="link">
              <img src="./img/icon_basket.svg" alt="" />

              <a href="#">
                <span>Корзина</span>
              </a>
            </div>

            <div class="link">
              <img src="img/img personal account/like2.svg" alt="" />

              <a href="#">
                <span>Избранные товары</span>
              </a>
            </div>
          </div>

          <div class="box box_2">
            <div class="link">
              <a href="#"><span>Заказы в обработке</span></a>
            </div>

            <div class="link">
              <a href="#"><span>Заказы в пути</span></a>
            </div>

            <div class="link">
              <a href="#"><span>Доставленные заказы</span></a>
            </div>

            <div class="link">
              <a href="#"><span>Отмененные заказы (15)</span></a>
            </div>
          </div>

          <div class="box">
            <div class="link">
              <img src="img/icon_messages.svg" alt="" />

              <a href="#">
                <span>Сообщения</span>
              </a>
            </div>

            <div class="link">
              <img src="img/img personal account/comment 1.svg" alt="" />

              <a href="#">
                <span>Мои отзывы</span>
              </a>
            </div>

            <div class="link">
              <img src="img/img personal account/check-list 1.svg" alt="" />

              <a href="#">
                <span>Заявки по браку</span>
              </a>
            </div>

            <div class="link">
              <img src="img/img personal account/sent 1.svg" alt="" />

              <a href="#">
                <span>Лист ожидания</span>
              </a>
            </div>
          </div>

          <div class="box">
            <div class="link">
              <img src="./img/icno_user.svg" alt="" />

              <a href="#">
                <span>Личные данные</span>
              </a>
            </div>

            <div class="link">
              <img src="img/img personal account/logout 1.svg" alt="" />

              <a href="#">
                <span>Выход</span>
              </a>
            </div>
          </div>
        </div>

        <div class="content">
          <div class="title">
            <img src="img/img personal account/Group 978.svg" alt="" />
            <p>Добро пожаловать, <span>Александр</span></p>
          </div>

          <div class="content__box first__box">
            <div class="box__title">
              <img src="img/img personal account/wallet 1.svg" alt="" />
              Мой баланс
            </div>

            <div class="aside">
              <p>17, 000 ₽</p>
              <a href="#">История операций</a>
            </div>
          </div>

          <div class="content__box">
            <div class="box__title">
              <img src="img/img personal account/shopcard tabbar.svg" alt="" />
              Моя корзина
            </div>

            <div class="aside">
              <p>Товаров: 5</p>
              <p>На сумму: 2500 ₽</p>

              <a href="#">Показать корзину</a>
            </div>
          </div>

          <div class="content__box">
            <div class="box__title">
              <img src="img/img personal account/like.svg" alt="" />
              Избранные товары
            </div>

            <div class="aside">
              <p>Товаров: 5</p>
              <p>На сумму: 2500 ₽</p>

              <a href="#">Показать избранное</a>
            </div>
          </div>

          <div class="content__box last__box">
            <div class="box__title">
              <img src="img/img personal account/sent 2.svg" alt="" />
              Лист ожидания
            </div>

            <div class="aside">
              <p>Товаров: 5</p>
              <p>На сумму: 2500 ₽</p>

              <a href="#">Показать лист ожидания</a>
            </div>
          </div>

          <div class="personal-data">
            <div class="title">Личные данные</div>

            <div class="data">
              <div class="aside">
                <span>ФИО</span>
                <p>Усачев Александр</p>
              </div>

              <div class="aside">
                <span>Дата рождения</span>
                <p>24.06.1970</p>
              </div>

              <div class="aside">
                <span>Email</span>
                <p>test@kgmart.ru</p>
              </div>

              <div class="aside">
                <span>Телефон</span>
                <p>0779 878-854</p>
              </div>

              <div class="aside">
                <span>Тип профиля</span>
                <p>Физическое лицо</p>
              </div>
            </div>
          </div>

          <div class="Your-manager">
            <div class="title">Ваш менеджер</div>

            <div class="data">
              <div class="aside">
                <span>ФИО</span>
                <p>Иванова Мария</p>
              </div>

              <div class="aside">
                <span>Телефон</span>
                <p>+996 (555) 403-555</p>
              </div>

              <div class="aside">
                <span>Whatsapp</span>
                <p>+996 (555) 403-555</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php require("footer.php") ?>

  </body>
</html>
