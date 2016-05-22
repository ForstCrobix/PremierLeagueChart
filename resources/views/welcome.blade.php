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
                menu: '#menu',
                anchors: ['firstPage', 'secondPage', 'thirdPage'],
                navigation: true,
 				        navigationPosition: 'right',
 				        navigationTooltips: ['Dashboard', 'Upcoming', 'Table']
           });
       });
    </script>

    <style>
         .section{
             font-size: 6em;
             text-align: center;
         }

            #menu{
              background-color: transparent;
            	position:fixed;
            	top:0;
            	left:0;
            	height: 40px;
            	z-index: 70;
            	width: 100%;
            	padding: 0;
            	margin:0;
            }

            #menu li {
            	display:inline-block;
            	margin:10px;
              margin-right: 0px !important;
            	color: #000;
            	background:#fff;
            	background: rgba(255,255,255, 0.5);
            	-webkit-border-radius: 10px;
                        border-radius: 10px;

            }
            #menu li.active{
            	background:#666;
            	background: rgba(0,0,0, 0.5);
            	color: #fff;
            }
            #menu li a{
            	text-decoration:none;
            	color: #000;
            }
            #menu li.active a:hover{
            	color: #000;
            }
            #menu li:hover{
            	background: rgba(255,255,255, 0.8);
            }
            #menu li a,
            #menu li.active a{
            	padding: 9px 18px;
            	display:block;
            }
            #menu li.active a{
            	color: #fff;
            }


    </style>
</head>

<body>
    <ul id="menu">
      <li data-menuanchor="firstPage" class="active"><a href="#firstPage">P1P1P1P1</a></li>
      <li data-menuanchor="secondPage"><a href="#secondPage">P2P2P2P2</a></li>
      <li data-menuanchor="thirdPage"><a href="#thirdPage">P3P3P3P3</a></li>
    </ul>

    <div id="fullpage">
        <div class="section" data-anchor="firstPage">Rob...</div>
        <div class="section" data-anchor="secondPage">...is...</div>
        <div class="section" data-anchor="thirdPage">...COOL!!</div>
    </div>
</body>
</html>
