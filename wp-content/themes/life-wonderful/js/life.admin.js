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

    });
    $('#page_video_gallery input').each(function () {
        try{
            var ID = $(this).val().match('=(.+)')[1];
        }catch (error){

        }

        var video_thumb = "https://i.ytimg.com/vi/"+ID+"/default.jpg";
        if (ID){
            console.log($(this).parent().find('.video-thumb'));
            $(this).parent().find('.video-thumb').attr('src',video_thumb);
        }
    });
    $('#page_video_gallery input').on('input',function () {
        var ID = $(this).val().match('=(.+)')[1];
        // var video_thumb = "https://i.ytimg.com/vi/"+ID+"/hqdefault.jpg";
        var video_thumb = "https://i.ytimg.com/vi/"+ID+"/default.jpg";
        if (ID){
            console.log($(this).parent().find('.video-thumb'));
            $(this).parent().find('.video-thumb').attr('src',video_thumb);
        }
    });

});