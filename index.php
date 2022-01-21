<?php include 'header.php'; ?>

<div class="row body">
    <div class="tab-content">
        <div class="tab-pane active" role="tabpanel" aria-labelledby="home-tab-nav" id="home-tab">
            <div class="col-sm-12">
                <h2>News</h2>
                <hr />
                <p>Congratulations to our newest family! They will be taking the yellow boy home shortly after Christmas, which means all of our first litter are homed!</p>
            </div>
            <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="border-radius: 6px;">
                    <div class="carousel-item active text-center" style="background: rgba(0,0,0,0);">
                        <img class="start-50" src="imgs/farrahProfile.jpg" alt="Farrah Profile" title="Farrah" />
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <h2>About Us</h2>
                <div class="row">
                    <div class="col-12">
                        <p class="story">
                            It all started with a bright-eyed veterinary technician.
                            Amy's big heart was distraught as she worked with many families who had to have their family friends put down
                            due to cancer. This was an especially heart-wrenching trend with Golden Retrievers. As Amy moved on and raised
                            a family, she never forgot about the troublesome breed, and when the opportunity presented itself, She decided to do something about it.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <p class="story">
                            Enter Farrah.<br />
                            Amy had decided that she was going to work towards the goal of eliminating cancer
                            in the Golden Retriever breed. She did extensive research into reputable breeders across
                            the country until she found Farrah who was just around the corner. The rest is history.
                        </p>
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src='imgs/amypuppy.jpg' />
                    </div>
                    <div class="col-8">
                        <p class="story">
                            The goal of Farrah's Goldens is to responsibly raise companion Golden Retrievers that
                            have a significantly smaller change of developing cancer later in life. Stud males are
                            chosen primarily for this purpose which will hopefully lead to a lower chance of cancer in future generations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" role="tabpanel" aria-labelledby="bio-tab-nav" id="bio-tab">
            <div class="row">
                <div class="col-sm-4" id='pedigree-panel'>
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h3>Princess Farrah Muffin</h3>
                            </div>
                            <div class="card-text">
                                <ul id='pedigree-list'>
                                    <li>
                                        Sire: Aust Ch Montego Silversong
                                    </li>
                                    <li>
                                        Dam: Skye’s Snow White Of Lonesome Pine Goldens
                                    </li>
                                    <li>
                                        Pedigree: <a href="https://k9data.com/pedigree.asp?ID=1077599">https://k9data.com/pedigree.asp?ID=1077599</a>
                                    </li>
                                    <li>
                                        Eyes: OFA GR-EYE20614/27F-VPI
                                    </li>
                                    <li>
                                        Heart: OFA GR-CA36367/27F/P-VPI
                                    </li>
                                    <li>
                                        Hips: OFA GR-129820E27F-VPI
                                    </li>
                                    <li>
                                        Elbows: OFA GR-EL49393F27-VPI
                                    </li>
                                    <li>
                                        PRA1: Embark Clear
                                    </li>
                                    <li>
                                        PRA2: Embark Clear
                                    </li>
                                    <li>
                                        Ichthyosis: Embark Carrier
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <img class='img-fluid' src="./imgs/farrahcouchhappy.jpg" alt="farrah" />
                    <p>Princess Farrah Muffin was born March 13th, 2018 at Lonesome Pine's Goldens.
                        She was taken to her forever home by Amy Charpie when she was 8 weeks of age and she has spent her time as a wonderful family companion.
                        Amy always had thoughts of breeding her in hopes of bettering the Golden Retriever breed, but many tests needed to be performed to
                        determine the perfect match to complement Farrah's genetics.
                    </p>
                    <p>
                        Farrah's first pregnancy and litter went well, and she is currently nursing and recovering from a healthy litter of puppies.
                    </p>
                </div>
            </div>
        </div>
        <div class="tab-pane" role="tabpanel" aria-labelledby="about-tab-nav" id="about-tab">
            This is the about us
        </div>
        <div class="tab-pane" role="tabpanel" aria-labelledby="litter-tab-nav" id="litter-tab">
            <div class="panel">
                <div class="panel-header">
                    <h2>
                        Farrah's Litter - Winter 2021
                    </h2>
                </div>
                <div class="panel-body d-inline-flex justify-content-between">
                    <div class="d-flex flex-column justify-content-between litter-left">
                        <div>
                            Birthdate: September 19th<br />
                            Number of Puppies: 8<br />
                            Females: 4<br />
                            Males: 4
                        </div>
                        <div class="d-inline-flex flex-nowrap">
                            <img class='img-thumbnail' src='imgs/winter2021/001.jpg' />
                            <img class='img-thumbnail' src='imgs/winter2021/002.jpg' />
                            <img class='img-thumbnail' src='imgs/winter2021/003.jpg' />
                            <img class='img-thumbnail' src='imgs/winter2021/004.jpg' />
                            <img class='img-thumbnail' src='imgs/winter2021/005.jpg' />
                            <img class='img-thumbnail' src='imgs/winter2021/006.jpg' />
                        </div>
                    </div>
                    <div class='litter-showcase'>
                        <img src='./imgs/collage.jpg' alt="litter picture" title="Litter Picture" />
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" role="tabpanel" aria-labelledby="questions-tab-nav" id="questions-tab">
            <?php include 'questions.php'; ?>
        </div>
    </div>

</div>
</div>

</body>

</html>
