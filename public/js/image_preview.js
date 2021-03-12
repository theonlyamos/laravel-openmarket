
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
                    img.style.backgroundPosition = "center center";
                    img.style.width = "200px"
                    img.style.maxWidth = "100%"
                    img.style.height = "300px"
                    img.style.margin = "0 10px 0 0"

                    const imageContainer = document.createElement('div')
                    imageContainer.classList.add('kt-avatar')
                    imageContainer.classList.add('kt-avatar--outline')
                    imageContainer.classList.add('kt-avatar--circle-')
                    imageContainer.classList.add('ml-3')

                    imageContainer.appendChild(img)
                    document.getElementById("product_images_preview")
                            .appendChild(imageContainer)

                    document.getElementById('kt_apps_product_add_product_images_preview')
                            .appendChild(img.cloneNode())
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
