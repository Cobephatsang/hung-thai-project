<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\UserFormRequest;

class UserController extends  Controller
{
    public function listAll()
    {
        return view('admin.users.listUser');
    }

    public function storeUser(UserFormRequest $request)
    {
        \Log::info($request);
        return 123;
    }
}
