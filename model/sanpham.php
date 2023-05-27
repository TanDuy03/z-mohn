<?php

    function insert_sanpham($tensp,$giasp,$giaspnew,$hinh,$mota,$iddm){
        $sql = "INSERT INTO hang_hoa (name, price_old, price_new, img, mota, iddm)
        VALUES ('$tensp', '$giasp', '$giaspnew', '$hinh', '$mota', '$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql = "DELETE FROM hang_hoa WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham($kyw="",$iddm=0){
        $sql = "SELECT * from hang_hoa WHERE 1";
        if ($kyw!="") {
            $sql.=" and name like '%".$kyw."%'";
        }
        if ($iddm>0) {
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham1($kyw="",$iddm=0){
        $sql = "SELECT * from hang_hoa WHERE 1";
        if ($kyw!="") {
            $sql.=" and name like '%".$kyw."%'";
        }
        if ($iddm>0) {
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" order by id desc";
        $filtersp = pdo_query($sql);
        return $filtersp;
    }
    function loadall_sanpham_home(){
        
        $sql = "SELECT * from hang_hoa WHERE 1 order by id desc limit 9";   //load 8 sản phẩm
        
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_tang(){
        $sql = "SELECT * from hang_hoa WHERE 1 order by price_old ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_giam(){
        $sql = "SELECT * from hang_hoa WHERE 1 order by price_old desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    // demo
    function loadone_sanpham($id){
        $sql = "SELECT * FROM hang_hoa hh join loai lh ON hh.iddm = lh.ma_loai WHERE hh.id = ".$id;
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
    function filter_sanpham($iddm){
        $sql = "SELECT * FROM hang_hoa hh WHERE hh.iddm = ".$iddm;
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
    function giohang_sanpham($ma_hh){
        $sql = "SELECT * FROM hang_hoa hh WHERE hh.id = ".$ma_hh;
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
    // end
    // function loadone_sanpham($id){
    //     $sql = "SELECT * from hang_hoa WHERE id=".$id;
    //     $sanpham = pdo_query($sql);
    //     return $sanpham;
    // }
    // function update_sanpham($id,$tensp,$giasp,$mota,$hinh,$iddm){
    function update_sanpham($id,$tensp,$giasp,$giaspnew,$mota,$hinh,$trang_thai){
        if($hinh!="")
            // $sql = "UPDATE hang_hoa SET iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' WHERE id=".$id;
            $sql = "UPDATE hang_hoa SET name='".$tensp."',price_old='".$giasp."',price_new='".$giaspnew."',mota='".$mota."',img='".$hinh."',trang_thai='".$trang_thai."' WHERE id=".$id;
        else
            // $sql = "UPDATE hang_hoa SET iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."' WHERE id=".$id;
            $sql = "UPDATE hang_hoa SET name='".$tensp."',price_old='".$giasp."',price_new='".$giaspnew."',mota='".$mota."',trang_thai='".$trang_thai."' WHERE id=".$id;
        pdo_execute($sql);
    }
    function get_product_special(){
        $sql= "SELECT * FROM hang_hoa WHERE special=1 order by id DESC";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
    function updateview($id) {
        $sql = "UPDATE hang_hoa SET luotxem = luotxem + 1 WHERE id=".$id;
        pdo_execute($sql);
    }
    function get_product_top9() {
        $sql = "SELECT * FROM hang_hoa ORDER BY luotxem DESC LIMIT 9";
        $mostview = pdo_query($sql);
        return $mostview;
    }
    // function load_ten_dm($iddm){
    //     if($iddm>0){
    //         $sql="select * from hang_hoa where id=".$iddm;
    //         $dm=pdo_query_one($sql);
    //         extract($dm);
    //         return $name;

    //     } else {
    //         return "";
    //     }
    // }
    
?>