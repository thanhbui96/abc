<?php

ob_start();
include "../language/config.php";
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title><?php   echo $lang['dangnhap']?></title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->

<style type="text/css">
	
body {
    background: url(../image/1.jpg)no-repeat center top;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-attachment: fixed;
    background-position: center;
    text-align: center;
	font-family: 'Open Sans', sans-serif;
}
/*--header--*/
.header-w3l {
    padding-top: 2em;
}
.header-w3l h1 {
    font-size: 3em;
    color: white;
    letter-spacing: 8px;
    font-weight: 500;
    font-family: 'Dosis', sans-serif;
    text-transform: uppercase;
    text-shadow: 5px 3px 5px #101010;
}
/*--//header--*/

/*--main--*/
.wthree-pro h2 {
    font-size: 1.2em;
    color: #fff;
    letter-spacing: 4px;
    margin-bottom: 1.5em;
    text-transform: uppercase;
}
.sub-main-w3 input[type="text"], .sub-main-w3 input[type="password"] {
    outline: none;
    font-size: .9em;
    padding: 1em 3em 1em 1em;
    border: none;
    margin-bottom: 0.3em;
    background: rgba(255, 255, 255, 0.85);
    width: 82%;
    color: #000;
    border-radius: 30px;
    font-weight: 400;
	font-family: 'Open Sans', sans-serif;
    letter-spacing: 1px;
}
.sub-main-w3 {
    width: 26%;
    margin: 10em auto 12em;
}
.sub-w3l h6 a {
    font-size: .9em;
    color: #fff;
    letter-spacing: 1px;
    text-align: right;
    display: inherit;
}
.sub-w3l {
    margin-top: 1em;
}
.right-w3l {
    margin-top: 2em;
}
.pom-agile {
    position: relative;
}
input.pass {
    margin-top: .7em;
}
span.icon1, span.icon2 {
    color: #ea2858;
    font-size: 1.1em;
    position: absolute;
    right: 6%;
}
span.icon1 {
    top: 23%;
}
span.icon2 {
    top: 34%;
}
.sub-main-w3 input[type="submit"] {
    color: white;
    background: #ea2858;
    border: none;
    padding: .7em 0;
    outline: none;
    width: 44%;
    font-size: 1em;
    cursor: pointer;
    letter-spacing: 1px;
    font-weight: 400;
    font-family: 'Open Sans', sans-serif;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    border-radius: 30px;
}
.sub-main-w3 input[type="submit"]:hover {
    background: #fff;
    color: black;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-o-transition:0.5s all;
	-moz-transition:0.5s all;
	-ms-transition:0.5s all;
}
/*--//main--*/

/*--footer--*/
.footer p {
    font-size: .9em;
    color: white;
    letter-spacing: 2px;
}
.footer p a {
    color: #fff;
}
.footer p a:hover {
    color: #ea2858;
}
/*--//footer--*/

/*--responsive--*/

