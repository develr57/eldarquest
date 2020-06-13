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
            echo "OK";
            debug($_POST);
        }
    }
}