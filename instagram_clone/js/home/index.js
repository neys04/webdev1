const heartButton = $(".heart");
const posts = $(".post-img");

const commentsImage = $("#commentsImage");
const commentsAuthorImage = $("#commentsAuthorImage");
const commentsAuthor = $("#commentsAuthor")
const commentsCaptionImage = $("#commentsCaptionImage");
const commentsCaptionAuthor = $("#commentsCaptionAuthor");
const commentsCaption = $("#commentsCaption");

const commentsClose = $("#commentsClose");
const commentsContainer = $("#commentsContainer");

const commentsOne = $("#comments1");
const commentsTwo = $("#comments2");
const commentsThree = $("#comments3");

const stories = $(".story");

const users = ['haen00', 'mitskileaks', 'clairo', 'garbo.zhu', 'theofficialmads', 'littlebodybigheart']

heartButton.each((i, obj) => {
    $(obj).on('click', () => {
        var postID = "#post_" + i;
        if ($(postID).attr("liked") == "false") {
            $(obj).html(`<svg width="26" height="26" fill="#ff3a40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.001 4.529a5.998 5.998 0 0 1 8.242.228 6 6 0 0 1 .236 8.236l-8.48 8.492-8.478-8.492a6 6 0 0 1 8.48-8.464Z"></path>
        </svg>`)
            $(postID).attr("liked", "true");
        } else {
            $(obj).html(`<svg width="26" height="26" fill="#f0f0f0" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M12.001 4.529a5.998 5.998 0 0 1 8.242.228 6 6 0 0 1 .236 8.236l-8.48 8.492-8.478-8.492a6 6 0 0 1 8.48-8.464Zm6.826 1.641a3.998 3.998 0 0 0-5.49-.153l-1.335 1.198-1.336-1.197a3.999 3.999 0 0 0-5.494.154 4 4 0 0 0-.192 5.451L12 18.654l7.02-7.03a4 4 0 0 0-.193-5.454Z">
            </path>
        </svg>`);
            $(postID).attr("liked", "false");
        }
    })
})

posts.each((i, obj) => {
    $(obj).dblclick(() => {
        var heartID = "#heart_" + i;
        if ($(obj).attr("liked") == "false") {
            $(heartID).html(`<svg width="26" height="26" fill="#ff3a40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.001 4.529a5.998 5.998 0 0 1 8.242.228 6 6 0 0 1 .236 8.236l-8.48 8.492-8.478-8.492a6 6 0 0 1 8.48-8.464Z"></path>
        </svg>`)
            $(obj).attr("liked", "true");
        } else {
            $(heartID).html(`<svg width="26" height="26" fill="#f0f0f0" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M12.001 4.529a5.998 5.998 0 0 1 8.242.228 6 6 0 0 1 .236 8.236l-8.48 8.492-8.478-8.492a6 6 0 0 1 8.48-8.464Zm6.826 1.641a3.998 3.998 0 0 0-5.49-.153l-1.335 1.198-1.336-1.197a3.999 3.999 0 0 0-5.494.154 4 4 0 0 0-.192 5.451L12 18.654l7.02-7.03a4 4 0 0 0-.193-5.454Z">
            </path>
        </svg>`);
            $(obj).attr("liked", "false");
        }
    })
})

stories.each((i, obj) => {
    $(obj).on('click', () => {
        window.location.href = `stories.php?id=${i}`
    })
})

commentsClose.on('click', () => {
    commentsContainer.css("visibility", "hidden");
})

commentsOne.on('click', () => {

    const author = "flowerknows_global";
    const authorPFP = "./assets/flowerknowspfp.jpg";
    const contentImage = "url(./assets/fk.jpg)";
    const caption = "Unveil your inner radiance with pink magic! 🌸💕";

    commentsImage.css("background-image", contentImage);
    commentsAuthorImage.attr('src', authorPFP);
    commentsAuthor.html(author);
    commentsCaptionImage.attr('src', authorPFP);
    commentsCaptionAuthor.html(author);
    commentsCaption.html(caption);

    commentsContainer.css("visibility", "visible");
});

commentsTwo.on('click', () => {

    const author = "viviennewestwood";
    const authorPFP = "./assets/vw.jpg";
    const contentImage = "url(./assets/vwp.jpg)";
    const caption = "Zendaya wears a custom Vivienne Westwood Couture corseted dress, with a sculpted bodice in pale blue duchess satin";

    commentsImage.css("background-image", contentImage);
    commentsAuthorImage.attr('src', authorPFP);
    commentsAuthor.html(author);
    commentsCaptionImage.attr('src', authorPFP);
    commentsCaptionAuthor.html(author);
    commentsCaption.html(caption);

    commentsContainer.css("visibility", "visible");
});

commentsThree.on('click', () => {
    const author = "icdwycd";
    const authorPFP = "./assets/tattoo.png";
    const contentImage = "url(./assets/butterfly.jpg)";
    const caption = "";

    commentsImage.css("background-image", contentImage);
    commentsAuthorImage.attr('src', authorPFP);
    commentsAuthor.html(author);
    commentsCaptionImage.attr('src', authorPFP);
    commentsCaptionAuthor.html(author);
    commentsCaption.html(caption);

    commentsContainer.css("visibility", "visible");
})