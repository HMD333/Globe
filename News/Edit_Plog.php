<?php
    require('header.php');
?>

    <div class="CREATE_CONTANT" id="CREATE_CONTANT">
        <div class="main_contant">
            <div class="title">Edit Plog</div>
            <?php
            if(isset($_POST["ID"])){
                require_once "Data/dbh.inc.php";
                $ID = htmlspecialchars($_POST["ID"]);
            
                $query = "SELECT * FROM News 
                    WHERE id = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param('s', $ID);
                $stmt->execute();
                $result = $stmt->get_result();
            
                if ($result->num_rows > 0){
                    
                    $news = mysqli_fetch_assoc($result);
                echo'<form class="Form" method="post">
                <div class="AE_F_Text">
                    <label>Title</label>
                    <input type="text" name="title" placeholder="Enter Title" value="'.$news["Title"].'">
                </div>

                <div class="AE_F_Text">
                    <label>Sub Title</label>
                    <input type="text" name="stitle" placeholder="Enter Sub Title" value='.$news["SUP_title"].'">
                </div>



                <div class="AE_F_Text">
                <label for="img">Images <img id="img_viue" style="background-image: URL(\''.$news["Img_path"].'\'); background-size: cover;">
                <div class="plas" id="plas">+</div>
                </label>
                    
                    <input type="file" name="img" accept="image/*" id="img" hidden>
                    <div class="img_ph"></div>
                </div>

                <div class="AE_F_Text">
                    <label>The NEWS</label>
                    <textarea name="the-news">'.$news["Article"].'</textarea>
                </div>

                <label class="rb_tit">NEWS Type</label>
                <div class="AE_F_Text">
                    <label>Spore</label>
                    <input type="radio" name="NT" value="Spore" ';
                    if($news["type"] == "Sport"){
                        echo'checked';
                    }echo'>
                </div>

                <div class="AE_F_Text">
                    <label>Politics</label>
                    <input type="radio" name="NT" value="Politics" ';
                    if($news["type"] == "Politics"){
                        echo'checked';
                    }echo'>
                </div>

                <div class="AE_F_Text">
                    <label>Health</label>
                    <input type="radio" name="NT" value="Health" ';
                    if($news["type"] == "Health"){
                        echo'checked';
                    }echo'>
                </div>
                <div class="AE_F_Text">
                    <label>Technology</label>
                    <input type="radio" name="NT" value="Technology" ';
                    if($news["type"] == "Technology"){
                        echo'checked';
                    }echo'>
                </div>

                <div class="AE_F_Text">
                    <input type="button" name="title" value="submit">
                </div>
            </form>';
                }
            }
            ?>
            
        </div>
    </div>
</main>
<?php
    require('footer.php');
?>