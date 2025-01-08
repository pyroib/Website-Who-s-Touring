<?php

$DOMAIN = "http://whos-touring/";

?><!DOCTYPE html>
<html theme="dark" lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Who's Touring? - Car club &amp; Group Travel Assistant </title>

    <link href="<?= $DOMAIN; ?>favicon.ico" rel="icon" type="image/x-icon">
    <meta property="og:title" content="Who's Touring? - Car club &amp; Group Travel Assistant">
    <meta name="twitter:title" content="Who's Touring? - Car club &amp; Group Travel Assistant">
    <meta name="author" content="Blott.com.au">
    <meta name="generator" content="Blott.com.au">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="description"
          content="The app that helps you plan and run travel events. Coming Soon to: Apple and Android">
    <meta name="og:description"
          content="The app that helps you plan and run travel events. Coming Soon to: Apple and Android">
    <meta property="og:url" content="<?= $DOMAIN; ?>">
    <meta name="twitter:site" content="@ian_blott">
    <meta name="twitter:creator" content="@ian_blott">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Who's Touring? - Car club &amp; Group Travel Assistant">
    <meta name="twitter:description"
          content="The app that helps you plan and run travel events. Coming Soon to: Apple and Android">
    <meta name="twitter:image" content="<?= $DOMAIN; ?>media/social-share.png">
    <meta name="apple-itunes-app" content="app-id=1423538627">
    <link rel="manifest" href="<?= $DOMAIN; ?>media/manifest.json">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="canonical" href="<?= $DOMAIN; ?>">
    <link rel="shortcut icon" href="<?= $DOMAIN; ?>favicon.ico">
    <link href="site.css" rel="stylesheet">

</head>


<body class="js-focus-visible">


