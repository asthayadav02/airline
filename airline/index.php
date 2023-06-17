<?php

include "conn.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        
        <div class="container2">
            <h2> Login </h2>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="form-group">
                    <input type="text"  placeholder="Username" name="username" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password"  placeholder="Password" name="password" autocomplete="new-password">
                </div>
                <div class="col">
                    <input type="submit" class="form-control" valur="submit">
                </div>

                
            </form>

        </div>
    </div>
    <div class="runway">
    </div>
    <img src="image/airplane.png" class="plane">
    </div>

</body>
</html>
<?php 
    
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $username=$_POST['username'];
        $password=sha1($_POST['password']);
        $stmt=$conn->prepare("SELECT * FROM users WHERE username= ? AND password = ? LIMIT 1");
        $stmt->execute(array($username,$password));
        $stmt->$stmt->rowCount();
        $user-$stmt->fetch();
    }
    
    if($checkuser > 0)
    {
        $_SESSION['user'] = $user['username'];
        $_SESSION['type']=$user['type'];
        header('location:home.php');
    }
?>