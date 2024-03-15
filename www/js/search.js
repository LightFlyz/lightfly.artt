function myFunction() {
    var input, filter, ul, li, a, b, i, txtValueA, txtValueB;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("p")[0];
    b = li[i].getElementsByTagName("p1")[0];
    txtValueA = a.textContent || a.innerText;
    txtValueB = b.textContent || b.innerText;
    if (txtValueA.toUpperCase().indexOf(filter) > -1 || txtValueB.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
    } else {
        li[i].style.display = "none";
    }
}
}