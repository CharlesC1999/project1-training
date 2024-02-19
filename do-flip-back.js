// document.addEventListener("DOMContentLoaded", function () {
//   // 为返回按钮添加事件监听器
//   var flipBackTriggers = document.querySelectorAll(".flip-back-trigger");
//   flipBackTriggers.forEach(function (trigger) {
//     trigger.addEventListener("click", function (e) {
//       e.preventDefault(); // 防止链接的默认行为
//       var container = document.querySelector(".container-wrapper");
//       container.classList.toggle("flip"); // 切换 'flip' 类以翻转回 container-front
//     });
//   });
// });
document.addEventListener("DOMContentLoaded", function () {
  // 绑定事件监听器到 .container-wrapper
  document
    .querySelector(".container-wrapper")
    .addEventListener("click", function (e) {
      // 检查是否点击了具有 'flip-trigger' 或 'flip-back-trigger' 类的元素
      if (e.target.closest(".flip-trigger, .flip-back-trigger")) {
        e.preventDefault(); // 防止链接的默认行为
        this.classList.toggle("flip"); // 切换 'flip' 类以翻转容器
      }
    });
});
