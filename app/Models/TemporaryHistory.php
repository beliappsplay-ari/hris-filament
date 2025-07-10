<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryHistory extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'job_place_id',
        'request_date',
        'effective_date',
        'homebase',
        'current_department',
        'current_division',
        'current_section',
        'current_project',
        'current_city',
        'name_of_superior',
        'new_department',
        'new_division',
        'new_section',
        'new_project',
        'new_city',
        'new_country',
        'new_superior',
        'length_of_assignment',
        'reason',
        'ref_no',
    ];

    public function homebases()
    {
        return $this->belongsTo(Homebase::class, 'homebase'); // Adjust the foreign key if necessary
    }

    public function newDepartments()
    {
        return $this->belongsTo(Department::class, 'new_department'); // Adjust the foreign key if necessary
    }

    public function newDivisions()
    {
        return $this->belongsTo(Division::class, 'new_division'); // Adjust the foreign key if necessary
    }

    public function newProjects()
    {
        return $this->belongsTo(Project::class, 'new_project'); // Adjust the foreign key if necessary
    }

    public function newCountries()
    {
        return $this->belongsTo(Country::class, 'new_country'); // Adjust the foreign key if necessary
    }

    public function newCities()
    {
        return $this->belongsTo(City::class, 'new_city'); // Adjust the foreign key if necessary
    }
}
