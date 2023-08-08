<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projrctsoba</title>


    <link href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome-free-5.15.1-web/css/all.min.css" rel="stylesheet">

    <link href="asset/css/roshan.css?v=1" rel="stylesheet">
    <link href="asset/css/shani.css?v=1" rel="stylesheet">
    <link href="asset/css/sanduni.css?v=1" rel="stylesheet">
    <link href="asset/css/nelusha.css?v=1" rel="stylesheet">
    <link href="asset/css/stykes.css?v=1" rel="stylesheet">
    <link href="asset/css/com.css?v=1" rel="stylesheet">
    <link href="asset/css/hirushani.css?v=1" rel="stylesheet">
    <link href="asset/css/kalana.css?v=1" rel="stylesheet">
</head>

<body onload="initMap();">

    <?php require_once('resources/header/index.php');

if( !isset($_GET['tag']) || $_GET['tag']=='home') {
        require_once('resources/slider/index.php');
        
        require_once('resources/about/index.php');

        require_once('resources/add/index.php');

        require_once('resources/cource/index.php');

        require_once('resources/service/index.php');

        require_once('resources/contact/index.php');


}
        elseif($_GET['tag']=='coursefull') {
          require_once('resources/coursefull/index.php');
        }

        
        elseif($_GET['tag']=='contact') {
            require_once('resources/map/index.php');
        }

        elseif($_GET['tag']=='news') {
          require_once('resources/news/index.php');
        }

        elseif($_GET['tag']=='newsde') {
          require_once('resources/newsdetails/index.php');
        }
        elseif($_GET['tag']=='more') {
            require_once('resources/more/index.php');
          }
          elseif($_GET['tag']=='staff') {
            require_once('resources/staff/index.php');
          }
  

        require_once('resources/footer/index.php');

       
       
    ?>

    <script src="asset/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>


    <script type="text/javascript">
    $(function() {
        var navbar = $('.header-inner');
        $(window).scroll(function() {
            if ($(this).scrollTop() <= 40) {
                navbar.removeClass('navbar-scroll');
            } else {
                navbar.addClass('navbar-scroll');
            }
        });



    });
    </script>
    <script>
    $('#myCarousel').carousel({
        interval: 3000,
    })
    </script>

</body>

</html>