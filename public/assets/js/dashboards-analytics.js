// JavaScript to handle image modal
document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("imageModal");
    const modalImage = document.getElementById("modalImage");

    // Add click event listener to all images with data-image attribute
    document
        .querySelectorAll('img[data-bs-target="#imageModal"]')
        .forEach((img) => {
            img.addEventListener("click", function () {
                const imageUrl = this.getAttribute("data-image");
                modalImage.src = imageUrl;
            });
        });

    // Handle full description modal
    const descriptionModal = document.getElementById("descriptionModal");
    const fullDescription = document.getElementById("fullDescription");
    document.querySelectorAll(".show-full-description").forEach((link) => {
        link.addEventListener("click", function () {
            const description = this.getAttribute("data-description");
            fullDescription.textContent = description;
        });
    });
});

function showToast(message, type = "success") {
    const toastElement = document.getElementById("copyToast");
    const toastMessage = document.getElementById("toastMessage");

    toastMessage.textContent = message;

    toastElement.classList.remove("bg-success", "bg-danger", "bg-warning");
    toastElement.classList.add(`bg-${type}`);

    let toast = new bootstrap.Toast(toastElement);
    toast.show();
}


function copyToClipboard(text, message = "تم النسخ بنجاح!") {
    navigator.clipboard
        .writeText(text)
        .then(() => {
            showToast(message, "success");
        })
        .catch((err) => {
            console.error("فشل النسخ: ", err);
            showToast("فشل النسخ!", "danger");
        });
}

document.getElementById("searchInput").addEventListener("input", function () {
    let filter = this.value.toLowerCase();
    let items = document.querySelectorAll(".searchable-item"); 

    items.forEach((item) => {
        let text = item.textContent.toLowerCase();
        item.style.display = text.includes(filter) ? "" : "none";
    });
});
