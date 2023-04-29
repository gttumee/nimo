<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rememberedkanji extends Model
{
    use HasFactory;
    protected $fillable = ['kanji_id','delete_flag','user_id'];
}