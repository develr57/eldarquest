<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    public function fdForm()
    {
        return view('fdform');
    }
}