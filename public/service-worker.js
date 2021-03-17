// Copyright 2016 Google Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//      http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

var dataCacheName = 'openmartgh-v2';
var cacheName = 'openmartgh-final-2';
var filesToCache = [
  '/',
  '/favicon.ico',
  '/manifest.json',
  '/service-worker.js',
  '/js/app.js',
  '/js/scripts.js',
  '/css/styles.css',
  '/css/style.css',
  '/css/open-iconic-bootstrap.min.css',
  '/css/animate.css',
  '/css/owl.carousel.min.css',
  '/css/owl.theme.default.min.css',
  '/css/magnific-popup.css',
  '/css/aos.css',
  '/css/ionicons.min.css',
  '/css/bootstrap-datepicker.css',
  '/css/jquery.timepicker.css',
  '/css/fontawesome/font-awesome.css',
  '/css/flaticon.css',
  '/css/icomoon.css',
  '/icons/apple-touch-icon.png'
];

const fetchContent = async () => {
    const url = `/`;
    const response = await fetch(url);
    const cache = await caches.open(cacheName);
    await cache.put(url, response);
};

self.addEventListener('install', function(e) {
  console.log('[ServiceWorker] Install');
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      console.log('[ServiceWorker] Caching app shell');
      return cache.addAll(filesToCache);
    })
  );
});

self.addEventListener('periodicsync', (event) => {``
    if (event.tag === 'content-sync') {
      console.log('Fetching content in the background!');
      event.waitUntil(fetchContent());
    }
  });

self.addEventListener('activate', function(e) {
  console.log('[ServiceWorker] Activate');
  e.waitUntil(
    caches.keys().then(function(keyList) {
      return Promise.all(keyList.map(function(key) {
        if (key !== cacheName && key !== dataCacheName) {
          console.log('[ServiceWorker] Removing old cache', key);
          return caches.delete(key);
        }
      }));
    })
  );
  return self.clients.claim();
});

self.addEventListener('fetch', function(e) {
  console.log('[Service Worker] Fetch', e.request.url);
    e.respondWith(
      caches.match(e.request).then(function(response) {
        return fetch(e.request) || response;
      })
    );
});
