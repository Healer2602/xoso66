<?php

$now = date("Y-m-d");
$now_date = str_replace("-", "", $now);
$yesterday = date("Y-m-d", strtotime("-1 day", strtotime($now))); // Trừ đi 1 ngày
$y_date = str_replace("-", "", $yesterday);
// echo "Thời gian hiện tại là: " . $y_date;

$arr_xshn = ["hnc-1", "bnc-1", "hfc-1", "gnic-1", "tpc-1"];

// function xử lý api
function getAPIYTD($arr)
{
    $now = date("Y-m-d");
    $now_date = str_replace("-", "", $now);
    $yesterday = date("Y-m-d", strtotime("-1 day", strtotime($now))); // Trừ đi 1 ngày
    $y_date = str_replace("-", "", $yesterday);
    $result = [];
    foreach ($arr as $value) {
        $url = "http://vip.manycai.com/K2643675f3854be/";
        $url .= $value;
        $url .= ".json/?issue=";
        $url .= $y_date;
        $curl = curl_init(); // Khởi tạo một đối tượng curl

        curl_setopt($curl, CURLOPT_URL, $url); // Thiết lập URL của API

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Thiết lập trả về dữ liệu dưới dạng chuỗi

        $response = curl_exec($curl); // Gửi yêu cầu và nhận phản hồi từ API

        curl_close($curl);

        // Xử lý phản hồi từ API
        try {
            $data = json_decode($response, true);
            if (!$data["error"]) {
                foreach ($data as $key => $dt) {
                    $result = $dt;
                    return $result;
                }
            }
        } catch (\Throwable $e) {
            throw $e;
        }
    }
}
function getAPIBeforeYTD($arr)
{
    $now = date("Y-m-d");
    $now_date = str_replace("-", "", $now);
    $yesterday = date("Y-m-d", strtotime("-2 day", strtotime($now))); // Trừ đi 2 ngày
    $y_date = str_replace("-", "", $yesterday);
    $result = [];
    foreach ($arr as $value) {
        $url = "http://vip.manycai.com/K2643675f3854be/";
        $url .= $value;
        $url .= ".json/?issue=";
        $url .= $y_date;
        $curl = curl_init(); // Khởi tạo một đối tượng curl

        curl_setopt($curl, CURLOPT_URL, $url); // Thiết lập URL của API

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Thiết lập trả về dữ liệu dưới dạng chuỗi

        $response = curl_exec($curl); // Gửi yêu cầu và nhận phản hồi từ API

        curl_close($curl);

        // Xử lý phản hồi từ API
        try {
            $data = json_decode($response, true);
            if (!$data["error"]) {
                foreach ($data as $key => $dt) {
                    $result = $dt;
                    return $result;
                }
            }
        } catch (\Throwable $e) {
            throw $e;
        }
    }
}
function  subString($string)
{
    $result = substr(str_replace(",", "", $string), -2);
    return $result;
}

$dt_xsmb = getAPIYTD($arr_xshn);
$dt_xsmb2 = getAPIBeforeYTD($arr_xshn);

$arr_live = array();
array_push($arr_live, subString($dt_xsmb["code"]["code"]));
array_push($arr_live, subString($dt_xsmb["code"]["code1"]));
foreach ($dt_xsmb["code"]["code2"] as $key => $value) {
    array_push($arr_live, subString($value));
}
foreach ($dt_xsmb["code"]["code3"] as $key => $value) {
    array_push($arr_live, subString($value));
}

foreach ($dt_xsmb["code"]["code4"] as $key => $value) {
    array_push($arr_live, subString($value));
}

foreach ($dt_xsmb["code"]["code5"] as $key => $value) {
    array_push($arr_live, subString($value));
}

foreach ($dt_xsmb["code"]["code6"] as $key => $value) {
    array_push($arr_live, subString($value));
}

foreach ($dt_xsmb["code"]["code7"] as $key => $value) {
    array_push($arr_live, str_replace(",", "", $value));
}
// array_push($arr, subString($dt_xsmb["code"]["code"]));
sort($arr_live);
?>

