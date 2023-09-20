<?php
session_start();
include 'condb.php';
if(!isset($_SESSION["id"]))
{
$row=header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php include 'menu1.php'; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>                       

                        <b><div class="alert alert-success h4 text-center mb-4 mt-4 " role="alert">
 แสดงข้อมูลนาฏศิลป์ไทย
</b></div> 
    <a class="btn btn-success mb-4" href="fr_data.php" role="button">Add+</a>
    <table class="table table-striped table-hover">
    <tr>
        <th>ชื่อการแสดง</th>
        <th>รายละเอียดการแสดง</th>
        <th>ประเภท</th>
        <th>รูปภาพ</th>
        <th>แก้ไข</th>
        <th>ลบ</th>
    </tr>
    <?php
    $sql="SELECT * FROM product
    LEFT JOIN type ON type.type_id = product.type_id;";
    $hand = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($hand)){
    ?>
    <tr>
        <td><?=$row['pro_name']?></td>
        <td><?=$row['detail']?></td>
        <td><?=$row['type_name']?></td>
        <td><img src="img/<?=$row['image']?>" width="80px" hieght="100px"></td>
        <td><a a href="edit_data.php?id=<?=$row['pro_id']?>" class="btn btn-warning" >แก้ไข</a></td>
        <td><a href="delete_data.php?id=<?=$row['pro_id']?>" class="btn btn-danger" onclick="Del(this.href);return false;">ลบ</a></td>
    </tr>

<?php
}
mysqli_close($conn);
?>
</table>

    </div>
    
</body>
</html>

<script language="JavaScript">
function Del(mypage){
    var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
    if(agree){
        window.location=mypage;    
    }
}
</script>
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

<script type="text/javascript" src="chart/js/jquery.min.js"></script>
<script type="text/javascript" src="chart/js/Chart.min.js"></script>


   