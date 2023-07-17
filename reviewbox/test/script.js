function search() {
    var searchInput = document.getElementById('search-input').value;
    
    // Make an AJAX request to the server-side script
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var results = JSON.parse(this.responseText);
        displayResults(results);
      }
    };
    xhttp.open('GET', 'reviews.php?q=' + encodeURIComponent(searchInput), true);
    xhttp.send();
  }
  
  function displayResults(results) {
    var searchResults = document.getElementById('search-results');
    searchResults.innerHTML = '';
    
    if (results.length === 0) {
      searchResults.innerHTML = 'No results available.';
      return;
    }
    
    // Loop through the results and create a link for each review
    for (var i = 0; i < results.length; i++) {
      var result = results[i];
      var link = document.createElement('a');
      link.href = result.url;
      link.textContent = result.name;
      searchResults.appendChild(link);
      searchResults.appendChild(document.createElement('br'));
    }
  }
  