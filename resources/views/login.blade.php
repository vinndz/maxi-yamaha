<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maxi Yamaha | Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
      overflow: hidden; /* cegah scroll */
    }
    .login-section {
      height: 100vh;
    }
    .login-form {
      max-width: 350px;
      width: 100%;
    }
    .brand {
      color: #0d6efd;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <section class="container-fluid login-section">
    <div class="row h-100">
      
      <!-- Left Side (Form) -->
      <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-black">
        <div class="text-center mb-4">
          <h1 class="brand">Login</h1>
        </div>

        <form class="login-form" action="{{ route('login.action') }}" method="POST">
          @csrf
          <div class="form-outline mb-3">
            <label class="form-label" for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control form-control-lg"/>
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control form-control-lg"/>
          </div>

          <button class="btn btn-primary btn-lg w-100" type="submit">Login</button>
        </form>
      </div>

      <!-- Right Side (Image) -->
      <div class="col-md-6 d-none d-md-block p-0">
        <img src="{{ asset('assets/images/home-page/about.png') }}" 
             alt="Login image" class="w-100 h-100" 
             style="object-fit: cover; object-position: center;">
      </div>

    </div>
  </section>
</body>
</html>
