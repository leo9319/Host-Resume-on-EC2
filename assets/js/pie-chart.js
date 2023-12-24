let dataModel = [
    {
        "id":"1",
        "image": "dm-pie-1.png",
        "color": "[#2D68F8]",
        "label": "39% Adoption and Shelter Services",
        "description": "Central to the mission, this program facilitates the matching of animals with loving families, ensuring a smooth adoption process.",
        "activities": [
            "Support for the adoption process",
            "Providing vaccinations",
            "Spaying/neutering",
            "Care essentials for animals awaiting homes"
        ],
        "outcomes": [
            {
                "amount": "2,456",
                "description": "Animals found new homes"
            },
            {
                "amount": "1,870",
                "description": "Animals stayed in our foster home while waiting to get adopted "
            },
            {
                "amount": "248",
                "description": "Families in need were given temporary foster care through our Urgent Care Program"
            }
        ]
    },
    {
        "id": "2",
        "image": "dm-pie-2.png",
        "color": "[#D345F8]",
        "label": "27% Animal Health and Wellness",
        "description": "Ensures the physical and emotional well-being of animals, supporting their health through direct veterinary care and rehabilitation.",
        "activities": [
            "Veterinary services",
            "Vaccinations, spay/neuter services",
            "Microchipping",
            "Dental care"
        ],
        "outcomes": [
            {
                "amount": "7,230",
                "description": "Animals helped through public veterinary services "
            },
            {
                "amount": "1,200",
                "description": "TNR (Trap Neuter Return) surgeries provided"
            },
            {
                "amount": "2,100",
                "description": "Wellness and preventative service appointments provided"
            }
        ]
    },
    {
        "id": "3",
        "image": "dm-pie-3.png",
        "color": "[#13C296]",
        "label": "15% Community Pet Education",
        "description": "Leverages education to create a compassionate community, promoting responsible pet ownership and animal welfare.",
        "activities": [
            "Workshops",
            "School visits",
            "Online resources",
            "Training classes"
        ],
        "outcomes": [
            {
                "amount": "4,345",
                "description": "Pet families supported through Pet Parent Support Network"
            },
            {
                "amount": "1,200",
                "description": "Pet families supported through training services"
            },
            {
                "amount": "2,100",
                "description": "Workshops conducted"
            }
        ]
    },
    {
        "id": "4",
        "image": "dm-pie-4.png",
        "color": "[#FBBF24]",
        "label": "14% Rescue and Rehabilitation",
        "description": "Aims to rescue, rehabilitate, and shelter stray animals, helping them overcome adversity and hardship.",
        "activities": [
            "Rescue operations",
            "Medical treatment",
            "Sheltering",
            "Behavioural Training"
        ],
        "outcomes": [
            {
                "amount": "1,600",
                "description": "Stray animals rescued"
            }
        ]
    },
    {
        "id": "5",
        "image": "dm-pie-5.png",
        "color": "[#8646F4]",
        "label": "5% Pet Food Bank",
        "description": "Supports families in financial hardship by providing them with pet food, thereby nurturing the human-animal bond. The program has become an essential service to keep families together, especially in times of economic instability.",
        "activities": [
            "Distributing essential supplies (e.g. creates, leashes, bowls and toys)",
            "Hosting Community Day events ",
            "Operating Inner-City Outreach Clinics"
        ],
        "outcomes": [
            {
                "amount": "50,120",
                "description": "Pounds of pet food distributed"
            },
            {
                "amount": "1,400",
                "description": "essential pet supplies distributed "
            }
        ]
    }
]

function generateLabelHTML(color, label) {
    return `
        <div id="label-color" class="w-5 h-5 rounded-sm bg-${color}"></div>
        <div id="label" class="text-gray-2">${label}</div>
    `;
}

function generateOutcomeHTML(amount, description) {
    return `
        <div class="card border-gray-1 text-left px-4">
            <h4 class="text-3xl font-bold text-black-2">${amount}</h4>
            <p class="mt-2 text-black-2">${description}</p>
        </div>
    `;
}

function updateModalContent(data) {
    document.getElementById('real-label').innerHTML = generateLabelHTML(data.color, data.label);
    document.getElementById('description').innerText = data.description;

    // Update activities
    let activitiesList = document.getElementById('activities-list');
    activitiesList.innerHTML = data.activities.map(activity => {
        return `<div class="flex mb-1">
                    <div class="w-1/12 flex items-center justify-start">
                        <img src="./assets/images/ellipsis.png" alt="">
                    </div>
                    <span class="text-gray-2 w-11/12 -ml-2">${activity}</span>
                </div>`;
    }).join('');

    // Update outcomes
    let outcomesList = document.getElementById('outcomes-list');
    outcomesList.innerHTML = data.outcomes.map(outcome => generateOutcomeHTML(outcome.amount, outcome.description)).join('');

    // Update pie image source
    document.getElementById('pie-image').src = `./assets/images/${data.image}`;

    // Show the modal
    document.getElementById('pie-profile').classList.remove('hidden');
}

let pieButtons = document.querySelectorAll('[data-modal-target="pie-profile"]');

pieButtons.forEach(pieButton => {
    pieButton.addEventListener('click', function() {
        // Get the ID of the clicked button (e.g., pie-chart-1)
        let pieId = this.id.split('-')[2];

        // Find the corresponding data from the JSON based on the ID
        let selectedData = dataModel.find(item => item.id === pieId);

        // Check if data is found
        if (selectedData) {
            // Update modal content with selected data
            updateModalContent(selectedData);
        }
    });
});

function changeItem(direction) {
    // Get the current pie ID from the modal title
    let currentPieId = document.getElementById('label').innerText;

    // Find the index of the current pie in the dataModel
    let currentIndex = dataModel.findIndex(item => item.label === currentPieId);

    // Calculate the index of the next or previous pie
    let newIndex;
    if (direction === 'next') {
        newIndex = (currentIndex + 1) % dataModel.length;
    } else if (direction === 'prev') {
        newIndex = (currentIndex - 1 + dataModel.length) % dataModel.length;
    }

    // Get the data for the next or previous pie
    let newPieData = dataModel[newIndex];

    // Update modal content with new data
    updateModalContent(newPieData);
}

// Function to hide the modal
function hideModal() {
    document.getElementById('pie-profile').classList.add('hidden');
}
