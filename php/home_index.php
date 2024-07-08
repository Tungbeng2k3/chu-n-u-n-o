<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home_style.css">
    <link rel="stylesheet" href="../css/style.css"> 
    <title>Nhận biết vị trí u não</title>
    <style>
        .yellow-border {
            background-color: #ffffcc; /* Màu nền màu vàng */
            border: 2px solid #ffcc00; /* Viền màu vàng */
            padding: 20px; /* Khoảng cách giữa nội dung và viền */
        }
        .symptoms-container {
            display: flex;
            flex-wrap: wrap;
        }
        .symptoms-column {
            flex: 1;
            min-width: 200px;
            margin-right: 20px;
        }
        .symptoms-column label {
            display: block;
            margin-bottom: 10px;
        }
        .h1{
            

        }
    </style>
</head>
<body>

    <h1>NHẬN BIẾT VỊ TRÍ U NÃO</h1>
    <div class="yellow-border">
        <form action="process.php" method="post">
            Nhập tên của bạn:
            <input class="form-control" type="text" name="cate_name" id="">
            Nhập tuổi của bạn:
            <input class="form-control" type="text" name="cate_age" id="">
            Giới tính của bạn:
            <label><input type="radio" name="cate_sex" value="Nam"> Nam</label>
            <label><input type="radio" name="cate_sex" value="Nữ"> Nữ</label>
            <label><input type="radio" name="cate_sex" value="GLBT"> GLBT</label>
            <br>
            <input type="submit" value="Chọn các triệu chứng bạn gặp phải" class="form-submit" disabled style="background-color: #4CAF50; color: white;">

            <br><br>
            <div class="symptoms-container">
                <div class="symptoms-column">
                      <label for="dau_dau">
                        <input type="checkbox" id="dau_dau" name="dau_dau" value="1">
                        Đau đầu
                    <label for="thay_doi_tinh_cach">
                        <input type="checkbox" id="thay_doi_tinh_cach" name="thay_doi_tinh_cach" value="1">
                        Thay đổi tính cách
                    </label>
                    <label for="kho_khan_lap_ke_hoach">
                        <input type="checkbox" id="kho_khan_lap_ke_hoach" name="kho_khan_lap_ke_hoach" value="1">
                        Khó khăn lập kế hoạch
                    </label>
                    <label for="suy_giam_kha_nang_van_dong">
                        <input type="checkbox" id="suy_giam_kha_nang_van_dong" name="suy_giam_kha_nang_van_dong" value="1">
                        Suy giảm khả năng vận động
                    </label>
                    <label for="mat_cam_giac">
                        <input type="checkbox" id="mat_cam_giac" name="mat_cam_giac" value="1">
                        Mất cảm giác
                    </label>
                    <label for="kho_xac_dinh_vi_tri_cua_cac_chi">
                        <input type="checkbox" id="kho_xac_dinh_vi_tri_cua_cac_chi" name="kho_xac_dinh_vi_tri_cua_cac_chi" value="1">
                        Khó xác định vị trí của các chi
                    </label>
                    <label for="van_de_ngon_ngu">
                        <input type="checkbox" id="van_de_ngon_ngu" name="van_de_ngon_ngu" value="1">
                        Vấn đề ngôn ngữ
                    </label>
                    <label for="van_de_thinh_giac">
                        <input type="checkbox" id="van_de_thinh_giac" name="van_de_thinh_giac" value="1">
                        Vấn đề thính giác
                    </label>
                </div>

                <div class="symptoms-column">
                    <label for="co_giat">
                        <input type="checkbox" id="co_giat" name="co_giat" value="1">
                        Co giật
                    </label>
                    <label for="van_de_tri_nho">
                        <input type="checkbox" id="van_de_tri_nho" name="van_de_tri_nho" value="1">
                        Vấn đề trí nhớ
                    </label>
                    <label for="mat_thi_luc">
                        <input type="checkbox" id="mat_thi_luc" name="mat_thi_luc" value="1">
                        Mất thị lực
                    </label>
                    <label for="nhin_doi">
                        <input type="checkbox" id="nhin_doi" name="nhin_doi" value="1">
                        Nhìn đôi
                    </label>
                    <label for="mat_thang_bang">
                        <input type="checkbox" id="mat_thang_bang" name="mat_thang_bang" value="1">
                        Mất thăng bằng
                    </label>
                    <label for="run_ray_khi_di_chuyen">
                        <input type="checkbox" id="run_ray_khi_di_chuyen" name="run_ray_khi_di_chuyen" value="1">
                        Run rẩy khi di chuyển
                    </label>
                    <label for="van_de_chuc_nang_tu_dong">
                        <input type="checkbox" id="van_de_chuc_nang_tu_dong" name="van_de_chuc_nang_tu_dong" value="1">
                        Vấn đề chức năng tự động
                    </label>
                    <label for="yeu_hoac_liet">
                        <input type="checkbox" id="yeu_hoac_liet" name="yeu_hoac_liet" value="1">
                        Yếu hoặc liệt
                    </label>
                    <label for="kho_khan_nuot_va_noi">
                        <input type="checkbox" id="kho_khan_nuot_va_noi" name="kho_khan_nuot_va_noi" value="1">
                        Khó khăn nuốt và nói
                    </label>
                </div>
            </div>
            <br>
            <input type="submit" value="Xác định">
        </form>
    </div>
</body>
</html>
