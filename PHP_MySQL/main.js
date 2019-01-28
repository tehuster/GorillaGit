function showHint() {
    var value = document.getElementById('value').value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("phpOutput").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "test.php?name=" + value, true);
    xmlhttp.send();

}

showHint();