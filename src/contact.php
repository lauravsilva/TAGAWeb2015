<?php
	$title = "TAGA | Members";
	$active_page = "members";
	include "header.php";
?> 

<style>
    body {
        width: 100%;
        height: auto;
        margin-left: auto;
        margin-right: auto;
    }

    header {
        height: 105px;
        width: 100%;
        background-color: #ef545f;
    }
    
#content{
    width: 940px;
    margin-left: auto;
    margin-right: auto;
}
    
h1 {
    padding: 0;
    width: 100%;
    height: 65px;
    line-height: 67px;
    font-size: 35px;
    font-family: $font-family-sans-serif;
    color: #ffffff; /* $white */
    background-color: #2b3f56; /* $teal */
    font-weight: 400;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 1px;
    }

/*Blue*/    
h2 {
    padding-top: 8px;
    margin-top: 50px;
    margin-bottom: 25px;
    font-size: 28px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: $font-family-sans-serif;
    color: #08ad9d; /* $teal */
    border-top: 7px solid;
    border-top-color: #08ad9d; /* $teal */
    width: 100%;
    }

/*Pink*/    
h3 {
    padding-top: 8px;
    margin-top: 50px;
    margin-bottom: 25px;
    font-size: 28px;
    font-weight: 700;
    text-align: right;
    text-transform: uppercase;
    font-family: $font-family-sans-serif;
    color: #f0535f; /* $pink */
    border-top: 7px solid;
    border-top-color: #f0535f; /* $pink */
    width: 100%;
    }

h4 {
    padding: 0;
    font-size: 24px;
    text-transform: uppercase;
    font-family: $font-family-sans-serif;
    color: #08ad9d; /* $teal */
    font-weight: 500;
    margin-top: 50px;
    }  


p {
    color: #000000; /* $black */
    font-family: "Garamond"; /* $font-family-serif */
    font-size: 14px;
    line-height: 25px;
    margin-top: 20px;
    
}

a, a:active, a:visited {
    color: #08ad9d; /* $teal */
    font-family: "Garamond"; /* $font-family-serif */
    font-weight: 700;
    -webkit-transition: color .1s ease-in;
    -moz-transition: color .1s ease-in;
    }

a:hover {
    color: #f0535f; /* $pink */
    text-decoration: none;
    -webkit-transition: color .1s ease-out;
    -moz-transition: color .1s ease-out;
    } 

.headerimg {
    margin-top: 0;
    padding-top: 0;
    height: 300px;
    overflow: hidden;
    }
    
img.portrait {
    width: 100%;
    height: auto;
    overflow: hidden;
}

img.landscape {
    height: 100%;
    width: auto;
    overflow: hidden;
}
    
.nopadding {
        padding: 0;
    }
    .nomargin {
        margin: 0;
    }
    
#about{
    width: 940px;
    margin:auto;
}

#contactUs{
   width: 470px;
}
#address{
    margin-top: 20px;
    
    }

.taga {
        padding: 0;
    }

li.lisocial {
    color: #f0535f;
    display: inline;
    padding-right: 20px;
}
    
.social {
     color: #f0535f;   
    }
    
form {
    width: 100%; 
    margin-top: 30px;
    padding: 0;
    font-family: "garamond"; /*$font-family-serif */
    }
    
.paddingleft {
    padding-left: 15px;
    }


    
input[type=text] {
    margin-bottom: 20px;
    padding: 5px 12px;
    width: 300px;
    }

input[type=submit] {
    background-color: #f0535f;
    width: 300px;
    border: 0;
    height: 40px;
    font-family: "open Sans"; /* $font-family-sans-serif */
    font-weight: 400;
    font-size: 16px;
    color: #ffffff;
}
    
input[type=submit]:hover {
    background-color: #08ad9d;
    -webkit-transition: background-color 250ms;
    -moz-transition: background-color 250ms;
    -o-transition: background-color 250ms;
    transition: background-color 250ms;
    
}
    
textarea {
    width: 300px;
    padding: 5px 12px;
    margin-bottom: 20px;
    }
    
.tagaaddress {
    list-style-type: none;
    padding: 0;
    margin-top: 0;
    width: 235px;
    }

.followUs{
    padding: 0;
    margin-top: 0;
    width: 235px;
   
}
    
.ulsocialmedia {
    padding-left: 0;
    margin-top: 20px;
    list-style-type: none;
    }

</style>
        <h1>Contact Us</h1>
        
    <div class="row nopadding">
    <div class="col-md-12">
    <div class="headerimg">
       <img class="portrait" src="assets/archive/2015-16/Print_16-6-Cover.jpg">
    </div>
        </div>
    </div>
    
    <div class="row nopadding">
        <div id="about">
        <div class="col-md-6">
        <h4>About Us</h4>
    <p>The RIT Student Chapter of TAGA (Technical Association of the Graphic Arts) conceptualizes, designs, and produces a yearly print and digital publication containing technical papers written by undergraduate and graduate students. Our chapter is comprised of a diverse range of students that enjoy learning about and being part of the graphic arts industry. Each year the chapter travels to the TAGA Conference where we compete with other schools.</p>
  
            
    <div id="contactUs">
    <div class="col-md-3 nopadding">
            
<div class="tagaaddress">
            <h4>Contact Us</h4>
    
    <p>Email:<a href="mailto:rittaga@rit.edu"> rittaga@rit.edu</a>
    <div id="address">
    <p>RIT TAGA<Br>
  69 Lomb Memorial Drive<br>
  Rochester, NY<Br>
    14623</p>
</div>   
    </div>
        </div>    
    
   <!--Contact--> 
    <div class="col-md-3 col-md-offset-3 nopadding">
            <div class="followUs">
        <h4>Follow Us</h4>
    <ul class="ulsocialmedia">
        <li class="lisocial"><a href="https://instagram.com/rittaga/" target="_blank"><i class="fa fa-2x fa-instagram social"></i></a></li>
        <li class="lisocial"><a href="https://twitter.com/rit_taga" target="_blank"><i class="fa fa-2x fa-twitter social"></i></a></li>
        <li class="lisocial"><a href="https://www.facebook.com/tagarit" target="_blank"><i class="fa fa-2x fa-facebook social"></i></a></li>
    </ul>
    </div>
        </div>
              </div> 
          </div>
        </div>
    <div class="col-md-5 col-md-offset-1 nopadding">    <h4>Leave Us A Message</h4>

    <form id="contact_form" action="MAILTO:rittaga@rit.edu" method="POST" enctype="multipart/form-data">
	<div class="row paddingleft">
		<label for="name">Your Name:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
	</div>
	<div class="row paddingleft">
		<label for="email">Your Email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
	</div>
	<div class="row paddingleft">
		<label for="message">Your Message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
	</div>
	<input id="submit_button" type="submit" value="Submit Message" />
</form>
        </div>
        </div>
 <div class="row nopadding">  

    </div>    
<?php include('footer.php'); ?>
