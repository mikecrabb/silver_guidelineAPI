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

        <div id="successCriteriaTitle">
          <h2>Title</h2>
        </div>
        <div id="successCriteriaDescription">
          <p>Description will go here</p>
        </div>

        <h3>Benefits</h3>
        <div id="successCriteriaBenefits">
          <p>Benefits will go here</p>
        </div>
</div>

  </body>
<script type="text/javascript" src="/js/sil_API.js"></script>
<script type="text/javascript">

  var successCriteriaID = "1.1.1";


  var APILink = "http://localhost:8888/successCriteria/" + successCriteriaID;

  fetch(APILink,{})
    .then(
      function(response) {
        if (response.status !== 200) {
          console.log('Looks like there was a problem. Status Code: ' +
            response.status);
          return;
        }

        // Examine the text in the response
        response.json().then(function(data) {

          ////DEBUG!
           console.log(data);

          var output = "";
          for (var i in data) {
              var criteriaID = data[i].successCriteriaID;
              var criteriaTitle = data[i].criteriaTitle;
              var criteriaIntent = data[i].criteriaIntent;
          }

          console.log(getSuccessCriteriaTitle(successCriteriaID));

          document.getElementById("successCriteriaTitle").innerHTML = "<h2>" + criteriaID +": " + getSuccessCriteriaTitle(successCriteriaID) + "</h2>";
          document.getElementById("successCriteriaDescription").innerHTML = "<p>" + criteriaIntent + "</p>";

        });
      }
    )
    .catch(function(err) {
      console.log('Fetch Error :-S', err);
    });
</script>

</html>
