<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('AdminModel_model');
        //$this->call->model('Reports_model');
        //$this->call->model('CategoryModel');
    }

    public function dashboard()
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }
        $data['today'] = $this->Reports_model->getTodaySales();
        $data['monthly'] = $this->Reports_model->getMonthlySales();
        $data['purchase_items'] = $this->AdminModel_model->getSales();
        $data['Topitems'] = $this->AdminModel_model->topProduct();
        $data['overall_sales'] = $this->Reports_model->getOverallSales();
        $this->call->view('admin/dashboard', $data);
    }

    public function products()
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }
        $data['prod'] = $this->AdminModel_model->getInfo();
        $this->call->view('admin/products', $data);
    }

    public function add()
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }
        $name = $this->io->post('name');
        $description = $this->io->post('description');
        $category = $this->io->post('category');
        $quantity = $this->io->post('quantity');
        $prize = $this->io->post('prize');

        $uploadDir = 'uploads/';
        $uploadedFile = $_FILES['image']['tmp_name'];
        $imageFileName = uniqid('img_') . '_' . $_FILES['image']['name'];
        $targetFile = $uploadDir . $imageFileName;

        move_uploaded_file($uploadedFile, $targetFile);

        $bind = array(
            "name" => $name,
            "description" => $description,
            "category" => $category,
            "quantity" => $quantity,
            "prize" => $prize,
            "image" => $imageFileName
        );

        $this->db->table('prod')->insert($bind);

        redirect('items');
    }

    public function categories()
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            redirect('login');
        }
        $data['active'] = 'categories';
        $data['cat'] = $this->AdminModel_model->getCat();
        $this->call->view('admin/partials/categories', $data);
    }

    public function addcat()
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            redirect('login');
        }
        $newcat = $this->io->post('newcat');
        $ins = [
            'categories' => $newcat
        ];
        if ($this->db->table('cat')->insert($ins)) {
            $_SESSION['success'] = 'Category added successfully';
        } else {
            $_SESSION['error'] = 'Failed to add category';
        }
        redirect('categories');
    }

    public function delcat($id)
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            redirect('login');
        }
        if (isset($id)) {
            if ($this->db->table('cat')->where("id", $id)->delete()) {
                $_SESSION['success'] = 'Category deleted successfully';
            } else {
                $_SESSION['error'] = 'Failed to delete category';
            }
        } else {
            $_SESSION['error'] = 'Invalid category ID';
        }
        redirect('categories');
    }

    public function items()
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }
        $data['cat'] = $this->AdminModel_model->getCat();
        $this->call->view('admin/items', $data);
    }

    public function modify()
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }
        $data['prod'] = $this->AdminModel_model->getInfo();
        $data['cat'] = $this->AdminModel_model->getCat();
        $this->call->view('admin/modify', $data);
    }
    
    public function edit($id)
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }
        $data['prod'] = $this->AdminModel_model->getInfo();
        $data['cat'] = $this->AdminModel_model->getCat();
        $data['edit'] = $this->AdminModel_model->searchInfo($id);
        $this->call->view('admin/modify', $data);
    }

    public function submitedit($id)
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }

        if (isset($id)) {
            $name = $this->io->post('name');
            $description = $this->io->post('description');
            $category = $this->io->post('category');
            $quantity = $this->io->post('quantity');
            $prize = $this->io->post('prize');

            $imageFileName = null;

            if ($_FILES['image']['size'] > 0) {
                $uploadDir = 'uploads/';
                $uploadedFile = $_FILES['image']['tmp_name'];
                $imageFileName = uniqid('img_') . '_' . $_FILES['image']['name'];
                $targetFile = $uploadDir . $imageFileName;
                move_uploaded_file($uploadedFile, $targetFile);
            }

            $data = [
                "name" => $name,
                "description" => $description,
                "category" => $category,
                "quantity" => $quantity,
                "prize" => $prize,
            ];

            if ($imageFileName !== null) {
                $data["image"] = $imageFileName;
            }

            $this->db->table('prod')->where("id", $id)->update($data);
            redirect('modify');
        }
    }
    
    public function trackModify()
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }
        $data['purchase_items'] = $this->AdminModel_model->getSales();
        $data['categories'] = $this->AdminModel_model->getCategories();
        $this->call->view('admin/tracking', $data);
    }
    
    public function trackEdit($id)
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }
        $data['purchase_items'] = $this->AdminModel_model->getSales();
        $data['categories'] = $this->AdminModel_model->getCategories();
        $data['trackEdit'] = $this->AdminModel_model->getPurchaseItemById($id);
        $this->call->view('admin/tracking', $data);
    }
    
    public function trackSubmitEdit($id)
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }
    
        if (isset($id)) {
            $item_name = $this->io->post('item_name');
            $customer_id = $this->io->post('customer_id');
            $customer = $this->io->post('customer');
            $quantity = $this->io->post('quantity');
            $prize = $this->io->post('prize');
            $status = $this->io->post('status');
            $total_price = $quantity * $prize;
    
            $data = [
                "Item_name" => $item_name,
                "CustomerId" => $customer_id,
                "Customer" => $customer,
                "quantity" => $quantity,
                "prize" => $prize,
                "total_price" => $total_price,
                "status" => $status,
            ];
    
            $this->db->table('purchase_items')->where("id", $id)->update($data);
            redirect('tracking');
        }
    }

    public function delete($id)
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            redirect('login');
        }

        if (isset($id)) {
            $product = $this->AdminModel_model->searchInfo($id);

            if ($product) {
                $deleted = $this->db->table('prod')->where("id", $id)->delete();
                
                if ($deleted) {
                    if (!empty($product['image'])) {
                        $image_path = 'uploads/' . $product['image'];
                        if (file_exists($image_path)) {
                            unlink($image_path);
                        }
                    }
                    $_SESSION['success'] = 'Product deleted successfully';
                } else {
                    $_SESSION['error'] = 'Failed to delete product';
                }
            } else {
                $_SESSION['error'] = 'Product not found';
            }
        } else {
            $_SESSION['error'] = 'Invalid product ID';
        }
        
        redirect('modify');
    }

    public function updateStatus()
{
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        redirect('login');
    }

    $id = $this->io->post('id');
    $status = $this->io->post('status');
    
    if (!$id || !$status) {
        $_SESSION['error'] = 'Invalid request';
        redirect('tracking');
        return;
    }

    $allowed_statuses = ['Pending', 'Preparing', 'Out for Delivery', 'Delivered'];
    
    if (!in_array($status, $allowed_statuses)) {
        $_SESSION['error'] = 'Invalid status';
        redirect('tracking');
        return;
    }

    $update = $this->db->table('purchase_items')
                      ->where('id', $id)
                      ->update(['status' => $status]);

    if ($update) {
        $_SESSION['success'] = 'Status updated successfully';
    } else {
        $_SESSION['error'] = 'Failed to update status';
    }

    redirect('tracking');
}


    public function viewOrder($id)
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            redirect('login');
        }

        $data['order'] = $this->AdminModel_model->getPurchaseItemById($id);
        $this->call->view('admin/view-order', $data);
    }
}

