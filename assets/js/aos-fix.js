// AOS animation fix script
document.addEventListener('DOMContentLoaded', function() {
  // Check if AOS is loaded
  if (typeof AOS !== 'undefined') {
    console.log('AOS is loaded, reinitializing...');
    
    // Force visible state on AOS elements (in case they're stuck invisible)
    document.querySelectorAll('[data-aos]').forEach(function(el) {
      el.removeAttribute('data-aos-animation');
      // Make sure elements are visible first
      el.style.opacity = '1';
      el.style.visibility = 'visible';
    });

    // Reinitialize AOS with more aggressive settings
    setTimeout(function() {
      AOS.init({
        startEvent: 'DOMContentLoaded',
        disableMutationObserver: false,
        once: false,  // Allow animations to occur multiple times
        mirror: false,
        offset: 50,   // Trigger earlier
        delay: 0,
        duration: 800,
        easing: "ease-in-out",
        anchorPlacement: 'top-bottom',
        debounceDelay: 50,
        throttleDelay: 99
      });
      
      // Refresh AOS after a short delay to catch any lazy-loaded elements
      setTimeout(function() {
        console.log('Refreshing AOS...');
        AOS.refresh();
      }, 500);
      
    }, 100);
    
    // Add window resize handler to refresh AOS when window is resized
    window.addEventListener('resize', function() {
      AOS.refresh();
    });
    
    // Add scroll handler to force check for animations
    window.addEventListener('scroll', function() {
      AOS.refresh();
    }, { passive: true });
  } else {
    console.error('AOS library not found!');
  }
}); 