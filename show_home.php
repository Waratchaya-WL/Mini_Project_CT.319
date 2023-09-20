<?php include 'condb.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>นาฏศิลป์ไทย</title>
    <!-- Bootstrap CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>

</head>
<body>
   <?php include 'menu.php';?>
<div class="container">
<br><br>
  <div class="row">
    <?php
$sql ="SELECT * FROM product ORDER BY pro_id DESC";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    ?>
    <div class="col-sm-3">
      <div class="text-center">
      <img src="img/<?=$row['image']?>" width="200px" height="220" class="mt-5 p-2 my-2 border"> <br>
      <b><h5 class="text-success"> <?=$row['pro_name']?></b></h5> 
      <a class="btn btn-danger mt-3" href="sh_product_detail.php?id=<?=$row['pro_id']?>" > รายละเอียด </a>
       
      </div>
    </div>
  <?php
  }
  mysqli_close($conn);
  ?>

  </div>
</div>

<br><br><br>
<?php include 'footer.php'; ?>


</body>
</html>