<?php
/*
	Cookies
	kích thước bé: 4KB
	lưu thông tin người dùng, trải nghiệm người dùng trên website 
	Đặc điểm
	được lưu trên máy tính cá nhân người dùng bởi trình duyệt
	cấu trúc: cặp [key=>value] + thời gian cookies hết hạn, tên miền,..
	mục đích:
		- quản lý session
		- quản lý đăng nhập
		- theo dõi thông tin trải nghiệm người dùng
		- hoạt động của cookies
quản lý cookies: setcookies([key=>value)): lưu cookies trên máy
		- lấy giá trị cookies: $ COOKIE
*/

	//setcookie('username', 'Nguyễn Văn A', time() + 3600, "/myweb"); //Có giá trị trong 1 giờ
	if (isset($_COOKIE ['username']))
	{
		echo "Xin chào bạn " . htmlspecialchars($_COOKIE['username']);
	}
	else{
		echo "Không có cookies!";
	}