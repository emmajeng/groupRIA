<?php

session_start();
// this tutorial helped -  https://code.tutsplus.com/articles/build-a-login-and-registration-system-with-xml--net-2986

// if the email is set
if(isset($_POST['emailaddress'])){
  // load our xml and call it an object
  $xml = simplexml_load_file("./data/users.xml");
  // store email and make sure there is no whitespace & password whitespace
  $emailaddress = @trim($_POST["emailaddress"]);
  $password = @trim($_POST["password"]);
  // loop through our user node in xml object and refer to this as $user
  foreach($xml->user as $user){
    // md5 the password
    // if both the password and email is correct inside the user node
    if($user->email == $emailaddress && $user->password == md5($password)){
      // assign our session to the email address that was enetered
      $_SESSION['username']=$emailaddress;
      // redirect our user to the main page
       header("Location: secure.php");
      // exit loop
      exit();
    }
  }
}
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name="viewpoint" content="width=device-width, intial-scale=1">

    <title> Login Form! </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <link href="form.css" rel="stylesheet">
</head>
<body>
    <!-- container -->
  
    <div class="container">

<h2> <strong> Welcome to LearnByQuiz </strong></h2>
      <!-- html, i was able to build this using boostrap  -->

        <!-- add a jumotron -->
            <div class="jumbotron">
              <h3 class="text-center">
                Please Login
              </h3>
                <hr>
                <br/>
                <form method="post" action="#" name="submit">
                    <div class="form-group">
                        <!-- input email -->
                        <label for="email"> Email Address: </label>
                        <input type="emailaddress" name = "emailaddress" class="form-control" id="emailaddress" >
                        <br/>
                        <!-- password-->
                        <label for="password"> Password: </label>
                        <input type="password" class="form-control" id = "password" name="password">
                        <!--submit-->
                        <br/>
                        <button type="loginform" class="btn btn-lg center-block" name="submit" id="submit"> Login! </button>
                    </div>
                </form>
                <br/>
              <hr>
                 <footer>
                    <p> A web app project made by : Jordan | Emma | Christopher | Keith </p>
                   <p>
                     <a href="register.php">Don't have an account?</a>
                   </p>
                </footer>
            </div>
       
    </div>
       
</body>
</html>