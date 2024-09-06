<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ANMail;
use App\Http\Controllers\ContactMail;
// use App\Mail\ANMail;
class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showForm()
    {
        return view('contact');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm(Request $request)
    {
       $fields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);
        
  
        Mail::to('a.ahmedova@arassanusga.com')->send(new ANMail($fields));
        // Contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Форма отправлена успешно. Мы скоро с Вами свяжемся.']);
    }
}

