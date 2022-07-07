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
                    <td rowspan="2" class="bold text-center" style="font-size:16px;">PHIẾU SẢN XUẤT SƠN/KCS</td>
                    <td colspan="2" class="text-center bold" style="height:35px;">Mã Số : BMT-85-01-01</td>
                </tr>
                <tr>
                    <td class="text-center bold" style="width:150px;height:35px;">Ngày BH: 05/2019</td>
                    <td class="text-center bold" style="width:150px;height:35px;">Lần Bh/SD:01/00</td>
                </tr>
            </table>
            <strong><u>I. THÔNG TIN CHUNG</u></strong>
            <table class="width-full">
                <tr>
                    <td>Tên Sản Phẩm</td>
                    <td colspan="2"></td>
                    <td style="width:115px;"><strong>Số máy:</strong></td>
                    <td>Số Phiếu:</td>
                    <td style="width:75px;" class="text-right"><strong>0037</strong></td>
                    <td rowspan="1" class="text-center">Đơn Hàng/PO</td>
                </tr>
                <tr>
                    <td>Mã Sản Phẩm:</td>
                    <td class="bold">A5B</td>
                    <td>Công Thức:</td>
                    <td class="text-right"><strong>F801</strong></td>
                    <td>Ngày Lập Phiếu:</td>
                    <td class="text-right"><strong>27/05/22</strong></td>
                    <td rowspan="2"></td>
                </tr>
                <tr>
                    <td>Mã Mẻ:</td>
                    <td class="bold">DB0575</td>
                    <td>Ngày Sản Xuất:</td>
                    <td class="text-right bold">28/05/22</td>
                    <td>Khối Lượng(Kg)</td>
                    <td class="text-right"><strong>200.00</strong></td>
                </tr>
            </table>
            <h4 class="text-center">THỜI GIAN SẢN XUẤT</h4>
            <?php 
                $qt = [
                    "SẢN XUẤT BASE",
                    "KCS BASE",
                    "PHA MÀU",
                    "KCS MÀU",
                    "ĐÓNG GÓI",
                    "KCS ĐÓNG GÓI",
                ];
            ?>
            <table class="width-full mb-10">
                <tr>
                    <th>STT</th>
                    <th>QUÁ TRÌNH</th>
                    <th>Thời điểm bắt đầu</th>
                    <th>Thời điểm kết thúc</th>
                    <th>T/gian<br>thực hiện</th>
                    <th>Người thực hiện <br> & xác nhận</th>
                </tr>
                @foreach ($qt as $key => $item)
                    <tr>
                        <td class="text-center">{{ $key + 1 }}</td>
                        <td>{{ $item }}</td>
                        <td>_____h_____ _____/_____/_____</td>
                        <td>_____h_____ _____/_____/_____</td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
            <?php 
                $stt = 0;
                $steps = [
                    [
                        "description" => 'Mô tả bước 1',
                        "data" => [
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ]
                        ]
                        
                    ],
                    [
                        "description" => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s',
                        "data" => [
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ]
                        ]
                    ],
                    [
                        "description" => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                        "data" => [
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ],
                            [
                                "ma_nguyen_lieu" => 'ABC01',
                                "percent" => '5',
                                "require" => '10',
                            ]
                        ]
                    ],
                ];
            ?>

            <strong><u>II. SẢN XUẤT BASE</u></strong>
            <table class="width-full mb-10">
                <tr>
                    <th rowspan="2">STT</th>
                    <th rowspan="2">Mã N.Liệu</th>
                    <th rowspan="2">Tỉ lệ %</th>
                    <th colspan="2">KHỐI LƯỢNG NẠP LIỆU</th>
                    <th rowspan="2">THEO DÕI<br>NẠP LIỆU</th>
                    <th rowspan="2">GHI CHÚ</th>
                </tr>
                <tr>
                    <th>YÊU CẦU</th>
                    <th>THỰC TẾ</th>
                </tr>
                @foreach ($steps as $key => $step)
                    <tr>
                        <td colspan="7"><strong><i>Bước {{ $key + 1 }}:</i></strong>   {{ $step['description'] }}</td>
                    </tr>
                    @if ($step['data'])
                        @foreach ($step['data'] as $nl)
                            <tr>
                                <td class="text-center">{{ ++$stt }}</td>
                                <td>{{ $nl['ma_nguyen_lieu'] }}</td>
                                <td class="text-right">{{ $nl['percent'] }}</td>
                                <td class="text-right">{{ $nl['require'] }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach
                <tr>
                    <td colspan="2" class="bold text-center">Tổng</td>
                    <td class="bold text-right">100.00</td>
                    <td class="bold text-right">200.00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <div style="page-break-inside: avoid;">
                <table class="width-full" style="border-bottom:none;">
                    <tr>
                        <td colspan="4" class="bold">ĐIỀU CHỈNH</td>
                    </tr>
                    <tr>
                        <td>Nguyên liệu Đ/chỉnh</td>
                        <td style="width:200px;"></td>
                        <td style="width:200px;"></td>
                        <td style="width:200px;"></td>
                    </tr>
                    <tr>
                        <td style="border-bottom:0px;">Số lượng Đ/chỉnh(Kg)</td>
                        <td style="border-bottom:0px;"></td>
                        <td style="border-bottom:0px;"></td>
                        <td style="border-bottom:0px;"></td>
                    </tr>
                </table>
                <table class="width-full mb-10">
                    <tr>
                        <th style="width:33.33%">TỔNG KHỐI LƯỢNG NẠP VÀO (Kg)</th>
                        <th style="width:33.33%">TỔNG KHỐI LƯỢNG CÂN ĐƯỢC (Kg)</th>
                        <th style="width:33.33%">HAO HỤT</th>
                    </tr>
                    <tr>
                        <td style="height:21px;"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-center bold">Công Nhân chạy máy 1</td>
                        <td class="text-center bold">Công Nhân chạy máy 2</td>
                        <td class="text-center bold">Tổ Trưởng chạy máy</td>
                    </tr>
                    <tr>
                        <td style="height:45px;"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>

            <?php 
                $ctkt = [
                    "Tỉ trọng (g/ml) 25oC",
                    "Strength",
                    "pll(23oC)",
                    "Ngoại quan",
                    "Kiểm tra bọt",
                    "Hàm lượng rắn (%)",
                    "Độ phủ (1 lớn 100 um)",
                    "Độ nhớ KU, 25oC",
                    "Độ mịn um",
                    "Độ bóng, góc 60",
                    "dE FMCII",
                    "dE CMC",
                    "Chả Rub-out (CMC dE)"
                ]
            ?>
            <strong><u>III. KIỂM SOÁT CHẤT LƯỢNG BASE</u></strong>
            <table class="width-full mb-10">
                <tr>
                    <th rowspan="2">STT</th>
                    <th rowspan="2">Chỉ tiêu kiểm tra</th>
                    <th rowspan="2">Tiêu Chuẩn</th>
                    <th rowspan="2">Kết Quả</th>
                    <th colspan="2">KẾT LUẬN</th>
                </tr>
                <tr>
                    <td class="bold text-center">ĐẠT</td>
                    <td class="bold text-center">KHÔNG ĐẠT</td>
                </tr>
                @foreach ($ctkt as $key => $item)
                    <tr>
                        <td class="text-center">{{ $key + 1 }}</td>
                        <td>{{ $item }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
                <tr>
                    <th colspan="3" style="height:50px;" valign="top">Nhân Viên KCS</th>
                    <th colspan="3"></th>
                </tr>
            </table>
            <?php  
                $require = [
                    [
                        "ma_bao_bi" => "AKSO02",
                    ],
                    [
                        "ma_bao_bi" => "AKSO02",
                    ]
        ];
            ?>
            <strong><u>IV. YÊU CẦU ĐÓNG THÙNG</u></strong>
            <table class="width-full mb-5">
                <tr>
                    <th>STT</th>
                    <th>MÃ<br>BAO BÌ</th>
                    <th>TÊN BAO BÌ</th>
                    <th>QUY<br>CÁCH</th>
                    <th>Quy đổi<br>KL(Kg)</th>
                    <th>SỐ LƯỢNG<br>THÙNG/LÔ</th>
                    <th>NHẬP KHO</th>
                    <th>GHI CHÚ</th>
                </tr>
                @foreach ($require as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item['ma_bao_bi'] }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>KHO THÀNH PHẨM</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
            <div style="page-break-inside: avoid;">
                <strong><u>V. KIỂM TRA ĐÓNG THÙNG</u></strong>
                <table class="width-full">
                    <tr>
                        <th>STT</th>
                        <th>QUY CÁCH</th>
                        <th>TRỌNG LƯỢNG<br>THỰC TẾ</th>
                        <th>KCS KÝ</th>
                        <th>SỐ LƯỢNG ĐÓNG<br>ĐƯỢC</th>
                        <th>TỔ TRƯỞNG<br>ĐÓNG THÙNG</th>
                        <th>HAO HỤT<br>(Kg)</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td rowspan="4"></td>
                        <td></td>
                        <td rowspan="4"></td>
                        <td rowspan="4"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <table class="width-full mb-5" style="border-top:none;">
                    <tr>
                        <td style="border-top:0px;width:33.33%" class="bold text-center">Công Nhân Đóng Thùng 1</td>
                        <td style="border-top:0px;width:33.33%" class="bold text-center">Công Nhân Đóng Thùng 2</td>
                        <td style="border-top:0px;width:33.33%" class="bold text-center">Tổ Trưởng đóng Thùng</td>
                    </tr>
                    <tr>
                        <td style="height:50px;"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="bold text-center">DUYỆT</td>
                        <td class="bold text-center">NGƯỜI LẬP PHIẾU</td>
                        <td class="bold text-center">TRƯỞNG CA</td>
                    </tr>
                    <tr>
                        <td style="height:50px;"></td>
                        <td></td>
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