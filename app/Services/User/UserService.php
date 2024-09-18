<?php

namespace App\Services\User;

class UserService {
    public function __construct() {
        $this->paginate_limit = config('commonData.paginate_limit');
    }
}
