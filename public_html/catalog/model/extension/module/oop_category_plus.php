<?php
class ModelExtensionModuleOopCategoryPlus extends Model {

   public function getCategories() {
      $this->load->model('catalog/product');

      $categories = array();

      $query = new StdClass;
      
      $query->rows = $this->cache->get('category.plus.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id'));

      if (!$query->rows) {
        $query = $this->db->query("select  cp.category_id, group_concat(cp.path_id order by cp.`level`) as path, group_concat(cd.`name` order by cp.`level`) as npath,
                          max(cp.`level`) as  mlevel, c.sort_order
                      from  " . DB_PREFIX . "category_path  cp join  " . DB_PREFIX . "category c on cp.category_id = c.category_id
                        left join  " . DB_PREFIX . "category_description cd on cp.path_id = cd.category_id
                        left join  " . DB_PREFIX . "category_to_store c2s on cp.path_id = c2s.category_id
                      where cd.language_id = '" . (int)$this->config->get('config_language_id') . "' and c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' and c.`status` = 1
                      group by cp.category_id;");

        $this->cache->set('category.plus.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id'), $query->rows);
      }

      $categories_info = array();
      foreach ($query->rows as $row) {
          $npath = explode(',',$row['npath']);
          $categories_info[$row['category_id']] = array(
              'name'=>end($npath) . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts(array('filter_category_id' => $row['category_id'], 'filter_sub_category' => true)) . ')' : ''),
              'href' => $this->url->link('product/category', 'path=' . str_replace(",","_",$row['path'])),
              'level' => $row['mlevel'],
              'sort_order' => $row['sort_order']
          );
      }

      $categories = array();
      foreach ($query->rows as $row) {
          $path = explode(',',$row['path']);
          $curr_cat = &$categories;
          foreach ($path as $p) {
              if(array_key_exists($p, $curr_cat)===false) {
                  $curr_cat[$p] = array();
                  if(sizeof($curr_cat)>1) {
                    uksort($curr_cat, function($a, $b) use($categories_info) {
                        if($categories_info[$a]['sort_order'] != $categories_info[$b]['sort_order']) {
                          return $categories_info[$a]['sort_order'] - $categories_info[$b]['sort_order'];
                        } else {
                          return strcmp($categories_info[$a]['name'], $categories_info[$b]['name']);
                        }
                    });
                  }
              }
              $curr_cat = &$curr_cat[$p];
          }
      }

      return array('categories' => $categories, 'categories_info' => $categories_info);
  }
}
