document.getElementById("rateP1").innerHTML = "0";
document.getElementById("rateP2").innerHTML = "0";
document.getElementById("rateP3").innerHTML = "0";
document.getElementById("rateP4").innerHTML = "0";

function getNoteP1(note = 0){
    let out = document.getElementById("rateP1").innerHTML = note.toString();

    addCookie("Note P1", note.toString(), 15);

    return out;
}

function getNoteP2(note = 0){
    let out = document.getElementById("rateP2").innerHTML = note.toString();

    addCookie("Note P2", note.toString(), 15);

    return out;
}

function getNoteP3(note = 0){
    let out = document.getElementById("rateP3").innerHTML = note.toString();

    addCookie("Note P3", note.toString(), 15);

    return out;
}

function getNoteP4(note = 0){
    let out = document.getElementById("rateP4").innerHTML = note.toString();

    addCookie("Note P4", note.toString(), 15);

    return out;
}