// get the joke and pass it to the front end
function makeJoke() {
    fetch('jokeController.php')
    .then(response => response.text())
    .then(joke => {
      // Display the joke on the page
      document.getElementById('joke').innerHTML = joke;
    });
}