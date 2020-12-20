<?php 
    //============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com Lth
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */


session_start();
// Include the main TCPDF library (search for installation path).
require_once('./TCPDF-main/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 001');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetdefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
// $pdf->AddPage();
$pdf->AddPage('L', 'A4');
// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// value in bill
$name =  $_SESSION['LoginID'];

// Set some content to print
$html = <<<EOD
<table>
        <tr>
            <th>
                <img src="./evn.jpg" alt="">
            </th>
            <th><b style="font-size: 16px;">HÓA ĐƠN GTGT(TIỀN ĐIỆN)</b><br/>
                <span style="font-size: 13px;">Bản thể hiện của hóa đơn điện tử</span><br/>
                <span style="font-size: 13px;">Kỳ: x  Từ ngày:xx/xx/xxxx Tới ngày: xx/xx/xxxx</span>
            </th>
            <th><span style="font-size: 13px;">&nbsp;&nbsp;&nbsp;Mẫu số: XXXXX<br/> 
                </span>
                <span style="font-size: 13px;">&nbsp;&nbsp;Ký hiệu: XXXXX<br/>
                </span>
                <span style="font-size: 13px;">&nbsp;&nbsp;Số: XXXXX<br/>
                </span>
                <span style="font-size: 13px;">&nbsp;&nbsp;In Hóa Đơn: XXXX<br/>
                </span>
            </th>
        </tr>
    </table>
    <br/>
    <table style="font-size: 13px;">
        <tr>
            <th>Công ty điện lực Hà Nội - Nam Từ Liêm</th>
        </tr>
        <tr>
            <th>Địa Chỉ: Số x, Đường x, Phường X, TP Hà Nội</th>
        </tr>
        <tr>
            <th>Điện thoại: 09090909090 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            MST:0000000000-0000 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ĐT sửa chữa: xxxxxxxxxx
            </th>
        </tr>
        <tr>
            <th>Tên khách hàng: $name</th>
        </tr>
        <tr>
            <th>Địa Chỉ: Số x, Đường x, Phường X, TP Hà Nội</th>
        </tr>
        <tr>
            <th>Điện thoại: 09090909090 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            MST:0000000000-0000 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Số công tơ: xxxxxxxxxx &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Số hộ: xx
            </th>
        </tr>
        <tr>
            <th>Mã KH: KH1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Mã tính toán &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Mã NN:xxxxx &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Mã tổ: XXX
            </th>
        </tr>
        <tr>
            <th>Mã trạm: xxxx &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Cấp ĐA: 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Số GCS: xxx &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            P GCS: 21
            </th>
        </tr>
        <tr>
            <th>Mã giá: xxxx</th>
        </tr>
    </table>
    <table border="1" style="font-size: 13px;">
        <tr>
            <th>Bộ CS</th>
            <th>Chỉ số mới</th>
            <th>Chỉ số cũ</th>
            <th>HS nhân</th>
            <th>ĐN tiêu thụ</th>
            <th>ĐN trực tiếp</th>
            <th>ĐN trừ phụ</th>
            <th>ĐN thực tế</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
        <tr>
            <th>KT</th>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
        </tr>
        <tr>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
            <th>xx</th>
        </tr>
        <tr>
            <th colspan="7">Công</th>
            <th>444</th>
            <th></th>
            <th>444</th>
        </tr>
        <tr>
            <th colspan="7">Thuế xuất GTGT: 10%</th>
            <th colspan="2">Thuế GTGT</th>
            <th>111111</th>
        </tr>
        <tr>
            <th colspan="9">Tổng cộng tiền thanh toán:</th>
            <th>xxxxxxx</th>
        </tr>
        <tr>
            <th colspan="10">Số tiền viết bằng chữ</th>
         </tr>
         <tr>
            <th colspan="10" style="text-align: right;">Ngày đăng ký: xx/xx/xxxx <br/>
            Người đăng ký: Ông/Bà Chu Đức Anh
            </th>
         </tr>
    </table>
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>