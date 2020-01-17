<?php

$db;
try{
    $db = new PDO('mysql:dbname=webimpacto;host=localhost', 'Bence', 'qwe123');
} catch(PDOException $ex){
    die("Could not connect to database");
}

$queryresult = $db ->query('SELECT * from articles');      //itt hajtom végre a lekérdezést


?>

<html>
    <head>
        <title>Webimpacto</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header id="header">
            <div id="logo_top">
                <img src="logo.png">
            </div>  
            <div id="controllers">
                <a id="product" href="">Products</a>
                <a id="services" href="">Services</a>
                <a id="contacts" href="">Contacts</a>
            </div>

        </header>

        <div id="main">
            <div id="main_head">
                <h1 id="noticias">Noticias</h1>
                <div id="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>

            </div>
            
            <div id="articles">
            <div id="article_1">
                    <img src="article_img.PNG" id="article_img">
                    <div id="article_1_block"></div>
                    <div id="title_date_block">
                        <p id="title_1"> Title one</p>
                        <p id="date_1"> Date one</p>
                    </div>
                    <p id="text_1"> Article text lorem ipsum dewd23g5gw5g</p>
                    <button id="learn_more">Learn more...</button>
                    
            </div>


            <div id="article_2">
                    <img src="article_img.PNG" id="article_img">
                    <div id="article_2_block"></div>
                    <div id="title_date_block">
                        <p id="title_2"> Title one</p>
                        <p id="date_2"> Date one</p>
                    </div>
                    <p id="text_2"> Article text lorem ipsum dewd23g5gw5g</p>
                    <button id="learn_more">Learn more...</button>

            </div>


            <div id="article_3">
                    <img src="article_img.PNG" id="article_img">
                    <div id="article_3_block"></div>
                    <div id="title_date_block">
                        <p id="title_3"> Title one</p>
                        <p id="date_3"> Date one</p>
                    </div>
                    <p id="text_3"> Article text lorem ipsum dewd23g5gw5g</p>
                    <button id="learn_more">Learn more...</button>
            </div>
            </div>
            

        </div>


        <footer id="footer">
            <div id="logo_bottom">
                <img src="logo.png">
            </div>  
            <div id="footer_contacts">
                <p id="p_footer_contacts">Calle Ciudad Real 2 | Yuncos Valley | Toledo, Spain | Tel.: +34 900 900 900 | Fax: +34900900900 </p>
                <a id="email" href="">info@webimpacto.com</a>
            </div>
        </footer>

    </body>
</html>