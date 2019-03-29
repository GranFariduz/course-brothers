<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="..\assets\images\favicon.png" type="image/png" />

  <!-- NORMALIZE CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' />

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700" rel="stylesheet">

  <!-- FONTAWESOME -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' />

  <!-- ANIMATE CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' />

  <!-- CUSTOM CSS -->
  <link rel='stylesheet' href='../styles/style.css' />

  <title>CourseBrother.com | One Stop Destination for Learning</title>
</head>
<body>
  
  
  <!-- MAIN_CONTAINER -->
  <div class="main-container main_container__results">


    <!-- NAVBAR_MAIN -->
    <?php include '../includes/navbar-main.php'; ?>
    <!-- /NAVBAR_MAIN -->

    <!-- LOGIN_REGISTER_MODALS -->
    <?php include '../includes/login-register-modal.php' ?>
    <!-- /LOGIN_REGISTER_MODALS -->

    <!-- MAIN_CONTAINER -->
    <main class="main_container">

      <!-- FILTER_RESULTS -->
      <div class="filter_results">

        <!-- will only show in mobile view -->
        <div class="filter_results__finisher">
          <div class="filter_results__finisher__apply">
            apply filters
          </div>
          <div class="filter_results__finisher__close">
            <i class='fa fa-times'></i>
            CLOSE
          </div>
        </div>

        <div class="filter_results__head">
          <h3>filter results</h3>
          <button>clear all</button>
        </div>

        <div class="filter_results__item">
          <div class="filter_results__item__head">
            <h5>course category</h5>
            <i class='fa fa-angle-up'></i>
          </div>
          <div class="filter_results__item__content">
            <form class='filter_results__item__form'>
              <input type="text" placeholder='search category' />
            </form>
            <div class="filter_results__item__check">
              <input type="checkbox"> distance mba <br>
              <input type="checkbox"> bba + mba <br>
              <input type="checkbox"> distance post graduate <br>
              <input type="checkbox"> distance mba <br>
            </div>
          </div>
        </div>

        <div class="filter_results__item">
          <div class="filter_results__item__head">
            <h5>institute</h5>
            <i class='fa fa-angle-up'></i>
          </div>
          <div class="filter_results__item__content">
            <form class='filter_results__item__form'>
              <input type="text" placeholder='search institutes' />
            </form>
            <div class="filter_results__item__check">
              <input type="checkbox"> annamalai university <br>
              <input type="checkbox"> nmims <br>
              <input type="checkbox"> upes <br>
              <input type="checkbox"> bharati vidyapeeth <br>
              <input type="checkbox"> scdl <br>
            </div>
          </div>
        </div>

        <div class="filter_results__item">
          <div class="filter_results__item__head">
            <h5>specialization</h5>
            <i class='fa fa-angle-up'></i>
          </div>
          <div class="filter_results__item__content">
            <form class='filter_results__item__form'>
              <input type="text" placeholder='search specializations' />
            </form>
            <div class="filter_results__item__check">
              <input type="checkbox"> finance <br>
              <input type="checkbox"> human resource <br>
              <input type="checkbox"> marketing <br>
              <input type="checkbox"> operations <br>
              <input type="checkbox"> supply chain <br>
            </div>
          </div>
        </div>

        <div class="filter_results__item">
          <div class="filter_results__item__head">
            <h5>exam centre</h5>
            <i class='fa fa-angle-up'></i>
          </div>
          <div class="filter_results__item__content">
            <form class='filter_results__item__form'>
              <input type="text" placeholder='search exam centres' />
            </form>
            <div class="filter_results__item__check">
              <input type="checkbox"> delhi ncr <br>
              <input type="checkbox"> kolkata <br>
              <input type="checkbox"> andhra pradesh <br>
              <input type="checkbox"> hugli <br>
            </div>
          </div>
        </div>

        <div class="filter_results__item">
          <div class="filter_results__item__head">
            <h5>affiliation</h5>
            <i class='fa fa-angle-up'></i>
          </div>
          <div class="filter_results__item__content">
            <form class='filter_results__item__form'>
              <input type="text" placeholder='search affiliations' />
            </form>
            <div class="filter_results__item__check">
              <input type="checkbox"> ugc <br>
              <input type="checkbox"> aicte <br>
              <input type="checkbox"> inc <br>
              <input type="checkbox"> iap <br>
            </div>
          </div>
        </div>

        <div class="filter_results__item">
          <div class="filter_results__item__head">
            <h5>certification type</h5>
            <i class='fa fa-angle-up'></i>
          </div>
          <div class="filter_results__item__content">
            <form class='filter_results__item__form'>
              <input type="text" placeholder='search certification types' />
            </form>
            <div class="filter_results__item__check">
              <input type="checkbox"> distance <br>
            </div>
          </div>
        </div>
        
        <div class="filter_results__item">
          <div class="filter_results__item__head">
            <h5>course type</h5>
            <i class='fa fa-angle-up'></i>
          </div>
          <div class="filter_results__item__content">
            <form class='filter_results__item__form'>
              <input type="text" placeholder='search course types' />
            </form>
            <div class="filter_results__item__check">
              <input type="checkbox"> distance <br>
            </div>
          </div>
        </div>

        <div class="filter_results__item">
          <div class="filter_results__item__head">
            <h5>delivery mode</h5>
            <i class='fa fa-angle-up'></i>
          </div>
          <div class="filter_results__item__content">
            <form class='filter_results__item__form'>
              <input type="text" placeholder='search delivery modes' />
            </form>
            <div class="filter_results__item__check">
              <input type="checkbox"> online self learning <br>
              <input type="checkbox"> books <br>
              <input type="checkbox"> weekend classes <br>
              <input type="checkbox"> distance learning <br>
            </div>
          </div>
        </div>

      </div>
      <!-- /FILTER_RESULTS -->


      <!-- COURSE_RESULTS -->
      <div class="course_results">

        <!-- will show only in mobile view -->
        <div class="course_results__mob__filter">
          <i class='fa fa-filter'></i>
        </div>

        <div class="course_results__head">
          <h3>showing <b>2</b> results for '<b>pgd mba</b>'</h3>
        </div>

        <div class="course_results__container">

          <div class="course_results__item">
            <div class="course_results__item__img">
              <img src="../assets/images/institute_img/assam.jpg" />
            </div>
            <div class="course_results__item__content">
              <div class="course_results__item__content__head">
                <h4><a href="">mba in supply chain</a></h4>
                <h5>assam downtown university</h5>
              </div>
              <div class="course_results__item__content__info">
                <div class="course_results__item__content__info__dur">
                  <img src="../assets/svg/Icons/red/stopwatch.svg" />
                  <h5>2 years</h5>
                </div>
                <div class="course_results__item__content__info__dm">
                  <h5>delivery mode</h5>
                  <h6>books, online learning</h6>
                </div>
              </div>
              <div class="course_results__item__content__price">
                <h3>Rs 17, 000 <span>(annual)</span></h3>
              </div>
            </div>
            <div class="course_results__item__buttons">
              <button>go to course</button>
              <button>add to compare</button>
            </div>
          </div>

          <div class="course_results__item">
            <div class="course_results__item__img">
              <img src="../assets/images/institute_img/annamalai.jpeg" />
            </div>
            <div class="course_results__item__content">
              <div class="course_results__item__content__head">
                <h4><a href="">mba in telecom</a></h4>
                <h5>annamalai university</h5>
              </div>
              <div class="course_results__item__content__info">
                <div class="course_results__item__content__info__dur">
                  <img src="../assets/svg/Icons/red/stopwatch.svg" />
                  <h5>2 years</h5>
                </div>
                <div class="course_results__item__content__info__dm">
                  <h5>delivery mode</h5>
                  <h6>online learning</h6>
                </div>
              </div>
              <div class="course_results__item__content__price">
                <h3>Rs 18, 000 <span>(annual)</span></h3>
              </div>
            </div>
            <div class="course_results__item__buttons">
              <button>go to course</button>
              <button>add to compare</button>
            </div>
          </div>

        </div>

      </div>
      <!-- /COURSE_RESULTS -->


      <!-- AD_BANNERS -->
      <div class="ad_banners">
        
        <div class="ad_banners__item">
          <h4>ad banner</h4>
        </div>
        <div class="ad_banners__item">
          <h4>ad banner</h4>
        </div>
        <div class="ad_banners__item">
          <h4>ad banner</h4>
        </div>

      </div>
      <!-- /AD_BANNERS -->

    </main>
    <!-- /MAIN_CONTAINER -->
    

    <!-- FOOTER -->
    <?php include '../includes/footer.php' ?>
    <!-- /FOOTER -->



  </div>
  <!-- /MAIN_CONTAINER -->


  <!-- jQuery -->
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
  </script>
  <!-- TweenMax -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
  <!-- EasyTabs -->
  <script 
    src='https://cdnjs.cloudflare.com/ajax/libs/jquery.easytabs/3.2.0/jquery.easytabs.min.js'>
  </script>
  <!-- WOW JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'></script>
  <!-- CUSTOM JS -->
  <script src='../js/courseResults.js'></script>
  <script src='../js/navbar.js'></script>

</body>
</html> 