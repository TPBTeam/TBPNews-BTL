<?php 
	require "template/component/index/header.php";
	require "template/component/index/menu.php";
	require "template/component/index/hotnews.php";
?>

		<?php
		// Hiển thị tin mới nhất 
		require "template/component/index/tinmoi.php";
		 // Kết thúc hiển thị tin mới nhất
		// Hiển thị SiderBar 
		require "template/component/index/siderbarright.php";
		 // Kết thúc SiderBar 
		?>
	
	<!-- Hiển thị Footer -->
	<?php 
		require "template/component/index/footer.php";
	?>