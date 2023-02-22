<?php
include 'header.php';
include 'db.php';
?>
<style>
  .regpage{
    max-width:80%;
    margin:100px auto;
  }
  .copyright .text-center .my-auto{
display:none !important;
  }
  .form-group {
    margin-bottom: 3rem;
}
  </style>
<div class="regpage">
  <div class="text-center">
  <h1><a href="./index.php">Back To Home</a></h1>
    <h1 class="h4 text-light-900 mb-4">Create an Account!</h1>
  </div>
  <form class="user" action="registerAction.php" method="post" class="container">
    <div class="form-group row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName" required>
      </div>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName" required>
      </div>
    </div>
    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" required type="email">
    </div>
    <div class="form-group row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
      </div>
      <div class="col-sm-6">
        <input type="password" class="form-control" id="repeatPassword" placeholder="Repeat Password" required>
      </div>
    </div>
    <div id="passwordError" style="color:red;display:none;">Password does not match</div>
    <button class="btn btn-primary btn-user btn-block" type="submit" onclick="return validatePassword()">Register Account </button>
  </form>

</div>


<script>
  function validatePassword() {
    var password = document.getElementById("password").value;
    var repeatPassword = document.getElementById("repeatPassword").value;
    var passwordError = document.getElementById("passwordError");

    if (password !== repeatPassword) {
      passwordError.style.display = "block";
      return false;
    }

    // if (password.length < 6) {
    //     passwordError.style.display = "block";
    //     passwordError.innerHTML = "Password must be at least 6 characters long";
    //     return false;
    // }

    passwordError.style.display = "none";
    return true;
  }
</script>
