<!-- PHP Variables -->
<?php
    $firstname = "Prince Carl";
    $lastname = "Velasco";
    $job = "Software Developer";
?>

<!-- START OF HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Resume</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link type="text/css" rel="stylesheet" href="Resume\style.css" />
</head>

<body>
    <div class="wrapper">
        <div id="left-bar">
            <div id="pic">
                <img src="Resume\Image\profile_pic.jpeg" />
            </div>

            <div id="headerName">
                <h1><?php echo $firstname ?></h1>
                <h1><?php echo $lastname ?></h1>
                <h2><?php echo $job ?></h2>
            </div>

            <div id="hr">
                <hr color="red" />
            </div>

            <article>
                <div class="heading">
                    <h1>Certifications</h1>
                </div>

                <div class="content">
                    <ul class="Info">
                        <li>Google IT Support Certificate</li>
                        <li>Python3 Programming Certificate</li>
                        <li>MTA Database Certificate</li>
                        <li>AZ-900 Microsoft Azure Fundamentals</li>
                    </ul>
                </div>
            </article>
            <article>
                <div class="heading">
                    <h1>Contact Details</h1>
                </div>

                <div class="content">
                    <ul class="Info">
                        <li>Cell : (+63)946 165 3691</li>
                        <li>Email : princevelasco16@gmail.com</li>
                        <li>Location : San Mateo, Rizal</li>
                    </ul>
                </div>
            </article>
        </div>

        <div>
            <div class="heading">
                <h1>Educational Background</h1>
            </div>

            <div class="content">

                <article>
                    <h2>FEU Institute of Technology (BSIT-WMA)</h2>
                    <p>1st Year College - PRESENT</p>
                    <p class="subContent">Awards and Achievements</p>
                    <ul class="list achievements">
                        <li>Presidents Scholar Receipient (2018 - PRESENT)</li>
                        <li>Iskolar ng Bayan ng San Mateo</li>
                        <li>ACM A.I.T.S Member</li>
                        <li>HackFest 2020 Online Contestant</li>
                    </ul>
                </article>

                <article>
                    <h2>AMA East Rizal Computer College (STEM)</h2>
                    <p>Grade 11 - Grade 12</p>
                    <p class="subContent">Awards and Achievements</p>
                    <ul class="list">
                        <li>With High Honor</li>
                        <li>Top 10 STEM Achiever</li>
                    </ul>
                </article>
            </div>

            <!-- Projects Completed -->
            <div class="heading">
                <h1>Projects Completed</h1>
            </div>

            <div class="content">
                <article>
                    <ul class="list projects">
                        <li>Analyzing Profitable App Profiles Using Python
                            <a href="https://github.com/PrynsTag/Analyzing-Profitable-App-Profiles-in-Google-Play-and-Apple-Store">[link]</a></li>
                        <li>2 Kaggle Competitions
                            <a href="https://www.kaggle.com/princecarlvelasco/competitions">[link]</a></li>
                        <li>Linear and Polynomial Machine Learning Models
                            <a href="https://github.com/PrynsTag/Machine-Learning-Journey/tree/master/01%20-%20Linear%20Regression">[link]</a></li>
                        <li>Image Merger Python Script
                            <a href="https://github.com/PrynsTag/Image-Merger">[link]</a></li>
                        <li>Finding Optimal Post Times -- Analyzing High Volume of Comments in Specific Time of the Day
                            <a href="https://github.com/PrynsTag/Finding-Optimal-Post-Times-Analyzing-High-Volume-of-Comments-in-Specific-Time-of-the-Day"> [link]</a>
                        </li>
                        <li>Frontend Mentor - Huddle landing page with single introductory section
                            <a href="https://huddle-landing-page-with-single-introductory-section-seven.now.sh/"> [link]</a>
                        </li>
                    </ul>
                </article>
            </div>
            <!-- End of Projects Completed -->


            <div class="heading">
                <h1>Technical Skills</h1>
            </div>

            <div class="content">
                <article>
                    <h2>Programming Languages</h2>
                    <ul class="list">
                        <li>C++</li>
                        <li>Java</li>
                        <li>Html</li>
                        <li>CSS</li>
                        <li>PHP</li>
                        <li>Python</li>
                    </ul>

                    <h2>Utility Tools</h2>
                    <ul class="list">
                        <li>Microsoft Word</li>
                        <li>Microsoft Execel</li>
                        <li>Microsoft Powerpoint</li>
                        <li>Alteryx</li>
                        <li>GitHub</li>
                        <li>Pycharm</li>
                    </ul>
                </article>
            </div>

            <div class="heading">
                <h1>References</h1>
            </div>

            <div class="content">
                <article>
                    <ul class="list">
                        <li>Tricia Relox</li>
                        <p>0965 658 9874</p>

                        <li>Janine Charles Salon</li>
                        <p>0921 823 8420</p>
                    </ul>
                </article>
            </div>
        </div>
    </div>
</body>

</html>
