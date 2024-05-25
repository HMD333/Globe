<?php
    require('header.php');
?>

<div class="YOUR_CONTANT" id="YOUR_CONTANT">
        <div class="main_contant">
            <div class="title">My posts</div>

            <div class="contant_card">
            <?php
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
                    $query = "SELECT * FROM News 
                        WHERE Au_type = ? AND Au_type_id = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param('ss',$user__Type , $USER['id']);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if ($result->num_rows > 0){
                        RESULTS($result);
                    }else{
                        echo'<div class="ERORR">Sorry NO Resalt</div>';
                    }
                }
                else{
                    $query = "SELECT * FROM Auther 
                        WHERE User_name = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param('s', $_COOKIE["User_name"]);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0){
                        require_once "Data/dbh.inc.php";
                        $user__Type = "Auther";
                        $USER = mysqli_fetch_assoc($result);
                        $query = "SELECT * FROM News 
                            WHERE Au_type = ? AND Au_type_id = ?";
                        $stmt = $conn->prepare($query);
                        $stmt->bind_param('ss',$user__Type , $USER['id']);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        if ($result->num_rows > 0){
                            RESULTS($result);
                        }else{
                            echo'<div class="ERORR">Sorry NO Resalt</div>';
                        }
                    }
                }
                function RESULTS($result){
                    $NewsList = array();
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        
                        $NewsList[] = $row;
                    }
                    foreach ($NewsList as $news) {
                        echo'<a href="Post.php">
                                <img src="'.$news["Img_path"].'">
                            </a>
                            <div class="text">
                                <div class="T_text">
                                    <p>'.$news["Title"].'</p>
                                </div>
                                <div class="ST_text">
                                    <p>'.$news["SUP_title"].'</p>
                                </div>
                            </div>
                            <div class="edit">
                                <form action="Edit_Plog.php" method="post">
                                    <input type="hidden" name="ID" value="'.$news["id"].'">
                                    <label for="EB">
                                        <button>EDIT</button>
                                    </label>
                                    <input type="submit" id="EB" hidden>
                                </form>
                            </div>
                            <div class="delete">
                                <form action="Delete_Plog.php" method="post">
                                    <input type="hidden" name="ID" value="'.$news["id"].'">
                                    <label for="DB">
                                        <button>Delete</button>
                                    </label>
                                    <input type="submit" id="DB" hidden>
                                </form>
                            </div>';
                    }
                    
                }
            ?>
                
                
                
            </div>
        </div>
    </div>
</main>
<?php
    require('footer.php');
?>