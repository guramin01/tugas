<?php  defined('BASEPATH') OR exit ('No direct sscript acces is denied');

class Barang_model extends CI_Model{
	//mendefinisikan variabel tabell secara private
	private $_table = "tabel_barang";
	//mendefinisikan bariabel data barang secara public

	public $kode_barang;
	public $nama_barang;
	public $deskripsi_barang;
	public $harga_barang;
	public $stok_barang;

	//membuat fungsi rules balidas inputan data
	public function rules()

	{
		return[
			['field' => 'nama_barang',
			'label' => 'Nama Barang',
			'rules' => 'required'],

			['field' => 'deskripsi_barang',
			'label' => 'Deskripsi Barang',
			'rules' => 'required'],

			['field' => 'harga_barang',
			'label' => 'Harga Barang',
			'rules' => 'numeric'],

			['field' => 'stok_barang',
			'label' => 'Stok Barang',
			'rules' => 'numeric']

		];
	}

	//mengambil  semua data dari database
	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}
	//mengambill data dari data base perbaris
	public function getById($id){
		return $this->db->get_where($this->_table, ["kode_barang" => $id])->row();
	}
	// adalah insert data ke database
	public function save(){
		$post = $this->input->post();
		$this->kode_barang = uniqid();
		$this->nama_barang = $post["nama_barang"];
		$this->deskripsi_barang = $post["deskripsi_barang"];
		$this->harga_barang = $post["harga_barang"];
		$this->stok_barang = $post["stok_barang"];
		$this->db->insert($this->_table, $this);

	}
	public function update(){
		$post = $this->input->post();
		$this->kode_barang = $post["id"];
		$this->nama_barang = $post["nama_barang"];
		$this->deskripsi_barang = $post["deskripsi_barang"];
		$this->harga_barang = $post["harga_barang"];
		$this->stok_barang = $post["stok_barang"];
		$this->db->update($this->_table, $this, array('kode_barang' => $post['id']));
	}


}

 ?>