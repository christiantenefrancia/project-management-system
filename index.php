<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Page Forum</title>
<!--
<meta property="og:locale" content="en_US">
<link rel="publisher" href="https://plus.google.com/+BuyphpOrgscripts">
<meta name="robots" content="noodp">
<meta name="description" content="jQuery Ajax php live Comment System Use Jqery & Ajax For Comment Live..download it free">
<meta name="keywords" content="jquery ajax php live comment,php ajax live comment, bootstrap form template download for free, free from template download">
<meta name="twitter:site" content="@buyphporg">
-->
<link rel="stylesheet" href="css/style_2.css">
<link rel="stylesheet" href="css/semantic.css">
<link rel="stylesheet" href="css/semantic.min.css">
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<script src="js/script.js"></script>
<!--
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Francois+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
-->
</head>
    
    <?php
        include('config.php');
		include ('function.php');
		dbConnect();
    
        if(isset($_POST['postButton']))
        {
            $topic = $_POST['topic'];
            $body = $_POST['postBody'];
            
            if($topic == ""){
                echo "<script>alert('Topic is required');</script>";
            }
            if($body == ""){
                echo "<script>alert('Input something to post');</script>";
            }
            
            if($topic != "" && $body != ""){
                mysql_query("insert into post(topic,body) values ('$topic','$body')") or die(mysql_error());
                echo "<script>alert('Posting Successful');</script>";
            }
        }
    
    ?>
    
    
    
<body>
    <br>
     <form class="ui reply form" method="post">
    <div class="ui grid">
        <div class="three wide column"></div>
        <div class="nine wide column">
	<div class="ui segment">
        <div class="ui input" style="width: 50%;">
          <input type="text" placeholder="Topic / Title" name="topic">
        </div>
        <br>
        <br>
        <div class="field">
          <textarea placeholder="Post Something. . ." name="postBody"></textarea>
        </div>
        <button class="ui blue labeled submit icon button" name="postButton">
          <i class="icon edit"></i> Post
           </button>
      </form>
        <br>
            <br>
            <br>
        <hr>
        <hr>
        
	<?php
		// retrive post
		
//		$query = mysql_query(
//			'SELECT *
//			FROM post
//			WHERE post_id = 1');
//		$row = mysql_fetch_array($query);
	?>
		<div class="post">
			<h2 align="left"><?php //echo $row['post_title']?></h2>
			<p><?php //echo $row['post_body']?></p>
		</div>

	<?php
		// retrive comments with post id
//		$comment_query = mysql_query(
//			'SELECT *
//			FROM comment
//			WHERE post_id = 1');
			
	?>
        
    

<!--
		<h2>Comments.....</h2>
		<div class="comment-block">
		<?php //while($comment = mysql_fetch_array($comment_query)): ?>
			<div class="comment-item">
				<div class="comment-avatar">
					<img src="<?php //echo avatar($comment['mail']) ?>" alt="avatar">
				</div>
				<div class="comment-post">
					<h3><?php //echo $comment['name'] ?> <span>said....</span></h3>
					<p><?php //echo $comment['comment']?></p>
				</div>
			</div>
		<?php //endwhile?>
		</div>
-->

<!--		<h2>Tell Us How You Like Our Post..</h2>-->
		<!--comment form -->
<!--		<form id="form" method="post">-->
			<!-- need to supply post id with hidden fild -->
<!--
			<input type="hidden" name="postid" value="<?php //echo $row['post_id']?>">
			<label>
				<span>Name *</span>
				<input type="text" name="name" id="comment-name" placeholder="Your name here...." required autocomplete="off">
			</label>
			<label>
				<span>Email *</span>
				<input type="email" name="mail" id="comment-mail" placeholder="Your mail here....We Will Not Publish Your Email" required autocomplete="off">
			</label>
			<label>
				<span>Your comment *</span>
				<textarea name="comment" id="comment" cols="30" rows="10" placeholder="Type your comment here....Max Length 300 words" maxlength="300" required></textarea>
			</label>
			<input type="submit" id="submit" value="Submit Comment">
		</form>
-->
        <?php include ('nav_sidebar.php');?>
        <div class="ui comments">
          <h3 class="ui dividing header">Comments. . .</h3>
        <?php //while($comment = mysql_fetch_array($comment_query)): ?>
          <div class="comment">
            <a class="avatar">
              <img src="images/Laptop-Keyboard-Hd-Screen-Background.jpg"<?php //echo avatar($comment['mail']) ?> alt="avatar">
            </a>
            <div class="content">
              <a class="author"><?php //echo $comment['name'] ?></a>
              <div class="metadata">
                <span class="date">Today at 5:42PM</span>
              </div>
              <div class="text">
               <?php //echo $comment['comment']?>
              </div>
<!--
              <div class="actions">
                <a class="reply">Reply</a>
              </div>
-->
            </div>
          </div>
        <?php //endwhile?>
            <br>
          <form class="ui reply form">
            <div class="ui input" style="width: 30%;">
              <input type="text" placeholder="Name">
            </div>
            <br>
            <br>
            <div class="field">
              <textarea name="comment" id="comment" style="height: 10%;" placeholder="Type your comment here...." required></textarea>
            </div>
            <button class="ui blue labeled submit icon button" type="submit" id="submit">
              <i class="icon edit"></i> Comment
                </button>
              </form>
        </div>
    </div>
            </div>
        
        <div class="four wide column">
            <div class="ui segment" style="width: 95%;">
                <h3 style="padding-left: 10px;">Programmers Corner<br>SHOUT OUT!!
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </h3>
            </div>
            <br>
            <br>
            <div class="ui segment" style="width: 95%;">
                <h3>Shout Out Box!</h3>
                <form class="ui reply form">
                    <div class="field">
                        <textarea style="width: 100%;"></textarea>
                    </div>
                </form>
            
                <button class="small ui blue labeled submit icon button right floated">
                    <i class="announcement icon"></i>
                    Shout
                </button>
            </div>
        </div>
        </div>
</body>
</html>