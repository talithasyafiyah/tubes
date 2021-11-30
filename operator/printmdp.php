<?php

require_once "./mpdf/vendor/autoload.php";
require '../includes/koneksi.php';
$mpdf = new \Mpdf\Mpdf();
$query = mysqli_query($koneksi, "SELECT * FROM mdpop");

	$html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Calibri;
        }
    </style>
    </head>
    <body>
	<div class="container">
        <table align="center">
            <tr>
                <th>
                    <h3>UD. SATU 7AN</h3>
                    <p>Jalan Dr. T. Mansur No.9, Padang Bulan</p>
                    <p>Kec. Medan Baru, Kota Medan, Sumatera Utara 20222</p>
                    <p>Telp: 021-566-777 Wa: 0812-6015-2610</p>
                    <p>satu7an@gmail.com</p>
                </th>
            </tr>
        </table>
        <hr size="2" style="color: #000;">

        <h4 align="center">LAPORAN STOCK</h4>
        <table border="1" align="center" cellspacing="0" cellpadding="4">
                <tr>
                    <th>No</th>
                    <th>Id Barang</th>
                    <th>Description</th>
                    <th>Company</th>
                    <th>Stock</th>
                    <th>Price</th>
                </tr>';

            foreach ($query as $row) {
            $html .= '
            <tr>
                <td>'.$row["no"].'</td>
                <td>'.$row["id_barang"].'</td>
                <td>'.$row["description"].'</td>
                <td>'.$row["company"].'</td>
                <td>'.$row["stock"].'</td>
                <td>'.$row["price"].'</td>
            </tr>';
        }

    $html .=  '</table>
    </body>
    </html>';

        

	
	
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	$mpdf->WriteHTML($html);
	$mpdf->Output();
?>