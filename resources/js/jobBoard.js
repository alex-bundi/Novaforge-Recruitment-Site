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
                        console.log(message);
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

    // Gets all the availabke jobs sent from the controller
    getAvailableCareers (){
        let url = 'http://127.0.0.1:8000/jobboard/availablejobs';
        fetch(url)
        .then(async (res) => {
            let jobsData = await res.json(); // Suspend execution until the returned promise is fulfilled or rejected.
            let message = jobsData.message;
            console.log(message);

           

            for (let key in message){
                console.log(message[key].job_title)

                let innerHtml = `
                    <div class="flex p-2 rounded-md border-2 border-slate-200 md:basis-2/4">
                        {{-- Company logo --}}
                        <div class="bg-gray-400 rounded-lg">
                            <p class="p-1">N</p>
                        </div>
                        <div class="flex flex-col">
                            {{-- Job Title --}}
                            <h1 class="pl-3 font-sans text-base font-bold 
                                tracking-wide text-darkBlue md:text-xl">
                                ${message[key].job_title} 
                            </h1>
                            <div class="flex pl-3 space-x-1">
                                {{-- Salary --}}
                                <div class="font-sans text-sm font-semibold 
                                    tracking-wide text-black/75 md:text-base">
                                    <h3>$8K</h3>
                                </div>
                                {{-- Location --}}
                                <div class="font-sans text-sm font-semibold 
                                    text-black/50 tracking-wide md:text-base">
                                    <P>Nairobi, Kenya</P>
                                </div>
                            </div>
                        </div>
                    </div>`

                // for (let innerKeys in message[key]){
                //     console.log(message[key].job_title)
                // }
            }
            
        })
    }

}

let jobList = new JobBoard();
jobList.getSearchParameter();
jobList.getAvailableCareers();
