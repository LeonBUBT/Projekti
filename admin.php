<?php
session_start();
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
        <div class="stat-box">Total Users: <span id="totalUsers">9</span></div>
        <div class="stat-box">Total Businesses: <span id="totalBusinesses">50</span></div>
    </div>
    
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
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['user_id']; ?></td>
                        <td><?= $user['name']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td><?= $user['phone']; ?></td>
                        <td><?= $user['status']; ?></td>
                        <td>
                            <a href="backend/delete_user.php?id=<?php echo $user['user_id']; ?>" 
                                onclick="return confirm('Are you sure you want to delete this user?')">
                                <button class="delete">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
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
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['user_id']; ?></td>
                        <td><?= $user['name']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td><?= $user['phone']; ?></td>
                        <td><?= $user['created_at']; ?></td>
                        <td><?= $user['status']; ?></td>
                        <td>
                            <button>Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
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


<?php include 'footer.php'; ?>