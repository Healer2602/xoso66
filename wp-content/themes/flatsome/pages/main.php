<?php

$now = date("Y-m-d");
$now_date = str_replace("-", "", $now);
$yesterday = date("Y-m-d", strtotime("-1 day", strtotime($now))); // Trừ đi 1 ngày
$y_date = str_replace("-", "", $yesterday);
// echo "Thời gian hiện tại là: " . $y_date;

$arr_xshn = ["hnc", "bnc", "hfc", "gnic", "tpc"];

// function xử lý api
function getAPIXSMB($arr)
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

function subString($string)
{
    $result = substr(str_replace(",", "", $string), -2);
    return $result;
}

$dt_xsmb = getAPIXSMB($arr_xshn);

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

<div class="col-md-6 result-kqxs">
    <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    <div class="btn-group justify-center" style="width:100%;">
        <a href="<?php echo site_url("/xo-so-mien-bac.php"); ?>" style="padding-left: 1px; padding-right: 1px;"><button
                type="button" class="btn btn-danger" style=" border-radius: 0 !important;">Miền Bắc</button></a><a
            href="/xo-so-mien-trung" style="padding-left: 1px; padding-right: 1px;"><button type="button"
                class="btn btn-danger" style=" border-radius: 0 !important;">Miền Trung</button></a><a
            href="/xo-so-mien-nam" style="padding-left: 1px; padding-right: 1px;"><button type="button"
                class="btn btn-danger" style=" border-radius: 0 !important;">Miền Nam</button></a>
    </div>
    <div class="kqbackground vien tb-phoi">
        <div id="outer_result_mb">
            <div class="result_div " id="result_mb">
                <div class="color333">
                    <table
                        class="table table-condensed kqcenter kqvertimarginw table-kq-border table-kq-hover-div table-bordered kqbackground table-kq-bold-border tb-phoi-border watermark table-striped"
                        id="result_tab_mb">
                        <thead>
                            <tr class="title_row">
                                <td class="color333" colspan="2">
                                    <div class="col-sm-12">
                                        <h2 class="text-uppercase title-kqxs fs-2 text-center">Xổ số
                                            Hà Nội</h2>
                                        <span>
                                            Ngày
                                            <?php echo $dt_xsmb["opendate"] ?>
                                        </span>
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
                                            class="phoi-size chu22 gray need_blank vietdam hover">
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
                    <script>
                    $(document).ready(function() {
                        $('input:radio[name=mb_result_length]').change(function() {
                            var new_length = $(this).val();
                            result_shortern('div.result_div#result_mb', 'mb', new_length);
                        });
                    });
                    </script>
                    <div class="btn-group form-group" role="group" aria-label="quickSwitch" style="display: flex;">
                        <a href="/so-ket-qua-truyen-thong" class="btn btn-default btn-primary" role="button">Xem sổ kết
                            quả 30 ngày</a>
                        <a href="/so-ket-qua-truyen-thong/60" class="btn btn-default btn-info" role="button"
                            style="flex: 1;">60 </a><a href="/so-ket-qua-truyen-thong/90"
                            class="btn btn-default btn-info" role="button" style="flex: 1;">90 </a><a
                            href="/so-ket-qua-truyen-thong/200" class="btn btn-default btn-info" role="button"
                            style="flex: 1;">200 </a><a href="/so-ket-qua-truyen-thong/300"
                            class="btn btn-default btn-info" role="button" style="flex: 1;">300 </a>
                    </div>
                </div>
                <div class="hidden-print">
                    <div class="kqborder kqvertimarginw" style="padding: 10px 0 5px 10px; background: #eee;">
                        <div class="fb-like fb_iframe_widget" data-href="http://ketqua.net" data-width=""
                            data-layout="button_count" data-action="like" data-size="small" data-show-faces="true"
                            data-share="true" fb-xfbml-state="rendered"
                            fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=518&amp;href=http%3A%2F%2Fketqua.net%2F&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small&amp;width=">
                            <span style="vertical-align: bottom; width: 150px; height: 28px;"><iframe
                                    name="fd656e702b38b4" width="1000px" height="1000px"
                                    data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin"
                                    frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                    allow="encrypted-media"
                                    src="https://www.facebook.com/v11.0/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df198b4beb2a4bc8%26domain%3Dketqua8.net%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fketqua8.net%252Ff6af23a3af4b7c%26relation%3Dparent.parent&amp;container_width=518&amp;href=http%3A%2F%2Fketqua.net%2F&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small&amp;width="
                                    style="border: none; visibility: visible; width: 150px; height: 28px;"
                                    class=""></iframe></span>
                        </div>
                    </div>
                    <a rel="nofollow" href="https://www.vg66.com/?inviteCode=24460314&amp;regAgentJumpFlag=1
