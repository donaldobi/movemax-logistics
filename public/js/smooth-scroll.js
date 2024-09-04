document.addEventListener('DOMContentLoaded', function() {
    const sectionLinks = document.querySelectorAll('.section-link');
    
    sectionLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            const isHomePage = window.location.pathname === '/';
            
            if (isHomePage) {
                e.preventDefault();
                let targetId;
                
                if (href.includes('#')) {
                    targetId = href.split('#')[1];
                } else {
                    // If there's no #, assume the last part of the URL is the ID
                    targetId = href.split('/').pop();
                }
                
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                    // Update URL without reloading the page
                    history.pushState(null, '', `#${targetId}`);
                }
            }
        });
    });

    // Handle initial load with hash
    if (window.location.hash) {
        const targetElement = document.getElementById(window.location.hash.substring(1));
        if (targetElement) {
            setTimeout(() => {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }, 0);
        }
    }
});