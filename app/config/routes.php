<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/

// Main routes
$router->get('/', 'Maincontroller::index');
$router->get('/main', 'Maincontroller::main');

// Shop and menu routes
$router->get('/shop', 'Maincontroller::shop');
$router->get('/menu', 'Maincontroller::menu');
$router->get('/search', 'Maincontroller::search');

// Cart and checkout routes
$router->get('/cart', 'Maincontroller::cart');
$router->post('/updatequantity', 'Maincontroller::updatequantity'); // New route for updating cart quantity
$router->get('/detail', 'Maincontroller::detail');
$router->get('/checkout', 'Maincontroller::checkout');
$router->get('/contact', 'Maincontroller::contact');
$router->post('/main/updateQuantity', 'Maincontroller::updateQuantity');

// Product interaction routes
$router->post('/Ac/(:num)', 'Maincontroller::Ac');
$router->get('/Acc/(:num)', 'Maincontroller::Acc');
$router->get('/view/(:num)', 'Maincontroller::view');
$router->get('/cartdel/(:num)', 'Maincontroller::cartdel');
$router->post('/purchase', 'Maincontroller::purchase');
$router->get('/thankyou', 'Maincontroller::thankyou');

// User profile routes
$router->get('/profile', 'Maincontroller::profile');
$router->post('/profUp', 'Maincontroller::profUp');

// Authentication routes
$router->get('/login', 'Maincontroller::login');
$router->post('/login/process', 'Maincontroller::process_login');
$router->get('/logout', 'Maincontroller::logout');
$router->get('/register', 'Maincontroller::register');
$router->post('/register/process', 'Maincontroller::process_register');

// Legacy authentication routes (might still be needed)
$router->post('/create', 'Usercontroller::create');
$router->post('/auth', 'Usercontroller::auth');
$router->post('/changePass', 'Usercontroller::changePass');

// Admin routes
$router->get('/admin/dashboard', 'Maincontroller::admin_dashboard'); // New admin dashboard route
$router->get('/dashboard', 'Admincontroller::dashboard');
$router->get('/products', 'Admincontroller::products');
$router->get('/items', 'Admincontroller::items');
$router->get('/modify', 'Admincontroller::modify');
$router->post('/save', 'Admincontroller::add');
$router->post('/addcat', 'Admincontroller::addcat');
$router->get('/delcat/(:num)', 'Admincontroller::delcat');
$router->get('/delete/(:num)', 'Admincontroller::delete'); // Delete product route

// Category management route
$router->get('/categories', 'Admincontroller::categories');

// Tracking routes
$router->get('/tracking', 'Admincontroller::trackModify');
$router->get('/edit/(:num)', 'Admincontroller::edit');
$router->post('/submitedit/(:num)', 'Admincontroller::submitedit');
$router->get('/trackEdit/(:num)', 'Admincontroller::trackEdit');
$router->post('/trackSubmitEdit/(:num)', 'Admincontroller::trackSubmitEdit');

// New routes for updating status and viewing orders
$router->get('/updateStatus/(:num)', 'Admincontroller::updateStatus');
$router->post('/updateStatus', 'Admincontroller::updateStatus');

// Charts and reports routes
$router->get('/monthlySales', 'Chartscontroller::monthlySales');
$router->get('/dailySales', 'Chartscontroller::dailySales');
$router->get('/yearlySales', 'Chartscontroller::yearlySales');
$router->get('/buwan', 'Chartscontroller::buwan');
$router->get('/reports', 'Reportscontroller::reports');
$router->post('/downloadReportsPdf', 'Reportscontroller::downloadReportsPdf');