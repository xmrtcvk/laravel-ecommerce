
<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Dashboard User Page</title>

    <link rel="stylesheet" href="{{asset("build/assets/app-37892e52.css")}}">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Laravel E-Commerce</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Çıkış</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
               #Yönetim Paneli
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url("users")}}">
              <span data-feather="home" class="align-text-bottom"></span>
               #Kullanıcılar
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kullanıcılar</h1>
      </div>

      <div class="table-responsive">
        <h3>Yeni Kullanıcı Ekle</h3>
        <form action="{{url("users")}}" method="post">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="name" class="form-label">Ad Soyad</label>
                        <input type="text" class="form-control" id="name" name="name"  placeholder="Ad soyad giriniz">
                      </div>
                      <div class="col-lg-6">
                        <label for="email" class="form-label">E-posta</label>
                        <input type="email" class="form-control"  id="email" name="email"  placeholder="E-posta giriniz">
                      </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="password" class="form-label">Şifre</label>
                        <input type="password" class="form-control" id="password" name="password"  placeholder="Şifre Giriniz">
                      </div>
                      <div class="col-lg-6">
                        <label for="password2" class="form-label">Şifre Tekrar</label>
                        <input type="password" class="form-control" name="password2" id="password2"  placeholder="Şifrenizi Tekrar Giriniz">
                      </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_admin" id="is_admin">
                            <label class="form-check-label" for="is_admin">
                              Yetkili Kullanıcı
                            </label>
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active">
                            <label class="form-check-label" for="is_active">
                              Aktif  Kullanıcı
                            </label>
                          </div>
                      </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success w-100">KAYDET</button>
                      </div>
                </div>
            </div>
        </form>
      </div>
    </main>
  </div>
</div>


    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
