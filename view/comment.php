<?php 
    session_start();
    ob_start();
    include "../model/pdo.php";
    include "../model/binhluan.php";
    $idpro=$_REQUEST['idpro'];
    $dsbl=loadall_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
    


<section style="background-color: #eee;">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card">
          <?php 
            // echo"Duy nè".$idpro;
            foreach($dsbl as $bl){
                extract($bl);
                // var_dump($bl);
        
                echo '<div class="card-body">
                <div class="d-flex flex-start align-items-center">
                  <div>
                    <h6 class="fw-bold text-primary mb-1">'.$user.'</h6>
                    <p class="text-muted small mb-0">
                      Shared publicly - '.$ngay_bl.'
                    </p>
                  </div>
                </div>
    
                <p class="mt-3 mb-4 pb-2">
                  '.$noi_dung.'
                </p>
    
                
              </div>';
            }
            
          ?>
          </table>
            <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
            <div class="d-flex flex-start w-100">
            <?php
                if (!isset($_SESSION['user'])) {
                    echo '<h6 class="text-danger"><a href="index.php?act=login">Đăng nhập</a> để bình luận</h6>';
                } else {
            ?>
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                    <input type="hidden" name="user" value="<?=$_SESSION['user']?>" disabled>
                    <input type="text" name="noidung" style="outline: none; border:1px solid #ccc; border-radius: 5px;padding-left:10px;">
                    <input type="submit" name="guibinhluan" value="Publish" class="" style=" width:90px;margin-top:10px;border:none;border-radius: 5px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                </form>
            <?php } ?>
                <?php
                //echo $_SESSION['user'];
                if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    $sql = "SELECT * FROM tai_khoan WHERE user = '".$_SESSION['user']."'";
                    extract(pdo_query_one($sql));
                    $noidung=$_POST['noidung'];
                    $idpro=$_POST['idpro'];
                    $iduser=$ma_tk;
                    //$iduser=$_SESSION['user']['ma_tk']; 
                    $ngaybinhluan = date("d M, y");
                    insert_binhluan($noidung,$idpro,$iduser,$ngaybinhluan); 
                    header("location: ".$_SERVER['HTTP_REFERER']);
                }
                
                 

                ?>
            </div>
            
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>