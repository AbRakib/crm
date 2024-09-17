<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Services\User\UserService;

class CustomerController extends Controller {
    private UserService $service;
    public function __construct() {
        $this->service = new UserService();
    }
    public function index() {

    }
}
