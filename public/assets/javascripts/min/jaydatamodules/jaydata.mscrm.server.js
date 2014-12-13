// JayData 1.3.6
// Dual licensed under MIT and GPL v2
// Copyright JayStack Technologies (http://jaydata.org/licensing)
//
// JayData is a standards-based, cross-platform Javascript library and a set of
// practices to access and manipulate data from various online and offline sources.
//
// Credits:
//     Hajnalka Battancs, D�niel J�zsef, J�nos Roden, L�szl� Horv�th, P�ter Nochta
//     P�ter Zentai, R�bert B�nay, Szabolcs Czinege, Viktor Borza, Viktor L�z�r,
//     Zolt�n Gyebrovszki, G�bor Dolla
//
// More info: http://jaydata.org
(function (window, undefined) {
    window.parent.postMessage({ MessageHandlerLoaded: true }, '*');
    window.addEventListener("message", function (e) {
        if (e.data.requestProxy) {
            var cnf = e.data;
            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", cnf.url, true);
            if (cnf.httpHeaders) {
                Object.keys(cnf.httpHeaders).forEach(function (header) {
                    xhttp.setRequestHeader(header, cnf.httpHeaders[header]);
                });
            }
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4) {
                    var response = { requestUri: cnf.url, statusCode: xhttp.status, statusText: xhttp.statusText, responseText: xhttp.responseText };
                    xhttp = null;
                    e.source.postMessage(response, e.origin);
                }
            };

            xhttp.send("");
        } else {
            window.OData.request(e.data, function (data, response) {
                    e.source.postMessage(response, e.origin);
                },
                function (error) {
                    e.source.postMessage(error, e.origin);
                });
        }
    }, false);
})(window);
