<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Globe NEWS</title>
    <link rel="icon" type="image/png" href="asedes/img/LOGO_F.ico">
    <link rel="stylesheet" href="Style/style.css">
</head>
<body>
    <header>
        <div class="bgimg">
            <img src="asedes/img/BGIMG.png" alt="bake grawind img">
        </div>
        <div class="logo">
            <img src="asedes/img/LOGO.png" alt="logo">
            <div class="logotext">
                <span class="blue">G</span>
                <span class="blue">L</span>
                <span class="green">O</span>
                <span class="green">B</span>
                <span class="orange">E</span>
            </div>
            <div class="logoNews">News</div>
        </div>
        <nav class="nav_bar">
            <div class="nav_item">
                <ul>
                    <li>
                        <a href="index.php" active = <?php
            $currentURL = $_SERVER['REQUEST_URI'];
            if ($currentURL == "/News/index.php"){
                echo 'true';
            }else{
                echo 'false';
            }
            ?>>Home</a>
                        <div class="nav_item_underline"></div>
                    </li>

                    <li>
                        <a href="Politics.php" active = <?php
            $currentURL = $_SERVER['REQUEST_URI'];
            if ($currentURL == "/News/Politics.php"){
                echo 'true';
            }else{
                echo 'false';
            }
            ?>>Politics</a>
                        <div class="nav_item_underline"></div>
                    </li>

                    <li>
                        <a href="Health.php" active = <?php
            $currentURL = $_SERVER['REQUEST_URI'];
            if ($currentURL == "/News/Health.php"){
                echo 'true';
            }else{
                echo 'false';
            }
            ?>>Health</a>
                        <div class="nav_item_underline"></div>
                    </li>

                    <li>
                        <a href="Sport.php" active = <?php
            $currentURL = $_SERVER['REQUEST_URI'];
            if ($currentURL == "/News/Sport.php"){
                echo 'true';
            }else{
                echo 'false';
            }
            ?>>Sport</a>
                        <div class="nav_item_underline"></div>
                    </li>
                    
                    <li>
                        <a href="Technology.php" active = <?php
            $currentURL = $_SERVER['REQUEST_URI'];
            if ($currentURL == "/News/Technology.php"){
                echo 'true';
            }else{
                echo 'false';
            }
            ?> id="Technology" onclick="Technology_active()">Technology</a>
                        <div class="nav_item_underline"></div>
                    </li>

                    <div class="sarch">
                        <form action="Sarch.php" method="post">
                            <input type="text" class="sharth" name="sarch" id="sarch">
                            <label for="SB">
                                <img src="asedes/img/sarch.png">
                            </label>
                            <input type="submit" name="SARCH" id="SB" hidden>
                        </form>
                    </div>
<?php
    $user_Type = "";


    if(!isset($_COOKIE["user_Type"]) || isset($_COOKIE["user_Type"]) && $_COOKIE["user_Type"] == ""){
        require "header-visitor.php";
        $user_Type = $user;
        setcookie("user_Type",$user);
    }
    
    if(isset($_COOKIE["user_Type"]) && $_COOKIE["user_Type"] == "Admin" || $user_Type == "Admin" ) {
        require "header-admin.php";
    }

    if(isset($_COOKIE["user_Type"]) && $_COOKIE["user_Type"] == "Auther" || $user_Type == "Auther"){
        require "header-auther.php";
    }
    
    if(isset($_COOKIE["user_Type"]) && $_COOKIE["user_Type"] == "User" || $user_Type == "User"){
        require "header-user.php";
    }

    $user_Type = "";
?>
</ul>
    </div>
</nav>

