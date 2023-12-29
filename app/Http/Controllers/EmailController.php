<?php

namespace App\Http\Controllers;

use App\Mail\ANMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 
use Illuminate\Support\Facades\App;

class EmailController extends Controller
{
    public function send(Request $request, $lang)
{
$fields = $request->validate([
    'email' => 'required|email',
    'name'=>'required|string',
    'project'=>'required|string',
    'message'=>'required|string',
]);

    App::setLocale($lang); // Установка локали
$scs = 'Ваша форма отправлена успешно!';
    // $data = [
    //     'name'=>$request->input('name'),
    //     'email' => $request->input('email'),
    //     'project' => $request->input('project'),
    //     'message' => $request->input('message')
    // ];
    try {
      
        Mail::to('a.ahmedova@arassanusga.com')->send(new ANMail($fields));
    } catch (\Throwable $th) {
        $scs = 'err';
    }

    // $leftMenu = false;
    // $currentPage = "Главная";

    // Возвращаем пользователю представление с установленными данными
    return redirect('/ru')->with('success', $scs);
    // return view('mainPage', [
    //     'leftMenu' => $leftMenu, 
    //     'currentPage' => $currentPage, 
    //     'lang' => $lang,
    //     'success' => 'Email has been sent!'
    // ]);
}
}
