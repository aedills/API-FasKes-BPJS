function viewApiKey() {
    var url = "http://127.0.0.20:8866/ajax/apikey";

    var req = new XMLHttpRequest();
    req.open('GET', url, true);
    // req.responseType = 'document';
    req.onload = function () {
        var target = document.getElementById('root-view');
        target.innerHTML = req.response;
    }
    req.send();
}

function login(){
    window.location.href = "/login";
}