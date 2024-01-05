<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\SubmitJobApplicationRequest;
use Illuminate\Support\Facades\Http;

class JobApplicationController extends Controller
{
    /**
     * Submit Job Application to Pixl8.
     * @method POST
     * @route /submit_job_application
     */
    public function submit(SubmitJobApplicationRequest $request)
    {
        try {
            $testMode = env('TEST_MODE') ? "true" : "false";
            $response = Http::post("https://pixl8.com/api/jobs/v1/entity/application/?testmode=$testMode", $request);
    
            if($response->successful()) {
                return $response->json();
            } else {
                return response()->json([
                    "status" => $response->json('status'),
                    "detail" => $response->json('detail')
                ], $response->json('status'));
            }

        } catch(\Throwable $e) {
            return [
                "success" => false,
                "message" => $e->getMessage()
            ];
        }
    }
}