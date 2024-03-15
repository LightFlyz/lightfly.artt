var btn = document.getElementById("theme-button");
var link = document.getElementById("theme-link");

btn.addEventListener("click", function () { ChangeTheme(); });

function Save(theme)
{
    var Request = new XMLHttpRequest();
    Request.open("GET", "../includes/themes.php?theme=" + theme, true); //У вас путь может отличаться
    Request.send();
}

function ChangeTheme()
{
    let lightTheme = "../../css/light.css";
    let darkTheme = "../../css/dark.css";

    var currTheme = link.getAttribute("href");
    var theme = "";

    if(currTheme == lightTheme)
    {
   	 currTheme = darkTheme;
   	 theme = "dark";
    }
    else
    {    
   	 currTheme = lightTheme;
   	 theme = "light";
    }

    link.setAttribute("href", currTheme);

    Save(theme);
}