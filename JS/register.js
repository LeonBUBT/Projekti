let currentStep = 0;

function nextStep(step) {
    document.getElementById(`step${step}`).classList.remove("active");
    document.getElementById(`step${step + 1}`).classList.add("active");
}