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
                    <td rowspan="2" class="bold text-center" style="font-size:16px;">PHI???U S???N XU???T S??N/KCS</td>
                    <td colspan="2" class="text-center bold" style="height:35px;">M?? S??? : BMT-85-01-01</td>
                </tr>
                <tr>
                    <td class="text-center bold" style="width:150px;height:35px;">Ng??y BH: 05/2019</td>
                    <td class="text-center bold" style="width:150px;height:35px;">L???n Bh/SD:01/00</td>
                </tr>
            </table>
            <strong><u>I. TH??NG TIN CHUNG</u></strong>
            <table class="width-full">
                <tr>
                    <td>T??n S???n Ph???m</td>
                    <td colspan="2"></td>
                    <td style="width:115px;"><strong>S??? m??y:</strong></td>
                    <td>S??? Phi???u:</td>
                    <td style="width:75px;" class="text-right"><strong>0037</strong></td>
                    <td rowspan="1" class="text-center">????n H??ng/PO</td>
                </tr>
                <tr>
                    <td>M?? S???n Ph???m:</td>
                    <td class="bold">A5B</td>
                    <td>C??ng Th???c:</td>
                    <td class="text-right"><strong>F801</strong></td>
                    <td>Ng??y L???p Phi???u:</td>
                    <td class="text-right"><strong>27/05/22</strong></td>
                    <td rowspan="2"></td>
                </tr>
                <tr>
                    <td>M?? M???:</td>
                    <td class="bold">DB0575</td>
                    <td>Ng??y S???n Xu???t:</td>
                    <td class="text-right bold">28/05/22</td>
                    <td>Kh???i L?????ng(Kg)</td>
                    <td class="text-right"><strong>200.00</strong></td>
                </tr>
            </table>
            <h4 class="text-center">TH???I GIAN S???N XU???T</h4>
            <?php 
                $qt = [
                    "S???N XU???T BASE",
                    "KCS BASE",
                    "PHA M??U",
                    "KCS M??U",
                    "????NG G??I",
                    "KCS ????NG G??I",
                ];
            ?>
            <table class="width-full mb-10">
                <tr>
                    <th>STT</th>
                    <th>QU?? TR??NH</th>
                    <th>Th???i ??i???m b???t ?????u</th>
                    <th>Th???i ??i???m k???t th??c</th>
                    <th>T/gian<br>th???c hi???n</th>
                    <th>Ng?????i th???c hi???n <br> & x??c nh???n</th>
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
                        "description" => 'M?? t??? b?????c 1',
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

            <strong><u>II. S???N XU???T BASE</u></strong>
            <table class="width-full mb-10">
                <tr>
                    <th rowspan="2">STT</th>
                    <th rowspan="2">M?? N.Li???u</th>
                    <th rowspan="2">T??? l??? %</th>
                    <th colspan="2">KH???I L?????NG N???P LI???U</th>
                    <th rowspan="2">THEO D??I<br>N???P LI???U</th>
                    <th rowspan="2">GHI CH??</th>
                </tr>
                <tr>
                    <th>Y??U C???U</th>
                    <th>TH???C T???</th>
                </tr>
                @foreach ($steps as $key => $step)
                    <tr>
                        <td colspan="7"><strong><i>B?????c {{ $key + 1 }}:</i></strong>   {{ $step['description'] }}</td>
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
                    <td colspan="2" class="bold text-center">T???ng</td>
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
                        <td colspan="4" class="bold">??I???U CH???NH</td>
                    </tr>
                    <tr>
                        <td>Nguy??n li???u ??/ch???nh</td>
                        <td style="width:200px;"></td>
                        <td style="width:200px;"></td>
                        <td style="width:200px;"></td>
                    </tr>
                    <tr>
                        <td style="border-bottom:0px;">S??? l?????ng ??/ch???nh(Kg)</td>
                        <td style="border-bottom:0px;"></td>
                        <td style="border-bottom:0px;"></td>
                        <td style="border-bottom:0px;"></td>
                    </tr>
                </table>
                <table class="width-full mb-10">
                    <tr>
                        <th style="width:33.33%">T???NG KH???I L?????NG N???P V??O (Kg)</th>
                        <th style="width:33.33%">T???NG KH???I L?????NG C??N ???????C (Kg)</th>
                        <th style="width:33.33%">HAO H???T</th>
                    </tr>
                    <tr>
                        <td style="height:21px;"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-center bold">C??ng Nh??n ch???y m??y 1</td>
                        <td class="text-center bold">C??ng Nh??n ch???y m??y 2</td>
                        <td class="text-center bold">T??? Tr?????ng ch???y m??y</td>
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
                    "T??? tr???ng (g/ml) 25oC",
                    "Strength",
                    "pll(23oC)",
                    "Ngo???i quan",
                    "Ki???m tra b???t",
                    "H??m l?????ng r???n (%)",
                    "????? ph??? (1 l???n 100 um)",
                    "????? nh??? KU, 25oC",
                    "????? m???n um",
                    "????? b??ng, g??c 60",
                    "dE FMCII",
                    "dE CMC",
                    "Ch??? Rub-out (CMC dE)"
                ]
            ?>
            <strong><u>III. KI???M SO??T CH???T L?????NG BASE</u></strong>
            <table class="width-full mb-10">
                <tr>
                    <th rowspan="2">STT</th>
                    <th rowspan="2">Ch??? ti??u ki???m tra</th>
                    <th rowspan="2">Ti??u Chu???n</th>
                    <th rowspan="2">K???t Qu???</th>
                    <th colspan="2">K???T LU???N</th>
                </tr>
                <tr>
                    <td class="bold text-center">?????T</td>
                    <td class="bold text-center">KH??NG ?????T</td>
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
                    <th colspan="3" style="height:50px;" valign="top">Nh??n Vi??n KCS</th>
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
            <strong><u>IV. Y??U C???U ????NG TH??NG</u></strong>
            <table class="width-full mb-5">
                <tr>
                    <th>STT</th>
                    <th>M??<br>BAO B??</th>
                    <th>T??N BAO B??</th>
                    <th>QUY<br>C??CH</th>
                    <th>Quy ?????i<br>KL(Kg)</th>
                    <th>S??? L?????NG<br>TH??NG/L??</th>
                    <th>NH???P KHO</th>
                    <th>GHI CH??</th>
                </tr>
                @foreach ($require as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item['ma_bao_bi'] }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>KHO TH??NH PH???M</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
            <div style="page-break-inside: avoid;">
                <strong><u>V. KI???M TRA ????NG TH??NG</u></strong>
                <table class="width-full">
                    <tr>
                        <th>STT</th>
                        <th>QUY C??CH</th>
                        <th>TR???NG L?????NG<br>TH???C T???</th>
                        <th>KCS K??</th>
                        <th>S??? L?????NG ????NG<br>???????C</th>
                        <th>T??? TR?????NG<br>????NG TH??NG</th>
                        <th>HAO H???T<br>(Kg)</th>
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
                        <td style="border-top:0px;width:33.33%" class="bold text-center">C??ng Nh??n ????ng Th??ng 1</td>
                        <td style="border-top:0px;width:33.33%" class="bold text-center">C??ng Nh??n ????ng Th??ng 2</td>
                        <td style="border-top:0px;width:33.33%" class="bold text-center">T??? Tr?????ng ????ng Th??ng</td>
                    </tr>
                    <tr>
                        <td style="height:50px;"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="bold text-center">DUY???T</td>
                        <td class="bold text-center">NG?????I L???P PHI???U</td>
                        <td class="bold text-center">TR?????NG CA</td>
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