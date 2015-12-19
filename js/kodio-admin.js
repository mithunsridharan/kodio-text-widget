// Kodio media uploader script
jQuery(document).ready( function(){
 function media_upload( button_class) {
    var _custom_media = true,
    _kodio_original_send_attachment = wp.media.editor.send.attachment;
    jQuery('body').on('click',button_class, function(e) {
        var kodio_send_attachment = wp.media.editor.send.attachment;
        var _button_class ='.'+jQuery(this).attr('class');
        var button = jQuery(_button_class);

        wp.media.editor.send.attachment = function(props, attachment){
            if ( _custom_media  ) {
               jQuery('.custom_media_id').val(attachment.id);
               jQuery('.custom_media_url').val(attachment.url);
            } else {
                return _kodio_original_send_attachment.apply( button_id, [props, attachment] );
            }
        }
        wp.media.editor.open(button);
        return false;
    });
}
media_upload( '.kodio-image-upload-class');
});

// Kodio color picker script
jQuery(document).ready(function($){
    jQuery(".kodio-pick-color").wpColorPicker();
});
