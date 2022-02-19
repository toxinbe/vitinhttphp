<?php
function kiemTraEmail($email){
    $pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
    if(preg_match($pattern, $email)) return 1;
    return 0;
}
function kiemTraPassword($password){
    if(strlen($password)>=6 && strlen($password)<=28) return 1;
    return 0;
}
function kiemTraLogin($post,$sessionDSKH){
    $email=$post['email'];
    $password=$post['password'];
    if (kiemTraEmail($email)==1&&kiemTraPassword($password)==1){
        for($i=0;$i<count($sessionDSKH);$i++){
            if ($email==$sessionDSKH[$i]['email']&&$password==$sessionDSKH[$i]['password']){
                return 1;
            }
        }
    }
    if($email=="test@123"&&$password=="123"){
        return 2;
    }else if($email=="test@456"&&$password=="456"){
        return 3;
    }
    return 0;
}
function kiemTraDangKy($post,$sessionDSKH){
    $email=$post['email'];
    if (kiemTraEmail($email)==1){
        for($i=0;$i<count($sessionDSKH);$i++){
            if ( $email==$sessionDSKH[$i]['email'] ){
                return 1;
            }
        }
    }    
    return 0;
}
function timViTriKhachHangTrongDS($email,$sessionDSKH){
    for($i=0;$i<count($sessionDSKH);$i++){
        if ( $email==$sessionDSKH[$i]['email'] ){
            return $i;
        }
    }
    return -1;
}
function timViTriSPtrongDS($maSanPham,$arrMaSP){
    for($i=0;$i<count($arrMaSP);$i++){
        if ($maSanPham==$arrMaSP[$i]){
            return $i;
        }
    }
    return -1;
}
function timViTriSPtrongGioHang($maSanPham,$sessionDSSPtrongGioHang){
    for($i=0;$i<count($sessionDSSPtrongGioHang);$i++){
        if ($maSanPham==$sessionDSSPtrongGioHang[$i]){
            return $i;
        }
    }
    return -1;
}
function capNhatSoLuongCuaTungSanPhamTrongGioHang($post,&$session){
    for($i=0;$i<count($session["maSanPham"]);$i++){
        $maSanPham=$session["maSanPham"][$i];
        $soLuongMua=$post['soLuongMua'.$maSanPham];
        if ($soLuongMua>0){
            $session["tongSoLuongMua"]-=$session["soLuongMua"][$i];
            $session["soLuongMua"][$i]=$soLuongMua;
            $session["tongSoLuongMua"]+=$session["soLuongMua"][$i];
        }
    }
}
function themSanPhamVaoGio($maSanPhamChonMua,$soLuongMua,&$session){
    $arrMaSP=array("SP01","SP02","SP03");
    $arrTenHinh=array("pc-gaming","pc-streamer","laptop-3");
    $arrTenSP=array("PC Gaming","PC Streamer","Laptop Lập Trình");
    $arrGia=array(10000000,25000000,9999999);

    if(!isset($session["maSanPham"])){
        $session["maSanPham"]=array();
    }
    $soLoaiSanPhamDangCoTrongGio=count($session["maSanPham"]);
    if(!isset($session["tongSoLuongMua"])){
        $session["tongSoLuongMua"]=0;
    }

    $viTriSP=timViTriSPtrongGioHang($maSanPhamChonMua,$session["maSanPham"]);
    if($viTriSP>-1){
        $session['soLuongMua'][$viTriSP]+=$soLuongMua;
        $session["tongSoLuongMua"]+=$soLuongMua;
    }else{
        $viTriSP=timViTriSPtrongDS($maSanPhamChonMua,$arrMaSP);
        if($viTriSP>-1){
            $session["maSanPham"][$soLoaiSanPhamDangCoTrongGio]=$arrMaSP[$viTriSP];
            $session["tenHinh"][$soLoaiSanPhamDangCoTrongGio]=$arrTenHinh[$viTriSP];
            $session["tenSanPham"][$soLoaiSanPhamDangCoTrongGio]=$arrTenSP[$viTriSP];
            $session["donGia"][$soLoaiSanPhamDangCoTrongGio]=$arrGia[$viTriSP];
            if(!isset($session['soLuongMua'][$soLoaiSanPhamDangCoTrongGio])){
                $_SESSION['soLuongMua'][$soLoaiSanPhamDangCoTrongGio]=0;
            }
            $session['soLuongMua'][$soLoaiSanPhamDangCoTrongGio]+=$soLuongMua;
            $session["tongSoLuongMua"]+=$soLuongMua;
        }
    }
}
?>