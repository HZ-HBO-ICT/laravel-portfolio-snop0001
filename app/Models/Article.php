<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $attributes = [
        'innerTitle' => null,
        'ExistsInSeeder' => 'no',
    ];

    // protected  $fillable = ['title','innerTitle', 'excerpt','body', 'link','class'];
    protected $guarded = [];

    /** Creates a path */
    public function path()
    {
        return route('article.show', $this);
    }
}
