<?php
include 'backend/config.php';

$db = new Database();
$conn = $db->getConnection();

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM users WHERE user_id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("Location: admin.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $status = $_POST['status'];

    if (isset($_POST['user_id'])) {
        $id = $_POST['user_id'];
        $query = "UPDATE users SET name=:name, email=:email, phone=:phone, status=:status WHERE user_id=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
    }
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':status', $status);
    $stmt->execute();

    header("Location: admin.php");
    exit();
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
        <h2>Businesses</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Business Name</th>
                    <th>Owner</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="edit">Edit</button>
                        <button class="delete">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
                
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