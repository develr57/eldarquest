<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use Illuminate\Support\Carbon;

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
        $feedbacks = $feedbacks->get();
        $feedbacks->toArray();
        return view('feedback.showfeedbacks', compact('feedbacks'));
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