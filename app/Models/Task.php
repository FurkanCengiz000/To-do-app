<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Task extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['task', 'is_completed'];
    protected $attributes = ['is_completed' => 0];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'task'
            ]
        ];
    }

}
