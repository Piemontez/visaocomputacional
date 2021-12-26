jQuery( document ).ready( function( $ ) {

    $('.cases-filter__form').submit(function () {
        $(this)
            .find('select[name]')
            .filter(function () {
                return !this.value;
            })
            .prop('name', '');
    });

    $( document ).on( 'change', '.cases-filter__form select', function() {
        $('.cases-filter__form').submit();
    });

});