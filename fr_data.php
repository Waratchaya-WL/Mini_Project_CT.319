<?php
session_start();
if(!isset($_SESSION["id"]))
{
$row=header("location:login.php");
}
?>

<?php include 'condb.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>นาฏศิลป์ไทย</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php include 'menu1.php'; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        

                    <div class="card mb-4 mt-4">
                            <div class="card-header alert">

                                <div>
                                   </div>

                            <div class="card-body">


        <div class="row">

        <div class="col-sm-5">

            <div class="alert alert-primary h4 text-center mb-4 mt-4 " role="alert">
  เพิ่มข้อมูลการแสดง
</div> 
   
<form name="form1" method="POST" action="insert_data.php" enctype="multipart/form-data">
<label>ชื่อการแสดง :</label>
<input type="text" name="pname" class="form-control" placeholder="ชื่อการแสดง..." required > <br>
<label>รายละเอียดการแสดง :</label>
<textarea class="form-control" required placeholder="รายละเอียดการแสดง..." name="detail" rows="3"></textarea> <br>
<label>ประเภทการแสดง :</label>
<select class="form-select" name="typeID" > 
<?php
$sql="SELECT * FROM type ORDER BY type_name";
$hand=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($hand)){
    ?>   
    <option value="<?=$row['type_id']?>"><?=$row['type_name']?></option>
    <?php    
}
mysqli_close($conn);
?>
</select>
<br>
<label>รูปภาพการแสดง :</label>
<input type="file" name="file1" id="file-input" required> <br><br> 
<input type="submit" name="submit" class="btn btn-success" >
<a href="index.php" class="btn btn-danger">Cencel</a> 
</form>
        </div>
    </div>
      
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'footer.php'; ?>

                


            </div>
        </div>
        
    </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
