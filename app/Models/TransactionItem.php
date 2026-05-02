<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    protected $guarded = ['id'];

    public function product()
    {
        return $this->hasOne(product::class);
    }
}
