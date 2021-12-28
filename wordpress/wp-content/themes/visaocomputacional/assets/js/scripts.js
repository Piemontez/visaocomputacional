jQuery( document ).ready(function() {
    if (jQuery('.active-category').length < 1) {
        jQuery(".vc-list-category").first().addClass('active-category');
        jQuery(".btn-list-category").first().addClass('active');
    }

    jQuery(".btn-list-category").on('click', function() {
        let id_category = jQuery(this).attr('id');
        jQuery(".vc-list-category").removeClass('active-category');
        jQuery("#list-"+id_category).addClass('active-category');
        
        jQuery(".btn-list-category").removeClass('active');
        jQuery("#"+id_category).addClass('active');
    })
});
