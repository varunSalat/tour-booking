// gsap.registerPlugin(ScrollTrigger);
const body = document.querySelector("body");

// !PRELOADER

window.addEventListener("load", () => {
  document.querySelector(".preloader_container").style.display = "none";
  body.style.overflowY = "scroll";
});

// !BURGER TOGGLE
const burgerContainer = document.querySelector(".burger_container"),
  threeDotContainer = document.querySelector(".three_dot_container");
burgerContainer.addEventListener("click", () => {
  burgerContainer.classList.toggle("active");
  document.querySelector(".main_nav_link_container").classList.toggle("active");
  document.querySelector("#secondery_nav").classList.remove("active");
});
// !SIDE BURGER TOGGLE
threeDotContainer.addEventListener("click", () => {
  threeDotContainer.classList.add("active");
  setTimeout(() => {
    threeDotContainer.classList.remove("active");
  }, 200);
  document.querySelector("#secondery_nav").classList.toggle("active");
  document.querySelector(".main_nav_link_container").classList.remove("active");
  burgerContainer.classList.remove("active");
});
// REMOVE ACTIVE BURGER ON SCROLL
window.addEventListener("scroll", () => {
  burgerContainer.classList.remove("active");
  document.querySelector(".main_nav_link_container").classList.remove("active");
  document.querySelector("#secondery_nav").classList.remove("active");
});

// !SECOND NAV COLOR CHANGE & HIDE ON SCROLL
// gsap.to("#main_nav", {
//   backgroundColor: "rgb(0, 0, 0)",
//   scrollTrigger: {
//     trigger: "#service_section",
//     start: "top 80px",
//     toggleActions: "play none none reverse",
//   },
// });
let lastScroll = 100;
const secondNav = document.querySelector("#secondery_nav"),
  mainNav = document.getElementById("main_nav");
window.addEventListener("scroll", () => {
  let currentScroll = window.pageYOffset;
  if (currentScroll > lastScroll) {
    secondNav.classList.add("hide");
    mainNav.classList.add("active");
  } else {
    secondNav.classList.remove("hide");
    mainNav.classList.remove("active");
  }
});

//! generalForm
// *FORM VALIDATION
function validation() {
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
    generalErrors[3].textContent = "atleast 20 characters required";
    generalErrors[3].style.display = "block";
    return false;
  } else {
    // SUBMIT FORM
    document.getElementById("form_submit_btn").innerHTML = "Sending...";
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

  var Body =
    "Name: " +
    generalFormName +
    "<br><br>Phone Number: " +
    generalFormNum +
    "<br><br>Email Address: " +
    generalFormEmail +
    "<br><br>Description:- <br>" +
    generalFormtext;

  Email.send({
    Host: "smtp.elasticemail.com",
    Username: "filesdoom@gmail.com",
    Password: "3096937781459ADB5C5671C6A100923C8B68",
    port: 2525,
    To: "we.trailblenders@gmail.com",
    From: "filesdoom@gmail.com",
    Subject: "Request from Trail Bleners",
    Body: Body,
  }).then((message) => {
    if (message == "OK") {
      document.querySelectorAll(".input_container input").forEach((input) => {
        input.value = "";
        document.getElementById("generalFormtext").value = "";
        document.getElementById("form_submit_btn").innerHTML = `Submited`;
      });
    } else {
      console.error(message);
      alert("There is error at sending message. ");
    }
  });
}

// !PACKGE FORM

window.addEventListener("load", () => {
  const packgeCards = document.querySelectorAll(".tour_packge_card");
  packgeCards.forEach((card) => {
    const btn = card.querySelector(".packge_book_btn");
    btn.addEventListener("click", () => {
      document.querySelector(".packge_form_container").classList.add("active");
      body.style.overflow = "hidden";
      packgeName = card.querySelector(".packge_name").textContent;
      sessionStorage.setItem("packgename", packgeName);
      document.querySelector(".packge_type").textContent = packgeName;
      window.history.pushState({ id: 1 }, null, null);
    });
  });

  // *CLOSING PACKGE FORM
  document
    .querySelector(".packge_form_header_container i")
    .addEventListener("click", () => {
      document
        .querySelector(".packge_form_container")
        .classList.remove("active");
      body.style.overflow = "auto";
    });
});

