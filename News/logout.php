<?php
        setcookie("user_Type",null,time() - 3600);
        setcookie("User_name",null,time() - 3600);
    header("Location: ./index.php");