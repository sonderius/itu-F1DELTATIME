function changePage(page)
{
    switch(page)
    {
        case "calculator":
            document.getElementById("track").style.display = "none";
            document.getElementById("setup").style.display = "none";
            document.getElementById("calculator").style.display = "block";
            break;
        case "setup":
            document.getElementById("track").style.display = "none";
            document.getElementById("calculator").style.display = "none";
            document.getElementById("setup").style.display = "block";
            break;
        case "track":
            document.getElementById("calculator").style.display = "none";
            document.getElementById("setup").style.display = "none";
            document.getElementById("track").style.display = "block";
            break;
    }
}

function jsLogout()
{
    var placeholder = document.getElementById("logout-placeholder");
    placeholder.innerHTML = "<?php logout(); ?>";
}