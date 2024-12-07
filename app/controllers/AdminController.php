<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class AdminController extends Controller
{

    public function dashboard()
    {
        // if (!$this->session->userdata('IsAdmin')) {
        //     redirect('login');
        // }
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


        // File upload handling
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
            "image" => $imageFileName  // Save the image file name in the database
        );

        $this->db->table('prod')->insert($bind);

        redirect('items');
    }
    public function addcat()
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }
        $newcat = $this->io->post('newcat');
        $ins = [
            'categories' => $newcat
        ];
        $this->db->table('cat')->insert($ins);
        redirect('items');
    }
    public function delcat($id)
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }
        if (isset($id)) {
            $this->db->table('cat')->where("id", $id)->delete();
            redirect('items');
        } else {
            $_SESSION['delete'] = "FAILED";
            redirect('items');
        }
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

            // Initialize $imageFileName
            $imageFileName = null;

            // Check if a new image is uploaded
            if ($_FILES['image']['size'] > 0) {
                // File upload handling
                $uploadDir = 'uploads/';
                $uploadedFile = $_FILES['image']['tmp_name'];
                $imageFileName = uniqid('img_') . '_' . $_FILES['image']['name'];
                $targetFile = $uploadDir . $imageFileName;
                move_uploaded_file($uploadedFile, $targetFile);
            }

            // Build the $data array
            $data = [
                "name" => $name,
                "description" => $description,
                "category" => $category,
                "quantity" => $quantity,
                "prize" => $prize,
            ];

            // Add image to $data if it's set
            if ($imageFileName !== null) {
                $data["image"] = $imageFileName;
            }

            // Update the product data in the database
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
            $customer_id = $this->io->post('customer_id');  // Corrected to match your form
            $customer = $this->io->post('customer');
            $quantity = $this->io->post('quantity');
            $prize = $this->io->post('prize');
            $status = $this->io->post('status');
            $total_price = $quantity * $prize;
    
            $data = [
                "Item_name" => $item_name,
                "CustomerId" => $customer_id,  // Ensure you're using the correct column name
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
        // Get the product information before deleting
        $product = $this->AdminModel_model->searchInfo($id);

        if ($product) {
            // Delete the product from the database
            $deleted = $this->db->table('prod')->where("id", $id)->delete();
            
            if ($deleted) {
                // Delete the associated image file
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


    
}


?>