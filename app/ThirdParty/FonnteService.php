<?php

namespace App\ThirdParty;

class FonnteService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = '76BeFkQuy7F66giof153'; // Replace with your actual Fonnte API Key
    }

    public function sendWelcomeMessage($phoneNumber, $message)
    {
        $url = 'https://api.fonnte.com/send';

        // Initialize cURL
        $ch = curl_init();

        // Set the necessary options for cURL
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => [
                'target' => $phoneNumber,
                'message' => $message,
                'countryCode' => '62', // Optional, set according to your needs
            ],
            CURLOPT_HTTPHEADER => [
                'Authorization: ' . $this->apiKey, // Use Bearer token if required
            ],
        ));

        // Execute the cURL request
        $response = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            return ['error' => 'Message sending failed: ' . curl_error($ch)];
        }

        // Close the cURL session
        curl_close($ch);

        return json_decode($response, true);
    }
}