<?php
/**
 * @author Fauzia
 * 05/19/2022
 * Dating/model/data_collection_layer.php
 * */


//Radio
function getGender(): array
{
    return array('Male', 'Female', 'Non-binary');
}

//Radio
function getSeeking(): array
{

    return array('Male', 'Female');
}

//checkbox
function getIndoor(): array
{
    return array('tv', 'movies', 'cooking', 'board games', 'puzzles', 'reading', 'playing cards', 'video games');
}

//checkbox
function getOutdoor(): array
{
    return array('hiking', 'biking', 'swimming', 'collecting', 'walking', 'climbing');
}

//for states
function getState(): array
{
    return array('Alabama',
        'Alaska',
        'Arizona',
        'Arkansas',
        'California',
        'Colorado',
        'Connecticut',
        'Delaware',
        'Florida',
        'Georgia',
        'Hawaii',
        'Idaho',
        'Illinois',
        'Indiana',
        'Iowa',
        'Kansas',
        'Kentucky',
        'Louisiana',
        'Maine',
        'Maryland',
        'Massachusetts',
        'Michigan',
        'Minnesota',
        'Mississippi',
        'Missouri',
        'Montana',
        'Nebraska',
        'Nevada',
        'New Hampshire',
        'New Jersey',
        'New Mexico',
        'New York',
        'North Carolina',
        'North Dakota',
        'Ohio',
        'Oklahoma',
        'Oregon',
        'Pennsylvania',
        'Rhode Island',
        'South Carolina',
        'South Dakota',
        'Tennessee',
        'Texas',
        'Utah',
        'Vermont',
        'Virginia',
        'Washington',
        'West Virginia',
        'Wisconsin',
        'Wyoming');
}