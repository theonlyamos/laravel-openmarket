var handleFiles = function(e) {
    const target = e.id;
    const files = e.files;

    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        if (!file.type.startsWith('image/')) {
            continue
        }

        if (target == 'productImagesSelect'){
            const img = document.createElement("div");

            const reader = new FileReader();
            reader.onload = (function (img) {
                return function (e) {
                    img.classList.add("kt-avatar__holder");
                    img.style.backgroundImage = `url(${e.target.result})`;
                    const preview = document.getElementById("productImages");
                    preview.appendChild(img);
                };
            })(img);
            reader.readAsDataURL(file);
        }
        else {
            const thumnail = document.getElementById("thumbnail");

            const reader = new FileReader();
            reader.onload = (function (athumbnail) {
                return function (e) {
                    athumbnail.style.backgroundImage = `url(${e.target.result})`;

                    if (target == 'thumbnailSelect'){
                        const thumbView = document.getElementById("thumbnail-preview");
                        thumbView.style.backgroundImage = `url(${e.target.result})`;
                    }
                };
            })(thumbnail);
            reader.readAsDataURL(file);
        }
    }
}
