<?php
    require('header.php');
?>

    <div class="EDIT_ACCONTE" id="EDIT_ACCONTE">
        <div class="main_contant">
            <div class="title">Edit Account</div>
            <form class="Form"  method="post">
            <div class="AE_F_Text">
                <label>First Name</label>
                <input type="text" name="fname" placeholder="Change First Name">
            </div>

            <div class="AE_F_Text">
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Change Last Name">
            </div>

            <div class="AE_F_Text">
                <input type="button" name="title" value="submit">
            </div>
        </form>
            
        </div>
    </div>
</main>
<?php
    require('footer.php');
?>
