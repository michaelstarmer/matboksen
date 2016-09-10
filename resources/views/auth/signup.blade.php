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
                                    Sjekk ut mer info <a href="http://azmind.com" target="_blank"><strong>på hjelpesiden</strong></a>.
                                </p>
                            </div>
                        </div>
                    </div>
                        
                            
                        <div class="col-sm-6 col-sm-offset-3">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Registrer deg nå</h3>
                                        <p>Fyll inn feltene å få tilgang <strong>umiddelbart!</strong></p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="{{ route('auth.signup') }}" method="post" class="registration-form">
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label class="sr-only" for="reg-email">Epost</label>
                                            <input type="text" name="email" placeholder="Epost..." class="form-email form-control" id="reg-email" value="{{ Request::old('email') ?: '' }}">
                                        </div>
                                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                            <label class="sr-only" for="reg-username">Brukernavn</label>
                                            <input type="text" name="username" placeholder="Brukernavn..." class="form-first-name form-control" id="reg-username" value="{{ Request::old('value') ?: '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="reg-firstname">Fornavn</label>
                                            <input type="text" name="firstname" placeholder="Fornavn..." class="form-first-name form-control" id="reg-firstname">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="reg-lastname">Etternavn</label>
                                            <input type="text" name="lastname" placeholder="Etternavn..." class="form-last-name form-control" id="reg-lastname">
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label class="sr-only" for="reg-password">Passord</label>
                                            <input type="password" name="password" placeholder="Passord..." class="form-last-name form-control" id="reg-password">
                                        </div>

                                        <button type="submit" name="registerform" class="btn">Registrer meg!</button>
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                    </form>
                                </div>
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