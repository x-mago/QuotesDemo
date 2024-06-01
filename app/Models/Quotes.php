<?php

namespace App\Models;

use App\Traits\CryptFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quotes extends Model
{
    use HasFactory;
    use CryptFields;

    protected $table = 'quotes';    

    protected $encryptable = [
        'quote',
        'character',
        'image',
    ];
}
