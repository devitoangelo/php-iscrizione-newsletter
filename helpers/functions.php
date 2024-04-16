<?php



/**
 * Generates alert message 
 * @param string  $response A true folse value
 * @return array
 */

function generateAlerttMessage($response)
{

    if ($response) {

        return   [
            'status' => 'bg-success',
            'text' => 'Success! your are subscribe',



        ];
    }
    return [
        'status' => 'bg-danger',
        'text' => 'Error! your email is incorrect.',
    ];
}


/**
 * Check email to contains '.' and '@'
 * @param string $email 
 * @return bool
 */
function checkEmail($email)
{


    if (strlen($email) > 3 && str_contains($email, '@') && str_contains($email, ".")) {

        return true;


        // return [
        //     'status' => 'bg-success',
        //     


        // ];
    }
    return false;
    // return [

    //     'status'=> 'bg-danger',
    //     'text'=> 'Error! your email is incorrect.',

    // ];

}
