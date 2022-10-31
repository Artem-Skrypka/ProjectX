<?php

/**
 * @OA\Info(
 *   title="Randale API Documentation",
 *   version="1.0.0",
 *   @OA\Contact(
 *     name="Artem Skrypka",
 *     email="artemskripka2001@gmail.com",
 *   ),
 * @OA\Tag(
 *     name="users",
 *   ),
 * ),
 * 
 * @OA\Server(
 *     description="Randale API Server",
 *     url="http://localhost/api/v1",
 *  )
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
