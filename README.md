ZARINPAL SANDBOX

---

## Getting Started

Please Follow Steps Below : <br/>

1- Install <a href="https://www.apachefriends.org/download.html">Xampp</a> Latest Version <br/>

2- Run Xampp From Xampp Controll Panel<br/>

3- Download This Repo Files

4- Move and Paste Repo folder to xampp/htdocs/

5- Open Browser and Go to this Address localhost/[repoFolderName]

## What is Request.php

This file is Your Request or checkout file that use on your website checkout route.

this file create Authority code and redirect to specific address that zarinapl reserved that

when request.php be completed, user will redirect to your domain verify.php file to verify payment

## What is verify.php

request.php redirected user to this file with Authority and Status=OK in URL Then verify.php catch these from url ($\_GET variable) and doing verify instructions

## More detail

more info : <a href="https://www.zarinpal.com/docs/paymentGateway/connectToGateway.html">Zarinpal Doc Connect to Gateway</a>
