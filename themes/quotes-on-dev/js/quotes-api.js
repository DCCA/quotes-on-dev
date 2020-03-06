(function() {
    // Declare vars
    const button = document.getElementById('get-new-quote');
    const param = 'wp/v2/posts?orderby=rand&per_page=1';
    const url = apiGetVars.url + param;

    // Add event listeners
    button.addEventListener('click', () => {
        // Make the API call
        fetch(url)
            .then(response => response.json())
            .then(postData => {
                changePost(postData);
            })
            .catch(err => console.log(err));
    })

    // Handler functions
    function changePost(postData){
        // Check if is home
        if(apiGetVars.isHome){
        const entryContent = document.querySelector('.entry-content');
        const entryHeader = document.querySelector('.entry-title');
	const sourceContent = document.querySelector('.source');
        entryContent.innerHTML = postData[0].content.rendered;
        entryHeader.innerText = '— ' + postData[0].title.rendered;
	sourceContent.innerHTML = `<a href="${postData[0]._qod_quote_source_url}">${postData[0]._qod_quote_source}</a>`
        }
    }

}())
