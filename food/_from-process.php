<?php namespace ProcessWire;
// ------------------------------ FORM Processing ---------------------------------------
$errors            = null;
$success           = false;
// helper function to format form errors
function showError($e){
    return "<p class='error'>$e</p>";
}

/**
 * Cast and save field values in array $form_fields
 * this is also done even form not submited to make populating the form later easier.
 *
 * Also used for pupulating page when form was valid
 */
$required_fields = array();
foreach($form_fields as $key => $f){
    if($f['type'] == 'text'){
        $form_fields[$key]['value'] = $sanitizer->text($input->post->$key);
    }
    if($f['type'] == 'email'){
        $form_fields[$key]['value'] = $sanitizer->email($input->post->$key);
    }
    // store required fields in array
    if($f['required']) $required_fields[] = $key;
}

/**
 * form was submitted, start processing the form
 */
if($input->post->action == 'send'){
    // validate CSRF token first to check if it's a valid request
    if(!$session->CSRF->hasValidToken()){
        $errors['csrf'] = "Form submit was not valid, please try again.";
    }
    /**
     * Check for required fields and make sure they have a value
     */
    foreach($required_fields as $req){

        // reqired text fields
        if($form_fields[$req]['type'] == 'text' || $form_fields[$req]['type'] == 'email')
        {
            if(!strlen($form_fields[$req]['value'])){
                $errors[$req] = "Field required";
            }
            // reqired email fields
            if($form_fields[$req]['type'] == 'email'){
                if($form_fields[$req]['value'] != $input->post->$req){
                    $errors[$req] = "Please enter a valid Email address.";
                }
            }
        }
    }
    /**
     * if no required errors found yet continue creating the XML document
     */
    if(empty($errors))
    {
        // path where we save the document (site/assets is arbitrary)
        $pathofxmlfiles = $config->paths->assets . 'XMLFILES' . DIRECTORY_SEPARATOR;
        // name of the document
        $xmlfilename = 'Users.xml';

        // create an XML document object
        $doc = new \DOMDocument('1.0');
        // we want a nice output
        $doc->formatOutput = true;

        // root node
        $root = $doc->createElement('user_profil');
        $root = $doc->appendChild($root);

        // first child node : field username
        $username = $doc->createElement('username');
        $username = $root->appendChild($username);
        $text = $doc->createTextNode(($form_fields ["username"]["value"]));
        $text = $username->appendChild($text);

        // second chield node : field email
        $email = $doc->createElement('email');
        $email = $root->appendChild($email);
        $text = $doc->createTextNode(($form_fields ["email"]["value"]));
        $text = $email->appendChild($text);

        // save the document
        $doc->save($pathofxmlfiles . $xmlfilename);

        $success = true;
    }
}