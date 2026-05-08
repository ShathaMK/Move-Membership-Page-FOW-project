<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="icon.jpg" type="image/x-icon">
    <title>MOVE Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="container">
    <div class="title">Registration</div>
    <div class="content">
        <form action="DB.php" method="POST">
            <div class="user-details">

                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" name="name" required>
                </div>

                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your username" name="user" required>
                </div>

                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your email" name="email" required>
                </div>

                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="tel" placeholder="Enter your number" name="number" required>
                </div>

                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password" name="pwd" required minlength="6">
                </div>

                <div class="date">
                    <span class="details">Starts from</span>
                    <input type="date" id="date" name="date">
                </div>

                <div class="date">
                    <label for="plan">Choose your plan:</label>
                    <select name="plan" id="plan" required>
                        <option value="">Select</option>
                        <option value="BASIC PACKAGE">BASIC PACKAGE</option>
                        <option value="PREMIUM PACKAGE">PREMIUM PACKAGE</option>
                        <option value="PRO PACKAGE">PRO PACKAGE</option>
                    </select>
                </div>

            </div>

            <div class="gender-details">
                <input type="radio" name="gender" id="dot-1" value="m">
                <input type="radio" name="gender" id="dot-2" value="f">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                </div>
            </div>

            <div class="button">
                <input type="submit" name="Regbtn" value="Register">
            </div>
        </form>
    </div>
</div>

</body>
</html>
