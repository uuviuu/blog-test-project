<?php

namespace App\Repositories\User;

use App\Models\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepositoryEloquent extends BaseRepository
{
    public function model(): string
    {
        return User::class;
    }
}
