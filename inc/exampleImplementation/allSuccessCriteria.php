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
          <p>This page demonstrates the ability to take information from the prototype API system and then display it on a web page.</p>
        </div>
      <div id="guidelineContainer"></div>
    </div>

  </body>

<script type="text/javascript">
window.onload = function getSuccessCriteria(){

  var APILink = "http://localhost:8888/successCriteria";

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

            output += "<li><strong>" + "<a href=\"successCritiera?" + criteriaID + "\">" +


            criteriaID + " - " + criteriaTitle + "</a></strong>: " + criteriaIntent + "</li>";
          }

          console.log(output);
          document.getElementById("guidelineContainer").innerHTML = output;
        });
      }
    )
    .catch(function(err) {
      console.log('Fetch Error :-S', err);
    });
}
</script>

</html>
