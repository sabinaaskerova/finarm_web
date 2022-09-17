const buttons = document.querySelectorAll('article button')
console.log(buttons)
buttons.forEach(button =>{
   
    button.addEventListener("click", function(event){
        if(confirm("Are you sure you want to delete this article?")){
            fetch("assets/php/delete_article_form.php", {
                method: 'POST', 
                mode: 'cors', 
                cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                credentials: 'same-origin', // include, *same-origin, omit
                headers: {
                  'Content-Type': 'application/json'
                },
                redirect: 'follow',
                referrerPolicy: 'no-referrer',
                body: JSON.stringify({id: button.getAttribute('data-article-id')}) // body data type must match "Content-Type" header
              }).then((response) =>  response.json()
              .then((data) => {
                  let article = button.parentNode
                  article.remove()
              }));
        }

       
    })
    
})