@media(max-width: 1680px){

}
@media(max-width: 1600px){

}
@media(max-width: 1440px){
	.footer {
		padding-bottom: 3em;
	}
	.sub-main-w3 {
		width: 29%;
		margin: 7em auto 9em;
	}
}
@media(max-width: 1366px){

}
@media(max-width: 1280px){

}
@media(max-width: 1080px){
	.sub-main-w3 {
		width: 35%;
	}
}
@media(max-width: 1050px){

}
@media(max-width: 1024px){
	.sub-main-w3 {
		width: 38%;
	}
}
@media(max-width: 991px){

}
@media(max-width: 900px){
	.header-w3l {
		padding-top: 1.5em;
	}
	.sub-main-w3 {
		width: 42%;
		margin: 6em auto 8em;
	}
	.footer {
		padding-bottom: 2.5em;
	}
}
@media(max-width: 800px){
	.header-w3l h1 {
		font-size: 2.7em;
		letter-spacing: 7px;
	}
}
@media(max-width: 768px){
	.header-w3l {
		padding-top: 4.5em;
	}
	.sub-main-w3 {
		width: 50%;
		margin: 10em auto 16em;
	}
}
@media(max-width: 736px){
	.header-w3l {
		padding-top: 1.5em;
	}
	.sub-main-w3 {
		margin: 5em auto 6.5em;
	}
}
@media(max-width: 667px){
	.footer {
		padding-bottom: 2em;
	}
}
@media(max-width: 640px){

}
@media(max-width: 600px){
	.sub-main-w3 input[type="text"], .sub-main-w3 input[type="password"] {
		padding: .9em 3em .9em 1em;
	}
	.sub-main-w3 input[type="submit"] {
		font-size: .95em;
	}
	.footer p {
		letter-spacing: 1px;
	}
	.right-w3l {
		margin-top: 1em;
	}
	.header-w3l h1 {
		font-size: 2.5em;
		letter-spacing: 5px;
	}
	.wthree-pro h2 {
		font-size: 1em;
	}
	.sub-main-w3 {
		margin: 6em auto 8em;
		width: 54%;
	}
}
@media(max-width: 568px){
	.sub-main-w3 {
		width: 56%;
	}
}
@media(max-width: 480px){
	.header-w3l h1 {
		font-size: 2.3em;
		letter-spacing: 4px;
	}
	.sub-main-w3 {
		width: 69%;
		margin: 6em auto 6.3em;
	}
	.footer p {
		line-height: 1.9;
	}
}
@media(max-width: 440px){
	.sub-main-w3 {
		width: 72%;
	}
}
@media(max-width: 414px){
	.sub-main-w3 input[type="text"], .sub-main-w3 input[type="password"] {
		font-size: .85em;
	}
	.sub-w3l h6 a {
		font-size: .8em;
	}
	.header-w3l h1 {
		font-size: 2.1em;
	}
	.sub-main-w3 {
		margin: 7em auto 9.3em;
	}
}
@media(max-width: 384px){
	.sub-main-w3 input[type="text"], .sub-main-w3 input[type="password"] {
		font-size: .8em;
	}
	.header-w3l h1 {
		font-size: 2em;
	}
	.sub-main-w3 input[type="submit"] {
		font-size: .9em;
	}
	.wthree-pro h2 {
		margin-bottom: 1.2em;
	}
	.sub-main-w3 {
		margin: 6em auto 7.5em;
		width: 74%;
	}
	span.icon1 {
		top: 18%;
	}
	span.icon2 {
		top: 32%;
	}
}
@media(max-width: 375px){

}
@media(max-width: 320px){
	.header-w3l h1 {
		font-size: 1.8em;
		letter-spacing: 2px;
	}
	.wthree-pro h2 {
		font-size: .9em;
		letter-spacing: 2px;
	}
	.sub-main-w3 input[type="submit"] {
		font-size: .8em;
	}
	.footer p {
		font-size: .8em;
	}
	.sub-main-w3 {
		margin: 4.2em auto 4.5em;
		width: 81%;
	}
	.sub-main-w3 input[type="text"], .sub-main-w3 input[type="password"] {
		width: 80%;
	}
}
</style>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<!-- main -->
<div class="center-container">
	<!--header-->
	<div class="header-w3l">
		<h1><?php   echo $lang5['changepass']?></h1>
	</div>
	<!--//header-->
	<div class="main-content-agile">
		<div class="sub-main-w3">	
			

			<?php
	//Gọi file connection.php ở bài trước
	require_once("connection.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["dangnhap"])) {
		// lấy thông tin người dùng
		$password1 = $_POST["password1"];
		$password2 = $_POST["password2"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$password1= strip_tags($password1);
		$password1 = addslashes($password1);
		$password2= strip_tags($password2);
		$password2 = addslashes($password2);


		if ($password1 == "" || $password2 =="") {
			   
		
			
		}else{


			$sql = "select * from users where password = '$password1' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				if($_SESSION['lang']=="vietnam"){
				echo" <script>
window.alert('Mật khẩu không đúng');
</script>";};

if($_SESSION['lang']=="en"){
				echo" <script>
window.alert('Wrong Password');
</script>";};
			}else{
				 $sql = "UPDATE users SET password  = $password2";  // Update present status to database
            // Echo "0" , equivalent with send data to App to toast OFF
            if ($conn->query($sql) === TRUE) {  // Because it's been a long time , so i forgot
                //$_GET[] = 0;                      // why i have to put this line but it still run when it's commented
            } 
				


                header('Location: ../smartgarden.php');
                 exit;
			}
		}
	}
?>
			<form action="login.php" method="post">
				<div class="pom-agile">
					<input name="password1" class="user" type="password" required=""  placeholder=<?php echo $lang7['pwo']?> >
					<span class="icon1"><i class="fa fa-unlock" aria-hidden="true"></i></span>
				</div>
				<div class="pom-agile">
					<input  name="password2" class="pass" type="password" required="" placeholder=<?php echo $lang7['pwn']?> >
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
				</div>
				<div class="sub-w3l">
					<div class="right-w3l">
						<input type="submit"  name="dangnhap" value=<?php echo $lang7['chang']?>>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!--//main-->
	<!--footer-->
	<div class="footer">
		<p>&copy; Luận văn tốt nghiệp 2020 | Thái Văn Phúc & Đỗ Văn Quốc</p>
	</div>
	<!--//footer-->
</div>
</body>
</html>