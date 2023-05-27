<?php
     if(isset($_POST['addgiohang']) &&  $_POST['addgiohang']){
         $i=0; $fg = 0;$sl=0; $note =1;$size=0;
         $note=$_POST['note'];
         if($giohang['so_luong'] >=2)$sl = $giohang['so_luong'];
         else $sl = 1; 
         foreach($cart as $giohang){
             extract($giohang);
             if($_POST['id'] == $giohang['ma_hh'] && $_POST['size']== $giohang['size']){
             // $note = 1;        
                $sl += $giohang['so_luong'];
                update_giohang($sl,$_POST['id'],$_POST['size']);
                if($note==0)header('location: index.php?act=sanphamct&idsp='.$ma_hh.'');
                else header('location: index.php?act=category');
                 $fg=$sl;
                 break;
             }
             $i++;
        }

        if ($fg == 0) {
            $ma_hh = $_POST['id'];
            $ten = $_POST['name'];
            $gia = $_POST['price'];
            $hinh = $_POST['img'];
            $note = $_POST['note'];
            $soluong = $_POST['soluong'];
            $size = $_POST['size'];
            if (isset($_POST['size']) && $size != " " && $size > 0) {
                insert_giohang($ma_hh, $soluong, $size);
                $cartsp = [$ma_hh, $soluong, $size];
                array_push($_SESSION['giohang'], $cartsp);
            }
        } else {
            header('location: index.php?act=sanphamct&idsp=' . $ma_hh . '');
        }
    }
        if($note ==0)header('location: index.php?act=sanphamct&idsp='.$ma_hh.'');
        else header('location: index.php?act=category');
    
?>