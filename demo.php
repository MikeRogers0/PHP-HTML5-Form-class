<?php
/**
 * HTML5 Form Class
 *
 * A simple form class to make building / validating forms easier.
 *
 * @author Mike Rogers <mike.r@fullondesign.co.uk>
 * @since 21/08/2011
 */

include('func/functions.func.php');
include('class/notices.class.php');
include('class/form.class.php');

$notices = new notices();
$myForm = new form();

$myForm->setInputField(array('name'=>'your-name', 'required'=>true), 'Your Name', true);

$myForm->setInputField(array('name'=>'your-email', 'type'=>'email'), 'Your Email (Optional)', true);

$myForm->setInputField(array('name'=>'submit', 'value'=>'Submit', 'type'=>'Submit'));

$myForm->display();
?>
