<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Realtime Chat App | Masyamrif</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdns.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
  </head>
  <style>
    .material-symbols-outlined {
      font-variation-settings: "FILL" 1, "wght" 400, "GRAD" 0, "opsz" 14;
    }
  </style>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>Realtime Chat App</header>
        <form action="#">
          <div class="error-txt">This is an error message!</div>
          <div class="field input">
            <label>Email Address</label>
            <input type="text" placeholder="Enter your Email" />
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="text" placeholder="Enter your password" />
            <span id="mata" class="material-symbols-outlined">
              visibility
            </span>
          </div>
          <div class="field button">
            <input type="Submit" value="Continue to Chat" />
          </div>
        </form>
        <div class="link">Not yet Signup? <a href="#">Sign up Now</a></div>
      </section>
    </div>
    <script src="assets/js/pass-show-hide.js"></script>
  </body>
</html>