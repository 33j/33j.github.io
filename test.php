<?php
	session_start();

?>


<?php
 
   	/*
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      //var_dump($file_tmp);
      //move_uploaded_file($file_tmp,"images/"."name.jpg");

      
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
      */	
   
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image"/>
         <input type="text" name="text1"/>
         <input type="text" name="text2"/>

         <input type="submit"/>
      </form>

      <!--
      <form action="" method="POST"	>
         <input type="text" name="text1"/>
         <input type="submit" value="text1"/>
 		</form>

		<form action="" method="POST">
			<input type="text" name="text2"/>
			<input type="submit" value="text2"/>
      	</form>
		-->

      <div>
      	<?php
			if(isset($_POST['text1'])){
			echo "hi";
			echo "$file_tmp";
		}
		?>

	</div>
	<div>
	
		<?php
			if(isset($_POST['text2'])){
				echo "hi2";
				echo "$file_tmp";
			}
			/*
			if(isset($_FILES['image'])){
				echo "yesimage";
			}
			else{
				echo "noimg";
			}
			*/

			if ($_FILES['image']['tmp_name']){
				echo "yesimage";
			}
						else{
				echo "noimg";
			}
			if (file_exists($_FILES['image']['tmp_name'])){
				echo "yesexist";
			}
			else{
				echo "noiexist<br>";
			}
			echo $_FILES['image']['name'];
		?>


      </div>

      
   </body>
</html>


