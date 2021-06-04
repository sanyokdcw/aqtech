<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Page extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['name'];


    public function pageContents(){
        return $this->HasMany('App\Models\PageContent');
    }
    
}
