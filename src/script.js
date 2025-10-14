const size = document.querySelectorAll('.tovar_div_size');

size.forEach(el => {
  el.addEventListener('click', () => {
    // Удаляем класс у всех элементов
    size.forEach(elem =>{ 
        elem.classList.add('no_active_size'); 
        elem.classList.remove('active_size');
    })
    // Добавляем класс только к кликнутому элементу
    el.classList.remove('no_active_size');
    el.classList.add('active_size');
  });
});

const color = document.querySelectorAll('.tovar_div_color');

color.forEach(el => {
  el.addEventListener('click', () => {
    // Удаляем класс у всех элементов
    color.forEach(elem =>{ 
        elem.classList.remove('active_color');
    })
    // Добавляем класс только к кликнутому элементу
    el.classList.add('active_color');
  });
});