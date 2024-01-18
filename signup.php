<?php
session_start();

 include("connection.php");
 include("function.php");


 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

      //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
        mysqli_query($con, $query);
        header("Location: login.php");
        die;
    }else
     {
       echo "Please enter some valid information!";
     }
  }
  
?>
<html>
 <head>
   <title>Sign up</title>
 </head>
 <body>
  <style type="text/css">
    @import url("http://fonts.googleapis.com/css2?family=Muli&display=swap");
* {
    box-sizing: border-box;
}
body {
    font-family: "Muli",sans-serif;
    background-color: #aa96da;
    color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    overflow: hidden;
    margin: 0;
}
.container {
    background-color: #393e467d;
    padding: 20px 40px;
    border-radius: 5px;
}
.container h1 {
 text-align: center;
 margin-bottom: 30px;
}
.container a {
    text-decoration: none;
    color: lightblue;
}
.btn {
    cursor: pointer;
    display: inline-block;
    width: 100%;
    background: lightblue;
    padding: 15px;
    font-family: inherit;
    font-size: 16px;
    border: 0;
    border-radius: 5px;
}
.btn:focus {
    outline: 0;
}
.btn:active {
    transform: scale(0.98);
}
.text {
    margin-top: 30px;
}
.form-control {
    position: relative;
    margin: 20px 0 40px;
    width: 300px;
}

::placeholder{
    color: #afafaf;
    opacity: 1;
}
.form-control input {
    background-color: transparent;
    border: 0;
    border-bottom: 2px #fff solid;
    display: block;
    width: 100%;
    padding: 15px 0;
    font-size: 18px;
    color: #fff;
}
.form-control input:focus,
.form-control input:valid {
    outline: 0;
    border-bottom-color: lightblue ;
}

.form-control label {
    position: absolute;
    top: 15px;
    left: 0;
    pointer-events: none;
}
.form-control label span{
    display: inline-block;
    font-size: 18px;
    min-width: 5px;
    transition: 0.3s cubic-bezier(0.68, -0.55,0.265,1.55);
}
.form-control input:focus + label span,
.form-control input:valid + label span{
 color: lightblue;
 transform: translateY(-30pxs);
}
  </style>
   <div class="container">
      <h1>Sign Up</h1>
         <form method="post">
         <div class="form-control">
          <input type="text" name="user_name"><br><br>
         </div>
         <div class="form-control">
         <input type="password" name="password"><br><br>
         </div>
         
         <input id="btn" type="submit" name="Signup"><br><br>
         <a href="login.php">Click to Login</a><br><br>
         </form>
   </div>
 </body>
</html>