const counters = document.querySelectorAll('.count');

// Function to animate the counters
const runCounter = () => {
    counters.forEach((counter) => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        // Calculate the increment value
        const increment = target / 200; // You can adjust the speed of the animation by changing the divisor

        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(runCounter, 1);
        } else {
            counter.innerText = target;
        }
    });
};

runCounter();
