<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="Full_Page/jquery.fullPage.css" />
   <script src="components/jquery.min.js"></script>
   <script type="text/javascript" src="Full_Page/jquery.fullPage.js"></script>

   <script type="text/javascript">
   $(document).ready(function() {
           $('#fullpage').fullpage({
               sectionsColor: ['#ff9933', '#0099ff', '#00cc66'],
           });
       });
    </script>

    <style>
         .section{
             font-size: 6em;
             text-align: center;
         }
     </style>
</head>

<body>
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
