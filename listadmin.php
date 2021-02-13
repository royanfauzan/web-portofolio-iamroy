<?php include("config.php"); ?>

<?php
session_start();
if(isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,800;1,300;1,400;1,800&family=Roboto:ital,wght@0,400;0,900;1,900&display=swap" rel="stylesheet">
    <title>Royan Fauzan</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
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
    <!-- <div class="blok1">
        <div class="inner-blok50">
            <div class="wrapper">
                <h1>I</h1>
                <h1>'M</h1>
            </div>
            <h1>&nbsp;ROY</h1>
        </div>
        <div class="inner-blok40">
            <p>Digital Painter &nbsp;</p>
            <p>& &nbsp;</p>
            <p>Web Designer</p>
        </div>
        <div class="inner-blok10 flex tengah-hor">
            <a href="#id_profile" class="tombol-next flex">
                <p>&nbsp;MORE&nbsp;</p>
                <img src="image/icon/panah.png" alt="PANAH"> 
            </a>
        </div> 
    </div> -->
    
    <div class="blok2" id="luar-tentang">
        <div class="judul">
            <h2 id="jud-tentang">Guest Book</h2>
        </div>
        
        <div class="penengah profile-box tengah-vertical">
            
            <div class="tentang flex tengah-hor">
                
                
                <div class="tulisan penengah">
                    <!-- <h3>this site</h3>
                    <p>is</p> -->
                    <!-- <br> -->
                    <div class="kotak-tulisan">
                        <p>"This site is spesificly made for the 
                            purpose of promoting my previous 
                            works and project's i've been 
                            involved throughout my career, Feel Free to <b>explore</b>, 
                            most importantly <b>Enjoy your day</b>.. "</p>
                    </div>
                    <div class="kotak-tulisan">
                        <table>
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Profesi</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
                            $query = "SELECT * FROM guestbook ORDER BY id ASC";
                            $result = mysqli_query($db, $query);
                            //mengecek apakah ada error ketika menjalankan query
                            if(!$result){
                                die ("Query Error: ".mysqli_errno($db).
                                " - ".mysqli_error($db));
                            }

                            //buat perulangan untuk element tabel dari data mahasiswa
                            $no = 1; //variabel untuk membuat nomor urut
                            // hasil query akan disimpan dalam variabel $data dalam bentuk array
                            // kemudian dicetak dengan perulangan while
                            while($row = mysqli_fetch_assoc($result))
                            {
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php 
                                        if(strlen($row['nama'])>11){
                                            echo substr($row['nama'], 0, 11).'..'; 
                                        }else{
                                            echo $row['nama'];
                                        }
                                    ?></td>
                                <td><?php 
                                        if(strlen($row['profesi'])>8){
                                            echo substr($row['profesi'], 0, 8).'..'; 
                                        }else{
                                            echo $row['profesi'];
                                        }
                                    ?></td>
                                <td>
                                    <a href="edit-testi.php?id=<?php echo $row['id']; ?>">Edit</a> |
                                    <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                                
                            <?php
                                $no++; //untuk nomor urut terus bertambah 1
                            }
                            ?>
                            </tbody>
                        </table>

                        <a class="btn-simpan" href="logout.php">Logout</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!-- <div class="blok3 flex tengah-hor">
        <div class="judul2 flex tengah-ver tengah-hor res-hor">
            <h2> MY WORKS </h2>
        </div>
        <div class="pemisah">
            
        </div>
        <div class="porto">
            <div class="bungkus flex tengah-hor tengah-ver">
                <div class="inner-b1">
                    <div class="inner-b80 flex tengah-hor tengah-ver">
                        <img src="image/portofolio/1.jpg" alt="Face">
                    </div>
                    <div class="inner-b20 res-hor2">
                        <img src="image/portofolio/5.jpg" alt="Horor">
                    </div>
                </div>
                <div class="inner-b2 flex ver-spacing">
                    <div class="inner-b30 flex tengah-hor tengah-ver" >
                        <img src="image/portofolio/2.jpg" alt="Web 1">
                        <img src="image/portofolio/3.jpg" alt="Web 2">
                        <img src="image/portofolio/4.jpg" alt="Thug">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
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
</body>
</html>

<?php 
} else {
    echo '<script>window.location.replace("./listtamu.php");</script>';
} ?>