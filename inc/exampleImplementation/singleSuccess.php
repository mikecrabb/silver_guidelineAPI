<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>API Example Implementation</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
        <h1>Silver API Example Implementation</h1>
        <div class="alert alert-primary" role="alert">
            <p>This page demonstrates the ability to take information from the prototype API system and then display it on a web page. This contains information relating to a single success critiera (1.1.1)</p>
        </div>

        <h2><span id="criteriaTitle">Title</span></h2>
        <p><span id="criteriaIntent"></span></p>

        <h3>Benefits</h3>
        <div id="successCriteriaBenefits">
          <p>Benefits will go here</p>
        </div>
</div>

  </body>

<script type="text/javascript" src="/js/sil_API.js"></script>
<script type="text/javascript">

var successCriteriaID = "1.1.1";

getSuccessCriteriaTitle(successCriteriaID,"criteriaTitle");
getSuccessCriteriaIntent(successCriteriaID,"criteriaIntent");

</script>

</html>
