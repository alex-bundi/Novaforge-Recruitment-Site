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

            if (!firName) {
                this.error('Please fill in the field to search for value...');
            } else {
                console.log('hello');
            }
            
            
        } )        
    }

    // To display input error messages
    error (message){
        this.message = message;
        const errorMessageElement = document.getElementById('error_message');

        errorMessageElement.textContent = this.message;
        errorMessageElement.style.visibility = "visible";
        errorMessageElement.style.color = "red";

        setTimeout(() => errorMessageElement.remove(), 10000); // Remove warning after 3 secs
    }
}

let jobApp = new JobApplication();
jobApp.getPersonalDetails();