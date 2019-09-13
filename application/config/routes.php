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

$route['secure_admin_panel_admin_update'] = 'Panel_admin_page_admin';

$route['secure_admin_panel_admin_update_act'] = 'Panel_admin_page_admin/admin_update';

//---------------------------------admin yenileme hissesi-----------------------------




//---------------------------------Login hissesi-----------------------------

$route['secure_admin_panel_login_page'] = 'Panel_admin_page_login';

$route['secure_admin_panel_login_page_act'] = 'Panel_admin_page_login/login_act';

$route['secure_admin_panel_login_page_logout'] = 'Panel_admin_page_login/logout';


//---------------------------------Login hissesi-----------------------------




//----------------------------- (Kateqoriyasi olan tek dilli  portfolio hissesinin linkleri) portfolio kateqoriyalari---------------------------------------------------------------

//portfolio hissesi
$route['secure_admin_panel_portfolio'] = 'Panel_admin_page_portfolio';

//portfolio kateqoriyalari hissesi
$route['secure_admin_panel_portfolio_category'] = 'Panel_admin_page_portfolio/portfolio_category_list';

//portfolio kateqoriyalari elave etme hissesi
$route['secure_admin_panel_portfolio_category_add'] = 'Panel_admin_page_portfolio/portfolio_category_list_add';

//portfolio kateqoriyalari elave etme hissesinin actionu
$route['secure_admin_panel_portfolio_category_add_act'] = 'Panel_admin_page_portfolio/portfolio_category_list_add_act';

//portfolio kateqoriyalari yenileme hissesi
$route['secure_admin_panel_portfolio_category_update/(.*)'] = 'Panel_admin_page_portfolio/portfolio_category_list_update/$1';

//portfolio kateqoriyalari yenileme hissesi
$route['secure_admin_panel_portfolio_category_update_act/(.*)'] = 'Panel_admin_page_portfolio/portfolio_category_list_update_act/$1';

//portfolio kateqoriyalari silme hissesi
$route['secure_admin_panel_portfolio_category_delete/(.*)'] = 'Panel_admin_page_portfolio/portfolio_category_list_delete/$1';

//portfolio kateqoriyalari silme hissesi
$route['secure_admin_panel_portfolio_category_search'] = 'Panel_admin_page_portfolio/portfolio_search';


//----------------------------- (Kateqoriyasi olan tek dilli  portfolio hissesinin linkleri) portfolio kateqoriyalari---------------------------------------------------------------





//----------------------------- (Kateqoriyasi olan tek dilli  portfolio hissesinin linkleri) portfolio list hissesi---------------------------------------------------------------

//portfolio list hissesi
$route['secure_admin_panel_portfolio_list'] = 'Panel_admin_page_portfolio/portfolio_list';

//portfolio kateqoriyalari elave etme hissesi
$route['secure_admin_panel_portfolio_add'] = 'Panel_admin_page_portfolio/portfolio_list_add';

//portfolio kateqoriyalari elave etme hissesinin actionu
$route['secure_admin_panel_portfolio_add_act'] = 'Panel_admin_page_portfolio/portfolio_list_add_act';

//portfolio kateqoriyalari yenileme hissesi
$route['secure_admin_panel_portfolio_update/(.*)'] = 'Panel_admin_page_portfolio/portfolio_list_update/$1';

//portfolio kateqoriyalari yenileme hissesinin actionu
$route['secure_admin_panel_portfolio_update_act/(.*)'] = 'Panel_admin_page_portfolio/portfolio_list_update_act/$1';

//portfolio kateqoriyalari silme hissesi
$route['secure_admin_panel_portfolio_delete/(.*)'] = 'Panel_admin_page_portfolio/portfolio_list_delete/$1';

//portfolio listi filter hissesi
$route['secure_admin_panel_portfolio_filter'] = 'Panel_admin_page_portfolio/portfolio_filter';


//----------------------------- (Kateqoriyasi olan tek dilli  portfolio hissesinin linkleri) portfolio list hissesi---------------------------------------------------------------








//----------------------------- (Kateqoriyasi olan tek dilli  portfolio hissesinin linkleri) portfoliolarin qalereyasi hissesi---------------------------------------------------------------

//portfolio qalereya
$route['secure_admin_panel_portfolio_gallery/(.*)'] = 'Panel_admin_page_portfolio/portfolio_gallery/$1';


//portfolio qalereya elave etme
$route['secure_admin_panel_portfolio_gallery_add/(.*)'] = 'Panel_admin_page_portfolio/portfolio_gallery_add/$1';

