<?php
	$title = 'Resume';
	$description = '';
	include('../inc/header.php');
?>

<h1 class="heading" role="heading"><?php echo $title; ?></h1>

<section class="personal">

	<div class="row">
		<h3>Caleb Likens</h3>&nbsp;&nbsp;//&nbsp;&nbsp;<h3>caleb@likens.co</h3>
	</div>
	<div class="row">
		<h4>Fort Wayne, IN, USA</h4>
	</div>

</section>

<section class="objective">
	<h2>Objective</h2>
	<div class="content">
		<p>check out <a href="/work">my work</a> or <a href="/contact">contact me</a></p>
	</div>
</section>

<section class="experience">
	<h2>Experience</h2>
	
	<div class="content">
		<article role="article" class="job">
			<div class="info">
				<h3>Front End Developer</h3>
				<span> // </span>
				<h4>Sweetwater Sound, Inc.</h4>
				<span> // </span>
				<h5>May 2014 &mdash; Present</h5>
			</div>
			<ul>
				<li>Develop lean, cross-client/browser/device HTML emails for over half a million customers weekly</li>
				<li>Created an automation platform to deliver personalized emails</li>
				<li>Increased email views and click-thru rates with best design and code practices</li>
				<li>Updated various pages and functionalities of the website with new design and better performance</li>
				<li>Developed special pages with semantic, lean, and mobile optimized markup</li>
				<li>Assisted with marketing efforts in the business' local family of companies</li>
				<li>Adopted various caching techniques and learned best practices for performance</li>
				<li>Through trial and error, developed a better understanding for PHP and MySQL</li>
				<li>Help create multiple kiosk platforms for the retail store using cutting edge web tech</li>
				<li>Delivered profitable results under tight deadlines</li>
			</ul>
		</article>

		<article role="article" class="job">
			<div class="info">
				<h3>Web Specialist</h3>
				<span> // </span>
				<h4>Cirrus ABS</h4>
				<span> // </span>
				<h5>May 2012 &mdash; May 2014</h5>
			</div>
			<ul>
				<li>Design and develop custom CMS based websites with the latest standards and technology</li>
				<li>Convert Photoshop designs to high quality, cross-browser compatible markup</li>
				<li>Create a unique online presence for many different types of customers and their clientele</li>
				<li>Strengthen my own SEO techniques to increase trustworthy and optimized results</li>
				<li>Produce new methods and technologies to further enhance Cirrus' services</li>
				<li>Learn and teach alongside various skillsets in developing, designing, and marketing</li>
				<li>Developed the beginnings of a mobile and responsive design for the Cirrus ABS eBusiness Suite</li>
				<li>Assisting in the improvement of CHAMP programs</li>
				<li>Developed and designed a new UX/UI for the Cirrus ABS eBusiness Suite</li>
				<li>Developed and designed the beginnings of the MarketSnare platform</li>
			</ul>
		</article>

		<article role="article" class="job">
			<div class="info">
				<h3>Freelance Web Designer</h3>
				<span> // </span>
				<h4>Steffy Wood Products</h4>
				<span> // </span>
				<h5>July 2011 &mdash; September 2012</h5>
			</div>
			<ul>
				<li>Upgraded the website to further enhance their business outlook</li>
				<li>Improved site navigation and search engine optimization</li>
				<li>Used web analytics to monitor site traffic</li>
				<li>Contracted to create an online catalog</li>
			</ul>
		</article>

		<article role="article" class="job">
			<div class="info">
				<h3>Web and Graphic Design Intern</h3>
				<span> // </span>
				<h4>BioAdvanTek (WM&amp;RG Tech)</h4>
				<span> // </span>
				<h5>March 2009 &mdash; October 2011</h5>
			</div>
			<ul>
				<li>Helped design graphics and labels for anti-microbial prototype products for an entrepreneurial start-up firm</li>
				<li>Developed a new website for the organization on a limited budget</li>
				<li>Created collateral material including posters and brochures</li>
				<li>Contracted to create an online catalog</li>
			</ul>
		</article>
	</div>
</section>

<section class="education">
	<h2>Education</h2>
	<div class="content">
		<div class="info">
			<h3>Bachelor of Science in Informatics</h3> // <h4>Trine University</h4> // <h5>May 2012</h5>
		</div>
	</div>
</section>

<section class="skills">
	<h2>Skills</h2>

	<div class="content">

		<article role="article" class="list">
			<h3>Current Set</h3>
			<ul>
				<li>Semantic, Accessible, W3C Valid HTML</li>
				<li>CSS3, SASS, and LESS</li>
				<li>Javascript, jQuery, Zepto, JSON, AJAX</li>
				<li>RDFa, Microdata, Schema, SEO</li>
				<li>Bootstrap, Foundation</li>
				<li>Cross-browser compatibility, optimization techniques</li>
				<li>Responsive Web Design, mobile performance</li>
				<li>Responsive HTML Emails</li>
				<li>UI/UX design</li>
				<li>Project management</li>
			</ul>
		</article>

		<article role="article" class="list">
			<h3>Working Knowledge</h3>
			<ul>
				<li>PHP, WordPress, Drupal, MODx</li>
				<li>ASP, .NET, C#, XSLT</li>
				<li>Angular, Ember</li>
				<li>Gulp, Grunt</li>
				<li>D3</li>
				<li>Git</li>
				<li>Ruby on Rails</li>
			</ul>
		</article>

		<article role="article" class="list">
			<h3>Various Tools</h3>
			<ul>
				<li>Sublime Text, Coda, PHPStorm, Visual Studio, Brackets</li>
				<li>Github, Bitbucket</li>
				<li>Photoshop, Illustrator</li>
			</ul>
		</article>

	</div>
</section>


<section class="references">
	<h2>References</h2>
	<div class="content">References are available upon request.</div>
</section>

<?php 
include('../inc/footer.php');