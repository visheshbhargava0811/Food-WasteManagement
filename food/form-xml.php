<?php namespace ProcessWire;
// ------------------------------ FORM Configuration ---------------------------------------
// --- Some default variables ---
$success_message   = "<p class='message'>XML file generated successfully.</p>";
// --- All form fields as nested array ---
// using html form field name => template field nam, from the page you're going to create
$form_fields = array(
    'username' => array('type' => 'text', 'value' => '', 'required' => true),
    'email'    => array('type' => 'email', 'value' => '', 'required' => true)
);

// ------------------------------ FORM Processing ---------------------------------------
include("./_form-process.php");
?>

<!-- ========================= FORM HTML markup  ================================== -->


<div class="content">

    <h2>Generate XML from form</h2>

    <?php if(!$success) : ?>

        <?php if(!empty($errors)) echo showError("Form contains errors"); ?>
        <?php if(!empty($errors['csrf'])) echo showError($errors['csrf']); ?>

        <form name="myform" class="myform" id="myform" method="post" action="./" enctype="multipart/form-data">

            <input type="hidden" name="<?php echo $session->CSRF->getTokenName(); ?>" value="<?php echo $session->CSRF->getTokenValue(); ?>"/>

            <div class="row <?php if(isset($errors['username'])) echo "error";?>">
                <label for="username">Name* </label><br/>
                <input type="text" name="username" id="username" value="<?php echo $sanitizer->entities($form_fields['username']['value']); ?>"/>
                <?php if(isset($errors['username'])) echo showError($errors['username']); ?>
            </div>

            <div class="row <?php if(isset($errors['email'])) echo "error";?>">
                <label for="email">Email* </label><br/>
                <input type="text" name="email" id="email" value="<?php echo $sanitizer->entities($form_fields['email']['value']); ?>"/>
                <?php if(isset($errors['email'])) echo showError($errors['email']); ?>
            </div>

            <div class="row">
                <input type="hidden" name="action" id="action" value="send"/>
                <input type="submit" name="submit" id="submit" value="Submit"/>
            </div>
        </form>

    <?php else: ?>

        <p><?php echo $success_message; ?></p>

    <?php endif; ?>

</div>
 
