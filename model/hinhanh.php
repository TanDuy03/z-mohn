<?php

    function insert_img($ma_hh, $img) {
        $sql = "INSERT INTO hinh_anh (ma_hh, img)
        VALUES ('$ma_hh', '$img')";
        pdo_execute($sql);
    }

    function loadall_img($ma_hh) {
        $sql = "SELECT ha.id, ha.img FROM hinh_anh ha INNER JOIN hang_hoa hh ON ha.ma_hh = hh.id WHERE hh.id=" .$ma_hh;
        $listimg = pdo_query($sql);
        return $listimg;
    }

    function delete_img($id){
        $sql = "DELETE FROM hinh_anh WHERE id=".$id;
        pdo_execute($sql);
    }
?>