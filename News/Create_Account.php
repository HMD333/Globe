<?php
    require('header.php');

    if(isset($_POST["New_auther"])) {
        $fname = htmlspecialchars($_POST["fname"]);
        $lname = htmlspecialchars($_POST["lname"]);
        $uname = htmlspecialchars($_POST["uname"]);
        $email = htmlspecialchars($_POST["email"]);
        $AUPass = htmlspecialchars($_POST["AUPass"]);
        $AUrePass = htmlspecialchars($_POST["AUrePass"]);
        
        if(!empty($fname) || !empty($lname) || !empty($email)  || !empty($username) || !empty($password) || !empty($repassword)){

            if($_password == $repassword){
                require_once "Data/dbh.inc.php";
                
                $query = "SELECT * FROM Auther WHERE Email = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param('s', $email);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows == 0){
                    $query = "INSERT INTO Auther (F_name, L_name, User_name, Password, Email) 
                            VALUES (?, ?, ?, ?, ?)";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param('sssss',$fname, $lname, $AUPass, $AUrePass, $email);
                    $stmt->execute();
                    $fname = "";
                    $lname = "";
                    $uname = "";
                    $email = "";
                    $AUPass = "";
                    $AUrePass = "";
                    header("Location: index.php");
                }
            }
        }
    }
?>

    <div class="CREATE_ACCOUNT" id="CREATE_ACCOUNT">
        <div class="main_contant">
            <div class="title">Create Account</div>
            <form class="Form">
                <div class="AE_F_Text">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="Enter First Name">
                </div>

                <div class="AE_F_Text">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Enter Last Name">
                </div>

                <div class="AE_F_Text">
                    <label>User Name</label>
                    <input type="text" name="uname" placeholder="Enter User Name">
                </div>

                <div class="AE_F_Text">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter Email">
                </div>

                <div class="AE_F_Text">
                    <label>Password</label>
                    <input type="Password" name="AUPass" placeholder="Enter Password">
                </div>

                <div class="AE_F_Text">
                    <label>Repassword</label>
                    <input type="Password" name="AUrePass" placeholder="Re Enter password">
                </div>

                <div class="AE_F_Text">
                    <input type="submit" name="New_auther" value="submit">
                </div>
            </form>
        </div>
    </div>
</main>
<?php
    require('footer.php');
?>