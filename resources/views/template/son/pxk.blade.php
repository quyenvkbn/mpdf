<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
            font-size: 13px;
        }
        table{
            border-collapse: collapse;
            border: 1px solid black;
        }
        th,
        td {
            padding:2px;
            border: 1px solid black;
        }
        p{
            margin: 0px;
        }
        .float-left {
            float: left;
        }
        .float-right {
            float: right;
        }
        .inline-block {
            display: inline-block;
        }
        .clear{
            clear: both;
        }
        .bold{
            font-weight: bold;
        }
        .gainsboro{
            background: gainsboro;
        }
        .text-center{
            text-align: center
        }
        .text-right{
            text-align: right
        }
        .width-full{
            width: 100%;
        }
        .mb-5{
            margin-bottom: 5px;
        }
        .mb-2{
            margin-bottom: 2px;
        }
        .mb-10{
            margin-bottom: 10px;
        }
        .w-40{
            width: 40px;
        }
        .w-60{
            width: 60px;
        }
        .page-break {
            page-break-after: always;
        }
        .lh-20{
            line-height: 20px;
        }

        .logo{
            width: 70px;
            height: 70px;
            background: url("data:image/png;base64,{{$logo}}");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

        @page {
            size: auto;
            footer: FooterPXS;
        }
    </style>
    <body style="padding-left:50px;">
        <div class="width-full mb-10">
            <table class="width-full mb-10">
                <tr>
                    <td rowspan="2" style="width:110px;" class="logo"></td>
                    <td rowspan="2" class="bold text-center" style="font-size:16px;">PHIẾU XUẤT KHO VẬT TƯ/ NHẬP<br>KHO TP - BTP</td>
                    <td colspan="2" class="text-center bold" style="height:35px;">Mã số : BMT-85-01-04</td>
                </tr>
                <tr>
                    <td class="text-center bold" style="width:150px;height:35px;">Ngày BH: 05/2018</td>
                    <td class="text-center bold" style="width:150px;height:35px;">Lần BH/SD:01/00</td>
                </tr>
            </table>
            <strong><u>I. THÔNG TIN CHUNG</u></strong>
            <table class="width-full mb-10">
                <tr>
                    <td style="width:140px;">Tên Sản Phẩm</td>
                    <td></td>
                    <td style="width:150px;">Ngày sản xuất:</td>
                    <td style="width:150px;" class="bold">28/05/22</td>
                </tr>
                <tr>
                    <td>Mã Sản Phẩm:</td>
                    <td></td>
                    <td>Ngày xuất kho:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Mã Mẻ:</td>
                    <td class="bold">DB0575</td>
                    <td>Khối Lượng(Kg):</td>
                    <td class="text-right bold">200.00</td>
                </tr>
            </table>

            <strong><u>II. XUẤT KHO NGUYÊN LIỆU SẢN XUẤT</u></strong>
            <table class="width-full">
                <tr>
                    <th style="width:60px;">STT</th>
                    <th>Mã N.Liệu</th>
                    <th>Số Lượng<br>(Kg)</th>
                    <th>Thực Xuất</th>
                    <th style="width:224px;">Ghi chú</th>
                </tr>
                @for ($i = 1; $i < 18; $i++)
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endfor
                <tr>
                    <td colspan="2" class="bold text-center" style="height:30px;">Tổng</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table class="width-full mb-10" style="border-top:none;">
                <tr>
                    <td style="border-top:0px;width:33.33%" class="bold text-center">Công Nhân chạy máy</td>
                    <td style="border-top:0px;width:33.33%" class="bold text-center">Thủ Kho Nguyên Liệu</td>
                    <td style="border-top:0px;width:210px" class="bold text-center">Tổ Trưởng chạy máy</td>
                </tr>
                <tr>
                    <td style="height:50px;"></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <strong><u>III. XUẤT KHO BAO BÌ:</u></strong>
            <table class="width-full">
                <tr>
                    <th>STT</th>
                    <th>MÃ BAO<br>BÌ</th>
                    <th style="width:200px;">TÊN BAO BÌ</th>
                    <th>SỐ LƯỢNG<br>THÙNG LỚN</th>
                    <th>THỰC<br>XUẤT</th>
                    <th style="width:200px;">GHI CHÚ</th>
                </tr>
                @for ($i = 1; $i < 3; $i++)
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endfor
            </table>
            <table class="width-full mb-10" style="border-top:none;">
                <tr>
                    <td style="border-top:0px;width:33.33%" class="bold text-center">Tổ Trưởng In Nhãn</td>
                    <td style="border-top:0px;width:33.33%" class="bold text-center">Thủ Kho Nguyên Liệu</td>
                    <td style="border-top:0px;width:33.33%" class="bold text-center">Tổ Trưởng Đóng Thùng</td>
                </tr>
                <tr>
                    <td style="height:50px;"></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <strong><u>IV. NHẬP KHO THÀNH PHẨM</u></strong>
            <table class="width-full mb-5">
                <tr>
                    <th>STT</th>
                    <th style="width:200px;">TÊN BAO BÌ</th>
                    <th>QUY<br>CÁCH</th>
                    <th>YÊU CẦU</th>
                    <th>THỰC<br>NHẬP</th>
                    <th>NHẬP KHO</th>
                    <th>XÁC NHẬN</th>
                    <th>GHI CHÚ</th>
                </tr>
                @for ($i = 1; $i < 3; $i++)
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>KHO THÀNH PHẨM</td>
                        <td></td>
                    </tr>
                @endfor
            </table>

            <div style="page-break-inside: avoid;">
                <table class="width-full mb-5">
                    <tr>
                        <td style="width:50%" class="bold text-center">NGƯỜI GIAO</td>
                        <td style="width:50%" class="bold text-center">THỦ KHO TP/BTP</td>
                    </tr>
                    <tr>
                        <td style="height:50px;"></td>
                        <td></td>
                    </tr>
                </table>

                <table class="width-full mb-5">
                    <tr>
                        <td style="width:50%" class="bold text-center">PHÊ DUYỆT</td>
                        <td style="width:50%" class="bold text-center">NGƯỜI LẬP PHIẾU</td>
                    </tr>
                    <tr>
                        <td style="height:50px;"></td>
                        <td></td>
                    </tr>
                </table>
            </div>

            <htmlpagefooter name="FooterPXS" style="display: none">
                <div class="text-right bold" style="padding-bottom:25px;color:gray"><i>{DATE d/m/Y H:i:s A} &nbsp; Trang {PAGENO} / {nbpg}</i></div>
            </htmlpagefooter>
        </div>
    </body>
</html>