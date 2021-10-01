<?php include 'header.php'; ?>

<div class="row">
    <div class="tab-content">
        <div class="tab-pane active" role="tabpanel" aria-labelledby="home-tab-nav" id="home-tab">
            <div class="col-sm-4">Sidebar</div>
            <div class="col-sm-8">Content</div>
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
                    <img class='img-fluid' src="https://paulcharpie-my.sharepoint.com/personal/paul_charpies_com/Documents/web/-979723587100308563.jpg" alt="farrah" />
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
            This is the litter
        </div>
        <div class="tab-pane" role="tabpanel" aria-labelledby="questions-tab-nav" id="questions-tab">
            <?php include 'questions.php'; ?>
        </div>
    </div>

</div>
</div>

</body>

</html>
