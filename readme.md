This is intended to simple HTML5 forms, you may want to consider Zend_Form http://framework.zend.com/manual/1.12/en/zend.form.quickstart.html for making something a little more complex.

## Building & displaying the form

To create the form, call the class.

`$myForm = new form();`

then add a few inputs

`$myForm->setInputField(array('name'=>'your-name', 'required'=>true), 'Your Name', true);`
`$myForm->setInputField(array('name'=>'submit', 'value'=>'Submit', 'type'=>'Submit'));`

Then to display the form, use this code:

`$myForm->display();`

## Validating the form

Validating the form is really easy, the best way to do it is:

`if($myForm->isSent() && $myForm->validInput()){`
` // The form is ok - work with data here `
` } `
