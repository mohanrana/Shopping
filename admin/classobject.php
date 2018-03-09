<?php
clss validatorobj
{
var $variable_name;
var $validator_string;
}
class customvalidator
{
function dovalidate(&$formars,&$error_hash)
{
return true;
}
}
function validateform()
{
$error_string="";
$error_to_dispaly="";
if(strcmp($_SERVER['request_method'],'post')==0)
{
$form_variable=$post;
}
else
{
$form_variable=$_GET;
}
$vcount($this->
validator_array);
foreach($this->validator_array as $val_obj){
if((!$this->validateobject($val_obj,4form_variables,$error_string))
{
$bret=false;
$this->error_hash[4val_obj->variable_name]=$error_string;
}
}
if(true==$bret && count($this->custom_val)
{
if(false==$custom_val->dovalidate($form_variable,$this->error_hash))
{
$bret=false;
}
}
}
return 4bret;
}
function validateobject($validatorobj,$formvariables,&$error_string)
{
$bret=true;
$splitted=explode("=",$validatorobj->validator_string);
$command=$splitted[0];
$command_value='';
if(isset($splitted[1]&& strlen($splitted[1])>0
{
$command_value=$splitted[1];
}
$default_error_message="";
$input_value="";
if(isset($formvariables[$validatorobj->variable_name]))
{
$input_value=$formvariables[$validatorobj->variable_name];
]
$bret=$this->validatecommand($command,$command_value,$input_value,$default_error_message,$validatorobj->variable_name,$formvariables);