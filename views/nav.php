<html>
<head>
    <title>Heritage</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>
        nav{
            width: 99.5%;
            height: 100px;
            background-color: cornsilk;
            padding: 2px;
            /*position: fixed;*/
        }
        nav_1{
            display: flex;
            flex-direction: column;
        }
        .search{
            width: 400px;
            position: absolute;
            top: 20px;
            left: 500px;
            height: 30px;
            padding: 8px;
            border: azure;
            border-radius: 5px;
        }
        .logo_img{
            width: 200px;
            height: 60px;
        }
        .icon{
            position: absolute;
            left: 870px;
            top: 20px;
            background-color: brown;
            padding: 7px;
            border-radius: 0px 5px 5px 0px;
            color: wheat;
        }
        .form_btn{
            position: absolute;
            top: 20px;
            right: 50px;
        }
        button{
            background-color: brown;
            color: wheat;
            border-radius: 5px;
            border: none;
            padding: 8px 10px 8px 10px;
        }
        .nav_2 ul{
            display: flex;
            flex-direction: row;
            gap: 50px;
            list-style: none;
        }
        ul a{
            text-decoration: none;
            color: brown;
        }
        li{
            gap: 5px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav_1">
            <a href="./varshitha.php"> <img src="../Assets/logo_img.png" class="logo_img"></a>
            <input type="text" onkeyup="search_bar()" placeholder="search" name="search" class="search" id="search"><i class="fas fa-search icon"></i>
            <div class="form_btn">
                <button class="signup">Sign Up</button>
                <button class="login">Log In</button>
            </div>
        </div>
        <div class="nav_2">
            <ul>
                <li><a href="./product.php">Shop products</a><i class="fa-solid fa-angle-down"></i></li>
                <li><a href="./blog.php">Blog</a><i class="fa-solid fa-angle-down"></i></li>
            </ul>
        </div>
    </nav>
<script>
    <?php
        require "/home/dckap/phpproject/Varshitha/js/searchbar.js";
    ?>
</script>
</body>
</html>