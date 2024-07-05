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
  // document.querySelector("#secondery_nav").classList.remove("active");
});

// !HERO SECTION SLIDE SHOW
const heroBgs = document.querySelectorAll(".hero_img");
let i = 0;
const interval = setInterval(() => {
  if (i == heroBgs.length) {
    i = 0;
  }
  heroBgs.forEach((bg) => {
    bg.classList.remove("active");
  });
  heroBgs[i].classList.add("active");
  i++;
}, 4000);
// !SECOND NAV COLOR CHANGE & HIDE ON SCROLL
// gsap.to("#main_nav", {
//   backgroundColor: "rgb(0, 0, 0)",
//   scrollTrigger: {
//     trigger: ".section_header",
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
    // secondNav.classList.add("hide");
    mainNav.classList.add("active");
  } else {
    // secondNav.classList.remove("hide");
    mainNav.classList.remove("active");
  }
});

// !SWIPER JS
//   <!-- Initialize Swiper -->
var swiper = new Swiper(".mySwiper", {
  effect: "none",
  loop: true,
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",

  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 0,
    modifier: 2,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 1000, // Delay between transitions in milliseconds
    disableOnInteraction: false, // Keep autoplay running even after user interaction
  },
});

// !CLOSE FORM WITH ESCAPE AND BACK BUTTON
document.addEventListener("keyup", (e) => {
  if (e.keyCode == 27) {
    document.querySelector(".packge_form_container").classList.remove("active");
    body.style.overflow = "auto";
  }
});
window.addEventListener("popstate", () => {
  document.querySelector(".packge_form_container").classList.remove("active");
  body.style.overflow = "auto";
  console.log(true);
});

// generalForm
// !FORM VALIDATION
// function validation() {
//   const generalFormName = document.getElementById("general_form_name").value,
//     generalFormNum = document.getElementById("generalFormPhone").value,
//     generalFormtext = document.getElementById("generalFormtext").value,
//     generalErrors = document.querySelectorAll(".generalFromError");
//   // FOR NAME
//   if (!isNaN(generalFormName)) {
//     generalErrors[0].textContent = "Only number is not allowed";
//     generalErrors[0].style.display = "block";
//     return false;
//   } else if (generalFormName.length < 3 || generalFormName.length > 15) {
//     generalErrors[0].textContent = "Name should be between 3 to 15 characters";
//     generalErrors[0].style.display = "block";
//     return false;
//   }
//   // FOR NUMBER
//   else if (isNaN(generalFormNum)) {
//     generalErrors[2].textContent = "Only 10 digits numbers are accepted";
//     generalErrors[2].style.display = "block";
//     return false;
//   } else if (generalFormNum.length !== 10) {
//     generalErrors[2].textContent = "Only 10 digits numbers are accepted";
//     generalErrors[2].style.display = "block";
//     return false;
//   }
//   // FOR TEXT
//   else if (generalFormtext.length < 20) {
//     generalErrors[3].textContent = "atleast 20 characters required";
//     generalErrors[3].style.display = "block";
//     return false;
//   } else {
//     // SUBMIT FORM
//     document.getElementById("form_submit_btn").textContent = "Sending...";
//     sendmail();
//     generalErrors.forEach((e) => {
//       e.style.display = "none";
//     });
//   }
// }

// function sendmail() {
//   const generalFormName = document.getElementById("general_form_name").value,
//     generalFormEmail = document.getElementById("generalFormEmail").value,
//     generalFormNum = document.getElementById("generalFormPhone").value,
//     generalFormtext = document.getElementById("generalFormtext").value;

//   var Body =
//     "Name: " +
//     generalFormName +
//     "<br><br>Phone Number: " +
//     generalFormNum +
//     "<br><br>Email Address: " +
//     generalFormEmail +
//     "<br><br>Description:- <br>" +
//     generalFormtext;

//   Email.send({
//     Host: "smtp.elasticemail.com",
//     Username: "filesdoom@gmail.com",
//     Password: "3096937781459ADB5C5671C6A100923C8B68",
//     port: 2525,
//     To: "varunsalat5677@gmail.com",
//     From: "filesdoom@gmail.com",
//     Subject: "Request from Trail Bleners",
//     Body: Body,
//   }).then((message) => {
//     if (message == "OK") {
//       document.querySelectorAll(".input_container input").forEach((input) => {
//         input.value = "";
//         document.getElementById("generalFormtext").value = "";
//         document.getElementById("form_submit_btn").innerHTML = `Submited`;
//       });
//     } else {
//       console.error(message);
//       alert("There is error at sending message. ");
//     }
//   });
// }

// !WhatsApp Fixed button
// Function to check scroll position
function checkScroll() {
  const whatsappBtn = document.getElementById("whatsappBtn");
  if (window.scrollY >= window.innerHeight) {
    whatsappBtn.classList.add("show");
  } else {
    whatsappBtn.classList.remove("show");
  }
}

// Event listener for scroll event
window.addEventListener("scroll", checkScroll);
