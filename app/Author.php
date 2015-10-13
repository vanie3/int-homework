<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'email',
        'company_name'
    ];

    public function application() {
        $this->belongsTo('App\Application');
    }
}
