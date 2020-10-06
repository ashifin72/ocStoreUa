<?php
class ModelExtensionModuleDesignsHyperPositions extends Model
{
    public function getPositions($layout_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "hyper_positions_width WHERE layout_id = '" . (int)$layout_id . "'");

        if ($query->row) {
            return json_decode($query->row['layout_settings'], true);
        } else {
            return array();
        }
    }
}