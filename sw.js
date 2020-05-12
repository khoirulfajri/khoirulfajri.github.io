var cacheName = 'pwa-epl';
var filesToCache = [
  '/',
  '/index.php',
  '/aquamarine.css',
  '/aquamarine.scss',
  '/js/animate-in.js',
  '/js/navbar-ontop.js',
  '/js/smooth-scroll.js'
];

/* Start the service worker and cache all of the app's content */
self.addEventListener('install', function(e) {
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.addAll(filesToCache);
    })
  );
});

/* Serve cached content when offline */
self.addEventListener('fetch', function(e) {
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});