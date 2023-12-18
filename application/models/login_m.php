<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class login_m extends CI_Model {

    public $data;

    public function __construct() {
        parent::__construct();
    }

    public function getMahasiswa(){ 

        $result = $this->db->get('mahasiswa');
        return $result;

    }

    public function insertMahasiswa(){
        $insert = array(
            'nim' => $this -> input -> post('nim'),
            'nama' => $this -> input -> post('nama'),
            'jurusan' => $this -> input -> post('jurusan'),
            'alamat' => $this -> input -> post('alamat'),
            'tlp' => $this -> input -> post('tlp')
        ); 
        $result = $this->db->insert('mahasiswa', $insert);
        return $result;
    }

    public function getDetailMahasiswa($id){ 
        $this -> db -> where('id',$id);
        $result = $this->db->get('mahasiswa')->result_array();
        return $result[0];
    }

    public function editMahasiswa(){
        $edit = array(
            'nim' => $this -> input -> post('nim'),
            'nama' => $this -> input -> post('nama'),
            'jurusan' => $this -> input -> post('jurusan'),
            'alamat' => $this -> input -> post('alamat'),
            'tlp' => $this -> input -> post('tlp')
        );
        $this -> db -> where('id', $this->input->post('id'));
        $result = $this->db->update('mahasiswa', $edit);
        return $result;
    }

    public function deleteMahasiswa($id){
        $this -> db -> where ('id',$id);
        $result = $this->db->delete('mahasiswa');
        return $result;
    }

}

/* End of file M_mahasiswa.php */
