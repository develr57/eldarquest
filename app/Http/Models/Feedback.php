<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $timestamps = false;

    public function addFeedback($data)
    {
        extract($data);

        $this->name         = $name;
        $this->email        = $email;
        $this->phone        = $phone;
        $this->comment      = $comment;
        $this->created_at   = time();
        
        if ($this->create())
        {
            return true;
        }
        else
        {
            return false;
        }

    }
}
