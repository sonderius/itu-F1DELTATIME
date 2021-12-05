// ITU F1 Delta Time Calculator
// functions for authentication errors
// Author: Kodousek Ondrej - xkodou00
// Author: Zavodsky Lubomir - xzavod14

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
