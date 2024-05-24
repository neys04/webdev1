let AUTH_MODE = 0; // 0 = login, 1 = register
let isLogged = 0; // 0 = logged out, 1 = logged in

let userCredentials = {
    username: '',
    password: ''
}

const setOutputText = (text, color) => {
    $("#output").text(text);
    $("#output").css("color", color);
}

const updateByAuth = (elemId, mode, registerText, loginText) => {
    switch (mode) {
        case "text":
            $(elemId).text(
                AUTH_MODE ?
                    registerText
                    :
                    loginText
            );
            break;
        case "placeholder":
            $(elemId).attr(
                "placeholder",
                AUTH_MODE ?
                    registerText
                    :
                    loginText
            );
            break;
        case "value":
            $(elemId).val(
                AUTH_MODE ?
                    registerText
                    :
                    loginText
            );
            break;
        default:
            break;
    }
}

const updateForm = () => {

    if (!isLogged) {
        $("form")[0].reset();

        updateByAuth("#titleField", "text", "Create an Account", "Log In");
        updateByAuth("#submitBtn", "value", "Register", "Sign In");
        updateByAuth("#username", "placeholder", "Enter your new username", "Username");
        updateByAuth("#password", "placeholder", "Enter your new password", "******************");
        updateByAuth("#regAccount", "text", "Already have an account?", "Don't have an account yet?");

        $("#output").text("");
    } else {
        $("#titleField").text("Welcome to the dashboard, " + userCredentials.username + '!');
        $("#inputFields").addClass('hidden');
    }
}

$("#username").on("change", () => {
    userCredentials.username = $("#username").val();
});

$("#password").on("change", () => {
    userCredentials.password = $("#password").val();
});

$("#regAccount").on("click", () => {
    AUTH_MODE = !AUTH_MODE;

    updateForm();
});

$("form").on("submit", (e) => {
    e.preventDefault()

    $.ajax({
        type: AUTH_MODE ? "POST" : "GET",
        url: AUTH_MODE ? "ajax/createAccount.php" : "ajax/retrieveAccount.php",
        data: {
            username: userCredentials.username,
            password: userCredentials.password
        },
        success: (response) => {

            AUTH_MODE ?
                setOutputText(response, '#00ff00')
                :
                response == -1 ?
                    setOutputText("Error: Invalid credentials", "#ff0000")
                    :
                    setOutputText("Logged in successfully!", "#00ff00");

            if (response != -1) {
                setTimeout(() => {
                    if (AUTH_MODE) location.reload()
                    else {
                        isLogged = 1;
                        updateForm();
                    }
                }, 1000);
            }

        },
        error: (xhr, status, error) => {
            setOutputText("Error occured (see console logs for more information)", '#ff0000');
            console.error("Error: ", error);
        }
    })
});

$(() => {
    updateForm();
})