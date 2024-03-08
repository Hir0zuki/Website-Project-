<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deneme</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h2 class ="logo">🎨</h2>
        <nav class="navigation">
            <a href="#" data-tab-target="home">Home</a>
            <a href="#" data-tab-target="community-feed">Community Feed</a>
            <a href="#" data-tab-target="events">Events</a>
            <a href="#" data-tab-target="help">Help</a>
            <button class="buttonlogin-pop">Login</button>
        </nav> 

       
    </header> 

    <div class="tab-content">
        <div id="home" class="tab-pane">
            <div class="home-page">
                <h3>Look at Our Featured Artists</h3>
                <div class="content">
                    <form action="" class="search-form">
                        <input type="text" id="search-input" placeholder="Search Artists">
                        <button id="search-button">Search</button>
                    </form>

                    <div class="box">
                        <div class="image-container">
                            <img src="https://64.media.tumblr.com/024fa6314194aae6724f8ebbf5f5e430/4714a8a433b85636-1f/s2048x3072/f082316f930131770e573b5115083eb75782ea39.jpg" alt="Featured Artist">
                            <img src="https://64.media.tumblr.com/fcc713e7ffd6608302e82bd73972d8e3/7bd11779878678a8-2b/s2048x3072/ddad9298919f523f423aad348ea61e7d8fab54fb.jpg" alt="Featured Artist">
                            <img src="https://64.media.tumblr.com/cb645c135ab1b45a5a4ead9b0a12b6f7/9f02cd09b1012b86-11/s2048x3072/aa2952434ff81338c080856b931f89ba0cbace21.jpg" alt="Featured Artist">
                            <img src="https://64.media.tumblr.com/99816947d2caa328267b376ec5a51431/4714a8a433b85636-88/s2048x3072/ddef69f5e3946995077ff51dde5b7092957555cb.jpg" alt="Featured Artist">
                        </div>
                    </div>
                    
                </div>
                
                <div class="usercards">
                    <div class="card">
                    <div class="card-content">
                        <div class="image">
                        <img src="https://pbs.twimg.com/media/GCjcrEqXEAA0T1J?format=jpg&name=medium" alt="Profile Picture">
                        </div>
                        <div class="username">Hiro</div>
                        <a href="#" class="profile-link">✎</a>
                    </div>
                    </div> 
                    <div class="card">
                        <div class="card-content">
                        <div class="image">
                            <img src="https://pbs.twimg.com/media/GCjctJ0X0AIQNgq?format=jpg&name=medium" alt="Profile Picture">
                        </div>
                        <div class="username">Alex</div>
                        <a href="#" class="profile-link">✎</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                        <div class="image">
                            <img src="https://pbs.twimg.com/media/GCjcrVVXwAAbx94?format=jpg&name=medium" alt="Profile Picture">
                        </div>
                        <div class="username">Boy</div>
                        <a href="#" class="profile-link">✎</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="community-feed" class="tab-pane">
            <div class="box2">
                <div class="image-container2">
                    <img src="https://64.media.tumblr.com/5df1db9f21a5e0d1b9476f05092b6980/a9e0eaa1857d21e4-de/s2048x3072/c9b79b6298f7838776d42f2885ed5381b73c3944.pnj" alt="commf" name="artwork" required>
                    <img src="https://64.media.tumblr.com/f4bc14743283e8c85715a75dd5247a64/a9e0eaa1857d21e4-d3/s2048x3072/815c33c4575ef5f5d675289dbf47171078d943c7.pnj" alt="commf" name="artwork" required>
                    <img src="https://64.media.tumblr.com/547041a341a4e2306914dc8e31ca0196/a9e0eaa1857d21e4-ad/s2048x3072/8ac1ddb9b4d229edd97fdaf95804be89860ad59b.pnj" alt="commf" name="artwork" required>
                    <img src="https://64.media.tumblr.com/40dc5ea5d2a3f9fc3c55355363d831c3/a9e0eaa1857d21e4-55/s2048x3072/741c81fdc526290eb8a261f1fc24f1fbf21426ec.pnj" alt="commf" name="artwork" required>
                </div>
            </div>
        </div>

        <div id="events" class="tab-pane">
            <div class=sorrymaintain>
                <h1>We're sorry, but there is no current event right now!!</h1>
                <div class="sorryim">
                    <img src="https://64.media.tumblr.com/d1c0e808d0692c325bd80ed7ed53e753/4e596e9cf7fdf0d6-2e/s400x600/99b3d3b6fb978726b67ba0abc53236374d589bda.pnj" alt="Featured Artist">
                </div>
            </div> 
        </div>       

        <div id="help" class="tab-pane">
            <div class="container3">
                <h4>Message Us!</h4>
                <form action="index.php" method="POST">
                    <div id="opacback">
                        <div id="formgroup">
                            <div id="left">
                                <input type="text" name="username" placeholder="Username" class="form-control">
                                <input type="text" name="email" placeholder="Email" class="form-control">
                                <input type="text" name="topic" placeholder="Topic" class="form-control">
                            </div>
                            
                            <textarea 
                                name="message" id="" cols="30" placeholder="Send Us a Message." rows="10" required class="form-control">
                            </textarea>
                            
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </form>        
            </div>
        </div>
    </div>

    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close-circle-outline"></ion-icon></span>
    
        <div class="form-box login">
            <h2>Login</h2>
            <form action="index.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" name="email-log" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="password-log" required>
                    <label>Password</label>
                </div>
                <div class="remember-forget">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn" name="logbtn">Login</button>
                <div class="login-register">
                    <p> Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>
    
        <div class="form-box register">
            <h2>Registration</h2>
            <form action="index.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="contact"></ion-icon></span>
                    <input type="username" name="usernreg" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" name="emailreg" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="passreg" required>
                    <label>Password</label>
                </div>
                <div class="remember-forget">
                    <label><input type="checkbox">I agree to the terms & conditions.</label>
                </div>
                <button type="submit" class="btn" name="regbtn">Register</button>
                <div class="login-register">
                    <p> Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

<?php
    include("connection.php");
    if(isset($_POST["username"],$_POST["email"],$_POST["topic"],$_POST["message"])){
        $username=$_POST["username"];
        $email=$_POST["email"];
        $topic=$_POST["topic"];
        $message=$_POST["message"];

        $add= "INSERT INTO `helpmessage`(`username`, `email`, `topic`, `message`) VALUES ('".$username. "','".$email."','".$topic."','".$message."')";
        
        if($conn->query($add)===true){
            echo "<script>alert('Message Send Successfully.')</script>";
        }
    }
    
    if(isset($_POST["regbtn"])){
        $username=$_POST["usernreg"];
        $email=$_POST["emailreg"];
        $password=$_POST["passreg"];
        
        $duplicate= mysqli_query($conn,"SELECT * FROM tb_user WHERE username='$username' OR email='$email'");

        if(mysqli_num_rows($duplicate) > 0){
            echo "<script> alert('Username or Email Has Already Taken') </script>";
        }
        else{
            $query = "INSERT INTO tb_user (id, username, email, password) VALUES ('', '$username', '$email', '$password')";
            if (mysqli_query($conn, $query)) {
                echo "<script> alert('Registration Successful.') </script>";
            } else {
                echo "<script> alert('Error: Registration Failed.') </script>";
            }
        }
    }

    if (isset($_POST["logbtn"])) {
        $email = $_POST["email-log"];
        $password = $_POST["password-log"];

        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

        $query = "SELECT * FROM tb_user WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            echo "<script> alert('Login Successful.') </script>";
        } else {
            echo "<script> alert('Invalid Email or Password.') </script>";
        }
    }

    
    
?>