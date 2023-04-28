<div id="skq" p="mb" class="col-sm-12 col-md-12">
    <form method="POST" class="skq" action="/so-ket-qua">
        <div class="form-row d-flex">
            <div class="form-group col-4 col-sm-3"><label for="province">Tỉnh</label><select id="province"
                    name="province" class="form-control">
                    <option value="mb" selected="">Truyền Thống</option>
                    <option value="ag">An Giang</option>
                    <option value="bl">Bạc Liêu</option>
                    <option value="bdu">Bình Dương</option>
                    <option value="bdi">Bình Định</option>
                    <option value="bp">Bình Phước</option>
                    <option value="bth">Bình Thuận</option>
                    <option value="btr">Bến Tre</option>
                    <option value="cm">Cà Mau</option>
                    <option value="ct">Cần Thơ</option>
                    <option value="dlt">Đà Lạt</option>
                    <option value="dna">Đà Nẵng</option>
                    <option value="dlc">Đắc Lắc</option>
                    <option value="dno">Đắc Nông</option>
                    <option value="dni">Đồng Nai</option>
                    <option value="dt">Đồng Tháp</option>
                    <option value="gl">Gia Lai</option>
                    <option value="hg">Hậu Giang</option>
                    <option value="hcm">Hồ Chí Minh</option>
                    <option value="kg">Kiên Giang</option>
                    <option value="kh">Khánh Hoà</option>
                    <option value="kt">Kon Tum</option>
                    <option value="la">Long An</option>
                    <option value="nt">Ninh Thuận</option>
                    <option value="py">Phú Yên</option>
                    <option value="qb">Quảng Bình</option>
                    <option value="qna">Quảng Nam</option>
                    <option value="qng">Quảng Ngãi</option>
                    <option value="qt">Quảng Trị</option>
                    <option value="st">Sóc Trăng</option>
                    <option value="tn">Tây Ninh</option>
                    <option value="tth">Thừa Thiên Huế</option>
                    <option value="tg">Tiền Giang</option>
                    <option value="tv">Trà Vinh</option>
                    <option value="vl">Vĩnh Long</option>
                    <option value="vt">Vũng Tàu</option>
                </select></div>
            <div class="form-group col-4 col-sm-3"><label for="end">Biên độ Ngày</label><input id="end" name="end"
                    type="text" placeholder="yyyy-mm-dd" class="form-control" data-provide="datepicker-inline"
                    data-date-autoclose="true" data-date-format="dd-mm-yyyy" data-date-language="vi" value="17-04-2023">
            </div>
            <div class="form-group col-4 col-sm-3"><label for="daycount"><span
                        class="d-inline d-xs-none d-lg-inline">Lượt</span><span
                        class="d-none d-xs-inline d-lg-none">Lượt</span> (10 - 300)</label><input id="daycount"
                    name="daycount" type="number" pattern="[0-9]+" inputmode="numeric" min="10" max="300" value="20"
                    class="form-control"></div>
            <div class="form-group col-12 col-sm-3"><label for="dow">Ngày Trong Tuần</label><select id="dow" name="dow"
                    class="form-control">
                    <option value="-1" selected="">Tất Cả Các Ngày Trong Tuần</option>
                    <option value="0">Chủ Nhật</option>
                    <option value="1">Thứ Hai</option>
                    <option value="2">Thứ Ba</option>
                    <option value="3">Thứ Tư</option>
                    <option value="4">Thứ Năm</option>
                    <option value="5">Thứ Sáu</option>
                    <option value="6">Thứ Bảy</option>
                </select></div>
        </div>
        <div class="form-row mb-2 justify-content-center">
            <div class="btn-group col-12" role="group" aria-label="SoKetQuaChangeDayCount">
                <button class="btn btn-info btn-sm m-0" onclick="return kqv2.skq_ck(10);">10
                    <span class="d-none d-md-inline">
                        lượt
                    </span>
                </button>
                <button class="btn btn-info btn-sm active m-0" onclick="return kqv2.skq_ck(20);">20<span
                        class="d-none d-md-inline"> lượt</span></button><button class="btn btn-info btn-sm m-0"
                    onclick="return kqv2.skq_ck(30);">30<span class="d-none d-md-inline">
                        lượt</span></button><button class="btn btn-info btn-sm m-0"
                    onclick="return kqv2.skq_ck(60);">60<span class="d-none d-md-inline"> lượt</span></button><button
                    class="btn btn-info btn-sm m-0" onclick="return kqv2.skq_ck(90);">90<span
                        class="d-none d-md-inline">
                        lượt</span></button><button class="btn btn-info btn-sm m-0"
                    onclick="return kqv2.skq_ck(100);">100<span class="d-none d-md-inline"> lượt</span></button><button
                    class="btn btn-info btn-sm m-0" onclick="return kqv2.skq_ck(200);">200<span
                        class="d-none d-md-inline">
                        lượt</span></button><button class="btn btn-info btn-sm m-0"
                    onclick="return kqv2.skq_ck(250);">250<span class="d-none d-md-inline"> lượt</span></button><button
                    class="btn btn-info btn-sm m-0" onclick="return kqv2.skq_ck(300);">300<span
                        class="d-none d-md-inline">
                        lượt</span></button>
            </div>
        </div>
        <div class="form-row text-center">
            <div class="form-group col-md-4 col-12"><button type="submit"
                    class="btn btn-primary form-control">Xem</button></div>
        </div><input type="hidden" name="_token" value="FdAvOd20BOZMB9D3ju7xDSo8ONrBcI9uNYVzUmxI">
    </form>
    <div p="mb" role="skq-show">
        <p class="lead text-center">Sổ kết quả <a href="/xo-so-truyen-thong">xổ số Truyền Thống</a></p>
        <p class="text-center font-weight-light"><span class="d-inline-block"><span class="text-monospace">20</span>
                lượt quay, kết thúc vào <a href="/xo-so-truyen-thong/17-04-2023">17-04-2023</a></span><span
                class="d-inline-block">&nbsp;(Tất Cả Các Ngày Trong Tuần)</span></p>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-16" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/chu-nhat"><span class="d-none d-lg-inline">Chủ
                                        nhật</span><span class="d-inline d-lg-none">CN</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">16-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">41248</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">17827</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">73986</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">79480</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">41224</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        34610</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        25369</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">86403</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">80143</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">57669</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">1141</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">3622</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">2677</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">0520</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">1337</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        5356</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        2412</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">7235</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">8435</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">2100</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">803</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">944</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">321</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">26</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">28</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">70</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">72</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">10QM-3QM-8QM-4QM-1QM-15QM</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>3</span>, <span>0</span>, <span>3</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>0</span>, <span>2</span></td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>7</span>, <span>4</span>, <span>2</span>, <span>0</span>,
                                        <span>1</span>, <span>6</span>, <span>8</span>
                                    </td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>7</span>, <span>5</span>, <span>5</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span class="text-danger h5">8</span>, <span>3</span>, <span>1</span>,
                                        <span>4</span>
                                    </td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>6</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>9</span>, <span>9</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>7</span>, <span>0</span>, <span>2</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>6</span>, <span>0</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b="">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-content-center pb-3 row">
            <div class="length-selector-div btn-group btn-group-toggle col-12 col-lg-6" data-toggle="buttons"><span
                    class="btn btn-sm disabled btn-secondary"><input type="radio" disabled="">Chỉ hiển thị:
                </span><label class="btn btn-sm btn-info"><input type="radio" name="length-selector" value="2"
                        autocomplete="off" onchange="kqv2.plc('2')">2 chữ số</label><label
                    class="btn btn-sm btn-info"><input type="radio" name="length-selector" value="3" autocomplete="off"
                        onchange="kqv2.plc('3')">3 chữ số</label><label class="btn btn-sm btn-info active"><input
                        type="radio" name="length-selector" value="all" autocomplete="off" onchange="kqv2.plc('all')"
                        checked="">Đầy Đủ</label></div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-15" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-bay"><span class="d-none d-lg-inline">Thứ
                                        bảy</span><span class="d-inline d-lg-none">T7</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">15-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">27414</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">11010</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">41330</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">97277</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">74505</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        02583</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        25729</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">18319</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">80920</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">81572</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">1080</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">8991</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">4942</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">4123</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">9035</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        2575</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        9988</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">6255</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">7699</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">0135</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">777</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">921</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">304</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">11</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">53</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">81</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">27</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">5QN-10QN-2QN-13QN-3QN-6QN</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>5</span>, <span>4</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span class="text-danger h5">4</span>, <span>0</span>, <span>9</span>,
                                        <span>1</span>
                                    </td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>9</span>, <span>0</span>, <span>3</span>, <span>1</span>,
                                        <span>7</span>
                                    </td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>0</span>, <span>5</span>, <span>5</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>2</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>5</span>, <span>3</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b="">&nbsp;</td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>7</span>, <span>2</span>, <span>5</span>, <span>7</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>3</span>, <span>0</span>, <span>8</span>, <span>1</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>1</span>, <span>9</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-14" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-sau"><span class="d-none d-lg-inline">Thứ
                                        sáu</span><span class="d-inline d-lg-none">T6</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">14-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">57534</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">88770</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">05720</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">91578</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">03717</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        48451</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        94184</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">89449</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">05832</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">56081</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">4943</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">4300</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">4803</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">7938</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">2632</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        1938</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        4351</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">0270</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">7609</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">7302</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">029</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">457</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">562</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">88</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">23</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">60</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">79</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">9QP-2QP-7QP-14QP-5QP-13QP</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>0</span>, <span>3</span>, <span>9</span>, <span>2</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>7</span></td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>0</span>, <span>9</span>, <span>3</span></td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span class="text-danger h5">4</span>, <span>2</span>, <span>8</span>,
                                        <span>2</span>, <span>8</span>
                                    </td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>9</span>, <span>3</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>1</span>, <span>1</span>, <span>7</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>2</span>, <span>0</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>0</span>, <span>8</span>, <span>0</span>, <span>9</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>4</span>, <span>1</span>, <span>8</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b="">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-13" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-nam"><span class="d-none d-lg-inline">Thứ
                                        năm</span><span class="d-inline d-lg-none">T5</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">13-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">44265</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">59509</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">68989</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">53011</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">99466</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        91198</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        56803</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">55404</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">06860</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">51761</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">5199</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">2649</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">9460</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">1408</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">5496</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        4857</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        9907</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">3867</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">9046</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">6692</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">919</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">860</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">899</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">63</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">35</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">38</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">12</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">11QR-9QR-7QR-10QR-1QR-14QR</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>9</span>, <span>3</span>, <span>4</span>, <span>8</span>,
                                        <span>7</span>
                                    </td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>1</span>, <span>9</span>, <span>2</span></td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b="">&nbsp;</td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>5</span>, <span>8</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>9</span>, <span>6</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>7</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span class="text-danger h5">5</span>, <span>6</span>, <span>0</span>,
                                        <span>1</span>, <span>0</span>, <span>7</span>, <span>0</span>, <span>3</span>
                                    </td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b="">&nbsp;</td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>9</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>8</span>, <span>9</span>, <span>6</span>, <span>2</span>,
                                        <span>9</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-12" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-tu"><span class="d-none d-lg-inline">Thứ
                                        tư</span><span class="d-inline d-lg-none">T4</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">12-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">37195</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">88982</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">91410</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">39454</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">68319</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        52423</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        13233</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">68277</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">21169</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">30216</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">0142</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">3462</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">5629</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">2596</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">5756</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        9121</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        6244</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">8253</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">6810</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">3857</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">309</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">404</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">166</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">97</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">54</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">39</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">28</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">15QS-6QS-8QS-1QS-5QS-7QS</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>9</span>, <span>4</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>0</span>, <span>9</span>, <span>6</span>, <span>0</span></td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>3</span>, <span>9</span>, <span>1</span>, <span>8</span></td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>3</span>, <span>9</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>2</span>, <span>4</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>4</span>, <span>6</span>, <span>3</span>, <span>7</span>,
                                        <span>4</span>
                                    </td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>9</span>, <span>2</span>, <span>6</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>7</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>2</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span class="text-danger h5">5</span>, <span>6</span>, <span>7</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-11" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-ba"><span class="d-none d-lg-inline">Thứ
                                        ba</span><span class="d-inline d-lg-none">T3</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">11-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">16039</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">40045</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">88796</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">43516</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">95785</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        28723</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        74468</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">18671</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">71440</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">99436</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">8150</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">0958</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">7169</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">4771</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">1017</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        5415</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        7626</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">9898</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">1360</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">9496</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">489</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">632</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">860</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">22</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">64</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">26</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">84</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">13QT-12QT-10QT-5QT-15QT-14QT</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b="">&nbsp;</td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>6</span>, <span>7</span>, <span>5</span></td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>3</span>, <span>6</span>, <span>2</span>, <span>6</span></td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span class="text-danger h5">9</span>, <span>6</span>, <span>2</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>5</span>, <span>0</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>0</span>, <span>8</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>8</span>, <span>9</span>, <span>0</span>, <span>0</span>,
                                        <span>4</span>
                                    </td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>1</span>, <span>1</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>5</span>, <span>9</span>, <span>4</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>6</span>, <span>8</span>, <span>6</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-content-center pb-3 row">
            <div class="length-selector-div btn-group btn-group-toggle col-12 col-lg-6" data-toggle="buttons"><span
                    class="btn btn-sm disabled btn-secondary"><input type="radio" disabled="">Chỉ hiển thị:
                </span><label class="btn btn-sm btn-info"><input type="radio" name="length-selector" value="2"
                        autocomplete="off" onchange="kqv2.plc('2')">2 chữ số</label><label
                    class="btn btn-sm btn-info"><input type="radio" name="length-selector" value="3" autocomplete="off"
                        onchange="kqv2.plc('3')">3 chữ số</label><label class="btn btn-sm btn-info active"><input
                        type="radio" name="length-selector" value="all" autocomplete="off" onchange="kqv2.plc('all')"
                        checked="">Đầy Đủ</label></div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-10" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-hai"><span class="d-none d-lg-inline">Thứ
                                        hai</span><span class="d-inline d-lg-none">T2</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">10-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">06363</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">75304</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">29505</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">25800</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">33432</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        51472</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        46580</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">24161</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">76595</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">98352</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">7743</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">7403</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">1859</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">9221</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">3187</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        2855</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        8646</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">8584</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">0256</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">8458</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">352</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">139</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">219</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">13</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">54</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">34</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">96</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">7QU-2QU-12QU-10QU-1QU-11QU</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>4</span>, <span>5</span>, <span>0</span>, <span>3</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>9</span>, <span>3</span></td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>1</span></td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>2</span>, <span>9</span>, <span>4</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>3</span>, <span>6</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>2</span>, <span>9</span>, <span>5</span>, <span>6</span>,
                                        <span>8</span>, <span>2</span>, <span>4</span>
                                    </td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span class="text-danger h5">3</span>, <span>1</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>2</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>0</span>, <span>7</span>, <span>4</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>5</span>, <span>6</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-09" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/chu-nhat"><span class="d-none d-lg-inline">Chủ
                                        nhật</span><span class="d-inline d-lg-none">CN</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">09-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">10026</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">76693</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">66574</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">62714</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">54568</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        53998</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        95807</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">03990</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">50571</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">84713</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">1316</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">0902</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">7909</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">3442</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">3716</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        6641</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        4419</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">8431</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">3158</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">0433</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">469</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">923</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">443</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">02</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">73</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">58</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">12</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">6QV-8QV-9QV-4QV-13QV-1QV</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>7</span>, <span>2</span>, <span>9</span>, <span>2</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>4</span>, <span>3</span>, <span>6</span>, <span>6</span>,
                                        <span>9</span>, <span>2</span>
                                    </td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span class="text-danger h5">6</span>, <span>3</span></td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>1</span>, <span>3</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>2</span>, <span>1</span>, <span>3</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>8</span>, <span>8</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>8</span>, <span>9</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>4</span>, <span>1</span>, <span>3</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b="">&nbsp;</td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>3</span>, <span>8</span>, <span>0</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-08" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-bay"><span class="d-none d-lg-inline">Thứ
                                        bảy</span><span class="d-inline d-lg-none">T7</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">08-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">29815</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">36073</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">85333</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">58920</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">97433</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        78280</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        03170</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">06858</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">88255</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">88818</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">2712</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">0016</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">1596</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">5386</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">0744</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        4503</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        9287</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">3859</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">3643</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">8366</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">075</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">849</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">001</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">12</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">54</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">73</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">22</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">14QX-13QX-10QX-6QX-4QX-5QX</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>3</span>, <span>1</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span class="text-danger h5">5</span>, <span>8</span>, <span>2</span>,
                                        <span>6</span>, <span>2</span>
                                    </td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>0</span>, <span>2</span></td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>3</span>, <span>3</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>4</span>, <span>3</span>, <span>9</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>8</span>, <span>5</span>, <span>9</span>, <span>4</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>6</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>3</span>, <span>0</span>, <span>5</span>, <span>3</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>0</span>, <span>6</span>, <span>7</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>6</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-07" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-sau"><span class="d-none d-lg-inline">Thứ
                                        sáu</span><span class="d-inline d-lg-none">T6</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">07-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">49736</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">58224</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">65556</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">14147</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">58150</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        72738</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        43810</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">30812</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">33149</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">13629</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">8908</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">1830</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">7439</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">0764</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">6547</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        1958</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        9971</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">7786</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">2569</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">4304</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">463</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">465</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">406</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">00</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">44</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">72</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">22</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">7QY-10QY-2QY-15QY-3QY-8QY</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>8</span>, <span>4</span>, <span>6</span>, <span>0</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>0</span>, <span>2</span></td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>4</span>, <span>9</span>, <span>2</span></td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span class="text-danger h5">6</span>, <span>8</span>, <span>0</span>,
                                        <span>9</span>
                                    </td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>7</span>, <span>9</span>, <span>7</span>, <span>4</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>6</span>, <span>0</span>, <span>8</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>4</span>, <span>9</span>, <span>3</span>, <span>5</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>1</span>, <span>2</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>6</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b="">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-06" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-nam"><span class="d-none d-lg-inline">Thứ
                                        năm</span><span class="d-inline d-lg-none">T5</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">06-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">89911</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">05742</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">50512</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">78149</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">88171</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        00910</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        17405</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">26389</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">88291</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">99363</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">7605</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">2631</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">8658</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">7044</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">8351</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        4521</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        5193</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">7433</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">2793</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">6406</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">436</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">412</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">634</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">60</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">25</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">68</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">65</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">8QZ-13QZ-2QZ-11QZ-5QZ-6QZ</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>5</span>, <span>5</span>, <span>6</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span class="text-danger h5">1</span>, <span>2</span>, <span>0</span>,
                                        <span>2</span>
                                    </td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>1</span>, <span>5</span></td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>1</span>, <span>3</span>, <span>6</span>, <span>4</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>2</span>, <span>9</span>, <span>4</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>8</span>, <span>1</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>3</span>, <span>0</span>, <span>8</span>, <span>5</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>1</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>9</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>1</span>, <span>3</span>, <span>3</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-content-center pb-3 row">
            <div class="length-selector-div btn-group btn-group-toggle col-12 col-lg-6" data-toggle="buttons"><span
                    class="btn btn-sm disabled btn-secondary"><input type="radio" disabled="">Chỉ hiển thị:
                </span><label class="btn btn-sm btn-info"><input type="radio" name="length-selector" value="2"
                        autocomplete="off" onchange="kqv2.plc('2')">2 chữ số</label><label
                    class="btn btn-sm btn-info"><input type="radio" name="length-selector" value="3" autocomplete="off"
                        onchange="kqv2.plc('3')">3 chữ số</label><label class="btn btn-sm btn-info active"><input
                        type="radio" name="length-selector" value="all" autocomplete="off" onchange="kqv2.plc('all')"
                        checked="">Đầy Đủ</label></div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-05" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-tu"><span class="d-none d-lg-inline">Thứ
                                        tư</span><span class="d-inline d-lg-none">T4</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">05-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">96226</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">95972</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">01247</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">51881</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">41676</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        08715</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        40559</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">11220</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">01149</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">96249</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">4359</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">4886</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">1952</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">1114</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">6014</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        5500</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        7559</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">6213</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">7458</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">8014</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">379</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">127</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">366</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">85</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">26</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">25</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">55</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">17PA-5PA-16PA-13PA-7PA-11PA-8PA-14PA</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>0</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>5</span>, <span>4</span>, <span>4</span>, <span>3</span>,
                                        <span>4</span>
                                    </td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span class="text-danger h5">6</span>, <span>0</span>, <span>7</span>,
                                        <span>6</span>, <span>5</span>
                                    </td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b="">&nbsp;</td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>7</span>, <span>9</span>, <span>9</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>9</span>, <span>9</span>, <span>2</span>, <span>9</span>,
                                        <span>8</span>, <span>5</span>
                                    </td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>6</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>2</span>, <span>6</span>, <span>9</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>1</span>, <span>6</span>, <span>5</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b="">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-04" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-ba"><span class="d-none d-lg-inline">Thứ
                                        ba</span><span class="d-inline d-lg-none">T3</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">04-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">75345</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">58033</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">53624</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">14990</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">65024</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        54180</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        48496</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">98824</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">68882</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">50488</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">1050</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">3793</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">9904</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">2976</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">6534</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        1659</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        3601</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">3421</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">3084</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">1283</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">615</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">045</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">950</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">44</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">38</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">59</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">88</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">1PB-15PB-11PB-3PB-7PB-6PB</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>4</span>, <span>1</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>5</span></td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>4</span>, <span>4</span>, <span>4</span>, <span>1</span></td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>3</span>, <span>4</span>, <span>8</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span class="text-danger h5">5</span>, <span>5</span>, <span>4</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>0</span>, <span>9</span>, <span>0</span>, <span>9</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b="">&nbsp;</td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>6</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>0</span>, <span>2</span>, <span>8</span>, <span>4</span>,
                                        <span>3</span>, <span>8</span>
                                    </td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>0</span>, <span>6</span>, <span>3</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-03" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-hai"><span class="d-none d-lg-inline">Thứ
                                        hai</span><span class="d-inline d-lg-none">T2</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">03-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">52333</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">60129</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">20276</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">16945</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">79852</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        81184</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        82950</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">55742</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">41809</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">54881</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">7123</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">3025</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">2171</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">9384</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">5032</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        6746</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        5678</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">8084</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">0969</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">7357</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">116</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">932</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">199</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">65</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">89</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">71</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">53</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">11PC-3PC-10PC-5PC-1PC-15PC</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>9</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>6</span></td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>9</span>, <span>3</span>, <span>5</span></td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span class="text-danger h5">3</span>, <span>2</span>, <span>2</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>5</span>, <span>2</span>, <span>6</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>2</span>, <span>0</span>, <span>7</span>, <span>3</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>9</span>, <span>5</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>6</span>, <span>1</span>, <span>8</span>, <span>1</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>4</span>, <span>1</span>, <span>4</span>, <span>4</span>,
                                        <span>9</span>
                                    </td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>9</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-02" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/chu-nhat"><span class="d-none d-lg-inline">Chủ
                                        nhật</span><span class="d-inline d-lg-none">CN</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">02-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">01844</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">86587</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">43090</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">21057</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">57039</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        85367</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        50887</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">42799</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">15519</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">33621</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">2573</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">5217</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">1536</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">8939</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">2106</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        7124</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        5477</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">8497</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">6140</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">1356</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">057</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">954</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">095</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">96</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">07</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">70</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">77</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">14PD-15PD-4PD-6PD-13PD-10PD</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>6</span>, <span>7</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>9</span>, <span>7</span></td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>1</span>, <span>4</span></td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>9</span>, <span>6</span>, <span>9</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span class="text-danger h5">4</span>, <span>0</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>7</span>, <span>6</span>, <span>7</span>, <span>4</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>7</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>3</span>, <span>7</span>, <span>0</span>, <span>7</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>7</span>, <span>7</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>0</span>, <span>9</span>, <span>7</span>, <span>5</span>,
                                        <span>6</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-04-01" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-bay"><span class="d-none d-lg-inline">Thứ
                                        bảy</span><span class="d-inline d-lg-none">T7</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">01-04-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">70344</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">29158</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">24102</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">22255</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">23385</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        08995</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        78861</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">88142</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">93756</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">42929</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">0962</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">4828</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">0948</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">7865</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">5076</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        2309</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        1465</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">4650</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">5070</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">1375</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">549</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">093</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">772</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">09</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">18</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">34</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">91</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">9PE-11PE-14PE-2PE-10PE-12PE</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>2</span>, <span>9</span>, <span>9</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>8</span></td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>9</span>, <span>8</span></td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>4</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span class="text-danger h5">4</span>, <span>2</span>, <span>8</span>,
                                        <span>9</span>
                                    </td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>8</span>, <span>5</span>, <span>6</span>, <span>0</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>1</span>, <span>2</span>, <span>5</span>, <span>5</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>6</span>, <span>0</span>, <span>5</span>, <span>2</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>5</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>5</span>, <span>3</span>, <span>1</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-content-center pb-3 row">
            <div class="length-selector-div btn-group btn-group-toggle col-12 col-lg-6" data-toggle="buttons"><span
                    class="btn btn-sm disabled btn-secondary"><input type="radio" disabled="">Chỉ hiển thị:
                </span><label class="btn btn-sm btn-info"><input type="radio" name="length-selector" value="2"
                        autocomplete="off" onchange="kqv2.plc('2')">2 chữ số</label><label
                    class="btn btn-sm btn-info"><input type="radio" name="length-selector" value="3" autocomplete="off"
                        onchange="kqv2.plc('3')">3 chữ số</label><label class="btn btn-sm btn-info active"><input
                        type="radio" name="length-selector" value="all" autocomplete="off" onchange="kqv2.plc('all')"
                        checked="">Đầy Đủ</label></div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-03-31" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-sau"><span class="d-none d-lg-inline">Thứ
                                        sáu</span><span class="d-inline d-lg-none">T6</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">31-03-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">59381</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">50062</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">41803</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">74247</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">29789</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        25048</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        78541</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">21351</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">15625</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">53386</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">8847</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">1248</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">2881</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">7647</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">3187</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        0628</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        3153</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">7468</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">8667</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">7883</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">834</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">295</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">592</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">42</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">08</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">22</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">16</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">4PF-1PF-8PF-12PF-5PF-6PF</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>3</span>, <span>8</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>6</span></td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>5</span>, <span>8</span>, <span>2</span></td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>4</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>7</span>, <span>8</span>, <span>1</span>, <span>7</span>,
                                        <span>8</span>, <span>7</span>, <span>2</span>
                                    </td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>1</span>, <span>3</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>2</span>, <span>8</span>, <span>7</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b="">&nbsp;</td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span class="text-danger h5">1</span>, <span>9</span>, <span>6</span>,
                                        <span>1</span>, <span>7</span>, <span>3</span>
                                    </td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>5</span>, <span>2</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-03-30" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-nam"><span class="d-none d-lg-inline">Thứ
                                        năm</span><span class="d-inline d-lg-none">T5</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">30-03-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">11504</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">13132</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">43820</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">11937</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">91023</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        02686</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        33623</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">25816</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">44645</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">58918</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">9812</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">8664</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">1685</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">4375</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">6194</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        6939</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        9829</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">3640</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">4213</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">8870</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">374</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">236</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">642</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">17</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">95</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">41</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">89</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">11PG-14PG-4PG-2PG-9PG-6PG</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span class="text-danger h5">4</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>6</span>, <span>8</span>, <span>2</span>, <span>3</span>,
                                        <span>7</span>
                                    </td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span>0</span>, <span>3</span>, <span>3</span>, <span>9</span></td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>2</span>, <span>7</span>, <span>9</span>, <span>6</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>5</span>, <span>0</span>, <span>2</span>, <span>1</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b="">&nbsp;</td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>4</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>5</span>, <span>0</span>, <span>4</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>6</span>, <span>5</span>, <span>9</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>4</span>, <span>5</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-03-29" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-tu"><span class="d-none d-lg-inline">Thứ
                                        tư</span><span class="d-inline d-lg-none">T4</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">29-03-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">86367</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">69313</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">57644</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">99117</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">57068</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        01410</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        71666</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">59756</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">37373</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">20474</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">6395</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">5291</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">5632</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">3556</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">2533</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        5880</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        4616</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">8998</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">7741</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">1916</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">961</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">316</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">203</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">60</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">85</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">39</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">71</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">13PH-3PH-5PH-15PH-6PH-9PH</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>3</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>3</span>, <span>7</span>, <span>0</span>, <span>6</span>,
                                        <span>6</span>, <span>6</span>
                                    </td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b="">&nbsp;</td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>2</span>, <span>3</span>, <span>9</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>4</span>, <span>1</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>6</span>, <span>6</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span class="text-danger h5">7</span>, <span>8</span>, <span>6</span>,
                                        <span>1</span>, <span>0</span>
                                    </td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>3</span>, <span>4</span>, <span>1</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>0</span>, <span>5</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>5</span>, <span>1</span>, <span>8</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table d="2023-03-28" p="mb" class="table table-bordered table-striped table-sm" skq="">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center"><span class="d-none d-lg-inline">Kết Quả Xổ Số </span><a
                                    href="/so-ket-qua-truyen-thong/30">Truyền Thống</a> <a
                                    href="/so-ket-qua-truyen-thong/thu-ba"><span class="d-none d-lg-inline">Thứ
                                        ba</span><span class="d-inline d-lg-none">T3</span></a> <span
                                    class="d-none d-lg-inline">ngày </span><span
                                    class="d-inline-block">28-03-2023</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr pi="0" class="text-center">
                            <td class="align-middle text-center result-name"><span class="d-none d-lg-block">Đặc
                                    biệt</span><span class="d-lg-none">ĐB</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold text-danger col-12 d-block p-1 m-0">66228</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="1" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhất</span><span
                                    class="d-lg-none">G1</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-12 d-block p-1 m-0">20468</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="2" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải nhì</span><span
                                    class="d-lg-none">G2</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0">52302</div>
                                    <div l="5" class="font-weight-bold col-6 d-block p-1 m-0 border-left">81938</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="3" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải ba</span><span
                                    class="d-lg-none">G3</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">80052</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        98632</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        60778</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0">43904</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">23666</div>
                                    <div l="5" class="font-weight-bold col-4 d-block p-1 m-0 border-left">29291</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="4" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải tư</span><span
                                    class="d-lg-none">G4</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0">9299</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">7599</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">3882</div>
                                    <div l="4" class="font-weight-bold col-3 d-block p-1 m-0 border-left">4937</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="5" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải năm</span><span
                                    class="d-lg-none">G5</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-bottom">8481</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        5974</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left border-bottom">
                                        4117</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0">4744</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">3181</div>
                                    <div l="4" class="font-weight-bold col-4 d-block p-1 m-0 border-left">7043</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="6" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải sáu</span><span
                                    class="d-lg-none">G6</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0">520</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">126</div>
                                    <div l="3" class="font-weight-bold col-4 d-block p-1 m-0 border-left">567</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="7" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Giải bảy</span><span
                                    class="d-lg-none">G7</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children ">
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0">30</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">22</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">92</div>
                                    <div l="2" class="font-weight-bold col-3 d-block p-1 m-0 border-left">01</div>
                                </div>
                            </td>
                        </tr>
                        <tr pi="8" class="text-center">
                            <td class="align-middle text-center"><span class="d-none d-lg-block">Ký tự đặc
                                    biệt</span><span class="d-lg-none">KT</span></td>
                            <td class="text-center p-0">
                                <div class="row no-gutters kq-hover-on-children smaller">
                                    <div l="4" class="col-12 d-block p-1 m-0">6PK-4PK-1PK-13PK-10PK-8PK</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table p="mb" t="b"
                            class="table table-bordered results kq-tighter table-hover table-striped begin-end font-weight-bold">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">Đầu</th>
                                    <th>Đuôi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr d="0" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>0</span></td>
                                    <td b=""><span>2</span>, <span>4</span>, <span>1</span></td>
                                </tr>
                                <tr d="1" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>1</span></td>
                                    <td b=""><span>7</span></td>
                                </tr>
                                <tr d="2" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>2</span></td>
                                    <td b=""><span class="text-danger h5">8</span>, <span>0</span>, <span>6</span>,
                                        <span>2</span>
                                    </td>
                                </tr>
                                <tr d="3" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>3</span></td>
                                    <td b=""><span>8</span>, <span>2</span>, <span>7</span>, <span>0</span></td>
                                </tr>
                                <tr d="4" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>4</span></td>
                                    <td b=""><span>4</span>, <span>3</span></td>
                                </tr>
                                <tr d="5" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>5</span></td>
                                    <td b=""><span>2</span></td>
                                </tr>
                                <tr d="6" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>6</span></td>
                                    <td b=""><span>8</span>, <span>6</span>, <span>7</span></td>
                                </tr>
                                <tr d="7" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>7</span></td>
                                    <td b=""><span>8</span>, <span>4</span></td>
                                </tr>
                                <tr d="8" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>8</span></td>
                                    <td b=""><span>2</span>, <span>1</span>, <span>1</span></td>
                                </tr>
                                <tr d="9" class="align-middle">
                                    <td class="text-center font-weight-bold text-danger"><span>9</span></td>
                                    <td b=""><span>1</span>, <span>9</span>, <span>9</span>, <span>2</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>