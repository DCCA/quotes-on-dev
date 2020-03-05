(function() {
    // Declare vars
    const submitQuoteForm = document.querySelector('.submit-quote-form');
    const param = 'wp/v2/posts';
    const url = apiVars.url + param;
    console.log(url);

    // Add event listeners
    submitQuoteForm.addEventListener('submit', event => {
        event.preventDefault();
        const postData = {
            'title'                : event.target[0].value,
            'content'              : event.target[1].value,
            '_qod_quote_source'    : event.target[2].value,
            '_qod_quote_source_url': event.target[3].value,
            'status'               : 'publish'
        }
        console.log(postData);
        console.log(apiVars);
        // Make the API call
        fetch(url,{
            method: 'POST',
            credentials: 'include',
            headers: {
                'content-type': 'aplication/json',
                'X-Wp-Nonce'  : apiVars.nonce
            },
            body: JSON.stringify(postData)
        })
            .then(response => console.log(response))
            .catch(err => console.log(err));
    })


}())
