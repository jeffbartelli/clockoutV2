<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Create a variable for each input field in the form
    $gender = filter_input(INPUT_POST, 'gender',FILTER_SANITIZE_STRING);
    $currentAge = filter_input(INPUT_POST, 'currentAge',FILTER_VALIDATE_INT);
    $retireAge = filter_input(INPUT_POST, 'retireAge',FILTER_VALIDATE_INT);
    $retireIncome = filter_input(INPUT_POST, 'retireIncome',FILTER_VALIDATE_INT);
    $savings = filter_input(INPUT_POST, 'savings',FILTER_VALIDATE_INT);
    $estate = filter_input(INPUT_POST, 'estate',FILTER_VALIDATE_INT);
    $timestamp = filter_input(INPUT_POST, 'timestamp',FILTER_SANITIZE_STRING);
    $form_action = filter_input(INPUT_POST, 'formAction',FILTER_SANITIZE_STRING);
    $form_hash = filter_input(INPUT_POST, 'formHash',FILTER_SANITIZE_STRING);
  
    
    # Connection details
    include('connection.php');

    # Check NONCE
    $calc_str = sprintf('%s_%s_%s', $form_action, $timestamp, NONCE_SALT);
    $calc_hash = hash('sha512', $calc_str);
    $data['calcHash'] = $calc_hash;

    if ($calc_hash == $form_hash) {
        # Upload all form values to the database
        $sqlQuery = "INSERT INTO intro(gender, currentAge, retireAge, retireIncome, retireSavings, retireEstate) VALUES(:gender,:currentAge,:retireAge,:retireIncome,:retireSavings,:retireEstate)";
        $stmt = $dbc->prepare($sqlQuery);
        $stmt->execute([
            'gender' => $gender,
            'currentAge' => $currentAge,
            'retireAge' => $retireAge,
            'retireIncome' => $retireIncome,
            'retireSavings' => $savings,
            'retireEstate' => $estate,
        ]);
        echo json_encode($data);
    }
}

?>