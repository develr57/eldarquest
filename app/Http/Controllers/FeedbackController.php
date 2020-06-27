<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function show()
    {
        return view('feedback.show');
    }

    public function store(FeedbackRequest $request)
    {
        $data = $request->only('name', 'email', 'phone', 'comment');
        Feedback::create($data);
        return redirect()->route('feedbackAccepted');
    }

    public function showFeedbacks()
    {
        $feedbacks = Feedback::orderBy('created_at', 'desc');
        $feedbacks = $feedbacks->paginate(10);
        return view('feedback.showfeedbacks', compact('feedbacks'));
    }

    public function accepted()
    {
        return view('feedback.accepted');
    }
}
