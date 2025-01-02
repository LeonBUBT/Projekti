const form = document.getElementById('transfer-form');
const recipientInput = document.getElementById('recipient');
const amountInput = document.getElementById('transfer-amount');
const balanceElement = document.getElementById('balance');
const pieChart = document.getElementById('pie-chart');
const pieChartText = document.getElementById('pie-chart-text');
const themeToggle = document.getElementById('theme-toggle');
const scrollToTopButton = document.getElementById('scroll-to-top');
const notificationsContainer = document.getElementById('notifications-container');

let balance = 3000;
let savings = 1800;
const maxAmount = 5000;

form.addEventListener('submit', function (e) {
    e.preventDefault();
    const recipient = recipientInput.value.trim();
    const amount = parseFloat(amountInput.value);

    if (recipient && amount > 0 && amount <= balance) {
        balance -= amount;
        balanceElement.textContent = balance.toFixed(2);
        updatePieChart();
        addTransaction(recipient, amount);
        showNotification(`Transferred $${amount} to ${recipient}`);
    } else {
        showNotification('Invalid transaction.');
    }

    recipientInput.value = '';
    amountInput.value = '';
});

function addTransaction(recipient, amount) {
    const tableBody = document.getElementById('transactions-body');
    const newRow = tableBody.insertRow();
    const date = new Date().toLocaleDateString();

    newRow.innerHTML = `<td>${date}</td><td>Transfer to ${recipient}</td><td>-$${amount}</td>`;
}

function updatePieChart() {
    const percentage = ((balance + savings) / maxAmount) * 100;
    pieChart.style.background = `conic-gradient(#7e0000 ${percentage}%, #e0e0e0 ${percentage}%)`;
    pieChartText.textContent = `${Math.round(percentage)}%`;
}

function showNotification(message) {
    const notification = document.createElement('p');
    notification.textContent = message;
    notificationsContainer.appendChild(notification);
    setTimeout(() => notification.remove(), 5000);
}

themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
});

window.addEventListener('scroll', () => {
    scrollToTopButton.style.display = window.scrollY > 300 ? 'flex' : 'none';
});

scrollToTopButton.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

updatePieChart();
