<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");    
    exit();
}

if($_SESSION['role']==1){
    header("Location: dashboard.php");    
    exit();    
}

error_reporting(E_ALL);
ini_set('display_errors',1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Dashboard</title>
    <link rel="icon" href="images/tab_logo/circular_favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/footer.css">
    
</head>
<body>
    <div id="logout-modal" class="modal">
        <div class="modal-content">
            <h2>Confirm Logout</h2>
            <p>Are you sure you want to log out?</p>
            <div class="modal-actions">
                <button id="confirm-logout" onclick="window.location.href='logout.php'" class="btn-confirm">Yes, Logout</button>
                <button id="cancel-logout" class="btn-cancel">Cancel</button>
            </div>
        </div>
    </div>
    <nav class="navbar">
        <ul>
            <li class="logo"><img src="images/logo.png" alt="logo"></li>
            <li><a href="cards.php">Products</a></li>
            <li><a href="#account-overview">Account Overview</a></li>
            <li><a href="#transfers">Transfers</a></li>
            <li><a href="#transactions">Transactions</a></li>
            <li><a href="#notifications">Notifications</a></li>
            <li><a href="#settings">Settings</a></li>
            <li><button onclick="showLogoutModal()">Logout</button></li>
        </ul>
    </nav>
 
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
   <div class="upcoming-deadlines-section">
<!-- <div class="danger-indicator"></div> -->
<div class="deadlines-form">
  <h2>Upcoming Deadlines</h2>
  <form id="deadlineForm">
  <b><label for="billName">Bill Name:</label>
    <input type="text" id="billName" placeholder="Enter bill name">
    <label for="dueDate">Due Date:</label>
    <input type="date" id="dueDate">
    <label for="amountDue">Amount Due:</label>
    <input type="number" id="amountDue" placeholder="Enter amount due">
    <label for="priority">Priority Level:</label></b>
    <select id="priority">
      <option value="green">Done (Low Priority)</option>
      <option value="yellow">Incoming (Medium Priority)</option>
      <option value="red">Urgent (High Priority)</option>
    </select>
    <button type="button" onclick="addDeadline()">Add Deadline</button>
  </form>
  <div id="deadlinesList"></div>
</div>
</div>
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
    <h2 style="text-align:center;">User Settings</h2>

    <section class="home-section">
        <div id="welcome">
            <h1>Welcome To Your Profile <?php echo$_SESSION['name']; ?></h1>
            <img src="images/user.png" alt="Profile Picture" id="profileImage">
            <div class="profile-actions">
                <button type="button" id="uploadBtn">Enter Your Profile Picture</button>
                <input type="file" name="Profile" id="profileInput" accept="image/*">
            </div>
        

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
</div>
    </section>

    <div class="settings-options">
        <button id="theme-toggle" class="styled-button">Toggle Dark Mode</button>
        <button id="clear-data" class="styled-button">Clear Dashboard Data</button>
    </div>
</section>

    <button class="scroll-to-top" id="scroll-to-top">&#8679;</button>
    <script src="js/dashboard.js"></script>
<?php include 'footer.php'?>

   

