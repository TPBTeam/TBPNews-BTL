$(document).ready(function() {

	// Xử lý phần ảnh đại diện
	$("#photothumb").change(function(){
		console.log("Ngoài");
		$( "#formthumb" ).submit(function( event ) {
			alert( "Handler for .submit() called." );
			event.preventDefault();
		});
		// $("#formthumb").submit(function(){
		// 	alert("Hello");
		// 	event.preventDefault();
		// });


		
		
	});

	// Xử lý phần checkall
	$("#checkall").change(function(){
		if($("#checkall").is(":checked")){
			for (var i = 0; i < $(".checkpost").length; i++) {
				$(".checkpost")[i].checked = true;
			}
		}else{
			for (var i = 0; i < $(".checkpost").length; i++) {
				$(".checkpost")[i].checked = false;
			}
		}
	});
	//Tự động get link từ tiêu đề ahihi
	$("#titleval").keyup(function(){
		urlval = $(this).val();
		$.ajax({
			url: 'libs/ajax/posts.php',
			type: 'POST',
			dataType: '',
			data: {func: 'getLinkfromTitle',urlval: urlval},
			success:function(data){
				$("#urlval").val(data);
			}
		})
	});

	

	// Thêm bài viết
	$(".createpostbtn").click(function(){
		title = $("#titleval").val();
		url = $("#urlval").val();
		content = CKEDITOR.instances.updatepostarea.getData();
		status = $("#optionstatus").val();
		category = $("#optioncategories").val();
		positionadd = $("#optionposition").val();
		$.ajax({
			url: 'libs/ajax/posts.php',
			type: 'POST',
			dataType: '',
			data: {
				func: 'addpost',
				positionadd: positionadd,
				title: title,
				url: url,
				content: content,
				status: status,
				category: category,
			},
			success: function(data){
				console.log(data);
			}
		})
	});

	// Xóa bài viết
	$(".delpost").click(function() {
		idpost = $(this).attr("idpost");
		console.log("hello");
		$.ajax({
			url: 'libs/ajax/posts.php',
			type: 'POST',
			dataType: '',
			data: {
				func :'delpost',
				idpost: idpost},
				success: function(data){
					$("#tr"+idpost).remove();
					console.log(data);
				}
			})
	});
	
	// Phần thông tin
	$("#editstatus").click(function(){
		$(this).css('display', 'none');
		$(".accepteditstatus").click(function(){
			$("#editstatus").css('display','inline-block');
			$(".editstatus").collapse('hide');
		})
	})
	$("#editpositionadd").click(function(){
		$(this).css('display', 'none');
		$(".accepteditposition").click(function(){
			$("#editpositionadd").css('display','inline-block');
			$(".editpositionadd").collapse('hide');
		})
	})
	// Chỉnh sửa trạng thái
	$(".accepteditstatus").click(function() {
		if($("#optionstatus").val() == 'Công khai'){
			$(".statuseditpost").text("Công khai");
			$(".statuseditpost").removeClass('pendingstatus');
			$(".statuseditpost").addClass('publicstatus');
		}else{
			$(".statuseditpost").text("Chờ xét duyệt");
			$(".statuseditpost").removeClass('publicstatus');
			$(".statuseditpost").addClass('pendingstatus');
		}
	});

	$(".accepteditposition").click(function() {
		switch($("#optionposition").val()){
			case 'Normal':
			$(".postionaddpost").text("Normal");
			break;
			case "Hot News":
			$(".postionaddpost").text("Hot News");
			break;
			case "List Menu1":
			$(".postionaddpost").text("List menu 1");
			break;
			case "List Menu2":
			$(".postionaddpost").text("List menu 2");
			break;
			case "List Menu3":
			$(".postionaddpost").text("List menu 3");
			break;
			case "Siderbar Left":
			$(".postionaddpost").text("Siderbar Left");
			break;
		}
	});

	// Thêm chuyên mục
	$("#addcategories").click(function(){
		namecate = $("#categoryval").val();
		$.ajax({
			url: 'libs/ajax/posts.php',
			type: 'POST',
			dataType: '',
			data: {func: 'addcate',namecate: namecate},
			success: function(data){
				console.log(data);
				if(data == 'TRUE'){
					$("#alertadcate").text('Thêm thành công');
					$("#optioncategories").prepend("<option>"+namecate+"</option>");
				}else if(data == "EXIST"){
					$("#alertadcate").text('Thư mục đã tồn tại');
				}else{
					$("#alertadcate").text('Tên thư mục không được để trống');
				}
			}
		})
		
		
	});
	// Cập nhật bài viết
	$(".updatepostbtn").click(function() {
		
		idpost = $(this).attr("id");
		var d = new Date();
		var year = d.getFullYear();
		var month = d.getMonth()+1;
		var day = d.getDate();
		var hour = d.getHours();
		var minutes = d.getMinutes();
		var seconds = d.getSeconds();
		title = $("#titleval").val();
		url = $("#urlvalud").val();
		content = CKEDITOR.instances.updatepostarea.getData();
		status = $("#optionstatus").val();
		category = $("#optioncategories").val();
		typename = $("#optionposition").val();
		$.ajax({
			url: 'libs/ajax/posts.php',
			type: 'POST',
			dataType: '',
			data: {
				isajax : 'isajax',
				idpost : idpost,
				title : title,
				url : url,
				content : content,
				year : year,
				month : month,
				day : day,
				hour : hour,
				minutes : minutes,
				seconds : seconds,
				status : status,
				category : category,
				typename:typename,
			},
			success: function(data){
				$("html, body").animate({ scrollTop: 0},500);
				$("#alerteditpost").html(data);
			}
		})
	});
});