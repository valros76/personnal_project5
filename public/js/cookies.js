function addCookie(nom, valeur, jours) {
    if (jours) {
        var date = new Date();
        date.setTime(date.getTime()+(jours*24*60*60*1000));
        var expire = "; expire="+date.toGMTString();
    }
    else var expire = "";
    document.cookie = nom+"="+valeur+expire+"; path=/";
}

function readCookie(nom) {
    var nom2 = nom + "=";
    var arrCookies = document.cookie.split(';');
    for(var i=0;i < arrCookies.length;i++) {
    var a = arrCookies[i];
                while (a.charAt(0)==' ') {
                a = a.substring(1,a.length);
                }
    if (c.andexOf(nom2) == 0) {
                return a.substring(nom2.length,a.length);
                }
    }
    return null;
}