<?php include_once"ketnoi.php"; ?>
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
			<?php 
		$sql="select * from product where gia>0 ";
		if (isset($_GET['loaisp']))
		{
			$sql=$sql." and loaisp='".$_GET['loaisp']."' ";
		}
		if (isset($_POST['key']))
		{
			$sql=$sql." and tensp like '%".$_POST['key']."%' ";
		}
		$ketqua=mysqli_query($conn,$sql);	
		$i=0;
		if (isset($ketqua)) {
 while (
$row = mysqli_fetch_assoc($ketqua))
 {
	 
	 if ($i<1)
	 {
	 ?>
                <div class="product_box margin_right_10">
					<span></span>
					
                  	<div class="product_box_title"><?php echo isset($row['loaisp'])?$row['loaisp']:""?></div>
                  
                    <div class="product_box_content">
                        <a href="#"><img src="images/<?php echo isset($row['hinh'])?$row['hinh']:""?>" alt="Parrot One" /></a>
                      <p><?php echo isset($row['tensp'])?$row['tensp']:""?>.</p>
                        <div class="buttom_section">
	                        <div class="rc_btn_01"><a href="thongtinsp.php?masp=<?php echo isset($row['masp'])?$row['masp']:"" ?>"> Thông Tin </a></div><div class="rc_btn_02"><a href="#"><?php echo isset($row['gia'])?$row['gia']:"" ?></a></div>
						</div>
                    </div>
			</div>
	 <?php
	 
	 }
	 else
	 {
		?>
                <div class="product_box">
	                <span></span>
                  <div class="product_box_title"><?php echo isset($row['loaisp'])?$row['loaisp']:""?></div>
                  
                    <div class="product_box_content">
                        <a href="http://www.templatemo.com" target="_parent"><img src="images/<?php echo isset($row['hinh'])?$row['hinh']:""?>" alt="Parrot Three" /></a>
                      <p><?php echo isset($row['tensp'])?$row['tensp']:""?>.</p>
                        <div class="buttom_section">
	                        <div class="rc_btn_01"><a href="#">Thông Tin</a></div><div class="rc_btn_02"><a href="#"><?php echo isset($row['gia'])?$row['gia']:"" ?></a></div>
                        </div>    
                    </div>
              </div>
	 <?php }
	 $i++;
	 if ($i>=6)
		 break;}
		}?>

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