let currentStep = 1;

function nextStep(step) {
    document.getElementById(`step${step}`).classList.remove("active");
    document.getElementById(`step${step + 1}`).classList.add("active");
}