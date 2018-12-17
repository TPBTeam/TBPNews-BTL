$(document).ready(function() {

	// Thêm chuyên mục
	$("#addcate").click(function(){
		namecate = $("#namecate").val();
		linkstatic = $("#linkstatic").val();
		description = $("#description").val();
		$.ajax({
			url: 'libs/ajax/categories.php',
			type: 'POST',
			dataType: 'json',
			data: {func: 'addcategories',namecate: namecate,linkstatic: linkstatic,description: description,},
			success: function(result){
				switch(result['0']['0']){
					case 'isEmptyName':
					$("#alertcategoriesname").text("Thư mục không được để trống");
					break;
					case 'isEmptyLink':
					$("#alertcategorieslink").text("Đường dẫn không được để trống");
					break;

					case 'isExistName':
					$("#alertcategoriesname").text("Tên thư mục đã tồn tại");
					break;

					case 'isExistLink':
					$("#alertcategorieslink").text("Đường dẫn đã tồn tại");
					break;

					case 'errorInsertDatabase':
					alert("Lỗi không thể thêm dữ liệu, vui lòng báo lại với bộ phận kỹ thuật");
					break

					default:
					console.log(result);
					changehtml ='';
					popup = '';
					$.each(result,function(i,item){
						changehtml += "<tr id='tr"+item['idcate']+"'>";
						changehtml += "<th scope='row' class='titlecate'><a href='#'>"+item['label']+"</a>";
						changehtml += "<div class='toolcate'>";
						changehtml += "<ul>";
						changehtml += "<li class='editclass'>";
						changehtml += "<a href='#'>Chỉnh sửa</a>";
						changehtml += "</li>";
						changehtml += "<span> | </span>";
						changehtml += "<li class='deleteclass'>";
						changehtml += "<div data-toggle='modal' data-target='#myModal"+item['idcate']+"'>Xóa</div>";
						changehtml += "</li>";
						changehtml += "</ul>";
						changehtml += "</div>";
						changehtml += "</th>";
						changehtml += "<td width='100' class='description'><p>"+item['description']+"</p></td>";
						changehtml += "<td>"+item['url']+"</td>";
						changehtml += '</tr>';
						popup += "<div class='modal fade' id='myModal"+item['idcate']+"'>";
						popup += "<div class='modal-dialog'>";
						popup += "<div class='modal-content'>";
						popup += "<div class='modal-header'>";
						popup += "<h4 class='modal-title'>Xác nhận xóa thư mục</h4>";
						popup += "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
						popup += "</div>";
						popup += "<div class=modal-body>";
						popup += "Bạn có chắc chắn muốn xóa thư mục này không?";
						popup += "</div>";
						popup += "<div class='modal-footer'>";
						popup += "<button class='btn btn-primary delcategory'  type='button' idcate='"+item['idcate']+"' data-dismiss='modal'>Có</button>";
						popup += "<button type='button' class='btn btn-danger' data-dismiss='modal'>Không</button>";
						popup += "</div></div></div></div>";
					})
					$("#ajcate > tr:first").before(changehtml);
					// $("#displayCategories").find(".modal").remove();
					$("#displayCategories").append(popup);
				}
				
			}
		})
		
	});

	// Xóa chuyên mục
	$("#displayCategories").on('click','.delcategory',function(){
		console.log("Hello");
		idcate = $(this).attr("idcate");
		$.ajax({
			url: 'libs/ajax/categories.php',
			type: 'POST',
			dataType: '',
			data: {func: 'deletecategories',idcate: idcate},
			success:  function(result) {
				console.log($("#tr"+idcate+""));
				$("#tr"+idcate+"").remove();
			}
		})
	})

	
    // Create Slug for Categories
    $("#namecate").keyup(function() {
    	url = $("#namecate").val().toLowerCase();
    	slug = url.toLowerCase();
    	// urlfirst = $("#linkstatic").val();
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');

        // if(urlfirst != slug){
        // 	$.post("libs/ajax/categories.php",{slug: slug},function(data){
        // 		$("#alertcategorieslink").html(data);
        // 	})
        // }
        //In slug ra textbox
        $("#linkstatic").val(slug);
    })
    // Check Existed for Link Categories
    
    // $("#linkstatic").focusin(function() {
    // 	url = $(this).val();
    // 	console.log(url);
    // 	/* Act on the event */
    // });
});