<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Tentang KosmosKita"; 
            include 'head.php';
        ?>
    </head>
    <body>
        <!-- Bagian Atas -->
        <?php
            $active = "tentang"; 
            $header_title = "Tentang KosmosKita";
            $header_subtitle = "Halaman ini berisi informasi mengenai situs web KosmosKita";
            $header_image_credit = "Gambar oleh NASA | PIA25691: NASA's Juno Mission Captures Swirls in Jovian Storms";
            $background_image_url = "/KosmosKita/assets/img/PIA25691\ NASA\'s\ Juno\ Mission\ Captures\ Swirls\ in\ Jovian\ Storms.jpg";
            include 'top.php';
        ?>

        <!-- Konten -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <h1>Apa itu KosmosKita?</h1>
                <hr>
                <h6>KosmosKita adalah sebuah situs web yang dibuat secara khusus untuk pembelajaran astronomi untuk masyarakat Indonesia. KosmosKita dibangun oleh Ananda Shaquille Farell. KosmosKita hadir untuk masyarakat Indonesia dengan tujuan untuk menyebarluaskan pengetahuan astronomi yang benar. Tentunya, dengan begitu, harapannya dapat ikut serta memajukan astronomi di Indonesia.</h6>
                <br>
                <h6>Informasi-informasi yang disajikan di situs web ini tidak diambil secara sembarangan, melainkan dari sumber-sumber yang aman, terkenal, dan terpercaya, seperti:</h6>
                <h6><ul>
                    <li>NASA</li>
                    <li>Dokumen "Our Solar System" oleh NASA</li>
                    <li>Buku Kosmos (Cosmos) karya Carl Sagan yang telah diterjemahkan oleh Ratna Satyaningsih</li>
                    <li>Buku Astrofisika untuk Orang Sibuk (Astrophysics for People in a Hurry) karya Neil deGrasse Tyson yang telah diterjemahkan oleh Zia Anshor</li>
                    <li>Buku Sejarah Singkat Waktu (A Brief History of Time) karya Stephen Hawking yang telah diterjemahkan oleh Zia Anshor</li>
                    <li>dan masih banyak lagi...</li>
                </ul></h6>
                <br>
                <br>
                <br>
                <h1>Fitur apa saja yang disediakan KosmosKita?</h1>
                <hr>
                <h6>Berikut ini adalah fitur-fitur yang dapat kamu gunakan:</h6>
                <h6><ul>
                    <li>Belajar Astronomi</li>
                    <li>Kalkulator Jarak</li>
                    <li>Kalkulator Volume Benda Langit</li>
                    <li>Astronomy Picture of the Day - APOD (NASA)</li>
                    <li>Berita dari Dunia Astronomi (Bahasa Inggris)</li>
                    <li>Kabar Astronomi</li>
                    <li>Fakta Menarik</li>
                </ul></h6>
                <br>
                <br>
                <br>
                <h1>Hubungi KosmosKita</h1>
                <hr>
                <!-- Form -->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <br>
                        <h6>Silakan lengkapi kolom di bawah ini.</h6>
                        <form target="_blank" action="https://formsubmit.co/anshafarell@gmail.com" method="POST">
                            <div class="form-group">
                              <div class="form-row">
                                <div class="col">
                                  <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                                </div>
                                <br>
                                <div class="col">
                                  <input type="email" name="email" class="form-control" placeholder="Alamat Email" required>
                                </div>
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <textarea placeholder="Pesan Anda" class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-lg btn-dark btn-block">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bagian Bawah -->
        <?php
            $quote = "Benarkah ada banyak dunia, ataukah hanya ada satu dunia? Ini adalah salah satu pertanyaan paling mulia dan agung dalam penyelidikan alam.";
            $name = "Albertus Magnus";
            $year = "skt. 1200 - 1280";
            $occupation = "Ilmuwan, Filsuf, Uskup";
            $credit = "Gambar oleh NASA | PIA23131: Lunar Flashlight (Artist's Concept)";
            $background_image_url = "/KosmosKita/assets/img/PIA23131\ Lunar\ Flashlight\ \(Artist\'s\ Concept\).jpg";
            include 'bottom.php';
        ?>
    </body>
</html>