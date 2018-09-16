# bracket-server

POST / HTTP/1.1
Host: somehost
Content-Length: 6

(()())

---------------------------

POST /index.php HTTP/1.1
Host: somehost
Content-Length: 14

())((()(())())

---------------------------

POST /test.php HTTP/1.1
Host: somehost
Content-Length: 7

()((w))
