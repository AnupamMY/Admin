<!-- <?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'Home::index');
$routes->get('/user', 'Home::user');
$routes->get('/createUser',"Home::createUser");
$routes->post('/addUser',"Home::registerUser");
//Edit user
$routes->get("/editUser/(:num)",'Home::editUser/$1');
$routes->post("/updateUser/(:num)",'Home::updateUser/$1');
$routes->get('/register', 'Home::registerUser');
//delete user
$routes->get('/deleteUser/(:num)', 'Home::deleteUser/$1');

/// Camp

$routes->get("/campPage","Home::campTable");
$routes->get("/camp","Home::getCamp");
$routes->post("/addCamp","Home::addCamp");

//Edit camp
$routes->get("/editCamp/(:num)",'Home::editCamp/$1');
$routes->post("/updateCamp/(:num)",'Home::updateCamp/$1'); 

//delete camp
$routes->get('/deleteCamp/(:num)', 'Home::deleteCamp/$1');

//Login
 $routes->get("/","Users::login");
 $routes->post("/validateUser","Users::validateUser");
 //$routes->get("/logout","Home::logout");