<?php 

    function insert_binhluan($noidung,$idpro,$iduser,$ngaybinhluan){
        // $sql = "INSERT INTO hang_hoa (name,price,img,mo_ta,iddm) VALUES ('$tensp','$giasp','$hinh','$mota','$iddm')";
        $sql = "INSERT INTO binh_luan(noi_dung, idpro, iduser, ngay_bl)
        VALUES ('$noidung' , '$idpro', '$iduser', '$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadall_binhluan($idpro){
        $sql="SELECT * FROM binh_luan bl INNER JOIN tai_khoan tk ON bl.iduser=tk.ma_tk WHERE idpro='".$idpro."' ORDER BY id DESC ";
        $listbl=pdo_query($sql);
        return $listbl;
    }
    function loadall_binhluan_admin(){
        $sql="SELECT bl.id, bl.noi_dung, bl.ngay_bl, hh.name, tk.user FROM (binh_luan bl INNER JOIN hang_hoa hh ON bl.idpro = hh.id) INNER JOIN tai_khoan tk ON bl.iduser = tk.ma_tk ORDER BY bl.id DESC";
        $listbl=pdo_query($sql);
        return $listbl;
    }
    function delete_binhluan($id){
        $sql = "DELETE FROM binh_luan WHERE id=".$id;
        pdo_execute($sql);
    }
    function update_binhluan($id,$noidung){

        $sql = "UPDATE binh_luan SET noi_dung='".$noidung."' WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadone_binhluan($id){
        $sql = "SELECT * from binh_luan WHERE id=".$id;
        $binhl = pdo_query($sql);
        return $binhl;
    }
?>