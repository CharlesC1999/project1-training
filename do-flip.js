document.querySelectorAll(".flip-trigger").forEach(function (trigger) {
  trigger.addEventListener("click", function () {
    var container = document.querySelector(".container-wrapper");
    container.classList.toggle("flip");
  });
});
