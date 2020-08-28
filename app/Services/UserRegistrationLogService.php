<?php

declare(strict_types = 1);

namespace App\Services;

use App\UserRegistrationLog;
use Carbon\Carbon;

/**
 * Class UserRegistrationLogService
 * @package App\Services
 */
class UserRegistrationLogService
{
    /**
     * @param int $userId
     * @return UserRegistrationLog
     */
    public function save(int $userId): UserRegistrationLog
    {
        return UserRegistrationLog::create([
            'user_id' => $userId,
            'email_verified_at' => Carbon::now()
        ]);
    }
}
