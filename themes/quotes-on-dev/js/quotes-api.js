(function() {
    const button = document.getElementById('get-new-quote');
    const param = 'wp/v2/posts?orderby=rand&per_page=1';
    const url = api_vars.url + param;
    button.addEventListener('click', () => {
        fetch(url)
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(err => console.log(err));
    })
}())