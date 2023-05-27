<?php
        if(isset($_POST['upgiohang']) && $_POST['upgiohang']){
            $ma_hh = $_POST['id'];
            $sl=$_POST['soluong'];
            $size = $_POST['size'];
            if($sl <= 0){
                if (isset($_POST['id'],$_POST['size']) && ($_POST['id']>=0)){
                    $size=$_POST['size'];
                    if(isset($_POST['id'],$size)) {
                        array_splice($_SESSION['giohang'],$_POST['id']&&$size,1);
                    } else {
                       unset($_SESSION['giohang']);
                    }
                        delete_giohang($ma_hh,$size);
                        // header('location: index.php?act=cart'); 
                        
            } else {
                // $note = 1;        
                    update_giohang($sl,$ma_hh,$size);
                    header('location: index.php?act=cart'); 
            }
        }
    }
?>