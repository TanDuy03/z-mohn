<?php 

    function loadall_chitietdh(){
        $sql = "SELECT * from chi_tiet_don_hang order by ma_ctdh desc";
        $listchitietdh = pdo_query($sql);
        return $listchitietdh;
    }
    function loadone_chitietdh($ma_dh){
        $sql = "SELECT ct.ma_ctdh, ct.ma_dh, dh.ma_gg, hh.id, hh.name, hh.img, hh.price_old, hh.price_new, ct.size, ct.quantity AS so_luong, (hh.price_old * ct.quantity) AS tong FROM (chi_tiet_don_hang ct INNER JOIN hang_hoa hh ON ct.ma_hh = hh.id) INNER JOIN don_hang dh ON ct.ma_dh = dh.ma_dh WHERE ct.ma_dh = ".$ma_dh;
        $listchitietdh = pdo_query($sql);
        return $listchitietdh;
    }
    function insert_chitietdh($ma_dh, $ma_hh, $size, $quantity) {
        $sql = "INSERT INTO chi_tiet_don_hang (ma_dh, ma_hh, size, quantity)
                VALUES ('$ma_dh', '$ma_hh', $size, $quantity)";
        pdo_execute($sql);
    }
?>