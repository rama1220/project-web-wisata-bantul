<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a class="nav-link scrollto active" href="<?=site_url('Awal')?>"><img src="<?php echo base_url() ?>assets/img/jogja1.jpeg" width="100%" height="100px"></a></h1>
       
       
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li class="dropdown"><a href="#"><span>Data Pariwisata</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
      

              <?php foreach ($kategori as $kat): ?>
              <li><a href="<?php echo site_url('Awal/isi/'.$kat['id'])?>"><?php echo $kat['kategori'];?></a></li>
               <?php endforeach; ?>
         
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#Maps">Maps</a></li>
          <li><a class="nav-link scrollto" href="#Comment">Comment</a></li>
          <li><a class="nav-link scrollto" href="<?=site_url('Login')?>">|Login</a></li>
          
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End #header -->
  
 <div class="space">

 </div>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="slider">
        <figure>
       <img src="<?php echo base_url() ?>assets/img/parangtritis.jpg" width="60%" height="90%">
      <img src="<?php echo base_url() ?>assets/img/1.jpg" width="60%" height="90%">
      <img src="<?php echo base_url() ?>assets/img/2.jpg" width="60%" height="90%">
      <img src="<?php echo base_url() ?>assets/img/3.jpg" width="60%" height="90%">
       </figure>
       </div>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">  

        <div class="section-title">
          <h2>About Bantul</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="<?php echo base_url()?>assets/foto/<?php echo $About->foto ?>" width="75%">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
           
            <p>
             <?php echo $About->isi_abt?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Maps Section ======= -->
    <section id="Maps" class="services section-bg">
      <div class="container">
        <h2>Maps</h2>
        <div class="form-grup">
            <label>Koordinar Lokasi Anda</label>
            <input class="form-control" id="Lokasi" name="Lokasi">
        </div><br>

        <div id="map" style="width: 100%; height: 520px;"></div>
        </div>
         <script src="<?php echo base_url() ?>assets/js/maps.js"></script>
    </section><!-- End Maps Section -->

    <!-- ======= Call To Action Section ======= -->
    <section class="call-to-action">
      <div class="container">

        <div class="text-center">
          <h3>Berbagai Pariwisata di Bantul</h3>
          <p> Dapat dinikmati dan bisa dicari dengan mengunjungi Web milik kami</p>
          
        </div>

      </div>
    </section><!-- End Call To Action Section -->

   

    <!-- ======= Comment Us Section ======= -->
    <section id="Comment" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Comment</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="contact-about">
              <h3>Pariwisata Bantul</h3>
              <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>
          </div>
          
          <div class="col-lg-5 col-md-12">
            
              <?php echo form_open_multipart('Comment/tambah_aksi');?> 
              <div class="form-group">
                <input type="text" name="nm_cmt" class="form-control"  placeholder="Your Name" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="email"  placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject"  placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea  type="text" class="form-control" name="mssg" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
            
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            <? echo form_close(); ?> 
          
          </div>

        </div>

      </div>
    </section><!-- End comment Us Section -->