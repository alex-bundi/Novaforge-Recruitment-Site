class JobApplication {
    constructor () {
        this.userApplicationData = [];
    }

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
                console.log(this.userApplicationData);   
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
            if (isCurrent.checked){
                console.log('hello');
            }

            // console.log(current);
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