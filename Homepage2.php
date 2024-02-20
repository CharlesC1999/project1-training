<?php
require_once "db_connect.php";

$sql = "SELECT * FROM images
JOIN author ON images.author_id  =author.a_id
WHERE images.valid = 1 ORDER BY images.id";
$result_all = $conn->query($sql);
$product_type_count = $result_all->num_rows;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Graphics</title>
    <!-- Font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- bs5 -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
    />
    <!-- Swiper -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11.0.6/swiper-bundle.min.css" rel="stylesheet">
    <!-- custom -->
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <section>
      <div class="container-wrapper">
        <div class="img-container container-front ">
          <h1>Traning web</h1>
          <div class="searchBox d-flex align-items-center">
            <input class="searchInput form-control" type="search" name="search" placeholder="Search">
            <button class="searchButton" href="#" type="submit">
              <i class="material-icons">
                search
              </i>
            </button>
          </div>
          <!-- <label for=""></label>
          <input type="text"> -->
          <div class="swiper">
            <div class="swiper-wrapper">
            <?php
$rows = $result_all->fetch_all(MYSQLI_ASSOC);

foreach ($rows as $index => $cate):
?>
            <div class="swiper-slide post">
                  <div class="post-image-container">
                    <img
                      class="post-img"
                      src="img/<?=$cate['img_url']?>"
                      alt="recipe"
                    />
                    <div class="overlay"></div>
                  </div>

                  <div class="post-body">
                    <img
                      class="post-avatar"
                      src="./img/author/<?=$cate['author_url']?>"
                      alt="avatar"
                    />
                    <div class="post-detail">
                      <h2 class="post-name"><?=$cate['img_name']?></h2>
                      <p class="post-author"><?=$cate['name']?></p>
                    </div>

                    <div class="post-actions">
                      <a class="post-like" href="javascript:void(0)"
                        ><i class="fa-solid fa-star"></i></a>
                      <!-- font-awesome heart icon 但是沒有連結 -->
                      <button
                        class="post-actions-controller"
                        data-target="post-actions-content-<?=$index?>"
                        aria-controls="post-actions-content-<?=$index?>"
                        aria-expanded="false"
                      >
                        <i class="fa-solid fa-ellipsis fa-2xl"></i>
                      </button>
                      <div
                        class="post-actions-content"
                        id="post-actions-content-<?=$index?>"
                        data-visible="false"
                        aria-hidden="true"
                      >
                        <ul role="list" class="grid-flow ps-0 mb-0" data-spacing="small">
                          <li>
                            <a
                              class="post-actions-link"
                              href="javascript:void(0)"
                            >
                              <i class="fa-solid fa-folder-open"></i>
                              <span>Add to Collection</span>
                            </a>
                          </li>
                          <li>
                            <a
                              class="post-actions-link flip-trigger"
                              href="javascript:void(0)"
                              data-id="<?=$cate['id']?>"
                            >
                              <i class="fa-solid fa-eye"></i>
                              <span>Show the detail</span>
                            </a>
                          </li>
                          <li>
                            <a
                              class="post-actions-link"
                              href="javascript:void(0)"
                            >
                              <i class="fa-solid fa-user-plus"></i>
                              <span>Follow the author</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach;?>
            </div>
            <div class="swiper-scrollbar"></div>
          </div>
        </div>

        <div class="img-container container-back">
          <h1 class=""><?=htmlspecialchars($cate["img_name"])?></h1>
          <section class="flex-row justify-content-start">
            <aside class="detail-image-part d-flex justify-content-start">
              <div class="p-2 img-bg">
                <img src="img/<?=htmlspecialchars($cate["img_url"])?>" alt="" class="detail-image">
              </div>
            </aside>
            <main class="d-flex flex-column justify-content-between" style="height: 400px;">
              <div class="d-flex align-items-center px-2 py-2 ms-5 me-2 my-2">
                <div class="author-size-adj overflow-hidden">
                  <img src="img/author/<?=htmlspecialchars($cate["author_url"])?>" alt="" class="author-img-size">
                </div>
                <h2 class="text-white fw-bolder mx-4"><?=htmlspecialchars($cate["name"])?></h2>
              </div>
              <div class="d-flex px-2 ms-5 me-2 my-2">
                <p class="text-white"><?=htmlspecialchars($cate["description"])?></p>
              </div>
              <div class="d-flex flex-row justify-content-end p-2 ms-5 me-2 my-2">
                <div>
                  <a href="#" class="flip-back-trigger"><i class="fa-solid fa-circle-left text-white h1"></i></a>
                </div>
              </div>
            </main>
          </section>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11.0.6/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <!-- <script src="do-flip.js"></script> -->
    <script src="do-flip-detail.js"></script>
    <script src="do-flip-back.js"></script>
  </body>
</html>
