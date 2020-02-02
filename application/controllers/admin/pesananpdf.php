
<?php
class Pesananpdf extends CI_Controller
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
        //Image file name
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string
        $pdf->Cell(190, 7, 'Laporan Rental Mobil', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(20, 6, 'ID', 1, 0);
        $pdf->Cell(20, 6, 'NAMA', 1, 0);
        $pdf->Cell(30, 6, 'ALAMAT', 1, 0);
        $pdf->Cell(40, 6, 'TANGGAL PINJAM', 1, 0);
        $pdf->Cell(40, 6, 'BATAS KEMBALI', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $order = $this->db->get('order')->result();
        foreach ($order as $row) {
            $pdf->Cell(20, 6, $row->id, 1, 0);
            $pdf->Cell(20, 6, $row->nama, 1, 0);
            $pdf->Cell(30, 6, $row->alamat, 1, 0);
            $pdf->Cell(40, 6, $row->tgl_pesan, 1, 0);
            $pdf->Cell(40, 6, $row->batas_bayar, 1, 1);
        }
        $pdf->Output();
    }
}
