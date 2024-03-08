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

            <div class="profile-section">
                <div class="profile-tab">
                    <button class="profile-icon">Profile</button>
                    <button class="logout-icon">Logout</button>
                </div>
            </div>    
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
                            <img src="https://i.hizliresim.com/fovbh89.jpg" alt="Featured Artist">
                            <img src="https://i.hizliresim.com/fovbh89.jpg" alt="Featured Artist">
                            <img src="https://i.hizliresim.com/fovbh89.jpg" alt="Featured Artist">
                            <img src="https://i.hizliresim.com/fovbh89.jpg" alt="Featured Artist">
                        </div>
                    </div>
                </div>
                
                <div class="usercards">
                    <div class="card">
                    <div class="card-content">
                        <div class="image">
                        <img src="https://64.media.tumblr.com/b5fdd8f75c12d1a85a7222765325b452/24d11fdfbd05d9a5-e4/s400x600/d0a49312b579983c0fb93c91989a05044e16fb0a.pnj" alt="Profile Picture">
                        </div>
                        <div class="username">Hiro</div>
                        <a href="#" class="profile-link">✎</a>
                    </div>
                    </div> 
                    <div class="card">
                        <div class="card-content">
                        <div class="image">
                            <img src="https://64.media.tumblr.com/8f9acfb8627532ac6ce60f88ca87ca0d/24d11fdfbd05d9a5-b5/s400x600/2bc4be9305ad5965d2b19a905ed5d94b2f63b41d.pnj" alt="Profile Picture">
                        </div>
                        <div class="username">Alex</div>
                        <a href="#" class="profile-link">✎</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                        <div class="image">
                            <img src="https://64.media.tumblr.com/3e0c73a7211a1eae59dc8c1015f47aee/24d11fdfbd05d9a5-69/s400x600/3cf50c10fef236fcad50ffa8b5683d2b8b2af724.pnj" alt="Profile Picture">
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
                    <img src="https://i.hizliresim.com/fovbh89.jpg" alt="commf" name="artwork" required>
                    <img src="https://i.hizliresim.com/fovbh89.jpg" alt="commf" name="artwork" required>
                    <img src="https://i.hizliresim.com/fovbh89.jpg" alt="commf" name="artwork" required>
                    <img src="https://i.hizliresim.com/fovbh89.jpg" alt="commf" name="artwork" required>
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
?>