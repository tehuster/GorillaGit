function stuurDB() {
  var category = document.getElementById("category").value;
  console.log(category);

  var value = document.getElementById("value").value;
  console.log(value);

  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //console.log(this.responseText);
      document.getElementById("phpOutput").innerHTML = this.responseText;
    } else if (this.status == 404) {
      console.log("Deze pagina bestaat niet!");
    }
  };

  xmlhttp.open(
    "GET",
    "card.php?category_key=" + category + "&value_key=" + value,
    true
  );
  xmlhttp.send();
}

GetInfoFromDatabase("example.url.php?gorilla=1", showData);

function GetInfoFromDatabase(url, outputData) {
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      outputData(this);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}

function showData(data) {
  // action goes here
}
