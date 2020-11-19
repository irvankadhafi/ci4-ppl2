<?php


namespace App\Controllers;


use App\Models\MahasiswaModel;
use CodeIgniter\Database\Database;
use CodeIgniter\View\Table;

class LatihanController extends BaseController
{
    public function getLatihanSatu()
    {
        $data = [
            'nama' => 'Irvan Kadhafi'
        ];
        return view('v_latihan1_display', $data);
    }
    public function getLatihanDua()
    {
        $table = new Table();
        $table->setHeading('No','Nama Lengkap', 'NIM', 'Kelas','Tempat Lahir','Tanggal Lahir');

        //Inisiasi 10 baris table kosong
        for($i=0;$i<10;$i++)
            $table->addRow($i+1,' ',' ',' ',' ',' ');

        $template = [
            'table_open'         => '<table border="1" cellpadding="4" cellspacing="0" style="margin: auto">',

            'thead_open'         => '<thead>',
            'thead_close'        => '</thead>',

            'heading_row_start'  => '<tr>',
            'heading_row_end'    => '</tr>',
            'heading_cell_start' => '<th>',
            'heading_cell_end'   => '</th>',

            'tfoot_open'         => '<tfoot>',
            'tfoot_close'        => '</tfoot>',

            'footing_row_start'  => '<tr>',
            'footing_row_end'    => '</tr>',
            'footing_cell_start' => '<td>',
            'footing_cell_end'   => '</td>',

            'tbody_open'         => '<tbody>',
            'tbody_close'        => '</tbody>',

            'row_start'          => '<tr>',
            'row_end'            => '</tr>',
            'cell_start'         => '<td>',
            'cell_end'           => '</td>',

            'row_alt_start'      => '<tr>',
            'row_alt_end'        => '</tr>',
            'cell_alt_start'     => '<td>',
            'cell_alt_end'       => '</td>',

            'table_close'        => '</table>'
        ];
        $table->setTemplate($template);
        $data = [
            'table' => $table->generate()
        ];
        return view('v_latihan2_display',$data);
//        echo $table->generate();
    }
}
