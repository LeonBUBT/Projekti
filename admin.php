
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
            <div class="stat-box">Total Users: <span id="totalUsers">100</span></div>
            <div class="stat-box">Total Businesses: <span id="totalBusinesses">50</span></div>
        </div>
        
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search users or businesses...">
            <button id="searchBtn">Search</button>
        </div>

    <div class="dashboard-container">
        <h1>Manage Users</h1>
        <table>
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
                
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
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
    </div>
    
    <script>
        document.getElementById("notificationForm").addEventListener("submit", function(event) {
            event.preventDefault();
            let recipient = document.getElementById("recipient").value;
            let message = document.getElementById("message").value;
            alert("Notification sent to " + recipient + ": " + message);
        });
    </script>
    <?php include 'footer.php'; ?>
