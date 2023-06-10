<?php

namespace App\Http\Controllers\Admin\Youtube;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use App\Models\Youtube;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Google\Client as Google_Client;
use Google\Service\YouTube as Google_Service_YouTube;

class ClientYoutubeController extends Controller
{
    public function showYoutube()
    {
        $client = new Client([
            'headers' => [
                'Authorization' => 'Bearer ' . session('api_token'),
                'Accept' => 'application/json',
            ],
        ]);
        
        $response = $client->request('GET', 'http://localhost/d3ti/public/api/d3ti-admin/youtube');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody();

        $data = json_decode($body);

        return view('admin/youtube/youtube', [
            'data_youtube' => $data->data_youtube,
        ]);
    }

    public function syncYoutube()
    {
        $client = new Google_Client();
        $client->setDeveloperKey("AIzaSyCxUaO4nAaVaBeMKhfXhk1EqBbElRX-xns");

        $youtube = new Google_Service_YouTube($client);
        $channelId = "UCInptCgqfeQfLF_FOL3CWgg";
        $channel = $youtube->channels->listChannels('contentDetails', array('id' => $channelId));
        $channelId = $channel['items'][0]['id'];

        $searchResponse = $youtube->search->listSearch('id,snippet', array(
            'channelId' => $channelId,
            'order' => 'date',
        ));

        foreach ($searchResponse['items'] as $item) {
            $videoId = $item['id']['videoId'];
            $title = $item['snippet']['title'];
            $description = $item['snippet']['description'];
            
            $videoExists = Youtube::where('youtube_video_id', $videoId)->exists();
            
            if (!$videoExists) {
                $youtubeVideo = new Youtube;
                $youtubeVideo->youtube_video_id = $videoId;
                $youtubeVideo->youtube_title = $title;
                $youtubeVideo->youtube_description = $description;
                $youtubeVideo->save();
            }
        }

        return redirect('/d3ti-admin/youtube')->with('status', 'Sync has been completed.');
    }
}
