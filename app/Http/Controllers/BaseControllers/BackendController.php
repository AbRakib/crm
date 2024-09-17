<?php

namespace App\Http\Controllers\BaseControllers;

use App\Http\Controllers\Controller;

class BackendController extends Controller {
    private string $pageTitle       = 'Dashboard';
    private string $pageHeaderTitle = 'Dashboards';
    private string $mainMenu        = '';
    private string $subMenu         = '';
    private string $activeMenu      = 'dashboard';
    private array $pageBreadcrumbs  = [];

    protected function setPageTitle(string $pageTitle, bool $setPageHeader = true): void {

    }
}
