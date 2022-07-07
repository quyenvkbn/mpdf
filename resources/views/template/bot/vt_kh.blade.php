<div class="width-full mb-10">
    <table class="width-full">
        <tr>
            <td rowspan="2" colspan="1" style="width:70px"></td>
            <td rowspan="2" colspan="1" class="gainsboro bold text-center">PHIẾU SẢN XUẤT BỘT BẢ TƯỜNG/KCS</td>
            <td colspan="2" class="text-center">Mã số : BTM-85-01-03</td>
        </tr>
        <tr>
            <td rowspan="1" colspan="1" class="text-center" style="width:150px">Ngày BH: 09/2017</td>
            <td rowspan="1" colspan="1" class="text-center" style="width:150px">Lần BH/SĐ: 09/2017</td>
        </tr>
    </table>
</div>
<div class="inline-block float-left" style="width:40%;padding-right:1%">
    <table class="width-full mb-5">
        <tr>
            <td>Tên sản phẩm: </td>
        </tr>
        <tr>
            <td>Mã sản phẩm: </td>
        </tr>
        <tr>
            <td>Mã số mẻ: </td>
        </tr>
        <tr>
            <td class="text-center bold">QUY TRÌNH SẢN XUẤT</td>
        </tr>
    </table>

    <table class="width-full">
        <tr>
            <th>STT</th>
            <th>Mã N.Liệu</th>
            <th>Khối lượng <br>/1 mẻ(Kg)</th>
            <th>Tổng khối lượng(Kg)</th>
            <th>Tem khuyến mại /1 mẻ(Kg)</th>
        </tr>
        @for ($i = 1; $i <= 5; $i++)
            <tr>
                <td class="text-center">{{ $i }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endfor
        <tr>
            <td class="bold">Cộng</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <div style="padding-left:15px;padding-bottom:5px;">
        <strong><u><i>Ghi chú:</i></u></strong>
    </div>
    <div style="font-size:12px;">
        <p>- Trộn sơ bộ (4) + (5)</p>
        <p>- Nạp đều xen kẽ xi măng (1) và bột (2,3), lượng hóa chất hỗn hợp (4+5) được dải đều trong suốt quá trình nạp liệu </p>
        <p class="mb-5">- Cho trộn 10 phút sau đó lấy mẫu cho QC kiểm tra</p>
    </div>
    <table class="width-full">
        <tr>
            <th colspan="5">ĐÓNG BAO</th>
        </tr>
        <tr>
            <th>STT</th>
            <th>Mã Bao Bì</th>
            <th>Số bao <br>/1 mẻ</th>
            <th>Khối lượng<br>1 bao</th>
            <th style="width:150px">Số lượng tem khuyến<br>mại /1 mẻ</th>
        </tr>
        <tr>
            <td class="text-center">1</td>
            <td class="text-center">BB2102N</td>
            <td class="text-center">25</td>
            <td class="text-center">40 ± 0.1 Kg</td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td colspan="2" class="text-center">Tổng(10 mẻ)</td>
            <td colspan="2" class="text-center">500 bao</td>
            <td class="text-right">_________tem</td>
        </tr>
        <tr>
            <td colspan="5">Trọng lượng bao trung bình (kg): </td>
        </tr>
        <tr>
            <td colspan="5">Chênh lệch trọng lượng ca sản xuất (kg): </td>
        </tr>
        <tr>
            <td colspan="2" style="height:40px;padding-right:5px"><u><i>Người lập phiếu:</i></u> </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="2" style="height:40px;padding-right:5px"><u><i>Phê duyệt:</i></u> </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="2" style="height:40px;padding-right:5px"><u><i>Tổ trưởng sản xuất:</i></u> </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="2" style="height:40px;padding-right:5px"><u><i>Nhân viên KCS:</i></u> </td>
            <td colspan="3"></td>
        </tr>
    </table>
</div>
<div class="inline-block float-right" style="width:59%;" >
    <table class="width-full mb-5">
        <tr>
            <td>Số phiếu sản xuất: 025</td>
            <td>Số máy: </td>
            <td style="width:300px">Ngày lập phiếu: 01/06/2022</td>
        </tr>
        <tr>
            <td colspan="2">Mã công thức: F213 </td>
            <td style="width:300px">Ngày sản xuất: 20/05/2022</td>
        </tr>
        <tr>
            <td colspan="2">Số lượng bao: 25 bao/ 1 mẻ (Tổng: 500 bao) </td>
            <td style="width:300px">Ngày hoàn thành: ____/____/____</td>
        </tr>
        <tr>
            <td class="text-center bold" colspan="3">KIỂM SOÁT CHẤT LƯỢNG</td>
        </tr>
    </table>

    <table class="width-full kscl">
        <tr>
            <th rowspan="2">STT</th>
            <th rowspan="2">Mã mẻ</th>
            <th colspan="2">Màu sắc</th>
            <th colspan="3">Hệ số</th>
            <th colspan="2">Độ dẻo</th>
            <th colspan="2">Độ mịn</th>
            <th colspan="2">Độ cứng</th>
        </tr>
        <tr>
            <th class="w-40">Đạt</th>
            <th class="w-40">K.Đạt</th>
            <th style="width: 60px;">M</th>
            <th style="width: 60px;">K</th>
            <th style="width: 60px;">KU</th>
            <th class="w-40">Đạt</th>
            <th class="w-40">K.Đạt</th>
            <th class="w-40">Đạt</th>
            <th class="w-40">K.Đạt</th>
            <th class="w-40">Đạt</th>
            <th class="w-40">K.Đạt</th>
        </tr>
        @for ($i = 1; $i <= 17; $i++)
            <tr>
                <td class="text-center bold">{{ $i }}</td>
                <td class="text-center">22041636B</td>
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
</div>
