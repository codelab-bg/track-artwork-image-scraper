<?php

namespace CodelabBg\TrackArtworkImageScraper;

use GuzzleHttp\Client;

class TrackArtworkImageScraper
{
    protected Client $client;

    public function __construct()
    {
        $this->client = new Client;
    }

    /**
     * @param string $query
     * @param int    $page
     * @param array  $filters
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function search(string $query, int $page = 1, array $filters = [])
    {
        // google implementation for page results is offset (e.g. page 2 is $start = 11, page 3 is $start = 21...)
        $start = $page > 1 ? ($page * 10) + 1 : $page;

        $query = [
            'key' => config('track-artwork-image-scraper.apiKey'),
            'cx' => config('track-artwork-image-scraper.cx'),
            'q' => $query,
            'searchType' => 'image',
            'start' => $start,
        ];

        foreach ($filters as $key => $filter) {
            $query[$key] = $filter;
        }

        return json_decode($this->client->get(config('track-artwork-image-scraper.baseUrl'), ['query' => $query])->getBody(), true);
    }
}