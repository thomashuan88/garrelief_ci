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

$route['default_controller'] = "mainpage";

$route['aboutus/mission'] = "mainpage/mission";
$route['aboutus/how_we_work'] = "mainpage/how_we_work";
$route['aboutus/founder'] = "mainpage/founder";

$route['projects/elementary_school'] = "mainpage/elementary";
$route['projects/clinic'] = "mainpage/clinic";
$route['projects/elder_care'] = "mainpage/elder";
$route['projects/vision'] = "mainpage/vision";

$route['learnmore/region'] = "mainpage/region";
$route['learnmore/education'] = "mainpage/education";
$route['learnmore/elder_care'] = "mainpage/elder2";
$route['learnmore/health_care'] = "mainpage/health";

$route['contact/contactus'] = "mainpage/contactus";

$route['donate/donate'] = "mainpage/donate";
$route['donate/paypal'] = "mainpage/paypal";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */