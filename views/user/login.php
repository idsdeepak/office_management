<?php
echo "<pre>";
print_r($errors);
print_r($inputData);
print_r($_SESSION);
echo "</pre>";
echo "output from views/user/login.php";
?>
<main class="sign-in-backgroundcolor">
  <section class="section vh-100 d-flex align-items-lg-center justify-content-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 sign-in-image position-relative">
          <img src="assets/img/auth.png " alt="" class="w-100" />
        </div>
        <div class="col-lg-6 bg-white p-5 d-flex flex-column justify-content-center">
          <div class="sign-in-title text-center">
            <h2 class="h4 mb-3">Welcome Back!</h2>
            <h4 class="h4 mb-3">Sign In</h4>
          </div>
          <?php if ($errors) { ?>
            <div class="alert alert-danger mx-lg-5" role="alert">
              <?php
              foreach ($errors as $error) {
                echo $error . "</br>";
              }
              ?>
            </div>
          <?php } ?>
          <form class="sign-in-form px-lg-5" action="" method="post">
            <div class="form-group">
              <input type="email" class="form-control mb-3 py-2" placeholder="name@example.com" id="email" aria-describedby="emailHelp" name="email" value="<?php echo $inputData["email"]; ?>" />
            </div>
            <div class="form-group">
              <input type="password" class="form-control mb-3 py-2" placeholder="Enter your password" id="password" name="password" value="<?php echo $inputData["password"]; ?>" />
            </div>
            <div class="forgot-password">
              <h4 class="h5 text-end pb-2">Forgot password?</h4>
            </div>
            <button type="submit" class="w-100 text-white">Sign In</button>
            <div class="headline pt-3">
              <p>OR</p>
            </div>
            <div class="sign-in-google d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                <defs>
                  <path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                </defs>
                <clipPath id="b">
                  <use xlink:href="#a" overflow="visible" />
                </clipPath>
                <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
                <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z" />
                <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z" />
                <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z" />
              </svg>
              <h3>Sign in with google</h3>
            </div>
            <div class="last-title text-center pt-3">
              <h2 class="h6">Don’t have an account?</h2>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>