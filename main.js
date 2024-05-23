document.addEventListener('DOMContentLoaded', function() {
    // Create a new button
    var button = document.createElement('button');
    button.innerHTML = 'Open Plex Page';

    // Add an event listener to the button
    button.addEventListener('click', function() {
        // Open a new tab with the Plex Media Server page
        window.open('http://your-plex-media-server-url', '_blank');
    });

    // Append the button to the body of the document
    document.body.appendChild(button);
});
