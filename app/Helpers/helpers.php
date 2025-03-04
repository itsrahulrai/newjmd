<?php

if (!function_exists('getInterestDetails')) {
    /**
     * Get the details for an interest.
     *
     * @param string $interest
     * @return array
     */
    function getInterestDetails($interest)
    {
        $interestDetails = [
            'intellectual_stimulation' => [
                'label' => 'Intellectual stimulation',
                'color' => 'bg-primary'
            ],
            'arts_and_culture' => [
                'label' => 'Arts and culture',
                'color' => 'bg-info'
            ],
            'sports_and_activities' => [
                'label' => 'Sports and activities',
                'color' => 'bg-success'
            ],
            'social_values' => [
                'label' => 'Social values',
                'color' => 'bg-warning'
            ],
            'film_and_tv' => [
                'label' => 'Film and TV',
                'color' => 'bg-danger'
            ],
            'adventure' => [
                'label' => 'Adventure',
                'color' => 'bg-secondary'
            ],
            'food_and_drink' => [
                'label' => 'Food and drink',
                'color' => 'bg-dark'
            ],
            'health_and_lifestyle' => [
                'label' => 'Health and lifestyle',
                'color' => 'bg-success'
            ],
            'fun_and_games' => [
                'label' => 'Fun and games',
                'color' => 'bg-danger'
            ],
            'creative_outlets' => [
                'label' => 'Creative outlets',
                'color' => 'bg-success'
            ]
        ];

        return $interestDetails[$interest] ?? ['label' => $interest, 'color' => 'bg-secondary'];
    }
}


if (!function_exists('getEducationDisplay')) {
    function getEducationDisplay($education)
    {
        $educationDetails = [
            'high_school' => 'High school',
            'some_college' => 'Some college',
            'associate_degree' => 'Associate degree',
            'bachelor_degree' => 'Bachelor’s degree',
            'graduate_degree' => 'Graduate degree',
            'phd_post_doctoral' => 'PhD / Post Doctoral'
        ];

        return $educationDetails[$education] ?? $education;
    }
}




if (!function_exists('getInterestDetails')) {
    function getInterestDetails($interest)
    {
        $interestDetails = [
            'intellectual_stimulation' => [
                'label' => 'Intellectual stimulation',
                'color' => 'bg-primary',
            ],
            'arts_and_culture' => [
                'label' => 'Arts and culture',
                'color' => 'bg-info',
            ],
            'sports_and_activities' => [
                'label' => 'Sports and activities',
                'color' => 'bg-success',
            ],
            'social_values' => [
                'label' => 'Social values',
                'color' => 'bg-warning',
            ],
            'film_and_tv' => [
                'label' => 'Film and TV',
                'color' => 'bg-danger',
            ],
            'adventure' => [
                'label' => 'Adventure',
                'color' => 'bg-secondary',
            ],
            'food_and_drink' => [
                'label' => 'Food and drink',
                'color' => 'bg-dark',
            ],
            'health_and_lifestyle' => [
                'label' => 'Health and lifestyle',
                'color' => 'bg-success',
            ],
            'fun_and_games' => [
                'label' => 'Fun and games',
                'color' => 'bg-danger',
            ],
            'creative_outlets' => [
                'label' => 'Creative outlets',
                'color' => 'bg-success',
            ],
        ];

        return $interestDetails[$interest] ?? ['label' => $interest, 'color' => 'bg-secondary'];
    }
}



if (!function_exists('getReligionDisplay')) {
    function getReligionDisplay($religion) {
        $religionDetails = [
            'adventist' => 'Adventist',
            'agnostic' => 'Agnostic',
            'atheist' => 'Atheist',
            'buddhist_taoist' => 'Buddhist / Taoist',
            'christian_catholic' => 'Christian / Catholic',
            'christian_lds' => 'Christian / LDS',
            'christian_protestant' => 'Christian / Protestant',
            'hindu' => 'Hindu',
            'jewish' => 'Jewish',
            'spiritual_but_not_religious' => 'Spiritual but not religious',
            'other' => 'Other',
        ];

        // Return the corresponding display text or the religion value itself if not found
        return $religionDetails[$religion] ?? $religion;
    }
}



if (!function_exists('getEducationDisplay')) {
    function getEducationDisplay($education) {
        $educationDetails = [
            'high_school' => 'High school',
            'some_college' => 'Some college',
            'associate_degree' => 'Associate degree',
            'bachelor_degree' => 'Bachelor’s degree',
            'graduate_degree' => 'Graduate degree',
            'phd_post_doctoral' => 'PhD / Post Doctoral'
        ];

        // Return the corresponding display text or the education value itself if not found
        return $educationDetails[$education] ?? $education;
    }
}

