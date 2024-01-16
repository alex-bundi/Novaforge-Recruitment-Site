class JobApplication {
    constructor () {
        this.userApplicationData = [];
    }

    getPersonalDetails () {
        let personalInfo = document.getElementById('personal__info');
        let nextTabBtn = document.getElementById('next');

        nextTabBtn.addEventListener('click', (event) => {
            event.preventDefault();
            let firName = document.getElementById('fname').value.trim();
            let secName = document.getElementById('sname').value.trim();
            let lasName = document.getElementById('lname').value.trim();
            let dateBirth = document.getElementById('dbirth').value.trim();
            let emAddress = document.getElementById('emAddress').value.trim();
            if (!firName) {
                this.error('Please fill in the field to search for value...', 'fname_error_message');
            } 
            if (!secName) {
                this.error('Please fill in the field to search for value...', 'sname_error_message');
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
            
            
            
        } )        
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