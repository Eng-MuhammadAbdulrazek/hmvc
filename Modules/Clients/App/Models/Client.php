<?php

namespace Modules\Clients\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Clients\Database\factories\ClientFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'type',
        'name',
        'identity_number',
        'tax_number',
        'phone',
        'email',
        'address',
        'notes',
    ];



}
