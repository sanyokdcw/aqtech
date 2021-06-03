<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Step extends Model
{
    use HasFactory;
    use Translatable;

    protected $translatable = ['text', 'name', 'image_description'];
}
