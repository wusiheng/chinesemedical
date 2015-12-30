<div class="footer">
    <div class="ui container">
        <div class="ui grid centered">
            <div class="eight column row">
               <div class="seven wide column">
                  <p class="mt03">
嘉悦医疗集团
</p>
                  <p><?php echo $system['footer_desc'] ?></p>
               </div>
                 
               <div class="right floated seven wide column">
                  <p class="icons"><span class="tel"></span><b><?php echo $system['phone_number'] ?></b></p>
                  <p class="icons"><span class="mail"></span><b><?php echo $system['email'] ?></b></p>
                   <p class="icons"><span class="cform"></span><b><a class="unline" href="inquiry.php">Contact Form</a></b></p>
                   <p class="icons"><span class="add"></span><b><?php echo $system['address'] ?><a class="unline" href="location.php">Map ></a></b></p>
                   
               </div>
            </div>
            <div class="eight column row nop">
                <div class="left floated seven wide column">
                  <p class="copyr"><?php echo $system['copyright'] ?></p>
                    
                </div>
                <div class="right floated seven wide column">
                   <!--  <p class="copyr">Design by <a href="http://www.c-m.hk" target="blank">Creation Media</a></p> -->
                    
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- build:js(app) /_/js/main.js -->
        <script src="/_/bower_components/jquery/dist/jquery.js"></script>
        <script src="/_/bower_components/html5-boilerplate/js/plugins.js"></script>
         <script src="/_/bower_components/lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>
         <script src="/_/bower_components/masonry/dist/masonry.pkgd.min.js"></script>
         <script src="/_/bower_components/flexslider/jquery.flexslider.js"></script>
        <script src="/_/js/form.min.js"></script>
        <script src="/_/js/functions.js"></script>
        <script src="/_/js/validation.js"></script>
        <script type="text/javascript">
$(document).ready(function(){
 $('#flexslider').flexslider({controlNav: false,directionNav: false});
  // init Masonry
  var $grid = $('#grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
  });
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});
$('.ui.checkbox').checkbox();      
 
});
    
   

</script>
        <!-- endbuild -->


<!-- build:remove:dist -->
<script src="//localhost:99/livereload.js"></script>

<!-- /build -->
    </body>

</html>