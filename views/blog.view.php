<html>
<head>
    <style>
        .display_blog{
            display: grid;
            width: 700px;
            margin: 0 auto;
            /*border: 1px solid red;*/
            /*padding: 15px;*/
        }
        .display_blog .binsidetitle{
            color: coral;
        }
        .display_blog .btitle{
            font-size: 25px;
            font-family: "Lora", serif;
        }
        .display_blog .bdate{
            font-size: 13px;
            color: dimgrey;
            margin-top: -2px;
        }
        .display_blog .bcontent{
            width: 650px;
            margin: 0 auto;
            font-size: 15px;
            text-align: justify;
            line-height: 20px;
        }
        .display_blog .bauthor{
            margin-top: 12px;
            font-size: 20px;
            font-family: "Lora", serif;
            color: coral;
        }
        .display_blog .bauthorname{
            font-size: 18px;
            font-family: "Sedan", serif;
            letter-spacing: 2px;
        }
        .display_blog .line{
            width: 730px;
            border: 1px solid black;
            margin-left: -25px;
        }
    </style>
</head>
<body>
    <div class="display_blog">
        <h1 style="text-align: center;">Blog</h1>
        <?php
            $servername = "localhsot";
            $username = "dckap";
            $password = "Dckap2023Ecommerce";
            $dbname = "assessmentdb";
            $con = new mysqli($servername, $username, $password, $dbname);
            if ($con->connect_error){
                die("Connection failed" . $con->connect_error);
            }
            $sql = "SELECT blog_title, blog_content, blog_author, blog_createdAt FROM blog WHERE blog_status = 'Updated'";
            $data = $con->query($sql);
            if ($data->num_rows > 0){
                while($blogpage = $data->fetch_assoc()){
                    echo "<b class='btitle'>" . "<b class='binsidetitle'>Title: </b>" . $blogpage['blog_title'] . "</b>" . "<br>" .
                         "<p class='bdate'>" . $blogpage['blog_createdAt'] ."</p>" . "<br>" .
                         "<p class='bcontent'>" . $blogpage['blog_content'] . "</p>" . "<br>" .
                         "<b class='bauthor'>Author: </b>" . "<p class='bauthorname'>" . $blogpage['blog_author'] . "</p>" . "<br>" .
                         "<hr class='line'>" ;
                }
            }
            else{
                echo "0 results";
            }
            $con->close();
        ?>
    </div>

</body>
</html>