function giveTripName() {
  const urlParams = new URLSearchParams(window.location.search);
  return urlParams.get("trip");
}

// !CLOSE POP-UPS WITH ESC KEY AND BACK BUTTON
document.addEventListener("keyup", (e) => {
  if (e.keyCode == 27) {
    document.querySelector(".packge_form_container").classList.remove("active");
    body.style.overflow = "auto";
  }
});
window.addEventListener("popstate", () => {
  document.querySelector(".packge_form_container").classList.remove("active");
  body.style.overflow = "auto";
});

// ! PACKGE FORM VALIDATION

function packgeFormValidation() {
  const name = document.getElementById("packge_form_name").value,
    phone = document.getElementById("packge_form_phone_num").value,
    numOfPerson = document.getElementById("packge_form_person_num").value,
    date = document.getElementById("packge_form_date").value,
    text = document.getElementById("packgeFormtext").value,
    errors = document.querySelectorAll(".packgeFromError");

  const newDate = new Date(date).getTime();
  const currentDate = new Date().getTime();

  // NAME VALIDATION
  if (!isNaN(name)) {
    errors[0].textContent = "Only number is not allowed";
    errors[0].style.display = "block";
    return false;
  } else if (name.length < 3 || name.length > 15) {
    errors[0].textContent = "Name should be between 3 to 15 characters";
    errors[0].style.display = "block";
    return false;
  } // FOR NUMBER
  else if (isNaN(phone)) {
    errors[2].textContent = "Only 10 digits numbers are accepted";
    errors[2].style.display = "block";
    return false;
  } else if (phone.length !== 10) {
    errors[2].textContent = "Only 10 digits numbers are accepted";
    errors[2].style.display = "block";
    return false;
  }
  // FOR NUMBER OF PERSON
  else if (numOfPerson < 1 || numOfPerson > 100) {
    errors[3].textContent = "Only 1 to 100 members are accepted";
    errors[3].style.display = "block";
    return false;
  }
  // FOR PAST DATE
  else if (newDate - currentDate < 0) {
    errors[4].textContent = "You can not book past dated reservation";
    errors[4].style.display = "block";
    return false;
  } else {
    // SUBMIT FORM
    document.getElementById("packge_form_submit_btn").textContent = "Sending";
    Packgesendmail();
    errors.forEach((e) => {
      e.style.display = "none";
    });
  }
}

function Packgesendmail() {
  const name = document.getElementById("packge_form_name").value,
    email = document.getElementById("packge_form_email").value,
    phone = document.getElementById("packge_form_phone_num").value,
    numOfPerson = document.getElementById("packge_form_person_num").value,
    date = document.getElementById("packge_form_date").value,
    text = document.getElementById("packgeFormtext").value,
    tripName = giveTripName(),
    packgeName = sessionStorage.getItem("packgename");

  var Body =
    "Name: " +
    name +
    "<br><br>Phone Number: " +
    phone +
    "<br><br>Email Address: " +
    email +
    "<br><br>Trip Name: " +
    tripName +
    "<br><br>Packge Name: " +
    packgeName +
    "<br><br>Number Of Persons: " +
    numOfPerson +
    "<br><br>Date: " +
    date +
    "<br><br>Description:- <br>" +
    text;

  Email.send({
    Host: "smtp.elasticemail.com",
    Username: "filesdoom@gmail.com",
    Password: "3096937781459ADB5C5671C6A100923C8B68",
    port: 2525,
    To: "varunsalat5677@gmail.com",
    From: "filesdoom@gmail.com",
    Subject: "Packge Booking Form from Trail Bleners",
    Body: Body,
  }).then((message) => {
    if (message == "OK") {
      document.querySelectorAll(".input_container input").forEach((input) => {
        input.value = "";
        document.getElementById("generalFormtext").value = "";
        document.getElementById("packgeFormtext").value = "";
        document.getElementById(
          "packge_form_submit_btn"
        ).innerHTML = `Submited`;
      });
    } else {
      console.error(message);
      alert("There is error at sending message. ");
    }
  });
}
