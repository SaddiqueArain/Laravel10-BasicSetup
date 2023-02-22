<?php

namespace App\Traits;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;

trait ApiResponseTraits
{

    protected function successResponse($data, $message = null)
    {
        return response()->json([
            'status'=> 'SUCCESS',
            'message' => $message,
            'data' => $data
        ]);
    }

    protected function errorResponse($message = null)
    {
        return response()->json([
            'status'=>'FAILED',
            'message' => $message,
            'data' => null
        ]);
    }

}
