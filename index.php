<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="assets\images\favicon.png" type="image/png" />

  <!-- NORMALIZE CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' />

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700" rel="stylesheet">

  <!-- FONTAWESOME -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' />

  <!-- jQuery Plugins -->

  <!-- RESPONSIVE SLIDES -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.min.css" />

  <!-- TOOLTIPSTER -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/tooltipster.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/themes/tooltipster-shadow.min.css' />

  <!-- ANIMATE CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' />

  <!-- CUSTOM CSS -->
  <link rel='stylesheet' href='./styles/style.css' />

  <title>CourseBrother.com | One Stop Destination for Learning</title>
</head>
<body>
  
  <!-- MAIN CONTAINER -->
  <div class="main-container">


    <!-- NEWSLETTER_POPUP -->
    <?php include 'includes/newsletter-popup.php'; ?>
    <!-- NEWSLETTER_POPUP -->
    

    <!-- BACK_TO_TOP -->
    <?php include 'includes/back-to-top.php'; ?>
    <!-- /BACK_TO_TOP -->


    <!-- NAVBAR_MAIN -->
    <div class='navbar_main'>

      <div class="navbar_main__appendix">

        <div class='navbar_main__appendix__container'>
          <div class="navbar_main__appendix__login">
            <span><img src="./assets/svg/Icons/red/log-in.svg" /></span>
            <h5>login</h5>
          </div>
          
          <div class="navbar_main__appendix__register">
            <span><img src="./assets/svg/Icons/white/clipboard-with-pencil-.svg" /></span>
            <h5>register</h5>
          </div>
          
          <div class="navbar_main__appendix__cart">
            <h5>cart</h5>
            <span><img src="./assets/svg/Icons/white/shopping-cart.svg" /></span>
          </div>
        </div>  

      </div>

      <div class="navbar_main__header">

        <div class='navbar_main__header__container'>

          <div class="navbar_main__header__logo">
            <a href=''><img src="./assets/svg/cb-logo.svg" /></a>
          </div>

          <div class="navbar_main__header__search">
            <form>
              <input type="text" placeholder='search for courses     eg: mba, bba' />
              <input type="submit" value="LET'S GO!">
            </form>
          </div>

          <div class="navbar_main__header__contact">

            <div class="navbar_main__header__contact__item">
              <h4>+91 7044356122</h4>
              <span><img src="./assets/svg/Icons/white/phone-book.svg" /></span>
            </div>

            <div class="navbar_main__header__contact__item">
              <h4>shyam.d@gmail.com</h4>
              <span class='tooltip' title='Click to open in your default email application'>
                <a href='mailto:shyam.d@gmail.com'><img src="./assets/svg/Icons/white/mail-black-envelope-symbol.svg" /></a>
              </span>
            </div>

          </div>

        </div>

      </div>

      <div class="navbar_main__courses">
        <div class="navbar_main__courses__container">

          <div class="navbar_main__courses__item">
            <h3>all colleges</h3>
            <span><i class="fa fa-angle-down"></i></span>
          </div>

          <div class="navbar_main__courses__item">
            <h3>pg courses</h3>
            <span><i class="fa fa-angle-down"></i></span>
          </div>

          <div class="navbar_main__courses__item">
            <h3>ug courses</h3>
            <span><i class="fa fa-angle-down"></i></span>
          </div>

          <div class="navbar_main__courses__item">
            <h3>diploma</h3>
            <span><i class="fa fa-angle-down"></i></span>
          </div>

          <div class="navbar_main__courses__item">
            <h3>certificate</h3>
            <span><i class="fa fa-angle-down"></i></span>
          </div>
          

        </div>
      </div>

    </div>
    <!-- /NAVBAR_MAIN -->


    <!-- HEADER -->
    <div class="header">

      <div class="header__overlay">
        <div class="header__overlay__icons">

          <div class="header__overlay__icons__item">
            <h5>credible institutes</h5>
            <span class='tooltip' title='For formal education courses, check the status of the listed universities on the UGC DEB website. https://www.ugc.ac.in/deb/'>
              <img src="./assets/svg/Icons/white/apartments.svg" />
            </span>
          </div>

          <div class="header__overlay__icons__item">
            <h5>transparent information</h5>
            <span class='tooltip' title='CourseBrother.com is not a study center and has no role in admission decisions, 
              examinations and / or awarding any degree or diploma'>
              <img src="./assets/svg/Icons/white/information.svg" />
            </span>
          </div>

          <div class="header__overlay__icons__item">
            <h5>genuine fee</h5>
            <span class='tooltip' title='CourseBrother.com charges no extra fee. No discount is offered by the course provider of any of the courses listed'>
              <img src="./assets/svg/Icons/white/give-money.svg" />
            </span>
          </div>

          <div class="header__overlay__icons__item">
            <h5>counselling support</h5>
            <span class='tooltip' title='Get expert and dedicated counselling support to make an informed education decision'>
              <img src="./assets/svg/Icons/white/phone-receiver.svg" />
            </span>
          </div>

          <div class="header__overlay__icons__item">
            <h5>study material</h5>
            <span class='tooltip' title='Study material is provided by the respective course providers'>
              <img src="./assets/svg/Icons/white/books-stack-of-three.svg" />
            </span>
          </div>

        </div>
      </div>

      <div class="header__carousel">
        <div class="header__carousel__container">
          <div class="header__carousel__buttons">
            <i class="fa fa-angle-left"></i>
            <i class="fa fa-angle-right"></i>
          </div>
          <div class="siema">

            <div style='background-image: url("./assets/images/about-bg.jpg")'></div>
            <div style='background-image: url("./assets/images/about-founder-bg.jpg")'></div>
            <div style='background-image: url("./assets/images/contact-bg.jpg")'></div>
            <div style='background-image: url("./assets/images/about-founder-bg.jpg")'></div>

          </div>
        </div>
      </div>

    </div>
    <!-- /HEADER -->


    <!-- UNIVERSITIES_COLLEGES -->
    <div class="uni_and_col">

      <div class="uni_and_col__title">trusted by 10+ universities & colleges</div>
        
      <ul class="rslides">
        <li>
          <img src="./assets/images/universities_institute_img/aims1.jpg" />
          <img src="./assets/images/universities_institute_img/iamai3.png" />
          <img src="./assets/images/universities_institute_img/InternShala2.png" />
          <img src="./assets/images/universities_institute_img/NMIMS.png" />
          <img src="./assets/images/universities_institute_img/whizlabs2.png" />
        </li>
        <li>
          <img src="./assets/images/universities_institute_img/toppr2.jpg" />
          <img src="./assets/images/universities_institute_img/whizlabs2.png" />
          <img src="./assets/images/universities_institute_img/Norwich1.png" />
          <img src="./assets/images/universities_institute_img/aims1.jpg" />
          <img src="./assets/images/universities_institute_img/iamai3.png" />
        </li>
      </ul>

    </div>
    <!-- /UNIVERSITIES_COLLEGES -->


    <!-- FEATURED_COURSES -->
    <div class="featured_courses">

      <div class="featured_courses__main">

        <div class="featured_courses__main__head">
          <h2>featured courses</h2>
        </div>

        <div class="featured_courses__main__nav">
          <ul>
              <li><a href=''>pgd mba</a></li>
              <li><a href=''>pg courses</a></li>
              <li><a href=''>ug courses</a></li>
              <li><a href=''>diploma courses</a></li>
              <li><a href=''>certificate courses</a></li>
          </ul>
        </div>

        <div class="featured_courses__body">

          <div class="featured_courses__body__container">

            <div class="featured_courses__body__item">
              <h4>annamalai university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>
            
            <div class="featured_courses__body__item">
              <h4>assam downtown university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>

            <div class="featured_courses__body__item">
              <h4>bharati vidyapeeth university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>

            <div class="featured_courses__body__item">
              <h4>upes</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>
              
          </div>


          <div class="featured_courses__body__container">

            <div class="featured_courses__body__item">
              <h4>nmims</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>
            
            <div class="featured_courses__body__item">
              <h4>annamalai university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>
            
            <div class="featured_courses__body__item">
              <h4>assam downtown university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>

            <div class="featured_courses__body__item">
              <h4>bharti vidyapeeth university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>
              
          </div>

          <div class="featured_courses__body__container">

            <div class="featured_courses__body__item">
              <h4>upes</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>
            
            <div class="featured_courses__body__item">
              <h4>assam downtown university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>
            
            <div class="featured_courses__body__item">
              <h4>annamalai university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>

            <div class="featured_courses__body__item">
              <h4>nmims</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>
              
          </div>

          <div class="featured_courses__body__container">

            <div class="featured_courses__body__item">
              <h4>ranthambhour university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>
            
            <div class="featured_courses__body__item">
              <h4>annamalai university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>
            
            <div class="featured_courses__body__item">
              <h4>annamalai university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>

            <div class="featured_courses__body__item">
              <h4>annamalai university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>
              
          </div>

          <div class="featured_courses__body__container">

            <div class="featured_courses__body__item">
              <h4>phannamalai university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>
            
            <div class="featured_courses__body__item">
              <h4>annamalai university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>
            
            <div class="featured_courses__body__item">
              <h4>annamalai university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>

            <div class="featured_courses__body__item">
              <h4>annamalai university</h4>
              <div class="featured_courses__body__item__course">
                <span>hr management</span>
              </div>
              <div class="featured_courses__body__item__info">
                <div class="featured_courses__body__item__info__price">
                  rs 35, 000
                </div>
                <div class="featured_courses__body__item__info__year">
                  2 years
                </div>
              </div>
              <div class="featured_courses__body__item__buttons">
                <button>apply now</button>
                <button>read more</button>
              </div>
            </div>
              
          </div>

        </div>

      </div>

    </div>
    <!-- /FEATURED_COURSES -->


    <!-- FEATURES -->
    <div class="site_features">
      <div class='site_features__out'>
        <h1 class='site_features__title wow fadeIn'>FEW REASONS WHY STUDENTS PREFER US</h1>
        <h3 class='site_features__subtitle'><span>CourseBrother.com</span> is your one-stop destination for course exploration & making an informed education decision</h3>
        <div class="site_features__container">
        
          <div class="site_features__section wow fadeIn">
            <div class="section_icon"><span><img src='./assets/svg/Icons/white/library.svg' /></span></div>
            <div class="section_text">
              <h3>COURSES FOR EVERYONE</h3>
              <p>A student can make an informed career decision by choosing from a bouquet of degree, diploma & certificate courses.</p>
            </div>
          </div>
          <div class="site_features__section wow fadeIn" data-wow-delay='0.2s'>
            <div class="section_icon"><span><img src='./assets/svg/Icons/white/online.svg' /></span></div>
            <div class="section_text">
              <h3>TOP COURSES BY PROVIDERS</h3>
              <p>A student gets access to more than 100 Indian & International course providers, who offer high quality, credible and industry acceptable education.</p>
            </div>
          </div>
          <div class="site_features__section wow fadeIn" data-wow-delay='0.4s'>
            <div class="section_icon"><span><img src='./assets/svg/Icons/white/group.svg' /></span></div>
            <div class="section_text">
              <h3>STRONG STUDENT COMMUNITY</h3>
              <p>We have a strong network of students across geographies. Be a part of this ever-growing student base and benefit from diverse experience and knowledge.</p>
            </div>
          </div>
          <div class="site_features__section wow fadeIn" data-wow-delay='0.6s'>
            <div class="section_icon"><span><img src='./assets/svg/Icons/white/work.svg' /></span></div>
            <div class="section_text">
              <h3>GREAT LEARNING EXPERIENCE</h3>
              <p>A student benefits from additional services like networking opportunities, placement assistance through our Job Portal and expert counselling.</p>
            </div>
          </div>
        
        </div>
      </div>
    </div>
    <!-- /FEATURES -->


    <!-- TESTIMONIALS -->
    <div class="testimonials">

      <div class='testimonials__container'>
        <div class="testimonials__title">
          <h3>25, 000+</h3>
          <span>happy students</span>
        </div>
        
        <div class='testimonials__body__container siema'>
          <div class="testimonials__body">
            
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>lalit messi</h5>
              <h6>upes</h6>
            </div>
          
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>Krishna Ronaldo</h5>
              <h6>nmims</h6>
            </div>
          
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>Kevin De Bruyne</h5>
              <h6>scdl</h6>
            </div>
          
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>Neymar Jr.</h5>
              <h6>scdl</h6>
            </div>
          
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>Ulquiorra</h5>
              <h6>annamalai</h6>
            </div>
          
          </div>
          <div class="testimonials__body">
            
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>Romelu Lukaku</h5>
              <h6>upes</h6>
            </div>
          
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>Dani Alves</h5>
              <h6>nmims</h6>
            </div>
          
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>Pulisic</h5>
              <h6>scdl</h6>
            </div>
          
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>Christian Erikson</h5>
              <h6>scdl</h6>
            </div>
          
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>Ulquiorra</h5>
              <h6>annamalai</h6>
            </div>
            
          </div>
          <div class="testimonials__body">
            
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>Keylor Navas</h5>
              <h6>upes</h6>
            </div>
          
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>Thibaut Curtois</h5>
              <h6>nmims</h6>
            </div>
          
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>Iker Casillas</h5>
              <h6>scdl</h6>
            </div>
          
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>Gianluigi Buffon</h5>
              <h6>scdl</h6>
            </div>
          
            <div class="testimonials__body__item">
              <img src="./assets/images/about_img/messi.jpg" />
              <h5>Pickford</h5>
              <h6>annamalai</h6>
            </div>
            
          </div>
        </div>
      </div>

    </div>
    <!-- /TESTIMONIALS -->


    <!-- TOP_COURSES -->
    <div class="top_courses">
      
      <h2 class='top_courses__title'>our top picks</h2>
      <div class="top_courses__container">
        
        <div class="top_courses__item">
          <img src="./assets/svg/Icons/red/graduate-student-avatar.svg" />
          <h3>graduate & <br> post-graduate</h3>
          <div class="top_courses__item__section">
            <div class="top_courses__item__section__button">
              <i class='fa fa-times'></i>
            </div>
            <div class='top_courses__item__section__container'>
              <h4>top graduate & post graduate courses</h4>
              <ul>
                <a href=''><li>mba</li></a>
                <a href=''><li>executive mba</li></a>
                <a href=''><li>ma</li></a>
                <a href=''><li>mcom</li></a>
                <a href=''><li>mca</li></a>
                <a href=''><li>msc</li></a>
                <a href=''><li>llm</li></a>
                <a href=''><li>bba</li></a>
                <a href=''><li>ba</li></a>
                <a href=''><li>bcom</li></a>
                <a href=''><li>bca</li></a>
                <a href=''><li>bsc</li></a>
              </ul>
            </div>
          </div>
        </div>

        <div class="top_courses__item">
          <img src="./assets/svg/Icons/red/mirror.svg" />
          <h3>specialization</h3>
          <div class="top_courses__item__section">
            <div class="top_courses__item__section__button">
              <i class='fa fa-times'></i>
            </div>
            <div class='top_courses__item__section__container'>
              <h4>top specialization courses</h4>
              <ul>
                <a href=''><li>Information Technology</li></a>
                <a href=''><li>hr</li></a>
                <a href=''><li>marketing</li></a>
                <a href=''><li>retail</li></a>
                <a href=''><li>operations</li></a>
                <a href=''><li>aviation</li></a>
                <a href=''><li>oil & gas</li></a>
                <a href=''><li>journalism</li></a>
              </ul>
            </div>
          </div>
        </div>

        <div class="top_courses__item">
          <img src="./assets/svg/Icons/red/old-school.svg" />
          <h3>universities</h3>
          <div class="top_courses__item__section">
            <div class="top_courses__item__section__button">
              <i class='fa fa-times'></i>
            </div>
            <div class='top_courses__item__section__container'>
              <h4>top universities</h4>
              <ul>
                <a href=''><li>nmims</li></a>
                <a href=''><li>annamalai university</li></a>
                <a href=''><li>bharati vidyapeeth</li></a>
                <a href=''><li>upes</li></a>
                <a href=''><li>adtu</li></a>
                <a href=''><li>spjain</li></a>
              </ul>
            </div>
          </div>
        </div>

        <div class="top_courses__item">
          <img src="./assets/svg/Icons/red/graduate-diploma.svg" />
          <h3>diploma & <br> pg diploma</h3>
          <div class="top_courses__item__section">
            <div class="top_courses__item__section__button">
              <i class='fa fa-times'></i>
            </div>
            <div class='top_courses__item__section__container'>
              <h4>top diploma & pg diploma courses</h4>
              <ul>
                <a href=''><li>finance</li></a>
                <a href=''><li>hr</li></a>
                <a href=''><li>banking</li></a>
                <a href=''><li>marketing</li></a>
                <a href=''><li>it</li></a>
                <a href=''><li>operations</li></a>
                <a href=''><li>supply chain</li></a>
                <a href=''><li>retail</li></a>
              </ul>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- /TOP_COURSES -->


    <!-- NEWS_UPDATES -->
    <div class="news_updates">

      <div class="news_updates__back">
        <i class='fa fa-angle-left'></i>
      </div>

      <div class="news_updates__container">
        <div class="news_updates__head">
          <h2>news & updates</h2>
        </div>
        <div class="news_updates__main siema">

          <div class="news_updates__main__container">
            <div class="news_updates__main__section">
              <h5 class="news_updates__main__section__title">
                narsee monjee institute of management studies
              </h5>
              <div class="news_updates__main__section__sep"></div>
              <div class="news_updates__main__section__content">

                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>

              </div>
            </div>

            <div class="news_updates__main__section">
              <h5 class="news_updates__main__section__title">
                annamalai university
              </h5>
              <div class="news_updates__main__section__sep"></div>
              <div class="news_updates__main__section__content">
                
                <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>

              </div>
            </div>
          </div>

          <div class="news_updates__main__container">
            <div class="news_updates__main__section">
              <h5 class="news_updates__main__section__title">
                upes
              </h5>
              <div class="news_updates__main__section__sep"></div>
              <div class="news_updates__main__section__content">

                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>

              </div>
            </div>

            <div class="news_updates__main__section">
              <h5 class="news_updates__main__section__title">
                assam downtown university
              </h5>
              <div class="news_updates__main__section__sep"></div>
              <div class="news_updates__main__section__content">
                
                <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>

              </div>
            </div>
          </div>

          <div class="news_updates__main__container">
            <div class="news_updates__main__section">
              <h5 class="news_updates__main__section__title">
                scdl
              </h5>
              <div class="news_updates__main__section__sep"></div>
              <div class="news_updates__main__section__content">

                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>
                <div class="news_updates__main__section__content__item">
                  <h3>exam dates for pgd mba out</h3>
                  <p>
                    The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                    <a href="#">read more</a>
                  </p>
                </div>

              </div>
            </div>

            <div class="news_updates__main__section">
              <h5 class="news_updates__main__section__title">
                nmims
              </h5>
              <div class="news_updates__main__section__sep"></div>
              <div class="news_updates__main__section__content">
                
                <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>
                  <div class="news_updates__main__section__content__item">
                    <h3>exam dates for pgd mba out</h3>
                    <p>
                      The dates for the upcoming pgd mba exam has been announced to be at 11.1.2019...
                      <a href="#">read more</a>
                    </p>
                  </div>

              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="news_updates__next">
        <i class='fa fa-angle-right'></i>
      </div>

    </div>
    <!-- /NEWS_UPDATES -->

    <!-- LATEST_BLOGS -->
    <div class="latest_blogs">

      <h2 class='latest_blogs__title'>latest blog posts</h2>

      <div class="latest_blogs__container">
        
        <div class="latest_blogs__item">
          <div class='latest_blogs__item__bg__container'>
            <div style="background-image: url('./assets/images/about-bg.jpg')" class="latest_blogs__item__bg"></div>
          </div>
          <div class="latest_blogs__item__content">
            <h5 class="latest_blogs__item__content__title">
              how to stay safe from our outrageous fraud schemes
            </h5>
            <div class="latest_blogs__item__content__sep"></div>
            <p>In this day and age, we have proven ourself in the field of education consultancy, but there is a dark truth nobody knows about us yet....
            </p>
            <div class="latest_blogs__item__continue">
              <a href="">continue reading</a>
            </div>
          </div>
        </div>

        <div class="latest_blogs__item">
          <div class='latest_blogs__item__bg__container'>
            <div style="background-image: url('./assets/images/news-bg.jpg')" class="latest_blogs__item__bg"></div>
          </div>
          <div class="latest_blogs__item__content">
            <h5 class="latest_blogs__item__content__title">
              when we were caught doing bank fraud
            </h5>
            <div class="latest_blogs__item__content__sep"></div>
            <p>In this day and age, we have proven ourself in the field of education consultancy, but there is a dark truth nobody knows about us yet....
            </p>
            <div class="latest_blogs__item__continue">
              <a href="">continue reading</a>
            </div>
          </div>
        </div>

        <div class="latest_blogs__item">
          <div class='latest_blogs__item__bg__container'>
            <div style="background-image: url('./assets/images/header-bg.jpg')" class="latest_blogs__item__bg"></div>
          </div>
          <div class="latest_blogs__item__content">
            <h5 class="latest_blogs__item__content__title">
              here's why you should never buy from us
            </h5>
            <div class="latest_blogs__item__content__sep"></div>
            <p>In this day and age, we have proven ourself in the field of education consultancy, but there is a dark truth nobody knows about us yet...
            </p>
            <div class="latest_blogs__item__continue">
              <a href="">continue reading</a>
            </div>
          </div>
        </div>

        <div class="latest_blogs__item">
          <div class='latest_blogs__item__bg__container'>
            <div style="background-image: url('./assets/images/contact-bg.jpg')" class="latest_blogs__item__bg"></div>
          </div>
          <div class="latest_blogs__item__content">
            <h5 class="latest_blogs__item__content__title">
              how we hid our darkest secrets for so long
            </h5>
            <div class="latest_blogs__item__content__sep"></div>
            <p>In this day and age, we have proven ourself in the field of education consultancy, but there is a dark truth nobody knows about us yet...
            </p>
            <div class="latest_blogs__item__continue">
              <a href="">continue reading</a>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- /LATEST_BLOGS -->


    <!-- FOOTER -->
    <?php include 'includes/footer.php' ?>
    <!-- /FOOTER -->


  </div>
  <!-- /MAIN CONTAINER -->


  <!-- jQuery -->
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
  </script>
  <!-- TweenMax -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
  <!-- ToolTipster -->
  <script 
    src='https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js'>
  </script>
  <!-- EasyTabs -->
  <script 
    src='https://cdnjs.cloudflare.com/ajax/libs/jquery.easytabs/3.2.0/jquery.easytabs.min.js'>
  </script>
  <!-- RESPONSIVE SLIDES -->
  <script 
    src='https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.min.js'>
  </script>
  <!-- SIEMA CAROUSEL -->
  <script 
    src='https://cdn.jsdelivr.net/npm/siema@1.5.1/dist/siema.min.js'>
  </script>
  <!-- WOW JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'></script>
  <!-- CUSTOM JS -->
  <script src='./js/custom.js'></script>

</body>
</html>