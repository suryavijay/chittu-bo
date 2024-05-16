<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class GroupLoan extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable=['GROUP_ID','NAME','FAT_HUS_NAME','BUSINESS','ADDRESS','PHONE_NO','SURITY','LOAN_AMOUNT','INTREST','NO_OF_WEEKS','CREATED_BY'];
}
