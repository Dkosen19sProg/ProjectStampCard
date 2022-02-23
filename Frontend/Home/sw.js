const CACHE_NAME = "pwa-caches";
var urlsToCache = ["./index.html"];

self.addEventListener("install", function(event) {
    event.waitUntil(
        caches.open(CACHE_NAME).then(function(cache) {
            return cache.addAll(urlsToCache);
        })
    );
});

self.addEventListener("fetch", function(event) {
    event.respondWith(
        caches.match(event.request).then(function(response) {
            return response ? response : fetch(event.request);
        })
    );
});