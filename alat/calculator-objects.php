<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Kalkulator Volume Benda Langit"; 
            include '../head.php';
        ?>
        <link href="../css/calculator-objects.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Bagian Atas -->
        <?php
            $active = "alat"; 
            $header_title = "Kalkulator Volume Benda Langit";
            $header_subtitle = "Kalkulator ini berfungsi untuk membandingkan ukuran volume benda langit";
            $header_image_credit = "Gambar oleh NASA | PIA25778: PREFIRE Satellite Illustration";
            $background_image_url = "/KosmosKita/assets/img/PIA25778\ PREFIRE\ Satellite\ Illustration.jpg";
            include '../top.php';
        ?>

        <!-- Konten -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <div id="converter">
                    <div class="input-row">
                        <select id="fromObject">
                            <option value="matahari">Matahari</option>
                            <option value="bumi">Bumi</option>
                            <option value="bulan">Bulan</option>
                            <option value="mars">Mars</option>
                            <option value="jupiter">Jupiter</option>
                            <option value="saturnus">Saturnus</option>
                        </select>
                        <input type="number" id="fromValue" placeholder="Masukkan jumlah...">
                    </div>
                    <div class="output-row">
                        <select id="toObject">
                            <option value="matahari">Matahari</option>
                            <option value="bumi">Bumi</option>
                            <option value="bulan">Bulan</option>
                            <option value="mars">Mars</option>
                            <option value="jupiter">Jupiter</option>
                            <option value="saturnus">Saturnus</option>
                        </select>
                        <p id="result"></p>
                    </div>
                </div>
                
                <script>
                document.addEventListener("DOMContentLoaded", function() {
                    // Menambah event listeners ke input fields
                    document.getElementById("fromValue").addEventListener("input", convert);
                    document.getElementById("fromObject").addEventListener("change", convert);
                    document.getElementById("toObject").addEventListener("change", convert);
                
                    // Konversi awal
                    convert();
                });
                
                function convert() {
                    var fromObject = document.getElementById("fromObject").value;
                    var toObject = document.getElementById("toObject").value;
                    var fromValue = parseFloat(document.getElementById("fromValue").value);
                
                    if (isNaN(fromValue)) {
                        document.getElementById("result").innerText = "";
                        return;
                    }
                
                    // Volume dalam kilometer kubik (km³)
                    var volumes = {
                        matahari: 1.41e18,
                        bumi: 1.08e12,
                        bulan: 2.19e10,
                        mars: 1.63e11,
                        jupiter: 1.43e15,
                        saturnus: 8.27e14
                    };
                
                    var result = (fromValue * volumes[fromObject]) / volumes[toObject];
                
                    document.getElementById("result").innerText = result.toFixed(2) + " " + toObject;
                }
                </script>

                <br>
                <br>
                <br>
                <h1>Tentang Kalkulator Ini</h1>
                <hr>
                <h4>Fungsi</h4>
                <p>Kalkulator ini berfungsi untuk menghitung berapa banyak objek yang dapat "muat" di suatu objek lainnya. Pertanyaan seperti, "Satu matahari dapat memuat berapa bumi?" dapat dijawab oleh kalkulator ini. Perhitungan ini didasarkan pada volume objek.</p>
                <br>
                <h4>Berapa Volume Benda Langit?</h4>
                <p>Berikut ini adalah volume dari benda langit yang digunakan dalam kalkulator:</p>
                <ul>
                    <li>Matahari ≈ 1.409.300.000 km kubik</li>
                    <li>Bumi ≈ 1.083,21 km kubik</li>
                    <li>Bulan ≈ 21,958 km kubik</li>
                    <li>Mars ≈ 163,18 km kubik</li>
                    <li>Jupiter ≈ 1.431.280 km kubik</li>
                    <li>Saturnus ≈ 827.130 km kubik</li>
                </ul>
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
