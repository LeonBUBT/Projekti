<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Dashboard</title>
    <link rel="stylesheet" href="css/bussiness.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
<nav class="navbar">
        <img src="images/logo.png" alt="Company Logo" class="logo">
        <ul class="nav-links">
            <li><a href="#dashboard-overview">Dashboard</a></li>
            <li><a href="#transactions">Transactions</a></li>
            <li><a href="#upcoming-deadlines">Deadlines</a></li>
            <li><a href="#notifications">Notifications</a></li>
            <li><a href="#settings">Settings</a></li>
        </ul>
    </nav>

    <section id="dashboard-overview" class="section">
        <h2>Business Overview</h2>
        <div class="dashboard-grid">
            <div class="dashboard-card">
                <h3>Total Revenue</h3>
                <p>$<span id="total-revenue">50,000</span></p>
            </div>
            <div class="dashboard-card">
                <h3>Pending Invoices</h3>
                <p>$<span id="pending-invoices">12,500</span></p>
            </div>
            <div class="dashboard-card">
                <h3>Active Clients</h3>
                <p><span id="active-clients">34</span></p>
            </div>
        </div>
    </section>

    <section id="transactions" class="section">
        <h2>Recent Transactions</h2>
        <table class="transactions-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Client</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="transactions-body">
                <tr><td>02/01/2024</td><td>ABC Corp</td><td>$5,000</td><td>Completed</td></tr>
                <tr><td>03/01/2024</td><td>XYZ Ltd</td><td>$2,000</td><td>Pending</td></tr>
            </tbody>
        </table>
    </section>

    <section id="upcoming-deadlines" class="section">
        <h2>Upcoming Deadlines</h2>
        <div class="deadlines-container">
            <ul id="deadlines-list">
                <li class="deadline-item">Tax Filing - Due: 15/02/2024</li>
                <li class="deadline-item">Invoice Payment - Due: 20/02/2024</li>
            </ul>
        </div>
    </section>

    <section id="notifications" class="section">
        <h2>Notifications</h2>
        <div id="notifications-container">
            <p>No new alerts.</p>
        </div>
    </section>

    <section id="settings" class="section">
        <h2>Business Settings</h2>
        <div class="settings-options">
            <button id="theme-toggle" class="styled-button">Toggle Dark Mode</button>
            <button id="export-data" class="styled-button">Export Business Data</button>
        </div>
    </section>
    <script>
          const themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", () => {
    const body = document.body;
    
    if (body.classList.contains("dark-theme")) {
        body.classList.remove("dark-theme");
        body.style.backgroundColor = "#7e0000";
        body.style.color = "white";
        themeToggleBtn.textContent = "Toggle Dark Mode";
    } else {
        body.classList.add("dark-theme");
        body.style.backgroundColor = "#121212";
        body.style.color = "#f5f5f5";
        themeToggleBtn.textContent = "Toggle Light Mode";
    }
});
    </script>
    <?php include 'footer.php' ?>
