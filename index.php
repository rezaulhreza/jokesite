<?php



//import the db
require './templates/connect.php';

//import the template
require './functions/loadtemplate.php';

//set the title

$title='Home';

//implement the template to the html

$output  =loadtemplate('./templates/home.html.php',[]);

//import the layout

require './templates/layout.html.php';





