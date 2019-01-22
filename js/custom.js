$(document).ready(function() {

  // Running everything when whole webpage loads including images
  window.addEventListener("load", function() {

    new WOW().init();

    // Header Carousel
    let masterCarousel = document.querySelectorAll(".siema");
    let headerSiema = new Siema({
      selector: masterCarousel[0],
      draggable: false,
      loop: true,
      duration: 400
    });

    $(".header__carousel__buttons .fa-angle-right").click(() => {
      headerSiema.next();
    });
    $(".header__carousel__buttons .fa-angle-left").click(() => {
      headerSiema.prev();
    });

    setInterval(() => {
      headerSiema.next();
    }, 6000);

    // Testimonial Scroll
    let testCarousel = new Siema({
      selector: masterCarousel[1],
      perPage: 1,
      duration: 400,
      draggable: false,
      loop: true
    });

    setInterval(() => {
      testCarousel.next();
    }, 6000);

    // News Scroll
    let newsCarousel = new Siema({
      selector: masterCarousel[2],
      perPage: 1,
      duration: 400,
      draggable: false,
      loop: true
    });

    $(".news_updates__back").click(() => {
      newsCarousel.prev();
    });

    $(".news_updates__next").click(() => {
      newsCarousel.next();
    });

    let newsInterval = "";
    const newsContainer = document.querySelector(".news_updates__container");

    newsInterval = setInterval(() => {
      newsCarousel.next();
    }, 5000);

    newsContainer.addEventListener("mouseover", e => {
      clearInterval(newsInterval);
    });

    newsContainer.addEventListener("mouseleave", () => {
      newsInterval = setInterval(() => {
        newsCarousel.next();
      }, 5000);
    });
  });

  // Add tooltips
  $(".tooltip").tooltipster({
    theme: "tooltipster-shadow",
    maxWidth: "180"
  });

  // For Universities & Colleges carousel
  $(".rslides").responsiveSlides({
    auto: true,
    speed: 1000,
    timeout: 7000
  });

  // Dynamic change for Featured Courses
  const featuredCourses = document.querySelectorAll(
    ".featured_courses__main__nav ul li"
  );
  const featuredCoursesItems = document.querySelectorAll(
    ".featured_courses__body__container"
  );

  featuredCourses[0].firstChild.style.color = "#DB324D";
  featuredCourses[0].classList.add("list--active");

  const coursesChanger = itemNum => {
    featuredCourses[itemNum].addEventListener("mouseover", e => {
      featuredCoursesItems.forEach((item, i) => {
        if (i === itemNum) {
          featuredCourses[i].firstChild.style.color = "#DB324D";
          featuredCourses[i].classList.add("list--active");
          item.style.zIndex = "5";
          item.style.opacity = "1";
        } else {
          item.style.opacity = "0";
          item.style.zIndex = "-9";
          featuredCourses[i].firstChild.style.color = "white";
          featuredCourses[i].classList.remove("list--active");
        }
      });
    });
  };

  featuredCourses.forEach((item, index) => {
    coursesChanger(index);
  });

  featuredCoursesItems.forEach((item, index) => {
    if (index === 0) {
      item.style.opacity = "1";
    } else {
      item.style.opacity = "0";
    }
  });

  // For the top courses modal
  let topCourseItems = document.querySelectorAll(".top_courses__item");
  let topCoursesItemsSections = document.querySelectorAll(
    ".top_courses__item__section"
  );
  let topCoursesItemsSectionsButtons = document.querySelectorAll(
    ".top_courses__item__section__button"
  );

  function sectionShow(sectionNum) {
    topCoursesItemsSections[sectionNum].style.zIndex = "5";
    topCoursesItemsSections[sectionNum].style.opacity = "1";
  }

  function sectionHide(sectionNum) {
    topCoursesItemsSections[sectionNum].style.zIndex = "-5";
    topCoursesItemsSections[sectionNum].style.opacity = "0";
  }

  for (let i = 0; i < topCourseItems.length; i++) {
    topCourseItems[i].addEventListener("click", () => {
      sectionShow(i);
    });
    topCoursesItemsSectionsButtons[i].addEventListener("click", e => {
      e.stopPropagation();
      sectionHide(i);
    });
  }

  // Parallax for featured courses
  $(window).on("scroll", () => {
    $(".featured_courses").css({
      "background-position": `100% ${$(document).scrollTop() / 7}%`
    });
  });

  // For getting newsletter popups every 10 seconds
  // let newsInterval = null;

  // function showNewsletter() {
  //  if(check_cookie()){
  //   $('.newsletter_popup__backdrop').addClass('newsletter_popup__backdrop--active');
  //   $('.newsletter_popup').css({
  //     'transform': 'scale(1) translate(-50%, -50%)',
  //     'opacity': '1',
  //     'display': 'relative',
  //     'z-index': '8'
  //   });
  //  }
  // };

  // function hideNewsletter() {
  //   $('.newsletter_popup__backdrop').removeClass('newsletter_popup__backdrop--active');
  //   $('.newsletter_popup').css({
  //     'transform': 'scale(0) translate(-50%, -50%)',
  //     'opacity': '0',
  //     'z-index': '1'
  //   });
  // }

  // newsInterval = setInterval(() => {
  //   showNewsletter();
  // }, 10000);

  // $('.newsletter_popup__main__close').click(function() {
  //   hideNewsletter();
  //   clearInterval(newsInterval);
  //   newsInterval = setInterval(() => {
  //     showNewsletter();
  //   }, 10000);
  // });

  // $(".newsletter_popup__main__form div").click(function() {
  //   hideNewsletter();
  //   clearInterval(newsInterval);
  // });
});
