<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('MahasiswaController');
$routes->setDefaultMethod('listMahasiswa');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('latihan1','LatihanController::getLatihanSatu');
//$routes->get('latihan2','LatihanController::getLatihanDua');
// $routes->get('mahasiswa/test/(:any)','MahasiswaController::listMahasiswa/$1', ['as' => 'mhs_index']);

$routes->get('/', 'HomeController::index',['filter' => 'auth']);
$routes->group('mahasiswa', ['filter' => 'auth'], function($routes)
{
    // $routes->get('/','MahasiswaController::cariMahasiswa');
    $routes->get('/','MahasiswaController::listMahasiswa');
    $routes->get('create','MahasiswaController::createMahasiswa');
    $routes->post('store','MahasiswaController::insertorUpdateMahasiswa', ['as' => 'mhs_store']);
    $routes->get('detail/(:any)', 'MahasiswaController::detailMahasiswa/$1');
    $routes->get('edit/(:any)', 'MahasiswaController::editMahasiswa/$1');
    $routes->get('delete/(:any)', 'MahasiswaController::deleteMahasiswa/$1');
});
$routes->get('/signup','RegisterController::index');
$routes->get('/signin','LoginController::index');
$routes->group('auth', function($routes)
{
    $routes->post('register','RegisterController::save');
    $routes->post('login','LoginController::auth');
    $routes->get('logout','LoginController::logout');
});



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
