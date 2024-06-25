self.addEventListener("install", e => {
  e.waitUntil(
      caches.open("static").then(cache => {
          return cache.addAll(["./", "./wp-content/themes/twentytwentyone-child/assets/images/app-logo.png"]);
      })
  );
});

self.addEventListener("fetch", e => {
   e.respondWith(
    caches.match(e.request).then(response => {
        return response || fetch(e.request);
    })
   );
    
});
    

