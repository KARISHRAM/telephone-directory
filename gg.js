document.getElementById("search-form").addEventListener("submit", function(event) {
event.preventDefault();

var query = document.getElementById("query").value;

var xhr = new XMLHttpRequest();
xhr.open("POST", "search_gg.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
var response = JSON.parse(this.responseText);
 var results = document.getElementById("results");
  results.innerHTML = "";
  // Append the column names
  var row = document.createElement("tr");
  var nameHeading = document.createElement("th");
  nameHeading.textContent = "Name";
  var telephoneHeading = document.createElement("th");
  telephoneHeading.textContent = "Telephone";
  row.appendChild(nameHeading);
  row.appendChild(telephoneHeading);
  results.appendChild(row);
  // Append the data
  for (var i = 0; i < response.length; i++) {
    var row = document.createElement("tr");
    var name = document.createElement("td");
    name.textContent = response[i].name;
    var telephone = document.createElement("td");
    telephone.textContent = response[i].telephone;

    row.appendChild(name);
    row.appendChild(telephone);
    results.appendChild(row);
  }
}
};
xhr.send("query=" + encodeURIComponent(query));
});
