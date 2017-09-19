<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_wisata extends CI_Model {
		
		public function all(){
			$hasil =$this->db->get('wisata');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find ($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('wisata');
			if($hasil->num_rows() > 0){
				return $hasil->row();
			}else{
				return array();
			}
		}
		
		public function create($data_wisata){
			$this->db->insert('wisata',$data_wisata);
		}
		
		public function update($id, $data_wisata){
			$this->db->where('id',$id)
					 ->update('wisata',$data_wisata);
		}
		
		public function delete($id){
			$this->db->where('id',$id)
					 ->delete('wisata'); 
		}
		
		public function details($id){
			$hasil =$this->db->where('id',$id)
						 ->limit(1)
						 ->get('wisata');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		
}