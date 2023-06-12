<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>TK AL - IKHLAS</title>
    <link rel="stylesheet" href="{{asset('alikhlas/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('alikhlas/images/logo.png')}}" type="image/x-icon">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- boot -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <!-- lightslider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light  navbarHome fixed-top">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="{{asset('alikhlas/images/logo.png')}}"  alt="Logo SMK N 2 Purbalingga">
                <h1>TK AL - IKHLAS <br>DEPOK</h1>
            </a>

            <button class="navbar-toggler hamburger" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="galeri.html">Galeri</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="artikel.html">Artikel</a>
                    </li>

                    <li class="nav-item active">
                        <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                            <a class="dropdown-item" href="ekstrakulikuler.html">Ekstrakulikuler</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="kontak.html">Contact Us</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">

                    <input class="form-control sm-2" type="search" placeholder="Cari Artikel" aria-label="Search">

                    <button class="btn btn-primary sm-0" type="submit">
                        <i class="fas fa-search"></i>
                    </button>

                </form>
            </div>

        </div>
    </nav>




    <ul id="autoWidth" class="cs-hidden">
        <li class="item-a">
            <section class="slideshow">
                <img class="satu" src="{{asset('alikhlas/images/banner-shd.png')}}"  alt="Team Work">
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3>Our Values</h3>
                        <h1>TEAMWORK</h1>
                    </div>

                    <h3>Teamwork In Our Endeavours</h3>
                </div>
            </section>
        </li>

        <li class="item-a">
            <section class="slideshow">
                <img class="dua" src="{{asset('alikhlas/images/banner-shd.png')}}"  alt="Team Work">
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3>Our Values</h3>
                        <h1>humility</h1>
                    </div>

                    <h3>Humility In Our Accomplishments</h3>
                </div>
            </section>
        </li>

        <li class="item-a">
            <section class="slideshow">
                <img class="tiga" src="{{asset('alikhlas/images/banner-shd.png')}}"  alt="Team Work">
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3>Our Values</h3>
                        <h1>Respect</h1>
                    </div>

                    <h3>Respect For One Another</h3>
                </div>
            </section>
        </li>

        <li class="item-a">
            <section class="slideshow">
                <img class="empat" src="{{asset('alikhlas/images/banner-shd.png')}}"  alt="Team Work">
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3>Our Values</h3>
                        <h1>integrity</h1>
                    </div>

                    <h3>Integrity In Our Relationships</h3>
                </div>
            </section>
        </li>

        <li class="item-a">
            <section class="slideshow">
                <img class="lima" src="{{asset('alikhlas/images/banner-shd.png')}}"  alt="Team Work">
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3>Our Values</h3>
                        <h1>commitment</h1>
                    </div>

                    <h3>Commitment To The Work We Undertake</h3>
                </div>
            </section>
        </li>


        <li class="item-a">
            <section class="slideshow">
                <img class="enam" src="{{asset('alikhlas/images/banner-shd.png')}}"  alt="Team Work">
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3>Our Values</h3>
                        <h1>excellence</h1>
                    </div>

                    <h3>Excellence In Whatever We Do</h3>
                </div>
            </section>
        </li>

    </ul>







    <div class="sambutan">
        <h1>WELCOME TO TK AL - IKHLAS</h1>
        <p>
            Selamat datang di TK Al-Ikhlas Depok - Membangun Langkah Cerdas dengan Kasih Sayang!<br>
            Di sini, kami membuka pintu untuk petualangan 
            pembelajaran yang tak terbatas, diiringi dengan kehangatan dan
            kesederhanaan. Dengan bangga kami menyambut Anda ke dalam komunitas pendidikan yang mengutamakan 
            integritas, kreativitas, dan keikhlasan.
        </p>
    </div>


    <div class="kepsek">
        <div class="container">
            <img src="{{asset('alikhlas/images/darimun.jpeg')}}"  alt="Kepala SMK N 2 Purbalingga">

            <div class="visiMisi">

                <div class="visi">
                    <h5>Our Vision TK AL - IKHLAS </h5>
                    <h3>Menjadi lembaga TK Al-Ikhlas terdepan yang memberikan pengalaman belajar yang menyenangkan,
                         kreatif, dan penuh kegembiraan bagi anak-anak,
                         serta membantu mereka tumbuh dan berkembang 
                         secara holistik.
                    </h3>
                </div>

                <div class="misi">
                    <h5>Our Mission TK AL-Ikhlas</h5>
                    <p>
                        Pendidikan Berkualitas: Kami berdedikasi untuk menyediakan pendidikan 
                        berkualitas tinggi yang mencakup perkembangan intelektual, sosial, emosional, dan fisik.
                        Kami berusaha menciptakan lingkungan belajar yang menarik di mana anak-anak dapat mengeksplorasi,
                        bertanya, dan menemukan minat mereka.
                    </p>
                </div>

            </div>

        </div>
    </div>


    <!-- jurusan -->
    <div class="jurusan">
        <div class="container">
            <h2>KEGIATAN TK AL - IKHLAS</h2>

            <div class="boxJurusan">

                <div class="perBox">
                    <img src="{{asset('alikhlas/images/1.jpg')}}" alt="RPL">
                    <h3>Rekayasa Perangkat Lunak</h3>
                </div>

                <div class="perBox">
                    <img src="{{asset('alikhlas/images/2.jpeg')}}" alt="ATU">
                    <h3>Agribisnis Ternak Unggas</h3>
                </div>

                <div class="perBox">
                    <img src="{{asset('alikhlas/images/3.jpeg')}}" alt="APHP">
                    <h3>Agribisnis Pengolahan Hasil Pangan</h3>
                </div>

                <div class="perBox">
                    <img src="{{asset('alikhlas/images/4.jpeg')}}" alt="API">
                    <h3>Agribisnis Perikanan Ikan</h3>
                </div>

                <div class="perBox">
                    <img src="{{asset('alikhlas/images/5.jpeg')}}" alt="TKR">
                    <h3>Teknik Kendaraan Ringan</h3>
                </div>

            </div>
        </div>
    </div>


    <div class="containerArtikelHome container">
        <h2>Artikel Terbaru</h2>

        <div class="artikelHome">


            <a class="perArtikelHome">
                <img src="{{asset('alikhlas/images/1.jpg')}}" alt="Foto Artikel">
                <h3>Tutorial Login Laravel 8</h3>
                <small>Di tulis oleh : <span>Rifki Romadhan</span></small>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quo, iure repellendus explicabo
                    delectus quasi amet libero iusto sequi at.
                </p>
            </a>

            <a class="perArtikelHome">
                <img src="{{asset('alikhlas/images/1.jpg')}}" alt="Foto Artikel">
                <h3>Tutorial Login Laravel 8</h3>
                <small>Di tulis oleh : <span>Rifki Romadhan</span></small>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quo, iure repellendus explicabo
                    delectus quasi amet libero iusto sequi at.
                </p>
            </a>


            <a class="perArtikelHome">
                <img src="{{asset('alikhlas/images/1.jpg')}}" alt="Foto Artikel">
                <h3>Tutorial Login Laravel 8</h3>
                <small>Di tulis oleh : <span>Rifki Romadhan</span></small>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quo, iure repellendus explicabo
                    delectus quasi amet libero iusto sequi at.
                </p>
            </a>


            <a class="perArtikelHome">
                <img src="{{asset('alikhlas/images/1.jpg')}}" alt="Foto Artikel">
                <h3>Tutorial Login Laravel 8</h3>
                <small>Di tulis oleh : <span>Rifki Romadhan</span></small>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quo, iure repellendus
                    explicabo
                    delectus quasi amet libero iusto sequi at.
                </p>
            </a>


            <a class="perArtikelHome">
                <img src="{{asset('alikhlas/images/1.jpg')}}" alt="Foto Artikel">
                <h3>Tutorial Login Laravel 8</h3>
                <small>Di tulis oleh : <span>Rifki Romadhan</span></small>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quo, iure repellendus
                    explicabo
                    delectus quasi amet libero iusto sequi at.
                </p>
            </a>


            <a class="perArtikelHome">
                <img src="{{asset('alikhlas/images/1.jpg')}}" alt="Foto Artikel">
                <h3>Tutorial Login Laravel 8</h3>
                <small>Di tulis oleh : <span>Rifki Romadhan</span></small>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quo, iure repellendus
                    explicabo
                    delectus quasi amet libero iusto sequi at.
                </p>
            </a>



        </div>
    </div>
















    <!-- sosmed icon -->
    <div class="iconBox">
        <a href="https://api.whatsapp.com/send?phone=6285894227199&text=20%Hi,20%saya,20%ingin,20%melihat,20%formulir,20%tk-al,20%ikhlas." class="perIconBox wa">
            <i class="fab fa-whatsapp">Chat Whatsapp</i>
        </a>

        <a href="" class="perIconBox fb">
            <i class="fab fa-facebook-f"></i>
        </a>

        <a href="" class="perIconBox ig">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="" class="perIconBox yt">
            <i class="fab fa-youtube"></i>
        </a>

        <a href="" class="perIconBox linkin">
            <i class="fab fa-linkedin-in"></i>
        </a>
    </div>

    <div class="footer">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="my-4 text-white text-center">Contact Us</h4>

                    <div class="footerContactUs">

                        <div class="perFooterContactUs">
                            <i class="fas text-white fa-envelope"></i>
                            <p class="text-white">official@tkal-ikhlasdepok.com</p>
                        </div>

                        <div class="perFooterContactUs">
                            <i class="fas text-white fa-phone-alt"></i>
                            <p class="text-white">08212871232</p>
                        </div>

                        <div class="perFooterContactUs">
                            <i class="fas text-white fa-road"></i>
                            <p class="text-white">Jl. Raya Merdeka Raya Nomor 1, Kec. Mekar Jaya - Kot. Depok</p>
                        </div>

                    </div>

                </div>






                <div class="col-md-4">
                    <h4 class="my-4 text-center text-white">About</h4>
                    <div class="footerAbout">
                        <a href="" class="text-white">Artikel</a>
                        <a href="" class="text-white">Galeri</a>
                        <a href="" class="text-white">Contact Us</a>
                        <a href="" class="text-white">Ekstrakulikuler</a>
                    </div>
                </div>


                <div class="col-md-4 text-center">
                    <h4 class="my-4 text-white">Newsletter</h4>
                    <form>

                        <div class="form-group">
                            <input class="form-control" type="search" placeholder="Example@gmail.com"
                                aria-label="Search">
                            <button class="btn btn-primary btn-newsletter" type="submit">Kirim</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>












    <div class="footerCopyright">
        <p class="text-white">
            <i class="far fa-copyright"></i>2021 By : <span>Cyrio Fathan Thambia / Rivaldi Wahyu Santoso</span>.&nbsp; Inspired by <a
                href="https://www.acsjakarta.sch.id/">ACS
                Jakarta</a>
        </p>
    </div>




    <script src="{{asset('alikhlas/js/script.js')}}"></script>
</body>

</html>