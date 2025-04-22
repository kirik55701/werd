function adjustImageSize() {
    var img = document.getElementById('responsive-image');
    var screenWidth = window.innerWidth;

    if (screenWidth <= 600) {
      img.style.width = '100%';
    } else if (screenWidth <= 1000) {
      img.style.width = '100%';
    } else {
      img.style.width = '100%';
    }
  }

  window.addEventListener('resize', adjustImageSize);

  window.onload = adjustImageSize;

  // Получаем элементы
const person = document.getElementById('person');
const scrollbar = document.querySelector('.scrollbar');

// Функция для обновления положения человечка на полосе
function updateScrollbar() {
    // Получаем общую высоту документа
    const docHeight = document.documentElement.scrollHeight;
    // Получаем текущую прокрутку страницы
    const scrollTop = document.documentElement.scrollTop;
    // Получаем высоту окна браузера
    const windowHeight = window.innerHeight;

    // Вычисляем процент прокрутки
    const scrollPercent = scrollTop / (docHeight - windowHeight);

    // Рассчитываем позицию человечка на полосе
    const personPosition = scrollPercent * 100;

    // Перемещаем человечка
    person.style.left = `calc(${personPosition}% - 10px)`; // Смещаем для центрирования
}

// Обработчик события прокрутки
window.addEventListener('scroll', updateScrollbar);

// Обновляем полоску при загрузке страницы
window.addEventListener('load', updateScrollbar);


var lastScrollTop = 0; // Переменная для отслеживания предыдущего положения прокрутки

  // Функция для отслеживания прокрутки
  window.onscroll = function() {
      var topBar = document.getElementById('top-bar');
      var currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;

      // Прокрутка вниз
      if (currentScrollTop > lastScrollTop) {
          // Если прокручено больше 50px, скрываем полоску
          if (currentScrollTop > 50) {
              topBar.style.top = '-120px'; // Прячем полоску (выезжает вверх)
          }
      } else {
          // Прокрутка вверх
          topBar.style.top = '20px'; // Восстанавливаем полоску
      }

      // Обновляем последнее значение прокрутки
      lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop; // Для прокрутки вверх при достижении верха страницы
  };