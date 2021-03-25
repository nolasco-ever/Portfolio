<!DOCTYPE HTML>
<html>
	<head>
		<title>Project</title>
		<link rel="stylesheet" href="CSS/projects-present-style.css">
	</head>

	<body>
		<?php
			if(isset($_POST['goToProject'])){
				$id = $_POST['id'];

				echo $id;
			}
		?>

		<img src="logos/white-2.png" alt="" id="logo">

		<div id="title-head">
			<img src="uploads/adrianne.png" alt="" id="head-img">
			<div id="title">[Title]</div>
		</div>

		<div id="desc-container">
			<p id="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Elit eget gravida cum sociis natoque penatibus et. Id semper risus in hendrerit gravida rutrum. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum. Accumsan lacus vel facilisis volutpat. Orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt. Dui vivamus arcu felis bibendum ut tristique et egestas quis. Est placerat in egestas erat imperdiet sed euismod nisi porta. Auctor augue mauris augue neque gravida in. Sit amet tellus cras adipiscing. Non blandit massa enim nec dui nunc mattis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis. Pretium lectus quam id leo.</p>

			<div id="links">
				<a href=""><img src="" alt="" id="github"></a>
				<a href=""><img src="" alt="" id="website"></a>
			</div>
		</div>

		<div id="img-container">
			<img src="" alt="" id="img1">
			<img src="" alt="" id="img2">
			<img src="" alt="" id="img3">
		</div>
	</body	
</html>