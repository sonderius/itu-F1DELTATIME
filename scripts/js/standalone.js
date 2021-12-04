function changePage(page)
{
    switch(page)
    {
        case "calculator":
            document.getElementById("track").style.display = "none";
            document.getElementById("setup").style.display = "none";
            document.getElementById("calculator").style.display = "block";
            document.getElementById("button-page-calculator").style.backgroundColor = "rgb(100, 0, 30)";
            document.getElementById("button-page-setup").style.backgroundColor = "red";
            document.getElementById("button-page-track").style.backgroundColor = "red";
            break;
        case "setup":
            document.getElementById("track").style.display = "none";
            document.getElementById("calculator").style.display = "none";
            document.getElementById("setup").style.display = "block";
            document.getElementById("button-page-calculator").style.backgroundColor = "red";
            document.getElementById("button-page-setup").style.backgroundColor = "rgb(100, 0, 30)";
            document.getElementById("button-page-track").style.backgroundColor = "red";
            break;
        case "track":
            document.getElementById("calculator").style.display = "none";
            document.getElementById("setup").style.display = "none";
            document.getElementById("track").style.display = "block";
            document.getElementById("button-page-calculator").style.backgroundColor = "red";
            document.getElementById("button-page-setup").style.backgroundColor = "red";
            document.getElementById("button-page-track").style.backgroundColor = "rgb(100, 0, 30)";
            break;
    }
}

function jsLogout()
{
    console.log('odhlasujem');
    //var placeholder = document.getElementById("logout-placeholder");
  //  placeholder.innerHTML = "<script>console.log('<?= var_dump($_SESSION);?>')<script>";

}
