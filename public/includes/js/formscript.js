$(document).ready(function() {
    var max_fields      = 20;
    var wrapper         = $(".iwrap");
    var add_button      = $(".add-fields-button");

    var x = 1;
    $(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){
            x++;
            $(wrapper).append('<div class="form-group iwrap"><label class="sr-only" for="reg-lastname">Etternavn</label><input type="text" name="ingredients[]" placeholder="Ingredienser..." class="form-last-name form-control"></div>');
        }
    });

    var process_wrapper     = $('.pwrap');
    var add_process_button  = $('.add-process-button');
    var y = 1;

    $(add_process_button).click(function(e){
        e.preventDefault();
        if(y < max_fields){
            y++;
            $(process_wrapper).append('<div class="form-group pwrap"><label class="sr-only" for="reg-lastname">Etternavn</label><textarea type="text" name="processes[]" placeholder="Fremgangsmåte..." class="form-last-name form-control"></textarea>  </div>');
        }
    });

});