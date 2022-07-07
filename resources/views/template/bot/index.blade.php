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
        .padding-4-2{
            padding:4px 2px;
        }
        .kscl td, .kscl th{
            height: 30px;
        }
        .kscl tr:nth-child(even){
            background: gainsboro;
        }
        .kscl tr:nth-child(1), .kscl tr:nth-child(2){
            background: white;
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
        .ksqt td, .ksqt th{
            height: 30px;
        }
        .lh-20{
            line-height: 20px;
        }
    </style>

    <body style="padding-left:50px;">
        <div class="width-full">
            @include('template.bot.vt')
            <div class="page-break"></div>
            @include('template.bot.vt_kh')
            <div class="page-break"></div>
            @include('template.bot.ksqt')
            <div class="page-break"></div>
            @include('template.bot.pxvt_nktp')
        </div>
    </body>

</html>
