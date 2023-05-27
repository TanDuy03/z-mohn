<?php

    function insert_tintuc($name,$hinh,$mota,$ngaydang){
        // $sql = "INSERT INTO hang_hoa (name,price,img,mo_ta,iddm) VALUES ('$tensp','$giasp','$hinh','$mota','$iddm')";
        $sql = "INSERT INTO tin_tuc (name, img, mota,ngaydang)
        VALUES ('$name', '$hinh', '$mota','$ngaydang')";
        pdo_execute($sql);
    }
    function delete_tintuc($id){
        $sql = "DELETE FROM tin_tuc WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadall_tintuc(){
        $sql = "SELECT * from tin_tuc WHERE 1";
        $sql.=" order by id desc";
        $listtintuc = pdo_query($sql);
        return $listtintuc;
    }
    function loadall_tintuc_home(){
        $sql = "SELECT * from tin_tuc WHERE 1 order by id desc limit 0,8";
        // if ($kyw!="") {
        //     $sql.=" and name like '%".$kyw."%'";
        // }
        // if ($iddm>0) {
        //     $sql.=" and iddm ='".$iddm."'";
        // }
        // $sql.=" order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadone_tintuc($id){
        $sql = "SELECT * from tin_tuc WHERE id=".$id;
        $tintuc = pdo_query($sql);
        return $tintuc;
    }
    // function update_sanpham($id,$tensp,$giasp,$mota,$hinh,$iddm){
    function update_tintuc($id,$name,$hinh,$mota){

        // $sql = "UPDATE tin_tuc SET name='".$name."',img='".$hinh."',mota='".$mota."' WHERE id=".$id;

        // pdo_execute($sql);
        if($hinh!="")
        // $sql = "UPDATE hang_hoa SET iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' WHERE id=".$id;
            $sql = "UPDATE tin_tuc SET name='".$name."',img='".$hinh."',mota='".$mota."' WHERE id=".$id;
        else
        // $sql = "UPDATE hang_hoa SET iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."' WHERE id=".$id;
            $sql = "UPDATE tin_tuc SET name='".$name."',mota='".$mota."' WHERE id=".$id;
        pdo_execute($sql);
    }

?>