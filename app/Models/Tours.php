<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_title',
        'tour_duration',
        'tour_description',
        'tour_start_end_points',
        'tour_departure_time',
        'tour_file',
        'tour_code',
        'tour_location'




];
}