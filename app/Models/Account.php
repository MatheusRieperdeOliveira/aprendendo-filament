<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';

    protected $fillable = [
        'value',
        'description',
        'bank_account_id',
        'category_id',
    ];
}
