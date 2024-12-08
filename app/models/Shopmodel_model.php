<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Shopmodel_model extends Model
{
    public function getInfo()
    {
        return $this->db->table('prod')->where('quantity', '>', 0)->get_all();
    }
    public function getpurchase()
    {
        return $this->db->table('purchase_items')->get_all();
    }
    public function getCat()
    {
        return $this->db->table('cat')->get_all();
    }
    public function searchInfo($searchTerm)
    {
        // return $this->db->table('prod')->where('id', $id)->get();
        return $this->db->table('prod')
        ->like('name', $searchTerm)
        ->where('quantity', '>', 0)
        ->get_all();
    }

    public function getInfoById($id)
    {
        return $this->db->table('prod')->select('*')->where('id', $id)->get();
    }

    public function getIcartById($id)
    {
        return $this->db->table('cart')->select('*')->where('id', $id)->get();
    }
    public function getcart($user_id)
    {
        return $this->db->table('cart')->where('user_id', $user_id)->get_all();
    }

    public function insertPurchaseData($bind)
    {
        return $this->db->table('purchase')->insert($bind);
    }

    public function clearCart($userId)
    {
        return $this->db->table('cart')->where('user_id', $userId)->delete();
    }

    public function updateCartQuantity($cartId, $quantity)
{
    return $this->db->table('cart')
                    ->where('id', $cartId)
                    ->update(['quantity' => $quantity]);
}

    public function getorder($userId)
    {
        return $this->db->table('purchase_items')->where('CustomerId', $userId)->get_all();
    }    
    
    public function updateProductQuantity($productId, $quantity) {
        // Get current product quantity
        $product = $this->db->table('products')
                           ->where('id', $productId)
                           ->get();
        
        if ($product) {
            // Calculate new quantity
            $newQuantity = $product[0]['quantity'] - $quantity;
            
            // Update product quantity
            return $this->db->table('products')
                           ->where('id', $productId)
                           ->update(['quantity' => $newQuantity]);
        }
        return false;
    }

}
?>