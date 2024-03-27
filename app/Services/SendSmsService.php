<?php

namespace App\Services;

use App\Exceptions\GlobalException;
use Exception;

class SendSmsService
{
    /**
     * @sentSms
     *
     *  send sms otp on mobile
     *
     * @param  mixed  $mobile_number
     * @param  mixed  $smsOtp
     * @return void
     */
    public static function sentSms($mobile_number, $smsOtp)
    {
        try {
            $sms = config('sms.sms_register');

            $curlUrl = env('SMS_URL');
            $curlUrl .= env('SMS_USERNAME');
            $curlUrl .= env('SMS_API_KEY');
            $curlUrl .= env('SMS_API_RQUEST');
            $curlUrl .= env('SMS_SENDER');
            $curlUrl .= env('SMS_MOBILE') . $mobile_number;
            $curlUrl .= env('SMS_MESSAGE') . urlencode($sms['message'] . $smsOtp);
            $curlUrl .= env('SMS_ROUTE');
            $curlUrl .= $sms['templateid'];
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => $curlUrl,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ]);

            curl_exec($curl);
            curl_close($curl);
        } catch (Exception $e) {
            throw new GlobalException($e->getMessage());
        }
    }

    /**
     * @sentWhatsappSms
     *
     * @param  mixed  $mobile_number
     * @param  mixed  $smsOtp
     * @return void
     */
    public static function sentWhatsappSms($mobile_number, $smsOtp)
    {
        try {
            $sms = config('sms.sms_register');
            $whatsappMessage = $sms['message'] . $smsOtp;
            $ch = curl_init();
            $url = 'https://eu153.chat-api.com/instance146819/sendMessage?token=0w9n8tgcbnht265e';
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n    \"phone\":  \"91" . "$mobile_number\", \"body\": \"$whatsappMessage\" }");
            $headers = [];
            $headers[] = 'Content-Type: application/json';
            $headers[] = 'Accept: application/json';
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $output = json_decode(curl_exec($ch));
            curl_close($ch);
        } catch (Exception $e) {
            throw new GlobalException($e->getMessage());
        }
    }
}
