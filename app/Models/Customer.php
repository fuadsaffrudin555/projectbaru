<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'customers';
    protected $fillable = ['name', 'slug', 'NIK', 'sex', 'alamat', 'nomer_hp', 'email'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
            ];
    }

    public function detailData($slug)
    {
        return DB::table('customers')->where('slug', $slug)->first();
    }
}
