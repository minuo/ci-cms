<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['ci-admin']                      = 'Auth/login';
$route['ci-admin/dashboard']            = 'Dashboard';

$route['ci-admin/posts']                = 'Posts';          
$route['ci-admin/posts/create']         = 'Posts/create';
$route['ci-admin/posts/store']          = 'Posts/store';

$route['ci-admin/pages']                = 'Pages';
$route['ci-admin/pages/create']         = 'Pages/create';
$route['ci-admin/pages/store']          = 'Pages/store';

$route['(:any)']                        = 'Posts/find/$1';

$route['default_controller']            = 'Pages';
$route['404_override']                  = '';
$route['translate_uri_dashes']          = FALSE;
