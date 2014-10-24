$(function() {
    $('.start-meme').click(function(e) {
        e.preventDefault();
        $('.banner').hide('slow', function() {
            $('.feedback').show();
        });
    });
    $('.create-meme').click(function(e) {
        e.preventDefault();
        $('.feedback').hide('slow', function() {
            $('.ces-meme').show('slow', function() {
                updateFbSubmit($('#ces-meme-caption').attr('placeholder'));
                $('#ces-meme-caption').on('change keyup paste', function() {
                    updateFbSubmit($(this).val());
                });
            });
        });
    });
    $('.sub-container').each(function(idx, el) {
        $(el).attr('id', 'feedback-' + (idx+1));
        if($('.sub-container').length - 1 > idx) {
            $(el).find('.feedback-options li a').attr('href', '#feedback-' + (idx+2));
        } else {
            $(el).find('.feedback-options li a').click(function(e) {
                e.preventDefault();
            });
        }
    });
    var $options = $('.feedback-options li a');
    $options.click(function() {
        $(this).closest('ul').find('li a').removeClass('selected');
        $(this).addClass('selected');
    });
    $options.click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    var $fb_btn = $('#fb-share-btn');
    var $fb_ini_href = $fb_btn.attr('href');
    function updateFbSubmit(message) {
        var query = 'share_on_fb&picture=' + encodeURIComponent($('#ces-meme-picture').attr('src')) + '&message=' + message + '&query_end';
        $fb_btn.attr('href', $fb_ini_href + '?' + query);
        console.log(decodeURIComponent($fb_btn.attr('href')))
    }
});