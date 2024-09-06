<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Models\Portfolio;
use App\Models\Images_Add;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CPortfolio;
use App\Http\Controllers\HomeController;
use App\Models\Blog;
use App\Models\Categories;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

$path = 'App\Http\Controllers';
require __DIR__.'/auth.php';

// Redirect
Route::get('/', function () {
    return redirect('/ru');
});

///mainPage
Route::get('/{lang}', [HomeController::class, 'index'])->middleware('redirect');

//all blog
Route::get('/{lang}/admin/all-articles', function ($lang) {
    App::setLocale($lang);
    Paginator::useBootstrap();
    $blog = Blog::paginate(10);
    return view('allArticles', ['lang' => $lang, 'blog' => $blog]);
});

///add blog
Route::get('/{lang}/admin/add-article', function ($lang) {
    App::setLocale($lang);
    return view('addBlog', ['lang' => $lang]);
});
Route::post('/{lang}/admin/add-article', $path . '\CBlog@addBlog');

////edit blog
Route::get('/{lang}/admin/edit-article/{id}', function ($lang, $id) {
    App::setLocale($lang);
    $blog = Blog::where('id', $id)->get();
    return view('editBlog', ['lang' => $lang, 'id' => $id, 'blog' => $blog[0]]);
});
Route::post('/{lang}/admin/edit-article/{id}', $path . '\CBlog@editBlog');

// all portfolio
Route::get('/{lang}/admin/all-projects', function($lang) {
    App::setLocale($lang);
    Paginator::useBootstrap();
    $portfolio = Portfolio::paginate(10);
    return view('allProjects', ['lang'=>$lang, 'portfolio'=>$portfolio]);
})->middleware('auth');

// add portfolio
Route::get('/{lang}/admin/add-project' , [CPortfolio::class, 'addProject']);
Route::post('/{lang}/admin/add-project', $path . '\CPortfolio@addPortfolio');

// edit
Route::get('/{lang}/admin/edit-project/{id}' , [CPortfolio::class, 'editProject']);
Route::post('/{lang}/admin/edit-project/{id}', $path . '\CPortfolio@editPortfolio');

//services
Route::get('/{lang}/services', function ($lang) {
    App::setLocale($lang);
    $leftMenu = true;
    $currentPage = __('translate.services');
    return view('services', ['leftMenu' => $leftMenu, 'currentPage' => $currentPage, 'lang' => $lang]);
})->middleware('redirect');

//about-us
Route::get('/{lang}/about_us', function ($lang) {
    App::setLocale($lang);
    $leftMenu = false;
    $currentPage = __('translate.aboutUs');//"О нас";
    return view('about_us', ['leftMenu' => $leftMenu, 'currentPage' => $currentPage, 'lang' => $lang]);
})->middleware('redirect');

//portfolio
Route::get('/{lang}/portfolio', [CPortfolio::class, 'index'])->middleware('redirect');
Route::get('/{lang}/portfolio/{id}', [CPortfolio::class, 'showOnePortf'])->middleware('redirect');

//blog
Route::get('/{lang}/blog', function ($lang) {
    App::setLocale($lang);
    $leftMenu = true;
    $currentPage = __('translate.blog');
    $blog = Blog::offset(0)->limit(7)->get();
    return view('blog', ['blog' => $blog, 'leftMenu' => $leftMenu, 'currentPage' => $currentPage, 'lang' => $lang]);
})->middleware('redirect');
Route::get('/{lang}/blog/{id}', function ($lang, $id) {
    App::setLocale($lang);
    $leftMenu = true;
    $currentPage = "Блог";
    $blog = Blog::where('id', $id)->get();
    return view('oneArticleDetails', ['leftMenu' => $leftMenu, 'currentPage' => $currentPage, 'lang' => $lang, 'id' => $id, 'blog' => $blog[0]]);
})->middleware('redirect');

//contacts
Route::get('/{lang}/contacts', function ($lang) {
    App::setLocale($lang);
    $leftMenu = true;
    $currentPage = __('translate.contacts');
    return view('contacts', ['leftMenu' => $leftMenu, 'currentPage' => $currentPage, 'lang' => $lang]);
})->middleware('redirect');
//QA
Route::get('/{lang}/faq', function ($lang) {
    App::setLocale($lang);
    $leftMenu = true;
    $currentPage = "FAQ";
    return view('faq', ['leftMenu' => $leftMenu, 'currentPage' => $currentPage, 'lang' => $lang]);
})->middleware('redirect');


Route::post('/{lang}/admin/delete-project', $path . '\CPortfolio@destroy');
Route::post('/{lang}/ajax-portfolio', $path . '\CPortfolio@ajaxPortfolio');
Route::post('/{lang}/ajax-tmp', $path . '\CPortfolio@ajaxTmp');
Route::post('/{lang}/load-more/{pageOffset}/{type}',  $path . '\CPortfolio@showMore');


Route::post('/{lang}/ajax-blog', $path . '\CPortfolio@ajaxBlog');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
