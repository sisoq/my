<!DOCTYPE html>
<html lang="ar" dir="rtl">
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>mico stor</title>
    <style>
        /* التنسيقات الجديدة */
        .social-icons {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .social-icon {
            margin: 0 10px;
            width: 30px;
            height: 30px;
            background-size: cover;
        }
        .facebook-icon {
            background-image: url("facebook-logo.png");
        }
        .twitter-icon {
            background-image: url("twitter-logo.png");
        }
        .instagram-icon {
            background-image: url("instagram-logo.png");
        }
        /* التنسيقات السابقة */
        .popup {
            position: fixed;
            top: 0;
            right: 0;
            width: 25%;
            height: 100%;
            background-color: #f5f5f5;
            border-left: 1px solid #ccc;
            display: none;
            z-index: 9999;
        }
        .popup-content {
            padding: 20px;
        }
        .close-btn {
            position: absolute;
            top: 0;
            right: 100%;
            padding: 10px;
            background-color: rgb(170, 63, 63);
            color: #fff;
            border: none;
            cursor: pointer;
        }
   
        header {
            text-align: center;
            background-color: brown;
            color: rgb(26, 252, 6);
            padding: 10px;
        }
        .button {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: brown;
            color: rgb(26, 252, 6);
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: block;
            border: none;
        }
    </style>
</head>
<body>
    <header>
        <a href="ggg.html" class="button">Mico Store</a>
        <div class="social-icons">
            <a href="#"><div class="social-icon facebook-icon"></div></a>
            <a href="#"><div class="social-icon twitter-icon"></div></a>
            <a href="#"><div class="social-icon instagram-icon"></div></a>
        </div>
    </header>
    <button onclick="document.getElementById('popup').style.display
