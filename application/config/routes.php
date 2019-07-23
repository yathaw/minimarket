<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Frontend_ctrl';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['hellos'] = 'Hello_ctrl/hello';


// Category
$route['category'] = 'Category_ctrl/index';
$route['category/create'] = 'Category_ctrl/create';
$route['category/store'] = 'Category_ctrl/store';
$route['category/delete/:num'] = 'Category_ctrl/delete';
$route['category/edit/:num'] ='Category_ctrl/edit';
$route['category/update'] = 'Category_ctrl/update';


// Item
$route['item'] = 'Item_ctrl/index';
$route['item/create'] = 'Item_ctrl/create';
$route['item/store'] = 'Item_ctrl/store';
$route['item/delete/:num'] = 'Item_ctrl/delete';
$route['item/edit/:num'] = 'Item_ctrl/edit';
$route['item/update'] = 'Item_ctrl/update';




// Frontend

// Category
$route['frontend/category'] = 'Frontend_ctrl/category';

// Item
$route['frontend/item'] = 'Frontend_ctrl/item';












