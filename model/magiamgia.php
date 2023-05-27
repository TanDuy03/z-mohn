<?php
    function insert_magiam($ma_gg,$ngay_bd,$ngay_kt,$giatri){
        $sql = "INSERT INTO ma_giam_gia (ma_gg, ngay_bd, ngay_kt, giatri)
        VALUES ('$ma_gg', '$ngay_bd', '$ngay_kt', '$giatri')";
        pdo_execute($sql);
    }
    function loadall_magiam(){
        $sql = "SELECT * from ma_giam_gia order by ma_gg desc";
        $listmagiam = pdo_query($sql);
        return $listmagiam;
    }
    function loadmgg($time) {
        $sql = "SELECT * FROM ma_giam_gia WHERE ngay_kt >= '".$time."'";
        $listmagiam = pdo_query($sql);
        return $listmagiam;
    }
?>