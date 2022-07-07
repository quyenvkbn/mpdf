<div class="width-full mb-10">
    <table class="width-full">
        <tr>
            <td rowspan="3" colspan="1" style="width:70px"></td>
            <td rowspan="3" colspan="1" class="bold text-center" style="font-size:16px">PHIẾU KIỂM SOÁT QUÁ TRÌNH CẤP LIỆU BỘT BẢ TƯỜNG</td>
            <td class="text-center">Mã số :</td>
            <td class="text-center">BTM-85-01-06</td>
        </tr>
        <tr>
            <td class="text-center" style="width:150px">Ngày BH:</td>
            <td class="text-center" style="width:150px">9/2017</td>
        </tr>
        <tr>
            <td class="text-center" style="width:150px">Lần BH:</td>
            <td class="text-center" style="width:150px">1</td>
        </tr>
    </table>
</div>
<div class="width-full">
    <table class="width-full mb-5">
        <tr>
            <td>Mã sản phẩm: </td>
            <td style="width:380px;"></td>
            <td>Số phiêu sản xuất: </td>
            <td>025</td>
        </tr>
        <tr>
            <td>Mã số mẻ: </td>
            <td>22041636B ===> 22041645B (10 mẻ)</td>
            <td>Ngày sản xuất:</td>
            <td>Ngày hoàn thành: ________/________/_________</td>
        </tr>
        <tr>
            <td rowspan="3" style="width:100px;" class="text-center">CÔNG NHÂN SẢN XUẤT</td>
            <td style="height:20px;"></td>
            <td rowspan="3" style="width:130px;" class="text-center">NHÂN VIÊN KCS</td>
            <td rowspan="3"></td>
        </tr>
        <tr>
            <td style="height:20px;"></td>
        </tr>
        <tr>
            <td style="height:20px;"></td>
        </tr>
    </table>

    <table class="width-full ksqt">
        <tr>
            <th rowspan="2">STT</th>
            <th rowspan="2">Mã mẻ</th>
            <th rowspan="2">Kiểm tra sàng</th>
            <th colspan="8">MÃ VẬT TƯ</th>
            <th rowspan="2">ĐÓNG BAO<br>(Kg)</th>
            <th rowspan="2">QC xác nhận</th>
            <th rowspan="2">GHI CHÚ</th>
        </tr>
        <tr>
            <td class="w-60"></td>
            <td class="w-60"></td>
            <td class="w-60"></td>
            <td class="w-60"></td>
            <td class="w-60"></td>
            <td class="w-60"></td>
            <td class="w-60"></td>
            <td class="w-60"></td>
        </tr>
        @for ($i = 1; $i <= 17; $i++)
            <tr>
                <td class="text-center">{{ $i }}</td>
                <td>22041636B</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endfor
    </table>
    <div>
        <div style="padding-left:15px;padding-bottom:5px;float:left;width:50px;">
            <strong><u><i>Lưu ý:</i></u></strong>
        </div>
        <div class="mb-5">
            <p><input type="checkbox"><strong><i>Công nhân đánh dấu thứ tự cấp liệu</i></strong></p>
            <p><input type="checkbox"><strong><i>KCS kiểm tra sàng từng mẻ, kiểm tra trọng lượng đóng bao cách 5 mẻ, ghi số liệu các mẻ: 1;5;10...</i></strong></p>
        </div>
    </div>
    <table class="width-full mb-5">
        <tr>
            <td rowspan="3" style="width:100px;" class="text-center">CÔNG NHÂN SẢN XUẤT</td>
            <td style="width:380px;height:60px"></td>
            <td rowspan="3" style="width:130px;" class="text-center">NHÂN VIÊN KCS</td>
            <td rowspan="3"></td>
        </tr>
    </table>
</div>
