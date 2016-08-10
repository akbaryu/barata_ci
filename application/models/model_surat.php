<?php
class model_surat extends CI_Model {

  public function __construct() {
    $this->load->database();
  }
  
  // Menampilkand data gambar
  public function daftar_gambar() {
      $query = $this->db->query('SELECT surat.name, surat.thumb_img, surat.full_img, surat.ket, surat.id FROM surat');
    return $query->result_array();
  }
  public function konfirmasi(){
    $query = $this->db->query("Select * from surat WHERE konfirmasi=1");
    return $query->result_array();
  }
   private $tablesurat="surat";
   private $primarysurat="id";
  // Model untuk menambah  gambar
  public function tambah($data) {
   $this->db->insert($this->tablesurat, $data);
   return $this->db->insert_id();
  }
  
  // Detail  gambar
  public function detail_gambar($id = FALSE) {
  if ($id === FALSE)  {
    $query = $this->db->get('surat');
    return $query->result_array();
  }
  $query = $this->db->get_where('surat', array('id' => $id));
  return $query->row_array();
  }
  
  // Update  gambar
  public function edit_gambar($data) {
    $this->db->where('id', $data['id']);
    return $this->db->update('surat', $data);
  }
  
  // Hapus  gambar
  public function delete_gambar($id) {
    $this->db->where('id',$id);
    return $this->db->delete('surat');
  }
}