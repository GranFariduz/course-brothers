// Preloader

// ALL ANIMATION VARIABLES
const course = document.querySelector('#course');
const brother = document.querySelector('#brother');
const com = document.querySelector('#com');
const container = document.querySelector('.preloader__main_container');
const tagline = document.querySelector('.preloader__tagline');

const logoAnimation = () => {

  const logoAnimTl = new TimelineMax({ repeat: -1, repeatDelay: 1, yoyo: true });
  logoAnimTl
    .fromTo(course, 2, { y: -1000 }, { y: -6, ease: Power3.easeInOut })
    .fromTo(brother, 2, { y: 1000 }, { y: 27, ease: Power3.easeInOut }, '-=1')
    .fromTo(com, 2, { x: -1000 }, { x: 20, ease: Power3.easeInOut }, '-=1')
    .fromTo(tagline, 2, { x: -2000 }, { x: -1, ease: Elastic.easeInOut }, '-=0.4')
    ;

  return logoAnimTl;

};

// GSAP start function
const start = () => {
  console.log('----- GSAP STARTS ------');
  const masterTl = new TimelineMax();
  masterTl.add(logoAnimation(), 'logo-anim');
};

// Starting off the animation(s)
start();

// Removing Preloader on Page Load
const preloader = document.querySelector('.preloader');
const bodyForOverflow = document.querySelector('body');

// Setting body to not overflow while preloader is present
bodyForOverflow.style.overflowY = 'hidden';

window.addEventListener('load', () => {
  bodyForOverflow.style.overflowY = 'scroll';
  preloader.classList.add('preloader--fadeOut');
});



// ------------------------------
// Back to top
$(window).scroll(function() {
  if ($(this).scrollTop() >= 1000) {
    $('.back-to-top').css('bottom', '8rem');
  } else {
    $('.back-to-top').css('bottom', '-10rem');
  }
});

$('.back-to-top').click(() => {
  $('html, body').animate({ scrollTop: 0 }, 800);
});



// ------------------------------
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



// ------------------------------
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



// ------------------------------
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


// -------------------------------
// For Dynamic width of navlist items
const navListDropdowns = document.querySelectorAll('.navbar_main__courses__item__dropdown');
const navListItems = document.querySelectorAll('.navbar_main__courses__item__dropdown__content');

const baseNavlistWidth = 18;
const navlistHeightLimit = 13;

navListItems.forEach((navListItem, index) => {
  if (navListItem.children.length >= navlistHeightLimit * 3) {
    changeNavlistWidth(index, 4);
  } else if (navListItem.children.length >= navlistHeightLimit * 2) {
    changeNavlistWidth(index, 3);
  } else if (navListItem.children.length >= navlistHeightLimit) {
    changeNavlistWidth(index, 2);
  } else {
    changeNavlistWidth(index);
  }
});

function changeNavlistWidth(index, multiplier = 1) {
  navListDropdowns[index].style.width = `${baseNavlistWidth * multiplier}rem`;
  navListItems[index].style.width = `${baseNavlistWidth * multiplier}rem`;
};


// -------------------------------
// For Random Student Popups
const studentPopup = document.querySelector('.student_popup');
const studentPopupChildren = studentPopup.children;
const studentPhrase = document.querySelector('.student_popup__text p');
const studentPopupAudio = document.querySelector('.student_popup audio');

const randomCities = ['Kolkata', 'Mumbai', 'Allahabad', 'Delhi', 'Sikkim', 'Patna', 'Kerala', 'Bangalore', 'Chennai', 'Pune', 'Jaipur', 'Agra'];
const randomNames = ['Rahul', 'Noor', 'Suman', 'Rajni', 'Brian', 'Shyam', 'Komal', 'Hemant', 'Aarav', 'Vivan', 'Aditya', 'Vihaan', 'Arjun', 'Ansh'];
const formNames = [
                  'Global Family Managed Business (GFMB)', 
                  'Luxury Brand Management', 
                  'Masters of Global Business (MGB)', 
                  'Global MBA (GMBA)', 
                  'Executive MBA (EMBA)', 
                  'Bachelor of Business Administration (BBA)', 
                  'Bachelor of Business Communication (BBC)', 
                  'Bachelor of Data Science (BDS)', 
                  'Bachelor of Economics'
                  ];

function showStudentPopup() {

  let randomName = Math.floor(Math.random() * randomNames.length);
  let randomCity = Math.floor(Math.random() * randomCities.length);
  let randomForm = Math.floor(Math.random() * formNames.length);
  studentPopupAudio.play();

  studentPopupChildren[2].textContent = randomNames[randomName];
  studentPopupChildren[3].textContent = randomCities[randomCity];
  studentPhrase.textContent = `has just filled out the ${formNames[randomForm]} form`;

  studentPopup.classList.add('student_popup--active');
  setTimeout(() => {
    studentPopup.classList.remove('student_popup--active');
  }, 5000);

};

(function studentPopupLoop () {
  let rand = Math.floor(Math.random() * 150000);
  setTimeout(() => {
    showStudentPopup();
    studentPopupLoop();
  }, rand);
}());


// For toggling sidebar in mobile version
const hambToggler = document.querySelector('.navbar_main__appendix__hamburger');
const sidebarMenu = document.querySelector('.mob__sidebar');
const sidebarMenuCloser = document.querySelector('.mob__sidebar__closer');

hambToggler.addEventListener('click', () => {
  sidebarMenu.style.left = '0';
});

sidebarMenuCloser.addEventListener('click', () => {
  sidebarMenu.style.left = '-30rem';
});