<div id="view-region">
    <div class="row">
        <div class="form-group col-12"><select class="form-control"
                onchange="(function(object){window.location.href=object.value;})(this)">
                <option value="/xo-so-mien-bac" selected="">Tất Cả Các Ngày Trong Tuần</option>
                <option value="/xo-so-mien-bac/chu-nhat">Chủ Nhật</option>
                <option value="/xo-so-mien-bac/thu-hai">Thứ Hai</option>
                <option value="/xo-so-mien-bac/thu-ba">Thứ Ba</option>
                <option value="/xo-so-mien-bac/thu-tu">Thứ Tư</option>
                <option value="/xo-so-mien-bac/thu-nam">Thứ Năm</option>
                <option value="/xo-so-mien-bac/thu-sau">Thứ Sáu</option>
                <option value="/xo-so-mien-bac/thu-bay">Thứ Bảy</option>
            </select></div>
    </div>
    <div class="kqbackground vien tb-phoi">
        <div id="outer_result_mb">
            <div class="result_div " id="result_mb">
                <div class="color333 pt-4">
                    <table
                        class="table table-condensed kqcenter kqvertimarginw table-kq-border table-kq-hover-div table-bordered kqbackground table-kq-bold-border tb-phoi-border watermark table-striped"
                        id="result_tab_mb">
                        <thead>
                            <tr class="title_row">
                                <td class="bg-warning opacy" colspan="2">
                                    <div class="col-sm-10">
                                        <a href="/in-truyen-thong.php?ngay=12-04-2023" target="_blank"><button
                                                class="btn btn-lg button-noborder col-sm-1 pull-left hidden-print"><span
                                                    class="lyphicon glyphicon glyphicon-print"></span></button></a>
                                        <h2 class="text-uppercase title-kqxs fs-5 text-center">XSMB - Kết Quả Xổ Số Miền
                                            Bắc <?php echo $dt_xsmb["opendate"] ?></h2>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="table-title hover table-text-special">Đặc
                                    biệt</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <div class="result-special">
                                            <?php
                                            echo str_replace(",", "", $dt_xsmb["code"]["code"]);
                                            ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class=" table-title hover">Giải nhất</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <div id="rs_1_0" style="width:100%; position: relative; float: left;"
                                            class="phoi-size chu22 gray need_blank vietdam hover" rs_len="5"
                                            data-pattern="[0-9]{5}" data-sofar="88982">
                                            <?php
                                            echo str_replace(",", "", $dt_xsmb["code"]["code1"]);
                                            ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title hover">Giải nhì</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <?php foreach ($dt_xsmb["code"]["code2"] as $key => $value) : ?>
                                        <div id="rs_2_0" style="width:50%; position: relative; float: left;"
                                            class="phoi-size chu22 gray need_blank vietdam border-right hover">
                                            <?php echo str_replace(",", "", $value); ?>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title hover">Giải ba</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <?php foreach ($dt_xsmb["code"]["code3"] as $key => $value) : ?>
                                        <div id="rs_3_0"
                                            style="width:33.333333333333%; position: relative; float: left;"
                                            class="phoi-size chu22 gray need_blank vietdam border-bottom border-right hover">
                                            <?php echo str_replace(",", "", $value); ?>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title hover" style="width:16%;vertical-align:middle;font-size:16px;">
                                    Giải tư</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <?php foreach ($dt_xsmb["code"]["code4"] as $key => $value) : ?>
                                        <div id="rs_4_0" style="width:25%; position: relative; float: left;"
                                            class="phoi-size chu22 gray need_blank vietdam border-right hover">
                                            <?php echo str_replace(",", "", $value); ?>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title hover" style="width:16%;vertical-align:middle;font-size:16px;">
                                    Giải năm</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <?php foreach ($dt_xsmb["code"]["code5"] as $key => $value) : ?>
                                        <div id="rs_5_0"
                                            style="width:33.333333333333%; position: relative; float: left;"
                                            class="phoi-size chu22 gray need_blank vietdam border-bottom border-right hover">
                                            <?php echo str_replace(",", "", $value); ?>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title hover">Giải sáu</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <?php foreach ($dt_xsmb["code"]["code6"] as $key => $value) : ?>
                                        <div id="rs_6_0"
                                            style="width:33.333333333333%; position: relative; float: left;"
                                            class="phoi-size chu22 gray need_blank vietdam border-right hover">
                                            <?php echo str_replace(",", "", $value); ?>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title hover">Giải bảy</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <?php foreach ($dt_xsmb["code"]["code7"] as $key => $value) : ?>
                                        <div id="rs_7_0" style="width:25%; position: relative; float: left;"
                                            class="phoi-size chu22 gray need_blank vietdam border-right hover">
                                            <?php echo str_replace(",", "", $value);  ?>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td colspan="2" class="text-center">
                                    Chỉ hiển thị:
                                    <input type="radio" name="mb_result_length" value="2"> 2 chữ số
                                    <input type="radio" name="mb_result_length" value="3"> 3 chữ số
                                    <input type="radio" name="mb_result_length" value="7" checked="yes"> Đầy đủ
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                    <!-- <div class="btn-group form-group" role="group" aria-label="quickSwitch" style="display: flex;">
                        <a href="/so-ket-qua-truyen-thong" class="btn btn-default btn-primary" role="button">Xem sổ kết
                            quả 30 ngày</a>
                        <a href="/so-ket-qua-truyen-thong/60" class="btn btn-default btn-info" role="button"
                            style="flex: 1;">60 ngày</a><a href="/so-ket-qua-truyen-thong/90"
                            class="btn btn-default btn-info" role="button" style="flex: 1;">90 ngày</a><a
                            href="/so-ket-qua-truyen-thong/200" class="btn btn-default btn-info" role="button"
                            style="flex: 1;">200 ngày</a><a href="/so-ket-qua-truyen-thong/300"
                            class="btn btn-default btn-info" role="button" style="flex: 1;">300 ngày</a>
                    </div> -->
                </div>
                <div class="color333 pt-4">
                    <table
                        class="table table-condensed kqcenter kqvertimarginw table-kq-border table-kq-hover-div table-bordered kqbackground table-kq-bold-border tb-phoi-border watermark table-striped"
                        id="result_tab_mb">
                        <thead>
                            <tr class="title_row">
                                <td class="bg-warning opacy" colspan="2">
                                    <div class="col-sm-10">
                                        <a href="/in-truyen-thong.php?ngay=12-04-2023" target="_blank"><button
                                                class="btn btn-lg button-noborder col-sm-1 pull-left hidden-print"><span
                                                    class="lyphicon glyphicon glyphicon-print"></span></button></a>
                                        <h2 class="text-uppercase title-kqxs fs-5 text-center">XSMB - Kết Quả Xổ Số Miền
                                            Bắc <?php echo $dt_xsmb2["opendate"] ?></h2>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-title hover table-text-special">Đặc
                                    biệt</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <div class="result-special">
                                            <?php
                                            echo str_replace(",", "", $dt_xsmb2["code"]["code"]);
                                            ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class=" table-title hover">Giải nhất</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <div id="rs_1_0" style="width:100%; position: relative; float: left;"
                                            class="phoi-size chu22 gray need_blank vietdam hover" rs_len="5"
                                            data-pattern="[0-9]{5}" data-sofar="88982">
                                            <?php
                                            echo str_replace(",", "", $dt_xsmb2["code"]["code1"]);
                                            ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title hover">Giải nhì</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <?php foreach ($dt_xsmb2["code"]["code2"] as $key => $value) : ?>
                                        <div id="rs_2_0" style="width:50%; position: relative; float: left;"
                                            class="phoi-size chu22 gray need_blank vietdam border-right hover">
                                            <?php echo str_replace(",", "", $value); ?>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title hover">Giải ba</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <?php foreach ($dt_xsmb2["code"]["code3"] as $key => $value) : ?>
                                        <div id="rs_3_0"
                                            style="width:33.333333333333%; position: relative; float: left;"
                                            class="phoi-size chu22 gray need_blank vietdam border-bottom border-right hover">
                                            <?php echo str_replace(",", "", $value); ?>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title hover" style="width:16%;vertical-align:middle;font-size:16px;">
                                    Giải tư</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <?php foreach ($dt_xsmb2["code"]["code4"] as $key => $value) : ?>
                                        <div id="rs_4_0" style="width:25%; position: relative; float: left;"
                                            class="phoi-size chu22 gray need_blank vietdam border-right hover">
                                            <?php echo str_replace(",", "", $value); ?>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title hover" style="width:16%;vertical-align:middle;font-size:16px;">
                                    Giải năm</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <?php foreach ($dt_xsmb2["code"]["code5"] as $key => $value) : ?>
                                        <div id="rs_5_0"
                                            style="width:33.333333333333%; position: relative; float: left;"
                                            class="phoi-size chu22 gray need_blank vietdam border-bottom border-right hover">
                                            <?php echo str_replace(",", "", $value); ?>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title hover">Giải sáu</td>
                                <td style="padding: 0;" class="">
                                    <div class="row-no-gutters text-center">
                                        <?php foreach ($dt_xsmb2["code"]["code6"] as $key => $value) : ?>
                                        <div id="rs_6_0"
                                            style="width:33.333333333333%; position: relative; float: left;"
                                            class="phoi-size chu22 gray need_blank vietdam border-right hover">
                                            <?php echo str_replace(",", "", $value); ?>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </td>
                            </tr>
                </div>
                <tr>
                    <td class="table-title hover">Giải bảy</td>
                    <td style="padding: 0;" class="">
                        <div class="row-no-gutters text-center">
                            <?php foreach ($dt_xsmb2["code"]["code7"] as $key => $value) : ?>
                            <div id="rs_7_0" style="width:25%; position: relative; float: left;"
                                class="phoi-size chu22 gray need_blank vietdam border-right hover">
                                <?php echo str_replace(",", "", $value);  ?>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        Chỉ hiển thị:
                        <input type="radio" name="mb_result_length" value="2"> 2 chữ số
                        <input type="radio" name="mb_result_length" value="3"> 3 chữ số
                        <input type="radio" name="mb_result_length" value="7" checked="yes"> Đầy đủ
                    </td>
                </tr>
                </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
</div>