window.API = {
    "news.get": 'news',
    "news.store": 'news', 
    "news.remove": 'news/remove', 

}

window.api = function(name) {
    return CONFIG.url + "/api/" + API[name];
}