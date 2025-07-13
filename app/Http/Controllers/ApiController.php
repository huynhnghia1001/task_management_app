<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiController extends Controller
{

    protected $statusCode = Response::HTTP_OK;

    public function responseWithMessage($message, $status = 200)
    {
        return $this->setStatusCode(Response::HTTP_OK)
            ->response([
                'messsage' => $message,
            ]);
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function response($data, $headers = [])
    {
        $data['code'] = $this->statusCode;
        return response()->json($data, $this->statusCode, $headers);
    }
}
