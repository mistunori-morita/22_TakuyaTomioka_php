<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Apply Bootstrap4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>Document</title>
</head>
<body>
    <!-- ヘッダー -->
    <!-- ナビゲーションバー -->
    <nav class="nav-main">
        <div class="btn-toggle-nav" onclick="toggleNav()"></div>
        <div class="logo"><a href="index.html"><img src="kadaiImage/header_logo.png" alt="logo" style="width:200px; height: 50px;"></a></div>
        <ul>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#course">COURSE</a></li>
            <li><a href="#news">NEWS</a></li>
            <li><a href="#access">ACCESS</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </nav>
    
    
    <aside class="nav-sidebar">
        <ul>
            <li><span>コンテンツ</span></li>
            <li><a href="#">チーズを知ろう</a></li>
            <li><a href="#">チーズのビデオを観る</a></li>
            <li><a href="cheese.php">オススメのチーズ</a></li>
            <li><a href="#">サイトの作成者について</a></li>
            <li><a href="#">チーズアカデミーに入学する</a></li>
        </ul>
    </aside>
    <section>
        <?php
            $title = "today we reccomend!";
            echo '<h2>'.$title.'</h2>'
        ?>
    </section>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="main.js"></script>
</html>