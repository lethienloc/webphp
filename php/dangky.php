<?php include_once"ketnoi.php"; 
if(isset($_GET["action"]))
{
		$sql="select * from dangnhap where tendn ";
		$username   = addslashes($_POST['tendn']);
		$password   = addslashes($_POST['pass']);
		$email      = addslashes($_POST['email']);
		$fullname   = addslashes($_POST['hoten']);
		$password = md5($password);
		if (mysqli_num_rows(mysqli_query($conn,"SELECT tendn FROM dangnhap WHERE tendn='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
	else
	{
		@$addmember = mysqli_query($conn,"
        INSERT INTO dangnhap (
            tendn,
            pass,
            email,
            hoten
			
           
        )
        VALUE (
            '{$username}',
            '{$password}',
            '{$email}',
            '{$fullname}'
            
        )
    ");
	
	 if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='index.php'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
	}
		
		 
		
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include_once"ketnoi.php";
		$sql="select * from product";
		$ketqua=mysqli_query($conn,$sql);
		
		
		
		
		?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bird Store Online, CSS Template, Free Download</title>
<meta name="keywords" content="Bird Store Online, CSS Template, Free Download" />
<meta name="description" content="Bird Store Online - Download Free CSS Template" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="tuyetroi.js" > </script>
</head>
<body bgcolor="black">
<div id="templatemo_container">
	<?php include"header.php"?>
    
    
    
    <div id="templatemo_content">
        
        <?php include"noidung.php"?>
        
		<div id="content_right">
        
            <div class="right_col_section_w650">
    
                <div class="header_01">Laptop Gaming</div>
            <img src="images/templatemo_image_01.jpg" alt="image" />
                <p><h2>Acer Việt Nam vừa giới thiệu laptop gaming Predator Helios 300 phiên bản 2020.</h2></p>
                <p>Phiên bản mới này sẽ mang hiệu năng vượt trội với vi xử lý mới nhất từ Intel, thiết kế hiện đại vượt thời gian cùng vỏ nhôm nguyên khối, hệ thống tản nhiệt cao cấp, và gói bảo hành siêu nhanh 3S1, xứng đáng là vũ khí tối thượng phải có của mọi game thủ.</p>
                
                <div class="cleaner">&nbsp;</div>
            </div>
            
			<div class="margin_bottom_20">&nbsp;</div>
           
            <div class="right_col_section_w420">
			 <form action="dangky.php?action=do" method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                        Tênđăngnhập: 
                    </td>
                    <td>
                        <input type="text" name="tendn" size="30" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mậtkhẩu:
                    </td>
                    <td>
                        <input type="password" name="pass" size="30" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name="email" size="30" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Họvàtên:
                    </td>
                    <td>
                        <input type="text" name="hoten" size="30" />
                    </td>
                </tr>
             
                
            </table>
            <input type="submit" value="Đăng ký" />
            <input type="reset" value="Nhập lại" />
        </form>
		
                <div class="product_box margin_right_10">
					
					
                  	
			</div>
	

                <div class="cleaner">&nbsp;</div>
            </div>  <!-- end of right_col_section_w420 -->
            
            <div class="right_col_section_w220">

                <div class="header_01">
                    Tin mới nhất
                </div>
                
                <div class="news_section">
                    <div class="news_title">
                    	Macbook
                    </div>
                    <p>Apple là một thương hiệu không còn lạ lẫm gì với hầu hết mọi người hiện nay. Cùng với Iphone, dòng laptop Apple hay còn gọi là Macbook là 2 biểu tượng điển hình, đại diện cho thương hiệu cao cấp này.</p>
                    <div class="rc_btn_03"><a href="#">read more</a></div>
                </div>
                
                <div class="margin_bottom_30">&nbsp;</div>
                
                <div class="news_section">
                    <div class="news_title">
                    	Asus
                    </div>
                    <p>Laptop của Asus được đánh giá cao về tính đổi mới sản phẩm trong các thiết kế mới ấn tượng như ScreenPad - Touchpad kiêm màn hình phụ cùng bản lề ErgoLyft. Thương hiệu laptop Asus cũng được phần lớn người sử dụng yêu thích và đánh giá cao bởi hãng liên tục tạo ra những thiết kế ấn tượng....</p>
                  <div class="rc_btn_03"><a href="#">read more</a></div>
                </div>
                
                <div class="margin_bottom_30">&nbsp;</div>
                
                <div class="news_section">
                    <div class="news_title">
                    	Dell
                    </div>
                    <p>Dell là một thương hiệu máy tính khá nổi tiếng và uy tín trên thị trường hiện nay. Ở thị trường Việt Nam, laptop Dell được phần đông người sử dụng yêu thích và lựa chọn bởi chất lượng, độ bền tương đối cao.</p>
                    <div class="rc_btn_03"><a href="#">read more</a></div>
                </div>
                                                
                <div class="margin_bottom_20">&nbsp;</div>
            </div> <!-- end of right_col_section_w220 -->
            
        </div> <!-- end of content right -->
        
        <?php include"footer.php"?>
</div> <!-- end of container -->
</body>
</html>