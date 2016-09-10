$(document).ready(function() {
    var max_fields      = 10;
    var wrapper         = $(".ingredient-wrapper");
    var add_button      = $(".add-fields-button");

    var x = 1;
    $(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){
            x++;
            $(wrapper).append('<div class="form-group"><label class="sr-only" for="reg-lastname">Etternavn</label><input type="text" name="ingredients[]" placeholder="Ingredienser..." class="form-last-name form-control"></div>');
        }
    });
});