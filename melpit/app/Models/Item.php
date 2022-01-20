<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    const STATE_SELLING = 'selling';
    const STATE_BOUGHT = 'bought';
}
