<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRegisterRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Users;

class UserController extends Controller
{
    function register (ClientRegisterRequest $request) {

        $payload = collect($request->validated());

        DB::beginTransaction();

        try {
            $user = User::create($payload->toArray());
            return $this->success("user is successfully created", $user);

        } catch (Exception $e) {
            DB::roleback();
            throw $e;
        }

    }
}
