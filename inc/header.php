<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  
  <link rel="stylesheet" href="assets/css/bai1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style>

   
</style>
<body>
<nav style="background-color: #272e3a;" class="navbar navbar-expand-lg    shadow fixed-top">
  <div class="container">
  <img src="assets/images/logo.png" alt=""  width="100px">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav  ms-auto" style="color: white;">
        <li class="nav-item active">
          <a style="color: white;    letter-spacing: 3px;
          text-decoration: none;
          font-size: 14px;" class="nav-link" href="index.php">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a style="color: white;    letter-spacing: 3px;
          text-decoration: none;
          font-size: 14px;" class="nav-link" href="product.php">Sản phẩm</a>
        </li>
       
        <li class="nav-item">
          <a style="color: white;    letter-spacing: 3px;
          text-decoration: none;
          font-size: 14px;" class="nav-link" href="lienhe.html">giới thiệu</a>
        </li>
        <li class="nav-item">
          <a style="color: white;    letter-spacing: 3px;
          text-decoration: none;
          font-size: 14px;" class="nav-link" href="gopy.html">Liên hệ</a>
        </li>
        <li class="nav-item dropdown">
          <a style="color: white;    letter-spacing: 3px;
          text-decoration: none;
          font-size: 14px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Tài khoản
          </a>
          <ul class="dropdown-menu bg-dark "  aria-labelledby="navbarDropdown">
            <li><a style="color: white;" class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Đăng nhập</a></li>
            <li><a style="color: white;" class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@getbootstrap">Đăng ký</button></a></li>
            <li><a style="color: white;" class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-whatever="@getbootstrap">Sữa thông tin tài khoản</button></a></li>
           
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Đăng nhập vào hệ thống</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="login100-form validate-form flex-sb flex-w">
				

					<span class="txt1 p-b-11">
						Tên đăng nhập
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Tên đăng nhập không được bỏ trống">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
					Mật khẩu
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Mật khẩu không được bỏ trống">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
					

						<div>
							<a href="#" class="txt3">
                <a href=""   data-bs-toggle="modal" data-bs-target="#exampleModal4" data-bs-dismiss="modal" data-bs-whatever="@getbootstrap">Forgot Password?</a>	
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
						Đăng nhập
						</button>
					</div>

				</form>
      </div>
     
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Đăng ký</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="login100-form validate-form flex-sb flex-w">
				

					<span class="txt1 p-b-11">
						Tên đăng nhập
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Tên đăng nhập không được bỏ trống">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
					Mật khẩu
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Mật khẩu không được bỏ trống">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>

          <span class="txt1 p-b-11">
           Họ và tên
            </span>
            <div class="wrap-input100 validate-input m-b-12" data-validate = "Mật khẩu không được bỏ trống">
             
              <input class="input100" type="text" name="pass" >
              <span class="focus-input100"></span>
            </div>

            <span class="txt1 p-b-11">
             email
               </span>
               <div class="wrap-input100 validate-input m-b-12" data-validate = "Mật khẩu không được bỏ trống">
                
                 <input class="input100" type="email" name="pass" >
                 <span class="focus-input100"></span>
               </div>

               <span class="txt1 p-b-11">
               Gioi tính
                  </span>
                  <div class="wrap-input100 validate-input m-b-12" data-validate = "Mật khẩu không được bỏ trống">
                   
                   <input type="radio" value="1" class="gender" name="gender"> Nam
                   <input type="radio" value="2" class="gender" name="gender"> Nữ
                    <span class="focus-input100"></span>
                  </div>
					
                  <span class="txt1 p-b-11">
                    Ngày sinh
                      </span>
                      <div class="wrap-input100 validate-input m-b-12" data-validate = "Mật khẩu không được bỏ trống">
                       
                        <input class="input100" type="date" name="pass" >
                        <span class="focus-input100"></span>
                  </div>
                  <span class="txt1 p-b-11">
                   Học phí
                      </span>
                      <div class="wrap-input100 validate-input m-b-12" data-validate = "Mật khẩu không được bỏ trống">
                       
                        <input class="input100" type="text" name="pass" >
                        <span class="focus-input100"></span>
                  </div>
				

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
						Đăng ký
						</button>
					</div>

				</form>
      </div>
     
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sữa thông tin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="login100-form validate-form flex-sb flex-w">
				

					<span class="txt1 p-b-11">
						Tên đăng nhập
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Tên đăng nhập không được bỏ trống">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
					Mật khẩu
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Mật khẩu không được bỏ trống">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>

          <span class="txt1 p-b-11">
           Họ và tên
            </span>
            <div class="wrap-input100 validate-input m-b-12" data-validate = "Mật khẩu không được bỏ trống">
             
              <input class="input100" type="text" name="pass" >
              <span class="focus-input100"></span>
            </div>

            <span class="txt1 p-b-11">
             email
               </span>
               <div class="wrap-input100 validate-input m-b-12" data-validate = "Mật khẩu không được bỏ trống">
                
                 <input class="input100" type="email" name="pass" >
                 <span class="focus-input100"></span>
               </div>

               <span class="txt1 p-b-11">
               Gioi tính
                  </span>
                  <div class="wrap-input100 validate-input m-b-12" data-validate = "Mật khẩu không được bỏ trống">
                   
                   <input type="radio" value="1" class="gender" name="gender"> Nam
                   <input type="radio" value="2" class="gender" name="gender"> Nữ
                    <span class="focus-input100"></span>
                  </div>
					
                  <span class="txt1 p-b-11">
                    Ngày sinh
                      </span>
                      <div class="wrap-input100 validate-input m-b-12" data-validate = "Mật khẩu không được bỏ trống">
                       
                        <input class="input100" type="date" name="pass" >
                        <span class="focus-input100"></span>
                  </div>
                  <span class="txt1 p-b-11">
                   Học phí
                      </span>
                      <div class="wrap-input100 validate-input m-b-12" data-validate = "Mật khẩu không được bỏ trống">
                       
                        <input class="input100" type="text" name="pass" >
                        <span class="focus-input100"></span>
                  </div>
				

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
						Đăng ký
						</button>
					</div>

				</form>
      </div>
     
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quên mật khẩu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="login100-form validate-form flex-sb flex-w">
				

				
					
					<span class="txt1 p-b-11">
					Nhập email của bạn
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Mật khẩu không được bỏ trống">
						
						<input class="input100" type="email" name="pass" >
						<span class="focus-input100"></span>
					</div>

         
				

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
						Gửi đi
						</button>
					</div>

				</form>
      </div>
     
    </div>
  </div>
</div>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
      <div class="col-12"><img src="assets/images/logo.png" alt=""  width="150px"></div>
        <h1 style=" color: rgb(255, 255, 255);letter-spacing: 3px;
          text-decoration: none;
          font-size: 50px;" class="fw-light">
          
          VI-BADMINTON</h1>
        <p style="color: rgb(255, 255, 255);letter-spacing: 3px;
          text-decoration: none;
          font-size: 20px;" class="lead">Chính hãng - Uy tín - Gía tốt - Chế độ bảo hành tốt</p>
      </div>
    </div>
  </div>
</header>


