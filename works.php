<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/glide.core.min.css">
    <link rel="stylesheet" href="css/glide.theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,800;1,300;1,400;1,800&family=Roboto:ital,wght@0,400;0,900;1,900&display=swap" rel="stylesheet">
    <title>Royan Fauzan</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
</head>
<body>
    <nav class="navbar flex tengah-hor tengah-ver" id="navbar">
        <ul class="nav-items flex tengah-hor tengah-ver">
            <li> <a href="index.html">HOME</a> </li>
            <li> <a href="profile.html">Profile</a></li>
            <li><a href="works.php">Works</a></li>
            <li><a href="listtamu.php">Guest Book</a></li>
        </ul>
    </nav>
    <div class="blok1-sub">
        <div class="inner-blok50">
            <!-- <div class="wrapper">
                <h1>I</h1>
                <h1>'M</h1>
            </div> -->
            <h1>&nbsp;Works</h1>
        </div>
        <!-- <div class="inner-blok40">
            <p>Digital Painter &nbsp;</p>
            <p>& &nbsp;</p>
            <p>Web Designer</p>
        </div> -->
        <div class="inner-blok10 flex tengah-hor">
            <a href="#kuning" class="tombol-next flex">
                <p>&nbsp;MORE&nbsp;</p>
                <img src="image/icon/panah.png" alt="PANAH"> 
            </a>
        </div>
    </div>
    
    <!-- <div class="blok2" id="id_profile">
        <div class="judul">
            <h2>PROFILE</h2>
        </div>
        
        <div class="penengah profile-box tengah-vertical">
            
            <div class="profile flex tengah-hor">
                
                <div class="foto flex tengah-hor tengah-ver">
                    <img src="image/portofolio/foto.jpg" alt="">
                </div>
                <div class="tulisan">
                    <h3>Royan Fauzan</h3>
                    <p>20</p>
                    <br>
                    <p>"2nd year college student who has passion in both <b>Art</b> and <b>Technologies</b> "</p>
                </div>
            </div>
        </div>
    </div> -->
    
    <div class="blok3 flex tengah-hor tengah-ver" id="kuning">
        <div class="judul2 flex tengah-ver tengah-hor res-hor">
            <h2> My Works</h2>
        </div>
        <div class="pemisah">
            
        </div>
        <div class="porto">
            <div class="bungkus flex tengah-hor tengah-ver">
                <div class="gambar">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <img src="image/portofolio/1.jpg" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="image/portofolio/2.jpg" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="image/portofolio/3.jpg" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="image/portofolio/4.jpg" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="image/portofolio/5.jpg" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><<</button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">>></button>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <div class="blok-testi flex tengah-hor">
        <div class="jud-testi">
            <h2><u>Testimoni</u></h2>
        </div>
        <div class="bung-testi">
            <?php
            $sql = "SELECT * FROM guestbook";
            $query = mysqli_query($db, $sql);
            
            $kotak='<div class="testismon flex tengah-hor"><div class="glide__track" data-glide-el="track"><ul class="glide__slides">';
            $bullets = '<div class="glide__bullets" data-glide-el="controls[nav]">';
            $penghitung=0;
            while($siswa = mysqli_fetch_array($query)){
                $kotak.= <<<kotak
                    <li class="glide__slide">
                        <h3>{$siswa['nama']}</h3>
                        <p>"{$siswa['testimoni']}"</p>
                    </li>
                kotak;
                $bullets.=<<<bullets
                    <button class="glide__bullet" data-glide-dir="={$penghitung}"></button>
                    bullets;
                $penghitung++;
            }
            $kotak.="</ul></div>";
            $kotak.=$bullets."</div></div>";
            echo $kotak;
            ?>       
            </div>
    </div>
    
    <div class="blok4">
        <div class="judul">
            <h2>
                KEEP IN TOUCH
            </h2>
        </div>
            <div class="bung-kontak flex">
                <div class="kontak">
                    <div class="isi-kontak">
                        <div class="ikon flex tengah-ver tengah-hor">
                            <img src="image/icon/at.svg" alt="">
                        </div>
                        <p>Ruskipolski77@gmail.com</p>
                    </div>
                    <div class="isi-kontak">
                        <div class="ikon flex tengah-ver tengah-hor">
                            <img src="image/icon/whatsapp.svg" alt="">
                        </div>
                        <p>081234567891</p>
                    </div>
                    <div class="isi-kontak">
                        <div class="ikon  flex tengah-ver tengah-hor">
                            <img src="image/icon/instagram.svg" alt="">
                        </div>
                        <p>@Royan_f7</p>
                    </div>
                    <div class="isi-kontak">
                        <div class="ikon flex tengah-ver tengah-hor">
                            <img src="image/icon/envelope.svg" alt="">
                        </div>
                        <p>Jl.Diponegoro No.99x,Tabanan,Bali,82171</p>
                    </div>
                </div>
                <div class="special-item flex tengah-ver tengah-hor">
                    <img src="./image/icon/logo100.gif" alt="">
                        <script src="./js/kalender.js"></script>   
                </div>
                <div class="map ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.6243199111345!2d115.13846011433488!3d-8.535803788858345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23a553ccfbf65%3A0xcdda98f877d77ba9!2sJl.%20Tukad%20Yeh%20Nusa%2C%20Banjar%20Anyar%2C%20Kec.%20Kediri%2C%20Kabupaten%20Tabanan%2C%20Bali%2082121!5e0!3m2!1sid!2sid!4v1611989633627!5m2!1sid!2sid" width="300" height="230" margin-top="20" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                
            </div>
    </div>
    <div class="copyr">
        <p>&copy; 2020 - Royan Fauzan</p>
    </div>
    <!-- <footer>
        
    </footer> -->

    <script src="./js/main.js"></script>
    <script>
        new Glide('.gambar', {
            type:'carousel',
            autoplay:3000,
            perView:1.5,
            hoverpause:false
        }).mount()

        new Glide('.testismon', {
            autoplay:3500,
            perView:2.5,
            hoverpause:true
        }).mount();
    </script>
</body>
</html>