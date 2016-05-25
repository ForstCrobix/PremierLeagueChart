<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="Full_Page/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="components/jquery.min.js"></script>
    <script type="text/javascript" src="Full_Page/jquery.fullPage.js"></script>
    <script type="text/javascript">var emelieScore = "<?= $scores['em'] ?>";</script>
    <script type="text/javascript">var robScore = "<?= $scores['rob'] ?>";</script>
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
            <img src="images/headshots/rob.jpg" class="circular-image" alt="Picture of Rob" id="rob_img">
            <img src="images/headshots/emelie.jpg" class="circular-image" alt="Picture of Emelie" id="em_img">
          </div>
          <div class="progress_e" id="shared_bar_bg_features">
            <div class="progress-bar_e" id="shared_bar_features"></div>
          </div>
          <div class="progress_r" id="shared_bar_bg_features">
            <div class="progress-bar_r" id="shared_bar_features"></div>
          </div>
        </div>
        <div class="section">...is...</div>
        <div class="section">...COOL!!</div>
    </div>



</body>

</html>
