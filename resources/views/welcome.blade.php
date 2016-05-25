<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="Full_Page/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="components/jquery.min.js"></script>
    <script type="text/javascript" src="Full_Page/jquery.fullPage.js"></script>
    <script type="text/javascript" src="javascript.js"></script>
</head>

<body>
    <ul id="menu">
        <li data-menuanchor="firstPage" class="active"><a href="#firstPage">Overview</a></li>
        <li data-menuanchor="secondPage"><a href="#secondPage">Predictions</a></li>
        <li data-menuanchor="thirdPage"><a href="#thirdPage">Chart</a></li>
    </ul>
    <button id="sign-in-button" type="button">Sign in</button>

    <div id="fullpage">
        <div class="section">
          <div class="headshots">
            <img src="images/headshots/rob.jpg" class="circular-image" alt="Picture of Rob">
            <img src="images/headshots/emelie.jpg" class="circular-image" alt="Picture of Emelie">
          </div>
          <div id="progress">
            <div class="progress-bar"></div>
          </div>
        </div>
        <div class="section">...is...</div>
        <div class="section">...COOL!!</div>
    </div>



</body>

</html>
