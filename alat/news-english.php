<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Berita dari Dunia Astronomi"; 
            include '../head.php';
        ?>
    </head>
    <body id="page-top">
        <!-- Bagian Atas -->
        <?php
            $active = "alat"; 
            $header_title = "Berita dari Dunia Astronomi";
            $header_subtitle = "Halaman ini menampilkan berita-berita terbaru seputar dunia astronomi, ditenagai oleh Spaceflight News API";
            $header_image_credit = "Gambar oleh NASA | CADRE Rover Prototypes Drive in Formation";
            $background_image_url = "/KosmosKita/assets/img/PIA22084\ Polluted\ White\ Dwarf\ \(Artist\'s\ Concept\).jpg";
            include '../top.php';
        ?>

        <!-- Konten -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <ul id="articles-list" class="article-list"></ul>

                <script>
                    // Fungsi untuk membuka URL artikel pada sebuah tab baru
                    function openArticle(url) {
                        window.open(url, '_blank');
                    }

                    // Format date function
                    function formatDate(dateString) {
                        const options = { year: 'numeric', month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit' };
                        return new Date(dateString).toLocaleDateString('en-US', options);
                    }

                    // Fetch data dari API
                    fetch('https://api.spaceflightnewsapi.net/v4/articles/?format=json')
                        .then(response => response.json())
                        .then(data => {
                            const articlesList = document.getElementById('articles-list');
                            data.results.forEach(article => {
                                // Membuat sebuah list item untuk setiap artikel
                                const listItem = document.createElement('li');
                                listItem.classList.add('article-item');

                                // Menambah click event untuk membuka URL artikel
                                listItem.addEventListener('click', () => {
                                    openArticle(article.url);
                                });

                                // Menambah thumbnail ke list item
                                if (article.image_url) {
                                    const thumbnail = document.createElement('img');
                                    thumbnail.classList.add('article-thumbnail');
                                    thumbnail.src = article.image_url;
                                    listItem.appendChild(thumbnail);
                                }

                                // Membuat div untuk rincian artikel
                                const detailsDiv = document.createElement('div');
                                detailsDiv.classList.add('article-details');

                                // Menambah judul ke rincian artikel
                                const title = document.createElement('div');
                                title.classList.add('article-title');
                                title.textContent = article.title;

                                // Menambah summary ke rincian artikel
                                const summary = document.createElement('div');
                                summary.classList.add('article-summary');
                                summary.textContent = article.summary;

                                // Menambah tanggal publikasi ke rincian artikel
                                const publishedDate = document.createElement('div');
                                publishedDate.classList.add('article-date');
                                publishedDate.textContent = 'Published: ' + formatDate(article.published_at);

                                // Menambah tanggal di-update/diperbarui ke rincian artikel
                                const updatedDate = document.createElement('div');
                                updatedDate.classList.add('article-date');
                                updatedDate.textContent = 'Updated: ' + formatDate(article.updated_at);

                                // Append judul, summary, tanggal publikasi, dan tanggal pembaruan ke rincian artikel
                                detailsDiv.appendChild(title);
                                detailsDiv.appendChild(summary);
                                detailsDiv.appendChild(publishedDate);
                                detailsDiv.appendChild(updatedDate);

                                // Append rincian artikel ke list item
                                listItem.appendChild(detailsDiv);

                                // Append list item ke articles list
                                articlesList.appendChild(listItem);
                            });
                        })
                        .catch(error => console.error('Error fetching articles:', error));
                </script>
            </div>    
        </section>

        <!-- Bagian Bawah -->
        <?php
            $quote = "Jumlah atom dalam satu molekul DNA Anda sama banyaknya dengan jumlah bintang di galaksi pada umumnya. Kita masing-masing adalah alam semesta kecil.";
            $name = "Neil deGrasse Tyson";
            $year = "1958 - ...";
            $occupation = "Astrofisikawan";
            $credit = "Gambar oleh NASA | PIA24579: Godzilla Nebula Imaged by Spitzer";
            $background_image_url = "/KosmosKita/assets/img/PIA24579\ Godzilla\ Nebula\ Imaged\ by\ Spitzer.jpg";
            include '../bottom.php';
        ?>
    </body>
</html>
