<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
    //     return view('welcome');
    // })->name('home');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');  //ok
    Route::group(['middleware' => 'redirect'], function () {
    Route::get('info/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about');  //ok
    Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');     //ok
    Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');  //ok
    Route::get('/service', [App\Http\Controllers\HomeController::class, 'service'])->name('service');   //page not right
    Route::get('/cancellation-and-refund-policy', [App\Http\Controllers\HomeController::class, 'refund'])->name('refund');  //ok
    Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'term'])->name('term');  //ok
    Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');  //ok
    Route::get('/translation', [App\Http\Controllers\HomeController::class, 'translation'])->name('translation');  //not ok
    Route::post('/review', [App\Http\Controllers\HomeController::class, 'review'])->name('review');  //not ok
    Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
    Route::post('/inquiry', [App\Http\Controllers\HomeController::class, 'inquiry'])->name('contact.inquiry');
    Route::get('/uae-embassy-attestation', [App\Http\Controllers\HomeController::class, 'uae'])->name('uae.attension');
    Route::get('/global-korea-scholarship', [App\Http\Controllers\HomeController::class, 'scholarship'])->name('scholarship');
    Route::get('/country-sitemap.xml', [App\Http\Controllers\HomeController::class, 'country'])->name('country.sitemap');
    Route::get('/faq/search', [App\Http\Controllers\HomeController::class, 'search'])->name('faq.search');
    Route::get('/blog/{slug}', [App\Http\Controllers\HomeController::class, 'single'])->name('blog.single');
    Route::get('/translation/{slug}', [App\Http\Controllers\HomeController::class, 'product'])->name('product.single');
    Route::get('/city-sitemap.xml', [App\Http\Controllers\HomeController::class, 'city'])->name('city.sitemap');
    Route::get('/blog-sitemap.xml', [App\Http\Controllers\HomeController::class, 'blogSitemap'])->name('blog.sitemap');
    Route::get('/blog-sitemap.xml', [App\Http\Controllers\HomeController::class, 'blogSitemap'])->name('blog.sitemap');
    Route::get('/sitemap.xml', [App\Http\Controllers\HomeController::class, 'sitemap'])->name('sitemap');
    Route::get('/sitemap.html', [App\Http\Controllers\HomeController::class, 'sitemapHtml'])->name('sitemaphtml');
    Route::get('/apostille-meaning-in-kannada', function () {
        return view('kanada');
    })->name('kanada');
    Route::get('/apossitle', [App\Http\Controllers\HomeController::class, 'apossitle'])->name('apossitle');  //ok
    Route::get('/service/foreign-language-document-translation-services-india', [App\Http\Controllers\HomeController::class, 'translation'])->name('translation.service.foreign');
    Route::get('/{page}', [App\Http\Controllers\HomeController::class, 'page'])->name('page');
});
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');
        Route::get('/logout', [App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.logout');
        Route::group(['middleware' => 'adminauth'], function () {
            Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'dashboard'])->name('admin.dashboard');
            Route::get('/profile', [App\Http\Controllers\Admin\HomeController::class, 'profile'])->name('admin.profile');
            Route::post('/profile/update', [App\Http\Controllers\Admin\HomeController::class, 'profileUpdate'])->name('admin.profile.update');
            Route::resource('/blog/category', 'App\Http\Controllers\Admin\BlogCategoryController',['names'=>'admin.blog.category']);
            Route::resource('/blog', 'App\Http\Controllers\Admin\BlogController',['names'=>'admin.blog']);
            Route::resource('/inquiry', 'App\Http\Controllers\Admin\InquiryController',['names'=>'admin.inquiry']);
            Route::resource('/faq', 'App\Http\Controllers\Admin\FaqController',['names'=>'admin.faq']);
            Route::resource('/apositlle', 'App\Http\Controllers\Admin\ApositlleController',['names'=>'admin.apositlle']);
            Route::resource('/attension', 'App\Http\Controllers\Admin\AttensionController',['names'=>'admin.attension']);
            Route::resource('/product', 'App\Http\Controllers\Admin\ProductController',['names'=>'admin.product']);
            Route::resource('/category', 'App\Http\Controllers\Admin\CategoryController',['names'=>'admin.category']);
            Route::resource('/page', 'App\Http\Controllers\Admin\PageController',['names'=>'admin.page']);
            Route::resource('/youtube', 'App\Http\Controllers\Admin\YoutubeController',['names'=>'admin.youtube']);
            Route::resource('redirects', 'App\Http\Controllers\Admin\RedirectController',['names'=>'admin.redirect']);
            Route::resource('user', 'App\Http\Controllers\Admin\UserController',['names'=>'admin.users']);
            Route::get('/setting/head', [App\Http\Controllers\Admin\HomeController::class, 'head'])->name('admin.head');
            Route::post('/setting/head/update', [App\Http\Controllers\Admin\HomeController::class, 'head_update'])->name('admin.head.update');
            Route::get('/robot/editing', [App\Http\Controllers\Admin\HomeController::class, 'robotos'])->name('admin.robotos');
            Route::post('/robot/update', [App\Http\Controllers\Admin\HomeController::class, 'robotosChange'])->name('admin.robotos.update');
        });
    });
    Route::get('/{path}', [App\Http\Controllers\HomeController::class, 'redirect'])->where('path', '.*');