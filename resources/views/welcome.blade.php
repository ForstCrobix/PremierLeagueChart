<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="Full_Page/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  <!--  <link rel="preload" href="images/headshots/rob_hover.png" />
    <link rel="preload" href="images/headshots/emelie_hover.png" />-->
    <script src="components/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootbox/bootbox.js"></script>
    <script type="text/javascript" src="Full_Page/jquery.fullPage.js"></script>
    <script type="text/javascript" src="home.js"></script>
</head>

<body>
    <ul id="menu">
        <li data-menuanchor="firstPage" class="active"><a href="#firstPage">Overview</a></li>
        <li data-menuanchor="secondPage"><a href="#secondPage">Predictions</a></li>
        <li data-menuanchor="thirdPage"><a href="#thirdPage">Chart</a></li>
    </ul>
    @if(!Auth::check())
    <button id="sign-in-button" type="button">Sign in</button>
    @endif

    <div id="fullpage">
        <div class="section">
          <div class="headshots">

            <div class="image-r">
              <div class="hovereffect-r" id="r">
                <img class="img-responsive" src="images/headshots/rob.jpg" alt="">
                <div class="overlay">
                  <h2>Rob</h2>
				          <p> #45 </p>
                </div>
              </div>
            </div>
            <div class="image-e">
              <div class="hovereffect-e" id="e">
                <img class="img-responsive" src="images/headshots/emelie.jpg" alt="">
                <div class="overlay">
                  <h2>Emelie</h2>
                  <p> #12 </p>
                </div>
              </div>
            </div>


          <!--  <img src="images/headshots/rob.jpg" onmouseout="this.src='images/headshots/rob.jpg'" onmouseover="this.src='images/headshots/rob_hover.png'" class="circular-image" id="rob-img">
            <img src="images/headshots/emelie.jpg" onmouseout="this.src='images/headshots/emelie.jpg'" onmouseover="this.src='images/headshots/emelie_hover.png'"class="circular-image" id="em-img">-->
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

    <!-- This is the dialog displayed when the 'Sign in' button is pressed. It is hidden by default !-->
    <div id="sign-in-dialog" class="modal fade no-display" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Sign in</h4>
                </div>
                <div class="modal-body">
                    <div class="bootbox-body">
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="/login">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="email" type="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Password</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="password" type="password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                    <span class="help-block no-display">
                                        <strong>User credentials do not match.</strong>
                                    </span>
                                <div>
                                    Unless you are Emelie, Rob or a hacker you should not be able to sign in.
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Sign in!</button>
                </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
