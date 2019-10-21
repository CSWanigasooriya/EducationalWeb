<?php
//DYNAMIC BUTTON TO SET USER NAME AS BUTTON VALUE
if(isset($_GET['get'])) {
$_SESSION['user_logged_in']=false;
unset($_SESSION['user']);
}?>
<?php if(isset($_SESSION['user']) and $_SESSION['user_logged_in']): ?>
<a class="btn btn-large blue waves-effect darken-4" type="button" href="profile.php"><?php echo $_SESSION['user']; ?></a>
<?php else: ?>
<a class="btn btn-large blue waves-effect darken-4" type="button" href="signIn.php">LOGIN</a>
<?php endif; ?>