function getSuccessCriteriaTitle(criteriaID, location) {
  var value;
  var APILink = "http://localhost:8888/successCriteria/" + criteriaID;

  fetch(APILink, {})
    .then(
      function(response) {
        if (response.status !== 200) {
          console.log('Looks like there was a problem. Status Code: ' +
            response.status);
          return;
        }
        response.json().then(function(data) {

          for (var i in data) {
            var value = data[i].criteriaTitle;
          }
          document.getElementById(location).innerHTML = value
          console.log(value);
          console.log("not exiting");
        });
      }

    )
    .catch(function(err) {
      console.log('Fetch Error :-S', err);
    });
}

function getSuccessCriteriaIntent(criteriaID, location) {
  var value;
  var APILink = "http://localhost:8888/successCriteria/" + criteriaID;

  fetch(APILink, {})
    .then(
      function(response) {
        if (response.status !== 200) {
          console.log('Looks like there was a problem. Status Code: ' +
            response.status);
          return;
        }
        response.json().then(function(data) {

          for (var i in data) {
            var value = data[i].criteriaIntent;
          }
          document.getElementById(location).innerHTML = value
          console.log(value);
          console.log("not exiting");
        });
      }

    )
    .catch(function(err) {
      console.log('Fetch Error :-S', err);
    });
}
