function previewFiles() {
    const input = document.getElementById('file');
    const preview = document.getElementById('file-preview');
    const files = input.files;
    let fileList = '';

    if (files.length === 0) {
        preview.innerHTML = '<p>No files uploaded yet</p>';
    } else {
        fileList += '<ul>';
        for (let i = 0; i < files.length; i++) {
            fileList += '<li>' + files[i].name + '</li>';
        }
        fileList += '</ul>';
        preview.innerHTML = fileList;
    }
}
