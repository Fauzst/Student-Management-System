<?php 
    require('./read.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    <?php include 'styles.css'; ?>
</style>
<body>
    <div class="container--login">
        <div class="announcement--box"></div>
        <div class="login--box">
            <img class="login--header" src="assets/images/pup-school.jpg"></img>
            <h1>Please login</h1>
            
            <form class="inputs" method="post">
                <input class="login--inputs" type="name" name="username" placeholder="Username"></input>
                <input class="login--inputs" type="password" name="password" placeholder="Password"></input>
                <input class="login--inputs blue" type="submit" name="submit" value="Login"></input>
                <?php 
                    if(isset($_POST['submit'])) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                
                        $queryLogin = "SELECT * FROM login WHERE username = '$username'";
                        $sqlLogin = mysqli_query($connection, $queryLogin);
                
                        if (!$sqlLogin) {
                            die("Query failed: " . mysqli_error($connection));
                        } 
                
                        $row = mysqli_fetch_assoc($sqlLogin);
                
                        if($row) {
                            $usernameDB = $row['username'];
                            $passwordDB = $row['password'];
                            $uniqueIdDB = $row['uniquekey'];
                        } else {
                            $usernameDB = null;
                            $passwordDB = null;
                        }
                
                        if ($username === $usernameDB && $password === $passwordDB) {
                            header("Location: my-info.php");
                        } else {
                            echo "<div class='notify'>Invalid Username or Password!</div>";
                        }
                    }
                ?>
            </form>
            <a href="#" >Forgot Password?</a>
        </div>
        <script>
            setTimeout(function() {
                var errorMessage = document.querySelector('.notify');
                if (errorMessage) {
                    errorMessage.style.display = 'none';
                }
            }, 3000);
        </script>
    </div>
</body>
</html>

