(function() {
    if(apiVars.isSubmit && apiVars.isLogIn !== ''){
    // Declare vars
    const submitQuoteForm = document.querySelector('.submit-quote-form');
    const param = 'wp/v2/posts';
    const url = apiVars.url + param;
    const feedbackWrapper = document.querySelector('.feedback-wrap');
    // Add event listeners
    submitQuoteForm.addEventListener('submit', event => {
        event.preventDefault();
	feedbackWrapper.innerHTML = '';
        const postData = {
            'title'                : event.target[0].value,
            'content'              : event.target[1].value,
            '_qod_quote_source'    : event.target[2].value,
            '_qod_quote_source_url': event.target[3].value,
            'status'               : 'publish'
        }
	// Check if fields are not empty
	if(postData.title !== '' || postData.content !== '' || postData._qod_quote_source !== '' || postData._qod_quote_source_url !== ''){
        // Make the API call
        fetch(url,{
            method: 'POST',
            credentials: 'include',
            headers: {
                'content-type': 'application/json',
                'X-Wp-Nonce'  : apiVars.nonce
            },
            body: JSON.stringify(postData)})
		.then(response => {
		    resetFields(submitQuoteForm);
		    if(response.ok){
			const successMsg = {
			    message: 'Thanks for sending one more quote!',
			    addClass: 'success'
			};
			handlerSubmit(successMsg, feedbackWrapper);
		    } else {
			const errorMsg = {
			    message: 'Something went wrong. Please try again!',
			    addClass: 'alert'
			}
			handlerSubmit(errorMsg, feedbackWrapper);
		    }
		})
		.catch(err => console.log(err));
	} else {
	    const errorMsg = {
		message: 'Something went wrong. Please try again!',
		addClass: 'alert'
	    }
	    handlerSubmit(errorMsg, feedbackWrapper);
	}
    });
    }
    function resetFields(form){
	// Get the forms field
	const title = form[0];
	const content = form[1];
	const source = form[2];
	const sourceUrl = form[3];
	// Set the values to empty
	title.value = '';
	content.value = '';
	source.value = '';
	sourceUrl.value = '';
    }
    function handlerSubmit(message, feedbackWrapper){
	// Insert feedback in feedback wrapper
	feedbackWrapper.innerHTML = '';
	const feedback = document.createElement('p');
	feedback.classList.add(message.addClass);
	feedback.innerText = message.message;
	// Append the feedback message in the HTML
	feedbackWrapper.appendChild(feedback);
    }
}())
