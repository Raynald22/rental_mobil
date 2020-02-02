
<?php
class Laporanpdf extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('fpdf');
    }

    function index()
    {
        $pdf = new PDF('l', 'mm', 'A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string
        $pdf->Cell(190, 7, 'Laporan Rental Mobil', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(20, 6, 'ID', 1, 0);
        $pdf->Cell(20, 6, 'ID ORDER', 1, 0);
        $pdf->Cell(20, 6, 'ID MOBIL', 1, 0);
        $pdf->Cell(25, 6, 'NAMA MOBIL', 1, 0);
        $pdf->Cell(27, 6, 'JUMLAH HARI', 1, 0);
        $pdf->Cell(25, 6, 'SUBTOTAL', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $pesanan = $this->db->get('pesanan')->result();
        foreach ($pesanan as $row) {
            $pdf->Cell(20, 6, $row->id, 1, 0);
            $pdf->Cell(20, 6, $row->id_order, 1, 0);
            $pdf->Cell(20, 6, $row->id_mobil, 1, 0);
            $pdf->Cell(25, 6, $row->nama, 1, 0);
            $pdf->Cell(27, 6, $row->jumlah, 1, 0);
            $pdf->Cell(25, 6, $row->harga, 1, 1);
        }
        $pdf->Output();
    }
}
