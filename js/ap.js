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

    let dvs = myForm.regions; 
    let conti = myForm.continents; 
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
  let butt = document.getElementById("b1");
  let dinsps2 = document.getElementById("dinsps2");
  let dinsps1 = document.getElementById("dinsps1");
  let formtell = document.querySelector(".formtell");
  
  //console.log(formtell);


  /*butt.addEventListener("click", () => {
    dinsps2.classList.toggle("active");

  });*/
  /*ловим селект3 для отображения выбора региона*/

  function reset() {
    dinsps1.onclick = function () {
      dinsps2.classList.remove("active");

    }
    
  }

  let sel3 = document.getElementById("select-3");

  sel3.addEventListener("input", () => {
    dinsps2.classList.toggle("active");
    
      });
      //dinsps1.addEventListener("change", reset());

    /*вешаем на кнопку событие авторизация*/



  document.querySelector("#bt1").onclick = () => {
    document.querySelector("#bt1").onclick = (event) => {
      event.preventDefault();
      validateForm();
    }
  
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
    console.log(x);

  }

  console.log(formtell);



  //validateForm();
/*відображення текстоого поля*/

/*function cssClick(e){
    abg=document.getElementsByClassName('act');
    if (abg) {
        for (var i = 0; i<abg.length; i++) {
            abg[i].className='notact';
        }
    }
    e.className='act';

}*/
