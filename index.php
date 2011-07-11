<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Schema Creator</title>

</head>
<body>
<?php
        function __autoload($class_name) {
include $class_name . '.php';
}
echo '<h1> Welcome </h1>';
$thing = new Recipe();

$thing->setNameValue('Eastern Omlete Recipe.');
$thing->setNameTag("span");
$thing->setNameAttributes('');


$thing->setUrlValue('http://www.Myownrecipe.com');
$thing->setUrlTag('a');
$thing->setUrlAttributes('href');

$thing->setImageValue('http://www.mmocrunch.com/wp-content/uploads/2008/01/lego.jpg');
$thing->setImageTag('img');
$thing->setImageAttributes('picture');


$thing->setDescriptionValue('This is My first recipe.');
$thing->setDescriptionTag('span');
$thing->setDescriptionAttributes('text');

$thing->setCookingMethodValue('<b>Cooking Method :Frying');
$thing->setCookingMethodTag('span');
$thing->setCookingMethodAttributes('text');


echo $thing->printHtml();
echo $thing->PrintRecipeHtml();

?>
</body>
</html>