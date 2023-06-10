<?php

namespace App\Http\Controllers\Admin\api\Youtube;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Youtube;
use App\Http\Resources\FormatPostResource;
use Illuminate\Support\Facades\DB;

class YoutubeController extends Controller
{
    public function showYoutube()
    {
        $data_youtube=Youtube::all();

        return [
            'data_youtube' => $data_youtube,
        ];

    }
}
