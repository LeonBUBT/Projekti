const form = document.getElementById('add-funds-form');
const amountInput = document.getElementById('amount');
const pieChart = document.getElementById('pie-chart');
const pieChartText = document.getElementById('pie-chart-text');
let totalAmount = 0;
const maxAmount = 1000;

form.addEventListener('submit', function(e) {
  e.preventDefault();
  const amount = parseInt(amountInput.value);
  if (amount > 0) {
    totalAmount += amount;
    if (totalAmount > maxAmount) totalAmount = maxAmount;
    updatePieChart();
  }
  amountInput.value = '';
});

function updatePieChart() {
  const percentage = (totalAmount / maxAmount) * 100;
  pieChart.style.background = `conic-gradient(#7e0000 ${percentage}% 0%, #e0e0e0 ${percentage}% 100%)`;
  pieChartText.textContent = `${Math.round(percentage)}%`;
}
