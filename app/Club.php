<?php

namespace App;

use App\Http\Requests\FixtureUpdateRequest;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable =['name', 'postcode', 'website'];

}