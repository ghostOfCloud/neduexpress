function fileValidation() {
    var fup = document.getElementById('filename');
    var fileName = fup.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

    if (allowedExtensions.exec(fileName)) {
        return true;
    } else {
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        return false;
    }
}