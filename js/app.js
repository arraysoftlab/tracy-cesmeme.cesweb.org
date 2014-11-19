$(function () {
    var total_questions = 5;
    var answered_count = 0;
    $('#create-meme').click(function (e) {
        e.preventDefault();
        if (answered_count == total_questions) {
            location.href = e.target.href
        } else {
            swal({
                title: "Error!",
                text: "Please answer all questions first.",
                type: 'error',
                timer: 5000
            });
        }
    });
    $('.sub-container').each(function (idx, el) {
        $(el).attr('id', 'feedback-' + (idx + 1));
        var $option = $(el).find('.feedback-options li a');
        if ($('.sub-container').length - 1 > idx) {
            $option.attr('href', '#feedback-' + (idx + 2));
        } else {
            $option.attr('href', '#create-meme');
        }
        $option.click(function (e) {
            e.preventDefault();
        });
    });
    var $options = $('.feedback-options li a');
    $options.click(function () {
        var selected_option = $(this).closest('ul').find('li a.selected');
        if (selected_option.length) {
            selected_option.removeClass('selected');
            removeAnswer();
        }
        $(this).addClass('selected');
        if (addAnswer()) {
            $(this).scrollTo();
        }
    });

    function addAnswer() {
        answered_count++;
        if (answered_count == total_questions) {
            var $createMemeLink = $('#create-meme');
            $createMemeLink.scrollHere();
            var attendFrom = $('.attend-from .feedback-options ul li a.selected').data('option');
            var $memePictures = $('#meme-pictures');
            var src = $memePictures.find('#domestic').attr('src');
            if (attendFrom == 'international') {
                $createMemeLink.attr('href', $createMemeLink.attr('href') + '?international');
            }
            return false;
        }
        return true;
    }

    function removeAnswer() {
        answered_count--;
    }

    if($('.ces-meme').length) {
        var $fb_btn = $('#fb-post-btn');
        var $tw_btn = $('#tw-post-btn');
        var $gp_btn = $('#gp-post-btn');
        var $fb_ini_href = $fb_btn.attr('href');
        var $tw_ini_href = $tw_btn.attr('href');
        var $gp_ini_href = $gp_btn.attr('href');
        var captionBox = $('#ces-meme-caption');
        setMemePicture();
        updatePostButtons(captionBox.attr('placeholder'));
        captionBox.on('change keyup paste', function () {
            updatePostButtons($(this).val());
        });
        function setMemePicture() {
            var $memePicture = $('#ces-meme-picture');
            var $memePictures = $('#meme-pictures');
            var src = $memePictures.find('#domestic').attr('src');
            if (location.search.indexOf('international') != -1) {
                src = $memePictures.find('#international').attr('src');
            }
            $memePicture.attr('src', src);
            $('#download-meme').attr('href', src);
        }


        function updatePostButtons(message) {
            var $picture = $('#ces-meme-picture');
            var query = 'post_on_fb&picture=' + encodeURIComponent($picture.attr('src')).replace(/\%20/g, '+') +
                '&message=' + encodeURIComponent(message).replace(/\%20/g, '+') + '&query_end';
            $fb_btn.attr('href', $fb_ini_href + '?' + query);
            query = 'post_on_tw&picture=' + encodeURIComponent($picture.attr('src')).replace(/\%20/g, '+') +
            '&message=' + message + '&query_end';
            $tw_btn.attr('href', $tw_ini_href + '?' + query);
            query = 'url=' + encodeURIComponent($picture.attr('src')).replace(/\%20/g, '+');
            $gp_btn.attr('href', $gp_ini_href + '?' + query);
        }
    }
});