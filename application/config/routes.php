<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['ci-admin']                      = 'Auth/login';
$route['ci-admin/dashboard']            = 'Dashboard';

$route['default_controller']            = 'Pages';
$route['404_override']                  = '';
$route['translate_uri_dashes']          = FALSE;
