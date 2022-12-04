<?php

use Carbon\Carbon;

/**
 * Write code on Method
 *
 * @return response()
 */

    function responseJson($status , $msg , $data = null)
    {
       $response = [
        'status' => $status,
        'msg'    => $msg,
        'data'   => $data,
       ];
       return Response()->json($response);
    }
