<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   </head>
<body>
    
    <h1>Content Management Tool</h1>
    <div class="form-group">
    <div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
        <form method="POST" enctype="multipart/form-data">
            <div class="item">
<label>Title</label>
<input type="text" name="title" class="form-style" placeholder="Title..">
</div>
<div class="item">
<label>Content</label>
<textarea name="content" class="form-style form-style2" placeholder="Content.."></textarea>
</div>
<div class="item">
<label>Image</label>
<input type="file" name="uploadimage" class="form-style">
</div>
<div class="item">
<label>Vedio</label>
<input type="file" name="uploadvedio" class="form-style">
</div>
<button class="btn" type="submit" name="upload">Upload</button>
</div></div></div></div>
</form>
</div>
<?php if(isset($_POST['upload'])){
    $image=$_FILES["uploadimage"]["name"];
$temp1=$_FILES["uploadimage"]["tmp_name"];  

move_uploaded_file($temp1,"file/$image");
$vedio=$_FILES["uploadvedio"]["name"];
$temp2=$_FILES["uploadvedio"]["tmp_name"];  

move_uploaded_file($temp2,"file/$vedio");
    ?>

<table class="container"> 
    <tr>
        <th colspan='2' style="text-align:center;">My Blog</th>
    </tr>
    <tr>
        <th>Title</th>
        <td><?php echo $_POST['title'];?><td>
    </tr>
      <tr>
        <th>Content</th>
        <td><?php echo $_POST['content'];?><td>
    </tr>
    <tr>
        <th>Image</th>
        <td><img src="file/<?php echo $image; ?>" height=200px width=200px><td>
    </tr>
    <tr>
        <th>Vedio</th>
        <td> <video width="400px" height="400px" controls="controls">
        <source src="file\<?php echo $vedio;?>" type="video/mp4" />
</video><td>
    </tr>
</table>
<?php }
?>
<style>
.vedio{
border:2px solid red;
width:200px;
 height:200px;
}
</style>
</body>
</html>