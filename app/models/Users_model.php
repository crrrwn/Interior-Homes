<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Users_model extends Model {
    // Admin methods
    public function getInfo()
    {
        return $this->db->table('prod')->get_all();
    }

    public function getCat()
    {
        return $this->db->table('cat')->get_all();
    }

    public function getCategories()
    {
        return $this->db->table('cat')->get_all();
    }

    public function searchInfo($id)
    {
        return $this->db->table('prod')->where('id', $id)->get();
    }

    public function getPurchaseItemById($id)
    {
        return $this->db->table('purchase_items')->where('id', $id)->get();
    }

    public function getSales()
    {
        return $this->db->table('purchase_items')->get_all();
    }

    public function updatePurchaseItem($id, $data)
    {
        $this->db->where('purchase_id', $id);
        return $this->db->update('purchase_items', $data);
    }

    public function topProduct()
    {
        return $this->db->raw('
        SELECT
            Item_name,
            MAX(prize) AS max_prize,
            MAX(Item_image) AS max_image,
            SUM(quantity) AS total_quantity,
            SUM(total_price) AS total_sales
        FROM
            purchase_items
        WHERE
            YEAR(order_at) = YEAR(CURDATE())
        GROUP BY
            Item_name
        ORDER BY
            total_quantity DESC
        LIMIT 10;
        ');
    }

    // Category methods
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

    // Reports methods
    public function getTodaySales()
    {
        $result = $this->db->raw('
            SELECT 
                SUM(total_price) AS today_sales 
            FROM 
                purchase_items 
            WHERE 
                DATE(order_at) = CURDATE()
        ');

        return $result[0]['today_sales'] ?? 0;
    }

    public function getMonthlySales()
    {
        $result = $this->db->raw('
            SELECT 
                SUM(total_price) AS monthly_sales 
            FROM 
                purchase_items 
            WHERE 
                MONTH(order_at) = MONTH(CURDATE()) 
                AND YEAR(order_at) = YEAR(CURDATE())
        ');

        return $result[0]['monthly_sales'] ?? 0;
    }

    public function getYearlySales()
    {
        $result = $this->db->raw('
            SELECT 
                SUM(total_price) AS yearly_sales 
            FROM 
                purchase_items 
            WHERE 
                YEAR(order_at) = YEAR(CURDATE())
        ');

        return $result[0]['yearly_sales'] ?? 0;
    }

    public function getWeeklySales()
    {
        $result = $this->db->raw('
            SELECT 
                SUM(total_price) AS weekly_sales 
            FROM 
                purchase_items 
            WHERE 
                YEARWEEK(order_at, 1) = YEARWEEK(CURDATE(), 1)
        ');

        return isset($result[0]['weekly_sales']) ? (float) $result[0]['weekly_sales'] : 0;
    }

    public function getOverallSales()
    {
        $result = $this->db->raw('
            SELECT 
                SUM(total_price) AS overall_sales 
            FROM 
                purchase_items
        ');

        return isset($result[0]['overall_sales']) ? (float) $result[0]['overall_sales'] : 0;
    }

    // Shop methods
    public function getpurchase()
    {
        return $this->db->table('purchase_items')->get_all();
    }

    public function searchInfoByName($searchTerm)
    {
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
        $product = $this->db->table('products')
                           ->where('id', $productId)
                           ->get();
        
        if ($product) {
            $newQuantity = $product[0]['quantity'] - $quantity;
            
            return $this->db->table('products')
                           ->where('id', $productId)
                           ->update(['quantity' => $newQuantity]);
        }
        return false;
    }

    // User methods
    public function getusers()
    {
        return $this->db->table('users')->get_all();
    }

    public function addUser($data)
    {
        $validColumns = ['fullname', 'email', 'password', 'role', 'compAdd', 'number'];
        $filteredData = array_intersect_key($data, array_flip($validColumns));
        
        return $this->db->table('users')->insert($filteredData);
    }

    public function getEmail($email)
    {
        return $this->db->table('users')->where('email', $email)->get();
    }

    public function getUserById($userId)
    {
        return $this->db->table('users')->where('id', $userId)->get();
    }

    public function register_user($data)
    {
        return $this->addUser($data);
    }

    public function login_user($email, $password)
    {
        $user = $this->getEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    public function get_user_role($user_id)
    {
        $user = $this->getUserById($user_id);

        return $user ? $user['role'] : null;
    }

    public function updateUser($userId, $data)
    {
        $validColumns = ['fullname', 'email', 'compAdd', 'number'];
        $filteredData = array_intersect_key($data, array_flip($validColumns));
        
        return $this->db->table('users')->where('id', $userId)->update($filteredData);
    }

    public function changePassword($userId, $newPassword)
    {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        return $this->db->table('users')->where('id', $userId)->update(['password' => $hashedPassword]);
    }
}
?>

