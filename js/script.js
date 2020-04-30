//to show a modal window
let navbarLogo = document.getElementsByClassName("navbar-brand")[0];
let isValidAge = JSON.parse(localStorage.getItem("isValidAge"));
if (!isValidAge) {
  $("#myModal").modal({
    show: true,
    backdrop: "static",
  });
  navbarLogo.classList = "navbar-brand d-none";
}

/** js for loader */
function fadeOutEffect(target) {
  var fadeTarget = document.getElementById(target);
  var fadeEffect = setInterval(function () {
    if (!fadeTarget.style.opacity) {
      fadeTarget.style.opacity = 1;
    }
    if (fadeTarget.style.opacity > 0) {
      fadeTarget.style.opacity -= 0.1;
    } else {
      clearInterval(fadeEffect);
      $(".loader-wrapper").addClass("d-none");
    }
  }, 25);
}

$(window).on("load", function () {
  // $(".loader-wrapper").fadeOut("slow");
  fadeOutEffect("loader-wrapper");
  $(".main-body").removeClass("d-none");
});

function checkAge() {
  localStorage.setItem("isValidAge", true);
  $(".img-medal").addClass("spin");
  setTimeout(() => {
    $("#myModal").modal("hide");
    navbarLogo.classList = "navbar-brand";
  }, 2000);
}

function scrollDown() {
  let aboutSection = document.getElementById("ourStory");
  aboutSection.scrollIntoView();
}

let navLinkArr = document.getElementsByClassName("nav-item");
for (let i = 0; i < navLinkArr.length; i++) {
  navLinkArr[i].addEventListener("click", addClassActive);
}

function addClassActive(e) {
  $(".nav-item.active").removeClass("active");
  e.target.parentNode.classList.add("active");
  $(".navbar-collapse").removeClass("show");
}

function sendMessage(e) {
  e.preventDefault();
  Email.send({
    Host: "smtp.sendgrid.net",
    Username: "elsativo",
    port: 465,
    Password:
      "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",
    To: "bywebdevelopers@gmail.com",
    From: document.getElementById("exampleFormControlInput2").value,
    Subject: "Inquiry from the Elsativo Website",
    Body: document.getElementById("exampleFormControlTextarea5").value,
  }).then((message) => alert(message));
}

// window.addEventListener("scroll", sectionScroll);
// function sectionScroll() {
//   let windowScroll = window.pageYOffset;
//   let sectionArray = document.getElementsByClassName("page-section");

//   [...sectionArray].forEach(function (currentValue, index) {
//     if (currentValue.offsetTop <= windowScroll) {
//       $(".nav-item.active").removeClass("active");
//       $(".nav-item").eq(index).addClass("active");
//     }
//   });
// }
