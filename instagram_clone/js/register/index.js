const email = $("#email");
const name = $("#name");
const user = $("#username");
const pass = $("#password");

const registerForm = $("#registerForm");
const displayMsg = $("#displayMessage");

registerForm.on("submit", function (e) {
    e.preventDefault();

    const userCredentials = {
        email: $("#email").val(),
        name: $("#name").val(),
        user: $("#username").val(),
        pass: $("#password").val()
    };
    
    if (userCredentials.email && userCredentials.name && userCredentials.pass && userCredentials.user) {

        $.ajax({
            type: "POST",
            url: "ajax/createUser.php",
            data: {
                email: userCredentials.email,
                name: userCredentials.name,
                user: userCredentials.user,
                pass: userCredentials.pass
            },
            success: function (response) {
                if (response == 200) {
                    setTimeout(() => {
                        window.location.href = 'login.php';
                    }, 2000);
                    
                    displayMsg.css("color", "green");
                    displayMsg.css("display", "block");
                    displayMsg.html("Account successfully created!");
                } else {
                    displayMsg.css("color", "red");
                    displayMsg.css("display", "block");
                    if (response == 401) { // username already taken
                        displayMsg.html("Username already taken!");
                    } else if (response == 402) { // email already taken
                        displayMsg.html("Email already taken!");
                    } else {
                        displayMsg.html("An error occurred!");
                    }
                }
            },
            error: function(xhr, status, error) {
                console.error("Error creating user: " + error);
            }
        });
    }
});