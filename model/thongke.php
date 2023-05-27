<?php
function loadall_thongke(){
    $sql="select loai.ma_loai as madm, loai.ten_loai as tendm, count(hang_hoa.id) as countsp, min(hang_hoa.price_old) as minprice, max(hang_hoa.price_old) as maxprice, avg(hang_hoa.price_old) as avgprice";
    $sql.=" from hang_hoa left join loai on loai.ma_loai=hang_hoa.iddm";
    $sql.=" group by loai.ma_loai order by loai.ma_loai desc";
    $listtk=pdo_query($sql);
    return $listtk;
}
?>
