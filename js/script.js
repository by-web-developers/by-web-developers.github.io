//to show a modal window
let isValidAge = JSON.parse(localStorage.getItem("isValidAge"));
if (!isValidAge) {
  $("#myModal").modal({
    show: true,
    backdrop: "static",
  });
}

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
    }
  }, 50);
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
  }, 2000);
}

function scrollDown() {
  let aboutSection = document.getElementById("ourStory");
}

function sendMessage(e) {
  e.preventDefault();
}
