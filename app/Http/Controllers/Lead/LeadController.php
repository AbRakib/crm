<?php

namespace App\Http\Controllers\Lead;

use App\Http\Controllers\Controller;

class LeadController extends Controller {
    /**
     * Lead management
     * all data
     * @return array|object
     */
    public function index() {
        return view('pages.lead.index');
    }
}
