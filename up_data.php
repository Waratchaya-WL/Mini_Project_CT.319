<?php 
include 'condb.php';
$proid = $_POST['proid'];
$proname = $_POST['pname'];
$detail = $_POST['detail'];
$typeid = $_POST['typeID'];
$imge = $_POST['txtimg'];

//อัพโหลดรูปภาพ
if  (is_uploaded_file($_FILES['file1']['tmp_name'])){
    $new_image_name = 'pr_' . uniqid() . "." . pathinfo($_FILES['file1']['name'], PATHINFO_EXTENSION);
    $image_upload_path = "./img/" . $new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'], $image_upload_path);
}else{
$new_image_name = "image";
}
//คำสั่ง Update
$sql="UPDATE product SET
pro_name = '$proname',
detail = '$detail',
type_id = '$typeid',
image = '$new_image_name'
WHERE pro_id='$proid' ";

$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('แก้ไขข้อมูลเรียบร้อย'); </script> ";
    echo "<script> window.location='index.php'; </script> ";
}else{
    echo "<script> alert('ไม่สามารถบันทึกข้อมูลได้'); </script> ";   
}

?>