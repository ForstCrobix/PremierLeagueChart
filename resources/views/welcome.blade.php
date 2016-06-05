<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="Full_Page/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
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
                                        <span class="help-block no-display">
                                        <strong>User credentials do not match.</strong>
                                        {{--@if ($errors->has('email'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif--}}
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

    <div id="fullpage">
        <div class="section">Rob...</div>
        <div class="section">...is...</div>
        <div class="section">...COOL!!</div>
    </div>
</body>

</html>
