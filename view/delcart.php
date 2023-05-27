 <?php 
// session_start();
// ob_start();
  //  if(isset($_GET['idsp'])){
  //   $id = $_POST['id'];
  //     if(isset($_POST['id']) && $_POST['id'] == $_GET['id']){
  //       array_splice($_SESSION['giohang'],$_GET['idsp'],1);
  //     }
  //     else{
  //       unset($_SESSION['giohang']); 
        
  //     }
  //     if (count($_SESSION['giohang'])>0) header('location: index.php?act=cart');
  //     else header('location: index.php?act=product');
  //   }  
  if(isset($_GET['idsp'])&&$_GET['idsp']){
    $ma_hh =$_GET['idsp'];
    $size =$_GET['size'];
    delete_giohang($ma_hh,$size);
    header('location: index.php?act=cart');
  }
  
// unset($_SESSION['giohang']);  

?> 