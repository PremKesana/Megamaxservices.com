/* if (!navigator.serviceWorker.controller) {
     navigator.serviceWorker.register("/script.js").then(function(reg) {
         console.log("Service worker has been registered for scope: " + reg.scope);
     });
 }*/


if ("serviceWorker" in navigator) {
    navigator.serviceWorker.register("/sw.js").then(registration => {
        console.log("SW Registered");
        console.log(registration);
    }).catch(error => {
        console.log("SW Registration Failed");
        console.log(error);
    })
}