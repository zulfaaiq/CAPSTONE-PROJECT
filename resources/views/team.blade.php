<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Get-Blood/Team</title>
  <script src="https://kit.fontawesome.com/6e843ddcb5.js" crossorigin="anonymous"></script>
  @vite(['resources/js/app.js'])
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="/css/responsive.css" />
</head>

<body>
  <div class="nav-container">
    <div class="wrapper">
      <nav>
        <div class="logo">
          GET-BLOOD
        </div>

        <ul class="nav-items">
          <li>
            <a href="/login">Login</a>
          </li>

          <li>
            <a href="/dashboard">Dashboard</a>
          </li>

          <li>
            <a href="/about">About</a>
          </li>

          <li>
            <a href="/team">Team</a>
          </li>

        </ul>
      </nav>
    </div>
  </div>

  <div class="team">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <h1 class="title">Our Team</h1>
      </div>

      <div class="team-mobile">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="card d-flex align-items-center pb-2 card-team rounded-4 mx-1">
                <img src="./image/profile_denny.jpeg" class="rounded-circle card-team__img" alt="profile image">
                <div class="card-body card-team__content text-center">
                  <h5 class="card-title">
                    Denny Ivan Rifai
                  </h5>
                  <div class="card-text">
                    Web Developer
                  </div>
                </div>
                <div class="sosmed-container mt-0 pt-0">
                  <a href="#" class="btn px-2 py-1 rounded-circle bg-primary btn-sosmed"><i class="fa-brands fa-linkedin-in text-white icon-sosmed"></i></a>
                  <a href="#" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-brands fa-github text-white icon-sosmed"></i></a>
                  <a href="https://www.instagram.com/dennyivanrifai" class="btn px-2 py-1 rounded-circle bg-danger btn-sosmed"><i class="fa-brands fa-instagram text-white icon-sosmed"></i></a>
                  <a href="#" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-solid fa-envelope text-white icon-sosmed"></i></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card d-flex align-items-center pb-2 card-team rounded-4 mx-1">
                <img src="./image/profile_alan.jpeg" class="rounded-circle card-team__img" alt="profile image">
                <div class="card-body card-team__content text-center">
                  <h5 class="card-title">
                    M Alan Nur Ilkhan
                  </h5>
                  <div class="card-text">
                    Web Developer
                  </div>
                </div>
                <div class="sosmed-container mt-0 pt-0">
                <a href="https://www.linkedin.com/in/m-alan-nur-ilkhan-7ba568252/" class="btn px-2 py-1 rounded-circle bg-primary btn-sosmed"><i class="fa-brands fa-linkedin-in text-white icon-sosmed"></i></a>
                <a href="https://github.com/MAlanNurIlkhan" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-brands fa-github text-white icon-sosmed"></i></a>
                <a href="https://www.instagram.com/m_alannurilkhan/" class="btn px-2 py-1 rounded-circle bg-danger btn-sosmed"><i class="fa-brands fa-instagram text-white icon-sosmed"></i></a>
                <a href="https://mail.google.com/mail/u/0/?tf=cm&fs=1&to=malan31@std.unissula.ac.id" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-solid fa-envelope text-white icon-sosmed"></i></a>
              </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card d-flex align-items-center pb-2 card-team rounded-4 mx-1">
                <img src="./image/profile_alam.jpg" class="rounded-circle card-team__img" alt="profile image">
                <div class="card-body card-team__content text-center">
                  <h5 class="card-title">
                    Maulana Alamsyah
                  </h5>
                  <div class="card-text">
                    Web Developer
                  </div>
                </div>
                <div class="sosmed-container mt-0 pt-0">
                  <a href="#" class="btn px-2 py-1 rounded-circle bg-primary btn-sosmed"><i class="fa-brands fa-linkedin-in text-white icon-sosmed"></i></a>
                  <a href="#" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-brands fa-github text-white icon-sosmed"></i></a>
                  <a href="#" class="btn px-2 py-1 rounded-circle bg-danger btn-sosmed"><i class="fa-brands fa-instagram text-white icon-sosmed"></i></a>
                  <a href="#" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-solid fa-envelope text-white icon-sosmed"></i></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card d-flex align-items-center pb-2 card-team rounded-4 mx-1">
                <img src="./image/profile_faiqoh.jpg" class="rounded-circle card-team__img" alt="profile image">
                <div class="card-body card-team__content text-center">
                  <h5 class="card-title">
                    Faiqotuzzulfa
                  </h5>
                  <div class="card-text">
                    Web Developer
                  </div>
                </div>
                <div class="sosmed-container mt-0 pt-0">
                  <a href=" https://www.linkedin.com/in/faiqotuzzulfa-86b871256/" class="btn px-2 py-1 rounded-circle bg-primary btn-sosmed"><i class="fa-brands fa-linkedin-in text-white icon-sosmed"></i></a>
                  <a href="https://github.com/zulfaaiq" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-brands fa-github text-white icon-sosmed"></i></a>
                  <a href="@zul.faaiq" class="btn px-2 py-1 rounded-circle bg-danger btn-sosmed"><i class="fa-brands fa-instagram text-white icon-sosmed"></i></a>
                  <a href="faiqotuzzulfa05@students.unnes.ac.id" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-solid fa-envelope text-white icon-sosmed"></i></a>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

        </div>
      </div>

      <div class="team-desktop">
        <div class="row d-flex justify-content-center gy-3">
          <div class="col-12 col-sm-5 col-md-5 col-lg-3">
            <div class="card d-flex align-items-center pb-2 card-team rounded-4">
              <img src="./image/profile_denny.jpeg" class="rounded-circle card-team__img" alt="profile image">
              <div class="card-body card-team__content text-center">
                <h5 class="card-title">
                  Denny Ivan Rifai
                </h5>
                <div class="card-text">
                  Web Developer
                </div>
              </div>
              <div class="sosmed-container mt-0 pt-0">
                <a href="#" class="btn px-2 py-1 rounded-circle bg-primary btn-sosmed"><i class="fa-brands fa-linkedin-in text-white icon-sosmed"></i></a>
                <a href="#" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-brands fa-github text-white icon-sosmed"></i></a>
                <a href="https://www.instagram.com/dennyivanrifai" class="btn px-2 py-1 rounded-circle bg-danger btn-sosmed"><i class="fa-brands fa-instagram text-white icon-sosmed"></i></a>
                <a href="#" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-solid fa-envelope text-white icon-sosmed"></i></a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-5 col-md-5 col-lg-3">
            <div class="card d-flex align-items-center pb-2 card-team rounded-4">
              <img src="./image/profile_alan.jpeg" class="rounded-circle card-team__img" alt="profile image">
              <div class="card-body card-team__content text-center">
                <h5 class="card-title">
                  M Alan Nur Ilkhan
                </h5>
                <div class="card-text">
                  Web Developer
                </div>
              </div>
              <div class="sosmed-container mt-0 pt-0">
                <a href="https://www.linkedin.com/in/m-alan-nur-ilkhan-7ba568252/" class="btn px-2 py-1 rounded-circle bg-primary btn-sosmed"><i class="fa-brands fa-linkedin-in text-white icon-sosmed"></i></a>
                <a href="https://github.com/MAlanNurIlkhan" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-brands fa-github text-white icon-sosmed"></i></a>
                <a href="https://www.instagram.com/m_alannurilkhan/" class="btn px-2 py-1 rounded-circle bg-danger btn-sosmed"><i class="fa-brands fa-instagram text-white icon-sosmed"></i></a>
                <a href="https://mail.google.com/mail/u/0/?tf=cm&fs=1&to=malan31@std.unissula.ac.id" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-solid fa-envelope text-white icon-sosmed"></i></a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-5 col-md-5 col-lg-3">
            <div class="card d-flex align-items-center pb-2 card-team rounded-4">
              <img src="./image/profile_alam.jpg" class="rounded-circle card-team__img" alt="profile image">
              <div class="card-body card-team__content text-center">
                <h5 class="card-title">
                  Maulana Alamsyah
                </h5>
                <div class="card-text">
                  Web Developer
                </div>
              </div>
              <div class="sosmed-container mt-0 pt-0">
                <a href="#" class="btn px-2 py-1 rounded-circle bg-primary btn-sosmed"><i class="fa-brands fa-linkedin-in text-white icon-sosmed"></i></a>
                <a href="#" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-brands fa-github text-white icon-sosmed"></i></a>
                <a href="#" class="btn px-2 py-1 rounded-circle bg-danger btn-sosmed"><i class="fa-brands fa-instagram text-white icon-sosmed"></i></a>
                <a href="#" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-solid fa-envelope text-white icon-sosmed"></i></a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-5 col-md-5 col-lg-3">
            <div class="card d-flex align-items-center pb-2 card-team rounded-4">
              <img src="./image/profile_faiqoh.jpg" class="rounded-circle card-team__img" alt="profile image">
              <div class="card-body card-team__content text-center">
                <h5 class="card-title">
                  Faiqotuzzulfa
                </h5>
                <div class="card-text">
                  Web Developer
                </div>
              </div>
              <div class="sosmed-container mt-0 pt-0">
                <a href="#" class="btn px-2 py-1 rounded-circle bg-primary btn-sosmed"><i class="fa-brands fa-linkedin-in text-white icon-sosmed"></i></a>
                <a href="#" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-brands fa-github text-white icon-sosmed"></i></a>
                <a href="#" class="btn px-2 py-1 rounded-circle bg-danger btn-sosmed"><i class="fa-brands fa-instagram text-white icon-sosmed"></i></a>
                <a href="#" class="btn px-2 py-1 rounded-circle bg-dark btn-sosmed"><i class="fa-solid fa-envelope text-white icon-sosmed"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>