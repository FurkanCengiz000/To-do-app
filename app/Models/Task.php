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

    public function checkbox($is_checked)
    {
        if ($is_checked == 0) {
            return "<i class='fa-sharp fa-regular fa-square ms-3 text-dark fs-5'></i>";
        } else {
            return "<i class='fa-regular fa-square-check ms-3 text-dark fs-5'></i>";
        }
    }
}
