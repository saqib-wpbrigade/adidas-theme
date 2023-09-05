(function($){
	(function($) {
        console.log('admin.js');
    
        $('#upload_slider_image_button').click(function() {
            var custom_uploader = wp.media({
                title: 'Upload Slider Image',
                button: {
                    text: 'Select Image'
                },
                multiple: false
            });
    
            custom_uploader.on('select', function() {
                var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('#slider_image_url').val(attachment.url);
                $('#slider_image_preview').attr('src', attachment.url);
                $('#upload_img').val(attachment.url);
            });
    
            custom_uploader.open();
        });
    
        // Access the localized variable
        console.log(adidas_ajax.ajax_url); // Example: Accessing ajax_url
    
    })(jQuery);
    

})( jQuery );