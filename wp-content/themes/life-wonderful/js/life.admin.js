var $ = jQuery.noConflict();
jQuery(document).ready(function ($) {

    var mediaUploader;

    $('#upload-pic').on('click',function (e) {
        e.preventDefault();
        if (mediaUploader){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            // title: 'Choose file',
            // button:{
            //     text: 'pick foto'
            // },
            multiple: false
        });
        mediaUploader.on('select',function () {
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#profile_pic').val(attachment.url);
            $('.card-img-top').prop('src',attachment.url);
        });
    });
    $('#remove-pic').on('click',function (e) {
        e.preventDefault();
        var answer = confirm('Вы уверены, что хотите удалить фото?');
        if (answer){
            $('#profile_pic').val('');
            $('.card-img-top').hide();
            $('#life_opt').submit();
        }

    })

});