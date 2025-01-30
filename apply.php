<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply to Nexus Bank</title>
    <link rel="icon" href="images/tab_logo/circular_favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="CSS/apply.css">
</head>
<body>
    
    <div class="container">
        <div class="header">
            <img src="images/logo.png" alt="">
            <h1>Apply for Nexus Bank</h1>
        </div>

        <hr id="header-hr">

        <div id="acc-type" class="">
            <div class="acctypeDiv">
                <button id="individ" value="individ">Individual</button>
                <button id="business" value="business">Business</button>
            </div>
            <button class="next hidden">Next</button>
        </div>       

        <form action="backend/apply_backend.php" method="POST" class="hidden" >            
            <div class="name_email">
                <div class="nameDiv">
                    <label for="name">Name:</label>
                    <input id="name" name="name" type="text" placeholder="Enter your full name" required>
                </div>
                <div class="emailDiv">
                    <label for="email">Email:</label>
                    <input id="email" name="email" type="email" placeholder="Enter your email" required>
                </div>            
            </div>


            <div class="phone_type">
                <div class="phoneDiv">
                    <label for="phone">Phone Number:</label>
                    <input id="phone" name="phone" type="tel" placeholder="Enter your phone number" maxlength="11" required>
                </div>

                <div class="cardDiv">
                    <label for="type">Card type</label>
                    <select name="cardType" id="type" required>
                        <option value=""> --- </option>
                        <option value="classic">Classic debit card</option>
                        <option value="premium">Premium debit card</option>
                        <option value="elite">Elite debit card</option>
                    </select>
                </div>
            </div>


            <div class="password">
                <div class="passDiv">
                    <label for="password">Password:</label>
                    <input id="password" name="password" type="password" placeholder="Enter your password" required>
                </div>

                <div class="confirmDiv">
                    <label for="confirm">Confirm password:</label>
                    <input id="confirm" name="confirm" type="password" placeholder="Confirm your password" required>
                </div>
            </div>


            <div class="age_gender">
                <div class="bdayDiv">
                    <label for="bday">Birth-day:</label>
                    <input id="bday" name="bday" type="date" required>
                </div>

                <div class="cardDiv">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" required>
                        <option value=""> --- </option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        <option value="O">Other</option>
                    </select>
                </div>
            </div>
            
            <p id="login">Already have an account? <a href="Login.php">Login</a></p>

            <button value="submit" id="submit" class="" >Apply!</button>

        </form>
    </div>
    <script src="JS/apply.js" ></script>
</body>
</html>