</header>
<main>
<div class="popup" id="popup">
<div class="bg_card">
    <div class="bg_card" onclick="Close_popup()"></div>
    <div class="card">
        <img src="asedes/img/568140.png" class="close" onclick="Close_popup()">
        <div class="pop_left">
            <div class="pop_SingUP" id="SingUP">
                <div class="logotext">
                    <span class="blue">G</span>
                    <span class="blue">L</span>
                    <span class="green">O</span>
                    <span class="green">B</span>
                    <span class="orange">E</span>
                </div>

                <form method="post">
                    <div class="feeld_name">
                        <div class="name_items">
                            <div class="feeld">
                                <input type="text" name="fname" id="sfn">
                                <label for="sfn">First Name</label>
                            </div>
                        </div>
                        
                        <div class="name_items">
                            <div class="feeld">
                                    <input type="text" name="lname" id="sln">
                                    <label for="sln">Last Name</label>
                                </div>
                            </div>
                        </div>

                            <div class="feeld">
                                <input type="text" name="Rusername" id="sun">
                                <label for="sun">User Name</label>
                            </div>
                            
                            <div class="feeld">
                                <input type="text" name="email" id="se">
                                <label for="se">Email</label>
                            </div>
                            
                            <div class="feeld">
                                <input type="password" name="Rpassword" id="spass">
                                <div class="eye" active = false onclick="show_pass('spass', 'spass_eye')" id="spass_eye">
                                    <div class="eye_top">
                                        <div class="lirs"></div>
                                    </div>
                                    
                                    <div class="eye_boll_con">
                                        <div class="eye_boll_arey">
                                            <div class="eye_boll"></div>
                                        </div>
                                    </div>
                                    <div class="eye_bottom"></div>
                                </div>
                                <label for="spass">Password</label>
                            </div>
                            
                            <div class="feeld">
                                <input type="password" name="repassword" id="srepass">
                                <div class="eye" active = false onclick="show_pass('srepass', 'srepass_eye')" id="srepass_eye">
                                    <div class="eye_top">
                                        <div class="lirs"></div>
                                    </div>
                                    
                                    <div class="eye_boll_con">
                                        <div class="eye_boll_arey">
                                            <div class="eye_boll"></div>
                                        </div>
                                    </div>
                                    <div class="eye_bottom"></div>
                                </div>
                                <label for="srepass">Resetpassword</label>
                            </div>
                            
                            <input type="submit" value="Register" name="Register" class="but">
                        </form>
                    </div>
                    <div class="pop_SingUP" id="LogIN">
                        <div class="logotext">
                            <span class="blue">G</span>
                            <span class="blue">L</span>
                            <span class="green">O</span>
                            <span class="green">B</span>
                            <span class="orange">E</span>
                        </div>
                        <div class="pop_titel">
                            LOGIN with the GLOBE
                        </div>

                        <form method="post">
                            <div class="feeld">
                                <input type="text" name="Lusername" id="lun">
                                <label for="lun">User Name or Email</label>
                            </div>
                            
                            <div class="feeld">
                                <input type="password" name="Lpassword" id="lpass">
                                <div class="eye" active = false onclick="show_pass('lpass', 'lpass_eye')" id="lpass_eye">
                                    <div class="eye_top">
                                        <div class="lirs"></div>
                                    </div>
                                    
                                    <div class="eye_boll_con">
                                        <div class="eye_boll_arey">
                                            <div class="eye_boll"></div>
                                        </div>
                                    </div>
                                    <div class="eye_bottom"></div>
                                </div>
                                <label for="lpass">Password</label>
                            </div>
                            
                            <input type="submit" value="LOGIN" name="LOGIN" class="but" onclick="use_the_acount()" >
                            
                            <div class="sing_up_a">
                                <a href="#" onclick="Register()">Don't have account</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <div class="pop_rigth">
                    <img src="asedes/img/popup/skynews-post-office-protest_6413847.png" class="first">
                    <img src="asedes/img/popup/skynews-serco-doncaster-prison_5914750.png" class="secand">
                    <img src="asedes/img/popup/(90).png" class="thared">
                    <img src="asedes/img/popup/(92).png" class="forth">
                </div>
            </div>
        </div>
    </div>