const jobSearchForm = document.getElementById('job_search_form');
getSearchParameter ();


function getSearchParameter () {
        jobSearchForm.addEventListener("submit", (event) => {
        event.preventDefault(); // prevents form submission
        
        let searchInput = document.getElementById('search_jobs');
        let searchquery = searchInput.value.trim();

        if (searchInput === null || searchquery === ''){
            error("Please type something to search...");
        } else {
            $.ajax ({
                url: '/jobboard',
                type: 'GET',
                dataType: 'json',
            
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