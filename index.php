<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package icu-care
 */

get_header();
?>

<table>
	<tr>
		<td class="LeftNav" style="vertical-align:top">
			<h2>Visitor Information </h2>
			<div style="padding-right: 20px;" id="LeftMenu">
				<ul>
					<li><a href="Meet_the_team.html">Meet the Team </a></li>
					<li><a href="http://www.icu-usa.com/icu_medical_library.html">Medical Information </a></li>
					<li><a href="http://www.icu-usa.com/what_outcomes.html">Outcomes and Options </a></li>
					<li><a href="http://www.icu-usa.com/what_will_happen.html">What Will Happen </a></li>
					<li><a href="http://www.icu-usa.com/questions.html">Questions You Should Always Ask</a></li>
					<li><a href="https://www.surveymonkey.com/r/DF6NFTT/">Please Take Our Survey </li>
					<li><a href="http://www.morristown-nj.org/">http://www.morristown-nj.org/</a></li>
					<li><a href="Helpful_links.html">Helpful Links </a></li>

				</ul>
			</div>
		</td>
		<td class="CenterContent">
			<div id="centerContentDiv">
				<h1> Welcome to the Morristown Medical Center Intensive Care Unit</h1>
				<div id="ContentImage">
					<img src="<?php echo get_template_directory_uri()?>/images/MMCentrance.jpg" width="750" height="375" alt="" />
					<br />
				</div>
				<p>For more than a century, Morristown Medical Center has provided Morris County and surrounding areas with
					expert, compassionate medical care in a full range of specialties, delivered in family-friendly,
					state-of-the-art facilities.</p>
				<p>Please use the links on the left to find out more about our services.</p>
			</div>
		</td>
		<td class="RightSide" style="vertical-align:top">
			<div id="HospitalNav">
				<div></div>
			</div>
			<div style="padding-left: 20px;" id="PhoneHours">
				<h2>Contact Us</h2>
				For questions, call:<br /><br />
				Morristown Medical Center (973) 971-5565<br />
				<br />
			</div>
			<div class="RightItem">
				<h2>&nbsp;</h2>
			</div>
		</td>
	</tr>
</table>

<?php
// get_sidebar();
get_footer();