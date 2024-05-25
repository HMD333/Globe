<?php
$user = "";

if(isset($_POST["LOGIN"])){
    $_username = htmlspecialchars($_POST["Lusername"]);
    $_password = htmlspecialchars($_POST["Lpassword"]);

    if(!empty($_username) || !empty($_password)){

        require_once "Data/dbh.inc.php";

        $query = "SELECT * FROM Admin 
                WHERE (User_name = ? OR Email = ?) AND Password = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('sss', $_username, $_username, $_password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0){
            $user = "Admin";
            $_username = "";
            $_password = "";
            while ($row = $result->fetch_assoc()) {
                $User_name = $row["User_name"];
                setcookie("User_name", $User_name);
            }
        }
        else{
            require_once "Data/dbh.inc.php";

            $query = "SELECT * FROM Auther 
                WHERE (User_name = ? OR Email = ?) AND Password = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('sss', $_username, $_username, $_password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0){
                $user = "Auther";
                $_username = "";
                $_password = "";
                while ($row = $result->fetch_assoc()) {
                    $User_name = $row["User_name"];
                    setcookie("User_name", $User_name);
                }
            }else{
                require_once "Data/dbh.inc.php";

                $query = "SELECT * FROM User 
                    WHERE (User_name = ? OR Email = ?) AND Password = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param('sss', $_username, $_username, $_password);
                $stmt->execute();
                $result = $stmt->get_result();
    
                if ($result->num_rows > 0){
                    $user = "User";
                    $_username = "";
                    $_password = "";
                    while ($row = $result->fetch_assoc()) {
                        $User_name = $row["User_name"];
                        setcookie("User_name", $User_name);
                    }
                }else{
                    header("Location: index.php");
                }
            }
        }
    }
    else{
        header("Location: index.php");
    }

}
if(isset($_POST["Register"])){
    $fname = htmlspecialchars($_POST["fname"]);
    $lname = htmlspecialchars($_POST["lname"]);
    $_username = htmlspecialchars($_POST["Rusername"]);
    $email = htmlspecialchars($_POST["email"]);
    $_password = htmlspecialchars($_POST["Rpassword"]);
    $repassword = htmlspecialchars($_POST["repassword"]);

    if(!empty($fname) || !empty($lname) || !empty($email)  || !empty($username) || !empty($password) || !empty($repassword)){

        if($_password == $repassword){
            require_once "Data/dbh.inc.php";
            
            $query = "SELECT * FROM User WHERE Email = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 0){
                $query = "INSERT INTO User (F_name, L_name, User_name, Password, Email) 
                        VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param('sssss',$fname, $lname, $_username, $_password, $email);
                $stmt->execute();
                $result = $stmt->get_result();

                $user = "User";
                $fname = "";
                $lname = "";
                setcookie("User_name", $_username);
                $_username = "";
                $_password = "";
                $email = "";
            }else{
                header("Location: index.php");
            }
        }else{
            header("Location: index.php");
        }
    }else{
        header("Location: index.php");
    }
}
if($user == ""){
    echo'
                    <div id="nav_login">
                        <li>
                            <button id="LOGIN" onclick="log_in()">LOGIN</button>
                            <div class="nav_item_underline"></div>
                        </li>
                    </div>
                
';

}
?>