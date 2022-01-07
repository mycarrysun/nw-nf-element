/**
 * Created by Mike on 1/1/2017.
 */
(function($){

    $(document).ready(function(){
        var $thumbs = $('.hib-link .hib-image-thumb');
        var $links = $('.hib-link');
        var count = 0;

        $links.each(function(){
            var image = $(this).parent().data('bg-image');
            $(this).data('bg-id', count);
            $(this).closest('.x-section').prepend('<img src="'+image+'" class="hib-bg-image" id="hib-bg-'+count+'" />');
            count++;
        });

        $(this).delegate('.hib-link', 'mouseover', function(){
            var thumb = $(this).find('.hib-image-thumb');
            var bg_id = $(this).data('bg-id');
            var $bg = $('#hib-bg-'+bg_id);

            $bg.css('opacity', 1);
            $thumbs.not(thumb).css('opacity', 0.5);

            if( window.outerWidth > 991 && window.outerHeight > 768 ){
                //only hide elements if on desktop
                var hide_class = $(this).data('hide-class');
                var $hide_els = $(this).closest('.x-section').find('.'+hide_class);
                $hide_els.css('opacity', 0);
            }

        });

        $(this).delegate('.hib-link', 'mouseout', function(){
            var hide_class = $(this).data('hide-class');
            var $hide_els = $('.'+hide_class);
            $('.hib-bg-image').css('opacity', 0);
            $thumbs.css('opacity', 1);
            $hide_els.css('opacity', 1);
        })
    })
})(jQuery);