//portfolio qalereya silme
$route['secure_admin_panel_portfolio_gallery_delete/(.*)/(.*)'] = 'Panel_admin_page_portfolio/portfolio_gallery_delete/$1/$2';

//portfolio qalereya refresh list
$route['secure_admin_panel_portfolio_gallery_refresh/(.*)'] = 'Panel_admin_page_portfolio/refresh_image_list_gallery/$1';

//portfolio qalereya profil sekli secme
$route['secure_admin_panel_portfolio_gallery_primary/(.*)/(.*)'] = 'Panel_admin_page_portfolio/portfolio_gallery_primary/$1/$2';


//portfolio qalereya secilen sekilleri silme
$route['secure_admin_panel_portfolio_gallery_delete_group/(.*)'] = 'Panel_admin_page_portfolio/prtfolio_gallery_delete_group/$1';

//portfolio qalereya hamsin silme
$route['secure_admin_panel_portfolio_gallery_delete_all/(.*)'] = 'Panel_admin_page_portfolio/prtfolio_gallery_delete_all/$1';

//----------------------------- (Kateqoriyasi olan tek dilli  portfolio hissesinin linkleri) portfoliolarin qalereyasi hissesi---------------------------------------------------------------








//----------------------------- (Kateqoriyasi olan 3 dilli  portfolio hissesinin linkleri) portfolio kateqoriyalari---------------------------------------------------------------

//portfolio hissesi
$route['secure_admin_panel_portfolio_ml'] = 'Panel_admin_page_portfolio_ml';

//portfolio kateqoriyalari hissesi
$route['secure_admin_panel_portfolio_category_ml'] = 'Panel_admin_page_portfolio_ml/portfolio_category_list';

//portfolio kateqoriyalari elave etme hissesi
$route['secure_admin_panel_portfolio_category_add_ml'] = 'Panel_admin_page_portfolio_ml/portfolio_category_list_add';

//portfolio kateqoriyalari elave etme hissesinin actionu
$route['secure_admin_panel_portfolio_category_add_act_ml'] = 'Panel_admin_page_portfolio_ml/portfolio_category_list_add_act';

//portfolio kateqoriyalari yenileme hissesi
$route['secure_admin_panel_portfolio_category_update_ml/(.*)'] = 'Panel_admin_page_portfolio_ml/portfolio_category_list_update/$1';

//portfolio kateqoriyalari yenileme hissesi
$route['secure_admin_panel_portfolio_category_update_act_ml/(.*)'] = 'Panel_admin_page_portfolio_ml/portfolio_category_list_update_act/$1';

//portfolio kateqoriyalari silme hissesi
$route['secure_admin_panel_portfolio_category_delete_ml/(.*)'] = 'Panel_admin_page_portfolio_ml/portfolio_category_list_delete/$1';

//----------------------------- (Kateqoriyasi olan 3 dilli  portfolio hissesinin linkleri) portfolio kateqoriyalari---------------------------------------------------------------





//----------------------------- (Kateqoriyasi olan 3 dilli  portfolio hissesinin linkleri) portfolio list hissesi---------------------------------------------------------------

//portfolio list hissesi
$route['secure_admin_panel_portfolio_list_ml'] = 'Panel_admin_page_portfolio_ml/portfolio_list';

//portfolio kateqoriyalari elave etme hissesi
$route['secure_admin_panel_portfolio_add_ml'] = 'Panel_admin_page_portfolio_ml/portfolio_list_add';

//portfolio kateqoriyalari elave etme hissesinin actionu
$route['secure_admin_panel_portfolio_add_act_ml'] = 'Panel_admin_page_portfolio_ml/portfolio_list_add_act';

//portfolio kateqoriyalari yenileme hissesi
$route['secure_admin_panel_portfolio_update_ml/(.*)'] = 'Panel_admin_page_portfolio_ml/portfolio_list_update/$1';

//portfolio kateqoriyalari yenileme hissesinin actionu
$route['secure_admin_panel_portfolio_update_act_ml/(.*)'] = 'Panel_admin_page_portfolio_ml/portfolio_list_update_act/$1';

//portfolio kateqoriyalari silme hissesi
$route['secure_admin_panel_portfolio_delete_ml/(.*)'] = 'Panel_admin_page_portfolio_ml/portfolio_list_delete/$1';

//----------------------------- (Kateqoriyasi olan 3 dilli  portfolio hissesinin linkleri) portfolio list hissesi---------------------------------------------------------------








//----------------------------- (Kateqoriyasi olan 3 dilli  portfolio hissesinin linkleri) portfoliolarin qalereyasi hissesi---------------------------------------------------------------

//portfolio qalereya
$route['secure_admin_panel_portfolio_gallery_ml/(.*)'] = 'Panel_admin_page_portfolio_ml/portfolio_gallery/$1';


