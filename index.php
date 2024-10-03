<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skinfa Online</title>
    <link rel="stylesheet" href="assets/css/style.css">
    </head>
<body>
    <div id="sidebar">
        <img src="assets/images/logo-skinfa.png" alt="logo-skinfa" width="200px">
        <ul class="nav">
            <li><a href="?page=beranda">Beranda</a></li>
            <li><a href="?page=tambah-buku">Tambah Buku</a></li>
        </ul>
    </div>
    <div id="mainside">
    <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'beranda':
                    require_once 'pages/beranda.php';
                    break;
                case 'tambah-buku':
                    require_once 'pages/tambah-buku.php';
                    break;
                default:
                    require_once '404.php';
                    break;
            }
        }else{
            require_once 'pages/beranda.php';
        }  
        ?>
    </div>

    <script src="assets/js/script.js">
        const fileInput = document.querySelector('.file-input');
const filePreview = document.querySelector('#file-preview');
const fileUpload = document.querySelector('.file-upload');

fileInput.addEventListener('change', showFilePreview);

// Drag and drop functionality
fileUpload.addEventListener('dragover', (e) => {
    e.preventDefault();
    fileUpload.style.backgroundColor = "#e9e9e9";
});

fileUpload.addEventListener('dragleave', (e) => {
    e.preventDefault();
    fileUpload.style.backgroundColor = "#f9f9f9";
});

fileUpload.addEventListener('drop', (e) => {
    e.preventDefault();
    fileUpload.style.backgroundColor = "#f9f9f9";
    fileInput.files = e.dataTransfer.files;
    showFilePreview();
});

function showFilePreview() {
    filePreview.innerHTML = '';  // Clear previous preview
    if (fileInput.files.length > 0) {
        Array.from(fileInput.files).forEach(file => {
            const fileReader = new FileReader();
            fileReader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                filePreview.appendChild(img);
            };
            fileReader.readAsDataURL(file);
        });
    } else {
        filePreview.innerHTML = '<p>No files uploaded yet</p>';
    }
}

    </script>
</body>
</html>