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
    } else {
        $query = "INSERT INTO users (name, email, phone, status) VALUES (:name, :email, :phone, :status)";
        $stmt = $conn->prepare($query);
    }

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':status', $status);
    $stmt->execute();

    header("Location: admin.php");
    exit();
}

$query = "SELECT * FROM users";
$stmt = $conn->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Bank Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>

<div class="stats">
    <div class="stat-box">Total Users: <span id="totalUsers"><?= count($users); ?></span></div>
    <div class="stat-box">Total Businesses: <span id="totalBusinesses">50</span></div>
</div>

<div class="search-bar">
    <input type="text" id="searchInput" placeholder="Search users or businesses...">
    <button id="searchBtn">Search</button>
</div>

<div class="dashboard-container">
    <h1>Manage Users</h1>
    <button onclick="document.getElementById('userModal').style.display='block'">Add User</button>
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
                        <button onclick="editUser(<?= $user['user_id']; ?>, '<?= $user['name']; ?>', '<?= $user['email']; ?>', '<?= $user['phone']; ?>', '<?= $user['status']; ?>')">Edit</button>
                        <a href="users.php?delete=<?= $user['user_id']; ?>" onclick="return confirm('Are you sure?');"><button>Delete</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div id="userModal" class="modal">
    <div class="modal-content">
        <span onclick="document.getElementById('userModal').style.display='none'" class="close">&times;</span>
        <h2 id="modalTitle">Add User</h2>
        <form method="post">
            <input type="hidden" id="user_id" name="user_id">
            <label>Name:</label>
            <input type="text" name="name" id="name" required>
            <label>Email:</label>
            <input type="email" name="email" id="email" required>
            <label>Phone:</label>
            <input type="text" name="phone" id="phone">
            <label>Status:</label>
            <select name="status" id="status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
            <button type="submit" id="saveButton">Create User</button>
        </form>
    </div>
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

<script>
    function editUser(id, name, email, phone, status) {
        document.getElementById('modalTitle').innerText = 'Edit User';
        document.getElementById('user_id').value = id;
        document.getElementById('name').value = name;
        document.getElementById('email').value = email;
        document.getElementById('phone').value = phone;
        document.getElementById('status').value = status;
        document.getElementById('saveButton').innerText = 'Update User';
        document.getElementById('userModal').style.display = 'block';
    }

    document.getElementById("notificationForm").addEventListener("submit", function(event) {
        event.preventDefault();
        let recipient = document.getElementById("recipient").value;
        let message = document.getElementById("message").value;
        alert("Notification sent to " + recipient + ": " + message);
    });
</script>

<?php include 'footer.php'; ?>
</body>
</html>
