<?php

namespace App\Models;
use App\Enums\FakeUserTitle;
use App\Enums\FakeUserGender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakeUser extends Model
{
    use HasFactory;
     
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'date_of_birth',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'title' => FakeUserTitle::class,
        'gender'=> FakeUserGender::class,
    ];

}


