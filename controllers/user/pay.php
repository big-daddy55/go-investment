<?php


$operator = $_POST['operator'];
// dd($operator);

if ($amount === ''){
    require base_path('controllers/user/api/paystack-pay.php');
    // require base_path('api/requestpay.php');
    die();
}

dd("Mtn only");


// $phone_number = $_POST['phone_number'];
// $amount = $_POST['amount'];

// $callbackUrl = "https://webhook.site/37b4b85e-8c15-4fe5-9076-b7de3071b85d";
// $reference_id = "0bd4b50a-93f6-405a-ab3c-090bedc6d634";

// $curl = curl_init();




// curl_setopt_array($curl, array(
//     CURLOPT_URL => 'https://sandbox.momodeveloper.mtn.com/collection/v1_0/requesttopay',
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_ENCODING => '',
//     CURLOPT_MAXREDIRS => 10,
//     CURLOPT_TIMEOUT => 0,
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//     CURLOPT_CUSTOMREQUEST => 'POST',
//     CURLOPT_POSTFIELDS => '{
//   "amount": "' . $amount . '",
//   "currency": "EUR",
//   "externalId": "6353636",
//   "payer": {
//     "partyIdType": "MSISDN",
//     "partyId": "' . $phone_number . '"
//   },
//   "payerMessage": "Pay for product a",
//   "payeeNote": "payer note",
//   "callbackUrl": "' . $callbackUrl . '"
// }',
//     CURLOPT_HTTPHEADER => array(
//         'X-Reference-Id: "' . $reference_id . '"',
//         'X-Target-Environment: sandbox',
//         'Ocp-Apim-Subscription-Key: 6dc8c9dd99fb4af5b31b0d0534a3eafd',
//         'Content-Type: application/json',
//         'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSMjU2In0.eyJjbGllbnRJZCI6IjNjNjFiMGM2LTNhNGEtNDQxMi05YzkxLTc5MjllMjZkMzg4MCIsImV4cGlyZXMiOiIyMDI0LTAxLTA4VDIzOjA1OjE1LjgxOCIsInNlc3Npb25JZCI6ImU1YTIyYWRkLThlN2EtNDllNi1hMDdmLTllZDU4MDhjMTliZCJ9.VdOwHThJ2gUL_lP26QcPosFCNX5uplMYv1yGb86513XqYTwDFeX4_63TDaBpwvCroqQwqUqZbSWMSOSdqX7hkmFRAtXsjPKAGCCvnqS2LElR4MxJ1jLtP1GAwrp2I4HVscb1p-K87kZw-HDoBlrs65iA3U_m9K2y-wsLQXpaU8LdXKl3ejXj4q0Qj4TkRONtfcbvfSqxQAbEWAT5b4RasXMeaOkSKKUHTGmpg8l6clxPuePtprni_Gv9AcveZ2zc3V4FQGBP0eu3qenriKkKAL3X27lNHEpF7zKnmN_sGC2omO9fswFrj_dikV6gqILiEnR-P3S0G_a0F_6YcaAU4w'
//     ),
// ));

// $response = curl_exec($curl);


//     dd('cURL Error: ' . curl_error($curl));

//     // dd($response);

// curl_close($curl);
