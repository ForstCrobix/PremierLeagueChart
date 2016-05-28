<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="Full_Page/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="prefetch" href="images/headshots/rob_hover.png" />
    <link rel="prefetch" href="images/headshots/emelie_hover.png" />
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
            <img src="images/headshots/rob.jpg" onmouseout="this.src='images/headshots/rob.jpg'" onmouseover="this.src='images/headshots/rob_hover.png'" class="circular-image" alt="Picture of Rob" id="rob-img">
            <img src="images/headshots/emelie.jpg" onmouseout="this.src='images/headshots/emelie.jpg'" onmouseover="this.src='images/headshots/emelie_hover.png'"class="circular-image" alt="Picture of Emelie" id="em-img">
            <div class="circular-image" style="background-image: url('images/headshots/rob.jpg')"></div>
          </div>
          <div class="vs-section">VS</div>
          <div class="progress-e" id="shared-bar-bg-features">
            <div class="progress-bar-e" id="shared-bar-features"></div>
          </div>
          <div class="progress-r" id="shared-bar-bg-features">
            <div class="progress-bar-r" id="shared-bar-features"></div>
          </div>
        </div>
        <div class="section">...is...</div>
        <div class="section">...COOL!!</div>
    </div>



</body>

</html>
