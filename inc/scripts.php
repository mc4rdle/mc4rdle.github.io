<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>
<script src="js/pushy.min.js"></script>
<script src="js/jquery.vide.min.js"></script>

<script>
	$(function() {
		$('.content .work a:nth-child(1)').hover(function() {
			$('.background .media li:nth-child(1)').css('opacity', '1');
		}, function() {
			$('.background .media li:nth-child(1)').css('opacity', '0');
		});

		$('.content .work a:nth-child(2)').hover(function() {
			$('.background .media li:nth-child(2)').css('opacity', '1');
		}, function() {
			$('.background .media li:nth-child(2)').css('opacity', '0');
		});

		$('.content .work a:nth-child(3)').hover(function() {
			$('.background .media li:nth-child(3)').css('opacity', '1');
		}, function() {
			$('.background .media li:nth-child(3)').css('opacity', '0');
		});

		$('.content .work a:nth-child(4)').hover(function() {
			$('.background .media li:nth-child(4)').css('opacity', '1');
		}, function() {
			$('.background .media li:nth-child(4)').css('opacity', '0');
		});

		$('.content .work a:nth-child(5)').hover(function() {
			$('.background .media li:nth-child(5)').css('opacity', '1');
		}, function() {
			$('.background .media li:nth-child(5)').css('opacity', '0');
		});

		$('.content .work a:nth-child(6)').hover(function() {
			$('.background .media li:nth-child(6)').css('opacity', '1');
		}, function() {
			$('.background .media li:nth-child(6)').css('opacity', '0');
		});




		$('.content .pages a:nth-child(1)').hover(function() {
			$('.background .media li:nth-child(6)').css('opacity', '1');
		}, function() {
			$('.background .media li:nth-child(6)').css('opacity', '0');
		});
	});
</script>

<script>
	jQuery.fn.verticalAlign = function () {
	  return this
	    .css("margin-top",($(this).parent().height() - $(this).height())/2 + 'px' )
	};

	$('.content').verticalAlign();
</script>