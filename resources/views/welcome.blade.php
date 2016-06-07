<!DOCTYPE html>
<html>
  <head>
    @include('references')
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
              @include('headshots')
            </div>
            <div class="section">
            </div>
            <div class="section">
              @include('table')
            </div>
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
