<div>
    @for ($t = 0; $t < 2; $t++)
    <div class="inline-block" style="width:49.5%;{{ $t == 0 ? 'float:left;padding-right:1%' : 'float:right' }}">
        <table class="width-full">
            <tr>
                <td rowspan="4" style="width:70px"></td>
                <td rowspan="4" class="bold text-center" style="font-size:18px;width:300px">PHIẾU XUẤT VẬT TƯ KIÊM NHẬP KHO THÀNH PHẨM</td>
                <td>Mã số :</td>
                <td >BM-01-063</td>
            </tr>
            <tr>
                <td style="width:150px">Ngày BH:</td>
                <td style="width:150px">09/2017</td>
            </tr>
            <tr>
                <td style="width:150px">Lần BH:</td>
                <td style="width:150px">01</td>
            </tr>
            <tr>
                <td style="width:150px">Số trang:</td>
                <td style="width:150px">01/01</td>
            </tr>
        </table>
        <strong><u>I. THÔNG TIN CHUNG:</u></strong>
        <table class="width-full mb-2">
            <tr>
                <td>Tổ sản xuất:</td>
                <td>Mã công thức: F213</td>
            </tr>
            <tr>
                <td>Mã sản phẩm:</td>
                <td>BNgày sản xuất: 20/05/2022</td>
            </tr>
            <tr>
                <td>Mã số mẻ:22041636B/1===>22041645B/2(20 Mẻ)</td>
                <td>Ngày hoàn thành: _____/_____/_____</td>
            </tr>
        </table>
        <strong><u>II. XUẤT VẬT TƯ: (1005 Kg/MẺ) X 20 MẺ:</u></strong>
        <table class="width-full mb-2">
            <tr class="gainsboro">
                <th class="padding-4-2">STT</th>
                <th class="padding-4-2">Mã Nguyên Liệu</th>
                <th class="padding-4-2">Số Lượng/1 mẻ</th>
                <th class="padding-4-2">Đơn vị</th>
                <th class="padding-4-2">Tổng xuất 20 MẺ</th>
                <th class="padding-4-2" style="width:85px;">Thực xuất</th>
            </tr>
            @for ($i = 1; $i <= 5; $i++)
                <tr>
                    <td class="text-center">{{ $i }}</td>
                    <td></td>
                    <td></td>
                    <td>Kg</td>
                    <td></td>
                    <td></td>
                </tr>
            @endfor
        </table>
        <div  class="text-right lh-20">Ngày xuất kho: _______/_______/_________</div>
        <table class="width-full mb-2">
            <tr>
                <td style="height:60px;" valign="top"><strong><i>Người nhận</i></strong></td>
                <td valign="top"><strong><i>Thủ kho</i></strong></td>
            </tr>
        </table>
        <strong><u>III. XUẤT BAO BÌ:</u></strong>
        <table class="width-full">
            <tr class="gainsboro">
                <th class="padding-4-2">STT</th>
                <th class="padding-4-2">Mã Nguyên Liệu</th>
                <th class="padding-4-2">Số Lượng/1 mẻ</th>
                <th class="padding-4-2">Đơn vị</th>
                <th class="padding-4-2">Tổng xuất 20 MẺ</th>
                <th class="padding-4-2" style="width:85px;">Thực xuất</th>
            </tr>
            <tr>
                <td class="text-center">1</td>
                <td></td>
                <td class="text-right">25.00</td>
                <td>Cái</td>
                <td class="text-right">500.00</td>
                <td></td>
            </tr>
        </table>
        <div  class="text-right lh-20">Ngày xuất kho: _______/_______/_________</div>
        <table class="width-full mb-2">
            <tr>
                <td style="height:60px;" valign="top"><strong><i>Người nhận</i></strong></td>
                <td valign="top"><strong><i>Thủ kho</i></strong></td>
            </tr>
        </table>
        <strong><u>IV. NHẬP KHO THÀNH PHẨM:</u></strong>
        <table class="width-full">
            <tr>
                <th class="padding-4-2">STT</th>
                <th class="padding-4-2">Quy cách đóng gói</th>
                <th class="padding-4-2">Đơn vị</th>
                <th class="padding-4-2">S.Lượng yêu cầu</th>
                <th class="padding-4-2">Thực nhập</th>
                <th class="padding-4-2">Ghi chú</th>
            </tr>
            <tr>
                <td class="text-center">1</td>
                <td class="text-center">40 ± 0.1 (Kg)</td>
                <td class="text-center">Bao</td>
                <td class="text-center">500 Bao</td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <div  class="text-right lh-20">Ngày nhập kho: _______/_______/_________</div>
        <table class="width-full">
            <tr>
                <td style="height:60px;" valign="top"><strong><i>Người Giao</i></strong></td>
                <td valign="top"><strong><i>Thủ kho</i></strong></td>
            </tr>
        </table>
        <div  class="text-right lh-20">Ngày: _______/_______/_________</div>
        <table class="width-full">
            <tr>
                <td style="height:60px;" valign="top"><strong><i>Duyệt (GDNM)</i></strong></td>
                <td valign="top"><strong><i>Người Lập:</i></strong></td>
            </tr>
        </table>
    </div>
@endfor
</div>