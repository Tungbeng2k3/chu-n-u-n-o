<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home_style.css">
    <link rel="stylesheet" href="../css/style.css"> 
    <title>Nhận biết vị trí u não</title>
</head>
<body>


    <?php
    // Kiểm tra nếu có dữ liệu được gửi từ biểu mẫu
    require("connect.php");

        // Nhận dữ liệu từ biểu mẫu
        $cate_name = isset($_POST["cate_name"]) ? $_POST["cate_name"] : "";
        $cate_age = isset($_POST["cate_age"]) ? $_POST["cate_age"] : "";
        $cate_sex = isset($_POST["cate_sex"]) ? $_POST["cate_sex"]:"" ;
        $dau_dau = isset($_POST['dau_dau']) ? 1 : 0;
        $thay_doi_tinh_cach = isset($_POST['thay_doi_tinh_cach']) ? 1 : 0;
        $kho_khan_lap_ke_hoach = isset($_POST['kho_khan_lap_ke_hoach']) ? 1 : 0;
        $suy_giam_kha_nang_van_dong = isset($_POST['suy_giam_kha_nang_van_dong']) ? 1 : 0;
        $mat_cam_giac = isset($_POST['mat_cam_giac']) ? 1 : 0;
        $kho_xac_dinh_vi_tri_cua_cac_chi = isset($_POST['kho_xac_dinh_vi_tri_cua_cac_chi']) ? 1 : 0;
        $van_de_thinh_giac = isset($_POST['van_de_thinh_giac']) ? 1 : 0;
        $co_giat = isset($_POST['co_giat']) ? 1 : 0;
        $van_de_ngon_ngu = isset($_POST['van_de_ngon_ngu']) ? 1 : 0;
        $van_de_tri_nho = isset($_POST['van_de_tri_nho']) ? 1 : 0;
        $mat_thi_luc = isset($_POST['mat_thi_luc']) ? 1 : 0;
        $nhin_doi= isset($_POST['nhin_doi']) ? 1 : 0;
        $mat_thang_bang = isset($_POST['mat_thang_bang']) ? 1 : 0;
        $run_ray_khi_di_chuyen = isset($_POST['run_ray_khi_di_chuyen']) ? 1 : 0;
        $van_de_chuc_nang_tu_dong = isset($_POST['van_de_chuc_nang_tu_dong']) ? 1 : 0;
        $yeu_hoac_liet = isset($_POST['yeu_hoac_liet']) ? 1 : 0;
        $kho_khan_nuot_va_noi = isset($_POST['kho_khan_nuot_va_noi']) ? 1 : 0;

        // Xác định vị trí u não tiềm ẩn
        $vi_tri_u_nao = "";

        if ($dau_dau && $thay_doi_tinh_cach && $kho_khan_lap_ke_hoach && $suy_giam_kha_nang_van_dong) {
            $vi_tri_u_nao = "Thùy trán";
        } elseif ($mat_cam_giac && $kho_xac_dinh_vi_tri_cua_cac_chi && $van_de_ngon_ngu) {
            $vi_tri_u_nao = "Thùy đỉnh";
        } elseif ($van_de_thinh_giac && $co_giat && $van_de_tri_nho) {
            $vi_tri_u_nao = "Thùy thái dương";
        } elseif ($mat_thi_luc && $nhin_doi) {
            $vi_tri_u_nao = "Thùy chẩm";
        } elseif ($mat_thang_bang  && $run_ray_khi_di_chuyen) {
            $vi_tri_u_nao = "Tiểu não";
        } elseif ($van_de_chuc_nang_tu_dong && $yeu_hoac_liet && $kho_khan_nuot_va_noi) {
            $vi_tri_u_nao = "Thân não";
        } else {
            $vi_tri_u_nao = "Không đủ thông tin để xác định";
        }

        // Câu truy vấn chèn dữ liệu vào cơ sở dữ liệu
        $sql = "INSERT INTO u_nao (cate_name, cate_age, cate_sex, dau_dau, thay_doi_tinh_cach, kho_khan_lap_ke_hoach, suy_giam_kha_nang_van_dong, mat_cam_giac, kho_xac_dinh_vi_tri_cua_cac_chi, van_de_ngon_ngu,
            van_de_thinh_giac,co_giat, van_de_tri_nho,mat_thi_luc,nhin_doi,mat_thang_bang, run_ray_khi_di_chuyen,van_de_chuc_nang_tu_dong,yeu_hoac_liet ,kho_khan_nuot_va_noi) VALUES ('$cate_name', '$cate_age','$cate_sex',
          '$dau_dau', '$thay_doi_tinh_cach', '$kho_khan_lap_ke_hoach', '$suy_giam_kha_nang_van_dong', '$mat_cam_giac', '$kho_xac_dinh_vi_tri_cua_cac_chi', '$van_de_ngon_ngu','$van_de_thinh_giac','$co_giat','$van_de_tri_nho',
          '$mat_thi_luc','$nhin_doi','$mat_thang_bang','$run_ray_khi_di_chuyen','$van_de_chuc_nang_tu_dong','$yeu_hoac_liet', '$kho_khan_nuot_va_noi')";

        if ($conn->query($sql) === TRUE) {
            echo '<div class="container">';
            echo '<div class="greeting YELLOW">Xin chào!</div>';
            echo '<div class="info YELLOW">' . $cate_name . '</div>';
            echo '<div class="info YELLOW">' . $cate_sex . '</div>';
            echo '<div class="info YELLOW">' . $cate_age . ' tuổi</div>';
            echo '<div class="brain-position YELLOW">Vị trí u não của bạn có thể là: ' . $vi_tri_u_nao . '</div>';
            echo '<div class="RED">BẠN NÊN ĐI KHÁM ĐỂ CÓ KẾT QUẢ CHÍNH XÁC!!!</div>';
            echo '<a href="javascript:history.back()" class="back-button">Quay lại trang chủ?</a>';
            echo"<div>";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }

        // Đóng kết nối
       
    
    ?>

</form>
    </body>
</html>