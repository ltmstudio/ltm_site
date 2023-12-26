<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Models\Portfolio;
use App\Models\Images_Add;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

$path = 'App\Http\Controllers';

// Redirect
Route::get('/', function () {
    return redirect('/ru');
});

Route::get('/{lang}', function ($lang) {
    App::setLocale($lang);
    $leftMenu = true;
    $currentPage = "Главная";
    return view('mainPage', ['leftMenu' => $leftMenu, 'currentPage' => $currentPage, 'lang' => $lang]);
});
// add
Route::get('/{lang}/admin/add-project', function ($lang) {
    App::setLocale($lang);
    return view('addProject', ['lang' => $lang]);
});
Route::post('/{lang}/admin/add-project', $path . '\CPortfolio@addPortfolio');

// edit
Route::get('/{lang}/admin/edit-project/{id}', function ($lang, $id) {
    App::setLocale($lang);
    // $portfolio = Portfolio::where('id', $id)->get();
    // return view('editProjects', ['lang' => $lang, 'id' => $id, 'portfolio' => $portfolio[0]]);
});
Route::post('/{lang}/admin/edit-project/{id}', $path . '\CPortfolio@editPortfolio');

// all
// Route::put('/{lang}/admin/all-projects', function($lang)
// {
//     App::setLocale($lang);
//     return view('allProjects', ['lang' =>$lang]);
// });

Route::get('/{lang}/admin/all-projects', function ($lang) {
    App::setLocale($lang);
    Paginator::useBootstrap();
    // $portfolio = Portfolio::paginate(10);
    // return view('allProjects', ['lang' => $lang, 'portfolio' => $portfolio]);
});

Route::get('/{lang}/services', function ($lang) {
    App::setLocale($lang);
    $leftMenu = true;
    $currentPage = "Услуги";
    return view('services', ['leftMenu' => $leftMenu, 'currentPage' => $currentPage, 'lang' => $lang]);
});

Route::get('/{lang}/about_us', function ($lang) {
    App::setLocale($lang);
    $leftMenu = false;
    $currentPage = "О нас";
    return view('about_us', ['leftMenu' => $leftMenu, 'currentPage' => $currentPage, 'lang' => $lang]);
});

Route::get('/{lang}/portfolio', function ($lang) {
    App::setLocale($lang);
    $leftMenu = false;
    $currentPage = "Проекты";
    // $portfolio = Portfolio::paginate(10);
    // $portfolio = Portfolio::offset(0)->limit(5)->get();
    // return view('portfolio', ['portfolio' => $portfolio, 'leftMenu' => $leftMenu, 'currentPage' => $currentPage, 'lang' => $lang]);
});

// Load More Portfolio Items
// Route::get('/{lang}/portfolio/load-more', function (Request $request, $lang) {
//     App::setLocale($lang);
//     $page = $request->input('page', 1);
//     $portfolio = Portfolio::paginate(6, ['*'], 'page', $page);
//     return view('partials.portfolio_items', ['portfolio' => $portfolio]);
// });

// Route::get('/{lang}/portfolio/load-more', function (Request $request, $lang) {
//     App::setLocale($lang);
//     $page = $request->input('page', 1); // Get the current page from the request
//     $portfolio = Portfolio::paginate(3, ['*'], 'page', $page);
//     return view('partials.portfolio_items', ['portfolio' => $portfolio]);
// });

Route::get('/{lang}/portfolio/{id}', function ($lang, $id) {
    App::setLocale($lang);
    $leftMenu = true;
    $currentPage = "Проекты";
    // $portfolio = Portfolio::where('id', $id)->get();
    // $images_add = Images_Add::where('portfolio_id', $id)->get();
    // return view('oneProjectDetails', ['leftMenu' => $leftMenu, 'currentPage' => $currentPage, 'lang' => $lang, 'id' => $id, 'portfolio' => $portfolio[0], 'images_add' => $images_add]);
});

Route::get('/{lang}/blog', function ($lang) {
    App::setLocale($lang);
    $leftMenu = true;
    $currentPage = "Блог12";
    return view('blog', ['leftMenu' => $leftMenu, 'currentPage' => $currentPage, 'lang' => $lang]);
});

Route::get('/{lang}/contacts', function ($lang) {
    App::setLocale($lang);
    $leftMenu = true;
    $currentPage = "Контакты";
    return view('contacts', ['leftMenu' => $leftMenu, 'currentPage' => $currentPage, 'lang' => $lang]);
});
Route::get('/{lang}/faq', function ($lang) {
    App::setLocale($lang);
    $leftMenu = true;
    $currentPage = "FAQ";
    return view('faq', ['leftMenu' => $leftMenu, 'currentPage' => $currentPage, 'lang' => $lang]);
});


Route::post('/{lang}/ajax-portfolio', $path . '\CPortfolio@ajaxPortfolio');
Route::post('/{lang}/ajax-tmp', $path . '\CPortfolio@ajaxTmp');

