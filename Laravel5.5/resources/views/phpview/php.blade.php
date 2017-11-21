<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<style>


body, html {
    height: 100%;
}

.bg {
    /* The image used */
    background-image: url("Logo.png");

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #3090C7;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>



<!--<h1>LaHotel</h1> -->
<form method="get" action="{{ url('/menu') }}">
<center><img src="Logo.png" alt="logo.jpg" width="150" height="150"></center>
<div class="container" style="text-align:center;">
  <label><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="uname" required>
  <br>
  <br>
  <label><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="psw" required>
  <br>
  <br>
  <button name="signin" type="submit"  >Sign in</button>
  <button name="signup" type="submit" onclick="window.location.href='https://www.youtube.com/watch?v=ImZEwrHohRg'">Sign up</button>
  <br>
  <br>
  <span class="psw"><a href="#"> Forgot password?</a></span>

</div>

</form>

</body>
</html>
