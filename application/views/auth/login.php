<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>SPDK | CANDI ARTHA</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="assets/images/CA BARU.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="assets/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="assets/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="assets/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="assets/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="assets/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="assets/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="assets/js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
          .logo_login {
    background: url('assets/images/layout_img/buah.jpg');
    padding: 50px 0;
    opacity: 0.9;
    background-position: center center;
    position: relative;
    background-size: cover;
    }
       <style>
      /* CSS untuk elemen loading */
      #loading {
        display: none;
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
      }
      
      .spinner {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50px;
        height: 50px;
        border: 3px solid #f3f3f3;
        border-top: 3px solid #3498db;
        border-radius: 50%;
        animation: spin 15s linear infinite;
      }
      
      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }
   </style>
         </style>
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" height="150" src="assets/images/CA BARU.png" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                        <?php if ($this->session->flashdata('message')): ?>
                        <?= $this->session->flashdata('message') ?>
                        <?php endif; ?>
                     <form class="user" method="post" action="<?= base_url('auth'); ?>">
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Username :</label>
                              <input type="username" name="username" placeholder="Username" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password :</label>
                              <input type="password" name="password" placeholder="Password" />
                           </div>
                           <!-- <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                              <a class="forgot"href="<?= base_url('auth/forgotpassword') ?>">Ganti Password?</a>
                           </div> -->
                           <div class="ml-5 pl-lg-5 field">
                              <div class="ml-5 pl-lg-5 field">
                                  <div class="pl-lg-5 field mt-5">
                              <!-- <label class="label_field hidden">hidden label</label> -->
                              <button class="main_bt" type="submit">Login</button>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="assets/js/animate.js"></script>
      <!-- select country -->
      <script src="assets/js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="assets/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="assets/js/custom.js"></script>
      <!-- ... Kode lainnya ... -->
      <script>
        // Menyembunyikan loading screen
        window.addEventListener("load", function() {
          document.getElementById("loading").style.display = "none";
        });
      </script>
      <!-- ... Kode lainnya ... -->

   </body>
</html>