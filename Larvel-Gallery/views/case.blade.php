<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
</head>
<body>
<header>
    <a href="index.html" class="header-brand">mmtuts</a>
    <nav>
        <ul>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="about.html">About me</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <a href="cases.html" class="header-cases">Cases</a>
    </nav>
</header>
<main>

    <section class="cases-links">
        <div class="wrapper">
            <h2>Cases</h2>
        <?php
        $hn = '127.0.0.1';
        $un = 'root';
        $pw = '';
        $db = 'casegallery';
        $conn = new mysqli($hn, $un, $pw, $db);
        if($conn->connect_errno) die("Ket noi that bai");


        $query = "select * from posts";
        $result = $conn -> query($query);
        if(!$result) die ("Ket noi voi co so du lieu that bai");
        $rows = $result->num_rows;
        for($j = 0; $j < $rows; ++$j )
        {
            $row = $result -> fetch_array(MYSQLI_NUM);
            echo '<div class="tt">';
            echo '<a href="case1.html">';
            echo '<img class="cases-link" src="' . $row[3] . '">';
//                echo '<h2>' . $row[1] . '</h2>';
//                echo '<p>' . $row [2] . '</p>';
            echo '</a>';
            echo '</div>';
        }
        ?>
        </div>
    </section>

</main>
<div class="wrapper">
    <footer>
        <ul class="footer-links-main">
            <li><a href="#">Home</a></li>
            <li><a href="#">Cases</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">About me</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <ul class="footer-links-cases">
            <li><p>Latest cases</p></li>
            <li><a href="#">MALING SHAOLIN - WEB DEVELOPMENT</a></li>
            <li><a href="#">EXCELLENTO - WEB DEVELOPMENT, SEO</a></li>
            <li><a href="#">MMTUTS - YOUTUBE CHANNEL</a></li>
            <li><a href="#">WELTEC - VIDEO PRODUCTION</a></li>
        </ul>
        <div class="footer-sm">
            <a href="#">
                <img src="{{URL::asset('/img/youtube-symbol.png')}}" alt="youtube icon">
            </a>
            <a href="#">
                <img src="{{URL::asset('img/twitter-logo-button.png')}}" alt="youtube icon">
            </a>
            <a href="#">
                <img src="{{URL::asset('img/facebook-logo-button.png')}}" alt="youtube icon">
            </a>
        </div>
    </footer>
</div>
</body>
</html>
