<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function show()
    {
        return view('feedback.show');
    }

    public function store(Request $request)
    {
        //debug($_POST);
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'phone'     => 'required',
            'comment'   => 'required',
        ],[
            '*.required'    => 'Это поле не должно быть пустым!',
            //'email.email'   => 'Это поле не соответствует формату эл.почты!',
        ]);
    }
}