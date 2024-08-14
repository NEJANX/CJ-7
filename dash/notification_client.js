let previousData = null;
let isFirstNotification = true;

// Function to display desktop notifications
function showNotification(data) {
    console.log('Received data:', data);

    if (data && data.id && data.type) {

        if (isFirstNotification) {
            console.log('Skipping first notification');
            isFirstNotification = false;
            previousData = data; // Set previousData for subsequent comparisons
            return;
        }
        
        if (JSON.stringify(data) !== JSON.stringify(previousData)) {
            if (data.status == "approved") {
                const title = 'CJ-7 - Leave Approved';
                const options = {
                    body: `The Last ${data.type} Leave request you submitted has been approved by an administrator. Please check the dashboard.`,
                    icon: '../assets/img/logo.png', // Replace with the path to your icon
                    image: '../assets/img/logo.png', // Replace with the path to your content image
                };

                // Check if the browser supports notifications
                if ('Notification' in window) {
                    Notification.requestPermission().then((permission) => {
                        if (permission === 'granted') {
                            new Notification(title, options);
                            console.log('Notification shown');
                        } else {
                            console.log('Notification permission denied');
                        }
                    });
                } else {
                    console.log('Browser does not support notifications');
                }

                // Update the previous data
                previousData = data;
            }else {
                if (data.status == "rejected") {
                    const title = 'CJ-7 - Leave Rejected';
                    const options = {
                        body: `The Last ${data.type} Leave request you submitted has been rejected by an administrator. Please check the dashboard.`,
                        icon: '../assets/img/logo.png', // Replace with the path to your icon
                        image: '../assets/img/logo.png', // Replace with the path to your content image
                    };
    
                    // Check if the browser supports notifications
                    if ('Notification' in window) {
                        Notification.requestPermission().then((permission) => {
                            if (permission === 'granted') {
                                new Notification(title, options);
                                console.log('Notification shown');
                            } else {
                                console.log('Notification permission denied');
                            }
                        });
                    } else {
                        console.log('Browser does not support notifications');
                    }
    
                    // Update the previous data
                    previousData = data;
                }else {
                    if (data.status !== "pending") {
                        const title = 'CJ-7 - Leave Reviewed';
                        const options = {
                            body: `The Last ${data.type} Leave request you submitted has been reviewed by an administrator. Please check the dashboard.`,
                            icon: '../assets/img/logo.png', // Replace with the path to your icon
                            image: '../assets/img/logo.png', // Replace with the path to your content image
                        };
        
                        // Check if the browser supports notifications
                        if ('Notification' in window) {
                            Notification.requestPermission().then((permission) => {
                                if (permission === 'granted') {
                                    new Notification(title, options);
                                    console.log('Notification shown');
                                } else {
                                    console.log('Notification permission denied');
                                }
                            });
                        } else {
                            console.log('Browser does not support notifications');
                        }
        
                        // Update the previous data
                        previousData = data;
                    }
                }
            }
        } else {
            console.log('Data is the same as previous, skipping notification');
        }
    } else {
        console.log('Invalid or missing data', data);
    }
}

// EventSource to listen for updates from the server
const eventSource = new EventSource('notification_server.php');

// Handle updates received from the server
eventSource.addEventListener('message', (event) => {
    try {
        const data = JSON.parse(event.data);
        showNotification(data);
    } catch (error) {
        console.error('Error parsing data:', error);
    }
});

// Handle errors
eventSource.addEventListener('error', (error) => {
    console.error('Error:', error);
    eventSource.close();
});
