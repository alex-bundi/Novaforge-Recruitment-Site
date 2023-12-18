const jobSearchForm = document.getElementById('job_search_form');
getSearchParameter ();


function getSearchParameter() {
    const jobSearchForm = document.getElementById('job_search_form');

    jobSearchForm.addEventListener("submit", (event) => {
        event.preventDefault(); // prevents form submission

        let searchInput = document.getElementById('search_jobs');
        let searchquery = searchInput.value.trim();

        if (searchInput === null || searchquery === ''){
            error("Please type something to search...");
        } else {
            // AJAX request to send the search query to the controller
            fetch(`/jobboard/searchquery?jobs_search=${searchquery}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    // Add headers if needed
                },
            })
            .then(response => {
                // Handle the response if needed
                console.log(response);
                jobSearchForm.submit();
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    });
}


function error (message){
    const errorMessageElement = document.getElementById('error_message');
    errorMessageElement.textContent = message;
    errorMessageElement.style.visibility = "visible";
    errorMessageElement.style.color = "red";
}

// function sendData (){
    
//     console.log(searchQueryValue);
// }