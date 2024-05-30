<?php include('navbar.php');
session_start();
?>

<!-- <a href="../component/logout.php">logout</a> -->
<div class="userpage-container">
        <div class="userpage">
            <div class="userage-ico">
                <img src="../assets/usercirc.svg" alt="">
            </div>
            <?php echo "Welcome ".$_SESSION['login'];?>
            <div class="userpage-name"><?php echo $name?></div>
            <a href="../component/logout.php"><input type="button" value="logout"></a>
            <div class="addproduct-container">
                <div class="addproduct-name">add trip</div>
                <div class="addproduct-button-container"><a href="addtrip.php"><input type="button" class="addproduct-button" value="Click here"></input></a></div>
                <div class="addproduct-name" style="margin: 0  0 0 10px">update trip</div>
                <div class="addproduct-button-container"><a href="updatetrip.php"><input type="button" class="addproduct-button" value="Click here"></input></a></div>
            </div>
        </div>
    </div>