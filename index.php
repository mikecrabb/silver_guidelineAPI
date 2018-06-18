<?php

define('INCLUDE_DIR', dirname(__FILE__) . '/inc/');

$rules = array(
    //
    //main pages
    //
    'successCriteria-all' => "/successCriteria",
    'successCriteria-individual' => "/successCriteria/(?'criteriaID'[\w\-\.]+)",

    'exceptions-all' => "/exceptions/(?'criteriaID'[\w\-\.]+)",
    'additionalInformation-all' => "/additionalInformation/(?'criteriaID'[\w\-\.]+)",
    'benefits-all' => "/benefits/(?'criteriaID'[\w\-\.]+)",
    'realWorldExamples-all' => "/realWorldExamples/(?'criteriaID'[\w\-\.]+)",
    'failure-all' => "/failures/(?'criteriaID'[\w\-\.]+)",
    'failureExamples-all' => "/failureExamples/(?'criteriaID'[\w\-\.]+)",

    'passingTechnique-all' => "/passingTechniques",
    'passingTechnique-individual' => "/passingTechnique/(?'criteriaID'[\w\-\.]+)",

    'exampleImplementation/allSuccessCriteria' => "/example/allSuccessCriteria",
    'exampleImplementation/singleSuccess' => "/example/singleSuccess",


    //
    // Home Page
    //
    'home' => "/"
);

$uri = rtrim(dirname($_SERVER["SCRIPT_NAME"]), '/');
$uri = '/' . trim(str_replace($uri, '', $_SERVER['REQUEST_URI']), '/');
$uri = urldecode($uri);

foreach ($rules as $action => $rule) {
    if (preg_match('~^' . $rule . '$~i', $uri, $params)) {
        include(INCLUDE_DIR . $action . '.php');
        exit();
    }
}

// nothing is found so handle the 404 error
include(INCLUDE_DIR . '404.php');

?>
