<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class ApiUserController extends Controller
{
/**
 * @OA\Get(
 *   path="/users",
 *   operationId="news",
 *   summary="list users",
 *   tags={"users"},
 *   @OA\Response(
 *     response=200,
 *     description="A list with users",
 *   ),
 * )
 */
    public function index()
    {
        return UserResource::collection(User::all());
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }
}
