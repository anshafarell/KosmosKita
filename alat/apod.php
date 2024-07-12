<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Astronomy Picture of the Day"; 
            include '../head.php';
        ?>
    </head>
    <body id="page-top">
        <!-- Bagian Atas -->
        <?php
            $active = "alat"; 
            $header_title = "Astronomy Picture of the Day";
            $header_subtitle = "Halaman ini menampilkan konten/media astronomi yang terus berubah setiap hari, ditenagai oleh NASA (Amerika Serikat)";
            $header_image_credit = "Gambar oleh NASA | PIA25778: PREFIRE Satellite Illustration";
            $background_image_url = "/KosmosKita/assets/img/PIA25778\ PREFIRE\ Satellite\ Illustration.jpg";
            include '../top.php';
        ?>

        <!-- Konten -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <div id="apod-container">
                    <div id="apod-content"></div>
                    <div id="media-container"></div>
                </div>
            
                <script>
                    // Fungsi untuk fetch data dari APOD NASA API
                    function fetchAPOD() {
                        // API endpoint
                        var apiUrl = 'https://api.nasa.gov/planetary/apod?api_key=CVto1qBrI1LWOTI9WL9nJRgk7ZQPM4Ay8HpIUVT2';
            
                        // Fetch data dari API
                        fetch(apiUrl)
                            .then(response => response.json())
                            .then(data => {
                                // Update konten HTML dengan data yang di-fetch
                                document.getElementById('apod-content').innerHTML = `
                                    <h2>${data.title}</h2>
                                    <p><strong>Date:</strong> ${data.date}</p>
                                    <p>${data.explanation}</p>
                                    <p><strong>Media Type:</strong> ${data.media_type}</p>
                                    <p><strong>URL:</strong> <a href="${data.url}" target="_blank">${data.title}</a></p>
                                    <p><strong>Copyright:</strong> ${data.copyright}</p>
                                `;
            
                                // Memeriksa apakah tipe media adalah sebuah gambar
                                if (data.media_type === 'image') {
                                    // Membuat sebuah image element
                                    var img = document.createElement('img');
                                    img.setAttribute('src', data.url);
                                    img.setAttribute('alt', data.title);
                                    img.setAttribute('width', '100%');
                                    
                                    // Untuk append gambar ke media-container div
                                    document.getElementById('media-container').appendChild(img);
                                }
                                // Memeriksa apakah tipe media adalah sebuah video
                                else if (data.media_type === 'video') {
                                    // Membuat sebuah iframe element untuk video
                                    var iframe = document.createElement('iframe');
                                    iframe.setAttribute('src', data.url);
                                    // iframe.setAttribute('width', '560');
                                    iframe.setAttribute('width', '100%');
                                    iframe.setAttribute('height', '315');
                                    iframe.setAttribute('frameborder', '0');
                                    iframe.setAttribute('allowfullscreen', '');
                                    
                                    // Untuk append iframe ke media-container div
                                    document.getElementById('media-container').appendChild(iframe);
                                }
                            })
                            .catch(error => {
                                console.error('Error fetching data:', error);
                            });
                    }
            
                    // Memanggil fungsi fetchAPOD ketika halaman dimuat
                    window.onload = fetchAPOD;
                </script>
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
