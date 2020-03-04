(function($) {
    const button = document.getElementById('get-new-quote');
    const param = 'wp/v2/posts?id=' + api_vars.id;
    const url = api_vars.url + param;
    console.log(url);
    console.log(api_vars.id);
    button.addEventListener('click', () => {
        fetch(url)
            .then(data => console.log(data))
            .catch();
    })
    // console.log(api_vars.url)
}(jQuery))