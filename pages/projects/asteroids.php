<!doctype html>
<html lang="en-GB">

<?php
$projectname = 'Asteroids@Home';
$projectid = 'asteroids';
$projecturl = 'http://asteroidsathome.net/boinc/';
$orgurl = 'https://www.cuni.cz/UKENG-1.html';
$orgname = 'Charles University, Prague';
$projectdesc = 
"<p>Asteroids are the most numerous objects in the solar system. So far, hundreds of thousands
of asteroids are known, with hundres of new discoveries every day. Altough the total number of
known asteroids is large, very little is known about the physical properties of individual objects.
For a significant part of the population, only the size of the bodies is known. Other physical
parameters (the shape, the rotation period, direction of the rotation axis,...) are known only
for hundreds of objects.</p>
<p>Because asteroids have in general irregular shapes and they rotate, the amount of sunlight
they scatter towards the observer varies with time. This variation of brightness with time is
called a lightcurve. The shape of a lightcurve depends on the shape of asteroid and also on the
viewing and illumination geometry. If a sufficient number of lightcurves observed under various
geometries is collected, a unique physical model of the asteroid can be reconstucted by the lightcurve
inversion method.</p>
<p>The project Asteroids@home was started with the aim to significanly enlarge our knowledge of
physical properties of asteroids. The BOINC application uses photometric measurements of asteroids
observed by professional big all-sky surveys as well as 'backyard' astronomers. The data is processed
using the lightcurve inversion method and a 3D shape model of an asteroid together with the rotation
period and the direction of the spin axis are derived.</p>
<p>Because the photometric data from all-sky surveys are typically sparse in time, the rotation
period is not directly 'visible' in the data and the huge parameter space has to be scanned to
find the best solution. In such cases, the lightcurve inversion is very time-consuming and the
distributed computation is the only way how to efficiently deal with photometry of hundres of
thousands of asteroids. Moreover, in order to reveal biases in the method and reconstruct the real
distribution of physical parameters in the asteroid population, it is necessary to process large
data sets of 'synthetic' populations.</p>";
$pub1url = 'http://astro.troja.mff.cuni.cz/projects/asteroids3D/web.php';
$pub1name = 'DAMIT (Database of Asteroid Models from Inversion Techniques)';
$pub2url = 'http://astro.troja.mff.cuni.cz/projects/asteroids3D/download/durech_et_at_damit_preprint.pdf';
$pub2name = 'DAMIT: a database of asteroid models. J.Durech, V.Sidorin, and M. Kaasalainen';
$pub3url = '';
$pub3name = 'N/A';
$pub4url = '';
$pub4name = 'N/A';
$rsspath = 'http://asteroidsathome.net/boinc/forum_rss.php?forumid=1&userid=&ndays=720&threads_only=on';
$win86 = 'yes';
$win64 = 'yes';
$winarm32 = 'no';
$winarm64 = 'no';
$linux86 = 'yes';
$linux64 = 'yes';
$linuxarm32 = 'yes';
$linuxarm64 = 'no';
$mac86 = 'yes';
$mac64 = 'yes';
$macarm32 = 'no';
$macarm64 = 'no';
$android86 = 'no';
$android64 = 'no';
$androidarm32 = 'yes';
$androidarm64 = 'yes';
$nvidia = 'yes';
$amd = 'no';
$intel = 'no';
$boincstats = 'https://boincstats.com/en/stats/134/project/detail/overview';
$gridcoinstats = 'https://www.gridcoinstats.eu/project/asteroids@home';

include('/srv/www/gridcoin.ddns.net/resources/standard-sections/project.php');

?>

</html>