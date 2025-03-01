<?php
// Combined User Information Gathering Script
// Created: February 28, 2025
// Purpose: Collect various user information using PHP

// Function to get user's IP address
function getUserIP() {
    $ip = '';
    // Check for shared internet IP
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    // Check for IP passed through proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $ip = trim($ipList[0]); // Take the first IP in the list
    }
    // Fall back to remote address
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

// Function to get location data from IP using ipinfo.io API
function getLocation($ip) {
    // API endpoint for IP information
    $url = "http://ipinfo.io/{$ip}/json";
    // Fetch data from API
    $response = @file_get_contents($url); // @ to suppress warnings
    if ($response === false) {
        return ['error' => 'Unable to fetch location data'];
    }
    // Decode JSON response
    return json_decode($response, true);
}

// Function to attempt getting MAC address (local network only)
function getMacAddress($ip) {
    // Execute ARP command to get MAC address
    $arpOutput = shell_exec("arp -a $ip");
    // Regex to match MAC address format
    if (preg_match('/([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})/', $arpOutput, $matches)) {
        return $matches[0];
    }
    // Return note if not detectable
    return "Unknown (Not available over internet)";
}

// Function to detect Operating System from User-Agent
function getOS() {
    // Get User-Agent string or empty if not set
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    
    // Array of regex patterns to match OS types
    $osArray = [
        '/windows nt 10/i' => 'Windows 10/11',
        '/windows nt 6.3/i' => 'Windows 8.1',
        '/windows nt 6.2/i' => 'Windows 8',
        '/windows nt 6.1/i' => 'Windows 7',
        '/macintosh|mac os x/i' => 'Mac OS X',
        '/linux/i' => 'Linux',
        '/android/i' => 'Android',
        '/iphone|ipad/i' => 'iOS'
    ];
    
    // Loop through patterns to find a match
    foreach ($osArray as $regex => $os) {
        if (preg_match($regex, $userAgent)) {
            return $os;
        }
    }
    return "Unknown OS";
}

// Main execution block
// Get the user's IP address
$ip = getUserIP();

// Get location and ISP data
$location = getLocation($ip);

// Prepare output array
$output = [
    'IP Address' => $ip,
    'Location' => isset($location['error']) ? 
                  $location['error'] : 
                  ($location['city'] ?? 'Unknown') . ", " . 
                  ($location['region'] ?? 'Unknown') . ", " . 
                  ($location['country'] ?? 'Unknown'),
    'Coordinates' => $location['loc'] ?? 'Unknown',
    'MAC Address' => getMacAddress($ip),
    'ISP' => $location['org'] ?? 'Unknown',
    'Operating System' => getOS(),
    'User Agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
];

// HTML output starts here
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Information</title>
    <!-- Basic CSS for better presentation -->
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        pre { background: #f0f0f0; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>
    <h2>User Information</h2>
    <!-- Display all collected information -->
    <pre>
<?php
    // Output each piece of information with formatting
    foreach ($output as $key => $value) {
        echo htmlspecialchars("$key: $value") . "\n";
    }
?>
    </pre>
    
    <!-- Additional notes section -->
    <h3>Notes:</h3>
    <ul>
        <li>MAC Address is only detectable on local networks</li>
        <li>Location data depends on IP accuracy and API availability</li>
        <li>OS detection is based on User-Agent and can be spoofed</li>
    </ul>
</body>
</html>

<?php
// End of script
// Notes for developers:
// 1. Requires internet connection for location API
// 2. shell_exec() needs to be enabled for MAC address (local only)
// 3. Consider adding error handling for production use
// 4. Be mindful of privacy regulations (GDPR, CCPA, etc.) when collecting user data
?>