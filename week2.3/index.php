function checkDayType($dayOfWeek) {
    // Convert day of week to lowercase to ensure case insensitivity
    $dayOfWeek = strtolower($dayOfWeek);
    
    switch ($dayOfWeek) {
        case 'monday':
        case 'tuesday':
        case 'wednesday':
        case 'thursday':
        case 'friday':
            $message = "It's a weekday!";
            break;
        case 'saturday':
        case 'sunday':
            $message = "It's a weekend!";
            break;
        default:
            $message = "Invalid day of the week";
    }
    
    return $message;
}

// Example usage:
$day1 = "Monday";
$day2 = "Saturday";
$day3 = "Wednesday";

echo checkDayType($day1); // Output: It's a weekday!
echo checkDayType($day2); // Output: It's a weekend!
echo checkDayType($day3); // Output: It's a weekday!
