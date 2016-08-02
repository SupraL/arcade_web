<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use PayPal\Core\PPHttpConfig;
use PayPal\Service\AdaptivePaymentsService;
use PayPal\Types\AP\PayRequest;
use PayPal\Types\AP\Receiver;
use PayPal\Types\AP\ReceiverList;

class PaypalController extends Controller{

    public function config()
    {
        // Credentials
        // https://developer.paypal.com/developer/accounts/

        // AppId
        // https://www.paypal-apps.com/user/my-account/applications/manage#most_recent

        return [
            'mode' => 'sandbox',
            'acct1.AppId' => 'APP-80W284485P519543T',
            'acct1.UserName' => 'supralai-facilitator_api1.gmail.com',
            'acct1.Password' => 'PGP73UR6WF7SYV22',
            'acct1.Signature' => 'AHRb91hHNwmbB4GDbXDRWCw57EYQAuACVpDcrUSc0XEqSpj6yyyeQt6A',
        ];
    }

    /**
     * Redirect to Paypal.
     */
    public function redirect($payKey = '')
    {
        $url = redirect('https://www.sandbox.paypal.com/webapps/adaptivepayment/flow/pay?expType=light&payKey='.$payKey);

        return $url;
    }

    /**
     * Ask Paypal for a token
     */
    public function showCheckout()
    {
        $requestEnvelope = ['errorLanguage' => 'fr_FR'];
        $actionType = 'PAY';
        $cancelUrl = 'http://.../url-payment-cancel';
        $returnUrl = Config::get('app.paypalReturnUrl');

        $currencyCode = 'EUR';

        // Your request
       // $_POST['receiverEmail'] = ['supralai-facilitator@gmail.com'];
        //$_POST['receiverAmount'] = ['3.00'];

        //$receiver = [];
        $receiver[0] = new Receiver();
        $receiver[0]->email = 'supralai-facilitator@gmail.com';
        $receiver[0]->amount = '10.00';

        /*for ($i = 0; $i < count($_POST['receiverEmail']); ++$i) {
            // Parallel Payments
            $receiver[$i] = new Receiver();
            $receiver[$i]->email = $_POST['receiverEmail'][$i];
            $receiver[$i]->amount = $_POST['receiverAmount'][$i];
        }*/
        $receiverList = new ReceiverList($receiver);
        $payRequest = new PayRequest($requestEnvelope, $actionType, $cancelUrl,
            $currencyCode, $receiverList, $returnUrl);

        // Set the correct the value 1, 3, 4, ...
        // PPHttpConfig::$DEFAULT_CURL_OPTS[CURLOPT_SSLVERSION] = 4;

        $config = $this->config();
        $service = new AdaptivePaymentsService($config);
        $response = $service->Pay($payRequest);

        if (strtoupper($response->responseEnvelope->ack) == 'FAILURE') {
            dd($response->error);
        }
        if (strtoupper($response->responseEnvelope->ack) == 'SUCCESS') {
            Session::put('paypalPayKey',$response->payKey);
            Session::put('paymentDetails',$receiver[0]->amount);
            Session::put('ppResponse',$response);
            return $this->redirect($response->payKey);
        }

        return view('payment.checkout');
    }
}