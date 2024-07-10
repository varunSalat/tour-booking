function validation(event) {
  event.preventDefault();

  const generalFormName = document.getElementById("general_form_name").value,
    generalFormNum = document.getElementById("generalFormPhone").value,
    generalFormtext = document.getElementById("generalFormtext").value,
    generalErrors = document.querySelectorAll(".generalFromError");

  // FOR NAME
  if (!isNaN(generalFormName)) {
    generalErrors[0].textContent = "Only number is not allowed";
    generalErrors[0].style.display = "block";
    return false;
  } else if (generalFormName.length < 3 || generalFormName.length > 15) {
    generalErrors[0].textContent = "Name should be between 3 to 15 characters";
    generalErrors[0].style.display = "block";
    return false;
  }

  // FOR NUMBER
  else if (isNaN(generalFormNum)) {
    generalErrors[2].textContent = "Only 10 digits numbers are accepted";
    generalErrors[2].style.display = "block";
    return false;
  } else if (generalFormNum.length !== 10) {
    generalErrors[2].textContent = "Only 10 digits numbers are accepted";
    generalErrors[2].style.display = "block";
    return false;
  }

  // FOR TEXT
  else if (generalFormtext.length < 20) {
    generalErrors[3].textContent = "at least 20 characters required";
    generalErrors[3].style.display = "block";
    return false;
  } else {
    // SUBMIT FORM
    document.getElementById("form_submit_btn").textContent = "Sending...";
    sendmail();
    generalErrors.forEach((e) => {
      e.style.display = "none";
    });
  }
}

function sendmail() {
  const formData = new FormData(document.getElementById("form"));
  const submitButton = document.getElementById("form_submit_btn");

  // Send AJAX request
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./mail.php"); // Your mail.php file path
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Display success message
        alert("Email sent successfully!");
        // Reset form after successful submission
        document.getElementById("form").reset();
        submitButton.textContent = "Send Message";
        submitButton.disabled = false;
      } else {
        // Display error message
        alert("Error: " + xhr.statusText);
        submitButton.textContent = "Send Message";
        submitButton.disabled = false;
      }
    }
  };
  xhr.onerror = function () {
    alert("An error occurred during the transaction");
    submitButton.textContent = "Send Message";
    submitButton.disabled = false;
  };
  xhr.send(formData);
}
