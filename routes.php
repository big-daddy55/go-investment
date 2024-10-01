<?php

// return  [
// '/' => 'controllers/index.php',
// '/admin/teachers/create' => 'controllers/admin/teacher-create.php',
// '/admin/teachers' => 'controllers/teacher-show.php',
// '/admin/dashboard' => 'controllers/admin/index.php',
// ];

        /* ------------------- Guest Routes ------------------- */
$router->get('/boot', 'controllers/boots.php');
$router->get('/', 'controllers/guest/index.php')->only('guest');
$router->get('/about', 'controllers/guest/about.php')->only('guest');
$router->get('/terms', 'controllers/guest/terms.php')->only('guest');
$router->get('/privacy', 'controllers/guest/privacy.php')->only('guest');
$router->get('/careers', 'controllers/guest/career.php')->only('guest');
$router->get('/partner-with-us', 'controllers/guest/partner-us.php')->only('guest');
$router->get('/partners', 'controllers/guest/partners.php')->only('guest');
$router->get('/contact', 'controllers/guest/contact.php')->only('guest');
$router->get('/news', 'controllers/guest/news.php');
$router->get('/listing', 'controllers/company/listing.php');
$router->get('/faq', 'controllers/guest/faq.php');
$router->get('/affiliate', 'controllers/guest/affiliate.php')->only('guest');
$router->get('/how-it-works', 'controllers/guest/how-it-works.php')->only('guest');
$router->get('/what-we-do', 'controllers/guest/what-we-do.php')->only('guest');

$router->get('/login', 'controllers/guest/sessions/create.php')->only('guest');
$router->get('/register', 'controllers/guest/sessions/account.php')->only('guest');
$router->post('/account_type', 'controllers/guest/sessions/account_type.php')->only('guest');
$router->get('/register-business', 'controllers/company/create.php')->only('guest');
$router->post('/register-business', 'controllers/company/store.php')->only('guest');
$router->get('/register-individual', 'controllers/guest/account/create.php')->only('guest');
$router->post('/register-individual', 'controllers/guest/account/store.php')->only('guest');
$router->post('/login', 'controllers/guest/sessions/store.php')->only('guest');
$router->delete('/logout', 'controllers/guest/sessions/destroy.php')->only('auth');
$router->delete('/sessions', 'controllers/guest/sessions/destroy.php')->only('auth');
$router->get('/market-activity', 'controllers/user/index.php');
$router->post('/deposit', 'controllers/api/paystack-pay.php');
$router->get('/checkout', 'controllers/api/inline-payment.php');
$router->post('/checkout', 'controllers/api/inline-payment.php');  
$router->post('/callback', 'controllers/api/paystack_callback.php');


$router->get('/user/home', 'controllers/user/index.php')->only('user');
$router->get('/user/product', 'controllers/user/product.php')->only('user');
$router->get('/user/portfolio', 'controllers/user/portfolio.php')->only('user');
// $router->post('/user/pay', 'controllers/user/pay.php')->only('user');
$router->post('/user/withdraw', 'controllers/user/withdraw.php')->only('user');
$router->post('/user/payment', 'controllers/user/process_payment.php');
$router->get('/user/wallet', 'controllers/user/wallet.php');
// $router->get('/user/callback', 'api/paystack_callback.php');

// $router->get('/user/dashboard', 'controllers/user/dashboard.php');
$router->get('/user/settings', 'controllers/user/settings.php');
$router->post('/settings', 'controllers/user/profile/update.php');
$router->post('/success-page', 'controllers/user/success.php');
$router->get('/user/complete-profile', 'controllers/user/profile/create.php');
$router->post('/user/complete-profile', 'controllers/user/profile/store.php');
$router->post('/user/invest', 'controllers/user/invest.php');
$router->get('/market-data', 'controllers/user/api/market-data-api.php');


$router->get('/company/market', 'controllers/company/market.php')->only('business');
$router->get('/company/home', 'controllers/company/homepage.php')->only('business');
$router->get('/company/listing', 'controllers/company/listing.php')->only('business');
$router->get('/company/wallet', 'controllers/company/wallet.php')->only('business');
$router->get('/company/settings', 'controllers/company/settings.php')->only('business');
$router->get('/company/daily-revenue', 'controllers/company/daily-revenue.php')->only('business');
$router->post('/company/revenue/save', 'controllers/company/revenue/store.php')->only('business');
$router->post('/company/profile/update', 'controllers/company/profile/update.php')->only('business');
$router->get('/company/status', 'controllers/company/status.php')->only('business');
$router->get('/company/help', 'controllers/company/help.php');
$router->get('/company/report', 'controllers/company/report.php')->only('business');
$router->get('/company/promotion', 'controllers/company/promotion.php')->only('business');
$router->get('/company/complete', 'controllers/company/complete.php')->only('business');
$router->get('/company/product/list', 'controllers/company/product/list.php')->only('business');
$router->post('/company/product/add', 'controllers/company/product/store.php')->only('business');
$router->post('/list', 'controllers/company/list.php')->only('business');
$router->post('/update', 'controllers/company/update.php')->only('business');

?>