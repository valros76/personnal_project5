var data = null;
var xhr = new XMLHttpRequest();
xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log("Retour : ", JSON.parse(this.responseText));
  }
});
xhr.open("GET", "https://api.github.com/repos/valros76/projet4_blog/commits");
xhr.send(data);