<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply</title>
    <link rel="stylesheet" href="CSS/register.css">
</head>
<body>

    <div id="signup-container">
        <div class="logo">
            <img src="images/logo.png" alt="Logo">
            <div>Nexus Bank</div>
        </div>
        
            <form id="signupForm">
                
                <div class="step active" id="step0">
                    <h3>Register as?</h3>
                    <button id="individual" type="button"onclick="nextStep(0)">Individual Account</button>
                    <button id="business" type="button"onclick="nextStep(0)">Business Account</button>
                    
                </div>
    
                
                <div class="step" id="step1">
                    <h3>Enter Your Full Name</h3>
                    <input type="text" id="fullName" placeholder="John Doe" required>
                    <button type="button" onclick="nextStep(1)">Next</button>
                </div>
                

                <div class="step" id="step2">
                    <h3>Enter Your Birth Date</h3>
                    <input type="date" id="birthDate" required>
                    <button type="button" onclick="nextStep(2)">Next</button>
                </div>
    

                <div class="step" id="step3">
                    <h3>Upload Your ID</h3>
                    <input type="file" accept="image/*" id="idUpload" required>
                    <button type="button" onclick="nextStep(3)">Next</button>
                </div>
    
                
                <div class="step" id="step4">
                    <h3>Enter Your Address</h3>
                    <input type="text" id="address" placeholder="New York" required>
                    <button type="button" onclick="nextStep(4)">Next</button>
                </div>
    

                <div class="step" id="step5">
                    <h3>Enter Your Phone Number</h3>
                    <input type="tel" id="phone" placeholder="+123456789" required>
                    <button type="button" onclick="nextStep(5)">Next</button>
                </div>
    
                
                <div class="step" id="step6">
                    <h3>Enter Your Email</h3>
                    <input type="email" id="email" placeholder="john.doe@example.com" required>
                    <button type="button" onclick="nextStep(6)">Next</button>
                </div>
    

                <div class="step" id="step7">
                    <h3>Enter Your Password</h3>
                    <input type="password" id="password" placeholder="*******" required>
                    <button type="button" onclick="nextStep(7)">Next</button>
                </div>
    

                <div class="step" id="step8">
                    <h3>Confirm Your Password</h3>
                    <input type="password" id="confirmPassword" placeholder="*******" required>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    <script src="JS/register.js"></script>
</body>
</html>