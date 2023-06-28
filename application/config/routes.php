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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// // Routing API Karyawan Pribadi
// $route['api/karyawan_pribadi']                  = 'Karyawan/karyawan_pribadi/index';
// $route['api/karyawan_pribadi/tambah']           = 'Karyawan/karyawan_pribadi/addKaryawanpribadi';
// $route['api/karyawan_pribadi/(:any)']           = 'Karyawan/karyawan_pribadi/karyawanpribadi/$1';
// $route['api/karyawan_pribadi/edit/(:any)']      = 'Karyawan/karyawan_pribadi/updateKaryawanpribadi/$1';
// $route['api/karyawan_pribadi/hapus/(:any)']     = 'Karyawan/karyawan_pribadi/deleteKaryawanpribadi/$1';

// // Routing API Karyawan Masuk
// $route['api/karyawan_masuk']                  = 'Karyawan/Karyawan_masuk/index';
// $route['api/karyawan_masuk/tambah']           = 'Karyawan/karyawan_masuk/addKaryawanmasuk';
// $route['api/karyawan_masuk/(:any)']           = 'Karyawan/karyawan_masuk/karyawanmasuk/$1';
// $route['api/karyawan_masuk/edit/(:any)']      = 'Karyawan/karyawan_masuk/updateKaryawanmasuk/$1';
// $route['api/karyawan_masuk/hapus/(:any)']     = 'Karyawan/karyawan_masuk/deleteKaryawanmasuk/$1';

// // Routing API Karyawan
// $route['api/karyawan']                  = 'Karyawan/Karyawan/index';
// $route['api/karyawan/tambah']           = 'Karyawan/karyawan/addKaryawan';
// $route['api/karyawan/(:any)']           = 'Karyawan/karyawan/karyawan/$1';
// $route['api/karyawan/edit/(:any)']      = 'Karyawan/karyawan/updateKaryawan/$1';
// $route['api/karyawan/hapus/(:any)']     = 'Karyawan/karyawan/deleteKaryawan/$1';

// // Routing API Pelamar
// $route['api/pelamar']                  = 'Karyawan/pelamar/index';
// $route['api/pelamar/tambah']           = 'Karyawan/pelamar/addPelamar';
// $route['api/pelamar/edit/(:any)']      = 'Karyawan/pelamar/updatePelamar/$1';
// $route['api/pelamar/hapus/(:any)']     = 'Karyawan/pelamar/deletePelamar/$1';

// // Routing API Count
// $route['api/headcount']         = 'count/headcount/index';
// $route['api/count']             = 'count/count/index';

// // Routing API Divisi
// $route['api/divisi']                  = 'master/divisi/index';
// $route['api/divisi/tambah']           = 'master/divisi/addDivisi';
// $route['api/divisi/(:any)']           = 'master/divisi/divisi/$1';
// $route['api/divisi/edit/(:any)']      = 'master/divisi/updateDivisi/$1';
// $route['api/divisi/hapus/(:any)']     = 'master/divisi/deleteDivisi/$1';

// // Routing API Golongan
// $route['api/golongan']                  = 'master/golongan/index';
// $route['api/golongan/tambah']           = 'master/golongan/addGolongan';
// $route['api/golongan/(:any)']           = 'master/golongan/golongan/$1';
// $route['api/golongan/edit/(:any)']      = 'master/golongan/updateGolongan/$1';
// $route['api/golongan/hapus/(:any)']     = 'master/golongan/deleteGolongan/$1';

// // Routing API Jabatan
// $route['api/jabatan']                  = 'master/jabatan/index';
// $route['api/jabatan/tambah']           = 'master/jabatan/tambahJabatan';
// $route['api/jabatan/(:any)']           = 'master/jabatan/jabatan/$1';
// $route['api/jabatan/edit/(:any)']      = 'master/jabatan/updateJabatan/$1';
// $route['api/jabatan/hapus/(:any)']     = 'master/jabatan/deleteJabatan/$1';

// // Routing API Keluarga
// $route['api/keluarga']                  = 'master/keluarga/index';
// $route['api/keluarga/tambah']           = 'master/keluarga/addKeluarga';
// $route['api/keluarga/(:any)']           = 'master/keluarga/keluarga/$1';
// $route['api/keluarga/edit/(:any)']      = 'master/keluarga/updateKeluarga/$1';
// $route['api/keluarga/hapus/(:any)']     = 'master/keluarga/deleteKeluarga/$1';

// // Routing API Login
// $route['api/login']             = 'master/login/index';

// // Routing API Menu
// $route['api/menu']                  = 'master/menu/index';
// $route['api/menu/tambah']           = 'master/menu/addMenu';
// $route['api/menu/hapus/(:any)']     = 'master/menu/deleteMenu/$1';

// // Routing API Sub Menu
// $route['api/sub_menu']          = 'master/menu/subMenu';

// // Routing API Menu Akses
// $route['api/menu_akses']                  = 'master/menu/menuAkses';
// $route['api/menu_akses/tambah']           = 'master/menu/addmenuAkses';
// $route['api/menu_akses/hapus/(:any)']     = 'master/menu/deleteMenuakses/$1';

// // Routing API User
// $route['api/user']              = 'master/user/index';

// // Routing API Usergroup
// $route['api/usergroup']                  = 'master/usergroup/index';
// $route['api/usergroup/tambah']           = 'master/usergroup/addUserGroup';
// $route['api/usergroup/edit/(:any)']      = 'master/usergroup/updateUserGroup/$1';
// $route['api/usergroup/hapus/(:any)']     = 'master/usergroup/deleteUserGroup/$1';

// // Routing API MPP
// $route['api/mpp']                  = 'mpp/mpp/index';
// $route['api/mpp/tambah']           = 'mpp/mpp/addMpp';
// $route['api/mpp/edit/(:any)']      = 'mpp/mpp/updateMpp/$1';
// $route['api/mpp/hapus/(:any)']     = 'mpp/mpp/deleteMpp/$1';

// // Routing API THL
// $route['api/thl']                  = 'thl/thl/index';
// $route['api/thl/tambah']           = 'thl/thl/addThl';
// $route['api/thl/(:any)']           = 'thl/thl/thl/$1';
// $route['api/thl/edit/(:any)']      = 'thl/thl/updateThl/$1';
// $route['api/thl/hapus/(:any)']     = 'thl/thl/deleteThl/$1';