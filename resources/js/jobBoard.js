getSearchParameter();

function getSearchParameter () {
    const jobSearchForm = document.getElementById('job_search_form');

    jobSearchForm.addEventListener("submit", (event) => {
        event.preventDefault(); // prevents form submission
        
        let searchInput = document.getElementById('search_jobs');
        let searchquery = searchInput.value.trim();

        if (searchInput === null || searchquery === ''){
            error("Please type something to search...");
        } else {
            

            jobSearchForm.submit();
            return searchquery;
        }

    });
}

function error (message){
    const errorMessageElement = document.getElementById('error_message');
    errorMessageElement.textContent = message;
    errorMessageElement.style.visibility = "visible";
    errorMessageElement.style.color = "red";
}

function success (){

}