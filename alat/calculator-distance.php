<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Kalkulator Jarak"; 
            include '../head.php';
        ?>
        <link href="../css/calculator-distance.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Bagian Atas -->
        <?php
            $active = "alat"; 
            $header_title = "Kalkulator Jarak";
            $header_subtitle = "Kalkulator jarak pada halaman ini menggunakan satuan yang umumnya dipakai di dunia astronomi";
            $header_image_credit = "Gambar oleh NASA | PIA25778: PREFIRE Satellite Illustration";
            $background_image_url = "/KosmosKita/assets/img/PIA25778\ PREFIRE\ Satellite\ Illustration.jpg";
            include '../top.php';
        ?>

        <!-- Konten -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <div id="converter">
                    <div class="input-row">
                        <select id="fromUnit">
                            <option value="km">Kilometers (km)</option>
                            <option value="light_years">Light Years (ly)</option>
                            <option value="parsec">Parsecs (pc)</option>
                            <option value="astronomical_unit">Astronomical Units (AU)</option>
                            <option value="miles">Miles (mi)</option>
                        </select>
                        <input type="number" id="fromValue" placeholder="Masukkan nilai...">
                    </div>
                    <div class="output-row">
                        <select id="toUnit">
                            <option value="km">Kilometers (km)</option>
                            <option value="light_years">Light Years (ly)</option>
                            <option value="parsec">Parsecs (pc)</option>
                            <option value="astronomical_unit">Astronomical Units (AU)</option>
                            <option value="miles">Miles (mi)</option>
                        </select>
                        <p id="result"></p>
                    </div>
                </div>
                
                <script>
                document.addEventListener("DOMContentLoaded", function() {
                    // Menambah event listeners ke input fields
                    document.getElementById("fromValue").addEventListener("input", convert);
                    document.getElementById("fromUnit").addEventListener("change", convert);
                    document.getElementById("toUnit").addEventListener("change", convert);
                
                    // Konversi awal
                    convert();
                });
                
                function convert() {
                    var fromUnit = document.getElementById("fromUnit").value;
                    var toUnit = document.getElementById("toUnit").value;
                    var fromValue = parseFloat(document.getElementById("fromValue").value);
                
                    if (isNaN(fromValue)) {
                        document.getElementById("result").innerText = "";
                        return;
                    }
                
                    var conversionFactors = {
                        km: {
                            km: 1,
                            light_years: 1.057e-13,
                            parsec: 3.24078e-14,
                            astronomical_unit: 6.68459e-9,
                            miles: 0.621371
                        },
                        light_years: {
                            km: 9460730472580.8,
                            light_years: 1,
                            parsec: 0.306601,
                            astronomical_unit: 63241.1,
                            miles: 5878625373.39
                        },
                        parsec: {
                            km: 3.08568e+13,
                            light_years: 3.26156,
                            parsec: 1,
                            astronomical_unit: 206264.806,
                            miles: 19173521.7
                        },
                        astronomical_unit: {
                            km: 149597870.7,
                            light_years: 1.58125e-5,
                            parsec: 4.84814e-6,
                            astronomical_unit: 1,
                            miles: 92955887.6
                        },
                        miles: {
                            km: 1.60934,
                            light_years: 1.70108e-10,
                            parsec: 5.2155e-11,
                            astronomical_unit: 1.07578e-8,
                            miles: 1
                        }
                    };
                
                    var result = fromValue * conversionFactors[fromUnit][toUnit];
                
                    document.getElementById("result").innerText = result.toFixed(2) + " " + toUnit;
                }
                </script>

                <br>
                <br>
                <br>
                <h1>Apa makna satuan-satuan tersebut?</h1>
                <hr>
                <h4>Kilometers - Kilometer</h4>
                <p>Kilometer adalah satuan panjang dalam Sistem Satuan Internasional (SI). 1 kilometer sama dengan 1000 meter. Kilometer biasanya disingkat menjadi km. Singkatan Km (dengan huruf kapital K) tidak direkomendasikan oleh BIPM (Bureau international des poids et mesures, atau Biro Internasional untuk Ukuran dan Timbangan).</p>
                <p>Apabila dibandingkan dengan satuan panjang lainnya, 1 kilometer bernilai:</p>
                <ul>
                    <li>= 1000 meter</li>
                    <li>≈ 3281 kaki</li>
                    <li>≈ 1094 yard</li>
                    <li>≈ 0,621 mil</li>
                    <li>≈ 0,540 mil laut</li>
                    <li>≈ 6,68 x 10^-9 satuan astronomi</li>
                    <li>≈ 1,06 x 10^-13 tahun cahaya</li>
                    <li>≈ 3,24 x 10^-14 parsek</li>
                </ul>
                <br>
                <h4>Light Years - Tahun Cahaya</h4>
                <p>Light years atau tahun cahaya adalah salah satu unit atau satuan yang umumnya dipakai di dunia astronomi yang digunakan untuk menyatakan jarak astronomis. 1 tahun cahaya kurang lebih sama dengan 9,46 triliun kilometer atau 5,88 triliun mil. Berdasarkan definisi dari International Astronomical Union (IAU), tahun cahaya adalah jarak yang ditempuh cahaya dalam ruang hampa dalam satu tahun Julian (365,25 hari). Istilah tahun cahaya tidak boleh disalahartikan sebagai satuan waktu.</p>
                <br>
                <h4>Parsecs - Parsek</h4>
                <p>Parsecs atau parsek adalah sebuah satuan panjang (length) yang digunakan untuk mengukur jarak yang besar ke objek-objek astronomi di luar Tata Surya. 1 parsek kurang lebih sama dengan 3,26 tahun cahaya atau 206.265 satuan astronomi (astronomical units, AU), yakni 30,9 triliun kilometer (19,2 triliun mil).</p>
                <br>
                <h4>Astromical Units - Satuan Astronomi</h4>
                <p>Satuan astronomi adalah sebuah satuan jarak yang definisikan sama dengan 149.597.870.700 meter. Secara historis, satuan astronomi dipahami sebagai jarak rata-rata Bumi-Matahari (rata-rata aphelion dan perihelion Bumi), sebelum didefinisikan ulang secara modern pada tahun 2012.</p>
                <br>
                <h4>Miles - Mil</h4>
                <p>Miles atau mil, terkadang mil internasional atau statute mile untuk membedakannya dari mil lainnya, adalah satuan imperial Britania dan satuan jarak yang lazim di Amerika Serikat; keduanya didasarkan pada satuan panjang Inggris kuno yang sama dengan 5.280 kaki Inggris, atau 1.760 yard. Statute mile distandarisasi antara Persemakmuran Bangsa-Bangsa dan Amerika Serikat melalui perjanjian internasional pada tahun 1959, ketika secara resmi didefinisikan ulang sehubungan dengan satuan SI menjadi tepat 1.609,344 meter.</p>
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
