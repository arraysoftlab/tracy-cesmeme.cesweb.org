(function($) {
    $.fn.scrollTo = function(target, complete) {
        var from = this.get(0);
        target = target === undefined ? $(from.hash) : $(target);
        complete = typeof target === "function" ? target : complete;
        if(location.pathname.replace(/^\//,'') == from.pathname.replace(/^\//,'') && location.hostname == from.hostname) {
            target = target.length ? target : $('[name=' + from.hash.slice(1) +']');
            if(target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {
                    if(typeof complete === "function") {
                        complete.apply(this, arguments);
                    }
                });
                return false;
            }
        }
        return this;
    };

    $.fn.scrollHere = function(complete) {
        var target = this;
        if(target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top
            }, 1000, function() {
                if(typeof complete === "function") {
                    complete.apply(this, arguments);
                }
            });
            return false;
        }
        return this;
    };
})(jQuery);