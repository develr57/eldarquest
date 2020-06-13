<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FeedbackRequest;

class FeedbackController extends Controller
{
    public function show()
    {
        return view('feedback.show');
    }

    public function store(FeedbackRequest $request)
    {
        //debug($_POST);
        if ($request->isMethod('post'))
        {
            $data = [
                'name'      => htmlentities($request->input('name'), ENT_QUOTES),
                'email'     => htmlentities($request->input('email'), ENT_QUOTES),
                'phone'     => htmlentities($request->input('phone'), ENT_QUOTES),
                'comment'   => htmlentities($request->input('comment'), ENT_QUOTES),
            ];
            debug($data);
        }
    }
}