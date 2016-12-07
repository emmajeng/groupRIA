<?php
// store credentials into the below variables
// code based on : https://code.tutsplus.com/articles/build-a-login-and-registration-system-with-xml--net-2986
// this tutorial helped
// also lecture notes on building the feedbackBox helped 

if(isset($_POST["submit"])){
 
  $emailaddress = $_POST["emailaddress"];
  $password = $_POST["password"];

  $xml = simplexml_load_file('./data/users.xml') or die("error");
  // add user node
  $user = $xml->addChild('user');
  // add a child to the user node 
  $user->addChild("password",md5($password));
  $user->addChild("email",$emailaddress);
  
  $xml->asXML('./data/users.xml');
  header('Location: form.php');
  
}else{
  echo "nothing happened?";
}

?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name="viewpoint" content="width=device-width, intial-scale=1">

    <title> Registration Form </title>
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
    
       
    

        <!-- add a jumotron -->
            <div class="jumbotron">
               <!-- <h2 id="1"> Please Login ! </h2>-->
              <h3 class="text-center">
                Register now to Learn!
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
                        <button type="loginform" class="btn btn-lg center-block" value="submit" name="submit" id="submit"> Register! </button>
                    </div>
                </form>
                <br/>
              <hr>
                 <footer>
                    <p> A web app project made by : Jordan | Emma | Christopher | Keith </p>
                   <p>
                     <a href="form.php">I am a user get me out of here!</a>
                   </p>
            
                </footer>
            </div>
       
    </div>
 
       
</body>
</html>