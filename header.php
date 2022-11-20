<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Montserrat">
    <title></title>
    <style>
        * 
        {
            font-family: 'Montserrat';
            margin: 0;
            padding: 0;
        }

        ul 
        {
            list-style-type: none;
        }

        #header 
        {
            width: 100%;
            height: 130px;
            background-color: rgb(0, 0, 0);
            font-weight:500;
        }

        #innerheader
        {
            width: max-content;
            height: 100%;
            margin: 0px auto;
            display: block;
            background-color: rgb(0, 0, 0);
        }
        #logo-container
        {
            height: 100px;
            float: right;
        }
        #logo 
        {
            margin-top: 5%;
            margin-left: 1%;
            height: 100%;
        }

        #nav
        {
            height: 100%;
            width: 460px;
            float: right;
        }

        #nav :first-child
        {
            padding-left: 15px;
        }
        #nav :last-child
        {
            padding-right: 20px;
        }
        #nav a
        {
            height: 100%;
            float: left;
            display: table;
            text-decoration: none;
            padding: 0px 10px;
        }
        #nav a li:hover
        {
            color: #18a1a1;
        }

        #nav a li
        {
            display: table-cell;
            vertical-align: middle;
            color: white;
            font-size: 100%;
            cursor: pointer;
        }
        #nav-2
        {
            height: 100%;
            width: 130px;
            float: right;
        }
        #nav-2 a
        {
            height: 100%;
            float: left;
            display: table;
            text-decoration: none;
            padding: 0px 5px;
        }
        #nav-2 a li img
        {
            cursor: pointer;
        }
        #nav-2 a li
        {
            display: table-cell;
            vertical-align: middle;
        }

        #nav-2 :first-child
        {
            margin-left: 5px;
        }
       
        #login-box
        {
            height: 100%;
            width: 95px;
            float: right;
        }
        
        #login-box a
        {
            height: 100%;
            float: left;
            display: table;
            text-decoration: none;
            color: #18a1a1;
        }
        #login-box a li
        {
            display: table-cell;
            vertical-align: middle;
        }

        #login-box a li:hover
        {
            color: white;
            cursor: pointer;
        }
        #admin-box
        {
            height: 100%;
            width: 95px;
            float: right;
            display: none;
        }
        #admin-box a
        {
            height: 100%;
            display: table;
            text-decoration: none;
            color: #18a1a1;
        }
        #admin-box a li
        {
            display: table-cell;
            vertical-align: middle;
        }
        #collab
        {
            width: 100%;
        }
        #lang-picker
        {
            height: 100%;
            width: 40px;
            float: right;
            display: none;
        }
        #lang-picker a
        {
            height: 34%;
            display: table;
            padding: 0px 0px;
            margin: 0px auto;
        }

        #lang-picker a li
        {
            display: table-cell;
            vertical-align: middle;
        }
        #lang-picker img
        {
            height: 30px;
            cursor: pointer;
        }
        #filler-loginbox
        {
            height: 100%;
            width: 95px;
            float: right;
            display: none;
        }
        #filler-adminbox
        {
            height: 100%;
            width: 95px;
            float: right;
            display: none;
        }
        #rightfiller
        {
            float: right;
            width: 20px;
            height: 100%;
        }
        #bag-icon, #usericon
        {
            color: white;
            font-size: 40px;
            cursor: pointer;
        }
        #select-div
        {
            display: table;
            float: right;
            height: 100%;
        }
        #lang-li
        {
            display: table-cell;
            vertical-align: middle;
        }
        #lang-select
        {
            background-color: black;
            border: none;
            color: white;
        }
        ::selection {
            color: black;
            background: #18a1a1;
        }
    </style>
</head>
<body>
    <div id="header">
        <div id="innerheader">
            </ul>
            <ul id="rightfiller"></ul>
            <ul id="select-div">
                <li id="lang-li">
                    <select name="languages" id="lang-select">
                        <option value="en">EN</option>
                        <option value="nl">NL</option>
                        <option value="fr">FR</option>
                    </select>
                </li>
            </ul>
            <ul id="lang-picker">
                <a id="be-flag"><li><img src="./img/be-flag.png" title="dutch"></li></a>
                <a><li><img src="./img/fr-flag.png" title="french"></li></a>
                <a><li><img src="./img/uk-flag.png" title="english"></li></a>
            </ul>
            <ul id="nav-2">
                <a><li><i id="usericon" class="bi bi-person-circle"></i></li></a>
                <a><li><i id="bag-icon" class="bi bi-cart"></i></li></a>
            </ul>
            <ul id="login-box">
                <a><li id="login-li2">Inloggen</li></a>
            </ul>
            <div id="filler-loginbox">
            </div>
            <ul id="admin-box">
                <a><li id="login-li1">Admin</li></a>
            </ul>
            <div id="filler-adminbox"></div>
            <ul id="nav">
                <a><li id="new">New</li></a>
                <a><li id="sneakers">Sneakers</li></a>
                <a><li id="tsuits">Tracksuits</li></a>
                <a><li id="info">Info</li></a>
            </ul>
            <div id="logo-container">
                <img src="./img/mrplugtransparent.png" id="logo">
            </div>
            
        </div>
    </div>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>