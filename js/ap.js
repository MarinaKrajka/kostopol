(() => {
    const dynamicSelect = (id1, id2) => {
      // Определение переменных, ссылающихся на списки
      const sel11 = document.getElementById(id1);
      const sel21 = document.getElementById(id2);
      // Клонирование динамического списка
      const clone = sel21.cloneNode(true);
      // Определение переменных для клонированных элементов списка
      const clonedOptions = clone.getElementsByTagName("option");
      // Вызов функции собирающей вызываемый список
      refreshDynamicSelectOptions(sel11, sel21, clonedOptions);
      // При изменении выбранного элемента в первом списке: // вызов функции пересобирающей вызываемый список
      sel11.addEventListener('change', () => {
        refreshDynamicSelectOptions(sel11, sel21, clonedOptions);
      });

    };
  
    // Функция для сборки динамического списка
    const refreshDynamicSelectOptions = (sel11, sel21, clonedOptions) => {
      // Удаление всех элементов динамического списка
      while (sel21.options.length) {
        sel21.remove(0);
      }
      const selectedOption = sel11.options[sel11.selectedIndex].value;
      // Перебор клонированных элементов списка
      for (let i = 0; i < clonedOptions.length; i++) {
        const option = clonedOptions[i];
        // Если название класса клонированного option эквивалентно "select"
        // либо эквивалентно значению option первого списка
        if (option.classList.contains('select') ||
          option.classList.contains(selectedOption)) {
          // его нужно клонировать в динамически создаваемый список
          sel21.appendChild(option.cloneNode(true));
        }
      }
      // Отправляем событие change выбранного select
      const event = document.createEvent('HTMLEvents');
      event.initEvent('change', true, false);
      elem2.classList.toggle("active");
      conti.addEventListener("focus", () => {
        elem2.classList.remove("active");
    });

      sel21.dispatchEvent(event);
    };

    let dvs = document.getElementById("select-21"); 
    let conti = document.getElementById("select-11");  
    let elem1 = document.getElementById("textCont");
    let elem2 = document.getElementById("inputT");


    /*функция показывающая скрытый инпут */
    function changeOption(){
     
        var selectedOption = dvs.options[dvs.selectedIndex];
        elem1.textContent = "Ви вказали регіон: " + selectedOption.text + ", тепер уточніть локацію та додайте опис питання/пропозиції:";

    }
     
    dvs.addEventListener("change", changeOption);


    

    // Вызов скрипта при загрузке страницы
    document.addEventListener("DOMContentLoaded", () => {
      dynamicSelect("select-11", "select-21");
      dynamicSelect("select-21", "select-31");

    });


  })();
/*кнопка показывает инпут*/
  let butt = document.getElementById("bt2");
  let butt1 = document.getElementById("bt1");
  let dinsps2 = document.getElementById("dinsps2");
  let dinsps1 = document.getElementById("dinsps1");
  let formtell = document.querySelector(".formtell");
  const globalForm =document.getElementById('globalForm');
  let inps = document.querySelectorAll("input, textarea");
  let selects = document.querySelectorAll("select");

  let sel3 = document.getElementById("select-3");
 /*let sel2 = document.getElementById("select-2");
  let sel1 = document.getElementById("select-1");
  let sel11 = document.getElementById("select-11");
  let sel21 = document.getElementById("select-21");
  let sel31 = document.getElementById("select-31");*/


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
    dinsps2.classList.toggle("active");
    
      });
      //dinsps1.addEventListener("change", reset());

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
    alert("Необходимо заполнить поле Имя!");
  }
    else {
      formtell.classList.toggle("active");
    }
  }

  //let textValue = globalForm.querySelectorAll("option");

//фунция меняе значение на текст. Не распространяется на дочерние select
  function getText() {

    for (var i = 0; i < textValue.length; i++) 
      textValue[i].value = textValue[i].text;

  };


console.log(inps);

  globalForm.addEventListener('submit', function (e) {
    e.preventDefault();
    let massEx = ($(this).serializeArray()); 
    //alert(JSON.stringify(massEx));




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
  /*console.log(selects[1].options[selects[1].selectedIndex].text);
  console.log(selects[3].options[selects[3].selectedIndex].text);
  console.log(inps[3].value);*/
  let arr1 =  [selects[0].options[selects[0].selectedIndex].text,  selects[1].options[selects[1].selectedIndex].text, selects[2].options[selects[2].selectedIndex].text, selects[3].options[selects[3].selectedIndex].text, selects[4].options[selects[4].selectedIndex].text, inps[0].value, inps[1].value, inps[2].value, inps[3].value, inps[4].valu, inps[5].value];

  $.ajax({ 
  method: "POST",
  url: `../php/vendor/create.php`,
  data: {action: selects[0].options[selects[0].selectedIndex].text, questionsType: selects[1].options[selects[1].selectedIndex].text, helpsType: selects[2].options[selects[2].selectedIndex].text, continents: selects[3].options[selects[3].selectedIndex].text, region: selects[4].options[selects[4].selectedIndex].text, city: inps[0].value, description: inps[1].value, name: inps[2].value, email: inps[3].value, phone: inps[4].value, date: inps[5].value}
   })
    
    .done(function () {

   alert(JSON.stringify(arr1));
   window.location.href = '../region.php'; 
     })
  });

