// Back to top
$(window).scroll(function() {
  if ($(this).scrollTop() >= 1000) {
    $('.back-to-top').css('bottom', '3rem');
  } else {
    $('.back-to-top').css('bottom', '-10rem');
  }
});

$('.back-to-top').click(() => {
  $('html, body').animate({ scrollTop: 0 }, 800);
});



// For Login Modal Display
const loginButton = document.querySelector('.navbar_main__appendix__login');
const loginModal = document.querySelector('.login_modal');
const loginModalBackdrop = document.querySelector('.login_modal__backdrop');
const loginModalClose = document.querySelector('.login_modal__close');

loginButton.addEventListener('click', function() {
  loginModalBackdrop.classList.add('login_modal__backdrop--active');
  loginModal.classList.add('login_modal--active');
});

loginModalClose.addEventListener('click', function() {
  loginModalBackdrop.classList.remove('login_modal__backdrop--active');
  loginModal.classList.remove('login_modal--active');
});



// For Register Modal Display
const registerButton = document.querySelector('.navbar_main__appendix__register');
const registerModal = document.querySelector('.register_modal');
const registerModalBackdrop = loginModalBackdrop;
const registerModalClose = document.querySelector('.register_modal__close');

registerButton.addEventListener('click', () => {
  registerModalBackdrop.classList.add('login_modal__backdrop--active');
  registerModal.classList.add('register_modal--active');
});

registerModalClose.addEventListener('click', () => {
  registerModalBackdrop.classList.remove('login_modal__backdrop--active');
  registerModal.classList.remove('register_modal--active');
});

// For Register Modal Submit Fix
const replacedRegisterSubmit = document.querySelector('.register_modal__submit');
const registerFormButton = document.querySelector('.register_modal__main__form button');

replacedRegisterSubmit.addEventListener('click', () => {
  registerFormButton.click();
});


// Interchanging Register and Login Modals
const registerHereButton = document.querySelector('.login_modal__appendix__register');
const loginHereButton = document.querySelector('.register_modal__appendix__login');

registerHereButton.addEventListener('click', () => {
  registerModal.classList.add('register_modal--active');
  loginModal.classList.remove('login_modal--active');
});
loginHereButton.addEventListener('click', () => {
  loginModal.classList.add('login_modal--active');
  registerModal.classList.remove('register_modal--active');
});


// For Navbar Item Dropdown
const navbarList = document.querySelectorAll('.navbar_main__courses__item');
const navbarItems = document.querySelectorAll('.navbar_main__courses__item__dropdown');

navbarList.forEach((item, index) => {
  item.addEventListener('mouseover', (e) => {
    navbarItems[index].classList.add('navbar_main__courses__item__dropdown--active');
    e.stopPropagation();
  });
  item.addEventListener('mouseleave', (e) => {
    navbarItems[index].classList.remove('navbar_main__courses__item__dropdown--active');
    e.stopPropagation();
  });
});