function readIMG(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#contact-image').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

$("#image-uploader").change(function () {
    readIMG(this);
});