(() => {
    const dynamicSelect1 = (id1, id2) => {
      // Определение переменных, ссылающихся на списки
      const sel11 = document.getElementById(id1);
      const sel21 = document.getElementById(id2);
      // Клонирование динамического списка
      const clone = sel21.cloneNode(true);
      // Определение переменных для клонированных элементов списка
      const clonedOptions = clone.getElementsByTagName("option");
      // Вызов функции собирающей вызываемый список
      refreshDynamicSelect1Options(sel11, sel21, clonedOptions);
      // При изменении выбранного элемента в первом списке: // вызов функции пересобирающей вызываемый список
      sel11.addEventListener('change', () => {
        refreshDynamicSelect1Options(sel11, sel21, clonedOptions);
      });

    };
  
    // Функция для сборки динамического списка
    const refreshDynamicSelect1Options = (sel11, sel21, clonedOptions) => {
      // Удаление всех элементов динамического списка
      while (sel21.options.length) {
        sel21.remove(0);
      }
      const select1edOption = sel11.options[sel11.selectedIndex].value;
      // Перебор клонированных элементов списка
      for (let i = 0; i < clonedOptions.length; i++) {
        const option = clonedOptions[i];
        // Если название класса клонированного option эквивалентно "select"
        // либо эквивалентно значению option первого списка
        if (option.classList.contains('select1') ||
          option.classList.contains(select1edOption)) {
          // его нужно клонировать в динамически создаваемый список
          sel21.appendChild(option.cloneNode(true));
        }
      }
      // Отправляем событие change выбранного select
      const event = document.createEvent('HTMLEvents');
      event.initEvent('change', true, false);
      changeOption();
      sel21.dispatchEvent(event);
    };
    // Вызов скрипта при загрузке страницы
    document.addEventListener("DOMContentLoaded", () => {
      dynamicSelect1("select-11", "select-21");
      dynamicSelect1("select-21", "select-31");
    });

  })();


  /*my function*/


  let selMain1 = document.getElementById("select-1");
  let selMain2 = document.getElementById("select-11");
  let dinsps2 = document.getElementById("dinsps2");
  let regi = document.getElementById("select-21"); 
  let conti = document.getElementById("select-11");  
  let elem1 = document.getElementById("textCont");
  let inputT = document.getElementById("inputT");
  let selLast = document.getElementById("select-31");


  selLast.addEventListener('input', () => {
    hideInput();
  })



  regi.addEventListener("fokus", () => {
    alert('hyuuuyyyyy5555666666666')
  });

  conti.addEventListener("focus", () => {
    inputT.classList.remove("active");
  });


  /*функция показывающая скрытый инпут */
  function changeOption(){
      var selectedOption = regi.options[regi.selectedIndex];
      elem1.textContent = "Ви вказали регіон: " + selectedOption.text + ", тепер уточніть локацію та додайте опис питання/пропозиції:";
      return false;
  } 

      /*функция убирает  и оставляет inputT*/
   function hideInput() {
     if (inputT.classList.contains('active')) {
      changeOption();
      return false;
    } 
    else {
      inputT.classList.toggle("active");
      changeOption();
    }
}

/*кнопка показывает инпут*/
  let butt = document.getElementById("bt2");
  let butt1 = document.getElementById("bt1");
  let dinsps1 = document.getElementById("dinsps1");
  let formtell = document.querySelector(".formtell");
  const globalForm =document.getElementById('globalForm');
  let inps = document.querySelectorAll("input, textarea");
  let selects = document.querySelectorAll("select");

 let sel3 = document.getElementById("select-3");
 /*
  let sel11 = document.getElementById("select-11");
  let sel21 = document.getElementById("select-21");*/


  /*butt.addEventListener("click", () => {
    dinsps2.classList.toggle("active");

  });*/
  /*ловим селект3 для отображения выбора региона*/

  function reset() {
    dinsps1.onclick = function () {
      dinsps2.classList.remove("active");
    }
    
  }

  sel3.addEventListener("input", () => {
       hideDinsps2();
    });
      //функция показывает и оставляет dinssp2

      function hideDinsps2() {
        if (dinsps2.classList.contains('active')) {
         return false;
       } 
       else {
         dinsps2.classList.toggle("active");
       }
   }
   

    /*вешаем на кнопку событие авторизация*/

    document.querySelector("#bt1").onclick = (event) => {
      event.preventDefault();
      validateForm();
    }
  
/*проверка заполнения и отображение авторизации*/
  function validateForm()
  {
  var x=document.getElementById("fname").value;
  if (x==null || x=="") {
    alert("Заповніть, будьласка необхідні поля!");
  }
    else {
      formtell.classList.toggle("active");
      butt1.disabled = true;
    }
  }

  //let textValue = globalForm.querySelectorAll("option");

//фунция меняе значение на текст. Не распространяется на дочерние select
  /*function getText() {

    for (var i = 0; i < textValue.length; i++) 
      textValue[i].value = textValue[i].text;

  };*/



  globalForm.addEventListener('submit', function (e) {
    e.preventDefault();
    /*let massEx = ($(this).serializeArray()); 
    alert(JSON.stringify(massEx));*/

    for (var q=0; q<selects.length; ++q) {
      if (selects[q].value && selects[q].form === this) {

      console.log("%s %s", selects[q].name, selects[q].options[selects[q].selectedIndex].text);
      }
    }
   for (var q=0; q<inps.length; ++q) {
    if (inps[q].value && inps[q].form === this) {
    console.log("%s %s", inps[q].name, inps[q].value);
   }
  }
  let arr1 =  [selects[0].options[selects[0].selectedIndex].text,  selects[1].options[selects[1].selectedIndex].text, selects[2].options[selects[2].selectedIndex].text, selects[3].options[selects[3].selectedIndex].text, selects[4].options[selects[4].selectedIndex].text, inps[0].value, inps[1].value, inps[2].value, inps[3].value, inps[4].valu, inps[5].value];
  if (selects[2].options[selects[2].selectedIndex].text=="Виберіть дію" || selects[4].options[selects[4].selectedIndex].text=="Локація") {
    alert("Оберіть, будь-ласка дію та вкажіть географічну локацію");
    return false;
  }
  confirm(arr1);


  $.ajax({ 
  method: "POST",
  url: `../php/vendor/create.php`,
  data: {action: selects[0].options[selects[0].selectedIndex].text, questionsType: selects[1].options[selects[1].selectedIndex].text, helpsType: selects[2].options[selects[2].selectedIndex].text, continents: selects[3].options[selects[3].selectedIndex].text, regions: selects[4].options[selects[4].selectedIndex].text, city: inps[0].value, description: inps[1].value, name: inps[2].value, email: inps[3].value, phone: inps[4].value, date: inps[5].value}
   })
    .done(function () {

   /*setTimeout(function() {
    // Done Functions
    th.trigger("reset");
  }, 1000);
  inputT.classList.remove("active");*/
});
   window.location.href = '../region.php';
  });




