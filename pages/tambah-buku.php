<h1>Upload Buku Baru</h1>
<form method="post" action="../queries/Qupload.php" enctype="multipart/form-data">
    <div class="file-upload">
        <input type="file" id="file" class="file-input" multiple onchange="previewFiles()">
        <label for="file" class="file-label">
            <strong>pilih file</strong><span> atau jatuhkan file kesini</span>.
        </label>
        <div class="file-preview" id="file-preview">
            <p>tidak gambar yang terupload</p>
        </div>
    </div>
    <input name="title" type="text" placeholder="Judul buku" id="title">
    <input name="author" type="text" placeholder="Nama penulis" id="author">
    <input name="publisher" type="text" placeholder="Nama penerbit" id="publisher">
    <input name="year_published" type="date" placeholder="Tahun terbit" id="year_publisher">
    <select name="category" id="category">
        <optio value="Fiksi">Fiksi</optio  n>
        <option value="Non-Fiksi">Non-Fiksi</option>
        <option value="Buku Anak-Anak">Buku Anak-Anak</option>
        <option value="Buku Pendidikan">Buku Pendidikan</option>
        <option value="Komik & Manga">Komik & Manga</option>
        <option value="Agama & Spiritualitas">Agama & Spiritualitas</option>
        <option value="Hobi & Keterampilan">Agama & Spiritualitas</option>
        <option value="Travel">Travel</option>
    </select>
    <textarea name="description" placeholder="Deskripsi buku" id="description">
        
    </textarea>
</form>