" target="_blank"> <img src="//img.ketqua8.net/images/2022/09/28/cc1bc873890e52bd74dd9955f04c3c88.gif
" alt="" width="530" height="50" style="margin-bottom: 5px;"></a>
                    <a rel="nofollow" href="https://lucky88.fun/saleoff/?a=3d21d4f191d040baada2e641cac79a19&amp;utm_campaign=cpd&amp;utm_source=ketqua1net&amp;utm_medium=center5-530x80&amp;utm_content=sport
" target="_blank"> <img src="//img.ketqua8.net/images/2022/08/06/dd97d3cdc7aa306329f34a6d29bfcee9.gif
" alt="" width="530" height="50" style="margin-bottom: 5px;"></a>
                    <a rel="nofollow" href="https://fcb8.top/?a=5a916529fd13fab19dd9f98c4a8b15d2&amp;utm_campaign=cpd&amp;utm_source=ketqua1net&amp;utm_medium=banner.center6-530x90&amp;utm_content=sport
" target="_blank"> <img src="//img.ketqua8.net/images/2022/11/20/5648d779e776f982c4298d470df815eb.gif
" alt="" width="530" height="50" style="margin-bottom: 5px;"></a>
                </div>
                <table
                    class="table table-bordered table-condensed table-kq-north table-kq-border kqcenter table-kq-bold-border kqbackground table-kq-hover"
                    id="loto_mb">
                    <thead>
                        <tr>
                            <td colspan="9">Lô tô trực tiếp</td>
                        </tr>
                    </thead>
                    <tbody style="font-weight:bold;">
                        <tr>
                            <td class="chu17 need_blank"><?php echo $arr_live[0] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[1] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[2] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[3] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[4] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[5] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[6] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[7] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[8] ?></td>
                        </tr>
                        <tr>
                            <td class="chu17 need_blank"><?php echo $arr_live[9] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[10] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[11] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[12] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[13] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[14] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[15] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[16] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[17] ?></td>
                        </tr>
                        <tr>
                            <td class="chu17 need_blank"><?php echo $arr_live[18] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[19] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[20] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[21] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[22] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[23] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[24] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[25] ?></td>
                            <td class="chu17 need_blank"><?php echo $arr_live[26] ?></td>
                        </tr>

                    </tbody>
                </table>
                <div class="hidden-print"><a rel="nofollow" href="https://fabet.live/khuyen-mai/?a=9bd409e6e7dd52b6ece6a0baafed25f4&amp;utm_campaign=cpd&amp;utm_source=ketqua1net&amp;utm_medium=center7-538x60&amp;utm_content=sport
" target="_blank"> <img src="//img.ketqua8.net/images/2023/02/08/01652b3f6d76248dc2251d83a763170c.gif" alt=""
                            width="530" height="50" style="margin-bottom:5px;"></a>
                    <a rel="nofollow" href="https://dabet.info/khuyen-mai/?a=e8545e2b401e4b8b3cfa59b1232a76b1&amp;utm_campaign=cpd&amp;utm_source=ketquanet&amp;utm_medium=bannercenter8-530x90&amp;utm_content=sport
