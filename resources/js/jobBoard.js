class JobBoard {
    getSearchParameter() {
        const jobSearchForm = document.getElementById('job_search_form');

        jobSearchForm.addEventListener('submit',  (event) => {
            event.preventDefault();
            let token = document.querySelector('input[name=_token').value;
            let searchInput = document.getElementById('search_jobs').value.trim(); // Clean Input value
            
            if (searchInput == null || searchInput.length === 0){
                this.error("Please type something to search...");
            } else {
                let url = 'http://127.0.0.1:8000/jobboard/searchquery';
                fetch (url, {
                    method:'POST',
                    headers: {
                        'Content-type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-Token': token
                    },
                    body: JSON.stringify({
                        searchInput:searchInput
                    })
                })
                .then(async (res) => {
                    let data = await res.json(); // Suspend execution until the returned promise is fulfilled or rejected.
                    let message = data.message;
                    if (typeof(message) === 'string'){
                        const notFound = document.getElementById('not_found');
                        notFound.classList.remove('invisible');
                        const paragraph = notFound.querySelector('p'); // Select the <p> element within #not_found
                        
                        paragraph.textContent = message; 
                        setTimeout(() => notFound.remove(), 3000); // Remove warning after 3 secs
                        
                    }else if(message instanceof Object == true) { // check the type of an object
                        console.log('hello world');
                    }
                    
                })
                
                .catch(error => {
                    console.error(error);
                  });
            }

        })
        
    }

    // Display error message
    error (message){
        this.message = message;
        const errorMessageElement = document.getElementById('error_message');
        errorMessageElement.textContent = this.message;
        errorMessageElement.style.visibility = "visible";
        errorMessageElement.style.color = "red";
    }


}

let jobList = new JobBoard();
jobList.getSearchParameter();
