<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $timestamps = false;

    public function addFeedback($data)
    {
        extract($data);

        $add = new Feedback;
        $add->name          = $name;
        $add->email         = $email;
        $add->phone         = $phone;
        $add->comment       = $comment;
        $add->created_at    = time();
        
        if ($add->save())
        {
            return true;
        }
        else
        {
            return false;
        }

    }
}
