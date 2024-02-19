<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>CodePen - Desert Dishes</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <!-- Font awesome -->
    <!-- swiper -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11.0.6/swiper-bundle.min.css" rel="stylesheet">
    <!-- swiper -->
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <!-- partial:index.partial.html -->
    <body>
      <section>
        <div class="recipe-container">
          <h1>Traning swiper Page</h1>
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide post">
                <img
                  class="post-img"
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/defebc72-ea17-41c7-9bb6-70b3974a93b7"
                  alt="recipe"
                />

                <div class="post-body">
                  <img
                    class="post-avatar"
                    src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/f9d29d0e-f03b-4990-9bc5-ade57a276b41"
                    alt="avatar"
                  />
                  <div class="post-detail">
                    <h2 class="post-name">Homemade Ice Cream</h2>
                    <p class="post-author">Evelyn Taylor</p>
                  </div>

                  <div class="post-actions">
                    <a class="post-like" href="javascript:void(0)"
                      ><i class="fas fa-heart"></i
                    ></a>
                    <button
                      class="post-actions-controller"
                      data-target="post1"
                      aria-controls="post-actions-content"
                      aria-expanded="false"
                    >
                      <i class="fa-solid fa-ellipsis fa-2xl"></i>
                    </button>
                    <div
                      class="post-actions-content"
                      id="post1"
                      data-visible="false"
                      aria-hidden="true"
                    >
                      <ul role="list" class="grid-flow" data-spacing="small">
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
                            class="post-actions-link"
                            href="javascript:void(0)"
                          >
                            <i class="fa-solid fa-eye"></i>
                            <span>Show the Recipe</span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="post-actions-link"
                            href="javascript:void(0)"
                          >
                            <i class="fa-solid fa-user-plus"></i>
                            <span>Follow the User</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide post">
                <img
                  class="post-img"
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/7443d18f-26b6-47eb-bfca-541fb72cee65"
                  alt="recipe"
                />

                <div class="post-body">
                  <img
                    class="post-avatar"
                    src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/3c7b6ef9-cd2d-4d70-819a-2aa9c2309083"
                    alt="avatar"
                  />
                  <div class="post-detail">
                    <h2 class="post-name">Pancake</h2>
                    <p class="post-author">Ethan Wilson</p>
                  </div>

                  <div class="post-actions">
                    <a class="post-like" href="javascript:void(0)"
                      ><i class="fas fa-heart"></i
                    ></a>
                    <button
                      class="post-actions-controller"
                      data-target="post2"
                      aria-controls="post-actions-content"
                      aria-expanded="false"
                    >
                      <i class="fa-solid fa-ellipsis fa-2xl"></i>
                    </button>
                    <div
                      class="post-actions-content"
                      id="post2"
                      data-visible="false"
                      aria-hidden="true"
                    >
                      <ul role="list" class="grid-flow" data-spacing="small">
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
                            class="post-actions-link"
                            href="javascript:void(0)"
                          >
                            <i class="fa-solid fa-eye"></i>
                            <span>Show the Recipe</span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="post-actions-link"
                            href="javascript:void(0)"
                          >
                            <i class="fa-solid fa-user-plus"></i>
                            <span>Follow the User</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide post">
                <img
                  class="post-img"
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/24566dbf-61a2-4bd0-bb29-ef1773364eba"
                  alt="recipe"
                />

                <div class="post-body">
                  <img
                    class="post-avatar"
                    src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/01332597-5aeb-483b-b682-9379c6ed8f14"
                    alt="avatar"
                  />
                  <div class="post-detail">
                    <h2 class="post-name">Macaron</h2>
                    <p class="post-author">Bella Smith</p>
                  </div>

                  <div class="post-actions">
                    <a class="post-like" href="javascript:void(0)"
                      ><i class="fas fa-heart"></i
                    ></a>
                    <button
                      class="post-actions-controller"
                      data-target="post3"
                      aria-controls="post-actions-content"
                      aria-expanded="false"
                    >
                      <i class="fa-solid fa-ellipsis fa-2xl"></i>
                    </button>
                    <div
                      class="post-actions-content"
                      id="post3"
                      data-visible="false"
                      aria-hidden="true"
                    >
                      <ul role="list" class="grid-flow" data-spacing="small">
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
                            class="post-actions-link"
                            href="javascript:void(0)"
                          >
                            <i class="fa-solid fa-eye"></i>
                            <span>Show the Recipe</span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="post-actions-link"
                            href="javascript:void(0)"
                          >
                            <i class="fa-solid fa-user-plus"></i>
                            <span>Follow the User</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide post">
                <img
                  class="post-img"
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/a208eb17-a847-4e04-be2c-d7ec2071ae45"
                  alt="recipe"
                />

                <div class="post-body">
                  <img
                    class="post-avatar"
                    src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/b9f5ef94-c2c9-4792-b7a3-593d393f2c84"
                    alt="avatar"
                  />
                  <div class="post-detail">
                    <h2 class="post-name">Cheesecake</h2>
                    <p class="post-author">Mia Dixon</p>
                  </div>

                  <div class="post-actions">
                    <a class="post-like" href="javascript:void(0)"
                      ><i class="fas fa-heart"></i
                    ></a>
                    <button
                      class="post-actions-controller"
                      data-target="post4"
                      aria-controls="post-actions-content"
                      aria-expanded="false"
                    >
                      <i class="fa-solid fa-ellipsis fa-2xl"></i>
                    </button>
                    <div
                      class="post-actions-content"
                      id="post4"
                      data-visible="false"
                      aria-hidden="true"
                    >
                      <ul role="list" class="grid-flow" data-spacing="small">
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
                            class="post-actions-link"
                            href="javascript:void(0)"
                          >
                            <i class="fa-solid fa-eye"></i>
                            <span>Show the Recipe</span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="post-actions-link"
                            href="javascript:void(0)"
                          >
                            <i class="fa-solid fa-user-plus"></i>
                            <span>Follow the User</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide post">
                <img
                  class="post-img"
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/208fe8f5-9d7f-4b83-9249-43601bb4c500"
                  alt="recipe"
                />

                <div class="post-body">
                  <img
                    class="post-avatar"
                    src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/58f9319c-78cf-444b-ba71-701c506c2dd3"
                    alt="avatar"
                  />
                  <div class="post-detail">
                    <h2 class="post-name">Donuts</h2>
                    <p class="post-author">Olivia Martinez</p>
                  </div>

                  <div class="post-actions">
                    <a class="post-like" href="javascript:void(0)"
                      ><i class="fas fa-heart"></i
                    ></a>
                    <button
                      class="post-actions-controller"
                      data-target="post5"
                      aria-controls="post-actions-content"
                      aria-expanded="false"
                    >
                      <i class="fa-solid fa-ellipsis fa-2xl"></i>
                    </button>
                    <div
                      class="post-actions-content"
                      id="post5"
                      data-visible="false"
                      aria-hidden="true"
                    >
                      <ul role="list" class="grid-flow" data-spacing="small">
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
                            class="post-actions-link"
                            href="javascript:void(0)"
                          >
                            <i class="fa-solid fa-eye"></i>
                            <span>Show the Recipe</span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="post-actions-link"
                            href="javascript:void(0)"
                          >
                            <i class="fa-solid fa-user-plus"></i>
                            <span>Follow the User</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide post">
                <img
                  class="post-img"
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e4f91d6d-ee11-4ff7-9e6f-0fb3f9a78598"
                  alt="recipe"
                />

                <div class="post-body">
                  <img
                    class="post-avatar"
                    src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/24ca2eec-a5ba-4c32-907c-ffffca203e1c"
                    alt="avatar"
                  />
                  <div class="post-detail">
                    <h2 class="post-name">Rolo Cheesecake</h2>
                    <p class="post-author">Benjamin Clark</p>
                  </div>

                  <div class="post-actions">
                    <a class="post-like" href="javascript:void(0)"
                      ><i class="fas fa-heart"></i
                    ></a>
                    <button
                      class="post-actions-controller"
                      data-target="post6"
                      aria-controls="post-actions-content"
                      aria-expanded="false"
                    >
                      <i class="fa-solid fa-ellipsis fa-2xl"></i>
                    </button>
                    <div
                      class="post-actions-content"
                      id="post6"
                      data-visible="false"
                      aria-hidden="true"
                    >
                      <ul role="list" class="grid-flow" data-spacing="small">
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
                            class="post-actions-link"
                            href="javascript:void(0)"
                          >
                            <i class="fa-solid fa-eye"></i>
                            <span>Show the Recipe</span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="post-actions-link"
                            href="javascript:void(0)"
                          >
                            <i class="fa-solid fa-user-plus"></i>
                            <span>Follow the User</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-scrollbar"></div>
          </div>
        </div>
      </section>
    </body>
    <!-- partial -->
    <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
    ></script>

    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11.0.6/swiper-bundle.min.js"></script>
    <script src="./script.js"></script>
  </body>
</html>
