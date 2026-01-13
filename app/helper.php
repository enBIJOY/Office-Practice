<?php

use App\Models\User;



function getAllUsers()
{
    return User::all();
}