@extends('templates.default')
@section('content')
        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Legg til</strong> oppskrift</h1>
                            <div class="description">
                                <p>
                                    På denne siden kan du <strong>legge til nye </strong> oppskrifter i kassa. Bare smell inn oppskriften under.
                                    Har du funnet en feil på siden? <a href="http://azmind.com" target="_blank"><strong>Rapporter her</strong></a>.
                                </p>
                            </div>
                        </div>
                    </div>
                        
                            
                        <div class="col-sm-6 col-sm-offset-3">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>{{ Auth::user()->getFirstnameOrUsername() }}s nye oppskrift</h3>
                                        <p>Fyll inn feltene og klikk på <strong>"Legg i dåsa"</strong></p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-cutlery"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="{{ route('recipe.post') }}" method="post" class="registration-form" enctype="multipart/form-data">
                                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                            <label class="sr-only" for="reg-email">Epost</label>
                                            <input type="text" name="title" placeholder="Navnet på retten..." class="form-email form-control" id="reg-email" value="{{ Request::old('email') ?: '' }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Bilde (kun .jpg)</label>
                                            <input type="file" name="image" class="form-control" id="image">
                                        </div>

                                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                            <label class="sr-only" for="reg-lastname">Etternavn</label>
                                            <textarea type="text" name="description" placeholder="En kort beskrivelse..." class="form-last-name form-control"></textarea>  
                                        </div>
                                        <div class="ingredient-wrapper">
                                            <div class="form-group{{ $errors->has('ingredients') ? ' has-error' : '' }}">
                                                <label class="sr-only" for="reg-lastname">Etternavn</label>
                                                <input type="text" name="ingredients[]" placeholder="Ingredienser..." class="form-last-name form-control">
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-info add-fields-button">Legg til...</button>

                                        <div class="process-wrapper">
                                            <div class="form-group{{ $errors->has('process') ? ' has-error' : '' }}">
                                                <label class="sr-only" for="reg-lastname">Etternavn</label>
                                                <textarea type="text" name="processes[]" placeholder="Fremgangsmåte..." class="form-last-name form-control"></textarea>  
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-info add-process-button">Legg til...</button>

                                        <button type="submit" name="registerform" class="btn">Legg i dåsa!</button>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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