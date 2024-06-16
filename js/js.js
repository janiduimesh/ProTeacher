/* Check the password */

  function checkPasswordMatch() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("cnfrmpwd").value;
    if (password !== confirmPassword) {
      alert("Password doesn't match");
      return false; // Prevent form submission
    }
    return true; // Allow form submission
  }

  window.onload = function () {
    document.getElementById("submitbtn").addEventListener("click", checkPasswordMatch);
  };