/* === MENU NAVBAR === */
const navMenu = document.getElementById('nav-menu'),
navToggle = document.getElementById('nav-toggle'),
navClose = document.getElementById('nav-close')

/* === TAMPILAN MENU === */
navToggle.addEventListener('click', () =>{
  navMenu.classList.add('show-menu')
})

/* === MENU TUTUP */
navClose.addEventListener('click', () =>{
  navMenu.classList.remove('show-menu')
})

/*=============== LOGIN ===============*/
const login = document.getElementById('login'),
      loginBtn = document.getElementById('login-btn'),
      loginClose = document.getElementById('login-close')

/* Login show */
loginBtn.addEventListener('click', () =>{
   login.classList.add('show-login')
})

/* Login hidden */
loginClose.addEventListener('click', () =>{
   login.classList.remove('show-login')
})

(function ($) {
   "use strict";
   
   // Dropdown on mouse hover
   $(document).ready(function () {
       function toggleNavbarMethod() {
           if ($(window).width() > 992) {
               $('.navbar .dropdown').on('mouseover', function () {
                   $('.dropdown-toggle', this).trigger('click');
               }).on('mouseout', function () {
                   $('.dropdown-toggle', this).trigger('click').blur();
               });
           } else {
               $('.navbar .dropdown').off('mouseover').off('mouseout');
           }
       }
       toggleNavbarMethod();
       $(window).resize(toggleNavbarMethod);
   });
   
   
   // Back to top button
   $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
           $('.back-to-top').fadeIn('slow');
       } else {
           $('.back-to-top').fadeOut('slow');
       }
   });
   $('.back-to-top').click(function () {
       $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
       return false;
   });
   
})(jQuery);
  
// ================= TAMBAH KE FAVORIT ==================
function tambahFavorit(element) {
    var judul = element.getAttribute('data-judul');

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "tambah_favorit.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            alert(xhr.responseText);
        }
    };
    xhr.send("judul=" + encodeURIComponent(judul));
}

