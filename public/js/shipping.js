// Define a map of distances between locations (in km)
const stateDistances = {
    'Lagos': {
        'Lagos': 0,
        'Abuja': 536,
        'Kano': 832,
        'Port Harcourt': 442,
        'Kaduna': 633,
        'Ibadan': 117,
        'Benin City': 247
    },
    'Abuja': {
        'Lagos': 536,
        'Abuja': 0,
        'Kano': 344,
        'Port Harcourt': 476,
        'Kaduna': 163,
        'Ibadan': 437,
        'Benin City': 365
    },
    'Kano': {
        'Lagos': 832,
        'Abuja': 344,
        'Kano': 0,
        'Port Harcourt': 816,
        'Kaduna': 201,
        'Ibadan': 719,
        'Benin City': 702
    },
    'Port Harcourt': {
        'Lagos': 442,
        'Abuja': 476,
        'Kano': 816,
        'Port Harcourt': 0,
        'Kaduna': 638,
        'Ibadan': 448,
        'Benin City': 231
    },
    'Kaduna': {
        'Lagos': 633,
        'Abuja': 163,
        'Kano': 201,
        'Port Harcourt': 638,
        'Kaduna': 0,
        'Ibadan': 522,
        'Benin City': 504
    },
    'Ibadan': {
        'Lagos': 117,
        'Abuja': 437,
        'Kano': 719,
        'Port Harcourt': 448,
        'Kaduna': 522,
        'Ibadan': 0,
        'Benin City': 222
    },
    'Benin City': {
        'Lagos': 247,
        'Abuja': 365,
        'Kano': 702,
        'Port Harcourt': 231,
        'Kaduna': 504,
        'Ibadan': 222,
        'Benin City': 0
    }
};


// Base rate per km (in Naira)
const BASE_RATE_PER_KM = 50;

// Minimum charge for same-city delivery
const SAME_CITY_MINIMUM = 2000;

// Weight categories and their multipliers
const weightMultipliers = [
    { maxWeight: 5, multiplier: 1 },
    { maxWeight: 10, multiplier: 1.5 },
    { maxWeight: 20, multiplier: 2 },
    { maxWeight: 50, multiplier: 3 },
    { maxWeight: Infinity, multiplier: 4 }
];

function calculateShippingCost(pickupCity, deliveryCity, weight) {
    let distance = 0;
    let baseCost = 0;
    
    if (pickupCity === deliveryCity) {
        baseCost = SAME_CITY_MINIMUM;
    } else {
        distance = stateDistances[pickupCity][deliveryCity] || 
                   stateDistances[deliveryCity][pickupCity];
        
        if (!distance) {
            throw new Error("Distance not found for the given cities");
        }
        
        baseCost = distance * BASE_RATE_PER_KM;
    }
    
    const weightMultiplier = weightMultipliers.find(wm => weight <= wm.maxWeight).multiplier;
    
    const finalCost = baseCost * weightMultiplier;
    
    return Math.max(Math.round(finalCost), SAME_CITY_MINIMUM);
}

// Event listener for form inputs
document.addEventListener('DOMContentLoaded', () => {
    const pickupCitySelect = document.getElementById('pickupCity');
    const deliveryCitySelect = document.getElementById('deliveryCity');
    const weightInput = document.getElementById('weight');
    const costInput = document.getElementById('deliveryCost');
    const form = document.getElementById('shippingForm');
    
    function updateCost() {
        const pickupCity = pickupCitySelect.value;
        const deliveryCity = deliveryCitySelect.value;
        const weight = parseFloat(weightInput.value);
        
        if (pickupCity && deliveryCity && weight) {
            try {
                const cost = calculateShippingCost(pickupCity, deliveryCity, weight);
                costInput.value = `₦${cost.toLocaleString()}`;
            } catch (error) {
                costInput.value = 'Error: ' + error.message;
            }
        } else {
            costInput.value = '';
        }
    }
    
    pickupCitySelect.addEventListener('change', updateCost);
    deliveryCitySelect.addEventListener('change', updateCost);
    weightInput.addEventListener('input', updateCost);

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        // Here you can add code to handle the form submission
        console.log('Form submitted');
    });
});