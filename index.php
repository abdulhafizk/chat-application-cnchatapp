<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="content-type">
  <meta charset="ISO-8859-1">
  <title>Realtime Chat App | Masyamrif</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="https://cdns.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<script src="https://unpkg.com/feather-icons"></script>
</head>
<style>
  .material-symbols-outlined {
    font-variation-settings: "FILL" 1, "wght" 400, "GRAD" 0, "opsz" 14;
  }
</style>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#">
        <div class="error-txt">This is an error message!</div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" placeholder="First Name" />
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" placeholder="Last Name" />
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" placeholder="Enter your Email" />
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" placeholder="Enter new password" />
          <span id="mata" class="material-symbols-outlined">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-eye">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
              <circle cx="12" cy="12" r="3"></circle>
            </svg>
          </span>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="File" />
        </div>
        <div class="field button">
          <input type="Submit" value="Continue to Chat" />
      </form>
      <div class="link">Alredy Sign up? <a href="#">Login Now</a></div>
    </section>
  </div>

  <script src="assets/js/pass-show-hide.js"></script>
  <script src="assets/js/signup.js"></script>
</body>

</html>