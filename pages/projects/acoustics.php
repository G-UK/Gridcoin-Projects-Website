<!doctype html>
<html lang="en-GB">

<?php
$projectname = 'Acoustics@Home';
$projectid = 'acoustics';
$projecturl = 'https://www.acousticsathome.ru/boinc';
$orgurl = 'http://www.icc.irk.ru';
$orgname = 'Matrosov Institute for System Dynamics and Control Theory';
$projectdesc = 
'<p>In underwater acoustics the notion of geoacoustic inversion refers to a collection of techniques that can
be used for the reconstruction of medium parameters. The medium parameters are usually understood as the sound
speed profile in water (i.e., the dependence of the sound speed on the depth) and the sound speed and density in
the sea bottom sediment layers. Medium parameters reconstruction is of great importance for problems of underwater
communication and for the development of underwater navigation systems.</p>
<p>While normally measurements for the geoacoustic inversion are performed using expensive receiver arrays,
recently it was shown that single-hydrophone recording of a broadband pulse signal can be also successfully
used for estimating the medium parameters.</p>
<p>The method of geoacoustic inversion developed in our study is based on using modal dispersion data.
Waveguide dispersion is usually induced by the difference in group velocities of propagation of normal
waves of different mode numbers at different frequencies. By using special algorithms of the frequency-time
analysis of signals, it is possible to filter out the modal components of a pulse signal from its time series
recorded by a single hydrophone. The implementation of this method in practice can be thought of as a solution
of an optimization problem in a (very large) discrete search space, and every evaluation of the cost function
requires numerous solutions of an acoustic spectral problem. Thus, the whole computational burden can be easily
divided into a large number of relatively simple independent tasks, which can be solved using volunteer computing.</p>';
$pub1url = 'https://www.degruyter.com/view/j/eng.2017.7.issue-1/eng-2017-0040/eng-2017-0040.xml?format=INT';
$pub1name = 'A volunteer computing project for solving geoacoustic inversion problems.';
$pub2url = 'http://iopscience.iop.org/article/10.1088/1757-899X/173/1/012022/meta';
$pub2name = 'Application of iterative hill climbing to the sound speed profile inversion in underwater acoustics.';
$pub3url = 'http://link.springer.com/article/10.3103/S8756699016030079';
$pub3name = 'Algorithm of reconstruction of the sound speed profile in a shallow-water geoacoustic waveguide from modal dispersion data.';
$pub4url = 'http://ieeexplore.ieee.org/document/7036448';
$pub4name = 
'A method for single-hydrophone geoacoustic inversion based on the modal group velocities estimation:
Application to a waveguide with inhomogeneous bottom relief.';
$rsspath = 'https://www.acousticsathome.ru/boinc/forum_rss.php?forumid=1&userid=&ndays=720&threads_only=on';
$win86 = 'yes';
$win64 = 'yes';
$winarm32 = 'no';
$winarm64 = 'no';
$linux86 = 'yes';
$linux64 = 'yes';
$linuxarm32 = 'no';
$linuxarm64 = 'no';
$mac86 = 'no';
$mac64 = 'no';
$macarm32 = 'no';
$macarm64 = 'no';
$android86 = 'no';
$android64 = 'no';
$androidarm32 = 'no';
$androidarm64 = 'no';
$nvidia = 'no';
$amd = 'no';
$intel = 'no';
$boincstats = 'https://boincstats.com/en/stats/175/project/detail/overview';
$gridcoinstats = 'None';

include('/srv/www/gridcoin.ddns.net/resources/standard-sections/project.php');

?>

</html>