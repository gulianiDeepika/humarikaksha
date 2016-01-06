<head>
    <title>Admin Login</title>
</head>
<?php include('../config/globals.php'); ?>
<?php
    if($_POST) {
        $q = "SELECT * from users where username = '$_POST[username]' AND password = SHA1('$_POST[password]')";
        $r = mysqli_query($dbc, $q);

        if(mysqli_num_rows($r) == 1) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('Location: index.php');
        } else {
            echo('Please Enter Valid Username / Password');
        }
    }
?>
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <strong>Login</strong>
                </div>
                <div class="panel-body">
                    <form role="form" action="login.php" method="post">
                        <label for="inputEmail">Username</label>
                        <input type="text" autocomplete="off" name="username" class="form-control" placeholder="Username" required="" autofocus="">
                        <label for="inputPassword">Password</label>
                        <input type="password" autocomplete="off" name="password" class="form-control" placeholder="Password" required="">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>