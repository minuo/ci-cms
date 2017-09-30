<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
*   Posts Routes
*/
$route['posts/(:any)']                          = 'Base/index/$1';

// Main Dashboard Routes
$route['ci-admin']                              = 'ci-admin/Auth/login';
$route['ci-admin/dashboard']                    = 'ci-admin/Dashboard';

// Dashboard Posts Routes
$route['ci-admin/posts']                        = 'ci-admin/Posts';          
$route['ci-admin/posts/create']                 = 'ci-admin/Posts/create';
$route['ci-admin/posts/store']                  = 'ci-admin/Posts/store';
$route['ci-admin/posts/(:num)/edit']            = 'ci-admin/Posts/edit/$1';
$route['ci-admin/posts/(:num)/update']          = 'ci-admin/Posts/update/$1';
$route['ci-admin/posts/(:num)/delete']          = 'ci-admin/Posts/destroy/$1';

// Dashboard Categorey Routes
$route['ci-admin/categories']                   = 'ci-admin/Categories';
$route['ci-admin/categories/store']             = 'ci-admin/Categories/store';
$route['ci-admin/categories/(:num)/edit']       = 'ci-admin/Categories/edit/$1';
$route['ci-admin/categories/(:num)/update']     = 'ci-admin/Categories/update/$1';
$route['ci-admin/categories/(:num)/delete']     = 'ci-admin/Categories/destroy/$1';

// Dashboard Comments Routes
$route['ci-admin/comments']                     = 'ci-admin/Comments';          
$route['ci-admin/comments/create']              = 'ci-admin/Comments/create';
$route['ci-admin/comments/store']               = 'ci-admin/Comments/store';
$route['ci-admin/comments/(:num)/edit']         = 'ci-admin/Comments/edit/$1';
$route['ci-admin/comments/(:num)/update']       = 'ci-admin/Comments/update/$1';
$route['ci-admin/comments/(:num)/delete']       = 'ci-admin/Comments/destroy/$1';

// Dashboard Pages Routes
$route['ci-admin/pages']                        = 'ci-admin/Pages';
$route['ci-admin/pages/create']                 = 'ci-admin/Pages/create';
$route['ci-admin/pages/store']                  = 'ci-admin/Pages/store';
$route['ci-admin/pages/(:num)/edit']            = 'ci-admin/Pages/edit/$1';
$route['ci-admin/pages/(:num)/update']          = 'ci-admin/Pages/update/$1';
$route['ci-admin/pages/(:num)/delete']          = 'ci-admin/Pages/destroy/$1';

$route['ci-admin/media']                        = 'ci-admin/Media/index';
$route['ci-admin/media/upload']                 = 'ci-admin/Media/upload';
$route['ci-admin/media/delete']                 = 'ci-admin/Media/delete';

// Dashboard Users Routes
$route['ci-admin/users']                        = 'ci-admin/Users';
$route['ci-admin/users/create']                 = 'ci-admin/Users/create';
$route['ci-admin/users/store']                  = 'ci-admin/Users/store';
$route['ci-admin/users/(:num)/edit']            = 'ci-admin/Users/edit/$1';
$route['ci-admin/users/(:num)/update']          = 'ci-admin/Users/update/$1';
$route['ci-admin/users/(:num)/delete']          = 'ci-admin/Users/destroy/$1';

// Dashboard Roles Routes
$route['ci-admin/roles']                        = 'ci-admin/Roles';
$route['ci-admin/roles/create']                 = 'ci-admin/Roles/create';
$route['ci-admin/roles/store']                  = 'ci-admin/Roles/store';
$route['ci-admin/roles/(:num)/edit']            = 'ci-admin/Roles/edit/$1';
$route['ci-admin/roles/(:num)/update']          = 'ci-admin/Roles/update/$1';
$route['ci-admin/roles/(:num)/delete']          = 'ci-admin/Roles/destroy/$1';

$route['ci-admin/settings']                     = 'ci-admin/Settings/index';
$route['ci-admin/settings/update']              = 'ci-admin/Settings/update';

// Default Routes
$route['default_controller']                    = 'Base';
$route['404_override']                          = '';
$route['translate_uri_dashes']                  = FALSE;