<div class="Surface">

    <header class="Header">
        <nav class="Nav">
            <a class="Nav--link" href="https://infinitehundred.com/?ref=whos-touring" target="_blank" rel="noopener">
                <div class="InfiniteHundredLogo">InfiniteHundred</div>
            </a>
        </nav>
    </header>

    <!-- hero section -->
    <div class="HeroSection">
        <div class="HeroSection--content">
            <div class="HeroSection--logo">
                <div class="WhosTouringLogoAnimated WhosTouringLogoAnimated-is-large WhosTouringLogoAnimated-is-centered">
                    <div class="WhosTouringLogoAnimated--aspect-ratio-container">
                        <canvas class="WhosTouringLogoAnimated--canvas" width="886" height="260">
                        </canvas>
                    </div>
                </div>
            </div>

            <div class="HeroSection--title-wrapper">
                <h1 class="HeroSection--title" data-js-balance-text="">The app that
                    helps you plan and run travel events.</h1>
                <h2 class="HeroSection--subtitle" data-js-balance-text="">Coming Soon to:</h2>
            </div>

            <div class="HeroSection--actions">
                <a class="Button Button-is-primary Button-with-icon"
                   href="https://itunes.apple.com/">
                    <svg class="Button--icon" viewBox="0 0 170 170" fill="currentColor">
                        <path d="M150.4 130.3a88 88 0 0 1-8.7 15.6c-4.6 6.5-8.4 11-11.3 13.6a21.8 21.8 0 0 1-14.4 6.3c-3.7 0-8.1-1-13.3-3.2-5.2-2-10-3.1-14.3-3.1-4.6 0-9.5 1-14.8 3.1A39.7 39.7 0 0 1 61 166c-5 .2-9.9-2-14.8-6.5a97.1 97.1 0 0 1-29.4-68c0-11 2.4-20.3 7.1-28.2a41.3 41.3 0 0 1 34.7-20.5c4 0 9 1.2 15.4 3.6A49.6 49.6 0 0 0 86.2 50c1.3 0 5.9-1.4 13.6-4.3a44.9 44.9 0 0 1 18.4-3.2 39.2 39.2 0 0 1 30.7 16.1 34.1 34.1 0 0 0-18.1 31c0 10.3 3.8 19 11.2 25.8 3.3 3.1 7 5.6 11.2 7.3l-2.8 7.5zM119 7.3c0 8-3 15.6-8.8 22.6C103 38.2 94.5 43 85.2 42.3l-.2-3c0-7.9 3.4-16.2 9.4-23 3-3.4 6.8-6.3 11.4-8.6 4.7-2.2 9-3.5 13.1-3.7.2 1 .2 2.2.2 3.2z">
                        </path>
                    </svg>


                    <span class="Button--text">App Store</span>
                </a>
                <a class="Button Button-is-primary Button-with-icon Button-google-play-store"
                   href="https://play.google.com/store/apps/">
                    <svg class="Button--icon" viewBox="0 0 236 256" fill="currentColor">
                        <path d="M138.52 123.58L16.78 0c1.99.46 4.08 1.26 6.25 2.46l152.16 84.31-36.67 36.8zm42 42.62l-36.84-37.39 38.2-38.33 44.62 24.73c12.67 7.01 12.67 18.5 0 25.51l-45.99 25.48zM7.32.9l126 127.9L7.46 255.1C2.88 252.82 0 247.5 0 239.87V16.05C0 8.48 2.83 3.21 7.33.9zM138.5 134.02l35.35 35.88-150.81 83.56a24.36 24.36 0 0 1-5.94 2.4l121.4-121.84z">
                        </path>
                    </svg>
                    <span class="Button--text">Google Play</span>
                </a>
            </div>

        </div>

        <!-- https://codepen.io/postor/pen/mskxI -->
        <div class="HeroSection--scroll-indicator" style="opacity: 0;">
            <svg class="arrows">
                <path class="a1" d="M0 0 L30 32 L60 0"></path>
                <path class="a2" d="M0 20 L30 52 L60 20"></path>
                <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg>
        </div>
    </div>
    <!-- hero section -->





    <!-- plan your route -->
    <div class="PlanYourRouteSection" data-depth-perspective-root="">
        <div class="PlanYourRouteSection--column">
            <div class="PlanYourRouteSection--content">
                <div class="SectionCopy" data-depth="3">
                    <div class="SectionCopy--content">
                        <h2 class="SectionCopy--title" data-js-balance-text="">Plan Your
                            Route</h2>
                        <div class="SectionCopy--description" data-js-balance-text="">
                            <p>Design and share your cruise route before the event. Know where everyone is during the
                                event.</p>
                            <p>Enable your cruise participants to navigate complex driving route's without needing to
                                follow paper maps.</p>
                            <p>
                                <a class="CopyLink"
                                   href="http://whos-touring/plan-your-route"
                                   target="_blank">Learn more</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="PlanYourRouteSection--device-mockup">
                <div class="DeviceMockup desktop" data-depth-perspective-scroll-anchor="">
                    <div class="DeviceMockup--backdrop DeviceMockup--backdrop-blob1" data-depth="2">

                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#0F62FE"
                                  d="M37.1,-58.2C45.4,-45.1,47.5,-30.6,55.3,-15.8C63.1,-1,76.7,14.2,75.7,26.8C74.7,39.5,59.1,49.7,44,47.9C29,46.1,14.5,32.4,5.3,25C-3.8,17.7,-7.7,16.8,-21.6,18.2C-35.6,19.6,-59.7,23.4,-64.6,18.6C-69.5,13.7,-55.2,0.2,-45.6,-10.4C-36.1,-21,-31.3,-28.8,-24.5,-42.4C-17.7,-55.9,-8.8,-75.4,2.8,-79.2C14.4,-83.1,28.9,-71.3,37.1,-58.2Z"
                                  transform="translate(100 100)"/>
                        </svg>
                    </div>
                    <div class="DeviceMockup--device DeviceMockup--device-monitor" data-depth="1">
                        <div class="DeviceMockup--device-display">
                            <img src="plan-your-route.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- plan your route -->







    <!-- Guide Your Crew-->
    <div class="GuideYourCrewSection" data-depth-perspective-root="">
        <div class="GuideYourCrewSection--column">
            <div class="GuideYourCrewSection--device-mockup">
                <div class="DeviceMockup desktop" data-depth-perspective-scroll-anchor="">
                    <div class="DeviceMockup--backdrop DeviceMockup--backdrop-blob2" data-depth="2">

                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#FA4D56"
                                  d="M48.2,-57.5C59.1,-58.5,62.2,-39.9,55.4,-26.2C48.6,-12.5,31.8,-3.8,26.8,7.8C21.8,19.4,28.5,33.9,26,41.9C23.5,50,11.7,51.5,2.3,48.3C-7.1,45.2,-14.3,37.3,-18.7,29.9C-23.1,22.5,-24.7,15.5,-27,8.7C-29.3,1.9,-32.2,-4.7,-33,-13.3C-33.8,-21.9,-32.5,-32.4,-26.6,-33.1C-20.8,-33.8,-10.4,-24.6,4.1,-30.3C18.7,-36,37.3,-56.6,48.2,-57.5Z"
                                  transform="translate(100 100)"/>
                        </svg>
                    </div>
                    <div class="DeviceMockup--device DeviceMockup--device-monitor" data-depth="1">
                        <div class="DeviceMockup--device-display">
                            <img src="guide-your-crew.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="GuideYourCrewSection--content">
                <div class="SectionCopy SectionCopy-is-right" data-depth="3">
                    <div class="SectionCopy--content">
                        <h2 class="SectionCopy--title" data-js-balance-text="">Guide Your Crew</h2>
                        <div class="SectionCopy--description" data-js-balance-text="">
                            <p>Share your route before the event</p>
                            <p>Keep track of all your participants, know when someone gets lost </p>

                            <p>
                                <a class="CopyLink"
                                   href="<?= $DOMAIN; ?>guide-your-crew"
                                   target="_blank">Learn more</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Guide Your Crew-->




    <!-- Safely Tracks, Logs and Records Movements //-->
    <div class="LogAndRecordSection" data-depth-perspective-root="">
        <div class="LogAndRecordSection--column">
            <div class="LogAndRecordSection--content">
                <div class="SectionCopy" data-depth="3">
                    <div class="SectionCopy--content">
                        <h2 class="SectionCopy--title" data-js-balance-text="">Safely
                            Tracks, Logs and Records Movements</h2>
                        <div class="SectionCopy--description" data-js-balance-text="">
                            <p>Many Car &amp; Bike Clubs are required to maintain their cruise participants within a
                                group for insurance purposes.</p>
                            <p>We track a very limited amount of data so that an event organiser can determine if an
                                incident happened within the their rules &amp; guidelines</p>
                            <p>We track participants locations at limited set intervals to ensure that our data can not
                                be used to incriminate your drivers</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="LogAndRecordSection--device-mockup">
                <div class="DeviceMockup desktop" data-depth-perspective-scroll-anchor="">
                    <div class="DeviceMockup--backdrop DeviceMockup--backdrop-blob3" data-depth="2">


                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#08BDBA"
                                  d="M38,-58.5C47.6,-52.9,52.8,-39.7,54.8,-27.4C56.8,-15,55.6,-3.6,53.6,7.5C51.6,18.5,48.8,29.2,42.7,37.9C36.6,46.7,27.1,53.5,15.8,59.3C4.5,65.1,-8.7,69.9,-18.3,65.6C-27.8,61.2,-33.7,47.7,-39,36.6C-44.3,25.4,-49,16.6,-55.3,5C-61.6,-6.6,-69.5,-21,-69.3,-35.9C-69.1,-50.8,-60.8,-66.3,-47.9,-70.4C-35,-74.5,-17.5,-67.2,-1.7,-64.6C14.2,-62,28.3,-64.1,38,-58.5Z"
                                  transform="translate(100 100)"/>
                        </svg>


                    </div>
                    <div class="DeviceMockup--device DeviceMockup--device-monitor" data-depth="1">
                        <div class="DeviceMockup--device-display">
                            <img src="track-log-record.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Safely Tracks, Logs and Records Movements //-->






    <!-- Coming Soon to macOS and Android //-->
    <div class="ComingSoon" data-depth-perspective-root="">
        <div class="ComingSoon--column">
            <div class="ComingSoon--device-mockup">
                <div class="DeviceMockup desktop" data-depth-perspective-scroll-anchor="">
                    <div class="DeviceMockup--backdrop DeviceMockup--backdrop-blob2" data-depth="2">

                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#FFD6E8"
                                  d="M50.4,-39.2C60.8,-27,61.9,-6.3,55.6,9.2C49.2,24.6,35.5,34.9,23.4,35.9C11.2,36.8,0.7,28.5,-10.4,22.7C-21.6,16.9,-33.4,13.6,-40,3.7C-46.5,-6.2,-47.9,-22.7,-40.3,-34.2C-32.8,-45.8,-16.4,-52.3,1.8,-53.7C19.9,-55.1,39.9,-51.4,50.4,-39.2Z"
                                  transform="translate(100 100)"/>
                        </svg>
                    </div>
                    <div class="DeviceMockup--device DeviceMockup--device-monitor" data-depth="1">
                        <div class="DeviceMockup--device-display">
                            <img src="coming-soon.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ComingSoon--content">
                <div class="SectionCopy SectionCopy-is-right" data-depth="3">
                    <div class="SectionCopy--content">
                        <h2 class="SectionCopy--title" data-js-balance-text="">Coming Soon to macOS and Android</h2>
                        <div class="SectionCopy--description" data-js-balance-text="">
                            <div>
                                <p>Our macOS and android applications are currently being rigorously tested</p>
                                <p>We’re determined to ensure our app meets our own extremely high expectations and we
                                    will release the app only when we are confidant in its performance </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Coming Soon to macOS and Android //-->







    <!-- Sign up for early access //-->
    <div class="EarlyAccess" data-depth-perspective-root="">
        <div class="EarlyAccess--column">
            <div class="EarlyAccess--content" data-depth-perspective-scroll-anchor="" data-depth="3">


                <div class="EarlyAccess--content-section-copy-wrapper">
                    <div class="SectionCopy SectionCopy-is-centered">
                        <div class="SectionCopy--content">
                        </div>
                        <div class="GetNotifiedSection--form-holder">
                            <h2 class="GetNotifiedSection--form-header" data-js-balance-text="">Sign up for early
                                access</h2>
                            <div class="SectionCopy--description" data-js-balance-text="">
                                <p>Subscribe to be notified when the macOS and Android clients are available.</p>
                                <form class="GetNotifiedSection--form"
                                      action="<?= $DOMAIN; ?>>/subscribe8"
                                      method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                                    <input class="Input" type="email" value="" name="EMAIL" placeholder="email address"
                                           required="">
                                    <button class="Button Button-is-primary" type="submit">Subscribe</button>
                                </form>
                            </div>
                            <p class="privacy-subtext">Your <a href="<?= $DOMAIN; ?>privacypolicy/"
                                                               class="CopyLink">privacy</a> is important to us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign up for early access //-->









    <!-- Brought to you by InfiniteHundred. -->
    <div class="InfiniteHundredSection" id="subscription-form" data-depth-perspective-root="">
        <div class="InfiniteHundredSection--column">
            <div class="InfiniteHundredSection--content" data-depth-perspective-scroll-anchor="" data-depth="3">

                <div class="InfiniteHundredSection--icon">

                </div>

                <div class="InfiniteHundredSection--content-section-copy-wrapper">
                    <div class="SectionCopy SectionCopy-is-centered">
                        <div class="SectionCopy--content">
                            <h2 class="SectionCopy--title" data-js-balance-text="">Brought to you by blott.dev and blott.com.au</h2>
                            <div class="SectionCopy--description" data-js-balance-text="">
                                <p>
                                    <a class="CopyLink" href="https://blott.dev/" target="_blank" title="blott.dev">blott.dev</a>
                                    is a custom website and mobile application supplier. Specialising in bespoke
                                    programs that run independently of 3rd party restrictions.
                                </p>
                                <p>With over 20 years of experience, our team excels at creating one-off systems made
                                    specifically to your needs</p>
                                <p>
                                    <a class="CopyLink" href="https://blott.com.au/" target="_blank" title="blott.com.au">blott.com.au</a>
                                    is a collection of personal passion projects by Ian Blott. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="InfiniteHundredSection--backdrop-blob4" data-depth="2">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#8A3FFC"
                          d="M40.3,-67.5C49.6,-56.7,52.7,-41.1,47.7,-28.7C42.7,-16.2,29.5,-6.9,31.9,7.4C34.2,21.8,52.1,41.2,53.7,55.4C55.2,69.5,40.4,78.3,25.5,79.3C10.6,80.2,-4.5,73.3,-20.2,68.7C-35.9,64.1,-52.3,61.8,-62.7,52.7C-73.1,43.7,-77.5,27.7,-81.2,10.9C-84.9,-6,-87.8,-23.7,-75.6,-27.8C-63.3,-31.9,-35.7,-22.2,-20.5,-30.4C-5.4,-38.5,-2.7,-64.5,6.4,-74.4C15.5,-84.4,31,-78.4,40.3,-67.5Z"
                          transform="translate(100 100)"/>
                </svg>
            </div>
        </div>
    </div>
    <!-- Brought to you by InfiniteHundred. -->

</div>




<script type="text/javascript" src="site.js"></script>
</body>
</html>