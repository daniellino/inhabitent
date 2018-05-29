(function($) {

    //search-field" for input, search-submit for button

    $('.search-submit').on('click', function(event) {
        event.preventDefault();

        // $('.search-field').hide();

        $('.search-field').toggleClass('search-field-focus');
        $('.search-field').focus();
        $('.search-field').on('blur', function() {
            $('.search-field').toggleClass('search-field-focus');
        })
        document.addEventListener('keydown', function(event) {
            if (event.keyCode === 13) {
                $('.search-form').submit();
            }
        });

        // focus on the input field 

        // listen for enter key press and submit form 
        // try to figure out the on keypress or keydown for the enter key
        // https://api.jquery.com/keydown/
        // code to submit form...
        // $('.search-form').submit();
    });
})(jQuery);