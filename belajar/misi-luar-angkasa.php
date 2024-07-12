<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Misi Luar Angkasa Manusia"; 
            include '../head.php';
        ?>
        <link href="/KosmosKita/css/tata-surya-kita.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Bagian Atas -->
        <?php
            $active = "belajar"; 
            $header_title = "Misi Luar Angkasa Manusia";
            $header_subtitle = "Disini kamu dapat mengenali misi-misi luar angkasa manusia yang terkenal dan memberikan dampak yang besar dalam dunia astronomi, antariksa, dan bidang terkait";
            $header_image_credit = "Gambar oleh NASA | PIA25778: PREFIRE Satellite Illustration";
            $background_image_url = "/KosmosKita/assets/img/PIA25778\ PREFIRE\ Satellite\ Illustration.jpg";
            include '../top.php';
        ?>

        <!-- Konten -->
        <section class="page-section portfolio" id="portfolio" style="background-color: black;">
            <div class="container">
                <!-- Fitur -->
                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/sputnik1.png" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Sputnik 1 (4 Oktober 1957)</h1>
                        <h2>Peluncuran satelit buatan pertama oleh Uni Soviet, menandai awal era luar angkasa. Sputnik 1 mengorbit Bumi dan mengirim sinyal radio yang dapat diterima oleh stasiun di Bumi.</h2>
                    </div>
                </div>

                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/vostok1.jpg" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Vostok 1 (12 April 1961)</h1>
                        <h2>Penerbangan luar angkasa berawak pertama oleh Uni Soviet dengan kosmonot Yuri Gagarin. Gagarin menjadi manusia pertama yang mengorbit Bumi.</h2>
                    </div>
                </div>

                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/mariner2.jpg" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Mariner 2 (14 Desember 1962)</h1>
                        <h2>Misi luar angkasa Amerika Serikat yang pertama kali berhasil melewati dan mengirim data dari Venus.</h2>
                    </div>
                </div>

                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/luna9.jpg" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Luna 9 (3 Februari 1966)</h1>
                        <h2>Misi luar angkasa Uni Soviet yang pertama kali berhasil mendarat di permukaan Bulan dan mengirimkan gambar dari permukaan Bulan.</h2>
                    </div>
                </div>

                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/apollo11.webp" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Apollo 11 (20 Juli 1969)</h1>
                        <h2>Misi luar angkasa Amerika Serikat yang pertama kali berhasil mendaratkan manusia di Bulan. Astronot Neil Armstrong dan Edwin "Buzz" Aldrin berjalan di permukaan Bulan, sementara Michael Collins tetap di orbit.</h2>
                    </div>
                </div>

                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/mars3.avif" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Mars 3 (2 Desember 1971)</h1>
                        <h2>Misi luar angkasa Uni Soviet yang pertama kali berhasil mendarat di Mars dan mengirimkan data dari permukaan Mars, meskipun hanya bertahan selama 20 detik.</h2>
                    </div>
                </div>

                <br><br><hr style="color: white;"><br><br>

                <h1 class="text-center" style="color: white;"><i>Dan masih banyak lagi...</i></h1>

                <br><br><hr style="color: white;">
                
                <!-- 
                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1></h1>
                        <h2></h2>
                    </div>
                </div>
                -->

                <!-- Kuis -->
                <?php
                $questions = [
                    "q1" => [
                        "question" => "Negara yang berhasil mengirim manusia ke luar angkasa pertama kali dan berhasil mengorbit Bumi adalah...",
                        "choices" => [
                            "A" => "Amerika Serikat",
                            "B" => "Uni Soviet",
                            "C" => "Jepang",
                            "D" => "Jerman"
                        ]
                    ],
                    "q2" => [
                        "question" => "Misi pendaratan manusia ke Bulan untuk pertama kalinya bernama...",
                        "choices" => [
                            "A" => "Vostok 1",
                            "B" => "Mariner 2",
                            "C" => "Apollo 11",
                            "D" => "Challenger"
                        ]
                    ],
                    "q3" => [
                        "question" => "Misi luar angkasa Luna 9 bertujuan ke...",
                        "choices" => [
                            "A" => "Mars",
                            "B" => "Venus",
                            "C" => "Merkurius",
                            "D" => "Bulan"
                        ]
                    ],
                    "q4" => [
                        "question" => "Orang yang berhasil ke luar angkasa untuk pertama kalinya serta mengorbit Bumi bernama...",
                        "choices" => [
                            "A" => "Neil Armstrong",
                            "B" => "Yuri Gagarin",
                            "C" => "Elon Musk",
                            "D" => "Nikola Tesla"
                        ]
                    ],
                    "q5" => [
                        "question" => "Berapa banyak orang yang berjalan di permukaan Bulan pada misi Apollo 11?",
                        "choices" => [
                            "A" => "1",
                            "B" => "2",
                            "C" => "3",
                            "D" => "4"
                        ]
                    ],
                ];

                $answers = [
                    "q1" => "B",
                    "q2" => "C",
                    "q3" => "D",
                    "q4" => "B",
                    "q5" => "B",
                ];

                $tryAgainHref = "misi-luar-angkasa.php";
                $textColor = "white";

                include 'quiz.php';
                ?>
            </div>
        </section>

        <!-- Bagian Bawah -->
        <?php
            $quote = "Kita tidak mempertanyakan apa guna burung berkicau, sebab kicauan adalah kenikmatan mereka semenjak mereka diciptakan untuk berkicau.<br><br>Kita pun semestinya tidak mempertanyakan mengapa manusia bersusah-payah menyingkap rahasia langit....<br><br>Keanekaragaman fenomena Alam sungguh luar biasa, dan harta karun yang tersembunyi di langit begitu banyak dan tertata dengan sangat baik sehingga akal manusia tidak akan pernah kekurangan nutrisi segar.";
            $name = "Johannes Kepler, kutipan dari Mysterium Cosmographicum";
            $year = "1571 - 1630";
            $occupation = "Astronomer";
            $credit = "Gambar oleh NASA | PIA25434: Orion Nebula in Infrared";
            $background_image_url = "/KosmosKita/assets/img/PIA25434\ Orion\ Nebula\ in\ Infrared.jpg";
            include '../bottom.php';
        ?>
    </body>
</html>
