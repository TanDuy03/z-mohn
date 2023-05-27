<?php
    function insert_taikhoan($email,$fullname,$user,$pass,$address,$tel){
        $sql = "INSERT INTO tai_khoan(email,ho_ten,user,pass,address,tel) VALUES ('$email','$fullname','$user','$pass','$address','$tel')";
        // use exec() because no results are returned
        pdo_execute($sql);
    }
    function insert_taikhoan_admin($email,$fullname,$user,$pass,$address,$tel,$role){
        $sql = "INSERT INTO tai_khoan(email,ho_ten,user,pass,address,tel,role) VALUES ('$email','$fullname','$user','$pass','$address','$tel','$role')";
        // use exec() because no results are returned
        pdo_execute($sql);
    }
    function update_taikhoan($ma_tk,$fullname,$user,$pass,$address,$tel){
        $sql = "UPDATE tai_khoan SET user='".$user."',ho_ten='".$fullname."',pass='".$pass."',address='".$address."',tel='".$tel."' WHERE ma_tk=".$ma_tk;
        pdo_execute($sql);
    }
    // function checkuser($user,$pass){
    //     $sql = "select * from tai_khoan where user='".$user."' AND pass='".$pass."'";
    //     $sp=pdo_query_one($sql);
    //     return $sp;
    // }
    // ----------------------------------------------------------------------------------------------
    function checkuser($user,$pass){ 
        $conn = pdo_get_connection();
        $stmt = $conn->prepare("SELECT * FROM tai_khoan WHERE user ='".$user."' AND pass ='".$pass."'");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt ->fetchAll();
        if(count($kq) > 0) return $kq[0]['role'];
        else return 0;
    }
    // ----------------------------------------------------------------------------------------------
    function getuserinfo($user,$pass){
        $conn = pdo_get_connection();
        $stmt = $conn->prepare("SELECT * FROM tai_khoan WHERE user ='".$user."' AND pass ='".$pass."'");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt ->fetchAll();
        return $kq;
    }
    // ----------------------------------------------------------------------------------------------
    function loadall_taikhoan(){
        $sql = "select * from tai_khoan order by ma_tk desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function geton_taikhoan($ma_tk){
        $conn = pdo_get_connection();
        $stmt = $conn->prepare("SELECT * FROM tai_khoan WHERE ma_tk = ".$ma_tk);
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt ->fetchAll();
        return $kq;
    }
    function checkemail($email){
        $sql= "select * from tai_khoan where email='".$email."'";
        $kp=pdo_query_one($sql);
        return $kp;
    }
    // -------------------------------------------------------------------

?>