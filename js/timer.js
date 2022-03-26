  // Устанавливаем конечную дату в миллисекундах. То есть дату когда закончится отчет
  let startDate = new Date("May 09, 2022 23:59:59").getTime();
 
  // Обновляем таймер каждую секунду
  let x = setInterval(function() {

      // Получаем текущее время в миллисекундах
      let now = new Date().getTime();

      // Узнаем разницу во времени, между текущей даты и конечной даты
      let diff = (startDate - now);

      // Считаем дни, часы, минуты и секунды
      let days = Math.floor(diff / (1000 * 60 * 60 * 24));
      let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
      let seconds = Math.floor((diff % (1000 * 60)) / 1000);

      // Отображаем результат в блоке с id="countdown"
      document.getElementById("countdown").innerHTML = days + " :   " + hours + " :   "
          + minutes + " :   " + seconds + "";

      // Если время истекло, то вместо таймера выводим некий текст.
      if (diff < 0) {
          clearInterval(x);
          document.getElementById("countdown").innerHTML = "Этот день наступил";
      }
  }, 1000);