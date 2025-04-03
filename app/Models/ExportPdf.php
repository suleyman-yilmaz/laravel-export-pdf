<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExportPdf extends Model
{
    protected $table = 'data';

    protected $fillable = [
        'name',
        'surname',
        'age',
        'city'
    ];
}