//portfolio qalereya elave etme
$route['secure_admin_panel_portfolio_gallery_add_ml/(.*)'] = 'Panel_admin_page_portfolio_ml/portfolio_gallery_add/$1';

//portfolio qalereya silme
$route['secure_admin_panel_portfolio_gallery_delete_ml/(.*)/(.*)'] = 'Panel_admin_page_portfolio_ml/portfolio_gallery_delete/$1/$2';

//portfolio qalereya refresh list
$route['secure_admin_panel_portfolio_gallery_refresh_ml/(.*)'] = 'Panel_admin_page_portfolio_ml/refresh_image_list_gallery/$1';

//portfolio qalereya profil sekli secme
$route['secure_admin_panel_portfolio_gallery_primary_ml/(.*)/(.*)'] = 'Panel_admin_page_portfolio_ml/portfolio_gallery_primary/$1/$2';


//portfolio qalereya secilen sekilleri silme
$route['secure_admin_panel_portfolio_gallery_delete_group_ml/(.*)'] = 'Panel_admin_page_portfolio_ml/prtfolio_gallery_delete_group/$1';

//portfolio qalereya hamsin silme
$route['secure_admin_panel_portfolio_gallery_delete_all_ml/(.*)'] = 'Panel_admin_page_portfolio_ml/prtfolio_gallery_delete_all/$1';

//----------------------------- (Kateqoriyasi olan 3 dilli  portfolio hissesinin linkleri) portfoliolarin qalereyasi hissesi---------------------------------------------------------------










//------------------------------ (Kateqoriyasi olmayan tek dilli  portfolio hissesinin linkleri) portfoliolarin listi hissesi---------------------------------------------------------------

//portfolio listi hissesi
$route['secure_admin_panel_portfolio_list_woc'] = 'Panel_admin_page_portfolio_woc/portfolio_list';

//portfolio kateqoriyalari elave etme hissesi
$route['secure_admin_panel_portfolio_add_woc'] = 'Panel_admin_page_portfolio_woc/portfolio_list_add';

//portfolio kateqoriyalari elave etme hissesinin actionu
$route['secure_admin_panel_portfolio_add_act_woc'] = 'Panel_admin_page_portfolio_woc/portfolio_list_add_act';

