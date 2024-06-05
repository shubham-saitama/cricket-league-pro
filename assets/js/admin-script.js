jQuery(document).ready(function($){
    // Upload trophy image
    jQuery('.trophy_upload_button').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Trophy Image',
            multiple: false
        }).open().on('select', function(e){
            var uploaded_image = image.state().get('selection').first();
            var image_url = uploaded_image.toJSON().url;
            jQuery('#trophy_image').val(image_url);
        });
    });

    // Upload team logo image
    jQuery('.team_logo_upload_button').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Team Logo Image',
            multiple: false
        }).open().on('select', function(e){
            var uploaded_image = image.state().get('selection').first();
            var image_url = uploaded_image.toJSON().url;
            jQuery('#team_logo_image').val(image_url);
        });
    });
});
