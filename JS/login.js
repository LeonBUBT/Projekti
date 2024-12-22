document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
  
    const email = document.getElementById("email").value;
    const confirmEmail = document.getElementById("ConfirmEmail").value;
    const cardNr = document.getElementById("CardNr").value;
    const password = document.getElementById("password").value;
    const errorMessage = document.getElementById("error-message");
  
    errorMessage.textContent = "";
  
    let isValid = true;
  
    if (!email || !validateEmail(email)) {
      isValid = false;
      errorMessage.textContent += "Please enter a valid email address.\n";
    }
  
    if (email !== confirmEmail) {
      isValid = false;
      errorMessage.textContent += "Email and Confirm Email must match.\n";
    }
  
    if (!cardNr || cardNr.length !== 16 || isNaN(cardNr)) {
      isValid = false;
      errorMessage.textContent += "Card number must be a 16-digit number.\n";
    }
  
    if (!password || password.length < 8) {
      isValid = false;
      errorMessage.textContent += "Password must be at least 8 characters long.\n";
    }
  
    if (isValid) {
      alert("Form submitted successfully!");
      console.log("Logged in successfully");
      window.location='index.html';
    }
  });
  
  function validateEmail(email) {
    const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return re.test(email);
  }