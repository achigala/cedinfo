<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style>
			html, body{
				height: 100%;
				margin: auto;
			}
		</style>
	</head>
	<body>
		<iframe id="page1" style="width: 100%;"></iframe>
	</body>
	<script type="text/javascript">
		setInterval(function () {
			$.get('/motion/readstatus.php', function (data) {
				var page = document.getElementById("page1");
				if (data === "0") {
					//alert(data);
					page.src = "/frontend/views/teacher/index2.php";
				} else if (data === "1") {
					//alert(data);
					//page.src = "/index.php";
				}
			});
		}, 1000);
	</script>
</html>
