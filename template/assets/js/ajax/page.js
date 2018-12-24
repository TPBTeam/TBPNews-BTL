$(document).ready(function() {
	// Chức năng phần trang cho Tin mới nhất
	$(".pl_phantrang").click(function(){
		lastEl = $('.pl_phantrang').last().attr("currentpageid");
		currentpageid = $(this).attr("currentpageid");
		console.log(lastEl);
		
		if(currentpageid != '1'){
			$("#previous_tmn").css('display', 'block');
			
		}if(currentpageid == lastEl){
			$("#next_tmn").css('display', 'none');
		}
		if(currentpageid != lastEl){
			$("#next_tmn").css('display', 'block');
		}
		if(currentpageid == 1){
			$("#previous_tmn").css('display', 'none');
		}
		currentpage = $(this).attr("currentpageid");
		numpost = $(".splitpage").attr("numpost");
		isClicking = $(this);
		befcontent = isClicking.text();
		isClicking.text('Loading...');
		console.log($('#tinmoinhat').offset());
		$.ajax({
			url: 'libs/ajax/page.php',
			type: 'POST',
			dataType: '',
			data: {func: 'phantrang',currentpage: currentpage,numpost:numpost},
			success: function(result){
				html = '';
				$.each(JSON.parse(result),function(i, item) {
					html+= '<div class="list-baibao">'
					html+= '<div class="row">'
					html+= '<div class="col-lg-5">'
					html+= '<div class="div-picture">'
					html+= '<img src="template/assets/images/bim.jpg" alt="" class="picture-list" style="width:270px; height: 190px; object-fit: cover;object-position: center center;">'
					html+= '</div>'
					html+= '</div>'
					html+= '<div class="col-lg-7">'
					html+= '<div class="text-post">'
					html+= '<a href=""><h5>'+item.title+'</h5></a>'
					html+= '<ul>'
					html+= '<li><i class="far fa-user"></i> '+item.author+'</li>'
					html+= '<li><i class="far fa-clock"></i> '+item.timeago+'</li>'
					html+= '<li><i class="far fa-calendar-alt"></i> '+item.datepost+'</li>'
					html+= '</ul>'
					html+= '<p>'+item.content+'</p>'
					html+= '</div>'
					html+= '</div>'
					html+= '</div>'
					html+= '</div>'
					$("#tinmoinhat").html(html);
				});
				$("html, body").animate({scrollTop: ($(".titletinmoinhat").offset().top)}, 1000);
				isClicking.text(befcontent);
			}
		})
	});

	// Style cho button phân trang
	$(".page-link").click(function(){
		$(".page-link").removeClass('activesplit');
		$(this).addClass("activesplit");
	});
});