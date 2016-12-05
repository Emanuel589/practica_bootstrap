 <!-- Latest compiled and minified JavaScript -->
 <script src="js/jquery-3.1.1.min.js"></script>
 <!-- Latest compiled and minified JavaScript -->
 <script src="js/bootstrap.min.js"></script>
 <!-- Para ocultar menu movil -->
 <script>
     function toggleMobileMenu(){
     	var $mobileMenu = $('#mobile-main-menu');
     	$mobileMenu.slideToggle('fast');
     }

     $(document).ready(function(){
     	$('#mobile-menu-button').on('click',toggleMobileMenu)
     });
 </script>