document.addEventListener("DOMContentLoaded", function () {
  var flipTriggers = document.querySelectorAll(
    ".flip-trigger:not(.flip-back-trigger)"
  );

  flipTriggers.forEach(function (trigger) {
    trigger.addEventListener("click", function () {
      // 获取关联的ID
      var id = this.getAttribute("data-id");

      // TODO: 根据ID从服务器获取详细信息
      // 例如，使用 `fetch` 发送一个请求到你的 PHP 服务器
      fetch("./get-details.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: "id=" + id,
      })
        .then((response) => response.json())
        .then((data) => {
          // 更新.container-back的内容
          updateBackContainer(data);

          // 切换类以显示.container-back
          var container = document.querySelector(".container-wrapper");
          container.classList.add("flip");
        })
        .catch((error) => console.error("Error:", error));
    });
  });

  // 用于更新.container-back内容的函数
  function updateBackContainer(data) {
    var containerBack = document.querySelector(".container-back");
    // 假设你有一个函数来创建内容的HTML
    containerBack.innerHTML = createBackContentHtml(data);
  }

  // 创建内容HTML的函数
  function createBackContentHtml(data) {
    // 根据数据构造HTML，这里只是一个示例
    return `
      <h1>${data.img_name}</h1>
      <section class="flex-row justify-content-start">
        <aside class="detail-image-part d-flex justify-content-start">
          <div class="p-2 img-bg">
            <img src="img/${data.img_url}" alt="" class="detail-image">
          </div>
        </aside>
        <main class="d-flex flex-column justify-content-between" style="height: 400px;">
          <div class="d-flex align-items-center px-2 py-2 ms-5 me-2 my-2">
            <div class="author-size-adj overflow-hidden">
              <img src="img/author/${data.author_url}" alt="" class="author-img-size">
            </div>
            <h2 class="text-white fw-bolder mx-4">${data.name}</h2>
          </div>
          <div class="d-flex px-2 ms-5 me-2 my-2">
            <p class="text-white">${data.description}</p>
          </div>
          <div class="d-flex flex-row justify-content-end p-2 ms-5 me-2 my-2">
            <div>
              <a href="#" class="flip-back-trigger"><i class="fa-solid fa-circle-left text-white h1 flip-back-style"></i></a>
            </div>
          </div>
        </main>
      </section>
    `;
  }
});

// document.addEventListener("DOMContentLoaded", function () {
//   // 绑定事件监听器到 .container-wrapper
//   document
//     .querySelector(".container-wrapper")
//     .addEventListener("click", function (e) {
//       // 检查是否点击了具有 'flip-trigger' 或 'flip-back-trigger' 类的元素
//       if (e.target.closest(".flip-trigger, .flip-back-trigger")) {
//         e.preventDefault(); // 防止链接的默认行为
//         this.classList.toggle("flip"); // 切换 'flip' 类以翻转容器
//       }
//     });
// });
