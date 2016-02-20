
<?php
	error_reporting(0);
	
	include('includes/config.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title><?php include('includes/title.php'); ?></title>
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="description" content="Your description goes here..." />
	<meta name="keywords" content="your,keywords,goe,here" />
	<meta name="author" content="Your Name / Design by Fernbap - http://fernbap.com/" />
	<link rel="stylesheet" type="text/css" href="spring.css" />
</head>
<body>
<div id="wrapper">
<div id="header">
	<div id="toplinks">
		<a href="#">Sitemap</a> | <a href="#">Login</a>
	</div>
	<div id="title">
    <?php include('includes/banner.php'); ?>
		
	</div>
</div>
	<div id="menu">
     <?php include('includes/menu.php'); ?>
		
	</div>
	<div id="content">
		<div id="main">
			<h2>Spring, website template</h2>
			<p>
             <table width="100%">
           		<tr>
                	<th colspan="4"><a href="addfile.php">Add New File</a></th>
                    
                
                </tr>
                <tr>
                	<th>SN</th>
                    <th>File Title</th>
                    <th>File Name</th>
                    <th></th>
                
                </tr>
           
           <?php
		   	$file="select * from tblfiles";
			$fileres=mysql_query($file);
			while($setfile=mysql_fetch_array($fileres))
			{
		   
		   ?>
           		<tr>
           				<td><?php echo $setfile['id'];?></td>
                        <td><?php echo $setfile['filetitle'];?></td>
           				<td><?php echo $setfile['filename'];?></td>
                        <td><a href="uploads/<?php echo $setfile['filename']; ?>">Download</a></td>
          		 </tr>
           <?php
			}
		   ?>
           </table>
            
            
            
            
            .</p>
		</div>
		<div id="right">
		
        
         <?php include('includes/right.php'); ?>
        
        
        
        
		</div>
		<div class="leftbottom"></div>
		</div>
	</div>
	<div id="clear"></div>
	<div id="footer">
		
        
         <?php include('includes/footer.php'); ?>
        
	</div>
</div>
</body>
</html>
