<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_wis extends CI_Model {
		
		public function all(){
			$hasil =$this->db->where('kategori','alam')
							 ->get('wisata')
						 ;
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_wis ($id){
			$hasil = $this->db->where('kategori','alam')
							  ->where('id',$id)
							  ->limit(1)
							  ->get('wisata');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function all_bahari(){
			$hasil =$this->db->where('kategori','bahari')
						     ->get('wisata');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_bahari ($id){
			$hasil = $this->db->where('kategori','bahari')
							  ->where('id',$id)
							  ->limit(1)
							  ->get('wisata');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function all_budaya(){
			$hasil =$this->db->where('kategori','budaya')
						     ->get('wisata');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_budaya($id){
			$hasil = $this->db->where('kategori','budaya')
							  ->where('id',$id)
							  ->limit(1)
							  ->get('wisata');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function all_sejarah(){
			$hasil =$this->db->where('kategori','sejarah')
						     ->get('wisata');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_sejarah($id){
			$hasil = $this->db->where('kategori','sejarah')
							  ->where('id',$id)
							  ->limit(1)
							  ->get('wisata');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
}