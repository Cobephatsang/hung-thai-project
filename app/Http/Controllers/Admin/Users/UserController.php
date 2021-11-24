<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;

class UserController extends  Controller
{
    public function listAll()
    {
        return view('admin.users.listUser');
    }
}
