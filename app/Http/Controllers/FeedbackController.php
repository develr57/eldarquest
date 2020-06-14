<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Http\Models\Feedback;

class FeedbackController extends Controller
{
    public function show()
    {
        return view('feedback.show');
    }

    public function store(FeedbackRequest $request)
    {
        if ($request->isMethod('post'))
        {
            $data = [
                'name'      => htmlentities($request->input('name'), ENT_QUOTES),
                'email'     => htmlentities($request->input('email'), ENT_QUOTES),
                'phone'     => htmlentities($request->input('phone'), ENT_QUOTES),
                'comment'   => htmlentities($request->input('comment'), ENT_QUOTES),
            ];

            $feedback = new Feedback;
            $result = $feedback->addFeedback($data);
            if ($result)
            {
                return redirect('feedback/accepted');
            }
            else
            {
                return redirect('feedback/notaccepted');
            }
        }
    }

    public function accepted()
    {
        return view('feedback.accepted');
    }

    public function notAccepted()
    {
        return view('feedback.notaccepted');
    }
}