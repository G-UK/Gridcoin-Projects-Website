<!doctype html>
<html lang="en-GB">
<head>
    <?php include('resources/head_1hr_cache.php');?>
    <title>Gridcoin Project Listings</title>
    <script src="resources/scripts/colour_projectlist.js"></script>
</head>

<body>
<?php include('resources/header.php');?>
<?php include('resources/navbar.php');?>
<section class="col-12" style="overflow-x:auto;">

<?php
echo "<table class=\"projectslist\">";
echo 
    "<tr>
    <th class=\"col-name\">
        <div class=\"title\">Project Name</div>
        <div class=\"sortcnt\"><a href=\"?orderBy=`Project Name` ASC\"><img class=sortimg src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Project Name` DESC\"><img class=sortimg src=\"resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-votes\">
        <div class=\"title\">Vote (In/Out)</div>
        <div class=\"sortcnt\"><a href=\"?orderBy=`Vote (In/Out)` ASC\"><img class=sortimg src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Vote (In/Out)` DESC\"><img class=sortimg src=\"resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-votes\">
        <div class=\"title\">Vote (Date)</div>
        <div class=\"sortcnt\"><a href=\"?orderBy=`Vote (Date)` ASC\"><img class=sortimg src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Vote (Date)` DESC\"><img class=sortimg src=\"resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-credit\">
        <div class=\"title\">Total Credit</div>
        <div class=\"sortcnt\"><a href=\"?orderBy=`Project Total Credit` ASC\"><img class=sortimg src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Project Total Credit` DESC\"><img class=sortimg src=\"resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-stat\">
        <div class=\"title\">Speed (GFlops)</div>
        <div class=\"sortcnt\"><a href=\"?orderBy=`Project Compute Speed (GFlops)` ASC\"><img class=sortimg src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Project Compute Speed (GFlops)` DESC\"><img class=sortimg src=\"resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-stat\">
        <div class=\"title\">W.A.S</div>
        <div class=\"sortcnt\"><a href=\"?orderBy=`W.A.S (Work Availability Score)` ASC\"><img class=sortimg src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`W.A.S (Work Availability Score)` DESC\"><img class=sortimg src=\"resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-stat\">
        <div class=\"title\">Z.C.D</div>
        <div class=\"sortcnt\"><a href=\"?orderBy=`Z.C.D (Zero Days Credit)` ASC\"><img class=sortimg src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Z.C.D (Zero Days Credit)` DESC\"><img class=sortimg src=\"resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-list\">
        <div class=\"title\">Current Status</div>
        <div class=\"sortcnt\"><a href=\"?orderBy=`Current Status` ASC\"><img class=sortimg src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Current Status` DESC\"><img class=sortimg src=\"resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-list\">
        <div class=\"title\">Calculated Status</div>
        <div class=\"sortcnt\"><a href=\"?orderBy=`Calculated Status` ASC\"><img class=sortimg src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Calculated Status` DESC\"><img class=sortimg src=\"resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-list\">
        <div class=\"title\">Calculated Status (V2)</div>
        <div class=\"sortcnt\"><a href=\"?orderBy=`Calculated Status (Experimental)` ASC\"><img class=sortimg src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Calculated Status (Experimental)` DESC\"><img class=sortimg src=\"resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-list\">
        <div class=\"title\">Recommended Status (V2)</div>
        <div class=\"sortcnt\"><a href=\"?orderBy=`Recommended Status (Experimental)` ASC\"><img class=sortimg src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Recommended Status (Experimental)` DESC\"><img class=sortimg src=\"resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th>
    <th class=\"col-update\">
        <div class=\"title\">Last Update</div>
        <div class=\"sortcnt\"><a href=\"?orderBy=`Last Update` ASC\"><img class=sortimg src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Last Update` DESC\"><img class=sortimg src=\"resources/images/sort-down.png\" alt=\"down\"></a></div>
    </th class=\"col-note\">
    <th><div class=\"title\">Notes</div>
    <div class=\"sortcnt\"><div></div></th>
    </tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {parent::__construct($it, self::LEAVES_ONLY);}
    function current() {return "<td>" . parent::current(). "</td>";}
    function beginChildren() {echo "<tr>";}
    function endChildren() {echo "</tr>" . "\n";}}

$servername = "localhost";
$username = "php";
$password = "#qea%vLK3LZw";
$dbname = "grc_listings";
$orderBy = array(
    '`Project Name` ASC',
    '`Project Name` DESC',
    '`Vote (In/Out)` ASC',
    '`Vote (In/Out)` DESC',
    '`Vote (Date)` ASC',
    '`Vote (Date)` DESC',
    '`Project Total Credit` ASC',
    '`Project Total Credit` DESC',
    '`Project Compute Speed (GFlops)` ASC',
    '`Project Compute Speed (GFlops)` DESC',
    '`W.A.S (Work Availability Score)` ASC',
    '`W.A.S (Work Availability Score)` DESC',
    '`Z.C.D (Zero Credit Days)` ASC',
    '`Z.C.D (Zero Credit Days)` DESC',
    '`Current Status` ASC',
    '`Current Status` DESC',
    '`Calculated Status` ASC',
    '`Calculated Status` DESC',
    '`Calculated Status (Experimental)` ASC',
    '`Calculated Status (Experimental)` DESC',
    '`Recommended Status (Experimental)` ASC',
    '`Recommended Status (Experimental)` DESC',
    '`Last Update` ASC',
    '`Last Update` DESC');

$order = '`Project Name` ASC';
if (isset($_GET['orderBy']) && in_array($_GET['orderBy'], $orderBy)) {$order = $_GET['orderBy'];}  

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare
        ("SELECT
            `Project Name`,
            `Vote (In/Out)`,
            `Vote (Date)`,
            `Project Total Credit`,
            `Project Compute Speed (GFlops)`,
            `W.A.S (Work Availability Score)`,
            `Z.C.D (Zero Credit Days)`,
            `Current Status`,
            `Calculated Status`,
            `Calculated Status (Experimental)`,
            `Recommended Status (Experimental)`,
            `Last Update`,
            `Notes`
        FROM 
            `Projects_Main`
        ORDER BY 
            $order");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {echo $v;}
    }

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 

</section>
<?php include('resources/footer.php');?>
</body>
</html>

<!--  
    <th>
        Project Avg Daily Credit (7 Day)<br>
        <a href=\"?orderBy=`Project Avg Daily Credit (7 Day)` ASC\"><img class=sort src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Project Avg Daily Credit (7 Day)` DESC\"><img class=sort src=\"resources/images/sort-down.png\" alt=\"down\"></a>
    </th>
    <th>
        Project Avg Daily Credit (40 Day)<br>
        <a href=\"?orderBy=`Project Avg Daily Credit (40 Day)` ASC\"><img class=sort src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Project Avg Daily Credit (40 Day)` DESC\"><img class=sort src=\"resources/images/sort-down.png\" alt=\"down\"></a>
    </th>

    '`Project Avg Daily Credit (7 Day)` ASC',
    '`Project Avg Daily Credit (7 Day)` DESC',
    '`Project Avg Daily Credit (40 Day)` ASC',
    '`Project Avg Daily Credit (40 Day)` DESC',