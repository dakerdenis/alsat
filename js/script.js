"use strict"

const isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlacBerry: function () {
        return navigator.userAgent.match(/BlacBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (
            isMobile.Android() ||
            isMobile.BlacBerry() ||
            isMobile.iOS() ||
            isMobile.Opera() ||
            isMobile.Windows());

    }
};

if (isMobile.any()) {
    document.body.classList.add('_touch');
} else {
    document.body.classList.add('_pc');
}
console.log('SUKA');
// Меню бургер
const iconMenu = document.querySelector('.menu-burger_icon');
const menuBody = document.querySelector('.menu__body');



iconMenu.addEventListener('click', function onClick() {

    menuBody.classList.add('_active');

    document.body.classList.add('_lock');
});



const closeMenu = document.querySelector('.header_button');
closeMenu.addEventListener('click', function onClick2() {

    menuBody.classList.remove('_active');
    
    document.body.classList.remove('_lock');
});


// if(iconMenu){
//    const menuBody = document.querySelectorAll('.menu__body');
//
//    iconMenu.addEventListener("click", function onClick(){
//       iconMenu.classList.toggle('_active');
//       menuBody.classList.toggle('_active');
//       console.log('suka');
//    });
// }
// const iconMenu = document.querySelectorAll('.burger__mobile-burger');
// const menuBody = document.querySelectorAll('.menu__body');
//
// iconMenu.addEventListener("click", function handleClick(){
//     iconMenu.classList.add('._active');
// });



/************************скрыть показать больше в панели поиска*************************** */
 const search_buy = document.querySelector('.search__block_block2');
const search_square = document.querySelector('.search__block_square_price');
const clear_form = document.querySelector('.clear_form');
const remember_search = document.querySelector('.remember_search');
const search__block__map = document.querySelector('.search__block__map');


const search__block_container_2 = document.querySelector('.search__block_block');

const showSearch = document.querySelector('.additional__show_hide');
showSearch.addEventListener('click', function onClick() {
    search_square.classList.toggle('show__search');
    search_buy.classList.toggle('show__search2');    
    clear_form.classList.toggle('show__search3');
    remember_search.classList.toggle('show__search4');
    search__block__map.classList.toggle('show__search5');

    
    search__block_container_2.classList.toggle('change_width');
});

