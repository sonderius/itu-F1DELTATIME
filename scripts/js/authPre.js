function duplicateUser()
{   
    login_window.style.display = "none";
    register_window.style.display = "none";
    incorrect_window.style.display = "block";

    document.getElementById("error-message").innerHTML = "This user is already registered";
}

function unknownUser()
{   
    login_window.style.display = "none";
    register_window.style.display = "none";
    incorrect_window.style.display = "block";

    document.getElementById("error-message").innerHTML = "This user is not registered";
}

function badPassword()
{   
    login_window.style.display = "none";
    register_window.style.display = "none";
    incorrect_window.style.display = "block";

    document.getElementById("error-message").innerHTML = "Incorrect password";
}
