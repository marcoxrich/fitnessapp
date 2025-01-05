document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');

    form.addEventListener('submit', (event) => {
        const activity = document.getElementById('activity').value.trim();
        const duration = document.getElementById('duration').value.trim();
        const distance = document.getElementById('distance').value.trim();
        const calories = document.getElementById('calories').value.trim();
        const date = document.getElementById('date').value.trim();

        // Validate that activity name is not empty
        if (!activity) {
            alert('Activity name cannot be empty.');
            event.preventDefault();
            return;
        }

        // Validate that duration is a positive number
        if (isNaN(duration) || duration <= 0) {
            alert('Duration must be a positive number.');
            event.preventDefault();
            return;
        }

        // Validate that distance is a non-negative number
        if (isNaN(distance) || distance < 0) {
            alert('Distance must be a non-negative number.');
            event.preventDefault();
            return;
        }

        // Validate that calories burned is a positive number
        if (isNaN(calories) || calories <= 0) {
            alert('Calories burned must be a positive number.');
            event.preventDefault();
            return;
        }

        // Validate the date format (yyyy-mm-dd)
        const dateRegex = /^\d{4}-\d{2}-\d{2}$/;
        if (!dateRegex.test(date)) {
            alert('Date must be in the format yyyy-mm-dd.');
            event.preventDefault();
            return;
        }
    });
});
