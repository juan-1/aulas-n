$(document).ready(function() {
    //Enable bootstrap tooltips
    if ($("[data-tooltip=tooltip]").length) {
        $("[data-tooltip=tooltip]").tooltip();
    }
    
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        var input = $(this).parents('.input-group').find(':text');
        if (input.length) {
            input.val(label);
        }
    });
    
    //Checks if there are forms in the HTML and enables validation, replaces default behavior to use Bootstrap classes.
    if ($('form').length) {
        $('form').validate({
            onBlur: true,
            onSubmit: true,
            //Overrides default invalid message for the form
            invalid: function() {
                alert('Algunos de los datos no son correctos');
            },
            //Override default classes to use newest Bootstrap classes
            eachInvalidField : function() {
                $(this).closest('div').addClass('has-error');
            },
            eachValidField: function() {
                $(this).closest('div').removeClass('has-error');
            },
            //Overrides pattern mismatch and required messages, localization could be achieved using languages in js files
            description : {
                common: {
                    required : function() {
                        return $(this).data('msgrequired') || 'Este dato es requerido';
                    },
                    pattern : function() {
                        return $(this).data('msgerror') || 'El dato proporcionado no es válido';
                    }
                }
            }
        });
    }
});