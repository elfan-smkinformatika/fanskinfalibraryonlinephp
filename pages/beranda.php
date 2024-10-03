<title>Home | Perpustakaan Skinfa Online</title>
<div class="starting-box">
    <h1 class="selamat">Selamat Datang Di Pepustakaan Online SKINFA</h1>
</div>
        <div class="show-galeriBook">
            <h1 class="title-req">Rekomendasi Buku</h1>
            <div class="wrap-card">
            <?php
                $queryGallery = mysqli_query($conn, "select * from gallery");
                while($data = mysqli_fetch_assoc($queryGallery)){
                $image = $data['image'];
                $title = $data['title'];
             ?>
                <div class="card">
                    <img src="uploads/cvraboutyou.jpg" alt="book" class="card-img">
                    <h3 class="card-judul"></h3>
                    <h4 class="card-penulis"></h4>
                </div>
            <?php
                 }   
             ?>
            </div>
        </div>
