<?php
namespace Webartisan\Url;

use GuzzleHttp\Client;
use League\Csv\Reader;

class Scanner
{
    /**
     * Collections of URL
     * @var array
     */
    protected $urls;

    /**
     * An instance of Client class
     * @var object
     */
    protected $httpClient;

    /**
     * Constructor
     * @param array $urls An array of URLs to scan
     */
    public function __construct(array $urls)
    {
        $this->urls = $urls;
        $this->httpClient = new Client();
    }

    /**
     * Get Invalid URLs
     * @return array
     */
    public function getInvalidUrls()
    {
        /**
         * Collections of invalid urls
         * @var array
         */
        $invalidUrls = [];

        foreach ($this->urls as $url) {
            try {
                $statusCode = $this->getStatusCodeForUrl($url);
            } catch (\Exception $e) {
                $statusCode = 500;
            }

            if ($statusCode >= 400) {
                array_push($invalidUrls, [
                    'url' => $url,
                    'status' => $statusCode
                ]);
            }
        }

        return $invalidUrls;
    }

    /**
     * Get HTTP status code for URL
     * @param  string $url The remote URL
     * @return int The HTTP status code
     */
    protected function getStatusCodeForUrl($url)
    {
        $httpResponse = $this->httpClient->options($url);

        return $httpResponse->getStatusCode();
    }
}
