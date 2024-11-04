<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Category_One_Project;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Images_Add;
use Illuminate\Support\Facades\App;

// use App\Models\Images_Add;


class ProjSliderController extends Controller
{

    public function index($lang)
    {
        App::setLocale($lang);
    
        $portfolio = Portfolio::orderBy('when', 'desc')
            ->get(); // Возвращает коллекцию данных
    
        // Проверка, что данные действительно получены
        if ($portfolio->isEmpty()) {
            dd('Нет данных в портфолио');
        }
    
        $categories = Categories::all();
        $currentPage = "";
    
        return view('webpage', [
            'portfolio' => $portfolio,
            'categories' => $categories,
            'leftMenu' => true,
            'currentPage' => $currentPage,
            'lang' => $lang
        ]);
    }
    public function showOnePortf($lang, $id)
    {
        App::setLocale($lang);
        $portfolio = Portfolio::where('id', $id)->get();
        $images_add = Images_Add::where('portfolio_id', $id)->get();
        $categories = Categories::all();
        $catPortf = Category_One_Project::where('portfolio_id', $id)->get();
        $categories = [];
        foreach ($catPortf as $item) {
            $catData = Categories::where('id', $item->category_id)->get();
            if (!$catData->isEmpty()) {
                $categories[] = $catData;
            }
        }
        return view('oneProjectDetails', [
            'portfolio' => $portfolio[0],
            'categories' => $categories,
            'leftMenu' => true,
            'currentPage' => 'Проекты',
            'lang' => $lang,
            'id' => $id,
            'images_add' => $images_add,
            'categories' => $categories,
        ]);
    }
}