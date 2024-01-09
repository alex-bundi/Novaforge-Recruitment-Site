class JobBoard {
    constructor () {
        this.jobList = [];
    }

    getAvailableJobs () {
        let requestsCount = 0
        this.url = 'http://127.0.0.1:8000/jobboard/availablejobs';
        fetch(this.url)
        .then(async (res) => {
            if (res.ok) {
                requestsCount++;
                console.log(`All requests sent = ${requestsCount}`);

                let jobsData = await res.json();
                let jobDetails = Object.values(jobsData.message);

                jobDetails.forEach((job) => this.jobList.push(job));
                this.accessJobsData(this.jobList);
            }
                  
        })
    }

    // Makes the data fetched from the db available
    accessJobsData (data) {
        
        const jobSearchBtn = document.getElementById('search_button');
        jobSearchBtn.addEventListener('click', () => this.getSearchParameter(data));
        this.postAvailaibleJobs(data);
    }

    // Search functionality to Search for value in accessJobsData function
    getSearchParameter (careers) {
        const jobSearchForm = document.getElementById('job_search_form');
        let searchInput = document.getElementById('search_jobs').value.trim(); // Clean Input value
       
        jobSearchForm.addEventListener('submit', (event) => {
            event.preventDefault();

            if (searchInput == null || searchInput.length === 0){
                this.error('Please fill in the field to search for value...');
            } else {
                let value = careers.find(query => query.job_title === searchInput);

                if (typeof value == 'undefined') { // If search value has not been found.
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
                    
                    foundSearchValue.innerHTML = this.viewContent(value.job_title, value.Salary, value.location);
                }

            }
        })

        
    }

    // Posts all available jobs in the view
    postAvailaibleJobs (postedCareers) {
        let allJobsHtmlContent = document.getElementById('job__info__container');
        postedCareers.forEach((job) => {
            allJobsHtmlContent.innerHTML += this.viewContent(job.job_title, job.Salary, job.location)
        })
    }

    // HTML Content to render
    viewContent (jobTitle, jobSalary, jobLocation) {
        let htmlContent = `
            <li>
                <a href="http://127.0.0.1:8000/jobboard/viewjob">
                    <div class="flex p-2 rounded-md border-2 border-slate-200 hover:bg-slate-200 md:basis-2/4">
                                        
                        <div class="flex flex-col">
                            <h1 class="pl-3 font-sans text-base font-bold 
                                tracking-wide text-darkBlue md:text-base">
                                ${jobTitle} 
                            </h1>
                            <div class="flex pl-3 space-x-1">
                                
                                <div class="font-sans text-sm font-semibold 
                                    tracking-wide text-black md:text-sm">
                                    <h3>Ksh ${jobSalary}</h3>
                                </div>
                                
                                <div class="font-sans text-sm font-semibold 
                                    text-black/50 tracking-wide md:text-sm">
                                    <P>${jobLocation} </P>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        `;

        return htmlContent;
    }

    // To display input error messages
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
