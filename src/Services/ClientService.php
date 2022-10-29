<?php

namespace Ahmedhegazee\Releans\Services;

class ClientService
{
    private array $options;
    private string|bool $response;
    public function __construct()
    {
        $this->options = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . config('releans.api_key')
            ),
        ];
    }
    public function setUrl(string $url)
    {
        $this->options[CURLOPT_URL] = config('releans.base_url') . "/$url";
        return $this;
    }
    public function get()
    {
        $this->options[CURLOPT_CUSTOMREQUEST] = "GET";
        $curl = curl_init();
        curl_setopt_array($curl, $this->options);
        $this->response = curl_exec($curl);
        curl_close($curl);
        return $this;
    }
    public function json()
    {
        return json_decode($this->response, true);
    }
    public function post(string $postData)
    {
        $this->options[CURLOPT_CUSTOMREQUEST] = "POST";
        $this->options[CURLOPT_POSTFIELDS] = $postData;
        $curl = curl_init();
        curl_setopt_array($curl, $this->options);
        $this->response = curl_exec($curl);
        curl_close($curl);
        return $this;
    }
}