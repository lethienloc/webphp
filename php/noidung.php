<div id="content_left">
        <?php include_once"ketnoi.php";
		$sql="select * from category";
		$ketqua=mysqli_query($conn,$sql);
		
		
		
		
		?>
         <div class="content_left_section">
            	<div class="content_left_section_title">Tìm Kiếm</div>
				<div class="content_left_section_content">
                	<form action="index.php" method="POST">
                    	<input type="text" name="key" id="search_field" />
                        <input type="submit" value="Search" id="search_button" />
                    </form>
                    <div class="cleaner">&nbsp;</div>
                </div>	
                <div class="cleaner">&nbsp;</div>
            	<div class="content_left_section_bottom">&nbsp;</div>
            </div>
            
            <div class="margin_bottom_20">&nbsp;</div>
			
        	<div class="content_left_section">
            	<div class="content_left_section_title">Hãng</div>
				<div class="content_left_section_content">
                	<ul>
					<?php
			if (isset($ketqua)) {
 while (
$row = mysqli_fetch_assoc($ketqua))
 {

 ?>
                    	<li><a href="index.php?loaisp=<?php echo $row["loaisp"] ?>"><?php echo $row["loaisp"] ?></a></li>
			<?php }}?>
                        
                    </ul>
                </div>	
            	<div class="content_left_section_bottom">&nbsp;</div>
            </div>
            
            <div class="margin_bottom_20">&nbsp;</div>
            
           
            
            <div class="margin_bottom_20">&nbsp;</div>
            
            <div class="content_left_section_ad">
            	<a href="#"><img src="images/templatemo_ad.jpg" alt="image" /></a>
            </div>
            
        </div> <!-- end of content left -->