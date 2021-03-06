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
                    <td rowspan="2" class="bold text-center" style="font-size:16px;">PHI???U XU???T KHO V???T T??/ NH???P<br>KHO TP - BTP</td>
                    <td colspan="2" class="text-center bold" style="height:35px;">M?? s??? : BMT-85-01-04</td>
                </tr>
                <tr>
                    <td class="text-center bold" style="width:150px;height:35px;">Ng??y BH: 05/2018</td>
                    <td class="text-center bold" style="width:150px;height:35px;">L???n BH/SD:01/00</td>
                </tr>
            </table>
            <strong><u>I. TH??NG TIN CHUNG</u></strong>
            <table class="width-full mb-10">
                <tr>
                    <td style="width:140px;">T??n S???n Ph???m</td>
                    <td></td>
                    <td style="width:150px;">Ng??y s???n xu???t:</td>
                    <td style="width:150px;" class="bold">28/05/22</td>
                </tr>
                <tr>
                    <td>M?? S???n Ph???m:</td>
                    <td></td>
                    <td>Ng??y xu???t kho:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>M?? M???:</td>
                    <td class="bold">DB0575</td>
                    <td>Kh???i L?????ng(Kg):</td>
                    <td class="text-right bold">200.00</td>
                </tr>
            </table>

            <strong><u>II. XU???T KHO NGUY??N LI???U S???N XU???T</u></strong>
            <table class="width-full">
                <tr>
                    <th style="width:60px;">STT</th>
                    <th>M?? N.Li???u</th>
                    <th>S??? L?????ng<br>(Kg)</th>
                    <th>Th???c Xu???t</th>
                    <th style="width:224px;">Ghi ch??</th>
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
                    <td colspan="2" class="bold text-center" style="height:30px;">T???ng</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table class="width-full mb-10" style="border-top:none;">
                <tr>
                    <td style="border-top:0px;width:33.33%" class="bold text-center">C??ng Nh??n ch???y m??y</td>
                    <td style="border-top:0px;width:33.33%" class="bold text-center">Th??? Kho Nguy??n Li???u</td>
                    <td style="border-top:0px;width:210px" class="bold text-center">T??? Tr?????ng ch???y m??y</td>
                </tr>
                <tr>
                    <td style="height:50px;"></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <strong><u>III. XU???T KHO BAO B??:</u></strong>
            <table class="width-full">
                <tr>
                    <th>STT</th>
                    <th>M?? BAO<br>B??</th>
                    <th style="width:200px;">T??N BAO B??</th>
                    <th>S??? L?????NG<br>TH??NG L???N</th>
                    <th>TH???C<br>XU???T</th>
                    <th style="width:200px;">GHI CH??</th>
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
                    <td style="border-top:0px;width:33.33%" class="bold text-center">T??? Tr?????ng In Nh??n</td>
                    <td style="border-top:0px;width:33.33%" class="bold text-center">Th??? Kho Nguy??n Li???u</td>
                    <td style="border-top:0px;width:33.33%" class="bold text-center">T??? Tr?????ng ????ng Th??ng</td>
                </tr>
                <tr>
                    <td style="height:50px;"></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <strong><u>IV. NH???P KHO TH??NH PH???M</u></strong>
            <table class="width-full mb-5">
                <tr>
                    <th>STT</th>
                    <th style="width:200px;">T??N BAO B??</th>
                    <th>QUY<br>C??CH</th>
                    <th>Y??U C???U</th>
                    <th>TH???C<br>NH???P</th>
                    <th>NH???P KHO</th>
                    <th>X??C NH???N</th>
                    <th>GHI CH??</th>
                </tr>
                @for ($i = 1; $i < 3; $i++)
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>KHO TH??NH PH???M</td>
                        <td></td>
                    </tr>
                @endfor
            </table>

            <div style="page-break-inside: avoid;">
                <table class="width-full mb-5">
                    <tr>
                        <td style="width:50%" class="bold text-center">NG?????I GIAO</td>
                        <td style="width:50%" class="bold text-center">TH??? KHO TP/BTP</td>
                    </tr>
                    <tr>
                        <td style="height:50px;"></td>
                        <td></td>
                    </tr>
                </table>

                <table class="width-full mb-5">
                    <tr>
                        <td style="width:50%" class="bold text-center">PH?? DUY???T</td>
                        <td style="width:50%" class="bold text-center">NG?????I L???P PHI???U</td>
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