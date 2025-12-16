<?php
//session có giá trị từ lúc bắt đầu cho đến khi đóng trình duyệt
//Để start sesion dùng: sesion_start{};
//Để đặt giá trị cho sesion: $_SESION['TÊN BIẾN'] = 'VALUE'

session_start();
?>

<!DOCTYPE html>
<html lang='vi'>
	<head>
		<title>Test Session </title>
	</head>
	<body>
		<?php
			$_SESSION['subject'] = 'Ngôn ngữ lập trình PHP';
			$_SESION['grade'] = 10;
			echo "Session variable are set. <br>";
		?>
	</body>
</html>