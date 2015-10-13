<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'title',
        'version',
        'author_id'
    ];

    public function author() {
        $this->hasOne('App\Author', 'author_id');
    }
}
