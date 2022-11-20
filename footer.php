<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Montserrat">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title></title>
    <style>
        * 
        {
            font-family: 'Montserrat';
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        li
        {
            list-style-type: none;
        }
        footer
        {
            display: flex;
            height: 150px;
            width: 100%;
            background-color: black;
        }

        #flags
        {
            margin-left: 8%;
            margin-right: 2%;
            width: 9%;
            float: left;
            display: table;
        }
        #flags li img
        {
            width: 50px;
            margin: 0px 15%;
            padding: 5px;
            padding-bottom: 0;
            margin-top: 5px;
        }

        #flags li
        {
            width: 50px;
            height: 50px;
            list-style-type: none;
            vertical-align: middle;
            display: table-cell;
        }
        #footernav
        {
            float: left;
            width: 100%;
            margin: auto;
            margin-left: 2%;
            margin-right: 3%;
            display: flex;
            justify-content: space-between;
        }
        #footernav li a
        {
            vertical-align: middle;
            float: left;
            color: white;
            font-size: 18px;
            text-decoration: none;
        }
        #footernav li a:hover
        {
            color: #18a1a1;
        }
        .filler1
        {
            float: left;
            width: 100px;
            display: table;
        }
        .filler1 a 
        {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            font-size: 30px;
            color: #18a1a1;
        }

        #social-div
        {
            float: left;
            margin: auto;
            margin-left: 1%;
            margin-right: 8%;
            display: flex;
            justify-content: space-between;
        }
        #social-div img
        {
            float: left;
            vertical-align: middle;
            margin-top: 3px;
            width: 60px;
            padding: 5px;
        }
        #copyright
        {
            clear: both;
            width: 100%;
            height: 25px;
            background-color: #18a1a1;
            font-size: 12px;
            display: flex;
            justify-content:center;
            align-items: center;
        }
        #copyright li
        {
            list-style-type: none;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <footer>
        <ul id="flags">
            <li><img src="./img/fr-flag.png" id="fr-flag"></li>
            <li><img src="./img/be-flag.png" id="be-flag"></li>
            <li><img src="./img/uk-flag.png" id="uk-flag"></li>
        </ul>
        <div class="filler1">
            <a>|</a>
        </div>
        <ul id="footernav">
            <li><a href="">New</a></li>
            <li><a href="">Sneakers</a></li>
            <li><a href="">Tracksuits</a></li>
            <li><a href="">Info</a></li>
        </ul>
        <div class="filler1">
            <a>|</a>
        </div>
        <ul id="footernav">
            <li><a href="">Login</a></li>
            <li><a href="">Account</a></li>
            <li><a href="">Shopping cart</a></li>
        </ul>
        <div class="filler1">
            <a>|</a>
        </div>
        <ul id="social-div">
            <li><img src="./img/instagram-logo.png" alt=""></li>
            <li><img src="./img/snapchat-logo.png" alt=""></li>
        </ul>
    </footer>
    <div id="copyright">
        <ul>
            <li>Copyright © 2022 Mr Plug, Alle rechten voorbehouden.</li>
        </ul>
    </div>
</body>
</html>