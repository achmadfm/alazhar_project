<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Cari Berita | Bosowa Al-Azhar Cilegon</title>

		<meta name="keywords" content="Menyajikan Informasi Seputar Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="description" content="Selamat Datang di Website Bosowa Al-Azhar Cilegon, adalah Website Profil yang memberikan layanan informasi seputar kegiatan Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="author" content="One Bosowa School">
		<meta http-equiv="Content-Language" content="id-ID">
    	<meta NAME="Distribution" CONTENT="Global">
    	<meta NAME="Rating" CONTENT="General">


		<!-- Favicon -->
		<?php $this->load->view('depan/favicon')?>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/theme-shop.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/skins/default-tk.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url()?>template/vendor/modernizr/modernizr.min.js"></script>
		<?php
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
    ?>
	</head>
	<body class="loading-overlay-showing" data-loading-overlay>
	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v5.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="719796298157947"
  theme_color="#67b868"
  logged_in_greeting="Halo, Selamat Datang di Website Bosowa Al-Azhar, ada yang bisa kami bantu?"
  logged_out_greeting="Halo, Selamat Datang di Website Bosowa Al-Azhar, ada yang bisa kami bantu?">
      </div>
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body">
			<header id="header">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
								
									<a href="<?php echo base_url()?>">
										<img alt="Porto" width="100px" height="100px" src="<?php echo base_url()?>template/logo_alazhar.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<?php $this->load->view('depan/search')?>
								</div>
                <div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<ul class="header-social-icons social-icons hidden-xs">
											<?php $this->load->view('depan/social')?>
										</ul>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<?php $this->load->view('depan/nav_menu')?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Berita</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Pencarian Berita</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-9">
							<div class="blog-posts">

								<article class="post post-medium">
									<div class="row">
                    <?php
                    $no=0;
                    foreach ($data->result_array() as $i) :
                       $no++;
                       $tulisan_id=$i['tulisan_id'];
                       $tulisan_judul=$i['tulisan_judul'];
                       $tulisan_isi=$i['tulisan_isi'];
                       $tulisan_tanggal=$i['tanggal'];
                       $tulisan_author=$i['tulisan_author'];
                       $tulisan_gambar=$i['tulisan_gambar'];
                       $tulisan_views=$i['tulisan_views'];
                       $kategori_id=$i['tulisan_kategori_id'];
                       $kategori_nama=$i['tulisan_kategori_nama'];

                    ?>
										<div class="col-md-5">
											<div class="post-image">
												<div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
													<div>
														<div class="img-thumbnail">
															<img class="img-responsive" src="<?php echo base_url().'template/cover/'.$tulisan_gambar;?>" alt="" style="width:300px; height:170px;">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-7">

											<div class="post-content">

												<h2><a href="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>"><?php echo $tulisan_judul;?></a></h2>
												<div class="post-meta">
													<span><i class="fa fa-calendar"></i> Tanggal : <?php echo Berita::format_tanggal($tulisan_tanggal);?> </span>
													<span><i class="fa fa-user"></i> Penulis : <?php echo $tulisan_author;?> </span>
													<span><i class="fa fa-tags"> <?php echo $kategori_nama;?></i></span>
													<span><i class="fa fa-eye"></i> dibaca : <strong><?php echo $tulisan_views;?></strong> kali</span>

												</div>
												<p><?php echo limit_words($tulisan_isi,30).'...'?></p>
												<a href="<?php echo base_url().'berita/berita_detail/'.$tulisan_id;?>" class="btn btn-xs btn-primary pull-right">Selengkapnya</a>
											</div>
										</div>
										<?php endforeach;?>
									</div>
								</article>

								<?php error_reporting(0); echo $page;?>

							</div>
						</div>

						<div class="col-md-3">
							<aside class="sidebar">

								<form>
									<div class="input-group input-group-lg">
										<input class="form-control" placeholder="Search..." name="s" id="s" type="text">
										<span class="input-group-btn">
											<button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
										</span>
									</div>
								</form>

								<hr>

								<div class="tabs mb-xlg">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Populer</a></li>
										<li><a href="#recentPosts" data-toggle="tab">Terbaru</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="popularPosts">
											<ul class="simple-post-list">
												<?php foreach($populer->result() as $row) :
													?>

												<li>
													<div class="post-image">
														<div class="img-thumbnail">
																<img src="<?php echo base_url().'template/cover/'.$row->tulisan_gambar;?>" height="50px" width="50px">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="<?php echo site_url().'news/'.$row->tulisan_slug;?>"><?php echo $row->tulisan_judul;?></a>
														<div class="post-meta">
															<?php echo Berita::format_tanggal($row->tanggal);?>
														</div>
													</div>
												</li>
											<?php endforeach;?>
											</ul>
										</div>
										<div class="tab-pane" id="recentPosts">
											<ul class="simple-post-list">
												<?php
                                                    foreach($recent->result() as $row):
                                                ?>
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="<?php echo base_url().'news/'.$row->tulisan_slug;?>">
																<img src="<?php echo base_url().'template/cover/'.$row->tulisan_gambar;?>" height="50px" width="50px">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="<?php echo base_url().'news/'.$row->tulisan_slug;?>"><?php echo $row->tulisan_judul?></a>
														<div class="post-meta">
															 <?php echo Berita::format_tanggal($row->tanggal);?>
														</div>
													</div>
												</li>
											<?php endforeach;?>
											</ul>
										</div>
									</div>
								</div>

								<hr>

								<h4 class="heading-primary">Tentang Kami</h4>
								<?php $p = $tentang->row_array();?>
								<p><?php echo $p['isi'];?></p>

							</aside>
						</div>
					</div>

				</div>

			</div>

			<?php $this->load->view('depan/v_footer')?>
		</div>

		<!-- Vendor -->
		<script src="<?php echo base_url()?>template/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/common/common.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/vide/vide.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url()?>template/js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url()?>template/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url()?>template/js/theme.init.js"></script>
	</body>
</html>
