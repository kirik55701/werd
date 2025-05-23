<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <Link rel="shortcut icon" href="img/planeta.jpg">
  <link rel="stylesheet" href="style/bootstrap.css">
  <link rel="stylesheet" href="style/style.css">
  <title>Экскурсии</title>
</head>

<body>
  <div class="navbar" id="top-bar">
    <a class="nav-button" href="#glavnay">Главная</a>
    <a class="nav-button" href="#info">О нас</a>
    <a class="nav-button" href="#services">Экскурсии</a>
    <a class="nav-button" href="#contact">Связаться</a>
  </div>

  <div class="glav"style="height: 100vh; wight: 100%;" id="glavnay">
    <div class="zastavka">
      <div style="display: flex;justify-content: center;align-items: center;"><img src="img/planeta.jpg" class="planeta"></div>
      <div style="display: flex;justify-content: center;align-items: center;"><div class="palka"></div></div>
      <div style="display: flex;justify-content: center;align-items: center;"><a class="text2">Экскурсии по всей <span class="fw-bold">России</span></a></div>
    </div>
  </div>

  <div class="info" id="info">
    <a class="text8">Мы предлогаем</a>
      <div class="block">
        <div><a class="text3">Качество и разнообразие предложений: представление информации о различных экскурсиях с
            подробным описанием маршрутов, продолжительности, цен и доступных вариантов (например, пешеходные,
            автобусные, тематические). Важно, чтобы можно было выбрать экскурсию по интересам (культура, природа, кухня
            и т. д.) и по ценовому диапазону.</a></div>
        <div><img src="img/info1.jpg" class="img-info"></div>
      </div>
      <div class="block">
          <div><img src="img/info2.jpg" class="img-info"></div>
          <div><a class="text3">Отзывы и рекомендации: публикация реальных отзывов клиентов помогает завоевать доверие к
            компании. Также можно добавить систему рейтингов, чтобы потенциальные покупатели могли оценить качество
            услуг на основе мнений других людей.</a></div>
      </div>
      <div class="block">
          <div><a class="text3">Удобный и безопасный процесс бронирования: возможность легко и быстро забронировать экскурсию
            онлайн, с удобным календарем, выбором времени и количества человек. Также важно обеспечить безопасность при
            онлайн-оплате и предоставить понятные условия отмены или изменения бронирования.</a></div>
          <div><img src="img/info3.jpg" class="img-info"></div>
      </div>
  </div>

  <div class="services" id="services">
    <div class="background-main">
      <img src="img/background.jpg" class="fon">
    </div>
    <a class="text5">Наши экскурсии</a>
    <div class="cart">
      <div><a class="text4">Экскурсия по Москве</a>
      <a class="text6">В стоимость входит: Гостиница, 3-х разовое питание, Инструктор, Туристическое оборудование, личный фотограф, Гид</a>
      <a class="text7">Стоимость: 600 000 р.</a>
      <div class="buttom">
      <button type="button" class="knopka1">Оставить заявку на экскурсию</button>
      <button type="button" class="knopka2">Подробнее</button>
      </div>
      </div>
      <div id="carouselExampleFade1" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/cart1.jpg" class="d-block w-100 img-cart" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/cart2.jpg" class="d-block w-100 img-cart" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/cart3.jpg" class="d-block w-100 img-cart" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="cart">
      <div><a class="text4">Экскурсия по Питеру</a>
      <a class="text6">В стоимость входит: Гостиница, 3-х разовое питание, Инструктор, Туристическое оборудование,
        личный фотограф, Гид</a>
      <a class="text7">Стоимость: 500 000 р.</a>
      <div class="buttom">
      <button type="button" class="knopka1">Оставить заявку на экскурсию</button>
      <button type="button" class="knopka2">Подробнее</button>
      </div>
      </div>
      <div id="carouselExampleFade2" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/cart4.jpg" class="d-block w-100 img-cart" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/cart5.jpg" class="d-block w-100 img-cart" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/cart6.jpg" class="d-block w-100 img-cart" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="cart">
      <div>
      <a class="text4">Экскурсия по Казахстану</a>
      <a class="text6">В стоимость входит: Гостиница, 3-х разовое питание, Инструктор, Туристическое оборудование,
        личный фотограф, Гид</a>
      <a class="text7">Стоимость: 900 000 р.</a>
      <div class="buttom">
      <button type="button" class="knopka1">Оставить заявку на экскурсию</button>
      <button type="button" class="knopka2">Подробнее</button>
      </div>
      </div>
      <div id="carouselExampleFade3" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/cart7.jpg" class="d-block w-100 img-cart" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/cart8.jpg" class="d-block w-100 img-cart" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/cart9.jpg" class="d-block w-100 img-cart" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade3" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade3" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <div class="contact" id="contact">
    <a class="text5">Напиши нам</a>
    <a class="text5">Давай путишествовать</a>
    <div class="button-container">
      <button class="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-telegram"
          viewBox="0 0 16 16">
          <path
            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09" />
        </svg>
      </button>
      <button class="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-youtube"
          viewBox="0 0 16 16">
          <path
            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
        </svg>
      </button>
      <button class="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-github"
          viewBox="0 0 16 16">
          <path
            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
        </svg>
      </button>
      <button class="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-instagram"
          viewBox="0 0 16 16">
          <path
            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
        </svg>
      </button>
    </div>
    <a class="text5">8-800-555-35-35</a>
    <a class="text5">NiceYourDick@gmail.com</a>
  </div>

  <div class="scrollbar">
    <div class="person" id="person"><img src="img/people.svg" style="height: 50px; wight: 50px;" draggable="false">
    </div>
  </div>
  <script src="script/script.js"></script>
  <script src="script/bootstrap.js"></script>
</body>

</html>