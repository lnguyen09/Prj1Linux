// get the suggested activity and pass it to the front end
function makeSuggestion() {
    fetch('suggestionController.php')
    .then(response => response.text())
    .then(suggestion => {
      // Display the joke on the page
      document.getElementById('suggestion').innerHTML = suggestion;
    });
}