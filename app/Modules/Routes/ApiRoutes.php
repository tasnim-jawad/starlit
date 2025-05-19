<?php
/*
|--------------------------------------------------------------------------
| Auth Management Module
|--------------------------------------------------------------------------
*/
include_once base_path("app/Modules/Management/Auth/Routes/Route.php");
/*
|--------------------------------------------------------------------------
| User Management Module
|--------------------------------------------------------------------------
*/

include_once base_path("app/Modules/Management/UserManagement/Role/Routes/Route.php");
include_once base_path("app/Modules/Management/UserManagement/User/Routes/Route.php");

/*
|--------------------------------------------------------------------------
| Dashboard and settings Management Module
|--------------------------------------------------------------------------
*/
include_once base_path("app/Modules/Management/Dashboard/Routes/Route.php");
include_once base_path("app/Modules/Management/SettingManagement/WebsiteSettings/Routes/Route.php");


include_once base_path("app/Modules/Management/BlogCategory/Routes/Route.php");
