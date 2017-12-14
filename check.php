<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Readme</title>
<meta property="og:locale" content="en_US">
<link rel="publisher" href="https://plus.google.com/+BuyphpOrgscripts">
<meta name="robots" content="noodp">
<meta name="description" content="bootstrap form template download for free..advanced &amp; attractive registration form made with bootstrap designed very well you will love it..download it free">
<meta name="keywords" content="bootstrap form template,bootstrap form template free download, bootstrap form template download for free, free from template download">
<meta name="twitter:site" content="@buyphporg">
<link rel="stylesheet" href="css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/script.js"></script>
<style type="text/css">
<!--
body {
	font: 11px/1.4em Verdana, Arial, Helvetica, sans-serif;
}
h1 {
	color: #99CC00;
	margin: 0px 0px 5px;
	padding: 0px 0px 3px;
	font: bold 18px Verdana, Arial, Helvetica, sans-serif;
	border-bottom: 1px dashed #E6E8ED;
}
h2 {
	color: #99CC00;
	margin: 15px 0px 5px;
	padding: 0px 0px 3px;
	font: bold 14px Verdana, Arial, Helvetica, sans-serif;
	border-bottom: 1px dashed #E6E8ED;
}
a {
	color: #2D3954;
	font-size: 11px;
}
a:hover {
	color: #99CC00;
}
-->
</style>
</head>

<body>

<h1>Copyright Details Of This Software By Sudhanshu Pandey</h1>
<p>Below is a brief description of all COPYRIGHT Materials.</p>
<?php
		// retrive post
		include('config.php');
		include ('function.php');
		dbConnect();
		
		$query = mysql_query(
			'SELECT *
			FROM post
			WHERE post_id = 1');
		$row = mysql_fetch_array($query);
	?>
		<div class="post">
			<h2><?php echo $row['post_title']?></h2>
			<p><?php echo $row['post_body']?></p>
		</div>

	<?php
		// retrive comments with post id
		$comment_query = mysql_query(
			'SELECT *
			FROM comment
			WHERE post_id = 1');
			
	?>
    <h1 align="center">Comments.....</h1>
		<div class="comment-block" align="center">
		<?php while($comment = mysql_fetch_array($comment_query)): ?>
			<div class="comment-item">
				<div class="comment-avatar">
					<img src="<?php echo avatar($comment['mail']) ?>" alt="avatar">
				</div>
				<div class="comment-post">
					<h3><?php echo $comment['name'] ?> <span>said....</span></h3>
					<p><?php echo $comment['comment']?></p>
				</div>
			</div>
		<?php endwhile?>
		</div>
        
        <h1 align="center">Submit new comment</h1>
		<!--comment form -->
		<form id="form" method="post" >
			<!-- need to supply post id with hidden fild -->
			<input type="hidden" name="postid" value="<?php echo $row['post_id']?>">
			<label>
				<span>Name *</span>
				<input type="text" name="name" id="comment-name" placeholder="Your name here...." required>
			</label>
			<label>
				<span>Email *</span>
				<input type="email" name="mail" id="comment-mail" placeholder="Your mail here...." required>
			</label>
			<label>
				<span>Your comment *</span>
				<textarea name="comment" id="comment" cols="30" rows="10" placeholder="Type your comment here...." maxlength="300" required></textarea>
			</label>
			<input type="submit" id="submit" value="Submit Comment">
		</form>
	</div>
<ol>
  Copyright (c) 2014, Sudhanshu Pandey (http://www.sudhanshupandey.in)
All rights reserved.

<li>This license is a legal agreement between you and Sudhanshu Pandey  for the use
of Result System Software.  By obtaining the Software you
agree to comply with the terms and conditions of this license.</li>

<li>PERMITTED USE
You are permitted to use, copy, modify, and distribute the Software and its
documentation, with or without modification, for any purpose, provided that
the following conditions are met:</li>

<li> A copy of this license agreement must be included with the distribution.</li>

<li> Redistributions of source code must retain the above copyright notice in
   all source code files.</li>

<li> Redistributions in binary form must reproduce the above copyright notice
   in the documentation and/or other materials provided with the distribution.</li>

<li> Any files that have been modified must carry notices stating the nature 
   of the change and the names of those who changed them.</li>

<li>Products derived from the Software must include an acknowledgment that
   they are derived from Sudhanshu Pandey  in their documentation and/or other
   materials provided with the distribution.</li>


<li>INDEMNITY
You agree to indemnify and hold harmless the authors of the Software and 
any contributors for any direct, indirect, incidental, or consequential 
third-party claims, actions or suits, as well as any related expenses, 
liabilities, damages, settlements or fees arising from your use or misuse 
of the Software, or a violation of any terms of this license.</li>

<li>DISCLAIMER OF WARRANTY
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESSED OR 
IMPLIED, INCLUDING, BUT NOT LIMITED TO, WARRANTIES OF QUALITY, PERFORMANCE, 
NON-INFRINGEMENT, MERCHANTABILITY, OR FITNESS FOR A PARTICULAR PURPOSE. </li>

<li>LIMITATIONS OF LIABILITY
YOU ASSUME ALL RISK ASSOCIATED WITH THE INSTALLATION AND USE OF THE SOFTWARE. 
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS OF THE SOFTWARE BE LIABLE 
FOR CLAIMS, DAMAGES OR OTHER LIABILITY ARISING FROM, OUT OF, OR IN CONNECTION 
WITH THE SOFTWARE. LICENSE HOLDERS ARE SOLELY RESPONSIBLE FOR DETERMINING THE 
APPROPRIATENESS OF USE AND ASSUME ALL RISKS ASSOCIATED WITH ITS USE, INCLUDING
BUT NOT LIMITED TO THE RISKS OF PROGRAM ERRORS, DAMAGE TO EQUIPMENT, LOSS OF 
DATA OR SOFTWARE PROGRAMS, OR UNAVAILABILITY OR INTERRUPTION OF OPERATIONS.</li>
</ol>
<h2>Notes</h2>
<ul>
  <li>Make sure that you edit the <b>connection.php/config.php</b> file and change the connections details to match your own environment.</li>
  <li>The script is meant to be a educational tool for PHP programmers/webmasters and is not meant to be used in production environments.</li>
</ul>
</body>
</html>
