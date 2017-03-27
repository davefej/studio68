 		<!--FOOTER-->
        <div class="footer container-fluid" id="footer">
            <div class="sk-folding-cube">
              <div class="sk-cube1 sk-cube"></div>
              <div class="sk-cube2 sk-cube"></div>
              <div class="sk-cube4 sk-cube"></div>
              <div class="sk-cube3 sk-cube"></div>
            </div>
            <div class="sign">©David&amp;David<br>2017</div>
        </div>
        <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery1.12.4.js"></script>
        <script src="js/jquery-ui.min.js"></script>
	    <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/vegas.js"></script>
        <script src="js/functions.js"></script>
        <?php if($page == "eco")
            echo '<script type="text/javascript" src="js/animation-eco.js"></script>';
        else
            echo '<script type="text/javascript" src="js/animations.js"></script>';
        ?>
        <script src="js/sly.min.js"></script>
        <script type="text/javascript" src="js/team-js.js"></script>
        
        <script>
            (function ($) {

                $.fn.visible = function () {

                    var $element = $(this).eq(0),
                        $win = $(window),

                        elemTop = $element.position().top,
                        elemBottom = elemTop + $element.height(),

                        winTop = $win.scrollTop(),
                        winBottom = winTop + $win.height();

                    if (elemBottom < winTop - document.getElementById("timeline").clientHeight) {
                        return false;
                    } else if (elemTop > winBottom - document.getElementById("timeline").clientHeight) {
                        return false;
                    } else {
                        return true;
                    }        
                };

            })(jQuery);

            function padNum(num) {
                if (num < 10) {
                    return " " + num;
                }
                return num;
            }


            var $count1 = $('.first-count');
            var $count2 = $('.second-count');

            // Scrolling Functions
            $(window).scroll(function (event) {
                var first = 25662; // Count up to 25x for first
                var second = 21233; // Count up to 4x for second

                function countStuffUp(points, selector, duration) {
                    //Animate count
                    var $selector = $(selector);
                    $selector.addClass('counting');

                    var $counter = $({
                        countNumber: $selector.text()
                    }).animate({
                        countNumber: points
                    }, {
                        duration: duration,
                        easing: 'linear',
                        step: function (now) {
                            //console.log(now);
                            $selector.data('remaining', (points - now) * (duration / points));
                            $selector.text(padNum(parseInt(this.countNumber)));
                        },
                        complete: function () {
                            $selector.removeClass('counting');
                            $selector.text(points);

                        }
                    });

                    $selector.data('counter', $counter);
                }

                // Output to div
                $(".first-count").each(function (i, el) {
                    var el = $(el);
                    if (el.visible() && !el.hasClass('counting')) {
                        var duration = el.data('remaining') || 4000;
                        console.log('duration', duration);
                        countStuffUp(first, '.first-count', duration);
                    } else if (!el.visible() && el.hasClass('counting')) {
                        el.data('counter').stop(true);
                        el.removeClass('counting');
                    }
                });

                // Output to div
                $(".second-count").each(function (i, el) {
                    var el = $(el);
                    if (el.visible() && !el.hasClass('counting')) {
                        var duration = el.data('remaining') || 4000;
                        countStuffUp(second, '.second-count', duration);
                    } else if (!el.visible() && el.hasClass('counting')) {
                        el.data('counter').stop(true);
                        el.removeClass('counting');
                    }
                });
            });
        </script>
	</body>
</html>