<?php
$title = "TAGA | Homepage";
$active_page = "home";
include "header.php";
?>

<body>
    <div class="container home">

        <div class="row">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="..." alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="..." alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        ...
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-1 col-md-8 about">
                <p>The RIT Student Chapter of TAGA (Technical Association of the Graphic Arts) conceptualizes, designs, and produces a yearly print and digital publication containing technical papers written by undergraduate and graduate students. Our chapter is comprised of a diverse range of students that enjoy learning about and being part of the graphic arts industry. Each year the chapter travels to the TAGA Conference where we compete with other schools.</p>

                <p>One of the goals of RIT TAGA is to help students learn the various aspects of the graphic arts industry. These aspects could include but are not limited to design, premedia workflows, or finishing for both the print and digital publications. If we are unable to do certain work in-house, we reach out to local businesses, such as binderies, to help us finish putting together the publication. If we go somewhere out-of-house, we make sure to visit the company and see as much of the process as possible. Through this out-of-house experience, we learn how to communicate with other businesses and how to make connections that will be helpful now and in the future.</p>

            </div>

            <div class="col-md-1">
                <!-----Donate-->  
                <div class="donate-btn">
                </div>  


                <!-----Contact-->  
                <div class="contact-btn">
                </div> 

            </div>

        </div>
    </div>
</body>

<?php include('footer.php'); ?>