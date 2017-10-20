<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <style type="text/css">
     body{
         background-color: #F4F4F4;
    }
    .top{
        background-color: #915B51;
        height: 50px;
       

       
    }
    .mission{
        height: 200px;
       
    }
    .txt{
        text-align: justify;
        font-size: 1em;
        padding: 30px;
        margin-top: -40px;
    }
    .title-txt{
        text-align: center;
        font-weight: bold;
        font-size: 3em;
        color: #800000;

    }
    .missim{
        height: 75px;
        margin-top: -10px;
        
    }
    h1,h2,h3,h4,h5{
        margin: 0;
            
    }
    </style>
    <title>OJT Automate</title>

</head>

<body>


<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content" style="border-radius: 12px">
		<div class="modal-header" style="background-color: #f44336;border-radius: 10px 10px 0 0">
			<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel" style="color:white">Watch list</h3>
		</div>
		<div class="modal-body">
			<div class="ban-title">
				<h4>The following are on the company watch list</h4>
			</div>
           
            <ul>
                <?php foreach ($watch_list as $watchlists): ?>
                    <li><?php echo $watchlists['company_name'] ?></li>
                <?php endforeach ?>
            </ul>

		</div>
	</div>
  </div>
</div>
    <div class="page-wrap">
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo"><img src="<?php echo base_url();?>assets/images/logo.png" style="width: 175px;"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="header-links">
                            <h5> <a href="index">Home</a></h5>
                            <h5><a href="about" class="current-link">About us</a></h5>
                            <h5><a href="#" data-toggle="modal" data-target="#squarespaceModal">Watch list</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <!-- <div class="signin">
                            <nav>
                                <ul>
                                    <li id="login">
                                        <a id="login-trigger" href="#">
        Log in ▼
      </a>
                                        <div id="login-content">
                                            <form action="loggedin" method="POST">
                                                <fieldset id="inputs">
                                                    <label style="float: left;">ID Number</label>

                                                    <input id="username" type="text" name="username" placeholder="ID Number" required>
                                                    <label style="float: left;">Password</label>
                                                    <input id="password" type="password" name="password" placeholder="Password" required>
                                                </fieldset>
                                                <fieldset id="actions">
                                                    <button type="submit" id="submit">Login&nbsp;<i class="fa fa-sign-in"></i></button>
                                                    <a href="#" class="forgot-password">Forgot password?</a>
                                                </fieldset>

                                            </form>
                                        </div>
                                    </li>
                                 
                                </ul>
                            </nav>
                        </div> -->
                          <a class="btn btn-primary login-btn" href="<?php echo base_url()?>main/loginojt" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
              <div class="top">
                <h1 style="margin-left: 30px; color: white;"><i class="fa fa-pencil" aria-hidden="true"></i>Mission and Vision</h1>
              </div>
              <div class="container">
                 <div class="mission">

                     <div class="row">
                         <div class="col-lg-12">
                             <p style="text-align: center;"><img src="<?php echo base_url();?>assets/images/logo.png"></p>
                                    <p class="txt">HTML, or <b>Hypertext Markup Language</b>, is the language used to describe the structure of content on the web. As with other markup languages, it uses tags to identify page elements and describe the page&rsquo;s semantic structure. An easy way to visualize this is to consider the various types of documents you see on a day-to-day basis, like magazine and newspaper articles or documents created in a program like Microsoft Word. The formatting of those documents ensures that the information is presented clearly, with a distinct hierarchy. This allows readers to quickly scan the page and determine which information is important and how the content relates to each other. HTML allows us to do that for web pages by first establishing the overall document structure, and then formatting elements like headings and paragraphs.</p>
                        </div>
                        <div class="col-lg-6">
                             <h2 class="title-txt">Mission<img src="<?php echo base_url();?>assets/images/mission.png" class="missim"></h2>
                                <p class="txt">To ensure quality instruction, research, and community extension for the total development of Technologians committed in practicing professionalism and in meeting the demands of local, national, and global communities.</p>
                        </div>
                        <div class="col-lg-6">
                             <h2 class="title-txt"><img src="<?php echo base_url();?>assets/images/vision.png" class="missim">Vision</h2>
                                <p class="txt">A top academic institution continuously developing Values-driven,highly Competent, and Innovative Technologians.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            &copy;Copyright OJT Automate 2017 | All rights reserved
                        </div>
                    </div>
                </div>
            </div>

        </div>
</body>

<script type="text/javascript">
    $(document).ready(function() {
        $('#login-trigger').click(function() {
            $(this).next('#login-content').slideToggle();
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
            else $(this).find('span').html('&#x25BC;')
        })
    });

   
</script>

</html>