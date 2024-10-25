<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Category_One_Project;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Images_Add;
use Illuminate\Support\Facades\App;

// use App\Models\Images_Add;


class CPortfolio extends Controller
{

    public function index($lang)
    {
        App::setLocale($lang);
        $portfolio = Portfolio::orderBy('when', 'desc')
            ->offset(0)
            ->limit(6)
            ->get();
        $categories = Categories::all();
        $currentPage = "";
        return view('portfolio', [
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
        // echo "<pre>";
// var_dump($categories);
// echo "</pre>";
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
    public function addProject($lang)
    {
        $categories = Categories::all();
        return view('addProject', ['lang' => $lang, 'categories' => $categories]);
    }

    public function addPortfolio(Request $req, $lang)
    {
        $portfolio = new Portfolio;
        $portfolio->urlButton = $req->urlButton;
        $portfolio->customer = $req->customer;
        $portfolio->curator = $req->curator ?? null;
        $portfolio->devNames = $req->devNames;
        $portfolio->isMainPage = $req->isMainPage ?? 0;
        $portfolio->photo = $req->file('image')->store('portfolio-image');
        $portfolio->when = $req->when;

        $portfolio->title_tm = $req->title_tm;
        $portfolio->who_tm = $req->who_tm;
        $portfolio->desc_tm = $req->desc_tm;
        $portfolio->target_tm = $req->target_tm;
        $portfolio->res_tm = $req->res_tm;
        $portfolio->what_was_done_tm = $req->what_was_done_tm;

        $portfolio->title_ru = $req->title_ru;
        $portfolio->who_ru = $req->who_ru;
        $portfolio->desc_ru = $req->desc_ru;
        $portfolio->target_ru = $req->target_ru;
        $portfolio->res_ru = $req->res_ru;
        $portfolio->what_was_done_ru = $req->what_was_done_ru;

        $portfolio->title_en = $req->title_en;
        $portfolio->who_en = $req->who_en;
        $portfolio->desc_en = $req->desc_en;
        $portfolio->target_en = $req->target_en;
        $portfolio->res_en = $req->res_en;
        $portfolio->what_was_done_en = $req->what_was_done_en;

        $images = $req->imagess;
        $category_what = $req->what;
        $portfolio->save();
        foreach ($category_what as $cat) {
            $cat_id = Categories::where('categories.id', $cat)->get();
            $cats_what = new Category_One_Project;
            $cats_what->portfolio_id = $portfolio->id;
            $cats_what->category_id = $cat_id[0]['id'];
            $cats_what->save();
        }
        foreach ($images as $img) {
            $images_portf = new Images_Add;
            $images_portf->portfolio_id = $portfolio->id;
            $images_portf->image_portf = $img;
            $images_portf->save();
        }
        return redirect('/' . $lang . '/admin/all-projects');
    }
    public function categories()
    {
        return $this->belongsToMany(Categories::class);
    }
    public function editProject($lang, $id)
    {
        // $portfolio = Portfolio::where('id', $id)->get();
        $images_add = Images_Add::where('portfolio_id', $id)->get();
        $categories = Categories::all();
        $portfolio = Portfolio::with('categories')->find($id);
        $selectedCategoryIds = $portfolio->categories->pluck('id')->toArray();  // Get current category IDs
        return view('editProjects', ['lang' => $lang, 'id' => $id, 'portfolio' => $portfolio, 'images_add' => $images_add, 'categories' => $categories, 'selectedCategoryIds' => $selectedCategoryIds]);
    }
    public function editPortfolio(Request $req, $lang, $id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->urlButton = $req->urlButton;
        $portfolio->customer = $req->customer;
        $portfolio->curator = $req->curator ?? null;
        $portfolio->devNames = $req->devNames;
        $portfolio->isMainPage = $req->isMainPage;
        if (isset($req->image)) {
            $portfolio->photo = $req->file('image')->store('portfolio-image');
        }
        $portfolio->when = $req->when;
        $portfolio->title_tm = $req->title_tm;
        $portfolio->who_tm = $req->who_tm;
        $portfolio->desc_tm = $req->desc_tm;
        $portfolio->target_tm = $req->target_tm;
        $portfolio->res_tm = $req->res_tm;
        $portfolio->what_was_done_tm = $req->what_was_done_tm;

        $portfolio->title_ru = $req->title_ru;
        $portfolio->who_ru = $req->who_ru;
        $portfolio->desc_ru = $req->desc_ru;
        $portfolio->target_ru = $req->target_ru;
        $portfolio->res_ru = $req->res_ru;
        $portfolio->what_was_done_ru = $req->what_was_done_ru;

        $portfolio->title_en = $req->title_en;
        $portfolio->who_en = $req->who_en;
        $portfolio->desc_en = $req->desc_en;
        $portfolio->target_en = $req->target_en;
        $portfolio->res_en = $req->res_en;
        $portfolio->what_was_done_en = $req->what_was_done_en;

        if ($req->has('what')) {
            $portfolio->categories()->sync($req->what);
        }
        if ($req->has('imagess')) {
            $images = $req->imagess;
            foreach ($images as $img) {
                $images_portf = new Images_Add;
                $images_portf->portfolio_id = $portfolio->id;
                $images_portf->image_portf = $img;
                $images_portf->save();
            }
        }
        if ($req->has('deleteImages')) {
            foreach ($req->deleteImages as $imageId) {
                $image = Images_Add::find($imageId);
                if ($image) {
                    // Storage::delete($image->image_portf); 
                    $image->delete();
                }
            }
        }
        $portfolio->save();
        return redirect('/' . $lang . '/admin/all-projects');
    }
    public function destroy($lang, Request $req)
    {
        $project = Portfolio::find($req->id);
        if ($project) {
            Category_One_Project::where('portfolio_id', $project->id)->delete();
            $project->delete();
            return true;
        } else {
            return false;
        }
    }
    public function ajaxPortfolio(Request $req)
    {
        $baseQuery = Portfolio::query()
            ->join('category_portfolio', 'portfolio.id', '=', 'category_portfolio.portfolio_id') // Correct table and field names
            ->join('categories', 'category_portfolio.category_id', '=', 'categories.id')
            ->select('portfolio.*', 'categories.category_en as category_name') // Use category_en instead of name
            ->orderBy('portfolio.when', 'desc')
            ->offset(0)
            ->limit(6);
        if ($req->category == "All") {
            $portfolio = Portfolio::orderBy('when', 'desc') // Sort by 'when' field, descending
                ->offset(0)
                ->limit(6)
                ->get();
        } else {
            $portfolio = $baseQuery->where('categories.category_en', '=', $req->category)->get();
        }
        // $portfolios = $baseQuery->get();
        $json = json_encode($portfolio);
        return $json;
    }

    public function ajaxTmp(Request $req, string $lang)
    {
        // echo $req->file('imagess');
        $image_desc = array();
        $images = $req->file('imagess');
        foreach ($images as $img) {
            $img->store('tmp');
            array_push($image_desc, $img->store('tmp'));
        }
        $json = json_encode($image_desc);
        echo $json;
    }

    public function showMore(string $lang, $pageOffset, $type)
    {
        $baseQuery = Portfolio::query()
            ->join('category_portfolio', 'portfolio.id', '=', 'category_portfolio.portfolio_id') // Correct table and field names
            ->join('categories', 'category_portfolio.category_id', '=', 'categories.id')
            ->select('portfolio.*', 'categories.category_en as category_name'); // Use category_en instead of name
        if ($type != 'All') {
            $portfolio = $baseQuery->where('categories.category_en', '=', $type)->orderBy('when', 'desc')->offset($pageOffset)->limit(3)->get();
            // dd($portfolio);
// var_dump($portfolio);
            // $portfolio = Portfolio::where('what', $type)->orderBy('when', 'desc')->offset($pageOffset)->limit(3)->get();
        } else {
            $portfolio = Portfolio::offset($pageOffset)->orderBy('when', 'desc')->limit(3)->get();
        }
        $json = json_encode($portfolio);
        return $json;
    }
    // public function showMore(string $lang, $pageOffset, $type)
    // {
    //     $baseQuery = Portfolio::query()
    // ->join('category_portfolio', 'portfolio.id', '=', 'category_portfolio.portfolio_id') // Correct table and field names
    // ->join('categories', 'category_portfolio.category_id', '=', 'categories.id')
    // ->select('portfolio.*', 'categories.category_en as category_name') // Use category_en instead of name
    // ->orderBy('portfolio.when', 'desc')
    // ->offset(0)
    // ->limit(3); 
    //     if($type!='All')
    //     {
    //         $portfolio = $baseQuery->where('categories.category_en',$type)->get(); 
    //         // $portfolio = Portfolio::where('what', $type)->orderBy('when', 'desc')->offset($pageOffset)->limit(3)->get();
    //     } else {
    //         $portfolio = Portfolio::offset($pageOffset)->orderBy('when', 'desc')->limit(3)->get();
    //     }
    //     $json = json_encode($portfolio);
    //     return $json;
    // }
}


