<?php defined('BASEPATH') OR exit ('No direct script acces allowed');

class Product_model extends CI_Model
{	
	//mendifinisakn variabel tabel secara private
    private $_table = "barang";

    //mendifinisikan variabel data barang
    public $kodeBarang;
    public $namaBarang;
    public $deskripsiBarang;
    public $hargaBarang;
    public $stokBarang;


    //membuat fungsi rules untuk validasi inputan data
    public function rules()
    {
        return [
            ['field' => 'namaBarang',
            'label' => 'Nama Barang',
            'rules' => 'required'],

            ['field' => 'deskripsiBarang',
            'label' => 'Deskripsi Barang',
            'rules' => 'required'],
            
            ['field' => 'hargaBarang',
            'label' => 'Harga Barang',
            'rules' => 'numeric'],

            ['field' => 'stokBarang',
            'label' => 'Stok Barang',
            'rules' => 'numeric']
        ];
    }

    //mengambil semua data pada database
    //mysqli_query($con, "select * form barang );
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    //mengambil data pada satu baris
    //mysqli_query($con, "select * form barang where "+ $kodeBarang+ );
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kodeBarang" => $id])->row();
    }

    //mysqli_query($con, "insert into barang values('s','a','d')");
    public function save()
    {
        $post = $this->input->post();
        $this->kodeBarang = uniqid();
        $this->namaBarang = $post["namaBarang"];
        $this->hargaBarang = $post["hargaBarang"];
        $this->deskripsiBarang = $post["deskripsiBarang"];
        $this->stokBarang = $post["stokBarang"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kodeBarang = $post["id"];
        $this->namaBarang = $post["namaBarang"];
        $this->hargaBarang = $post["hargaBarang"];
        $this->deskripsiBarang = $post["deskripsiBarang"];
        $this->stokBarang = $post["stokBarang"];
        $this->db->update($this->_table, $this, array('kodeBarang' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kodeBarang" => $id));
    }
}