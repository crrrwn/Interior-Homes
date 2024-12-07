<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class CategoryModel extends Model {
    
    public function getAllCategories() {
        return $this->db->table('cat')->get_all();
    }
    
    public function addCategory($name) {
        return $this->db->table('cat')->insert([
            'categories' => $name
        ]);
    }
    
    public function deleteCategory($id) {
        return $this->db->table('cat')
                       ->where('id', $id)
                       ->delete();
    }
}

