
<?php
include "conn.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airplane Takeoff Animation or Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="mid">
            <ul class="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Booking</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="container2">
            <h2>Booking Alert</h2>
            <form action="noaction.php">
                <div class="form-group">
                    <input type="text" name="" placeholder="Enter Your Name" name="name">
                </div>
                <div class="form-group">
                    <input type="text" name="" placeholder="Enter Your Email" name="email">
                </div>
                <div class="form-group">
                    <input type="text" name="" placeholder="Enter Your Phone Number">
                </div>

                <div class="col">
                    <input type="text" class="form-control" placeholder="To" name="to">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="From" name="from">
                </div>

                <button class="btn" name="submit">Submit</button>
            </form>

        </div>
    </div>
    <div class="runway">
    </div>
    <img src="image/airplane.png" class="plane">
    </div>



</body>

</html>