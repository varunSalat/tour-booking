function validation() {
  const generalFormName = document.getElementById("general_form_name").value,
    generalFormNum = document.getElementById("generalFormPhone").value,
    generalFormtext = document.getElementById("generalFormtext").value,
    generalErrors = document.querySelectorAll(".generalFromError");

  // grecaptcha.enterprise.ready(async () => {
  //   const token = await grecaptcha.enterprise.execute(
  //     "6Lca3QoqAAAAAO9RWJV7BkG5u3AQbK9ayCcv5eeN",
  //     { action: "LOGIN" }
  //   );
  // });

  console.log("This is the test ");

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
  const generalFormName = document.getElementById("general_form_name").value,
    generalFormEmail = document.getElementById("generalFormEmail").value,
    generalFormNum = document.getElementById("generalFormPhone").value,
    generalFormtext = document.getElementById("generalFormtext").value;

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "send_mail.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if (this.status === 200) {
      document.querySelectorAll(".input_container input").forEach((input) => {
        input.value = "";
        document.getElementById("generalFormtext").value = "";
        document.getElementById("form_submit_btn").innerHTML = "Submitted";
      });
    } else {
      console.error(this.responseText);
      alert("There is an error sending the message.");
    }
  };

  xhr.send(
    `name=${generalFormName}&email=${generalFormEmail}&phone=${generalFormNum}&message=${generalFormtext}`
  );
}
