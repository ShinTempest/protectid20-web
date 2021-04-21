<?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=dd266cb3f5b441339d7fa9b1bc07ad6f");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($output, true);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ProtectId'20</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
 
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">ProtectId'20</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#artikel">Article</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="profile">Profile</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">ProtectId'20 <br> Aplikasi Informasi Seputar COVID-19</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Lindungi diri dan keluarga dari COVID-19</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">About</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">About!</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">ProtectId'20 adalah sebuah aplikasi yang berisi informasi seputar virus Corona(COVID'19). <br>
                        <br>Latar belakang pengembangan aplikasi ini adalah kurangnya literasi masyarakat mengenai virus COVID-19, serta dampak yang disebabkan oleh virus tersebut, 
                        sehingga penyebaran virus ini khususnya di Indonesia tidak berkurang dari waktu ke waktu, bahkan meningkat, yang menyebabkan naiknya angka kematian yang disebabkan oleh virus tersebut.
                        Padahal, sudah banyak sumber informasi mengenai dampak virus Corona, baik dari dalam maupun luar negeri. Hanya saja, masyarakat yang kurang perhatian akan hal tersebut.
                        Aplikasi ini juga dikembangkan dengan harapan informasi yang diterima masyarakat mengenai virus COVID-19 adalah valid, sehingga masyarakat terhindar dari berita HOAX yang salah satu menjadi
                        faktor pemicu penyebaran virus COVID-19.<br>
                        <br>Aplikasi ini bertujuan untuk membantu masyarakat dalam memperoleh informasi seputar COVID'19. Diharapkan melalui aplikasi ini, masyarakat semakin mudah mendapatkan informasi tervalid 
                        dan terpercaya mengenai virus Corona, seperti informasi dari situs web resmi Satgas COVID-19 berikut:<a href="https://covid19.go.id/" style="color: beige"> https://covid19.go.id/</a></p>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section" id="content">
            <div class="container">
                <h2 class="text-center mt-0">Penting!</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-hands-wash text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Selalu Cuci Tangan</h3>
                            <p class="text-muted mb-0">Pastikan Anda mencuci tangan dengan sabun dan air yang mengalir</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-head-side-mask text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Selalu Gunakan Masker</h3>
                            <p class="text-muted mb-0">Saat Anda melakukan aktivitas di tempat umum wajib memakai masker!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-ban text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Tetap Di Rumah</h3>
                            <p class="text-muted mb-0">Jika Anda tidak memiliki kepentingan di luar tidak perlu pergi ke tempat umum!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-shower text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Bersihkan Diri Setelah Beraktivitas di luar</h3>
                            <p class="text-muted mb-0">Setelah selesai melakukan aktivitas di tempat umum pastikan langsung membersihkan diri</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="artikel">
            <div class="container-fluid p-0">
                <h2 class="text-center mt-0">Article</h2>
                <hr class="divider my-4" />
                <div class="row no-gutters">
                    <?php foreach($data['articles'] as $d){ ?>
                        <div class="col-md-4">
                        <br>
                            <div class="card">
                                <img src="<?php echo $d['urlToImage']; ?>" height="200px"class="card-img-top" alt="">
                                <div class="card-body">
                                    <h6 class="card-title"><?php echo $d['title']; ?></h6>
                                    <p class="card-text"><?php echo $d['description']; ?></p>
                                    <a href="<?php echo $d['url']; ?>" class="btn btn-primary">Lihat Detail</a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><?php echo $d['publishedAt']; ?></small>
                                </div>
                            </div>
                    
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
        </section>


    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Contact Us!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Dipersilahkan memberikan pertanyaan, saran, komentar dan pendapat mengenai aplikasi.</p>
                    </div>

                <div class="container">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Masukkan Nama" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Masukkan Email" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Masukkan Pesan" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Kirim!</button>
                    </div>
                </form>
                </div>
                <div class="text-center">
                    <h2 class="form-title"></h2>
                </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+62 822 9462 6491</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <a class="d-block" href="mailto:protectid20@gmail.com">protectid20@gmail.com</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © ProtectId'20</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
