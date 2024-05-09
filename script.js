function shortenUrl() {
    var xhr = new XMLHttpRequest();
    var url = document.getElementById("url").value;
    var params = "url=" + encodeURIComponent(url);
    xhr.open("POST", "shorten.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("shortened-url").innerHTML = xhr.responseText;
        }
    };
    xhr.send(params);
}

function retrieveUrlInfo() {
    var xhr = new XMLHttpRequest();
    var code = document.getElementById("shortcode").value;
    var params = "code=" + encodeURIComponent(code);
    xhr.open("POST", "retrieve.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("url-info").innerHTML = xhr.responseText;
        }
    };
    xhr.send(params);
}
