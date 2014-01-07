$(document).ready(function(){
    (function($) {
        $.fn.noSocial = function(helpElem)
        {

            var $social     = $(this);
            var $help       = $(helpElem);
            var _firstHover = false;

            //Actions
            $help.hide();
            $social.hover(
                function()
                {
                    if (! _firstHover) {
                        _firstHover = true;
                        $help.fadeIn(1000);
                    }
                move();
                }, function(){}
            );

            function move()
            {
                var _maxHeight  = $(window).height();
                var _maxWidth   = $(window).width();

                var _bottom = random(100, _maxHeight - 400);
                var _left = random(100, _maxWidth - 400);

                $social.css('position', 'absolute');
                
                $social.animate({
                    bottom: _bottom + 'px',
                    left: _left + 'px',
                },{
                    easing: '',
                    duration: 200,
                    complete: function(){}
                });
            }

            function random(min, max)
            {
                return Math.round((Math.random() * (max - min)) + min);
            }
        }
    })(jQuery);

    $('.myspace').noSocial('#help-social');
    $('.youtube').noSocial('#help-social');
});