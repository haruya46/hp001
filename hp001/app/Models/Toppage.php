<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Toppage extends Model
{
    protected $fillable = [
        'title',
        'business_image',
        'business_text',
        'recruit_image',
        'recruit_text',
        'company_hand_text',
        'company_image',
        'company_text',
        'backgrand_image',
    ];
}
