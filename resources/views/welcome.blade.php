<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Website Pemilihan</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('Maundy/assets/img/favicon.png')}}" rel="icon">
  <link href="{{url('Maundy/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('Maundy/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ url('Maundy/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('Maundy/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Maundy - v2.1.0
  * Template URL: https://bootstrapmade.com/maundy-free-coming-soon-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style type="text/css">
    .login {
        width: 500px;
        font-size: 25px;
        /* margin-bottom:10px; */
    }
    .contact{
        text-align:center;
    }
    .btn-outline-light:hover{
        color:#000;
    }
    .btn-outline-light:hover h1{
        color:#333!important;
    }
</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <h1>Selamat Datang di Website Pemilihan</h1>
      <h3>Ketua dan Wakil Ketua OSIS</h3>
      <h2>SMK Negeri 1 Limboto</h2>
      <div class="countdown d-flex justify-content-center" data-count="2020/11/14">
        <div>
          <h3>%D</h3>
          <h4>Days</h4>
        </div>
        <div>
          <h3>%H</h3>
          <h4>Hours</h4>
        </div>
        <div>
          <h3>%M</h3>
          <h4>Minutes</h4>
        </div>
        <div>
          <h3>%S</h3>
          <h4>Seconds</h4>
        </div>
      </div>

      <div class="login mb-5">
        <a href="/login" class="btn btn-outline-light btn-block btn-lg"><h1> <i class="icofont-checked"></i> Mari Memilih!</h1></a>
      </div>

      <!-- <div class="contact">
          <p>Belum mendapatkan akun? Hubungi contact center!</p>
          <a href="" class="btn btn-outline-success"> <i class="icofont-phone"></i> Contact Center</a>
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div> -->
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-lg btn-outline-light" data-toggle="modal" data-target="#exampleModal">
        <h5><i class="far fa-question-circle"></i>Bagaimana Cara Memilih?</h5> 
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-dark" id="exampleModalLabel">Bagaimana cara memilih?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-dark">
            <div class="row">
            <ul>
            
                <li>
                    Silahkan hubungi setiap wali kelas untuk memperoleh Email dan Password untuk memilih
                </li>
                
                <li>
                    Kunjungi <a href="https://evoting.smkn1limboto.sch.id/">https://evoting.smkn1limboto.sch.id/</a> 
                </li>

                <li>
                    Klik Tombol Mari Memilih, anda akan otomatis dialihkan pada halaman Login
                </li>

                <li>
                    Silahkan Login menggunakan email dan password yang telah anda peroleh dari wali kelas 
                </li>
                <li>
                    Setelah berhasil Login, anda akan dialihkan di halaman admin
                </li>
                <li>
                    Pilih menu <a href="/voting">Voting</a> untuk memilih
                </li>
                <li>
                    Pilih pasangan anda
                </li>
                <li>
                    Pastikan pilihan anda berhasil diinput
                </li>
                <li>
                    Keluar dari akun anda
                </li>
            </ul>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </header><!-- End #header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Contact Center</h2>
          <p>Apabila mengalami kendala saat melakukan pemilihan, silahkan hubungi kontak dibawah</p>
        </div>

        <div class="row mt-2">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><img class="rounded-circle" height="100px" src="{{ asset('Maundy/assets/img/adi.jpg')}}" alt=""></div>
            <h4 class="title"><a  href="">Yasdil Lasoma</a></h4>
            <p class="description"> <a href="https://api.whatsapp.com/send?phone=6285311327490&text=Halo,%20Saya%20ingin%20bertanya%20mengenai%20pemilihan%20ketua%20osis" class="btn btn-success"> <i class="icofont-phone"></i> 0853-1132-7490</a></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
          <div class="icon"><img class="rounded-circle" height="100px" width="100px" src="{{ asset('Maundy/assets/img/mei.jpeg')}}" alt=""></div>
            <h4 class="title"><a  href="">Meilan Dangkua</a></h4>
            <p class="description"> <a href="https://api.whatsapp.com/send?phone=6282331134643&text=Halo,%20Saya%20ingin%20bertanya%20mengenai%20pemilihan%20ketua%20osis" for="" class="btn btn-success"> <i class="icofont-phone"></i> 0823-3113-4643</a></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
          <div class="icon"><img class="rounded-circle" height="100px" width="100px" src="{{ asset('Maundy/assets/img/ami.jpg')}}" alt=""></div>
            <h4 class="title"><a  href="">Eka Ria Nazmi Pani</a></h4>
            <p class="description"> <a href="https://api.whatsapp.com/send?phone=6282393353228&text=Halo,%20Saya%20ingin%20bertanya%20mengenai%20pemilihan%20ketua%20osis" for="" class="btn btn-success"> <i class="icofont-phone"></i> 0823-9335-3228</a></p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Lokasi:</h4>
                <p>Aula Serba Guna, SMK Negeri 1 Limboto</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>0853 1132 7490</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.5737203440344!2d122.99048171475339!3d0.634441399537148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3279320110ce9f41%3A0x27839c1149641b0e!2sSMK%20Negeri%201%20Limboto!5e0!3m2!1sid!2sid!4v1604923188262!5m2!1sid!2sid" width="350" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Maundy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/maundy-free-coming-soon-bootstrap-theme/ -->
        Made with <i class="icofont-heart"></i>  by adilasoma
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('Maundy/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('Maundy/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('Maundy/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{url('Maundy/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{url('Maundy/assets/vendor/jquery-countdown/jquery.countdown.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('Maundy/assets/js/main.js')}}"></script>

</body>

</html>