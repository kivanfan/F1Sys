<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">

    <title>F1 System</title>

    <link rel="stylesheet" href="/css/app.css">

</head>

<body>
<div class="top-menu">
    <div class="menu-bar">
        <i class="fa fa-bars fa-2x"></i>
        <div class="menu-logout">
            <i class="fas fa-sign-out-alt fa-2x"></i>
        </div>
    </div>

</div>
<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="/main">
                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                </a>
            </li>

            <li data-toggle="collapse" data-target="#products" class="collapsed active">
                <a href=""><i class="fa fa-gift fa-lg"></i> UI Elements <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse show" id="products">
                <li class="active"><a href="#">CSS3 Animation</a></li>
                <li><a href="dashboard" class="dashboard">General</a></li>
                <li><a href="generator">CSS generator</a></li>
                <li><a href="chatroom">Tabs & Accordions</a></li>
                <li><a href="#">Typography</a></li>
                <li><a href="#">FontAwesome</a></li>
                <li><a href="#">Slider</a></li>
                <li><a href="#">Panels</a></li>
                <li><a href="#">Widgets</a></li>
                <li><a href="#">Bootstrap Model</a></li>
            </ul>

            <li data-toggle="collapse" data-target="#service" class="collapsed">
                <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="service">
                <li>New Service 1</li>
                <li>New Service 2</li>
                <li>New Service 3</li>
            </ul>


            <li data-toggle="collapse" data-target="#new" class="collapsed">
                <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="new">
                <li>New New 1</li>
                <li>New New 2</li>
                <li>New New 3</li>
            </ul>

            <li>
                <a href="/dashboard">
                    <i class="fa fa-user fa-lg"></i> Profile
                </a>
            </li>

            <li>
                <a href="/dashboard">
                    <i class="fa fa-users fa-lg"></i> Users
                </a>
            </li>
        </ul>
    </div>
</div>


<div class="main-content">
    <!--    --><?php //echo request()->path();?>

</div>


</body>
</html>
<script type="text/javascript" src="/js/app.js"></script>
<script>
        var path = window.location.hash.substr(1);
        $.ajax({
            url: '/' + path,
            type: "GET",
            success: function (data) {
                $data = $(data);
                $('.main-content').fadeOut().html($data).fadeIn();
                window.history.pushState('page2', 'Title', '/main#' + path);
            },
            error: function () {
                loadHomePage();
            }
        });
</script>
<script>
    function loadHomePage() {
        $.ajax({
            url: '/dashboard',
            type: "GET", // not POST, laravel won't allow it
            success: function (data) {
                $data = $(data);
                $('.main-content').fadeOut().html($data).fadeIn();
                window.history.pushState('page2', 'Title', '/main#dashboard');
            }
        });
    }

    $('.sub-menu li a').click(function (e) {
        e.preventDefault();
        console.log(e.target.attributes.href.nodeValue);
        $.ajax({
            url: '/' + e.target.attributes.href.nodeValue,
            type: "GET", // not POST, laravel won't allow it
            success: function (data) {
                $data = $(data); // the HTML content your controller has produced
                $('.main-content').fadeOut().html($data).fadeIn();
                window.history.pushState('page2', 'Title', '/main#' + e.target.attributes.href.nodeValue);
            }
        });
    });

    $(document).on('click', '#nav', function () {

    });

</script>
<script src="/js/color-picker.js"></script>
<script>

    var picker = new CP(document.querySelector('input#picker'));
    var picker2 = new CP(document.querySelector('input#picker2'));

    picker.on("change", function (color) {
        this.target.value = '#' + color;

        document.querySelector('.block_1').style.background = 'linear-gradient(45deg,#' + color + ', ' + document.querySelector('#picker2').value + ')';
        document.querySelector('.block_2').style.background = 'linear-gradient(45deg,#' + color + ', ' + document.querySelector('#picker2').value + ')';
        document.querySelector('.block_3').style.background = 'linear-gradient(45deg,#' + color + ', ' + document.querySelector('#picker2').value + ')';
        document.querySelector('.block_4').style.background = 'linear-gradient(45deg,#' + color + ', ' + document.querySelector('#picker2').value + ')';

    });
    picker2.on("change", function (color) {
        this.target.value = '#' + color;
        document.querySelector('.block_1').style.background = 'linear-gradient(45deg,' + document.querySelector('#picker').value + ',#' + color + ')';
        document.querySelector('.block_2').style.background = 'linear-gradient(45deg,' + document.querySelector('#picker').value + ',#' + color + ')';
        document.querySelector('.block_3').style.background = 'linear-gradient(45deg,' + document.querySelector('#picker').value + ',#' + color + ')';
        document.querySelector('.block_4').style.background = 'linear-gradient(45deg,' + document.querySelector('#picker').value + ',#' + color + ')';

    });

</script>