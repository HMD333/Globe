<?php
    require('header.php');
?>

    <div class="FAVURET" id="FAVURET">
        <div class="main_contant">
            <div class="title">Favorite</div>
                <form class="Fav">
                    <div class="fav_con">
                        <label class="fav_sup_con" active = false id="fav_Card_sp" for="Spore_RB">
                            <div class="fav_Card">
                                <div class="fav_top">
                                    Spore
                                </div>
                                <input type="radio" name="fav_Card_rb" value="Spore" id="Spore_RB" hidden>
                                <div class="fav_bot">
                                    <p>It will show news about:</p>
                                    <ul>
                                        <li>forbode</li>
                                        <li>tans</li>
                                        <li>recby</li>
                                        <li>basket</li>
                                    </ul>
                                    <div class="click_me_bg">
                                        <p class="click_me">Click To Lock as Favourer</p>
                                    </div>
                                </div>
                                <img src="asedes/img/Picture1.jpg" class="Fav_ing">
                            </div>
                        </label>

                        <label class="fav_sup_con" active = false id="fav_Card_po" for="Politics_RB">
                            <div class="fav_Card">
                                <div class="fav_top">
                                    Politics
                                </div>
                                <input type="radio" name="fav_Card_rb" value="Politics" id="Politics_RB" hidden>
                                <div class="fav_bot">
                                    <p>It will show news about:</p>
                                    <ul>
                                        <li>Policy</li>
                                        <li>Political Analysis</li>
                                        <li>Political Interviews</li>
                                        <li>Political Features</li>
                                    </ul>
                                    <div class="click_me_bg">
                                        <p class="click_me">Click To Lock as Favourer</p>
                                    </div>
                                </div>
                                <img src="asedes/img/Picture2.jpg" class="Fav_ing">
                            </div>
                        </label>
                        
                        <label class="fav_sup_con" active = false id="fav_Card_he" for="Health_RB">
                            <div class="fav_Card">
                                <div class="fav_top">
                                    Health
                                </div>
                                <input type="radio" name="fav_Card_rb" value="Health" id="Health_RB" hidden>
                                <div class="fav_bot">
                                    <p>It will show news about:</p>
                                    <ul>
                                        <li>Health Policy</li>
                                        <li>Healthcare Industry</li>
                                        <li>Health Awareness</li>
                                        <li>Health and Technology</li>
                                    </ul>
                                    <div class="click_me_bg">
                                        <p class="click_me">Click To Lock as Favourer</p>
                                    </div>
                                </div>
                                <img src="asedes/img/Picture3.jpg" class="Fav_ing">
                            </div>
                        </label>
                        
                        <label class="fav_sup_con" active = false id="fav_Card_te" for="Technology_RB">
                            <div class="fav_Card">
                                <div class="fav_top">
                                    Technology
                                </div>
                                <input type="radio" name="fav_Card_rb" value="Technology" id="Technology_RB" hidden>
                                <div class="fav_bot">
                                    <p>It will show news about:</p>
                                    <ul>
                                        <li>Software and Apps</li>
                                        <li>Cybersecurity and Privacy</li>
                                        <li>Emerging Technologies</li>
                                        <li>Tech Events</li>
                                    </ul>
                                    <div class="click_me_bg">
                                        <p class="click_me">Click To Lock as Favourer</p>
                                    </div>
                                </div>
                                <img src="asedes/img/Picture4.jpg" class="Fav_ing">
                            </div>
                        </label>
                    </div>
                    <input type="button" name="title" value="submit">
                </form>
            </div>
        </div>
    </div>
</main>
<?php
    require('footer.php');
?>