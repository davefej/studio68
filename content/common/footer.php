	<!--FOOTER-->
	
	<div class="container-fluid red_footer" id="footer">
          <div class="company_details">
	          	 <div class="company_details1">
	          	 	   <a class="whitehref" href="res/files/rendelesi_feltetelek.pdf" target="_blank">Rendelési Feltételek</a><br/>
			           Stúdió 68 Reklámajándék Kft.<br/>
			           Adatkezelési azonosító: 40090<br/>
			           Cégjegyzékszám: 01-09-724274<br/>
			           
	          	 </div>
	             <div class="company_details2">
	             	<a class="whitehref" href="res/files/elismeresek.pdf" target="_blank">Elismerések</a><br/>
		           Adószám: 13219947-2-43<br/>
		           Közösségi Adószám: HU 0001679810<br/>
		           Pénzforgalmi számlaszám: 10400164-01609664-00000000<br/>
		           
	             </div>
          </div>
      </div>
	
      <div class="container-fluid">
        <div class="row">
        </div>
      </div>

      <div class="footer container-fluid" id="footer">
          <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
          </div>
          <div class="sign"><a  target="_blank" class="sign" href="http://davidanddavid.hu">©David&amp;David</a><br>2017</div>
      </div>


        <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
        <script src="res/js/jquery1.12.4.js"></script>
        <script src="res/js/jquery-ui.min.js"></script>
	    <script src="res/bootstrap/js/bootstrap.min.js"></script>
        <script src="res/js/prodlist.js?v=1"></script>
        <?php
        if($mobile == false && $page == "home"){
        	echo '<script src="res/js/vegas.js"></script>';
        	echo '<script src="res/js/animations.js?v=1"></script>';
        }
        ?>

        <script src="res/js/functions.js?v=1"></script>
        <script src="res/js/bootbox.js"></script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgpGS138e-2Fd5AMMV8TdA5JoKbmxx9zw&callback=initMap"></script>

        <script>
            (function ($) {

                $.fn.visible = function () {

                    var main_height = document.getElementById('main').clientHeight;
                    var department_height = document.getElementById('departments').clientHeight + main_height;
                    var webshop_height = department_height + document.getElementById('webshop').clientHeight;
                    var timeline_height = document.getElementById('timeline').clientHeight + webshop_height;

                    var $element = $(this).eq(0),
                        $win = $(window),

                        elemTop = $element.position().top,
                        elemBottom = elemTop + $element.height(),

                        winTop = $win.scrollTop(),
                        winBottom = winTop + $win.height();

                    if (elemBottom < winTop) {
                        return false;

                    } else if (elemTop > winBottom) {
                        return false;}
                        else {
                        return true;
                    }
                };

            })(jQuery);

            function padNum(num) {
                if (num < 10) {
                    return ' ' + num;
                }
                return num;
            }


            var $count1 = $('.first-count');
            var $count2 = $('.second-count');

            // Scrolling Functions
            $(window).scroll(function (event) {
                var first = 368; // Count up to 25x for first
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
                $('.first-count').each(function (i, el) {
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
                $('.second-count').each(function (i, el) {
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


        <?php
       if($mobile){
       	echo "<script>var usemobileview = true;</script>";
       }else{
       	echo "<script>var usemobileview = false;</script>";
       }

        ?>
	</body>
</html>
