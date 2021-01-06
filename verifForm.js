document.querySelector('#comments_container form button')
    .addEventListener('click', function(event){
        event.preventDefault()
        let hasError = false
        const regexInput = /^[\S]{1,50}$/
        const regexMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
        const inputVerif = function(){
            if(this.value.match(regexInput)==null)
            {
                this.classList.add('error')
                hasError = true
            }else{
                this.classList.remove('error')
                hasError = false
            }
        }

        let firstNameInput = document.getElementById('firstName')
        if(firstNameInput.value.match(regexInput)==null)
        {
            firstNameInput.classList.add('error')
            hasError=true
        }
        firstNameInput.addEventListener('input', inputVerif)
 
        let mail = document.getElementById('mail')
        if(mail.value.match(regexMail)==null)
        {
            mail.classList.add('error')
            hasError=true
        }
        mail.addEventListener('input', function(){
            if(this.value.match(regexMail)==null)
            {
                this.classList.add('error')
                hasError = true
            }else{
                this.classList.remove('error')
                hasError = false
            }
        });


        let messageTextarea = document.getElementById('message')
        if(messageTextarea.value == '')
        {
            messageTextarea.classList.add('error')
            hasError=true
        }
        messageTextarea.addEventListener('input', function() {
            if(this.value == ''){
                this.classList.add('error')
                hassError = true
            }else{
                this.classList.remove('error')
                hassError = false
            }
        })

        if(!hasError)
        {
            document.querySelector('#comments_container form')
                .submit()
        }
})
