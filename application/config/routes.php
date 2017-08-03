<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Main Dashboard Routes
$route['ci-admin']                          = 'Auth/login';
$route['ci-admin/dashboard']                = 'Dashboard';

// Dashboard Posts Routes
$route['ci-admin/posts']                    = 'Posts';          
$route['ci-admin/posts/create']             = 'Posts/create';
$route['ci-admin/posts/store']              = 'Posts/store';

// Dashboard Posts Routes
$route['ci-admin/comments']                 = 'Comments';          
$route['ci-admin/comments/create']          = 'Comments/create';
$route['ci-admin/comments/store']           = 'Comments/store';

// Dashboard Pages Routes
$route['ci-admin/pages']                    = 'Pages';
$route['ci-admin/pages/create']             = 'Pages/create';
$route['ci-admin/pages/store']              = 'Pages/store';

// Dashboard Users Routes
$route['ci-admin/users']                    = 'Users';
$route['ci-admin/users/create']             = 'Users/create';
$route['ci-admin/users/store']              = 'Users/store';

// Dashboard Roles Routes
$route['ci-admin/roles']                    = 'Roles';
$route['ci-admin/roles/create']             = 'Roles/create';
$route['ci-admin/roles/store']              = 'Roles/store';

// Default Routes
$route['default_controller']                = 'Base';
$route['404_override']                      = '';
$route['translate_uri_dashes']              = FALSE;
