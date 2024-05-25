<?php
    require('header.php');


if(isset($_POST["SARCH"])) {
    $Sarched = htmlspecialchars($_POST["sarch"]);
    
    if(!empty($Sarched)){
        require_once "Data/dbh.inc.php";

        $query = "SELECT * FROM News WHERE Title LIKE '%" . $Sarched . "%';";
        
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {
            
            $newsList = array();

            
            while ($row = mysqli_fetch_assoc($result)) {
                
                $newsList[] = $row;
            }
            echo '
            <div class="SARCH" id="SARCH">
                <div class="main_contant">
                    <div class="title">Sarch</div>';

                    foreach ($newsList as $news) {
                        echo'<div class="contant_card">
                                <a href="Post.php">
                                    <img src=".'.$news['Img_path'].'">
                                </a>
                                <div class="text">
                                    <div class="T_text">
                                        <p>
                                            '.$news['Title'].'
                                        </p>
                                    </div>
                                    <div class="ST_text">
                                        <p>
                                            '.$news['SUP_title'].'
                                        </p>
                                    </div>
                                </div>
                            </div>';
                        
                    }
                    
                
            
        }else{
            echo'<div class="SARCH" id="SARCH">
            <div class="main_contant">
                <div class="title">Sarch</div>
                <div class="ERORR">Sorry NO Resalt</div>';
        }
    }else{
        echo'<div class="SARCH" id="SARCH">
            <div class="main_contant">
                <div class="title">Sarch</div>
                <div class="ERORR">Sorry NO Resalt</div>';
    }
}
else{
    echo'<div class="SARCH" id="SARCH">
            <div class="main_contant">
                <div class="title">Sarch</div>
                <div class="ERORR">Sorry NO Resalt</div>';
}
?>
        </div>
    </div>
</main>
<?php
require('footer.php');
?>