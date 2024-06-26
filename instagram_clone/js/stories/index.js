const likeButton = $("#heart");
const cancelButton = $("#cancelStory");

likeButton.on("click", function () {
    if (likeButton.attr("liked") == "false") {
        likeButton.html(`<svg width="26" height="26" fill="#ff3a40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.001 4.529a5.998 5.998 0 0 1 8.242.228 6 6 0 0 1 .236 8.236l-8.48 8.492-8.478-8.492a6 6 0 0 1 8.48-8.464Z"></path>
    </svg>`)
        likeButton.attr("liked", "true");
    } else {
        likeButton.html(`<svg width="26" height="26" fill="#f0f0f0" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path
            d="M12.001 4.529a5.998 5.998 0 0 1 8.242.228 6 6 0 0 1 .236 8.236l-8.48 8.492-8.478-8.492a6 6 0 0 1 8.48-8.464Zm6.826 1.641a3.998 3.998 0 0 0-5.49-.153l-1.335 1.198-1.336-1.197a3.999 3.999 0 0 0-5.494.154 4 4 0 0 0-.192 5.451L12 18.654l7.02-7.03a4 4 0 0 0-.193-5.454Z">
        </path>
    </svg>`);
        likeButton.attr("liked", "false");
    }
});

cancelButton.on("click", function () {
    window.location.href = 'index.php';
});