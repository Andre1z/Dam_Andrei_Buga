document.addEventListener("DOMContentLoaded", function() {
    // Function to fetch itinerary from the API
    function loadItinerary() {
        fetch('../back/api.php')
            .then(response => response.json())
            .then(data => {
                const itineraryDiv = document.getElementById('itinerary');
                itineraryDiv.innerHTML = '<h2>Your Itinerary</h2>';
                data.forEach(item => {
                    const p = document.createElement('p');
                    p.textContent = `${item.destination} on ${item.date}`;
                    itineraryDiv.appendChild(p);
                });
            });
    }

    // Function to add a new destination to the itinerary
    function addDestination(destination, date) {
        fetch('../back/api.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ destination, date }),
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.message);
            loadItinerary(); // Refresh the itinerary list
        });
    }

    // Load initial itinerary
    loadItinerary();

    // Example of adding a new destination
    addDestination("Paris", "2023-12-01");
});
