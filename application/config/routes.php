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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//===================================Admin Panel linkleri===================


//---------------------------------admin yenileme hissesi-----------------------------

$route['utech_admin_panel_admin_update'] = 'Panel_admin_page_admin';

$route['utech_admin_panel_admin_update_act'] = 'Panel_admin_page_admin/admin_update';

//---------------------------------admin yenileme hissesi-----------------------------




//---------------------------------Login hissesi-----------------------------

$route['utech_admin_panel_login_page'] = 'Panel_admin_page_login';

$route['utech_admin_panel_login_page_act'] = 'Panel_admin_page_login/login_act';

$route['utech_admin_panel_login_page_logout'] = 'Panel_admin_page_login/logout';


//---------------------------------Login hissesi-----------------------------



//portfolio hissesi
$route['utech_admin_panel_portfolio'] = 'Panel_admin_page_portfolio';

//-----------------------------portfolio kateqoriyalari---------------------------------------------------------------
//portfolio kateqoriyalari hissesi
$route['utech_admin_panel_portfolio_category'] = 'Panel_admin_page_portfolio/portfolio_category_list';

//portfolio kateqoriyalari elave etme hissesi
$route['utech_admin_panel_portfolio_category_add'] = 'Panel_admin_page_portfolio/portfolio_category_list_add';

//portfolio kateqoriyalari elave etme hissesinin actionu
$route['utech_admin_panel_portfolio_category_add_act'] = 'Panel_admin_page_portfolio/portfolio_category_list_add_act';

//portfolio kateqoriyalari yenileme hissesi
$route['utech_admin_panel_portfolio_category_update/(.*)'] = 'Panel_admin_page_portfolio/portfolio_category_list_update/$1';

//portfolio kateqoriyalari yenileme hissesi
$route['utech_admin_panel_portfolio_category_update_act/(.*)'] = 'Panel_admin_page_portfolio/portfolio_category_list_update_act/$1';

//portfolio kateqoriyalari silme hissesi
$route['utech_admin_panel_portfolio_category_delete/(.*)'] = 'Panel_admin_page_portfolio/portfolio_category_list_delete/$1';

//-----------------------------portfolio kateqoriyalari---------------------------------------------------------------





//-----------------------------portfolio list hissesi---------------------------------------------------------------

//portfolio list hissesi
$route['utech_admin_panel_portfolio_list'] = 'Panel_admin_page_portfolio/portfolio_list';

//portfolio kateqoriyalari elave etme hissesi
$route['utech_admin_panel_portfolio_add'] = 'Panel_admin_page_portfolio/portfolio_list_add';

//portfolio kateqoriyalari elave etme hissesinin actionu
$route['utech_admin_panel_portfolio_add_act'] = 'Panel_admin_page_portfolio/portfolio_list_add_act';

//portfolio kateqoriyalari yenileme hissesi
$route['utech_admin_panel_portfolio_update/(.*)'] = 'Panel_admin_page_portfolio/portfolio_list_update/$1';

//portfolio kateqoriyalari yenileme hissesinin actionu
$route['utech_admin_panel_portfolio_update_act/(.*)'] = 'Panel_admin_page_portfolio/portfolio_list_update_act/$1';

//portfolio kateqoriyalari silme hissesi
$route['utech_admin_panel_portfolio_delete/(.*)'] = 'Panel_admin_page_portfolio/portfolio_list_delete/$1';

//-----------------------------portfolio list hissesi---------------------------------------------------------------








//-----------------------------portfoliolarin qalereyasi hissesi---------------------------------------------------------------

//portfolio qalereya
$route['utech_admin_panel_portfolio_gallery/(.*)'] = 'Panel_admin_page_portfolio/portfolio_gallery/$1';


//portfolio qalereya elave etme
$route['utech_admin_panel_portfolio_gallery_add/(.*)'] = 'Panel_admin_page_portfolio/portfolio_gallery_add/$1';

//portfolio qalereya silme
$route['utech_admin_panel_portfolio_gallery_delete/(.*)/(.*)'] = 'Panel_admin_page_portfolio/portfolio_gallery_delete/$1/$2';

//portfolio qalereya refresh list
$route['utech_admin_panel_portfolio_gallery_refresh/(.*)'] = 'Panel_admin_page_portfolio/refresh_image_list_gallery/$1';

//portfolio qalereya profil sekli secme
$route['utech_admin_panel_portfolio_gallery_primary/(.*)/(.*)'] = 'Panel_admin_page_portfolio/portfolio_gallery_primary/$1/$2';


//portfolio qalereya secilen sekilleri silme
$route['utech_admin_panel_portfolio_gallery_delete_group/(.*)'] = 'Panel_admin_page_portfolio/prtfolio_gallery_delete_group/$1';

//portfolio qalereya hamsin silme
$route['utech_admin_panel_portfolio_gallery_delete_all/(.*)'] = 'Panel_admin_page_portfolio/prtfolio_gallery_delete_all/$1';

//-----------------------------portfoliolarin qalereyasi hissesi---------------------------------------------------------------






//-------------------- contact hissesi -----------------------
$route['utech_admin_panel_message'] = 'Panel_admin_page_contact/index';
$route['utech_admin_panel_message_delete/(:any)'] = 'Panel_admin_page_contact/delete_message/$1';
$route['utech_admin_panel_message_single/(:any)'] = 'Panel_admin_page_contact/single_message/$1';
//-------------------- contact hissesi -----------------------




//-------------------------------Servis Hissesi-------------------

$route['utech_admin_panel_services'] = 'Panel_admin_page_services/index';
$route['utech_admin_panel_services_elave_et'] = 'Panel_admin_page_services/AddService';
$route['utech_admin_panel_services_elave_etme'] = 'Panel_admin_page_services/AddServiceAct';
$route['utech_admin_panel_services_yenile/(.*)'] = 'Panel_admin_page_services/UpdateService/$1';
$route['utech_admin_panel_services_yenileme/(.*)'] = 'Panel_admin_page_services/UpdateServiceAct/$1';
$route['utech_admin_panel_services_sil/(.*)'] = 'Panel_admin_page_services/DeleteService/$1';

//-------------------------------Servis Hissesi-------------------


//-------------------------------emekdasliq Hissesi-------------------


$route['utech_admin_panel_partners'] = 'Panel_admin_page_partners/index';
$route['utech_admin_panel_partners_add'] = 'Panel_admin_page_partners/partners_add';
$route['utech_admin_panel_partners_add_act'] = 'Panel_admin_page_partners/partners_add_act';
$route['utech_admin_panel_partners_update/(.*)'] = 'Panel_admin_page_partners/partners_update/$1';
$route['utech_admin_panel_partners_update_act/(.*)'] = 'Panel_admin_page_partners/partners_update_act/$1';
$route['utech_admin_panel_partners_delete/(.*)'] = 'Panel_admin_page_partners/partners_delete/$1';


//-------------------------------emekdasliq Hissesi-------------------














//===================================Admin Panel linkleri===================









//===================================Front hissesi==========================

//about hissesi
$route['about'] = 'About/index';
$route['why_us'] = 'Why_us/index';


//portfolio hissesi
$route['portfolio'] = 'Portfolio/index';

//portfolio single hissesi
$route['portfolio_single/(.*)'] = 'Portfolio_single/page/$1';



//-------------------- contact hissesi -----------------------
$route['Contact'] = 'Contact/index';
$route['Send_Message'] = 'Contact/send_message';
//-------------------- contact hissesi -----------------------



//===================================Front hissesi==========================
