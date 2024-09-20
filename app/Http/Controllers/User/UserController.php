<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseControllers\BackendController;

class UserController extends BackendController {
    public function index() {
        return $this->view('pages.user.index');
    }
}
