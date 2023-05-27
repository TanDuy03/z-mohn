<?php 

    function loadall_danhmuc(){
        // $sql = "SELECT * from hang_hoa WHERE 1";
        // if ($kyw!="") {
        //     $sql.=" and name like '%".$kyw."%'";
        // }
        // if ($iddm>0) {
        //     $sql.=" and iddm ='".$iddm."'";
        // }
        $sql = "SELECT * from loai order by ten_loai desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

?>