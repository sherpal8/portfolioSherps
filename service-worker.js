// Import WorkBox 
importScripts('https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js');

if (workbox) {
  console.log('WorkBox loaded.');
} else {
  console.log('WorkBox not loaded.');
}

// CSS & JS: StaleWhileRevalidate()
workbox.routing.registerRoute(
    /\.(?:js|css|php)$/,
    new workbox.strategies.StaleWhileRevalidate(),
); 

// Cache 3rd party files
workbox.routing.registerRoute(
    /^https:\/\/ajax\.googleapis\.com\/ajax\/libs\/jquery\/3\.3\.1\/jquery\.min\.js\.*\.js/,
    new workbox.strategies.CacheFirst({
        // Use a custom cache name
        cacheName: 'portS-3rd-party-v1',
        plugins: [
            new workbox.expiration.Plugin({
                maxEntries: 20,
                maxAgeSeconds: 7 * 24 * 60 * 60,
                cacheExpirations:  7 * 24 * 60 * 60,
            })
        ],
    })
 );

// Cache image files (and mp4)
workbox.routing.registerRoute(
    /\.(?:png|gif|jpg|jpeg|svg|ico|webp|mp4)$/,
    new workbox.strategies.CacheFirst({
        cacheName: 'portS-images-v1',
        plugins: [
            new workbox.expiration.Plugin({
                maxEntries: 60,
                maxAgeSeconds: 5 * 24 * 60 * 60, // 5 Days
            }),
        ],
    }),
); 

// Precache
workbox.precaching.precacheAndRoute([
    '/portS/',
    '/portS/index.php',
    '/portS/about.php',
    '/portS/contact.php',
    '/portS/style/main.css',
    '/portS/asset/vintageCartoon.mp4',
    { url: '/', revision: '' },
]);

//Google Analytics 'offline' function by WorkBox
workbox.googleAnalytics.initialize();

// // For use in emergency: a no-op to kill buggy sw. However, it can take 24 hours for browser to update
// self.addEventListener('install', () => {
//   self.skipWaiting();
// });

// // example 1: Conventional service-worker code without using the WorkBox API 
// const cacheName = 'portS';
// let filesToCache = [
//   '/portS/',
//   '/portS/index.php',
//   '/portS/about.php',
//   '/portS/contact.php',
//   '/portS/style/main.css',
//   '/portS/script/main.js', // TODO: find out if cache of service-worker.js and main.js linking to sw can lead to buggy sw.
//   '/portS/asset/vintageCartoon.mp4',
//   '/portS/asset/icons/faviconSherps.ico',
// ];

// // Start the service worker and cache the above 'filesToCache' 
// self.addEventListener('install', function(e) {
//     console.log('Service worker for portS now installing...');
//     self.skipWaiting(); // Optional- Causes sw in-waiting to kick out active sw worker
//     // Cache all files above
//     e.waitUntil(
//         caches.open(cacheName).then(function(cache) {
//             return cache.addAll(filesToCache);
//         })
//     );
// });

// // Delete any caches that are not in 'cacheName' above
// self.addEventListener('activate', event => {
//     event.waitUntil(
//         caches.keys().then(keys => Promise.all(
//             keys.map(key => {
//                 if (!cacheName.includes(key)) {
//                     return caches.delete(key);
//                 }
//             })
//           )).then(() => {
//               console.log('Service worker for portS now ready to handle fetches.');
//           })
//     );
// });

// // Serve cached content when offline 
// self.addEventListener('fetch', function(e) {
//     e.respondWith(
//         caches.match(e.request).then(function(response) {
//             return response || fetch(e.request);
//         })
//     );
// });
