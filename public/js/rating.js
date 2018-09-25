function getNoteP1(note = 0){
    let out = document.getElementById("rateP1").innerHTML = note.toString();

    addCookie("noteP1", note.toString());

    return out;
}

function getNoteP2(note = 0){
    let out = document.getElementById("rateP2").innerHTML = note.toString();

    addCookie("noteP2", note.toString());

    return out;
}

function getNoteP3(note = 0){
    let out = document.getElementById("rateP3").innerHTML = note.toString();

    addCookie("noteP3", note.toString());

    return out;
}

function getNoteP4(note = 0){
    let out = document.getElementById("rateP4").innerHTML = note.toString();

    addCookie("noteP4", note.toString());

    return out;
}