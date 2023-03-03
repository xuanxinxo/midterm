<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="title">
            <h1>Danh mục sản phẩm</h1>
            <?php
            $arr = array();
            $arr[0]['name'] = "Sandal nữ cao gót phong cách Hàn Quốc - Kem - SD02K";
            $arr[0]['oldprice'] = "400,000đ";
            $arr[1]['newprice'] = "100,000đ";
            $arr[0]['status'] = "true";
            $arr[0]['img'] = "https://lzd-img-global.slatic.net/g/p/414dfbb4c63e74e3162882aebdcdeb6a.jpg_720x720q80.jpg_.webp";
            $arr[1]['name'] = "Giày Sandal đế xuống 7cm quay chéo 10190-S8-ZM";
            $arr[1]['oldprice'] = "600,000đ";
            $arr[1]['newprice'] = "100,000đ";
            $arr[1]['status'] = "true";
            $arr[1]['img'] = "https://www.giayrosata.com/data/Product/giay-thoi-trang-cao-cap-ro466-1668351999.png";
            $arr[2]['name'] = "Giay cao gót bít mũi Tammy shoes 8cm đen-AD8";
            $arr[2]['oldprice'] = "218,000đ";
            $arr[1]['newprice'] = "100,000đ";
            $arr[2]['status'] = "true";
            $arr[2]['img'] = "https://cdn.elly.vn/uploads/2019/09/13112600/Giay-nu-cao-cap-ELLY-EGM875.jpg";

            $array = array();
            $array[0]['name'] = "Túi xách nữ thời trang POTEKO";
            $array[0]['oldprice'] = "2,000,000đ";
            $array[0]['newprice'] = "1,500,000đ";
            $array[0]['status'] = "true";
            $array[0]['img'] = "https://product.hstatic.net/1000230642/product/gotw01000xam__3__12b66c441134414c83d628d73baf1dcb.jpg";
            $array[1]['name'] = "Sale hot Túi xách nữ da cao cấp T68-SP-2A1-Đen";
            $array[1]['oldprice'] = "600,000đ";
            $array[1]['newprice'] = "1,500,000đ";
            $array[1]['status'] = "true";
            $array[1]['img'] = "https://cdn.elly.vn/uploads/2019/07/13123857/tui-xach-nu-cao-cap-da-that-ELLY-ET103-14.jpg";
            $array[2]['name'] = "Sale hot Túi xách nữ da cao cấp T6868-11-2A1-";
            $array[2]['oldprice'] = "450,000đ";
            $array[2]['newprice'] = "800,000đ";
            $array[2]['status'] = "true";
            $array[2]['img'] = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGEPQY-CQEuNtUcKxDW84qIoJ5b7f53w-SeQ&usqp=CAU";
            ?>
        </div>
        <br>
        <h4>GIÀY DÉP</h4>
        <div class="row">
            <?php
            for ($i = 0; $i < count($arr); $i++) {
            ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $arr[$i]['img'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $arr[$i]['name'] ?> </h5>
                        <?php
                        $new = $arr[$i]['newprice'];
                        $old = $arr[$i]['oldprice'];
                        if ($new < $old) {
                            echo '<p class="card-text">' . $arr[$i]['newprice'] . '<b class="oldprice">' . $arr[$i]['oldprice'] . '</b></p>';
                        } else {
                            echo '<p class="card-text">' . $arr[$i]['oldprice'] . '</p>';
                        }
                        ?>
                        <a href="#" class="btn btn-warning">Đặt mua</a>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
        <h4>Túi Sách</h4>
        <div class="row">
            <?php
            for ($i = 0; $i < count($array); $i++) {
            ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $arr[$i]['img'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $array[$i]['name'] ?> </h5>
                        <?php
                        $new = $array[$i]['newprice'];
                        $old = $array[$i]['oldprice'];
                        if ($new < $old) {
                            echo '<p class="card-text">' . $array[$i]['newprice'] . '<b class="oldprice">' . $array[$i]['oldprice'] . '</b></p>';
                        } else {
                            echo '<p class="card-text">' . $array[$i]['oldprice'] . '</p>';
                        }
                        ?>
                        <a href="#" class="btn btn-warning">Đặt mua</a>
                    </div>
                </div>

            <?php
            }
            ?>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>