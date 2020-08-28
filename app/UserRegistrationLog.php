<?php

declare(strict_types = 1);

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserRegistrationLog
 * @package App
 */
class UserRegistrationLog extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'email_verified_at'
    ];
}
