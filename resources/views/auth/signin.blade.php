@extends('templates.default')
@section('content')
        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>MatBoksen</strong> Logg inn &amp; Registrering</h1>
                            <div class="description">
                                <p>
                                    Dette er en plass du kan <strong>finne og lagre</strong> de beste oppskriftene. 
                                    Sjekk ut mer info <a href="" target="_blank"><strong>på hjelpesiden</strong></a>.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Logg inn</h3>
                                        <p>Oppgi e-post og passord:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="{{ route('auth.signin') }}" method="post" class="login-form">
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label class="sr-only" for="login-username">E-post</label>
                                            <input type="text" name="email" placeholder="E-post......" class="form-username form-control" id="login-username">
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label class="sr-only" for="login-password">Passord</label>
                                            <input type="password" name="password" placeholder="Passord..." class="form-password form-control" id="login-password">
                                        </div>
                                        <button type="submit" class="btn" name="loginform">Logg inn</button>
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                    </form>
                                </div>
                            </div>
                        
                            <div class="social-login">
                                <h3>...eller <a href="/signup">registrer deg</a></h3>
                            </div>
                            
                        </div>

                            
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="footer-border"></div>
                        <p>Snekret sammen av <a href="http://starmerdev.no" target="_blank"><strong>StarmerDev</strong></a> <i class="fa fa-smile-o"></i></p>
                    </div>
                    
                </div>
            </div>
        </footer>

@stop