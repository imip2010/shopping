<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
class Category extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//ambil data kategori
	public function get_kategoriByID($id){
		$this->db->select('*');
		$this->db->from('categories A');
        $this->db->join('products B', 'A.categoryID = B.categoryID', 'left');
        $this->db->where('categoryID',$id);
		$this->db->group_by('A.categoryName');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}
	
	public function get_subCategoryByID($id){
		$this->db->select('*');
		$this->db->from('sub_categories A');
    $this->db->where('categoryID',$id);
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
  }
    
  public function get_produk_ByCat($kategoriID){
		$this->db->select('*');
		$this->db->from('products A');
		$this->db->join('sub_categories B','A.subCategoryID = B.subCategoryID', 'left');
		$this->db->join('categories C', 'A.categoryID = C.categoryID', 'left');
		$this->db->join('members D', 'A.memberID = D.memberID','left');
		$this->db->join('shop S', 'D.memberID = S.memberID','left');
		$this->db->join('kabupaten_kota P','S.id_kabupaten_kota = P.id_kabupaten_kota');
		$this->db->join('propinsi J','P.id_propinsi = J.id_propinsi');
		$this->db->where('C.categoryID', $kategoriID);
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

}
?>