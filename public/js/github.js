var data = null;
var xhr = new XMLHttpRequest();
xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    var github = JSON.parse(xhr.responseText);
    console.log("Retour : ", github);
    var github = JSON.parse(xhr.responseText);
    var commits = [];
    var i = 0;
    for(i = 0; i < github.length; i+=1){
        commits.push(github[i].commit);
    }
    showCommit = function(){
        var id = 0;
        var name;
        var message;
        var date;
        list = document.getElementById("commits");
        list.innerHTML = "";
        var li = [];
        for(id; id < commits.length; id++){
            name = commits[id].author.name;
            message = commits[id].message;
            date = commits[id].committer.date;
            li[id] = document.createElement("li");
            li[id].innerHTML = "[ " + name + " ]<br/>" + "[ " +  message + " ]<br/>" + "[ " + date + " ]<hr/>";
            list.appendChild(li[id]);
        }
        
    }
    showCommit();
  }
});
xhr.open("GET", "https://api.github.com/repos/valros76/projet4_blog/commits");
xhr.send(data);