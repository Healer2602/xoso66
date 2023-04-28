<?php

get_template_part("api/xsmn/apiXSDN", "api");
get_template_part("api/xsmn/apiXSCT", "api");
get_template_part("api/xsmn/apiXSST", "api");
get_template_part("api/xsmn/apiXSBT", "api");

$kqxsdn = getXSDN();
$kqxsct = getXSCT();
$kqxsst = getXSST();
$kqxsbt = getXSBT();

$now = date("Y-m-d");





$today = strtotime('today');
$week_start = strtotime('this week', $today);
$week_end = strtotime('next week', $today) - 1;

$days = array();
for ($i = $week_start; $i <= $week_end; $i += 86400) {
    $days[] = date('Y-m-d', $i);
}

function  subString($string)
{
    $result = str_replace(",", "", $string);
    return $result;
}

?>

<div id="view-region">
    <div id="view-region" class="col-sm-12 col-lg-12 col-xl-12">
        <div class="row">
            <div class="form-group col-12"><select class="form-control"
                    onchange="(function(object){window.location.href=object.value;})(this)">
                    <option value="/xo-so-mien-nam" selected="">Tất Cả Các Ngày Trong Tuần</option>
                    <option value="/xo-so-mien-nam/chu-nhat">Chủ Nhật</option>
                    <option value="/xo-so-mien-nam/thu-hai">Thứ Hai</option>
                    <option value="/xo-so-mien-nam/thu-ba">Thứ Ba</option>
                    <option value="/xo-so-mien-nam/thu-tu">Thứ Tư</option>
                    <option value="/xo-so-mien-nam/thu-nam">Thứ Năm</option>
                    <option value="/xo-so-mien-nam/thu-sau">Thứ Sáu</option>
                    <option value="/xo-so-mien-nam/thu-bay">Thứ Bảy</option>
                </select></div>
        </div>
        <div></div>
        <div></div>
        <div>
            <table class="table table-bordered text-center results table-sm result-table">
                <thead>
                    <tr>
                        <th colspan="4"><span class="d-none d-lg-inline">Kết Quả </span>Xổ Số Miền Nam Thứ Ba
                            <?php echo $days[1] ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-success">
                        <td>Tỉnh</td>
                        <td class="text-center"><a href="/xo-so-ben-tre">Tây Ninh</a></td>
                        <td class="text-center"><a href="/xo-so-vung-tau">An Giang</a></td>
                        <td class="text-center"><a href="/xo-so-bac-lieu">Bình Thuận</a></td>
                    </tr>
                    <?php if (substr($kqxsbt[0]["opendate"], 0, 10) === $days[3]) : ?>
                    <tr class="">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                tám</span><span class="d-lg-none">G8</span></td>
                        <td l="2" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code8"]) ?></td>
                        <td l="2" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code8"]) ?></td>
                        <td l="2" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code8"]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                bảy</span><span class="d-lg-none">G7</span></td>
                        <td l="3" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code7"]) ?></td>
                        <td l="3" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code7"]) ?></td>
                        <td l="3" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code7"]) ?></td>
                    </tr>
                    <tr class="">
                        <td class="align-middle text-center" rowspan="3"><span class="d-none d-lg-block">Giải
                                sáu</span><span class="d-lg-none">G6</span></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code6"][0]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code6"][0]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code6"][0]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code6"][1]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code6"][1]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code6"][1]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code6"][2]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code6"][2]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code6"][2]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                năm</span><span class="d-lg-none">G5</span></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code5"]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code5"]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code5"]) ?></td>
                    </tr>
                    <tr class="">
                        <td class="align-middle text-center" rowspan="7"><span class="d-none d-lg-block">Giải
                                tư</span><span class="d-lg-none">G4</span></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code4"][0]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][0]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][0]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code4"][1]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][1]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][1]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code4"][2]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][2]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][2]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code4"][3]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][3]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][3]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code4"][4]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][4]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][4]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code4"][5]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][5]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][5]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code4"][6]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][6]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][6]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td class="align-middle text-center" rowspan="2"><span class="d-none d-lg-block">Giải
                                ba</span><span class="d-lg-none">G3</span></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code3"][0]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code3"][0]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code3"][0]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code3"][1]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code3"][1]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code3"][1]) ?></td>
                    </tr>
                    <tr class="">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                nhì</span><span class="d-lg-none">G2</span></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code2"]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code2"]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code2"]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                nhất</span><span class="d-lg-none">G1</span></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code1"]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code1"]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code1"]) ?></td>
                    </tr>
                    <tr class="">
                        <td class="align-middle text-center result-name" rowspan="1"><span class="d-none d-lg-block">Đặc
                                biệt</span><span class="d-lg-none">ĐB</span></td>
                        <td l="6" class="h5 font-weight-bold text-danger">
                            <?php echo subString($kqxsbt[0]["code"]["code"]) ?></td>
                        <td l="6" class="h5 font-weight-bold text-danger">
                            <?php echo subString($kqxsct[0]["code"]["code"]) ?></td>
                        <td l="6" class="h5 font-weight-bold text-danger">
                            <?php echo subString($kqxsst[0]["code"]["code"]) ?></td>
                    </tr>
                    <?php endif ?>
                    <!-- <tr>
                        <td class="text-center" colspan="4">
                            <div class="length-selector-div btn-group btn-group-toggle" data-toggle="buttons"><span
                                    class="btn btn-sm disabled btn-secondary"><input type="radio" disabled="">Chỉ hiển
                                    thị: </span><label class="btn btn-sm btn-info"><input type="radio"
                                        name="length-selector" value="2" autocomplete="off" onchange="kqv2.plc('2')">2
                                    chữ số</label><label class="btn btn-sm btn-info"><input type="radio"
                                        name="length-selector" value="3" autocomplete="off" onchange="kqv2.plc('3')">3
                                    chữ số</label><label class="btn btn-sm btn-info active"><input type="radio"
                                        name="length-selector" value="all" autocomplete="off" onchange="kqv2.plc('all')"
                                        checked="">Đầy Đủ</label></div>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
        <div>
            <table class="table table-bordered text-center results table-sm result-table">
                <thead>
                    <tr>
                        <th colspan="4"><span class="d-none d-lg-inline">Kết Quả </span>Xổ Số Miền Nam Thứ Tư
                            <?php echo $days[2] ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-success">
                        <td>Tỉnh</td>
                        <td class="text-center"><a href="/xo-so-ben-tre">Đồng Nai</a></td>
                        <td class="text-center"><a href="/xo-so-vung-tau">Cần Thơ</a></td>
                        <td class="text-center"><a href="/xo-so-bac-lieu">Sóc Trăng</a></td>
                    </tr>
                    <?php if (substr($kqxsdn[0]["opendate"], 0, 10) === $days[2]) : ?>
                    <tr class="">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                tám</span><span class="d-lg-none">G8</span></td>
                        <td l="2" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code8"]) ?></td>
                        <td l="2" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code8"]) ?></td>
                        <td l="2" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code8"]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                bảy</span><span class="d-lg-none">G7</span></td>
                        <td l="3" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code7"]) ?></td>
                        <td l="3" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code7"]) ?></td>
                        <td l="3" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code7"]) ?></td>
                    </tr>
                    <tr class="">
                        <td class="align-middle text-center" rowspan="3"><span class="d-none d-lg-block">Giải
                                sáu</span><span class="d-lg-none">G6</span></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code6"][0]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code6"][0]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code6"][0]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code6"][1]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code6"][1]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code6"][1]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code6"][2]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code6"][2]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code6"][2]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                năm</span><span class="d-lg-none">G5</span></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code5"]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code5"]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code5"]) ?></td>
                    </tr>
                    <tr class="">
                        <td class="align-middle text-center" rowspan="7"><span class="d-none d-lg-block">Giải
                                tư</span><span class="d-lg-none">G4</span></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code4"][0]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][0]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][0]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code4"][1]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][1]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][1]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code4"][2]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][2]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][2]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code4"][3]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][3]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][3]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code4"][4]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][4]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][4]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code4"][5]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][5]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][5]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code4"][6]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][6]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][6]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td class="align-middle text-center" rowspan="2"><span class="d-none d-lg-block">Giải
                                ba</span><span class="d-lg-none">G3</span></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code3"][0]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code3"][0]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code3"][0]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code3"][1]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code3"][1]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code3"][1]) ?></td>
                    </tr>
                    <tr class="">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                nhì</span><span class="d-lg-none">G2</span></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code2"]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code2"]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code2"]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                nhất</span><span class="d-lg-none">G1</span></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsdn[0]["code"]["code1"]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code1"]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code1"]) ?></td>
                    </tr>
                    <tr class="">
                        <td class="align-middle text-center result-name" rowspan="1"><span class="d-none d-lg-block">Đặc
                                biệt</span><span class="d-lg-none">ĐB</span></td>
                        <td l="6" class="h5 font-weight-bold text-danger">
                            <?php echo subString($kqxsdn[0]["code"]["code"]) ?></td>
                        <td l="6" class="h5 font-weight-bold text-danger">
                            <?php echo subString($kqxsct[0]["code"]["code"]) ?></td>
                        <td l="6" class="h5 font-weight-bold text-danger">
                            <?php echo subString($kqxsst[0]["code"]["code"]) ?></td>
                    </tr>
                    <?php endif ?>
                    <!-- <tr>
                        <td class="text-center" colspan="4">
                            <div class="length-selector-div btn-group btn-group-toggle" data-toggle="buttons"><span
                                    class="btn btn-sm disabled btn-secondary"><input type="radio" disabled="">Chỉ hiển
                                    thị: </span><label class="btn btn-sm btn-info"><input type="radio"
                                        name="length-selector" value="2" autocomplete="off" onchange="kqv2.plc('2')">2
                                    chữ số</label><label class="btn btn-sm btn-info"><input type="radio"
                                        name="length-selector" value="3" autocomplete="off" onchange="kqv2.plc('3')">3
                                    chữ số</label><label class="btn btn-sm btn-info active"><input type="radio"
                                        name="length-selector" value="all" autocomplete="off" onchange="kqv2.plc('all')"
                                        checked="">Đầy Đủ</label></div>
                        </td>
                    </tr> -->
                </tbody>
            </table>
            <div class="mb-2">
                <!-- <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link px-1 active" href="#live-loto-pane-btr"
                            id="live-loto-tag-btr" data-toggle="tab" role="tab" aria-control="live-loto-pane-btr"
                            aria-selected="true">Bến Tre</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link px-1" href="#live-loto-pane-vt"
                            id="live-loto-tag-vt" data-toggle="tab" role="tab" aria-control="live-loto-pane-vt"
                            aria-selected="false">Vũng Tàu</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link px-1" href="#live-loto-pane-bl"
                            id="live-loto-tag-bl" data-toggle="tab" role="tab" aria-control="live-loto-pane-bl"
                            aria-selected="false">Bạc Liêu</a></li>
                </ul> -->
                <div class="tab-content">
                    <!-- <div class="tab-pane fade active show" id="live-loto-pane-btr" role="tabpanel"
                        aria-labelledby="live-loto-tag-btr">
                        <div p="btr" class="row no-gutters text-center border mb-2 kq-hover-on-children">
                            <div class="col-12 no-hover table-info font-weight-bold">Loto trực tiếp</div>
                            <div class="col border">27</div>
                            <div class="col border">33</div>
                            <div class="col border">35</div>
                            <div class="col border">35</div>
                            <div class="col border">35</div>
                            <div class="col border">39</div>
                            <div class="col border">49</div>
                            <div class="col border">54</div>
                            <div class="col border">57</div>
                            <div class="w-100"></div>
                            <div class="col border">63</div>
                            <div class="col border">65</div>
                            <div class="col border">70</div>
                            <div class="col border">73</div>
                            <div class="col border">81</div>
                            <div class="col border">86</div>
                            <div class="col border font-weight-bold text-danger">89</div>
                            <div class="col border">91</div>
                            <div class="col border">95</div>
                            <div class="w-100"></div>
                        </div>
                    </div> -->
                    <!-- <div class="tab-pane fade" id="live-loto-pane-vt" role="tabpanel"
                        aria-labelledby="live-loto-tag-vt">
                        <div p="vt" class="row no-gutters text-center border mb-2 kq-hover-on-children">
                            <div class="col-12 no-hover table-info font-weight-bold">Loto trực tiếp</div>
                            <div class="col border">05</div>
                            <div class="col border">07</div>
                            <div class="col border">09</div>
                            <div class="col border">10</div>
                            <div class="col border">16</div>
                            <div class="col border">17</div>
                            <div class="col border">22</div>
                            <div class="col border">25</div>
                            <div class="col border">27</div>
                            <div class="w-100"></div>
                            <div class="col border">54</div>
                            <div class="col border font-weight-bold text-danger">62</div>
                            <div class="col border">63</div>
                            <div class="col border">65</div>
                            <div class="col border">65</div>
                            <div class="col border">69</div>
                            <div class="col border">71</div>
                            <div class="col border">80</div>
                            <div class="col border">81</div>
                            <div class="w-100"></div>
                        </div>
                    </div> -->
                    <!-- <div class="tab-pane fade" id="live-loto-pane-bl" role="tabpanel"
                        aria-labelledby="live-loto-tag-bl">
                        <div p="bl" class="row no-gutters text-center border mb-2 kq-hover-on-children">
                            <div class="col-12 no-hover table-info font-weight-bold">Loto trực tiếp</div>
                            <div class="col border">09</div>
                            <div class="col border font-weight-bold text-danger">22</div>
                            <div class="col border">26</div>
                            <div class="col border">30</div>
                            <div class="col border">30</div>
                            <div class="col border">40</div>
                            <div class="col border">43</div>
                            <div class="col border">48</div>
                            <div class="col border">48</div>
                            <div class="w-100"></div>
                            <div class="col border">52</div>
                            <div class="col border">66</div>
                            <div class="col border">66</div>
                            <div class="col border">71</div>
                            <div class="col border">76</div>
                            <div class="col border">93</div>
                            <div class="col border">93</div>
                            <div class="col border">93</div>
                            <div class="col border">96</div>
                            <div class="w-100"></div>
                        </div> -->
                </div>
            </div>
        </div>
        <div>
            <table class="table table-bordered text-center results table-sm result-table">
                <thead>
                    <tr>
                        <th colspan="4"><span class="d-none d-lg-inline">Kết Quả </span>Xổ Số Miền Nam Thứ Ba
                            <?php echo $days[1] ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-success">
                        <td>Tỉnh</td>
                        <td class="text-center"><a href="/xo-so-ben-tre">Bến Tre</a></td>
                        <td class="text-center"><a href="/xo-so-vung-tau">Vũng Tàu</a></td>
                        <td class="text-center"><a href="/xo-so-bac-lieu">Bạc Liêu</a></td>
                    </tr>
                    <?php if (substr($kqxsbt[0]["opendate"], 0, 10) === $days[1]) : ?>
                    <tr class="">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                tám</span><span class="d-lg-none">G8</span></td>
                        <td l="2" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code8"]) ?></td>
                        <td l="2" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code8"]) ?></td>
                        <td l="2" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code8"]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                bảy</span><span class="d-lg-none">G7</span></td>
                        <td l="3" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code7"]) ?></td>
                        <td l="3" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code7"]) ?></td>
                        <td l="3" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code7"]) ?></td>
                    </tr>
                    <tr class="">
                        <td class="align-middle text-center" rowspan="3"><span class="d-none d-lg-block">Giải
                                sáu</span><span class="d-lg-none">G6</span></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code6"][0]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code6"][0]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code6"][0]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code6"][1]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code6"][1]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code6"][1]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code6"][2]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code6"][2]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code6"][2]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                năm</span><span class="d-lg-none">G5</span></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code5"]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code5"]) ?></td>
                        <td l="4" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code5"]) ?></td>
                    </tr>
                    <tr class="">
                        <td class="align-middle text-center" rowspan="7"><span class="d-none d-lg-block">Giải
                                tư</span><span class="d-lg-none">G4</span></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code4"][0]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][0]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][0]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code4"][1]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][1]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][1]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code4"][2]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][2]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][2]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code4"][3]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][3]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][3]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code4"][4]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][4]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][4]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code4"][5]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][5]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][5]) ?></td>
                    </tr>
                    <tr class="">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code4"][6]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code4"][6]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code4"][6]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td class="align-middle text-center" rowspan="2"><span class="d-none d-lg-block">Giải
                                ba</span><span class="d-lg-none">G3</span></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code3"][0]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code3"][0]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code3"][0]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code3"][1]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code3"][1]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code3"][1]) ?></td>
                    </tr>
                    <tr class="">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                nhì</span><span class="d-lg-none">G2</span></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code2"]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code2"]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code2"]) ?></td>
                    </tr>
                    <tr class="kq-bg-dark">
                        <td class="align-middle text-center" rowspan="1"><span class="d-none d-lg-block">Giải
                                nhất</span><span class="d-lg-none">G1</span></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsbt[0]["code"]["code1"]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsct[0]["code"]["code1"]) ?></td>
                        <td l="5" class="font-weight-bold"><?php echo subString($kqxsst[0]["code"]["code1"]) ?></td>
                    </tr>
                    <tr class="">
                        <td class="align-middle text-center result-name" rowspan="1"><span class="d-none d-lg-block">Đặc
                                biệt</span><span class="d-lg-none">ĐB</span></td>
                        <td l="6" class="h5 font-weight-bold text-danger">
                            <?php echo subString($kqxsbt[0]["code"]["code"]) ?></td>
                        <td l="6" class="h5 font-weight-bold text-danger">
                            <?php echo subString($kqxsct[0]["code"]["code"]) ?></td>
                        <td l="6" class="h5 font-weight-bold text-danger">
                            <?php echo subString($kqxsst[0]["code"]["code"]) ?></td>
                    </tr>
                    <?php endif ?>
                    <!-- <tr>
                        <td class="text-center" colspan="4">
                            <div class="length-selector-div btn-group btn-group-toggle" data-toggle="buttons"><span
                                    class="btn btn-sm disabled btn-secondary"><input type="radio" disabled="">Chỉ hiển
                                    thị: </span><label class="btn btn-sm btn-info"><input type="radio"
                                        name="length-selector" value="2" autocomplete="off" onchange="kqv2.plc('2')">2
                                    chữ số</label><label class="btn btn-sm btn-info"><input type="radio"
                                        name="length-selector" value="3" autocomplete="off" onchange="kqv2.plc('3')">3
                                    chữ số</label><label class="btn btn-sm btn-info active"><input type="radio"
                                        name="length-selector" value="all" autocomplete="off" onchange="kqv2.plc('all')"
                                        checked="">Đầy Đủ</label></div>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>

</div>