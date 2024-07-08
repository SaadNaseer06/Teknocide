<script src="assets/js/jquery.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/gsap.js"></script>
<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<script>
	new WOW().init();
	
	$(function() {
    $('a[data-modal]').on('click', function() {
      $($(this).data('modal')).modal({
    fadeDuration: 250
  });
      return false;
    });
  });
  
</script>
