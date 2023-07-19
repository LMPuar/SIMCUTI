<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Boostrap Login | Ludiflex</title>
</head>
<body>

    <!----------------------- Main Container -------------------------->

     <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

       <div class="row border rounded-5 p-3 bg-white shadow box-area">

    <!--------------------------- Left Box ----------------------------->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
           <div class="featured-image mb-3">
            <img src="img/meja2.jpg" class="img-fluid" style="width: 250px;">
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
       </div> 

    <!-------------------- ------ Right Box ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Hello,Again</h2>
                     <p>We are happy to have you back.</p>
                </div>
                <form action="/register" method="POST">
                  @csrf
                  <div class="input-group mb-3">
                      <input type="text" class="form-control form-control-lg bg-light fs-6 @error('id_kantor') is-invalid @enderror" id="id_kantor" placeholder="Id kantor" name="id_kantor" required>
                      @error('id_kantor')
                      <div class="invalid-feedback ">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="input-group mb-3">
                      <input type="text" class="form-control form-control-lg bg-light fs-6 @error('name') is-invalid @enderror" id="name" placeholder="Nama lengkap" name="name" required>
                      @error('name')
                      <div class="invalid-feedback ">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="input-group mb-3">
                      <input type="email" class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror" id="email" placeholder="Email address" name="email" required>
                      @error('email')
                      <div class="invalid-feedback ">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="input-group mb-3">
                      <input type="password" class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
                      @error('password')
                      <div class="invalid-feedback ">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="input-group mb-3">
                      <input type="password" class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror" id="password" placeholder="Konfirmasi password" name="password" required>
                      @error('password')
                      <div class="invalid-feedback ">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="input-group mb-3">
                      <button class="btn btn-lg btn-primary w-100 fs-6">Register</button>
                  </div>
                </form>
          </div>
       </div> 

      </div>
    </div>

</body>
</html>