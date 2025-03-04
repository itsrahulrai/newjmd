
const interestDetails = {
    'intellectual_stimulation': {
        label: 'Intellectual stimulation',
        color: 'bg-primary'
    },
    'arts_and_culture': {
        label: 'Arts and culture',
        color: 'bg-info'
    },
    'sports_and_activities': {
        label: 'Sports and activities',
        color: 'bg-success'
    },
    'social_values': {
        label: 'Social values',
        color: 'bg-warning'
    },
    'film_and_tv': {
        label: 'Film and TV',
        color: 'bg-danger'
    },
    'adventure': {
        label: 'Adventure',
        color: 'bg-secondary'
    },
    'food_and_drink': {
        label: 'Food and drink',
        color: 'bg-dark'
    },
    'health_and_lifestyle': {
        label: 'Health and lifestyle',
        color: 'bg-success'
    },
    'fun_and_games': {
        label: 'Fun and games',
        color: 'bg-danger'
    },
    'creative_outlets': {
        label: 'Creative outlets',
        color: 'bg-success'
    }
};

// Define the helper function
function getInterestDetails(interest) {
    return interestDetails[interest] || { label: interest, color: 'bg-secondary' };
}


// Define the mapping for you_drink values
const drinkMapping = {
    'no': 'No',
    'sometimes_depends_on_the_day': 'Sometimes, depends on the day',
    'in_moderation_of_course': 'In moderation, of course',
    'yes_is_it_happy_hour_yet': 'Yes, is it happy hour yet?'
};

function getDrinkDisplayText(drinkValue) {
    return drinkMapping[drinkValue] || drinkValue;
}

// Define the mapping for you_smoke values
const smokeMapping = {
    'no': 'No',
    'yes_occasionally': 'Yes, occasionally',
    'yes_daily': 'Yes, daily',
    'yes_trying_to_quit': 'Yes, trying to quit'
};

// Define the helper function
function getSmokeDisplayText(smokeValue) {
    return smokeMapping[smokeValue] || smokeValue; // Return the mapped value or the original if not found
}

function getRelationshipStatus(status) {
    const statusDetails = {
        definitelysingle: "Definitely Single",
        separated: "Separated",
        divorced: "Divorced",
        widowed: "Widowed",
    };

    // Return the corresponding display text or the status itself if not found
    return statusDetails[status] || status;
}

// Helper function to get the display text for body type
function getBodyTypeDisplay(bodyType) {
    const bodyTypeDetails = {
        'slimslender': 'Slim/Slender',
        'curvy': 'Curvy',
        'athleticfit': 'Athletic/Fit',
        'Afewextrapounds': 'A few extra pounds',
        'aboutaverage': 'About average',
        'bigandbeautiful': 'Big and beautiful',
        'muscular': 'Muscular',
        'heavyset': 'Heavyset'
    };

    // Return the corresponding display text or the bodyType itself if not found
    return bodyTypeDetails[bodyType] || bodyType;
}

// Helper function to get the display text for education level
function getEducationDisplay(education) {
    const educationDetails = {
        'high_school': 'High school',
        'some_college': 'Some college',
        'associate_degree': 'Associate degree',
        'bachelor_degree': 'Bachelor’s degree',
        'graduate_degree': 'Graduate degree',
        'phd_post_doctoral': 'PhD / Post Doctoral'
    };

    // Return the corresponding display text or the education value itself if not found
    return educationDetails[education] || education;
}

// Helper function to get the display text for Religion  level
function getReligionDisplay(religion) {
    const ReligionDetails = {
        adventist: "Adventist",
        agnostic: "Agnostic",
        atheist: "Atheist",
        buddhist_taoist: "Buddhist / Taoist",
        christian_catholic: "Christian / Catholic",
        christian_lds: "Christian / LDS",
        christian_protestant: "Christian / Protestant",
        hindu: "Hindu",
        jewish: "Jewish",
        spiritual_but_not_religious: "Spiritual but not religious",
        other: "other",
    };

    // Return the corresponding display text or the education value itself if not found
    return ReligionDetails[religion] || religion;
}


// Helper function to get the display text for Have Kids
function getHaveKidsDisplay(haveKids) {
    const HaveKidsDetails = {
        no_but_do_pets_count: "No (But do pets count?)",
        yes_they_live_at_home: "Yes, they live at home",
        yes_sometimes_they_live: "Yes, sometimes they live",
        yes_they_live_away_from_home: "Yes, they live away from home",
    };

    return HaveKidsDetails[haveKids] || haveKids;
}


// Show Gallery Image
   $('#gallery').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var userId = button.data('id'); // Extract user ID from data attribute

            // Dynamically construct the URL with the user ID
            var url = '{{ route('show.gallery', ':id') }}';
            url = url.replace(':id', userId);

            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    // Update the gallery content inside the modal
                    $('#lightgallery').html(data);

                    // Reinitialize LightGallery after dynamically loading content
                    $('#lightgallery').lightGallery({
                        selector: 'li' // Adjust this selector according to your gallery structure
                    });
                },
                error: function() {
                    $('#lightgallery').html('<p>Error loading gallery images.</p>');
                }
            });
        });