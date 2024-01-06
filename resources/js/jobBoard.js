class JobBoard {
    constructor(){
        this.jobList = [];
        this.url = 'http://127.0.0.1:8000/jobboard/availablejobs';

    }

    // Get data from JobBoardController and append to an array
    getAvailableJobs (){
        let allJobsHtmlContent = document.getElementById('all__jobs__list');

        fetch(this.url)
        .then(async (res) => {
            if(res.ok){
                let jobsData = await res.json(); // Suspend execution until the returned promise is fulfilled or rejected.

                let message = jobsData.message;
                let jobDetails = Object.values(message);
                jobDetails.forEach((job) => this.jobList.push(job));

                this.jobList.forEach((job) => {
                    allJobsHtmlContent.innerHTML += `
                        <div class="flex flex-col mb-2 md:flex-row gap-y-2 md:space-x-4">
                            <ul>
                                <li>
                                    <div class="flex p-2 rounded-md border-2 border-slate-200 md:basis-2/4">
                                        
                                        <div class="flex flex-col">
                                            <h1 class="pl-3 font-sans text-base font-bold 
                                                tracking-wide text-darkBlue md:text-base">
                                                ${job.job_title} 
                                            </h1>
                                            <div class="flex pl-3 space-x-1">
                                                
                                                <div class="font-sans text-sm font-semibold 
                                                    tracking-wide text-black md:text-sm">
                                                    <h3>Ksh ${job.Salary}</h3>
                                                </div>
                                                
                                                <div class="font-sans text-sm font-semibold 
                                                    text-black/50 tracking-wide md:text-sm">
                                                    <P>${job.location} </P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    `; 
                });
   
                return this.jobList;
            }else{
                throw new Error('SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it');
            }
        })
        .catch((error) => console.log(error))
                
    }

    // Available Jobs
    allAvailableJobs () {
        let submitSearch = false;
        const jobSearchBtn = document.getElementById('search_button');
        
        jobSearchBtn.addEventListener('click', () => {
            submitSearch = true;
            if (submitSearch == true) {
                this.searchForParameter();
            }
        });
    }
    
    // Search for value in records
    searchForParameter () {
        const jobSearchForm = document.getElementById('job_search_form');

        jobSearchForm.addEventListener('submit', (event) => {
            event.preventDefault();
            let searchInput = document.getElementById('search_jobs').value.trim(); // Clean Input value

            if (searchInput == null || searchInput.length === 0){
                this.error('Please fill in the field to search for value...');
            }else {
                let value = this.jobList.find(query => query.job_title === searchInput);

                if (typeof value == 'undefined') {
                    const message = 'Search value not found.';
                    const notFound = document.getElementById('not_found');

                    if (notFound.classList.contains('invisible')) {
                        notFound.classList.remove('invisible');
                      }                    
                    const paragraph = notFound.querySelector('p'); // Select the <p> element within #not_found
                    
                    paragraph.textContent = message; 
                    setTimeout(() => notFound.remove(), 7000); // Remove warning after 3 secs

                }else {
                    let foundSearchValue = document.getElementById('found_search_value');

                    let searchHtmlContent = `
                        <div class="flex flex-col md:flex-row gap-y-2 md:space-x-4">
                            <ul>
                                <li>
                                    <div class="flex p-2 rounded-md border-2 border-slate-200 md:basis-2/4">
                                        
                                        <div class="flex flex-col">
                                            <h1 class="pl-3 font-sans text-base font-bold 
                                                tracking-wide text-darkBlue md:text-base">
                                                ${value.job_title} 
                                            </h1>
                                            <div class="flex pl-3 space-x-1">
                                                
                                                <div class="font-sans text-sm font-semibold 
                                                    tracking-wide text-black md:text-sm">
                                                    <h3>Ksh ${value.Salary}</h3>
                                                </div>
                                                
                                                <div class="font-sans text-sm font-semibold 
                                                    text-black/50 tracking-wide md:text-sm">
                                                    <P>${value.location} </P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    `;
                    foundSearchValue.innerHTML = searchHtmlContent;
                }
            }
        });
    }

    // Display error message
    error (message){
        this.message = message;
        const errorMessageElement = document.getElementById('error_message');

        errorMessageElement.textContent = this.message;
        errorMessageElement.style.visibility = "visible";
        errorMessageElement.style.color = "red";

        setTimeout(() => errorMessageElement.remove(), 3000); // Remove warning after 3 secs
    }

}

let careersList = new JobBoard();
careersList.getAvailableJobs();
careersList.allAvailableJobs();