// ITU F1 Delta Time Calculator
// functions for changing tabs
// Author: Kodousek Ondrej - xkodou00

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

function show2019() 
{
    document.getElementById("show-setup-table-2020").style.display = "none";
    document.getElementById("show-setup-table-2019").style.display = "block";
}

function show2020() 
{
    document.getElementById("show-setup-table-2019").style.display = "none";
    document.getElementById("show-setup-table-2020").style.display = "block";
}
