<?php
$month = isset($_GET['month']) ? $_GET['month'] : date('m');
$year = isset($_GET['year']) ? $_GET['year'] : date('Y');

// Adjust for navigation
if ($month > 12) {
    $month = 1;
    $year++;
} elseif ($month < 1) {
    $month = 12;
    $year--;
}

$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
$firstDay = date('w', strtotime("$year-$month-01"));
$monthName = date('F', mktime(0, 0, 0, $month, 10));

echo "<h2>$monthName $year</h2>";

// Navigation
$prevMonth = $month - 1;
$nextMonth = $month + 1;
echo "<a href='?month=$prevMonth&year=$year'>&laquo; Prev</a> | ";
echo "<a href='?month=$nextMonth&year=$year'>Next &raquo;</a>";

echo "<table border='1' cellpadding='10'><tr>";
$daysOfWeek = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
foreach ($daysOfWeek as $day) {
    echo "<th>$day</th>";
}
echo "</tr><tr>";

// Empty cells before the first day
for ($i = 0; $i < $firstDay; $i++) {
    echo "<td></td>";
}

// Days of the month
for ($day = 1; $day <= $daysInMonth; $day++) {
    if (($i % 7) == 0) echo "</tr><tr>";
    echo "<td>$day</td>";
    $i++;
}

while (($i % 7) != 0) {
    echo "<td></td>";
    $i++;
}

echo "</tr></table>";
?>
