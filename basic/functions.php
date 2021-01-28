<?php
// i cards


$names = [
    "male" => "yogesh more",
    "female" => "madhav more",
    "male" => "KishoR more",
];

function showProperName($name, $gender = 'male')
{
    if ($gender == "male") {
        return "Mr. " . ucwords(strtolower($name)) . "<br/>";
    }
    return "Miss. " . ucwords(strtolower($name)) . "<br/>";
}

foreach ($names as $gen => $fullName) {
    echo showProperName($fullName, $gen);
}
