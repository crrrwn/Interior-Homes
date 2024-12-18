<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Maincontroller extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->call->model('User_model');
        $this->call->model('Shop_model');
    }

    public function index()
    {
        if (!$this->session->userdata('IsLoggedIn')) {
            redirect('login');
        }

        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Shop_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('homepage', $data);
    }

    public function main()
    {
        if (!$this->session->userdata('IsLoggedIn')) {
            redirect('login');
        }

        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Shop_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('mainpage', $data);
    }

    public function checkout()
    {
        if (!$this->session->userdata('IsLoggedIn') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }
        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Shop_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $data['users'] = $this->User_model->getUserById($userId);

        $this->call->view('checkout', $data);
    }

    public function purchase()
    {
        if (!$this->session->userdata('IsLoggedIn') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }
    
        $userId = $this->session->userdata('user_id');
        $fullname = $this->io->post('fullname');
        $email = $this->io->post('email');
        $number = $this->io->post('number');
        $compAdd = $this->io->post('compAdd');
        $payment = isset($_POST['payment']) ? $this->io->post('payment') : '';
    
        $purchaseData = [
            'user_id' => $userId,
            'fullname' => $fullname,
            'email' => $email,
            'number' => $number,
            'payment' => $payment,
            'compAdd' => $compAdd,
        ];
    
        $purchaseId = $this->Shop_model->insertPurchaseData($purchaseData);
    
        $data['cart'] = $this->Shop_model->getcart($userId);
    
        if (!empty($data['cart'])) {
            foreach ($data['cart'] as $cartItem) {
                $itemTotal = $cartItem['prize'] * $cartItem['quantity'];
                $itemData = [
                    'Customer' => $fullname,
                    'CustomerId' => $userId,
                    'purchase_id' => $purchaseId,
                    'prod_id' => $cartItem['prod_id'],
                    'Item_name' => $cartItem['name'],
                    'Item_image' => $cartItem['image'],
                    'quantity' => $cartItem['quantity'],
                    'prize' => $cartItem['prize'],
                    'total_price' => $itemTotal,
                ];
                $this->db->table('purchase_items')->insert($itemData);
                $this->Shop_model->updateProductQuantity($cartItem['prod_id'], $cartItem['quantity']);
            }
    
            $this->Shop_model->clearCart($userId);
        }
    
        // Store purchase ID in session for thank you page
        $this->session->set_flashdata('purchase_id', $purchaseId);
        redirect('thankyou');
    }

    public function thankyou()
    {

      if (!$this->session->userdata('IsLoggedIn') || $this->session->userdata('role') !== 'user') {
        redirect('login');
    }
    
    $data['purchase_id'] = $this->session->flashdata('purchase_id');
    $this->call->view('thankyou', $data);
    }

    public function contact()
    {
        if (!$this->session->userdata('IsLoggedIn')) {
            redirect('login');
        }
        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Shop_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('contact', $data);
    }

    public function detail()
    {
        if (!$this->session->userdata('IsLoggedIn')) {
            redirect('login');
        }
        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Shop_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('detail', $data);
    }

    public function view($id)
    {
        if (!$this->session->userdata('IsLoggedIn') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }
        $data['prod'] = $this->Shop_model->getInfoById($id);
        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Shop_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('viewdetails', $data);
    }

    public function shop()
    {
        if (!$this->session->userdata('IsLoggedIn')) {
            redirect('login');
        }
        $data['prod'] = $this->Shop_model->getInfo();
        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Shop_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('shop', $data);
    }
    
    public function menu()
    {
        if (!$this->session->userdata('IsLoggedIn')) {
            redirect('login');
        }
        $data['prod'] = $this->Shop_model->getInfo();
        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Shop_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('menu', $data);
    }

    public function search()
    {
        if (!$this->session->userdata('IsLoggedIn') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }

        $searchTerm = $this->io->get('search');
        $data['prod'] = $this->Shop_model->searchInfo($searchTerm);

        $userId = $this->session->userdata('user_id');
        $data['cart'] = $this->SShop_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);

        $this->call->view('shop', $data);
    }

    public function cart()
    {
        if (!$this->session->userdata('IsLoggedIn') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }

        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Shop_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('cart', $data);
    }

    public function Ac($id)
    {
        if (!$this->session->userdata('IsLoggedIn') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }

        $userId = $this->session->userdata('user_id');

        $data['prod'] = $this->Shop_model->getInfoById($id);
        $quantity = $this->io->post('quantity');

        $bind = [
            'user_id' => $userId,
            'prod_id' => $id,
            'name' => $data['prod']['name'],
            'image' => $data['prod']['image'],
            'prize' => $data['prod']['prize'],
            'quantity' => $quantity,
        ];

        $this->db->table('cart')->insert($bind);
        redirect('shop');
    }

    public function Acc($id)
    {
        if (!$this->session->userdata('IsLoggedIn') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }

        $userId = $this->session->userdata('user_id');

        $data['prod'] = $this->Shop_model->getInfoById($id);
        $bind = [
            'user_id' => $userId,
            'prod_id' => $id,
            'name' => $data['prod']['name'],
            'image' => $data['prod']['image'],
            'prize' => $data['prod']['prize'],
            'quantity' => 1,
        ];

        $this->db->table('cart')->insert($bind);
        redirect('shop');
    }

    public function cartdel($id)
    {
        if (!$this->session->userdata('IsLoggedIn') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }

        if (isset($id)) {
            $this->db->table('cart')->where("id", $id)->delete();
            redirect('cart');
        } else {
            $_SESSION['delete'] = "FAILED";
            redirect('modify');
        }
    }

    public function profile()
    {
        if (!$this->session->userdata('IsLoggedIn') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }
        
        $userId = $this->session->userdata('user_id');
        $data['cart'] = $this->User_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        
        $data['purchase_items'] = $this->Shop_model->getorder($userId);
        $data['users'] = $this->User_model->getUserById($userId);
        $this->call->view('profile',$data);
    }
    
    public function profUp()
    {
        if (!$this->session->userdata('IsLoggedIn') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }
        $userId = $this->session->userdata('user_id');
        $data['users'] = $this->User_model->getUserById($userId);
        $fullname = $this->io->post('fullname');
        $number = $this->io->post('number');
        $compAdd = $this->io->post('compAdd');
        $data = [
            "fullname" => $fullname,
            "number" => $number,
            "compAdd" => $compAdd,        
        ];
        $this->db->table('users')->where("id", $userId)->update($data);
        redirect('profile');
    }

    // New methods for registration and login
    public function register() {
        $this->call->view('register');
    }

    public function process_register() {
        $fullname = $this->io->post('fullname');
        $email = $this->io->post('email');
        $password = $this->io->post('password');
        $role = $this->io->post('role');
        $compAdd = $this->io->post('compAdd');
        $number = $this->io->post('number');

        if (empty($fullname) || empty($email) || empty($password) || empty($role)) {
            $this->session->set_flashdata('error', 'All fields are required');
            redirect('register');
        }

        $existing_user = $this->User_model->getEmail($email);
        if ($existing_user) {
            $this->session->set_flashdata('error', 'Email already exists');
            redirect('register');
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'fullname' => $fullname,
            'email' => $email,
            'password' => $hashed_password,
            'role' => $role,
            'compAdd' => $compAdd,
            'number' => $number
        ];

        $user_id = $this->User_model->register_user($data);

        if ($user_id) {
            $this->session->set_flashdata('success', 'Registration successful. Please log in.');
            redirect('login');
        } else {
            $this->session->set_flashdata('error', 'Registration failed');
            redirect('register');
        }
    }

    public function login() {
        $this->call->view('login');
    }

    public function process_login() {
        $email = $this->io->post('email');
        $password = $this->io->post('password');

        $user = $this->User_model->login_user($email, $password);
        
        if ($user) {
            $this->session->set_userdata([
                'user_id' => $user['id'],
                'fullname' => $user['fullname'],
                'role' => $user['role'],
                'IsLoggedIn' => true
            ]);

            if ($user['role'] === 'admin') {
                redirect('admin/dashboard');
            } else {
                redirect('main');
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid email or password');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function admin_dashboard() {
        if (!$this->session->userdata('IsLoggedIn') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }
        
        $data['users'] = $this->User_model->getusers();
        $data['products'] = $this->Shop_model->getInfo();
        $this->call->view('admin/dashboard', $data);
    }
    public function updateQuantity()
{
    if (!$this->session->userdata('IsLoggedIn') || $this->session->userdata('role') !== 'user') {
        redirect('login');
    }

    $cartId = $this->io->post('cart_id');
    $quantity = $this->io->post('quantity');

    if ($cartId && $quantity > 0) {
        $this->db->table('cart')
                 ->where('id', $cartId)
                 ->update(['quantity' => $quantity]);
    }

    redirect('cart');
}
}
?>