" target="_blank"> <img src="//img.ketqua8.net/images/2023/02/17/09af35ff40379cbf5fd20c8f5a52b4a5.gif" alt=""
                            width="530" height="50" style="margin-bottom: 5px;"></a>
                </div>
                <div class="row" style="margin-bottom: -19px; margin-top: 10px;">
                    <div class="col-xs-5">
                        <table
                            class="table table-hover table-bordered table-condensed table-kq-north-west table-kq-border table-kq-bold-border kqbackground table-kq-hover"
                            style="margin-left: 3px;" id="dau_mb">
                            <thead>
                                <tr>
                                    <td style="width:16%;">Đầu</td>
                                    <td class="bang_kqnhanh_bold_bottomw">Lô tô</td>
                                </tr>
                            </thead>
                            <tbody style="font-weight:bold;">
                                <tr>
                                    <td class="dosam chu15 kqcenter">0</td>
                                    <td id="begin_with_0" class="chu15 need_blank">04; 09; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">1</td>
                                    <td id="begin_with_1" class="chu15 need_blank">10; 10; 16; 19; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">2</td>
                                    <td id="begin_with_2" class="chu15 need_blank">21; 23; 28; 29; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">3</td>
                                    <td id="begin_with_3" class="chu15 need_blank">33; 39; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">4</td>
                                    <td id="begin_with_4" class="chu15 need_blank">42; 44; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">5</td>
                                    <td id="begin_with_5" class="chu15 need_blank">53; 54; 54; 56; 57; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">6</td>
                                    <td id="begin_with_6" class="chu15 need_blank">62; 66; 69; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">7</td>
                                    <td id="begin_with_7" class="chu15 need_blank">77; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">8</td>
                                    <td id="begin_with_8" class="chu15 need_blank">82; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">9</td>
                                    <td id="begin_with_9" class="chu15 need_blank"><span class="maudo">95</span>; 96;
                                        97; </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-xs-5">
                        <table
                            class="table table-hover table-bordered table-condensed table-kq-north-west table-kq-border table-kq-bold-border kqbackground table-kq-hover"
                            style="margin-left: -3px;" id="duoi_mb">
                            <thead>
                                <tr>
                                    <td style="width:16%;">Đuôi</td>
                                    <td>Lô tô</td>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tbody style="font-weight:bold;">
                                <tr>
                                    <td class="dosam chu15 kqcenter">0</td>
                                    <td id="end_with_0" class="chu15 need_blank">10; 10; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">1</td>
                                    <td id="end_with_1" class="chu15 need_blank">21; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">2</td>
                                    <td id="end_with_2" class="chu15 need_blank">42; 62; 82; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">3</td>
                                    <td id="end_with_3" class="chu15 need_blank">23; 33; 53; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">4</td>
                                    <td id="end_with_4" class="chu15 need_blank">04; 44; 54; 54; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">5</td>
                                    <td id="end_with_5" class="chu15 need_blank"><span class="maudo">95</span>; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">6</td>
                                    <td id="end_with_6" class="chu15 need_blank">16; 56; 66; 96; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">7</td>
                                    <td id="end_with_7" class="chu15 need_blank">57; 77; 97; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">8</td>
                                    <td id="end_with_8" class="chu15 need_blank">28; </td>
                                </tr>
                                <tr>
                                    <td class="dosam chu15 kqcenter">9</td>
                                    <td id="end_with_9" class="chu15 need_blank">09; 19; 29; 39; 69; </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <span id="all_res_mb" class="hidden-print"
                    hidden="">37195889829141039454683195242313233682772116930216014234625629259657569121624482536810385730940416697543928</span>
                <span id="reload_link_mb" class="hidden-print" hidden="">http://data.ketqua1.net/kq-mb.raw</span>
                <span id="date_mb" class="hidden-print" hidden="">2023-04-12</span>
            </div>
        </div>
    </div>
</div>