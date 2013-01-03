<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

#frontend
$route['default_controller'] = "homepage";
$route['article/(:num).html'] = "article/index/$1";
$route['category/(:num).html'] = "category/index/$1";
$route['category/(:num)-(:num).html'] = "category/index/$1/$2";
$route['product.html'] = "category/index/4";
$route['product-(:num).html'] = "category/index/4/$1";
$route['company.html'] = "category/index/3";
$route['company-(:num).html'] = "category/index/3/$1";


#backend
$route['backend'] = "backend/login";
$route['backend/dashboard'] = "backend/login/dashboard";
$route['backend/article/(:num)/edit'] = "backend/article/edit/$1";
$route['backend/article/(:num)/delete'] = "backend/article/delete/$1";
$route['backend/article/(:num)/create'] = "backend/article/create";

$route['backend/link'] = "backend/article/link";
$route['backend/link/create'] = "backend/article/createlink";

$route['backend/slide'] = "backend/article/slide";
$route['backend/slide/create'] = "backend/article/createslide";

$route['backend/category/(:num)/edit'] = "backend/category/edit/$1";
$route['backend/category/(:num)/delete'] = "backend/category/delete/$1";
$route['backend/category/create'] = "backend/category/create";

#default
$route['404_override'] = '';



/* End of file routes.php */
/* Location: ./application/config/routes.php */