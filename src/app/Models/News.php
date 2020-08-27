<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    const perPage = 3;

    public function getAllActiveNews()
    {
        return $this->where('active', 1)->orderBy('id','DESC')->paginate(self::perPage);
    }

}
