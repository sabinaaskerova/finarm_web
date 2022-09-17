const buttons = document.querySelectorAll('article button[name= "delete"]')

buttons.forEach(button =>{
    
    button.addEventListener("click", function(event){
        if(confirm("Are you sure you want to delete this product?")){
            
            fetch("assets/php/delete_product_form.php", {
                method: 'POST', 
                mode: 'cors', 
                cache: 'no-cache', 
                credentials: 'same-origin', 
                headers: {
                  'Content-Type': 'application/json'
                },
                redirect: 'follow',
                referrerPolicy: 'no-referrer',
                body: JSON.stringify({id: button.getAttribute('data-product-id')}) // body data type must match "Content-Type" header
              }).then((response) =>  response.json()
              .then((data) => {
                  let article = button.parentNode
                  article.remove()
              })
            
              );
        }

       
    })
    
})