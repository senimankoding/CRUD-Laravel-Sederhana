<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];

    protected $table = 'blog';
    public $timestamps = false;

    // protected $fillable = ['title', 'description'];
    protected $guarded = ['created_at'];
}