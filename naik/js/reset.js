function togglePasswordVisibility(id) {
    const input = document.getElementById(id);
    input.type = input.type === "password" ? "text" : "password";
  }
  
  function validateForm() {
    const password = document.getElementById("new-password").value;
    const confirmPassword = document.getElementById("confirm-password").value;
    const passwordStrength = document.getElementById("password-strength");
    const errorMessage = document.getElementById("error-message");
  
    if (password !== confirmPassword) {
      errorMessage.textContent = "Passwords do not match";
      return false;
    }
  
    if (password.length < 8) {
      errorMessage.textContent = "Password should be at least 8 characters long";
      return false;
    }
  
    // Password strength validation logic goes here
    // You can use regular expressions or external libraries to validate the strength of the password
  
    errorMessage.textContent = "";
    return true;
  }
//   function goBack() {
//     // Function to go back to the previous page
//     window.history.back();
//   }


  function goBack() {
    // Function to go back to the previous page
    window.history.back();
  }



  