<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    private $_table = "barang";

    public $KodeBarang;
    public $NamaBarang;
    public $DeskripsiBarang;
    public $hargaBarang;
    public $stokBarang;

//membuat fungsi rules untuk validasi data
    public function rules()
    {
        return [
            ['field' => 'NamaBarang',
            'label' => 'Nama Barang',
            'rules' => 'required'],

            ['field' => 'DeskripsiBarang',
            'label' => 'Deskripsi Barang',
            'rules' => 'required'],

            ['field' => 'HargaBarang',
            'label' => 'Harga Barang',
            'rules' => 'numeric'],
            
            ['field' => 'StokBarang',
            'label' => 'Stok Barang',
            'rules' => 'numeric']
        ];
    }

//mengambil semua data dari database
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["KodeBarang" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->KodeBarang = uniqid();
        $this->NamaBarang = $post["NamaBarang"];
        $this->DeskripsiBarang = $post["DeskripsiBarang"];
        $this->HargaBarang = $post["HargaBarang"];
        $this->StokBarang = $post["StokBarang"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->KodeBarang = $post["KodeBarang"];
        $this->NamaBarang = $post["NamaBarang"];
        $this->DeskripsiBarang = $post["DeskripsiBarang"];
        $this->HargaBarang = $post["HargaBarang"];
        $this->StokBarang = $post["StokBarang"];
        $this->db->update($this->_table, $this, array('KodeBarang' => $post['KodeBarang']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("KodeBarang" => $KodeBarang));
    }
}