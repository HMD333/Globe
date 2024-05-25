<?php
    require('header.php');

    if(isset($_POST['CPlug'])){
        $title = htmlspecialchars($_POST["title"]);
        $stitle = htmlspecialchars($_POST["stitle"]);
        $img = htmlspecialchars($_FILES["img"]);
        $the_news = htmlspecialchars($_POST["the-news"]);
        $NT = htmlspecialchars($_POST["NT"]);

        if(!empty($title) || !empty($stitle) || !empty($img)  || !empty($the_news) || !empty($NT)){

            $imgTmpPath = $img['tmp_name'];
            $imgExtension = pathinfo($imgTmpPath, PATHINFO_EXTENSION);
            $uniqueName = uniqid() . '_' . $imgExtension;

            $mg_new_Path = 'asedes/img/' . $NT . '/' . $uniqueName;
            copy($imgTmpPath, $mg_new_Path);

            $currentDateTime = date('D H:i');


            require_once "Data/dbh.inc.php";
            $query = "SELECT * FROM Admin 
                    WHERE User_name = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('s', $_COOKIE["User_name"]);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0){
                require_once "Data/dbh.inc.php";
                    $user__Type = "Admin";
                    $USER = mysqli_fetch_assoc($result);
                $query = "INSERT INTO news (type, Title, SUP_title, Article, Img_path, Date_Time, Au_type, Au_type_id) 
                        VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param('ssssssss',$NT, $title, $stitle, $the_news, $mg_new_Path, $currentDateTime, $user__Type, $USER['id']);
                $stmt->execute();
            }else{
                require_once "Data/dbh.inc.php";
                $query = "SELECT * FROM Admin 
                        WHERE User_name = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param('s', $_COOKIE["User_name"]);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0){
                    require_once "Data/dbh.inc.php";
                        $user__Type = "Admin";
                        $USER = mysqli_fetch_assoc($result);
                    $query = "INSERT INTO news (type, Title, SUP_title, Article, Img_path, Date_Time, Au_type, Au_type_id) 
                            VALUES (?, ?, ?, ?, ?)";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param('ssssssss',$NT, $title, $stitle, $the_news, $mg_new_Path, $currentDateTime, $user__Type, $USER['id']);
                    $stmt->execute();
                    
                }
            }
            $title = "";
            $stitle = "";
            $img = "";
            $the_news = "";
            $NT = "";
            $mg_new_Path = "";
            $currentDateTime = date("");
            header("Location: ./My_posts.php");
        }
    }
?>

    <div class="CREATE_CONTANT" id="CREATE_CONTANT">
        <div class="main_contant">
            <div class="title">Create Plug</div>
            <form class="Form">
                <div class="AE_F_Text">
                    <label>Title</label>
                    <input type="text" name="title" placeholder="Enter Title">
                </div>

                <div class="AE_F_Text">
                    <label>Sub Title</label>
                    <input type="text" name="stitle" placeholder="Enter Sub Title">
                </div>

                <div class="AE_F_Text">
                    <label for="img">Images <img id="img_viue" style="background-size: cover;">
                    <div class="plas" id="plas">+</div>
                </label>
                    
                    <input type="file" name="img" accept="image/*" id="img" hidden>
                    <div class="img_ph"></div>
                </div>

                <div class="AE_F_Text">
                    <label>The NEWS</label>
                    <textarea name="the-news"></textarea>
                </div>

                <label class="rb_tit">NEWS Type</label>
                <div class="AE_F_Text">
                    <label>Spore</label>
                    <input type="radio" name="NT" value="Sport" />
                </div>

                <div class="AE_F_Text">
                    <label>Politics</label>
                    <input type="radio" name="NT" value="Politics" />
                </div>

                <div class="AE_F_Text">
                    <label>Health</label>
                    <input type="radio" name="NT" value="Health" />
                </div>
                <div class="AE_F_Text">
                    <label>Technology</label>
                    <input type="radio" name="NT" value="Technology" />
                </div>

                <div class="AE_F_Text">
                    <input type="button" name="CPlug" value="submit">
                </div>
            </form>
        </div>
    </div>
</main>
<?php
    require('footer.php');
?>