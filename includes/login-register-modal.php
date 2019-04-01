<!-- LOGIN_MODAL -->
<div class="login_modal__backdrop"></div>
<div class="login_modal">
  <div class="login_modal__close" title='close'>
    <i class='fa fa-times'></i>
  </div>
  <div class="login_modal__main">
    <div class="login_modal__main__title">
      <h2>log in</h2>
      <h4>to your account</h4>
    </div>
    <form class="login_modal__main__form">
      <input required type="email" placeholder='enter email address' />
      <input required type="password" placeholder='enter password' />
      <span class="login_modal__main__form__showpw">
        <i class="fas fa-eye"></i>
      </span>
      <button type='submit'>log in</button>
    </form>
    <div class="login_modal__main__oauth">
      <h3>login with</h3>
      <div class="login_modal__main__oauth__container">
        <div class="login_modal__main__oauth__item"></div>
        <div class="login_modal__main__oauth__item"></div>
        <div class="login_modal__main__oauth__item"></div>
      </div>
    </div>
    <!-- will show only in mobile view -->
    <a class='mob__login_to_reg' href="#">Don't have an account? Register here</a>
  </div>
  <div class="login_modal__appendix">
    <div class="login_modal__appendix__head">
      <h2>welcome back</h2>
      <div class="login_modal__appendix__head__sep"></div>
      <p>enter your login credentials to connect with us again!</p>
    </div>
    <div class="login_modal__appendix__register">
      <p>don't have an account?</p>
      <button>register here</button>
    </div>
  </div>
</div>
<!-- /LOGIN_MODAL -->

<!-- REGISTER_MODAL -->
<div class="register_modal">
  <div class="register_modal__close" title='close'>
    <i class='fa fa-times'></i>
  </div>
  <div class="register_modal__main">
    <div class="register_modal__main__title">
      <h2>register</h2>
      <h4>to our website</h4>
    </div>
    <form class="register_modal__main__form">
      <input required type="text" placeholder='enter first name' />
      <input required type="text" placeholder='enter last name' />
      <input required type="text" placeholder='enter email address' />
      <input required type="password" placeholder='enter password' />
      <span class="register_modal__main__form__showpw1">
        <i class="fas fa-eye"></i>
      </span>
      <input required type="password" placeholder='confirm password' />
      <span class="register_modal__main__form__showpw2">
        <i class="fas fa-eye"></i>
      </span>
      <input required type="text" placeholder='enter mobile no.' />
      <input required type="text" placeholder='enter city' />
      <div class="register_modal__submit">register</div>
      <button type='submit'>register</button>
    </form>
    <!-- will show only in mobile view -->
    <span class='mob__reg_to_login' href="#">Already have an account? Login here</span>
  </div>
  <div class="register_modal__appendix">
    <div class="register_modal__appendix__head">
      <h2>start a journey</h2>
      <div class="register_modal__appendix__head__sep"></div>
      <p>enter the required details to become a part of our community</p>
    </div>
    <div class="register_modal__appendix__login">
      <p>already have an account?</p>
      <button>login here</button>
    </div>
  </div>
</div>
<!-- /REGISTER_MODAL -->