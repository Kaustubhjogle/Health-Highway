var url = 'https://newsapi.org/v2/top-headlines?country=in&category=health&apiKey=890a0822b17d4b14b9d21225bd55c3b4';

var req = new Request(url);

fetch(req)
    .then(function(response) {
        console.log(response.json());
    })