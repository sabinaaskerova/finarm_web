document.querySelector('form button')
    .addEventListener('click', function(event){
        event.preventDefault()
        let hasError = false
        const errorParagraph = document.querySelector('form p')
        const price = document.querySelector('input') 
        
        
        if(price?.value.length === 0){
            errorParagraph.style.display = "block"
            errorParagraph.innerHTML = "Please enter the price"
            hasError = true
            price.classList.add('error')
        }
        if(price.value.match(/^\d+$/) === null){
            errorParagraph.style.display = "block"
            errorParagraph.innerHTML = "Price not valid"
            price.classList.add('error')
            hasError = true
        }
        
        price.addEventListener('input', function(){
            errorParagraph.style.display = "none"
            errorParagraph.innerHTML = ""
            if(this.value.length > 50 || this.value.match(/^\d+$/) === null){
                this.classList.add('error')
            } else{
                this.classList.remove('error')
            }
        })
        
        const description = document.querySelector('textarea[name="description"]')
        if(description?.value.length === 0){
            errorParagraph.style.display = "block"
            errorParagraph.innerHTML += "<br>"+"Please enter text of your description"
            hasError = true
            description.classList.add('error')
        }
        if(description?.value.length >1000){
            errorParagraph.style.display = "block"
            errorParagraph.innerHTML += "<br>"+"Limit of characters reached for description"
            hasError = true
            description.classList.add('error')
        }
        description.addEventListener('input', function(){
            errorParagraph.style.display = "none"
            errorParagraph.innerHTML = ""
            if(this.value.length === 0 || this.value.length > 1000){
                this.classList.add('error')
            } else{
                this.classList.remove('error')
            }
        })

        const heading = document.querySelector('textarea[name="heading"]')
        if(heading?.value.length === 0){
            errorParagraph.style.display = "block"
            errorParagraph.innerHTML += "<br>"+"Please enter text of your heading"
            hasError = true
            heading.classList.add('error')
        }
        if(heading?.value.length >255){
            errorParagraph.style.display = "block"
            errorParagraph.innerHTML += "<br>"+"Limit of characters reached for heading"
            hasError = true
            heading.classList.add('error')
        }
        heading.addEventListener('input', function(){
            errorParagraph.style.display = "none"
            errorParagraph.innerHTML = ""
            if(this.value.length === 0 || this.value.length > 255){
                this.classList.add('error')
            } else{
                this.classList.remove('error')
            }
        })
        if(!hasError){
            document.querySelector('form').submit()

        } 
        
    })
