<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Images_Add;

// use App\Models\Images_Add;


class CPortfolio extends Controller
{
    public function addPortfolio(Request $req, $lang){
        $portfolio = new Portfolio;
        $portfolio->urlButton = $req->urlButton;
        $portfolio->customer = $req->customer;
        $portfolio->curator = $req->curator;
        $portfolio->devNames = $req->devNames;        
        $portfolio->photo = $req->file('image')->store('portfolio-image');        
        $portfolio->when = $req->when;        
        $portfolio->what = $req->what;

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

        $images = $req->imagesss;
        
        
        // $portfolio->image_1 = $req->file('image_1')->store('portfolio-image');
        // $portfolio->image_2 = $req->file('image_2')->store('portfolio-image');
        // $portfolio->image_3 = $req->file('image_3')->store('portfolio-image');

        $portfolio->save();
        foreach ($images as $img) {
            $images_portf = new Images_Add;
            $images_portf->portfolio_id = $portfolio->id;
            $images_portf->image_portf = $img;
            $images_portf->save();
        }
        return redirect('/'.$lang.'/admin/all-projects');
    }

    public function editPortfolio(Request $req, $lang, $id){
        $portfolio = Portfolio::find($id);
        $portfolio->urlButton = $req->urlButton;
        $portfolio->customer = $req->customer;
        $portfolio->curator = $req->curator;
        $portfolio->devNames = $req->devNames;
        if(isset($req->image)){
            $portfolio->photo = $req->file('image')->store('portfolio-image');        
        }    
        $portfolio->when = $req->when;        
        $portfolio->what = $req->what;

        $portfolio->title_tm = $req->title_tm;
        $portfolio->who_tm = $req->who_tm;
        $portfolio->desc_tm = $req->desc_tm;
        $portfolio->target_tm = $req->target_tm;
        $portfolio->res_tm = $req->res_tm;
        $portfolio->what_was_done_tm = $req->done_tm;

        $portfolio->title_ru = $req->title_ru;
        $portfolio->who_ru = $req->who_ru;
        $portfolio->desc_ru = $req->desc_ru;
        $portfolio->target_ru = $req->target_ru;
        $portfolio->res_ru = $req->res_ru;
        $portfolio->what_was_done_ru = $req->done_ru;

        $portfolio->title_en = $req->title_en;
        $portfolio->who_en = $req->who_en;
        $portfolio->desc_en = $req->desc_en;
        $portfolio->target_en = $req->target_en;
        $portfolio->resEng = $req->resEng;
        $portfolio->what_was_done_en = $req->done_en;

    // return view('allProjects', ['lang' =>$lang, 'portfolio'=>$portfolio]);
        $portfolio->save();
        return redirect('/'.$lang.'/admin/all-projects');
    }

    public function ajaxPortfolio(Request $req){
        $perPage = 5; 
        if($req->tawus == "All"){
            // $portfolio = Portfolio::paginate($perPage);
    $portfolio = Portfolio::offset(0)->limit(3)->get();
    // $portfolio = Portfolio::all();
        } else 
        {
            // $portfolio = Portfolio::where('what', $req->tawus)->paginate($perPage);
            $portfolio = Portfolio::where('what', $req->tawus)->limit(3)->get();
        }
        $json = json_encode($portfolio);
        return $json;
    }

    public function ajaxTmp(Request $req, string $lang){
        $image_desc = array();
        $images = $req->file('images');
        foreach ($images as $img) {
            $img->store('tmp');
            array_push($image_desc, $img->store('tmp'));
        }
        $json = json_encode($image_desc);
        echo $json;
    }

    public function showMore(string $lang, $pageOffset, $type)
    {
        if($type!='All')
        {
            $portfolio = Portfolio::where('what', $type)->offset($pageOffset)->limit(3)->get();
        } else {
            $portfolio = Portfolio::offset($pageOffset)->limit(3)->get();
        }
        
        $json = json_encode($portfolio);
        return $json;
    }
}


