<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
	// mendifinisikan variable tabel secara private
    private $_table = "barang";

    // mendefinisikan variabel databarang csecara public
    public $KodeBarang;
    public $NamaBarang;
    public $DeskripsiBarang;
    public $HargaBarang;
    public $StokBarang;

    // membuat fungsi rules untuk validasi inputan data
    public function rules()
    {
        return [
            ['field' => 'NamaBarang',
            'label' => 'Nama Barang',
            'rules' => 'required'],

            ['field' => 'DeskripsiBarang',
            'label' => 'Deskripsi Barang',
            'rules' => 'numeric'],
            
            ['field' => 'HargaBarang',
            'label' => 'Harga Barang',
            'rules' => 'numeric']

            ['field' => 'StokBarang',
            'label' => 'Stok Barang',
            'rules' => 'numeric']
        ];
    }

    // mengambil semua data dari database	
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    // mengambil data dari database per baris
    // mysqli_query($con, "Select * from barang where"+ $kodeBarang)
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["KodeBarang" => $id])->row();
    }

    // mysqli_query($con, "insert into barang values('a', 'b', 'c', )");
    public function save()
    {
        $post = $this->input->post();
        $this->KodeBarang = uniqid();
        $this->NamaBarang = $post["namaBarang"];
        $this->DeskripsiBarang = $post["deskripsiBarang"];
        $this->HargaBarang = $post["hargaBarang"];
        $this->StokBarang = $post["stokBarang"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->KodeBarang = $post["id"];
        $this->NamaBarang = $post["namaBarang"];
        $this->DeskripsiBarang = $post["deskripsiBarang"];
        $this->HargaBarang = $post["hargaBarang"];
        $this->StokBarang = $post["stokBarang"];
        $this->db->update($this->_table, $this, array('kodeBarang' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}