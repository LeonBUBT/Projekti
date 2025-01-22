let currentStep = 0;
let accountType = null;

function nextStep(step) {
    document.getElementById(`step${step}`).classList.remove("active");
    document.getElementById(`step${step + 1}`).classList.add("active");
    currentStep++;
}

document.getElementById("individual").addEventListener("click", function () {
    accountType = "individual";
    nextStep(currentStep);
});

document.getElementById("business").addEventListener("click", function () {
    accountType = "business";
    nextStep(currentStep);
});

document.querySelector("form").addEventListener("submit", function (e) {
    e.preventDefault();
    if (accountType === "individual") {
        window.location.href = "dashboard.html";
    } else if (accountType === "business") {
        window.location.href = "business_dashboard.html";
    } else {
        alert("Please select an account type.");
    }
});
