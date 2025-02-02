<?php
require_once 'backend/config.php';
require_once 'backend/user_class.php';
require_once 'backend/delete_user.php';
if($_SESSION['role']==0){
    header("Location: dashboard.php");    
    exit();    
}

if (session_status() == PHP_SESSION_NONE) {
    session_start(); 
}

$database = new Database();
$userClass = new User($database); 

$usersTable = $userClass->getUsers();

$individual_accounts = 0;
$business_accounts = 0;

if(!empty($usersTable)){
    foreach($usersTable as $user){
        if($user['type']=="individ") $individual_accounts++;
        if($user['type']=="business") $business_accounts++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Bank Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="images/tab_logo/circular_favicon.png" type="image/x-icon">
</head>
<body>

    <div class="stats">
        <div class="stat-box">Total Users: <span id="totalUsers"><?php echo $individual_accounts ;?></span></div>
        <div class="stat-box">Total Businesses: <span id="totalBusinesses"><?php echo $business_accounts ;?></span></div>
    </div>

    <?php if (isset($_GET['message'])): ?>
        <p style="color: green;"><?php echo htmlspecialchars($_GET['message']); ?></p>
    <?php endif; ?>

    <?php if (isset($_GET['error'])): ?>
        <p style="color: red;"><?php echo htmlspecialchars($_GET['error']); ?></p>
    <?php endif; ?>

    
    <div class="dashboard-container">
        <h1>Manage Users</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(!empty($usersTable)){
                        foreach($usersTable as $user){
                            if($user['type']=="individ"){
                                echo'
                                    <tr>
                                        <td>'.$user['user_id'].'</td>
                                        <td>'.$user['name'].'</td>
                                        <td>'.$user['email'].'</td>
                                        <td>'.$user['phone'].'</td>
                                        <td>'.$user['created_at'].'</td>
                                        <td>
                                            <a href="backend/delete_user.php?id=' . $user["user_id"] . '" 
                                                onclick="return confirm(\'Are you sure you want to delete this user?\')">
                                                <button class="delete">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                ';
                            }    
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>

    <div class="dashboard-container">
        <h1>Manage businesses</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Business ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    if(!empty($usersTable)){
                        foreach($usersTable as $user){
                            if($user['type']=="business"){
                                echo'
                                    <tr>
                                        <td>'.$user['user_id'].'</td>
                                        <td>'.$user['name'].'</td>
                                        <td>'.$user['email'].'</td>
                                        <td>'.$user['phone'].'</td>
                                        <td>'.$user['created_at'].'</td>
                                        <td>
                                            <a href="backend/delete_user.php?id=' . $user["user_id"] . '" 
                                                onclick="return confirm(\'Are you sure you want to delete this user?\')">
                                                <button class="delete">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                ';
                            }    
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>

                
    <section>
        <h2>Send Notification</h2>
        <form id="notificationForm">
            <label for="recipient">Select Recipient:</label>
            <select id="recipient">
                <option value="all">All Users</option>
                <option value="1">John Doe</option>
            </select>
            <label for="message">Message:</label>
            <textarea id="message" placeholder="Enter notification message..."></textarea>
            <button type="submit">Send Notification</button>
        </form>
    </section>

<button onclick="window.location.href='logout.php'" >logout</button>
<?php include 'footer.php'; ?>