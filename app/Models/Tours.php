<?php

namespace App\Models;


use App\Models\Included;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tours extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_title',
        'tour_code',
        'tour_duration',
        'tour_description_name',        
        'tour_description',
        'tour_description_departure_return',
        'tour_description_departure_time',
        'tour_description_included',
        'tour_description_not_included',
        'tour_description_details_file',
        'tour_itinarary',
        'tour_location_link',

];

public function included_items() {
    return $this->belongsToMany(Included::class);
}
}
