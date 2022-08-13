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



// Меню бургер
// Меню бургер
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
// Смена картинки добавить в закладки******************/ */

const iconFavoriteNot = document.querySelector('.favorite__block__image_not');
const iconFavoriteYes = document.querySelector('.favorite__block__image_yes');
const favoriteImageBlock = document.querySelector('#element__bookmark');

 function onClick23(){

   iconFavoriteNot.classList.toggle('_favorite_active_not');
   iconFavoriteYes.classList.toggle('_favorite_active_yes');

};




/************************скрыть показать больше в панели поиска*************************** */
const search_buy = document.querySelector('.search__block_block2');
const search_square = document.querySelector('.search__block_square_price');
const clear_form = document.querySelector('.clear_form');
const remember_search = document.querySelector('.remember_search');
const search__block__map = document.querySelector('.search__block__map');

/*******изменение стилей для полного поиска*****/
const search__block_container_2 = document.querySelector('.search__block_container_2');
const search__block__additional = document.querySelector('.search__block__additional');
const additional_show__image = document.querySelector('.additional_show__image');


const showSearch = document.querySelector('.additional__show_hide');
showSearch.addEventListener('click', function onClick() {
    search_square.classList.toggle('show__search');
    search_buy.classList.toggle('show__search2');
    clear_form.classList.toggle('show__search3');
    remember_search.classList.toggle('show__search4');
    search__block__map.classList.toggle('show__search5');

    /*******изменение стилей для полного поиска*****/

    search__block_container_2.classList.toggle('searc__block_container_2_changed');
    search__block__additional.classList.toggle('search__block__additional_changed');
    additional_show__image.classList.toggle('additional_show__image_changed');
});

//////////////////******POP UP страницы личного кабинета********//////////////////////////

//////////////////******POP UP страницы личного кабинета********//////////////////////////

//////////////////******POP UP страницы личного кабинета********//////////////////////////

const popupLinks = document.querySelectorAll('.popup-link');
const body = document.querySelector('body');
const lockPadding = document.querySelectorAll(".lock-padding");

let unlock = true;

const timeout = 300;

if (popupLinks.length > 0) {
   for (let index = 0; index < popupLinks.length; index++) {
      const popupLink = popupLinks[index];
      popupLink.addEventListener("click", function (e) {
         const popupName = popupLink.getAttribute('href').replace('#', '');
         const curentPopup = document.getElementById(popupName);
         popupOpen(curentPopup);
         e.preventDefault();
      });
   }
}
const popupCloseIcon = document.querySelectorAll('.close-popup');
if (popupCloseIcon.length > 0) {
   for (let index = 0; index < popupCloseIcon.length; index++) {
      const el = popupCloseIcon[index];
      el.addEventListener('click', function (e) {
         popupClose(el.closest('.popup'));
         e.preventDefault();
      });
   }
}

function popupOpen(curentPopup) {
   if (curentPopup && unlock) {
      const popupActive = document.querySelector('.popup.open');
      if (popupActive) {
         popupClose(popupActive, false);
      } else {
         bodyLock();
      }
      curentPopup.classList.add('open');
      curentPopup.addEventListener("click", function (e) {
         if (!e.target.closest('.popup__content')) {
            popupClose(e.target.closest('.popup'));
         }
      });
   }
}

function popupClose(popupActive, doUnlock = true) {
   if (unlock) {
      popupActive.classList.remove('open');
      if (doUnlock) {
         bodyUnLock();
      }
   }
}

function bodyLock() {
   const lockPaddingValue = window.innerWidth - document.querySelector('.main__wrapper').offsetWidth + 'px';

   if (lockPadding.length > 0) {
      for (let index = 0; index < lockPadding.length; index++) {
         const el = lockPadding[index];
         el.style.paddingRight = lockPaddingValue;
      }
   }
   body.style.paddingRight = lockPaddingValue;
   body.classList.add('lock');

   unlock = false;
   setTimeout(function () {
      unlock = true;
   }, timeout);
}

function bodyUnLock() {
   setTimeout(function () {
      if (lockPadding.length > 0) {
         for (let index = 0; index < lockPadding.length; index++) {
            const el = lockPadding[index];
            el.style.paddingRight = '0px';
         }
      }
      body.style.paddingRight = '0px';
      body.classList.remove('lock');
   }, timeout);

   unlock = false;
   setTimeout(function () {
      unlock = true;
   }, timeout);
}

document.addEventListener('keydown', function (e) {
   if (e.which === 27) {
      const popupActive = document.querySelector('.popup.open');
      popupClose(popupActive);
   }
});

(function () {
   // проверяем поддержку
   if (!Element.prototype.closest) {
      // реализуем
      Element.prototype.closest = function (css) {
         var node = this;
         while (node) {
            if (node.matches(css)) return node;
            else node = node.parentElement;
         }
         return null;
      };
   }
})();
(function () {
   // проверяем поддержку
   if (!Element.prototype.matches) {
      // определяем свойство
      Element.prototype.matches = Element.prototype.matchesSelector ||
         Element.prototype.webkitMatchesSelector ||
         Element.prototype.mozMatchesSelector ||
         Element.prototype.msMatchesSelector;
   }
})();
//////*****Предпросмотр загруженного сообщения************** */
//////*****Предпросмотр загруженного сообщения************** */
//////*****Предпросмотр загруженного сообщения************** */
function showPreview(event){
   if(event.target.files.length > 0){
     var src = URL.createObjectURL(event.target.files[0]);
     var preview = document.getElementById("file-ip-1-preview");
     preview.src = src;
     preview.style.display = "block";
   }
 }
 function showPreview2(event){
   if(event.target.files.length > 0){
     var src = URL.createObjectURL(event.target.files[0]);
     var preview = document.getElementById("file-ip-2-preview");
     preview.src = src;
     preview.style.display = "block";
   }
 }
 function showPreview3(event){
   if(event.target.files.length > 0){
     var src = URL.createObjectURL(event.target.files[0]);
     var preview = document.getElementById("file-ip-3-preview");
     preview.src = src;
     preview.style.display = "block";
   }
 }

//////////////////***cкрипт страницы элемента **///
//////////////////***cкрипт страницы элемента **///
//////////////////***cкрипт страницы элемента **///
//////////////////***cкрипт страницы элемента **///
//////////////////***cкрипт страницы элемента **///

function myImageFunction(productSmallImg) {
   console.log(productSmallImg.src)
   var productFullImg = document.getElementById("img-Box");
   console.log(productFullImg)
   productFullImg.src = productSmallImg.src;
}
var modal = document.getElementById("myModal");
var btn = document.getElementById("zoom");
var img=document.getElementById("img-Box");
var modalImg = document.getElementById("img01");

btn.onclick = function(){
 modal.style.display = "block";
 modalImg.src = img.src;
 document.body.classList.add('_lock');
 
}

var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
 modal.style.display = "none";
 document.body.classList.remove('_lock');
 
}
window.onclick = function(event) {
   if (event.target == modal) {
     modal.style.display = "none";
     document.body.classList.remove('_lock');
   }
 }






