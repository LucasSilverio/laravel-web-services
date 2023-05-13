<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function getResults(?string $name)
    {
        if (!$name)
            return $this->get();

       return $this->where('name', 'LIKE', "%{$name}%")
                        ->get();
    }
}
