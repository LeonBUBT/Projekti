<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div id="logout-modal" class="modal">
        <div class="modal-content">
            <h2>Confirm Logout</h2>
            <p>Are you sure you want to log out?</p>
            <div class="modal-actions">
                <button id="confirm-logout" class="btn-confirm">Yes, Logout</button>
                <button id="cancel-logout" class="btn-cancel">Cancel</button>
            </div>
        </div>
    </div>
    <nav class="navbar">
        <ul>
            <li class="logo"><img src="images/logo.png" alt="logo"></li>
<<<<<<< HEAD
=======
            <li><a href="cards.php">Products</a></li>
>>>>>>> main
            <li><a href="#account-overview">Account Overview</a></li>
            <li><a href="#transfers">Transfers</a></li>
            <li><a href="#transactions">Transactions</a></li>
            <li><a href="#notifications">Notifications</a></li>
<<<<<<< HEAD
            <li><a href="cards.php">Products</a></li>
=======
>>>>>>> main
            <li><a href="#settings">Settings</a></li>
            <li><button onclick="showLogoutModal()">Logout</button></li>
        </ul>
    </nav>

    <section id="account-overview" class="section"  style="margin-top: 100px;">
        <h2>Account Overview</h2>
        <div class="overview-grid">
            <div class="overview-card">
                <h3>Total Balance</h3>
                <p>$<span id="balance">3000</span></p>
            </div>
            <div class="overview-card">
                <h3>Monthly Expenses</h3>
                <p>$<span id="expenses">1200</span></p>
            </div>
            <div class="overview-card">
                <h3>Savings</h3>
                <p>$<span id="savings">1800</span></p>
            </div>
        </div>
        <div class="pie-chart-container" id="transfers">
            <div id="pie-chart" class="pie-chart"></div>
            <div id="pie-chart-text" class="pie-chart-text">0%</div>
        </div>
    </section>

 
    <section  class="section">
        <h2>Transfers</h2>
        <form id="transfer-form">
            <label for="recipient">Recipient:</label>
            <input type="text" id="recipient" placeholder="Enter recipient name" required>
            <label for="transfer-amount">Amount:</label>
            <input type="number" id="transfer-amount" placeholder="Enter amount" required>
            <button type="submit">Send Money</button>
        </form>
    </section>
    
<!-- transcations -->
<section id="transactions" class="section">
    <h2>Recent Transactions</h2>
    <table class="transactions-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody id="transactions-body">
            <tr><td>01/01/2024</td><td>Deposit</td><td>+$1000</td></tr>
            <tr><td>02/01/2024</td><td>Groceries</td><td>-$200</td></tr>
        </tbody>
    </table>
</section>
<section>    
      
    <div id="detailsContainer"></div>
<<<<<<< HEAD
   <!-- <div class="upcoming-deadlines-section"> -->
=======
   <div class="upcoming-deadlines-section">
>>>>>>> main
<!-- <div class="danger-indicator"></div> -->
<div class="deadlines-form">
  <h2>Upcoming Deadlines</h2>
  <form id="deadlineForm">
    <label for="billName">Bill Name:</label>
    <input type="text" id="billName" placeholder="Enter bill name">
    <label for="dueDate">Due Date:</label>
    <input type="date" id="dueDate">
    <label for="amountDue">Amount Due:</label>
    <input type="number" id="amountDue" placeholder="Enter amount due">
    <label for="priority">Priority Level:</label>
    <select id="priority">
      <option value="green">Done (Low Priority)</option>
      <option value="yellow">Incoming (Medium Priority)</option>
      <option value="red">Urgent (High Priority)</option>
    </select>
    <button type="button" onclick="addDeadline()">Add Deadline</button>
  </form>
  <div id="deadlinesList"></div>
</div>
<<<<<<< HEAD
<!-- </div> -->
=======
</div>
>>>>>>> main
</section>
   
<!-- notifs -->
    <section id="notifications" class="section">
        <h2>Notifications</h2>
        <div id="notifications-container">
            <p>You have no new notifications.</p>
        </div>
    </section>
<!-- settings -->

    <section id="settings" class="section">
        <section class="home-section">
            <div id="welcome">
                <h1>Welcome To Your Profile <span>[User]</span></h1>
                <img src="images/user.png" alt="Profile Picture" id="profileImage">
                <div class="profile-actions">
                    <button type="button" id="uploadBtn">Enter Your Profile Picture</button>
                    <input type="file" name="Profile" id="profileInput" accept="image/*">
                </div>
            </div>  
<<<<<<< HEAD
            
=======
>>>>>>> main
            <div id="UserInfo">
                <div id="BasicInfo">
                    <p id="FullName">Full Name</p>
                    <p>John Smith</p>
                    <p id="Email">Email</p>
                    <p>ex@ample.email</p>
                    <p id="PhoneNumber">Phone Number</p>
                    <p>+123-345-678-90</p>
                </div>
                
                <div id="AccountInfo">
                    <p id="Username">Username</p>
                    <p>john_smith</p>
                    <p id="DateJoined">Date Joined</p>
                    <p>January 1, 2023</p>
                    <p id="Membership">Membership Tier</p>
                    <p>Free</p>
                </div>
            
                <div id="ActionButtons">
                    <button id="EditBtn">Edit Information</button>
                    <button id="SaveChangesBtn">Save Changes</button>
                </div>
                
                <div id="SecuritySettings">
                    <p id="ChangePassword">Change Password</p>
                    <button id="ChangePasswordBtn">Change</button>
                </div>
            
                <div id="ExportDelete">
                    <button id="ExportDataBtn">Export Data</button>
                    <button id="DeleteAccountBtn" onclick="showLogoutModal()">Delete Account</button>
                </div>
            </div>
            
        </section>
        <h2>Settings</h2>
        <div class="settings-options">
<<<<<<< HEAD
            <button id="theme-toggle" class="styled-button">Toggle Dark Mode</button> <br>
=======
            <button id="theme-toggle" class="styled-button">Toggle Dark Mode</button>
>>>>>>> main
            <button id="clear-data" class="styled-button">Clear Dashboard Data</button>
        </div>
    </section>

<<<<<<< HEAD
    <?php include 'footer.php' ?>
=======
<!-- foooterrr -->
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>Your trusted financial partner, making money management easy and efficient.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#overview">Home</a></li>
                    <li><a href="#account-overview">Account Overview</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email: support@nexusbank.com</p>
                <p>Phone: +38349292602</p>
            </div>
        </div>
        <p class="footer-bottom">&copy; 2024 Nexus Bank. All rights reserved.</p>
    </footer>
>>>>>>> main

    <button class="scroll-to-top" id="scroll-to-top">&#8679;</button>
    <script src="js/dashboard.js"></script>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> main
