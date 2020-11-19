<?php
namespace App\Controllers;

use App\Models\MahasiswaModel;
use CodeIgniter\View\Table;

class MahasiswaController extends BaseController
{
    public function __construct()
    {
        $this->mhsModel = new MahasiswaModel();
    }

    public function homeMahasiswa()
    {
        return view('v_home');
    }
    public function listMahasiswa()
    {
        $getPage = $this->request->getVar('halaman');
        $jlhTampil = 3;
        $page = isset($getPage)? (int)$getPage:1;
        $mulai = ($page>1) ? ($page * $jlhTampil) - $jlhTampil : 0;
        $kunci ="irvan";
        $total = $this->mhsModel->totalData($kunci);

        $data = [
            'title' => 'Tugas Nomor 3',
            'mahasiswa' => $this->mhsModel->paging($kunci,$mulai,$jlhTampil),
            'pager' => ceil($total/$jlhTampil)
        ];
        return view('v_mahasiswa_display',$data);
    }

    public function cariMahasiswa()
    {
        $pager = \Config\Services::pager();
        $session = session();
        $kunci = $this->request->getVar('cari');
        $mahasiswa = $this->mhsModel->pencarianData($kunci);
        $data = [
            'title' => 'Tugas Nomor 3',
            'mahasiswa' => $this->mhsModel->pencarianData($kunci),
        ];
        return view('v_mahasiswa_search',$data);
    }

    public function createMahasiswa()
    {
        return view('v_mahasiswa_input');
    }

    public function insertorUpdateMahasiswa()
    {
        $data =[
          'NIM'=>$this->request->getPost('nim'),
          'NM_MHS'=>$this->request->getPost('nama'),
          'TEL'=>$this->request->getPost('tempat_lahir'),
          'TAL'=>$this->request->getPost('tgl_lahir'),
          'KELAS' =>$this->request->getPost('kelas')
        ];
        $this->mhsModel->simpanData($data);
        return redirect()->to(base_url('/mahasiswa') );
    }

    public function detailMahasiswa($seg1 = false)
    {
        $kunci = $seg1;
        $data = [
            'title' => 'Tugas Nomor 3',
            'mahasiswa' => $this->mhsModel->detailData($kunci),
        ];
        return view('v_mahasiswa_detail',$data);
    }

    public function deleteMahasiswa($seg1 = false)
    {
        $this->mhsModel->deleteData($seg1);
        return redirect()->to(base_url('/mahasiswa') );
    }

    public function editMahasiswa($seg1 = false)
    {
        $data = [
            'title' => 'Edit Mahasiswa',
            'mahasiswa' => $this->mhsModel->detailData($seg1),
        ];
        return view('v_mahasiswa_edit',$data);
    }
}
