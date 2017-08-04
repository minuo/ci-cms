<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Main Dashboard Routes
$route['ci-admin']                              = 'Auth/login';
$route['ci-admin/dashboard']                    = 'Dashboard';

// Dashboard Posts Routes
$route['ci-admin/posts']                        = 'Posts';          
$route['ci-admin/posts/create']                 = 'Posts/create';
$route['ci-admin/posts/store']                  = 'Posts/store';
$route['ci-admin/posts/(:num)/edit']            = 'Posts/edit/$1';
$route['ci-admin/posts/(:num)/update']          = 'Posts/update/$1';
$route['ci-admin/posts/(:num)/delete']          = 'Posts/destroy/$1';

// Dashboard Categorey Routes
$route['ci-admin/categories']                   = 'Categories';
$route['ci-admin/categories/create']            = 'Categories/create';
$route['ci-admin/categories/store']             = 'Categories/store';
$route['ci-admin/categories/(:num)/edit']       = 'Categories/edit/$1';
$route['ci-admin/categories/(:num)/update']     = 'Categories/update/$1';
$route['ci-admin/categories/(:num)/delete']     = 'Categories/destroy/$1';

// Dashboard Comments Routes
$route['ci-admin/comments']                     = 'Comments';          
$route['ci-admin/comments/create']              = 'Comments/create';
$route['ci-admin/comments/store']               = 'Comments/store';
$route['ci-admin/comments/(:num)/edit']         = 'Comments/edit/$1';
$route['ci-admin/comments/(:num)/update']       = 'Comments/update/$1';
$route['ci-admin/comments/(:num)/delete']       = 'Comments/destroy/$1';

// Dashboard Pages Routes
$route['ci-admin/pages']                        = 'Pages';
$route['ci-admin/pages/create']                 = 'Pages/create';
$route['ci-admin/pages/store']                  = 'Pages/store';
$route['ci-admin/pages/(:num)/edit']            = 'Pages/edit/$1';
$route['ci-admin/pages/(:num)/update']          = 'Pages/update/$1';
$route['ci-admin/pages/(:num)/delete']          = 'Pages/destroy/$1';

// Dashboard Users Routes
$route['ci-admin/users']                        = 'Users';
$route['ci-admin/users/create']                 = 'Users/create';
$route['ci-admin/users/store']                  = 'Users/store';
$route['ci-admin/users/(:num)/edit']            = 'Users/edit/$1';
$route['ci-admin/users/(:num)/update']          = 'Users/update/$1';
$route['ci-admin/users/(:num)/delete']          = 'Users/destroy/$1';

// Dashboard Roles Routes
$route['ci-admin/roles']                        = 'Roles';
$route['ci-admin/roles/create']                 = 'Roles/create';
$route['ci-admin/roles/store']                  = 'Roles/store';
$route['ci-admin/roles/(:num)/edit']            = 'Roles/edit/$1';
$route['ci-admin/roles/(:num)/update']          = 'Roles/update/$1';
$route['ci-admin/roles/(:num)/delete']          = 'Roles/destroy/$1';

// Default Routes
$route['default_controller']                    = 'Base';
$route['404_override']                          = '';
$route['translate_uri_dashes']                  = FALSE;
