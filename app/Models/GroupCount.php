<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupCount extends Model
{
    use HasFactory;
    protected $fillable=['GROUP_NAME','GROUP_COUNT','USER_ID'];
}
