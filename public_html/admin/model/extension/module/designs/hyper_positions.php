<?php
class ModelExtensionModuleDesignsHyperPositions extends Model {


	public function getPositions($layout_id){

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "hyper_positions_width WHERE layout_id = '" . (int)$layout_id . "'");

		if($query->row){
			return json_decode($query->row['layout_settings'], true);
		} else {
			return array();
		}
	
		
	}

	public function editPositions($layout_id, $layout_settings){

		$this->db->query("DELETE FROM " . DB_PREFIX . "hyper_positions_width WHERE layout_id = '" . (int)$layout_id . "'");

		$this->db->query("INSERT INTO " . DB_PREFIX . "hyper_positions_width SET layout_id = '" . (int)$layout_id . "', layout_settings = '" . $this->db->escape(json_encode($layout_settings)) . "'");
	}

	public function deletePositions($layout_id){

		$this->db->query("DELETE FROM " . DB_PREFIX . "hyper_positions_width WHERE layout_id = '" . (int)$layout_id . "'");

	}
	
}