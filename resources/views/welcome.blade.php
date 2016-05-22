<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="Full_Page/jquery.fullPage.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script src="components/jquery.min.js"></script>
  <script type="text/javascript" src="Full_Page/jquery.fullPage.js"></script>

   <script type="text/javascript">
   $(document).ready(function() {
           $('#fullpage').fullpage({
               sectionsColor: ['#ff9933', '#0099ff', '#00cc66'],
               menu: '#menu',
               anchors: ['firstPage', 'secondPage', 'thirdPage'],
               navigation: true,
               navigationPosition: 'right',
               navigationTooltips: ['Dashboard', 'Upcoming', 'Table']
           });
       });
    </script>
</head>

<body>
    <ul id="menu">
        <li data-menuanchor="firstPage" class="active"><a href="#firstPage">P1P1P1P1</a></li>
        <li data-menuanchor="secondPage"><a href="#secondPage">P2P2P2P2</a></li>
        <li data-menuanchor="thirdPage"><a href="#thirdPage">P3P3P3P3</a></li>
    </ul>
    <button id="sign-in-button" type="button">Sign in</button>
    <div id="fullpage">
        <div class="section">Rob...</div>
        <div class="section">
            <div class="slide">1</div>
            <div class="slide">2</div>
        </div>
        <div class="section">...COOL!!</div>
    </div>
</body>

</html>
