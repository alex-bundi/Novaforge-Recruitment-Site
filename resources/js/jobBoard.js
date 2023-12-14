getSearchParameter();

function getSearchParameter () {
    const jobSearchForm = document.getElementById('job_search_form');

    jobSearchForm.addEventListener("submit", (event) => {
        event.preventDefault(); // prevents form submission
        
        let searchInput = document.getElementById('search_jobs').value.trim();
        console.log(searchInput);

    });
}