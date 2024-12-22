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

// $router->get('/', 'Welcome::index');
$router->get('/', 'MainController::index');
$router->get('/main', 'MainController::main');

$router->get('/shop', 'MainController::shop');
$router->get('/menu', 'MainController::menu');
$router->get('/search', 'MainController::search');

$router->get('/cart', 'MainController::cart');
$router->post('/updatequantity', 'MainController::updatequantity');
$router->get('/detail', 'MainController::detail');
$router->get('/checkout', 'MainController::checkout');
$router->get('/contact', 'MainController::contact');
$router->post('/main/updateQuantity', 'MainController::updateQuantity');

$router->post('/Ac/(:num)', 'MainController::Ac');
$router->get('/Acc/(:num)', 'MainController::Acc');
$router->get('/view/(:num)', 'MainController::view');
$router->get('/cartdel/(:num)', 'MainController::cartdel');
$router->post('/purchase', 'MainController::purchase');
$router->get('/thankyou', 'MainController::thankyou');

$router->get('/profile', 'MainController::profile');
$router->post('/profUp', 'MainController::profUp');

$router->get('/login', 'MainController::login');
$router->post('/login/process', 'MainController::process_login');
$router->get('/logout', 'MainController::logout');
$router->get('/register', 'MainController::register');
$router->post('/register/process', 'MainController::process_register');

$router->post('/create', 'UserController::create');
$router->post('/auth', 'UserController::auth');
$router->post('/changePass', 'UserController::changePass');

$router->get('/admin/dashboard', 'MainController::admin_dashboard');
$router->get('/dashboard', 'AdminController::dashboard');
$router->get('/products', 'AdminController::products');
$router->get('/items', 'AdminController::items');
$router->get('/modify', 'AdminController::modify');
$router->post('/save', 'AdminController::add');
$router->post('/addcat', 'AdminController::addcat');
$router->get('/delcat/(:num)', 'AdminController::delcat');
$router->get('/delete/(:num)', 'AdminController::delete');

$router->get('/categories', 'AdminController::categories');

$router->get('/tracking', 'AdminController::trackModify');
$router->get('/edit/(:num)', 'AdminController::edit');
$router->post('/submitedit/(:num)', 'AdminController::submitedit');
$router->get('/trackEdit/(:num)', 'AdminController::trackEdit');
$router->post('/trackSubmitEdit/(:num)', 'AdminController::trackSubmitEdit');

$router->get('/updateStatus/(:num)', 'AdminController::updateStatus');
$router->post('/updateStatus', 'AdminController::updateStatus');

$router->get('/monthlySales', 'ChartsController::monthlySales');
$router->get('/dailySales', 'ChartsController::dailySales');
$router->get('/yearlySales', 'ChartsController::yearlySales');
$router->get('/buwan', 'ChartsController::buwan');
$router->get('/reports', 'ReportsController::reports');
$router->post('/downloadReportsPdf', 'ReportsController::downloadReportsPdf');