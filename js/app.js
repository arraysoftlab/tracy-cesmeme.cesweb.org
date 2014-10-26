$(function() {
    var total_questions = 5;
    var answered_count = 0;
    $('.start-meme').click(function(e) {
        e.preventDefault();
        $('.banner').hide('slow', function() {
            $('.feedback').show();
        });
    });
    $('#create-meme').click(function(e) {
        e.preventDefault();
        if(answered_count == total_questions) {
            $('.feedback').hide('slow', function() {
                $('.ces-meme').show('slow', function() {
                    var attendFrom = $('#attend-from .feedback-options ul li a.selected').data('option');
                    var captionBox = $('#ces-meme-caption');
                    setMemePicture(attendFrom);
                    updateFbSubmit(captionBox.attr('placeholder'));
                    captionBox.on('change keyup paste', function() {
                        updateFbSubmit($(this).val());
                    });
                });
            });
        } else {
            $('.validation-error').show();
        }
    });
    $('.sub-container').each(function(idx, el) {
        $(el).attr('id', 'feedback-' + (idx+1));
        if($('.sub-container').length - 1 > idx) {
            $(el).find('.feedback-options li a').attr('href', '#feedback-' + (idx+2));
        } else {
            $(el).find('.feedback-options li a').attr('href', '#create-meme');
            $(el).find('.feedback-options li a').click(function(e) {
                e.preventDefault();
            });
        }
    });
    var $options = $('.feedback-options li a');
    $options.click(function() {
        var selected_option = $(this).closest('ul').find('li a.selected');
        if(selected_option.length) {
            selected_option.removeClass('selected');
            removeAnswer();
        }
        $(this).addClass('selected');
        addAnswer();
        go(this);
    });

    function addAnswer() {
        answered_count++;
        if(answered_count == total_questions) {
            $('.validation-error').hide();
            go($('#create-meme')[0])
        }
    }

    function removeAnswer() {
        answered_count--;
    }

    function setMemePicture(attendFrom) {
        var $memePicture = $('#ces-meme-picture');
        var $memePictures = $('#meme-pictures');
        var src = $memePictures.find('#domestic').attr('src');
        if(attendFrom == 'international') {
            src = $memePictures.find('#international').attr('src');
        }
        $memePicture.attr('src', src);
    }

    function go(from) {
        if (location.pathname.replace(/^\//,'') == from.pathname.replace(/^\//,'') && location.hostname == from.hostname) {
            var target = $(from.hash);
            target = target.length ? target : $('[name=' + from.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    }

    var $fb_btn = $('#fb-share-btn');
    var $fb_ini_href = $fb_btn.attr('href');
    function updateFbSubmit(message) {
        var query = 'share_on_fb&picture=' + encodeURIComponent($('#ces-meme-picture').attr('src')).replace(/\%20/g, '+') +
            '&message=' + encodeURIComponent(message).replace(/\%20/g, '+') + '&query_end';
        $fb_btn.attr('href', $fb_ini_href + '?' + query);
        console.log(decodeURIComponent($fb_btn.attr('href')))
    }
});