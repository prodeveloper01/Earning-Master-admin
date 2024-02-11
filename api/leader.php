<?php
header('Content-Type: application/json');
include('../connect.php');

 

try {
 
   
$sql = mysqli_query($conn, "SELECT points, image, name, user_id FROM users ORDER BY CAST(points as unsigned) DESC LIMIT 10");

$rows = array();
$rank = 1;
$previousPoints = null;
$ranks = array(); // Separate array to hold ranks

while ($r = mysqli_fetch_assoc($sql)) {
    $currentPoints = $r['points'];
    
    if ($previousPoints !== $currentPoints) {
        $rank = $rows ? count($rows) + 1 : 1;
    }

    $r['rank'] = $rank;
    $rows[] = $r;
    $ranks[] = $rank; // Add the rank to the separate array
    
    $previousPoints = $currentPoints;
}

echo json_encode(['feed' => $rows, 'ranks' => $ranks]);

		
	
} catch(PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}




 

?>