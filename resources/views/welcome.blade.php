<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>RRN</title>
    <!-- Boostrap Css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />

    <!-- Remix Icons -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- Style Css -->
    <link rel="stylesheet" href="./css/app.css" />
  </head>
  <body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg py-3 sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <!--logo-->
          <img src="./images/Group 26.png" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
          
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="#heroSlider">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#menu">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">Blog</a>
            </li>
          </ul>
          <a href="#" class="btn btn-brand">Order Now</a>
        </div>
      </div>
    </nav>

    <!-- Hero Slider -->
    <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item text-center bg-cover vh-100 active slide-1">
          <div
            class="container h-100 d-flex align-items-center justify-content-center"
          >
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h6 class="text-white">WELCOME TO RRN</h6>
                <h1 class="display-1 my-3 fw-bold text-white">
                  Taste of the Archipelago
                </h1>
                <a href="#" class="btn btn-brand">Order Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item text-center bg-cover vh-100 slide-2">
          <div
            class="container h-100 d-flex align-items-center justify-content-center"
          >
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h6 class="text-white">WELCOME TO RRN</h6>
                <h1 class="display-1 my-3 fw-bold text-white">
                  Fresh & Tasty Food
                </h1>
                <a href="#" class="btn btn-brand">Order Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#heroSlider"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#heroSlider"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-5">
            <img src="./images/About.jpg" alt="" />
          </div>
          <div class="col-lg-5">
            <h1>About us</h1>
            <div class="divider my-4"></div>
            <p>
              Restoran "Rumah Rasa Nusantara (RRN)" adalah tempat makan yang
              menawarkan beragam hidangan kuliner Indonesia yang autentik dan
              menggugah selera.
            </p>
            <p>
              Dengan suasana yang hangat dan ramah, Rumah Rasa Nusantara (RRN)
              adalah destinasi kuliner yang sempurna untuk menjelajahi kekayaan
              cita rasa Nusantara dalam satu tempat.
            </p>
            <a href="#" class="btn btn-brand">Explore Menu</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Menu -->
    <section id="menu" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12 intro-text">
            <h1>Explore Our Menu</h1>
          </div>
        </div>
      </div>

      <div class="container">
        <ul
          class="nav nav-pills mb-4 justify-content-center"
          id="pills-tab"
          role="tablist"
        >
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="pills-all-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-all"
              type="button"
              role="tab"
              aria-controls="pills-all"
              aria-selected="true"
            >
              Best Menu
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-Mie-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-Mie"
              type="button"
              role="tab"
              aria-controls="pills-Mie"
              aria-selected="true"
            >
              Mie
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-Sayur-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-Sayur"
              type="button"
              role="tab"
              aria-controls="pills-Sayur"
              aria-selected="true"
            >
              Sayur
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-Ayam-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-Ayam"
              type="button"
              role="tab"
              aria-controls="pills-Ayam"
              aria-selected="true"
            >
              Ayam
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-Ikan-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-Ikan"
              type="button"
              role="tab"
              aria-controls="pills-Ikan"
              aria-selected="true"
            >
              Ikan
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-Daging-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-Daging"
              type="button"
              role="tab"
              aria-controls="pills-Daging"
              aria-selected="true"
            >
              Daging
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-Nasi-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-Nasi"
              type="button"
              role="tab"
              aria-controls="pills-Nasi"
              aria-selected="true"
            >
              Nasi
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-Soto-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-Soto"
              type="button"
              role="tab"
              aria-controls="pills-Soto"
              aria-selected="true"
            >
              Soto
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-Puding-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-Puding"
              type="button"
              role="tab"
              aria-controls="pills-Puding"
              aria-selected="true"
            >
              Puding
            </button>
          </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
          <div
            class="tab-pane fade show active"
            id="pills-all"
            role="tabpanel"
            aria-labelledby="pills-all-tab"
            tabindex="0"
          >
            <!--Display menu-->
            <!-- All-->
            <div class="row gy-4">
              <!--Biar rapih-->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Mie/Mie Aceh D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span>Rated(5.4)</span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2">
                      <a href="#">Mie Aceh </a>
                    </h5>
                    <p class="small">
                      Mie Aceh terdiri dari rempah-rempah seperti bawang merah,
                      bawang putih, cabai, jahe, kemiri, kunyit, kayu manis,
                      pala, dan rempah khusus Aceh seperti biji pala dan serai.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img
                    src="./images/DU/DU Sayur/Sayur Labu Siam D.jpg"
                    alt=""
                  />
                  <div class="menu-item-content p-4">
                    <div>
                      <span>Rated(5.4)</span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2">
                      <a href="#">Sayur Labu Siam </a>
                    </h5>
                    <p class="small">
                      Sayur Labu Siam terdiri dari bawang putih, bawang merah,
                      cabai, daun salam, lengkuas, garam, gula, terasi (udang
                      rebon), dan rempah
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Ayam/Ayam Betutu D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span>Rated(5.4)</span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ayam Betutu </a>
                    </h5>
                    <p class="small">
                      Ayam Betutu terdiri dari campuran rempah-rempah khas Bali
                      seperti bawang merah, bawang putih, cabai, jahe, kunyit,
                      kemiri, dan rempah.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img
                    src="./images/DU/DU Ikan/Ikan Patin Tempoyak D.jpg"
                    alt=""
                  />
                  <div class="menu-item-content p-4">
                    <div>
                      <span>Rated(5.4)</span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ikan Patin Tempoyak</a>
                    </h5>
                    <p class="small">
                      Ikan Patin Tempoyak terdiri dari patin segar, tempoyak
                      (fermentasi durian), bawang merah, bawang putih, cabai
                      merah, cabai hijau, kunyit, serai, daun jeruk, daun
                      kunyit, garam, dan gula.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img
                    src="./images/DU/DU Daging/Daging Sop Konro D.jpg"
                    alt=""
                  />
                  <div class="menu-item-content p-4">
                    <div>
                      <span>Rated(5.4)</span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2">
                      <a href="#">Daging Sop Konro </a>
                    </h5>
                    <p class="small">
                      Daging Sop Konro terdiri dari bawang merah, bawang putih,
                      jahe, lengkuas, serai, cabai rawit, kemiri, ketumbar,
                      jintan, pala, kayu manis, daun salam, garam, merica, gula,
                      dan rempah.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img
                    src="./images/DU/DU Nasi/Nasi Ayam Hainan D.jpg"
                    alt=""
                  />
                  <div class="menu-item-content p-4">
                    <div>
                      <span>Rated(5.4)</span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2">
                      <a href="#">Nasi Ayam Hainan </a>
                    </h5>
                    <p class="small">
                      Nasi Ayam Hainan terdiri dari bawang putih, bawang merah,
                      jahe, minyak wijen, garam, kaldu ayam, daun pandan, serta
                      rempah-rempah seperti merica dan pala. Hidangan ini juga
                      disajikan dengan nasi yang dimasak dengan kaldu ayam
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Soto/Soto Betawi D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span>Rated(5.4)</span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2">
                      <a href="#">Soto Betawi </a>
                    </h5>
                    <p class="small">
                      Soto Betawi terdiri dari bawang merah, bawang putih, jahe,
                      serai, daun salam, daun jeruk, lengkuas, kemiri, ketumbar,
                      merica, kunyit, garam, gula, serta bumbu-bumbu lainnya.
                      Hidangan ini juga mengandalkan santan sebagai bahan utama
                      dalam kuahnya, memberikan cita rasa kaya dan lezat. Soto
                      Betawi biasanya disajikan dengan daging sapi, kentang,
                      tomat, emping, dan ditaburi dengan bawang goreng dan daun
                      seledri sebagai pelengkap.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Puding/Puding Sutra D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <div>
                      <span>Rated(5.4)</span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2">
                      <a href="#">Puding Sutra </a>
                    </h5>
                    <p class="small">
                      Puding Sutra meliputi susu, gula, gelatin, dan bahan aroma
                      seperti vanila atau cokelat. Dikenal tekstur halus dan
                      kenyalnya yang menyerupai sutra. Biasanya disajikan dingin
                      dan dapat dihiasi dengan topping seperti buah-buahan, saus
                      karamel, atau krim kocok
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="tab-pane fade show"
            id="pills-Mie"
            role="tabpanel"
            aria-labelledby="pills-Mie-tab"
            tabindex="0"
          >
            <!--Mie-->
            <div class="row gy-4">
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Mie/Mie Aceh D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Mie Aceh </a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Mie/Mie Ayam D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Mie Ayam</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Mie/Mie Bakso D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Mie Bakso</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Mie/Mie Goreng D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Mie Goreng</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Mie/Mie Jawa D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Mie Jawa</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Mie/Mie Kocok D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Mie Kocok</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Mie/Mie Kuah D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Mie Kuah</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Mie/Mie Kuning D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Mie Kuning</a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--katagori tiap menu-->
          <!--Sayur-->
          <div
            class="tab-pane fade show"
            id="pills-Sayur"
            role="tabpanel"
            aria-labelledby="pills-Sayur-tab"
            tabindex="0"
          >
            <div class="row gy-4">
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img
                    src="./images/DU/DU Sayur/Sayur Labu Siam D.jpg"
                    alt=""
                  />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Sayur Labu Siam</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Sayur/Sayur Asem D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Sayur Asem</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Sayur/Sayur Bayam D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Sayur Bayam</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Sayur/Sayur Bening D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Sayur Bening</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img
                    src="./images/DU/DU Sayur/Sayur Daun Singkong D.jpg"
                    alt=""
                  />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Sayur Daun Singkong</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Sayur/Sayur Kangkung D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Sayur Kangkung</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Sayur/Sayur Lodeh D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Sayur Lodeh</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Sayur/Sayur Pecel D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Sayur Pecel</a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Ayam-->
          <div
            class="tab-pane fade show"
            id="pills-Ayam"
            role="tabpanel"
            aria-labelledby="pills-Ayam-tab"
            tabindex="0"
          >
            <div class="row gy-4">
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Ayam/Ayam Betutu D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ayam Betutu</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Ayam/Ayam Bakar D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ayam Bakar</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Ayam/Ayam Geprek D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ayam Geprek</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Ayam/Ayam Goreng D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ayam Goreng</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Ayam/Ayam Kremes D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ayam Kremes</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Ayam/Ayam Penyet D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ayam Penyet</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Ayam/Ayam Pop D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ayam Pop</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Ayam/Ayam Rica-Rica D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ayam Rica-Rica D</a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Ikan-->
          <div
            class="tab-pane fade show"
            id="pills-Ikan"
            role="tabpanel"
            aria-labelledby="pills-Ikan-tab"
            tabindex="0"
          >
            <div class="row gy-4">
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img
                    src="./images/DU/DU Ikan/Ikan Patin Tempoyak D.jpg"
                    alt=""
                  />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ikan Patin Tempoyak</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Ikan/Ikan Asam Manis D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ikan Asam Manis</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Ikan/Ikan Bakar D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ikan Bakar</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img
                    src="./images/DU/DU Ikan/Ikan Bandeng Presto D.jpg"
                    alt=""
                  />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ikan Bandeng Presto</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Ikan/Ikan Belado D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ikan Belado</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Ikan/Ikan Goreng D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ikan Goreng</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Ikan/Ikan Gurameh D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ikan Gurameh</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img
                    src="./images/DU/DU Ikan/Ikan Nila Sambal Matah D.jpg"
                    alt=""
                  />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Ikan Nila Sambal Matah DD</a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Daging-->
          <div
            class="tab-pane fade show"
            id="pills-Daging"
            role="tabpanel"
            aria-labelledby="pills-Daging-tab"
            tabindex="0"
          >
            <div class="row gy-4">
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img
                    src="./images/DU/DU Daging/Daging Sop Konro D.jpg"
                    alt=""
                  />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Daging Sop Konro</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Daging/Daging Balado D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Daging Balado</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Daging/Daging Kari D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Daging Kari</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img
                    src="./images/DU/DU Daging/Daging Sapi Lada Hitam D.jpg"
                    alt=""
                  />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Daging Sapi Lada Hitam</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Daging/Daging Semur D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Daging Semur</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Daging/Gulai Kambing D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Gulai Kambing</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img
                    src="./images/DU/DU Daging/Rendang Daging D.jpg"
                    alt=""
                  />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Rendang Daging</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Daging/Sop Buntut D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Sop Buntut D</a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Nasi-->
          <div
            class="tab-pane fade show"
            id="pills-Nasi"
            role="tabpanel"
            aria-labelledby="pills-Nasi-tab"
            tabindex="0"
          >
            <div class="row gy-4">
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img
                    src="./images/DU/DU Nasi/Nasi Ayam Hainan D.jpg"
                    alt=""
                  />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Nasi Ayam Hainan</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Nasi/Nasi Goreng D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Nasi Goreng</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Nasi/Nasi Jamblang D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Nasi Jamblang</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Nasi/Nasi Kebuli D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Nasi Kebuli</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Nasi/Nasi Kecombrang D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Nasi Kecombrang</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Nasi/Nasi Liwet D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Nasi Liwet</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Nasi/Nasi Pecel D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Nasi Pecel</a>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <img src="./images/DU/DU Nasi/Nasi Uduk D.jpg" alt="" />
                  <div class="menu-item-content p-4">
                    <h5 class="mt-1 mb-2">
                      <a href="#">Nasi Uduk</a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Soto-->
          <div
          class="tab-pane fade show"
          id="pills-Soto"
          role="tabpanel"
          aria-labelledby="pills-Soto-tab"
          tabindex="0"
        >
          <div class="row gy-4">
            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Soto/Soto Betawi D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Soto Betawi</a>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Soto/Soto Ayam D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Soto Ayam D</a>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Soto/Soto Bandung D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Soto Bandung</a>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Soto/Soto Banjar D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Soto Banjar</a>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Soto/Soto Kudus D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Soto Kudus</a>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Soto/Soto Makassar D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Soto Makassar</a>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Soto/Soto Medan D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Soto Medan</a>
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Soto/Soto Padang D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Soto Padang</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!--Puding-->
          <div
          class="tab-pane fade show"
          id="pills-Puding"
          role="tabpanel"
          aria-labelledby="pills-Puding-tab"
          tabindex="0"
        >
          <div class="row gy-4">
            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Puding/Puding Sutra D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Puding Sutra</a>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Puding/Puding Coklat D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Puding Coklat</a>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Puding/Puding Gula Melaka D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Puding Gula Melaka</a>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Puding/Puding Lapis D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Puding Lapis</a>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Puding/Puding Oreo D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Puding Oreo</a>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Puding/Puding Susu D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Puding Susu</a>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Puding/Puding Buah D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Puding Buah</a>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="menu-item bg-white shadow-on-hover">
                <img
                  src="./images/DU/DU Puding/Puding Roti D.jpg"
                  alt=""
                />
                <div class="menu-item-content p-4">
                  <h5 class="mt-1 mb-2">
                    <a href="#">Puding Roti</a>
                  </h5>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- Features -->
    <section id="features" class="bg-cover">
      <div class="container">
        <div class="row">
          <div class="col-12 intro-text">
            <h1 class="text-white">Why to choose us?</h1>
            <p class="text-white">
              #
            </p>
          </div>
        </div>
        <div class="row gy-4">
          <div class="col-lg-3 col-sm-6">
            <div class="feature p-4 text-center">
              <div class="feature-icon">
                <i class="ri-wifi-fill"></i>
              </div>
              <h4 class="text-white mt-4 mb-2">Free Wifi</h4>
              <p class="text-white">
                Kami Menyediakan Wifi 5G 
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="feature p-4 text-center">
              <div class="feature-icon">
                <i class="ri-timer-2-fill"></i>
              </div>
              <h4 class="text-white mt-4 mb-2">Fast Delivery</h4>
              <p class="text-white">
                Kami Sajikan Kurang dari 15 Menit
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="feature p-4 text-center">
              <div class="feature-icon">
                <i class="ri-user-5-fill"></i>
              </div>
              <h4 class="text-white mt-4 mb-2">Friendly Staff</h4>
              <p class="text-white">
                Bersedia Diberikan Penjelasan Tentang Menu
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="feature p-4 text-center">
              <div class="feature-icon">
                <i class="ri-shield-star-fill"></i>
              </div>
              <h4 class="text-white mt-4 mb-2">Highly Rated</h4>
              <p class="text-white">
                Mengutamakan Kepuasan Pelanggan
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section id="team">
      <div class="container">
        <div class="row">
          <div class="col-12 intro-text">
            <h1>Our Team Members</h1>
            <p>
              Best Team 2022
            </p>
          </div>
        </div>
        <div class="row gy-4">
          <div class="col-lg-3 col-sm-6">
            <div
              class="team-member px-4 py-5 border shadow-on-hover text-center"
            >
              <img src="./images/Team/DSC_6209.JPG" alt="" />
              <div class="team-member-content">
                <h4 class="mb-0 mt-4">Darius Pratama</h4>
                <p class="mb-0">Chef Eksekutif</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div
              class="team-member px-4 py-5 border shadow-on-hover text-center"
            >
              <img src="./images/Team/DSC_6210.JPG" alt="" />
              <div class="team-member-content">
                <h4 class="mb-0 mt-4">Adrian Hartanto</h4>
                <p class="mb-0">Sous Chef</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div
              class="team-member px-4 py-5 border shadow-on-hover text-center"
            >
              <img src="./images/Team/DSC_6220.JPG" alt="" />
              <div class="team-member-content">
                <h4 class="mb-0 mt-4">Gabriella Soeharto</h4>
                <p class="mb-0">Barista</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div
              class="team-member px-4 py-5 border shadow-on-hover text-center"
            >
              <img src="./images/Team/DSC_6240.JPG" alt="" />
              <div class="team-member-content">
                <h4 class="mb-0 mt-4">Isabella Wijaya</h4>
                <p class="mb-0">Pelayan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Review -->
    <section id="reviews" class="bg-cover">
      <div class="container">
        <div class="row">
          <div class="col-12 intro-text">
            <h1 class="text-white">Our Vision</h1>
            <p class="text-white">
              To become a leading culinary destination that offers an unforgettable dining experience with high-quality menus, a warm ambiance, and exceptional service.
            </p>
          </div>
        </div>

        <div id="reviewSlider" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#reviewSlider"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#reviewSlider"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="review bg-white p-5 text-center">
                    <div class="quote-icon">
                      <i class="ri-double-quotes-l"></i>
                    </div>
                    <p class="mb-0">
                      Best Employee 2020
                    </p>
                    <div class="person mt-4">
                      <img src="./images/Review/DSC_6212.JPG" alt="" />
                      <h4 class="mb-0 mt-2">Gabriel Tanjung</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="review bg-white p-5 text-center">
                    <div class="quote-icon">
                      <i class="ri-double-quotes-l"></i>
                    </div>
                    <p class="mb-0">
                      Best Employee 2021
                    </p>
                    <div class="person mt-4">
                      <img src="./images/Review/DSC_6229.JPG" alt="" />
                      <h4 class="mb-0 mt-2">Olivia Santoso</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#reviewSlider"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#reviewSlider"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      
    </section>
    <!-- Insta Posts -->
    <div class="row g-0">
      <div class="col-lg-3 col-sm-6">
        <div class="insta-post">
          <img src="./images/insta_post01.jpg" alt="" />
          <a href="#" class="insta-btn">
            <i class="ri-instagram-fill"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="insta-post">
          <img src="./images/insta_post02.jpg" alt="" />
          <a href="#" class="insta-btn">
            <i class="ri-instagram-fill"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="insta-post">
          <img src="./images/insta_post03.jpg" alt="" />
          <a href="#" class="insta-btn">
            <i class="ri-instagram-fill"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="insta-post">
          <img src="./images/insta_post04.jpg" alt="" />
          <a href="#" class="insta-btn">
            <i class="ri-instagram-fill"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Blog Post -->
    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="col-12 intro-text">
            <h1>Blog Posts</h1>
            <p>
              #
            </p>
          </div>
        </div>
        <div class="row gy-4">
          <div class="col-sm-6">
            <div class="blog-post d-flex shadow-on-hover">
              <img src="./assets/images/item_8.jpg" alt="" />
              <div class="blog-post-content p-4">
                <p>osted: 25 Dec, 2018</p>
                <h4><a href="#">How to make delicious food </a></h4>
                <p>
                  #
                </p>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="blog-post d-flex shadow-on-hover">
              <img src="./assets/images/item_6.jpg" alt="" />
              <div class="blog-post-content p-4">
                <p>osted: 25 Dec, 2018</p>
                <h4><a href="#">How to make delicious food </a></h4>
                <p>
                  #
                </p>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="blog-post d-flex shadow-on-hover">
              <img src="./assets/images/item_7.jpg" alt="" />
              <div class="blog-post-content p-4">
                <p>osted: 25 Dec, 2018</p>
                <h4><a href="#">How to make delicious food </a></h4>
                <p>
                  #
                </p>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="blog-post d-flex shadow-on-hover">
              <img src="./assets/images/item_3.jpg" alt="" />
              <div class="blog-post-content p-4">
                <p>osted: 25 Dec, 2018</p>
                <h4><a href="#">How to make delicious food </a></h4>
                <p>
                  #
                </p>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="bg-cover">
      <div class="footer-top">
        <div class="container">
          <div class="row gy-5">
            <div class="col-lg-4">
              <img src="#" class="mb-4" alt="" />
              <p>
                Rumah Rasa Nusantara
              </p>
              <div class="social-links">
                <a href="#"><i class="ri-facebook-circle-fill"></i></a>
                <a href="#"><i class="ri-instagram-fill"></i></a>
                <a href="#"><i class="ri-youtube-fill"></i></a>
                <a href="#"><i class="ri-google-play-fill"></i></a>
              </div>
            </div>
            <div class="col-lg-3 ms-auto">
              <h6 class="text-white mb-4">CONTACT</h6>
              <p class="mb-1">P: +62 852 #### ###</p>
              <p class="mb-1">E: rumahrasanusantara@gmail.com</p>
              <p class="mb-0">
                A: Jalan Ketintang
              </p>
            </div>
            <div class="col-lg-3">
              <h6 class="text-white mb-4">OPENING HOURS</h6>
              <p class="mb-1">Monday - Friday : 10:00-22:00</p>
              <p>Saturday - Sunday : 09:00-23:00</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row gy-3 justify-content-between">
            <div class="col-auto">
              <p class="mb-0">Copyrights all rights reserved</p>
            </div>
            <div class="col-auto">
              <p class="mb-0">
                Designed By PF Kelompok 
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap Bundle Js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
