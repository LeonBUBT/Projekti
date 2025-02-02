
document.addEventListener("DOMContentLoaded", () => {
    const profileInput = document.getElementById("profileInput");
    const profileImage = document.getElementById("profileImage");
    const uploadBtn = document.getElementById("uploadBtn");
  
    uploadBtn.addEventListener("click", () => {
      profileInput.click();
    });
  
    profileInput.addEventListener("change", (event) => {
      const file = event.target.files[0];
      if (file && file.type.startsWith("image/")) {
        const reader = new FileReader();
        reader.onload = (e) => {
          profileImage.src = e.target.result;
        };
        reader.readAsDataURL(file);
      } else {
        alert("Please upload a valid image file.");
      }
    });
  
  
    
    const editBtn = document.getElementById("EditBtn");
    const saveBtn = document.getElementById("SaveChangesBtn");
    const basicInfoFields = document.querySelectorAll("#BasicInfo p:not(:first-child)");
    const accountInfoFields = document.querySelectorAll("#AccountInfo p:not(:first-child)");
  
    editBtn.addEventListener("click", () => {
      basicInfoFields.forEach((field) => {
        const currentText = field.textContent;
        const input = document.createElement("input");
        input.type = "text";
        input.value = currentText;
        input.className = "editable-input";
        field.replaceWith(input);
      });
  
      accountInfoFields.forEach((field) => {
        const currentText = field.textContent;
        const input = document.createElement("input");
        input.type = "text";
        input.value = currentText;
        input.className = "editable-input";
        field.replaceWith(input);
      });
  
      editBtn.style.display = "none";
      saveBtn.style.display = "block";
    });
  
    saveBtn.addEventListener("click", () => {
      const editableInputs = document.querySelectorAll(".editable-input");
  
      editableInputs.forEach((input) => {
        const updatedText = input.value;
        const p = document.createElement("p");
        p.textContent = updatedText;
        input.replaceWith(p);
      });
  
      editBtn.style.display = "block";
      saveBtn.style.display = "none";
    });
  
    
    const deleteBtn = document.getElementById("DeleteAccountBtn");
    deleteBtn.addEventListener("click", () => {
      const confirmDelete = confirm("Are you sure you want to delete your account? This action cannot be undone.");
      if (confirmDelete) {
        alert("Your account has been deleted.");
        
      }
    });
  

    const exportBtn = document.getElementById("ExportDataBtn");
    exportBtn.addEventListener("click", () => {
      alert("Your data has been exported successfully!");

    });
  });
  
  
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
function addDeadline() {
  const billName = document.getElementById("billName").value;
  const dueDate = document.getElementById("dueDate").value;
  const amountDue = document.getElementById("amountDue").value;
  const priority = document.getElementById("priority").value;

  if (!billName || !dueDate || !amountDue) {
    alert("Please fill out all fields!");
    return;
  }

  const deadlineList = document.getElementById("deadlinesList");
  const deadlineItem = document.createElement("div");
  deadlineItem.classList.add("deadline-item");
  deadlineItem.style.borderColor = priority;
  deadlineItem.innerHTML = `
    <p><strong>Bill:</strong> ${billName}</p>
    <p><strong>Due Date:</strong> ${dueDate}</p>
    <p><strong>Amount Due:</strong> $${amountDue}</p>
  `;

  deadlineList.appendChild(deadlineItem);

  document.getElementById("billName").value = "";
  document.getElementById("dueDate").value = "";
  document.getElementById("amountDue").value = "";
  document.getElementById("priority").value = "green";
  updateDangerIndicator();
}

function updateDangerIndicator() {
  const deadlines = document.querySelectorAll(".deadline-item");
  const indicator = document.querySelector(".danger-indicator");
  let highestPriority = "green";

  deadlines.forEach((deadline) => {
    if (deadline.style.borderColor === "red") highestPriority = "red";
    else if (deadline.style.borderColor === "yellow" && highestPriority !== "red") {
      highestPriority = "yellow";
    }
  });

  indicator.style.background =
    highestPriority === "red"
      ? "red"
      : highestPriority === "yellow"
      ? "yellow"
      : "green";
}
  function showLogoutModal() {
    const modal = document.getElementById('logout-modal');
    modal.style.display = 'flex';

    const confirmBtn = document.getElementById('confirm-logout');
    const cancelBtn = document.getElementById('cancel-logout');

    confirmBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    cancelBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });
}