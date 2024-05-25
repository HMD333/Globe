                    <div id="nav_logedin">
                        <li>
                            <a href="#" id="Acount" class="acount_img" onclick="Au_Acount_active()"> 
                            <p><?php
                            if(!isset($_COOKIE["User_name"]) || isset($_COOKIE["User_name"]) && $_COOKIE["User_name"] == ""){
                                header("Location: index.php");
                            }else{
                                echo $_COOKIE["User_name"];
                            }
                            ?></p>
                                <img src="asedes/img/png-clipart-computer-icons-user-profile-login-user-heroes-sphere-thumbnail.png">
                            </a>
                            
                            <div id="AUTHER_ACOUNT_POPUP">
                                <div class=" acount_bg_card">
                                    <div class="acount_bg_card" onclick="Close_acount_popup()"></div>
                                    <div class="card" account_type = "Auther">
                                        <div class="card_contant">
                                            <ul>
                                                <li>
                                                    <a href="#" onclick="Acount_altrat()">profile</a>
                                                </li>

                                                <li>
                                                    <a href="#" onclick="Create_Contant()">Create plug</a>
                                                </li>
                                                
                                                <li>
                                                    <a href="#"  onclick="Your_Contant()">View plug</a>
                                                </li>

                                                <li>
                                                    <a href="#"  onclick="Favuret()">Favorite</a>
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