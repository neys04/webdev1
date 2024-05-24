const user = $("#user");
const password = $("#password");
const loginForm = $("#loginForm");
const errorMsg = $("#errorMessage")

loginForm.on("submit", function (e) {
    if (user && password) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "ajax/retrieveUser.php",
            data: {
                user: user.val(),
                password: password.val()
            },
            success: function (response) {
                if (response != 200) {
                    errorMsg.css("display", "block");
                    console.log(response);
                } else {
                    window.location.href = 'index.php';
                }
            },
            error: function(xhr, status, error) {
                console.error("Error retrieving user: " + error);
            }
        });
    }
});