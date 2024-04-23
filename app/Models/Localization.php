<?php

namespace App\Models;

use App\Mail\WelcomeMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Localization extends Model
{
    use HasFactory;
    protected $table = "localization";

    public function translations(){
        Mail::send(new WelcomeMail());
    }
}
