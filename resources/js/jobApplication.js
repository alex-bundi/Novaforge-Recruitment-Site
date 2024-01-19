class JobApplication {
    constructor () {
        this.userApplicationData = [];
    }

    // Gets the data inserted from the personal information tab
    getPersonalDetails () {
        let nextTabBtn = document.getElementById('next');

        nextTabBtn.addEventListener('click', (event) => {
            event.preventDefault();
            let firName = document.getElementById('fname').value.trim();
            let secName = document.getElementById('sname').value.trim();
            let lasName = document.getElementById('lname').value.trim();
            let dateBirth = document.getElementById('dbirth').value.trim();
            let emAddress = document.getElementById('emAddress').value.trim();
            let phoneNo = document.getElementById('phoneno').value.trim();

            if (!firName) {
                this.error('Please fill in the field to search for value...', 'fname_error_message');
            }  
            if (!lasName) {
                this.error('Please fill in the field to search for value...', 'lname_error_message');
            }
            if (!dateBirth) {
                this.error('Please fill in the field to search for value...', 'db_error_message');
            }
            if (!emAddress) {
                this.error('Please fill in the field to search for value...', 'em_error_message');
            }
            
            let emptyValues = false;
            let personalInfo = {
                'firstName':firName,
                'lastName':lasName,
                'dateBirth':dateBirth,
                'email':emAddress,
                'secondName':secName,
                'phoneNo':phoneNo
            };


            for (let [key, value] of Object.entries(personalInfo).slice(0,4)) {
                if (value === '') {
                    emptyValues = true;
                    return emptyValues;
                }
           }
           if (emptyValues == false) {
                this.userApplicationData.push(personalInfo);
           }
           
            
        } )        
    }

    getExperienceDetails () {
        let nextTabBtn = document.getElementById('next-tab3');

        nextTabBtn.addEventListener('click', (event) => {
            event.preventDefault();
            let jobTitle = document.getElementById('jobtitle').value.trim();
            let company = document.getElementById('company').value.trim();
            let duration = document.getElementById('duration').value.trim();
            let isCurrent = document.getElementById('iscurrent');
            let reponsibilities = document.getElementById('roles').value.trim();
            this.currentJob = 0;


            if (isCurrent.checked){
                this.currentJob = 1
            }

            let emptyValues = false;
            let applicantsJobExperience = {
                'jobTitle': jobTitle,
                'company':company,
                'duration':duration,
                'isCurrent':this.currentJob,
                'reponsibilities':reponsibilities
            }
            for (let [key, value] of Object.entries(applicantsJobExperience).slice(0,1)) {
                if (value === '') {
                    emptyValues = true;
                    return emptyValues;
                }
           }
            this.userApplicationData.push(applicantsJobExperience);

        })
    }

    getDocumentation () {
        const submitApplication = document.getElementById('applicant__details');

        submitApplication.addEventListener('submit', (event) => {
            event.preventDefault();
            let schoolType = document.getElementById('school_type');
            let schoolValue = schoolType.options[schoolType.selectedIndex].text; // Get value of dropdown

            let schoolName = document.getElementById('schoolname').value.trim();
            let schoolAddress = document.getElementById('schooladdress').value.trim();
            let schoolCity = document.getElementById('schoolcity').value.trim();
            let noYears = document.getElementById('noofyears').value.trim();

            let cvFile = document.getElementById('cv_file').files[0];
            let emptyValues = false;
            if (!cvFile) {
                emptyValues = true;
                return emptyValues;
            }else{
                const lastModifiedDate = new Date(cvFile.lastModified).toLocaleString();
                this.uploadedFile = `${lastModifiedDate}_${cvFile.name}_${cvFile.type}`
                
            }

            let applicantDocs = {
                'schoolType':schoolValue,
                'schoolName':schoolName,
                'uploadedFile':this.uploadedFile,
                'schoolAddress':schoolAddress,
                'schoolCity':schoolCity,
                'noYears':noYears
            }

            for (let [key, value] of Object.entries(applicantDocs).slice(0,3)) {
                if (value === '') {
                    emptyValues = true;
                    let emptyFieldError = document.getElementById('empty-values');
                    emptyFieldError.classList.remove('hidden');
                    emptyFieldError.textContent = 'Some mandatory fields have empty values';
                    emptyFieldError.style.color = "red";
                    return emptyValues;
                }
            }
            if (emptyValues == false) {
                this.userApplicationData.push(applicantDocs);
                let token = document.querySelector('input[name=_token').value;
                // console.log(this.userApplicationData);
                let url = 'http://127.0.0.1:8000/jobboard/viewjob/jobapplicationform/applicationdata';
                fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-Token': token
                    },
                    body: JSON.stringify({
                        'userData': this.userApplicationData
                    })
                })
                .then(function(res){
                    if (res.status == 200) {
                        window.location.href = 'http://127.0.0.1:8000/jobboard/viewjob/applicationsuccess';
                    }
                })
                
            
            
            }
            

        })
    }


    // To display input error messages
    error (message, fieldId){
        this.message = message;
        this.fieldId = fieldId;  // The Second parameter solves the edge case of when their is no input at all in the most fields

        let errorMessageElement = document.getElementById(this.fieldId);
        errorMessageElement.classList.remove('hidden');
        errorMessageElement.textContent = this.message;
        errorMessageElement.style.color = "red";

        setTimeout(() => errorMessageElement.remove(), 10000); // Remove warning after 3 secs
    }
}

let jobApp = new JobApplication();
jobApp.getPersonalDetails();
jobApp.getExperienceDetails();
jobApp.getDocumentation();
// jobApp.postUserApplication();