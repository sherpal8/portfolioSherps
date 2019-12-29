// Register SW
if('serviceWorker' in navigator) {	
	navigator.serviceWorker
        .register('https://dharmawebdesign.co.uk/portS/service-worker.js')
	    .then(function(registration) {
		    console.log('SW registered for portS:',registration);
	    })
        .catch(function(error) {
		    console.log('Registration failed for portS:',error);
	    });
}else {
    console.log('No ServiceWorker on this browser');
}

// In emergency only:
// Un-toggle to unregister any unwanted, persistent, 'buggy' service worker
// if ('serviceWorker' in navigator) {
//   navigator.serviceWorker.getRegistrations().then(function (registrations) {
//     //returns installed service workers
//     if (registrations.length) {
//       for(let registration of registrations) {
//         registration.unregister();
//       }
//     }
//   });
// }


