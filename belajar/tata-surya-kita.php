<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Tata Surya Kita"; 
            include '../head.php';
        ?>
        <link href="/KosmosKita/css/tata-surya-kita.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Bagian Atas -->
        <?php
            $active = "belajar"; 
            $header_title = "Tata Surya Kita";
            $header_subtitle = "Halaman ini menampilkan informasi mengenai tata surya kita, tempat dimana kita tinggal.<br>Informasi bersumber dari dokumen NASA yang berjudul 'Our Solar System' dan sumber-sumber terpercaya lainnya.";
            $header_image_credit = "Gambar oleh NASA | PIA25778: PREFIRE Satellite Illustration";
            $background_image_url = "/KosmosKita/assets/img/PIA25778\ PREFIRE\ Satellite\ Illustration.jpg";
            include '../top.php';
        ?>

        <!-- Konten -->
        <section class="page-section portfolio" id="portfolio" style="background-color: black;">
            <div class="container">
                <!-- Fitur -->
                <h1 style="color: white;">Objek-Objek di Tata Surya Kita</h1>
                <hr style="color: white;">
                <br>
                <br>

                <!-- Objek-Objek di Tata Surya Kita -->
                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/matahari.jpg" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Matahari (Sun)</h1>
                        <h2>Matahari, sebuah bola besar yang sebagian besar terdiri dari gas terionisasi, mendukung kehidupan di Bumi. Hubungan dan interaksi antara Matahari dan Bumi menentukan musim, arus laut, cuaca, dan iklim.</h2>
                        <p>Informasi:</p>
                        <ul>
                            <li>Radius Ekuator: 695.500 km</li>
                            <li>Waktu Rotasi di Ekuator: 26,8 hari</li>
                            <li>Waktu Rotasi di Kedua Kutub: 36 hari</li>
                            <li>Massa: 1,989 x 10^30 kg</li>
                            <li>Temperatur: 5.500 °C (Fotosfer)</li>
                        </ul>
                    </div>
                </div>

                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/merkurius.jpg" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Merkurius (Mercury)</h1>
                        <h2>Merkurius adalah planet yang terdekat dengan matahari. Permukaan Merkurius mirip dengan Bulan, yang dipenuhi banyak kawah akibat tabrakan dengan meteoroid dan komet.</h2>
                        <p>Informasi:</p>
                        <ul>
                            <li>Radius Ekuator: 2.440 km</li>
                            <li>Waktu Rotasi: 58,65 hari Bumi</li>
                            <li>Waktu Orbit: 87,97 hari Bumi</li>
                            <li>Massa: 0,055 dari massa Bumi</li>
                            <li>Gravitasi: 0,38 dari gravitasi Bumi</li>
                            <li>Temperatur: -180 hingga 430 °C</li>
                            <li>Satelit Alami: 0 buah</li>
                            <li>Cincin: 0 buah</li>
                        </ul>
                    </div>
                </div>

                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/venus.jpg" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Venus (Venus)</h1>
                        <h2>Venus merupakan salah satu planet yang terdekat dengan Bumi. Venus dan Bumi memiliki kemiripan dalam hal ukuran, massa, kepadatan, komposisi, dan gravitasi.</h2>
                        <p>Informasi:</p>
                        <ul>
                            <li>Radius Ekuator: 6.052 km</li>
                            <li>Waktu Rotasi: 243,02 hari Bumi (retrograde)</li>
                            <li>Waktu Orbit: 224,70 hari Bumi</li>
                            <li>Massa: 0,815 dari Bumi</li>
                            <li>Gravitasi: 0,91 dari Bumi</li>
                            <li>Temperatur: 470 °C (permukaan)</li>
                            <li>Satelit Alami: 0 buah</li>
                            <li>Cincin: 0 buah</li>
                        </ul>
                    </div>
                </div>
                
                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/bumi.jpg" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Bumi (Earth)</h1>
                        <h2>Bumi adalah sebuah planet yang merupakan tempat tinggal kita. Bumi adalah satu-satunya planet yang saat ini diketahui memiliki kehidupan.</h2>
                        <p>Informasi:</p>
                        <ul>
                            <li>Radius Ekuator: 6.378 km</li>
                            <li>Waktu Rotasi: 23,45 jam</li>
                            <li>Waktu Orbit: 365,26 hari</li>
                            <li>Massa: 5,9737 x 10^24 kg</li>
                            <li>Gravitasi: 9,8 m/detik^2 (rata-rata global)</li>
                            <li>Temperatur: -88 hingga 58 °C</li>
                            <li>Satelit Alami: 1 buah (Bulan)</li>
                            <li>Cincin: 0 buah</li>
                        </ul>
                    </div>
                </div>

                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/bulan.jpg" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Bulan (Moon)</h1>
                        <h2>Bulan merupakan satelit alami Bumi. Teori utama asal usul Bulan adalah bahwa benda seukuran Mars bertabrakan dengan Bumi sekitar 4,5 miliar tahun yang lalu, dan puing-puing yang dihasilkan baik dari Bumi maupun benda yang menabraknya terakumulasi membentuk satelit alami kita.</h2>
                        <p>Informasi:</p>
                        <ul>
                            <li>Radius Ekuator: 1.737,4 km</li>
                            <li>Waktu Rotasi: 27,32 hari Bumi</li>
                            <li>Waktu Orbit: 27,32 hari Bumi</li>
                            <li>Massa: 0,0123 dari Bumi</li>
                            <li>Gravitasi: 0,166 dari Bumi</li>
                            <li>Temperatur: -248 hingga 123 °C</li>
                        </ul>
                    </div>
                </div>

                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/mars.jpg" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Mars (Mars)</h1>
                        <h2>Mars adalah sebuah planet yang merupakan salah satu planet tetangga yang terdekat dengan bumi. Ciri khas dari planet ini adalah ia memiliki warna kemerahan.</h2>
                        <p>Informasi:</p>
                        <ul>
                            <li>Radius Ekuator: 3.397 km</li>
                            <li>Waktu Rotasi: 24,62 jam</li>
                            <li>Waktu Orbit: 686,98 hari Bumi</li>
                            <li>Massa: 0,10744 dari massa Bumi</li>
                            <li>Gravitasi: 0,38 dari gravitasi Bumi</li>
                            <li>Temperatur: -87 hingga -5 °C</li>
                            <li>Satelit Alami: 2 buah</li>
                            <li>Cincin: 0</li>
                        </ul>
                    </div>
                </div>
                
                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/jupiter.jpg" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Jupiter (Jupiter)</h1>
                        <h2>Jupiter adalah planet terbesar dan paling masif di tata surya kita, mengandung lebih dari dua kali jumlah materi gabungan benda-benda lain yang mengorbit Matahari kita. Sebagian besar materi yang tersisa setelah pembentukan Matahari berpindah ke Jupiter, membentuk sejenis planet yang disebut raksasa gas.</h2>
                        <p>Informasi:</p>
                        <ul>
                            <li>Radius Ekuator: 71.492 km</li>
                            <li>Waktu Rotasi: 9,92 jam</li>
                            <li>Waktu Orbit: 11,8565 tahun Bumi (4.330,6 hari Bumi)</li>
                            <li>Massa: 317,82 dari Bumi</li>
                            <li>Gravitasi: 20,87 m/detik^2</li>
                            <li>Temperatur: -108 °C (temperatur efektif pada 1 bar)</li>
                            <li>Satelit Alami: 50 bauh (yang diketahui)</li>
                            <li>Cincin: 1 buah dengan 3 komponen besar</li>
                        </ul>
                    </div>
                </div>
                
                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/saturnus.jpg" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Saturnus (Saturn)</h1>
                        <h2>Saturnus adalah salah satu planet di tata surya kita yang terkenal dengan cincinnya. Dengan teleskop yang cukup bagus, kita dapat melihat Saturnus dan cincinnya dari Bumi.</h2>
                        <p>Informasi:</p>
                        <ul>
                            <li>Radius Ekuator: 60.268 km</li>
                            <li>Waktu Rotasi: 10,656 jam</li>
                            <li>Waktu Orbit: 29,4 tahun Bumi (10.755,7 hari Bumi)</li>
                            <li>Massa: 95,16 dari Bumi</li>
                            <li>Gravitasi: 7,207 m/detik^2</li>
                            <li>Temperatur Efektif: -178 °C</li>
                            <li>Satelit Alami: 53 buah (yang diketahui)</li>
                            <li>Cincin: 7 cincin utama (C, B, A, D, F, G, E)</li>
                        </ul>
                    </div>
                </div>

                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/uranus.jpg" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Uranus (Uranus)</h1>
                        <h2>Planet pertama yang ditemukan dengan bantuan teleskop, Uranus ditemukan pada tahun 1781 oleh astronom William Herschel, meskipun awalnya ia mengira itu adalah komet atau bintang. Planet ketujuh dari Matahari ini sangat jauh sehingga membutuhkan waktu 84 tahun untuk menyelesaikan satu orbit.</h2>
                        <p>Informasi:</p>
                        <ul>
                            <li>Radius Ekuator: 25.559 km</li>
                            <li>Waktu Rotasi: 17,24 jam (retrograde)</li>
                            <li>Waktu Orbit: 84,02 tahun Bumi (30.687,2 hari Bumi)</li>
                            <li>Massa: 13,371 dari Bumi</li>
                            <li>Gravitasi: 8,43 m/detik^2</li>
                            <li>Temperatur Efektif: -216 °C</li>
                            <li>Satelit Alami: 27 buah (yang diketahui)</li>
                            <li>Cincin: 13 buah (Zeta, Six, Five, Four, Alpha, Beta, Eta, Gamma, Delta, Lambda, Epsilon, Nu, Mu)</li>
                        </ul>
                    </div>
                </div>

                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/neptunus.png" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1>Neptunus (Neptune)</h1>
                        <h2>Raksasa es Neptunus adalah planet pertama yang ditemukan melalui prediksi matematis, bukan melalui pengamatan biasa terhadap langit. (Galileo telah mencatatnya sebagai bintang tetap selama pengamatan dengan teleskop kecilnya pada tahun 1612 dan 1613.)</h2>
                        <p>Informasi:</p>
                        <ul>
                            <li>Radius Ekuator: 24.764 km</li>
                            <li>Waktu Rotasi: 16,11 jam</li>
                            <li>Waktu Orbit: 164,79 tahun Bumi (60.190 hari Bumi)</li>
                            <li>Massa: 17,147 dari Bumi</li>
                            <li>Gravitasi: 10,71 m/detik^2</li>
                            <li>Temperatur Efektif: -214 °C</li>
                            <li>Satelit Alami: 13 buah (yang diketahui)</li>
                            <li>Cincin: 6 buah (Galle, Arago, Lassell, Le Verrier, cincin yang tidak disebutkan namanya seorbital dengan bulan Galatea, Adams)</li>
                        </ul>
                    </div>
                </div>

                <br><br>

                <h1 class="text-center" style="color: white;"><i>Dan masih banyak lagi...</i></h1>
                
                <!-- 
                <br><br><hr style="color: white;"><br><br>

                <div class="item-container">
                    <div class="item-left-side" style="background-color: black;">
                        <img src="/KosmosKita/assets/img/" alt="Image" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="item-right-side" style="background-color: black; color: white;">
                        <h1></h1>
                        <h2></h2>
                        <p>Informasi:</p>
                        <ul>
                            <li>Radius Ekuator:</li>
                            <li>Waktu Rotasi:</li>
                            <li>Waktu Orbit:</li>
                            <li>Massa:</li>
                            <li>Gravitasi:</li>
                            <li>Temperatur: °C</li>
                            <li>Satelit Alami:</li>
                            <li>Cincin:</li>
                        </ul>
                    </div>
                </div>
                -->
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1 style="color: white;">Skala Tata Surya Kita</h1>
                <hr style="color: white;">
                <br>
                <br>
                <img src="/KosmosKita/assets/img/sstoscale.gif" alt="Image" style="width: 100%; max-height: 100%;">
                <p style="color: white; word-wrap: break-word; overflow-wrap: break-word" class="text-center">Sumber: Solar System Size and Distance | NASA/JPL Edu | https://www.jpl.nasa.gov/edu/images/activities/sstoscale.gif</p>
                <br>
                <h5 style="color: white;">Animasi tersebut menggambarkan objek-objek yang terdapat di tata surya kita. Gambaran awal menunjukkan perbandingan ukuran objek yang sebenarnya, namun perbandingan jaraknya tidak berdasarkan yang sebenarnya. Gambaran akhir menunjukkan perbandingan jarak yang sebenarnya, namun perbandingan ukurannya tidak berdasarkan yang sebenarnya.</h5>
                <br>
                <h2 style="color: white;">Tonton penjelasannya oleh NASA disini:</h2>
                <br>
                <div style="text-align: center;">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/DMZ5WFRbSTc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- Kuis -->
                <?php
                $questions = [
                    "q1" => [
                        "question" => "Planet apa yang merupakan planet terdekat dari Matahari?",
                        "choices" => [
                            "A" => "Merkurius",
                            "B" => "Bumi",
                            "C" => "Jupiter",
                            "D" => "Neptunus"
                        ]
                    ],
                    "q2" => [
                        "question" => "Planet apa yang merupakan planet terbesar di Tata Surya kita?",
                        "choices" => [
                            "A" => "Bumi",
                            "B" => "Saturnus",
                            "C" => "Jupiter",
                            "D" => "Mars"
                        ]
                    ],
                    "q3" => [
                        "question" => "Planet apa yang merupakan planet pertama yang ditemukan melalui prediksi matematis, bukan melalui pengamatan biasa terhadap langit?",
                        "choices" => [
                            "A" => "Merkurius",
                            "B" => "Neptunus",
                            "C" => "Uranus",
                            "D" => "Venus"
                        ]
                    ],
                    "q4" => [
                        "question" => "Planet di bawah ini memiliki cincin, kecuali...",
                        "choices" => [
                            "A" => "Saturnus",
                            "B" => "Venus",
                            "C" => "Uranus",
                            "D" => "Neptunus"
                        ]
                    ],
                    "q5" => [
                        "question" => "Planet ... memiliki waktu rotasi yang hampir mirip dengan waktu rotasi Bumi.",
                        "choices" => [
                            "A" => "Merkurius",
                            "B" => "Eris",
                            "C" => "Mars",
                            "D" => "Haumea"
                        ]
                    ],
                ];

                $answers = [
                    "q1" => "A",
                    "q2" => "C",
                    "q3" => "B",
                    "q4" => "B",
                    "q5" => "C",
                ];

                $tryAgainHref = "tata-surya-kita.php";
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
