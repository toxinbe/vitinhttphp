<?php
function kiemTraLogin($post, $sessionDSKH)
{
    $email = $post['email'];
    $password = $post['password'];
    for ($i = 0; $i < count($sessionDSKH); $i++) {
        if (isset($sessionDSKH[$i])) {
            if ($email == $sessionDSKH[$i]['email'] && $password == $sessionDSKH[$i]['password']) {
                return 1;
            }
        }
    }
    if ($email == "test@123" && $password == "123") {
        return 2;
    } else if ($email == "test@456" && $password == "456") {
        return 3;
    }
    return 0;
}
function kiemTraDangKy($post, $sessionDSKH)
{
    $email = $post['email'];
    for ($i = 0; $i < count($sessionDSKH); $i++) {
        if (isset($sessionDSKH[$i])) {
            if ($email == $sessionDSKH[$i]['email']) {
                return 1;
            }
        }
    }
    return 0;
}
function timViTriKhachHangTrongDS($email, $sessionDSKH)
{
    for ($i = 0; $i < count($sessionDSKH); $i++) {
        if (isset($sessionDSKH[$i])) {
            if ($email == $sessionDSKH[$i]['email']) {
                return $i;
            }
        }
    }
    return -1;
}
function timViTriSPtrongDS($maSanPham, $arrMaSP)
{
    for ($i = 0; $i < count($arrMaSP); $i++) {
        if ($maSanPham == $arrMaSP[$i]) {
            return $i;
        }
    }
    return -1;
}
function timViTriSPtrongGioHang($maSanPham, $sessionDSSPtrongGioHang)
{
    for ($i = 0; $i < count($sessionDSSPtrongGioHang); $i++) {
        if ($maSanPham == $sessionDSSPtrongGioHang[$i]) {
            return $i;
        }
    }
    return -1;
}
function capNhatSoLuongCuaTungSanPhamTrongGioHang(&$post, &$session)
{
    for ($i = 0; $i < count($session["maSanPham"]); $i++) {
        $maSanPham = $session["maSanPham"][$i];
        $soLuongMua = $post['soLuongMua' . $maSanPham];
        if ($soLuongMua > 0) {
            $session["tongSoLuongMua"] -= $session["soLuongMua"][$i];
            $session["soLuongMua"][$i] = $soLuongMua;
            $session["tongSoLuongMua"] += $session["soLuongMua"][$i];
        }
    }
}
