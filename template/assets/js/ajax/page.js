$(document).ready(function() {
	$(".pl_phantrang").click(function(){
		currentpage = $(this).attr("id");
		numpost = $(".splitpage").attr("numpost");
		
		$.ajax({
			url: 'libs/ajax/page.php',
			type: 'POST',
			dataType: '',
			data: {func: 'phantrang',currentpage: currentpage,numpost:numpost},
			success: function(data){
				console.log(data);
			}
		})
		
		
	});
});