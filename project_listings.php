<!doctype html>
<html lang="en-GB">
<head>
    <?php include('resources/head.php');?>
    <title>Gridcoin Project Listings</title>
    <script src="resources/scripts/colour_projectlist.js"></script>
</head>

<body>
<?php include('resources/header.php');?>
<?php include('resources/navbar.php');?>
<section style="overflow-x:auto;">

<?php
echo "<table class=\"projectslist\">";
echo 
    "<tr>
    <th>
        Project Name<br><br>
        <a href=\"?orderBy=`Project Name` ASC\"><img class=sort src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Project Name` DESC\"><img class=sort src=\"resources/images/sort-down.png\" alt=\"down\"></a>
    </th>
    <th>
        Vote (In/Out)<br>
        <a href=\"?orderBy=`Vote (In/Out)` ASC\"><img class=sort src=\"resources/images/sort-up.png\" alt=\"up\">
        </a><a href=\"?orderBy=`Vote (In/Out)` DESC\"><img class=sort src=\"resources/images/sort-down.png\" alt=\"down\"></a>
    </th>
    <th>
        Vote (Date)<br><br>
        <a href=\"?orderBy=`Vote (Date)` ASC\"><img class=sort src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Vote (Date)` DESC\"><img class=sort src=\"resources/images/sort-down.png\" alt=\"down\"></a>
    </th>
    <th>
        Project Total Credit<br>
        <a href=\"?orderBy=`Project Total Credit` ASC\"><img class=sort src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Project Total Credit` DESC\"><img class=sort src=\"resources/images/sort-down.png\" alt=\"down\"></a>
    </th>

   <th>
        Project Compute Speed (GFlops)<br>
        <a href=\"?orderBy=`Project Compute Speed (GFlops)` ASC\"><img class=sort src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Project Compute Speed (GFlops)` DESC\"><img class=sort src=\"resources/images/sort-down.png\" alt=\"down\"></a>
    </th>
    <th>
        W.A.S (Work Availability Score)<br>
        <a href=\"?orderBy=`W.A.S (Work Availability Score)` ASC\"><img class=sort src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`W.A.S (Work Availability Score)` DESC\"><img class=sort src=\"resources/images/sort-down.png\" alt=\"down\"></a>
    </th>
    <th>
        Z.C.D (Zero Credit Days)<br>
        <a href=\"?orderBy=`Z.C.D (Zero Days Credit)` ASC\"><img class=sort src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Z.C.D (Zero Days Credit)` DESC\"><img class=sort src=\"resources/images/sort-down.png\" alt=\"down\"></a>
    </th>
    <th>
        Current Status<br>
        <a href=\"?orderBy=`Current Status` ASC\"><img class=sort src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Current Status` DESC\"><img class=sort src=\"resources/images/sort-down.png\" alt=\"down\"></a>
    </th>
    <th>
        Calculated Status<br>
        <a href=\"?orderBy=`Calculated Status` ASC\"><img class=sort src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Calculated Status` DESC\"><img class=sort src=\"resources/images/sort-down.png\" alt=\"down\"></a>
    </th>
    <th>
        Calculated Status (Experimental)<br>
        <a href=\"?orderBy=`Calculated Status (Experimental)` ASC\"><img class=sort src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Calculated Status (Experimental)` DESC\"><img class=sort src=\"resources/images/sort-down.png\" alt=\"down\"></a>
    </th>
    <th>
        Recommended Status (Experimental)<br>
        <a href=\"?orderBy=`Recommended Status (Experimental)` ASC\"><img class=sort src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Recommended Status (Experimental)` DESC\"><img class=sort src=\"resources/images/sort-down.png\" alt=\"down\"></a>
    </th>
    <th>
        Last Update<br><br>
        <a href=\"?orderBy=`Last Update` ASC\"><img class=sort src=\"resources/images/sort-up.png\" alt=\"up\"></a>
        <a href=\"?orderBy=`Last Update` DESC\"><img class=sort src=\"resources/images/sort-down.png\" alt=\"down\"></a>
    </th>
    <th>Notes</th>
    </tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {parent::__construct($it, self::LEAVES_ONLY);}
    function current() {return "<td>" . parent::current(). "</td>";}
    function beginChildren() {echo "<tr>";}
    function endChildren() {echo "</tr>" . "\n";}}

$servername = "localhost";
$username = "xxxxxxxxxxx";
$password = "xxxxxxxxxxx";
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
