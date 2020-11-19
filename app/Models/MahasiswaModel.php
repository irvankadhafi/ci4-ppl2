<?php namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'NIM';
    public function getData()
    {
        $sql = 'SELECT * FROM '.$this->table;
        $query = $this->db->query($sql);
        $results = $query->getResult();
        return $results;
    }
    public function totalData($kunci)
    {
        $sql = "SELECT * FROM ".$this->table." WHERE NM_MHS LIKE '%$kunci%'";
        $query = $this->db->query($sql)->getResult();
        return count($query);
    }

    public function simpanData($data) //Insert or Update
    {
        $nim = $data['NIM'];
        $nama = $data['NM_MHS'];
        $tel = $data['TEL'];
        $tal = $data['TAL'];
        $kelas = $data['KELAS'];

        $this->db->query("INSERT INTO mahasiswa(NIM, NM_MHS, TEL, TAL, KELAS) VALUES ('$nim', '$nama', '$tel', '$tal', '$kelas') ON DUPLICATE KEY UPDATE  NM_MHS='$nama', TEL='$tel', TAL='$tal', KELAS='$kelas'");
    }
    public function deleteData($data)
    {
        $nim = $data;
        $this->db->query("DELETE FROM mahasiswa WHERE NIM ='$nim'");
    }

    public function pencarianData($kunci)
    {
        $sql = "SELECT * FROM ".$this->table." WHERE NM_MHS LIKE '%$kunci%'";
        $query = $this->db->query($sql);
        $results = $query->getResult('array');
        return $results;
    }

    public function detailData($kunci)
    {
        $sql = "SELECT * FROM ".$this->table." WHERE NIM='$kunci'";
        $query = $this->db->query($sql);
        $results = $query->getResult();
        return $results;
    }

    public function paging($kunci,$mulai,$btsHalaman)
    {
        $sql = "SELECT * FROM ".$this->table." WHERE NM_MHS LIKE '%$kunci%' LIMIT $mulai, $btsHalaman";
        $query = $this->db->query($sql);
        $results = $query->getResult('array');
        return $results;
    }

}