//portfolio kateqoriyalari yenileme hissesi
$route['secure_admin_panel_portfolio_update_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/portfolio_list_update/$1';

//portfolio kateqoriyalari yenileme hissesinin actionu
$route['secure_admin_panel_portfolio_update_act_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/portfolio_list_update_act/$1';

//portfolio kateqoriyalari silme hissesi
$route['secure_admin_panel_portfolio_delete_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/portfolio_list_delete/$1';
//------------------------------ (Kateqoriyasi olmayan tek dilli  portfolio hissesinin linkleri) portfoliolarin listi hissesi---------------------------------------------------------------







//----------------------------- (Kateqoriyasi olmayan tek dilli  portfolio hissesinin linkleri) portfoliolarin qalereyasi hissesi---------------------------------------------------------------

//portfolio qalereya
$route['secure_admin_panel_portfolio_gallery_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/portfolio_gallery/$1';


//portfolio qalereya elave etme
$route['secure_admin_panel_portfolio_gallery_add_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/portfolio_gallery_add/$1';

//portfolio qalereya silme
$route['secure_admin_panel_portfolio_gallery_delete_woc/(.*)/(.*)'] = 'Panel_admin_page_portfolio_woc/portfolio_gallery_delete/$1/$2';

//portfolio qalereya refresh list
$route['secure_admin_panel_portfolio_gallery_refresh_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/refresh_image_list_gallery/$1';

//portfolio qalereya profil sekli secme
$route['secure_admin_panel_portfolio_gallery_primary_woc/(.*)/(.*)'] = 'Panel_admin_page_portfolio_woc/portfolio_gallery_primary/$1/$2';


//portfolio qalereya secilen sekilleri silme
$route['secure_admin_panel_portfolio_gallery_delete_group_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/prtfolio_gallery_delete_group/$1';

//portfolio qalereya hamsin silme
$route['secure_admin_panel_portfolio_gallery_delete_all_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/prtfolio_gallery_delete_all/$1';

//----------------------------- (Kateqoriyasi olmayan tek dilli  portfolio hissesinin linkleri) portfoliolarin qalereyasi hissesi---------------------------------------------------------------









//------------------------------ (Kateqoriyasi olmayan 3 dilli  portfolio hissesinin linkleri) portfoliolarin listi hissesi---------------------------------------------------------------

//portfolio listi hissesi
$route['secure_admin_panel_portfolio_list_woc_ml'] = 'Panel_admin_page_portfolio_woc_ml/portfolio_list';

//portfolio kateqoriyalari elave etme hissesi
$route['secure_admin_panel_portfolio_add_woc_ml'] = 'Panel_admin_page_portfolio_woc_ml/portfolio_list_add';

//portfolio kateqoriyalari elave etme hissesinin actionu
$route['secure_admin_panel_portfolio_add_act_woc_ml'] = 'Panel_admin_page_portfolio_woc_ml/portfolio_list_add_act';

//portfolio kateqoriyalari yenileme hissesi
$route['secure_admin_panel_portfolio_update_woc_ml/(.*)'] = 'Panel_admin_page_portfolio_woc_ml/portfolio_list_update/$1';

//portfolio kateqoriyalari yenileme hissesinin actionu
$route['secure_admin_panel_portfolio_update_act_woc_ml/(.*)'] = 'Panel_admin_page_portfolio_woc_ml/portfolio_list_update_act/$1';

//portfolio kateqoriyalari silme hissesi
$route['secure_admin_panel_portfolio_delete_woc_ml/(.*)'] = 'Panel_admin_page_portfolio_woc_ml/portfolio_list_delete/$1';
//------------------------------ (Kateqoriyasi olmayan 3 dilli  portfolio hissesinin linkleri) portfoliolarin listi hissesi---------------------------------------------------------------







//----------------------------- (Kateqoriyasi olmayan 3 dilli  portfolio hissesinin linkleri) portfoliolarin qalereyasi hissesi---------------------------------------------------------------

//portfolio qalereya
$route['secure_admin_panel_portfolio_gallery_woc_ml/(.*)'] = 'Panel_admin_page_portfolio_woc_ml/portfolio_gallery/$1';


//portfolio qalereya elave etme
$route['secure_admin_panel_portfolio_gallery_add_woc_ml/(.*)'] = 'Panel_admin_page_portfolio_woc_ml/portfolio_gallery_add/$1';

//portfolio qalereya silme
$route['secure_admin_panel_portfolio_gallery_delete_woc_ml/(.*)/(.*)'] = 'Panel_admin_page_portfolio_woc_ml/portfolio_gallery_delete/$1/$2';

//portfolio qalereya refresh list
$route['secure_admin_panel_portfolio_gallery_refresh_woc_ml/(.*)'] = 'Panel_admin_page_portfolio_woc_ml/refresh_image_list_gallery/$1';

//portfolio qalereya profil sekli secme
$route['secure_admin_panel_portfolio_gallery_primary_woc_ml/(.*)/(.*)'] = 'Panel_admin_page_portfolio_woc_ml/portfolio_gallery_primary/$1/$2';


//portfolio qalereya secilen sekilleri silme
$route['secure_admin_panel_portfolio_gallery_delete_group_woc_ml/(.*)'] = 'Panel_admin_page_portfolio_woc_ml/prtfolio_gallery_delete_group/$1';

//portfolio qalereya hamsin silme
$route['secure_admin_panel_portfolio_gallery_delete_all_woc_ml/(.*)'] = 'Panel_admin_page_portfolio_woc_ml/prtfolio_gallery_delete_all/$1';

//----------------------------- (Kateqoriyasi olmayan 3 dilli  portfolio hissesinin linkleri) portfoliolarin qalereyasi hissesi---------------------------------------------------------------









//----------------------------- Gallery hissesi---------------------------------------------------------------

// qalereya
$route['secure_admin_panel_gallery'] = 'Panel_admin_page_gallery/gallery';


// qalereya elave etme
$route['secure_admin_panel_gallery_add'] = 'Panel_admin_page_gallery/gallery_add';

// qalereya silme
$route['secure_admin_panel_gallery_delete/(.*)'] = 'Panel_admin_page_gallery/gallery_delete/$1';

// qalereya refresh list
$route['secure_admin_panel_gallery_refresh'] = 'Panel_admin_page_gallery/refresh_image_list_gallery';

// qalereya secilen sekilleri silme
$route['secure_admin_panel_gallery_delete_group'] = 'Panel_admin_page_gallery/gallery_delete_group';

// qalereya hamsin silme
$route['secure_admin_panel_gallery_delete_all'] = 'Panel_admin_page_gallery/gallery_delete_all';

//----------------------------- Gallery hissesi---------------------------------------------------------------



//-------------------- contact hissesi -----------------------
$route['secure_admin_panel_message'] = 'Panel_admin_page_contact1/index';
$route['secure_admin_panel_contact_act'] = 'Panel_admin_page_contact1/contact_update';
$route['secure_admin_panel_message_delete/(:any)'] = 'Panel_admin_page_contact1/delete_message/$1';
$route['secure_admin_panel_message_single/(:any)'] = 'Panel_admin_page_contact1/single_message/$1';
//-------------------- contact hissesi -----------------------

//-------------------- ABOUT hissesi -----------------------
$route['secure_admin_panel_about'] = 'Panel_admin_page_about/index';
$route['secure_admin_panel_about_act'] = 'Panel_admin_page_about/update';

$route['secure_admin_panel_about_ml'] = 'Panel_admin_page_about_ml/index';
$route['secure_admin_panel_about_act_ml'] = 'Panel_admin_page_about_ml/update';

//-------------------- ABOUT hissesi -----------------------




//============================================================Masin aksesuarlari sayti ucun linkler=============================

//-------------------- butun seyfeler olan hissesi-----------------------
$route['secure_admin_panel_car_main'] = 'Panel_admin_page_car_main/index';
//-------------------- butun seyfeler olan hissesi-----------------------


//-------------------- brend hissesi-----------------------
$route['secure_admin_panel_car_brand'] = 'Panel_admin_page_car_brands/brand';
$route['secure_admin_panel_car_brand_add'] = 'Panel_admin_page_car_brands/brand_add';
$route['secure_admin_panel_car_brand_add_act'] = 'Panel_admin_page_car_brands/brand_add_act';
$route['secure_admin_panel_car_brand_update/(.*)'] = 'Panel_admin_page_car_brands/brand_update/$1';
$route['secure_admin_panel_car_brand_update_act/(.*)'] = 'Panel_admin_page_car_brands/brand_update_act/$1';
$route['secure_admin_panel_car_brand_delete/(.*)'] = 'Panel_admin_page_car_brands/brand_delete/$1';
//-------------------- Brend hissesi -----------------------


//-------------------- Class hissesi-----------------------
$route['secure_admin_panel_car_brand_class'] = 'Panel_admin_page_car_class/brand_class';
$route['secure_admin_panel_car_class_list/(.*)'] = 'Panel_admin_page_car_class/car_class/$1';
$route['secure_admin_panel_car_class_add/(.*)'] = 'Panel_admin_page_car_class/class_add/$1';
$route['secure_admin_panel_car_class_add_act/(.*)'] = 'Panel_admin_page_car_class/class_add_act/$1';
$route['secure_admin_panel_car_class_update/(.*)/(.*)'] = 'Panel_admin_page_car_class/class_update/$1/$2';
$route['secure_admin_panel_car_class_update_act/(.*)/(.*)'] = 'Panel_admin_page_car_class/class_update_act/$1/$2';
$route['secure_admin_panel_car_class_delete/(.*)'] = 'Panel_admin_page_car_class/class_delete/$1';
//-------------------- Class hissesi -----------------------


//-------------------- Model hissesi-----------------------
$route['secure_admin_panel_car_brand_model'] = 'Panel_admin_page_car_model/classes';
$route['secure_admin_panel_car_model_list/(.*)'] = 'Panel_admin_page_car_model/car_model/$1';
$route['secure_admin_panel_car_model_add/(.*)'] = 'Panel_admin_page_car_model/model_add/$1';
$route['secure_admin_panel_car_model_add_act/(.*)'] = 'Panel_admin_page_car_model/model_add_act/$1';
$route['secure_admin_panel_car_model_update/(.*)/(.*)'] = 'Panel_admin_page_car_model/model_update/$1/$2';
$route['secure_admin_panel_car_model_update_act/(.*)/(.*)'] = 'Panel_admin_page_car_model/model_update_act/$1/$2';
$route['secure_admin_panel_car_model_delete/(.*)'] = 'Panel_admin_page_car_model/model_delete/$1';
$route['secure_admin_panel_car_model_update_ajax/(.*)'] = 'Panel_admin_page_car_model/model_ajax_update/$1';
$route['secure_admin_panel_car_model_update_ajax_select_tag/(.*)'] = 'Panel_admin_page_car_model/model_ajax_update_select_tag/$1';
$route['secure_admin_panel_car_model_update_ajax_img/(.*)'] = 'Panel_admin_page_car_model/model_ajax_update_img/$1';

//-------------------- Model hissesi -----------------------


//-------------------- Masin hisseleri hissesi -----------------------
$route['secure_admin_panel_car_parts'] = 'Panel_admin_page_car_parts/index';





//-------------------- Masin hisseleri hissesi -----------------------




//============================================================Masin aksesuarlari sayti ucun linkler=============================





//===================================Admin Panel linkleri===================



