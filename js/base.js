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
            $('.ces-meme').show();
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
    $('#fb-share-btn').click(function() {
        //$(this).attr('href', $(this).attr('href') + '&picture=' + $('#ces-meme-picture').attr('src') + '&message=' + $('#ces-meme-caption').val())
    });
});