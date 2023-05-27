<?php

    session_start();
    ob_start();
    if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
        include "../model/pdo.php";
        include "../model/taikhoan.php";
        include "../model/danhmuc.php";
        include "../model/sanpham.php";
        include "../model/thongke.php";
        include "../model/tintuc.php";
        include "../model/binhluan.php";
        include "../model/hinhanh.php";
        include "../model/bill.php";
        include "../model/chitietdh.php";
        include "../model/magiamgia.php";  
        include "header.php";
        if (isset($_GET['act'])) {
            $act = $_GET['act'];
            switch ($act) {
                // tin tức
                case 'addtt':
                    //kiểm tra click nút add
                    if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $name = $_POST['name'];
                    $hinh = $_FILES['hinh']['name'];
                    $mota = $_POST['mota'];
                    $ngaydang = date(' d M, y');;
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_tintuc($name,$hinh,$mota,$ngaydang);  
                    $thongbao = "Thêm mới thành công";
                    }
                    include "tintuc/add.php";
                    break; 
                case 'listtt':
                    $listtintuc = loadall_tintuc();
                    include "tintuc/list.php";
                    break;
                case 'xoatt':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        delete_tintuc($_GET['id']);
                    }
                    $listtintuc = loadall_tintuc();
                    include "tintuc/list.php";
                    break;
                case 'updatett':
                    if (isset($_POST['capnhap'])&&($_POST['capnhap'])) {
                        $id=$_POST['id'];
                        $name = $_POST['name'];
                        $hinh = $_FILES['hinh']['name'];
                        $mota = $_POST['mota'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        update_tintuc($id,$name,$hinh,$mota);   
                        // update_sanpham($id,$tensp,$giasp,$mota,$hinh,$iddm);
                        $thongbao="Cập nhập thành công";
                    }
                    $listtintuc= loadall_tintuc();
                    include "tintuc/list.php";
                    break;
                case 'suatt':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $tintuc = loadone_tintuc($_GET['id']);
                    }
                    include "tintuc/update.php";
                    break;
                case 'adddm':
                    //kiểm tra click nút add
                    if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                        $tenloai = $_POST['tenloai'];
                        $sql="insert into loai(ten_loai) values('$tenloai')";
                        pdo_execute($sql);
                        $thongbao ="Thêm thành công";
                    }
                    include "danhmuc/add.php";
                    break;
                case 'lisdm':
                    $sql = "select * from loai order by ten_loai desc";
                    $listdanhmuc= pdo_query($sql);
                    include "danhmuc/list.php";
                    break;
                case 'xoadm':
                    if (isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)) {
                        $sql = "DELETE from loai where ma_loai=".$_GET['ma_loai'];
                        pdo_execute($sql);
                    }
                    $sql = "SELECT * FROM loai ORDER BY ten_loai DESC";
                    $listdanhmuc= pdo_query($sql);
                    include "danhmuc/list.php";
                    break;
                // code thành phần sản phẩm
                case 'suadm':
                    if(isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)){
                        // $id=$_GET['id'];
                        $sql = "SELECT * FROM loai WHERE ma_loai =".$_GET['ma_loai'];
                        $dm = pdo_query_one($sql);
                    }
                    include "danhmuc/update.php";
                    break;
                case 'updatedm':
                    if (isset($_POST['capnhapdm'])&&($_POST['capnhapdm'])) {
                        $tenloai = $_POST['tenloai'];
                        $id = $_POST['id'];
                        $sql="UPDATE loai SET ten_loai = '$tenloai' WHERE ma_loai = '$id'";
                        pdo_execute($sql);
                        // echo $tenloai;
                    }
                    $sql = "SELECT * FROM loai ORDER BY ten_loai DESC";
                    $listdanhmuc= pdo_query($sql);
                    include "danhmuc/list.php";
                    break;
                case 'addtk':
                    if(isset($_POST['themtk'])&&($_POST['themtk'])){
                        $email = $_POST['email'];
                        $fullname = $_POST['fullname'];
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $address = $_POST['address'];
                        $tel = $_POST['tel'];
                        $role = $_POST['role'];
                        insert_taikhoan_admin($email,$fullname,$user,$pass,$address,$tel,$role); 
                        $thongbao="Thêm tài khoản thành công - <a href='index.php?act=dskh'>Xem danh sách</a>";
                    }
                    include 'taikhoann/add.php';
                    break;
                case 'tklist':
                    $sql = "select * from tai_khoan order by ma_tk desc";
                    $listtaikhoan= pdo_query($sql);
                    include "taikhoann/list.php";
                    break;
                case 'xoatk':
                    if (isset($_GET['ma_tk'])&&($_GET['ma_tk']>0)) {
                        $sql = "delete from tai_khoan where ma_tk=".$_GET['ma_tk'];
                        pdo_execute($sql);
                    }
                    $sql = "select * from tai_khoan order by ma_tk desc";
                    $listtaikhoan= pdo_query($sql);
                    include "taikhoann/list.php";
                    break; 
                case 'dskh':
                    $listtaikhoan= loadall_taikhoan();
                    include "taikhoann/list.php";
                    break;
                case 'suatk':
                    if(isset($_GET['ma_tk'])&&($_GET['ma_tk'])){
                        // $id=$_GET['id'];
                        $sql = "SELECT * FROM tai_khoan WHERE ma_tk =".$_GET['ma_tk'];
                        $dm = pdo_query_one($sql);
                    }
                    include "taikhoann/edit.php";
                    break; 
                case 'edittk': 
                    if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                        $ma_tk = $_POST['ma_tk'];
                        $fullname = $_POST['fullname'];
                        $user = $_POST['user']; 
                        $pass = $_POST['pass'];
                        $address = $_POST['address'];
                        $tel = $_POST['tel'];
                        update_taikhoan($ma_tk,$fullname,$user,$pass,$address,$tel); 
                    }
                    $sql = "select * from tai_khoan order by ma_tk desc";
                    $listtaikhoan= pdo_query($sql);
                    include "taikhoann/list.php";
                    break;
                case 'addmgg':
                    if (isset($_POST['themma'])&&($_POST['themma'])) {
                        $ma_gg="Z".rand(0,99999);
                        $ngay_bd=$_POST['ngay_bd'];
                        $ngay_kt=$_POST['ngay_kt'];
                        $giatri = $_POST['giatri'];
                        insert_magiam($ma_gg,$ngay_bd,$ngay_kt,$giatri);
                        $thongbao ="Thêm thành công";
                    }
                    include "magiamgia/add.php";
                    break;
                case 'dsmgg':
                    $listmagiam=loadall_magiam();
                    include "magiamgia/list.php";
                    break;
                case 'thoat':
                    if(isset($_SESSION['role'])) unset($_SESSION['role']);
                    header('location: ../index.php');
                    break;
                case 'thongke':
                    $listtk=loadall_thongke();
                    include "thongke/list.php";
                    break;
                case 'binhluan':
                    $listbl=loadall_binhluan_admin();
                    include "binhluan/list.php";
                    break;
                case 'xoabl':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        delete_binhluan($_GET['id']);
                    }
                    $listbl= loadall_binhluan_admin();
                    include "binhluan/list.php";
                    break;
                case 'suabl':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $binhl = loadone_binhluan($_GET['id']);
                    }
                    include "binhluan/update.php";
                    break;
                case 'updatebl':
                    if (isset($_POST['capnhapbl'])&&($_POST['capnhapbl'])) {
                        $id=$_POST['id'];
                        // $iddm = $_POST['iddm']; //
                        $noidung = $_POST['noidung'];
                        update_binhluan($id,$noidung);
                        $thongbao="Cập nhập thành công";
                    }
                    $listbl= loadall_binhluan_admin();
                    include "binhluan/list.php";
                    break;
                // -----------------------------------------------------thuộc về sản phẩm
                case 'addsp':
                    //kiểm tra click nút add
                    if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $giaspnew = $_POST['giaspnew'];
                        $mota = $_POST['mota'];
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        insert_sanpham($tensp,$giasp,$giaspnew,$hinh,$mota,$iddm);
                        $thongbao = "Thêm mới thành công";
                    }
                    $sql = "select * from loai order by ten_loai desc";
                    $listdanhmuc= pdo_query($sql);
                    // var_dump($listdanhmuc);
                    include "sanpham/add.php";
                    break;
                case 'listsp':
                    if (isset($_POST['listgo'])&&($_POST['listgo'])){
                        $kyw =$_POST['kyw'];
                        $iddm =$_POST['iddm'];
                    }else{
                        $kyw='';
                        $iddm=0;
                    }
                    $sql = "select * from loai order by ten_loai desc";
                    $listdanhmuc= pdo_query($sql);
                    $listsanpham= loadall_sanpham($kyw,$iddm);
                    include "sanpham/list.php";
                    break;
                case 'xoasp':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham= loadall_sanpham("", 0);
                    include "sanpham/list.php";
                    break;
                // code thành phần sản phẩm
                case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sanpham = loadone_sanpham($_GET['id']);
                    }
                    $sql = "select * from loai order by ten_loai desc";
                    $listdanhmuc= pdo_query($sql);
                    include "sanpham/update.php";
                    break;
                case 'updatesp':
                    if (isset($_POST['capnhap'])&&($_POST['capnhap'])) {
                        $id=$_POST['id'];
                        // $iddm = $_POST['iddm']; //
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $giaspnew = $_POST['giaspnew'];
                        $mota = $_POST['mota'];
                        $hinh = $_FILES['hinh']['name'];
                        $trang_thai = $_POST['trang_thai'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        update_sanpham($id,$tensp,$giasp,$giaspnew,$mota,$hinh,$trang_thai); 
                        // update_sanpham($id,$tensp,$giasp,$mota,$hinh,$iddm);
                        $thongbao="Cập nhập thành công";
                    }
                    $sql = "select * from loai order by ten_loai desc";
                    $listdanhmuc= pdo_query($sql);
                    $listsanpham= loadall_sanpham("", 0);
                    include "sanpham/list.php";
                    break;
                case 'addimg':
                    if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                        $ma_hh = $_POST['ma_hh'];
                        $totalfiles = count($_FILES['hinh']['name']);
                        for ($i=0; $i<$totalfiles; $i++) {
                            $img = $_FILES['hinh']['name'][$i];

                            if (move_uploaded_file($_FILES["hinh"]["tmp_name"][$i], '../upload/' .$img)) {
                                insert_img($ma_hh, $img);
                            } else {
                                echo 'Error in uploading file - '.$_FILES['hinh']['name'][$i].'<br/>';
                            }
                        }
                        $thongbao = "Thêm mới thành công";
                    }
                    include "hinhanh/add.php";
                    break;
                case 'listimg':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sanpham = loadone_sanpham($_GET['id']);
                    }
                    $listimg = loadall_img($_GET['id']);
                    include "hinhanh/list.php";
                    break;
                case 'xoaimg':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        delete_img($_GET['id']);
                    }
                    $listimg = loadall_img($_GET['id']);
                    include "hinhanh/list.php";
                    header('location: index.php?act=listsp');
                    break;
                case 'donhanglist':
                    $listbill = loadall_bill();
                    include "bill/list.php";
                    break;
                case 'xoabill':
                    if (isset($_GET['ma_dh'])&&($_GET['ma_dh']>0)) {
                        delete_bill($_GET['ma_dh']);
                    }
                    $listbill= loadall_bill();
                    include "bill/list.php";
                break;
                case 'listchitietdh':
                    if(isset($_GET['ma_dh'])&&($_GET['ma_dh']>0)){
                        $listchitietdh = loadone_chitietdh($_GET['ma_dh']);
                        $bill_mgg = loaddetailbill_mgg($_GET['ma_dh']);
                    }
                    include "bill/chitiet_dh.php";
                    break;
                // -----------------------------------------------------
                default:
                    # code...
                    include "home.php";
                    break;
            }
        } else {
            include "home.php";
        }

        include "footer.php";
    }elseif (isset($_SESSION['role'])&&($_SESSION['role']==2)) {
        include "../model/pdo.php";
        include "../model/taikhoan.php";
        include "../model/danhmuc.php";
        include "../model/sanpham.php";
        include "../model/thongke.php";
        include "../model/tintuc.php";
        include "../model/binhluan.php";
        include "../model/hinhanh.php";
        include "../model/bill.php";
        include "../model/chitietdh.php";
        include "../model/magiamgia.php";
        include 'header.php';
        if(isset($_GET['act'])){
            $act = $_GET['act'];
            switch ($act) {
                case 'lisdm':
                    $sql = "select * from loai order by ten_loai desc";
                    $listdanhmuc= pdo_query($sql);
                    include 'nhanvien/listdm.php';
                    break;
                case 'thoat':
                    if(isset($_SESSION['role'])) unset($_SESSION['role']);
                    header('location: ../index.php');
                    break;
                case 'listsp':
                    if (isset($_POST['listgo'])&&($_POST['listgo'])){
                        $kyw =$_POST['kyw'];
                        $iddm =$_POST['iddm'];
                    }else{
                        $kyw='';
                        $iddm=0;
                    }
                    $sql = "select * from loai order by ten_loai desc";
                    $listdanhmuc= pdo_query($sql);
                    $listsanpham= loadall_sanpham($kyw,$iddm);
                    include 'nhanvien/listsp.php';
                    break;
                case 'dskh':
                    $listtaikhoan= loadall_taikhoan();
                    include 'nhanvien/listtk.php';
                    break;
                case 'binhluan':
                    $listbl=loadall_binhluan_admin();
                    include 'nhanvien/listbinhluan.php';
                    break;
                case 'thongke':
                    $listtk = loadall_thongke();
                    include 'nhanvien/listthongke.php';
                    break; 
                case 'listtt':
                    $listtintuc = loadall_tintuc();
                    include 'nhanvien/listblog.php';
                    break;
                case 'listimg':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sanpham = loadone_sanpham($_GET['id']);
                    }
                    $listimg = loadall_img($_GET['id']);
                    include "nhanvien/listimg.php";
                    break;
                case 'donhanglist':
                    $listbill = loadall_bill();
                    include "nhanvien/listdh.php";
                    break;
                case 'listchitietdh':
                    if(isset($_GET['ma_dh'])&&($_GET['ma_dh']>0)){
                        $listchitietdh = loadone_chitietdh($_GET['ma_dh']);
                        $bill_mgg = loaddetailbill_mgg($_GET['ma_dh']);
                    }
                    include "nhanvien/chitiet_dh.php";
                    break;
                case 'dsmgg':
                    $listmagiam=loadall_magiam();
                    include "nhanvien/listmgg.php";
                    break;
                default:
                    include 'home.php';
                    break;
            }
        }else{
            include 'home.php';
        }
        include 'footer.php';
    }else {
        header('location: ../index.php');
    }

?>