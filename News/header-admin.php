<div id="nav_logedin">
    <li>
        <button id="Acount" class="acount_img" onclick="Ad_Acount_active()"> 
            <p><?php
                if(!isset($_COOKIE["User_name"]) || isset($_COOKIE["User_name"]) && $_COOKIE["User_name"] == ""){
                    header("Location: index.php");
                }else{
                    echo $_COOKIE["User_name"];
                }
            ?></p>
            <img src="asedes/img/png-clipart-computer-icons-user-profile-login-user-heroes-sphere-thumbnail.png">
        </button>
        <div id="ADMEN_ACOUNT_POPUP">
            <div class=" acount_bg_card">
                <div class="acount_bg_card" onclick="Close_acount_popup()"></div>
                <div class="card" account_type = "Admen">
                    <div class="card_contant">
                        <ul>
                            <li>
                                <a href="Create_Account.php">Create Account</a>
                            </li>
                            
                            <li>
                                <a href="Create_Plog.php">Create plug</a>
                            </li>

                            <li>
                                <a href="My_posts.php">View plug</a>
                            </li>

                            <div class="slpet"></div>
                            
                            <li>
                                <a href="logout.php"
                                onmouseenter="logout_icon('asedes/img/icons8-logout-100.png')" 
                                onmouseleave="logout_icon('asedes/img/Picture1.png')">
                                    Logout <img src="asedes/img/Picture1.png" id="logoicon">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </li>
</div>