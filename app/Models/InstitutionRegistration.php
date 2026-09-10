<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstitutionRegistration extends Model
{
    protected $table = 'institution_registrations';

    protected $fillable = [
        // Contact Person
        'contact_name',
        'designation',
        'phone',
        'email',

        // Institution Details
        'institution_name',
        'institution_type',
        'board_or_university',
        'year_of_establishment',
        'student_strength',
        'city',
        'state',
        'website',

        // Collaboration Interest
        'areas_of_interest',
        'heard_about_ycx',
        'message',

        // Admin
        'status',
        'notes',
    ];
}
