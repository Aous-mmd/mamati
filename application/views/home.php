<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true" style="z-index: 0;">
    <ul class="uk-slideshow-items">
        <?php foreach ($data as $row) : ?>
            <li>
                <img src="<?= site_url('assets/images/Home/Slider/' . $row['img_name'] . '.jpg'); ?>" alt="Mamati - Beauty Center" uk-cover>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="openTime hidden-md hidden-sm">
        <div class="openTime2">
            <div class="openTime3">
                <div class="openTimeText">
                    MON - SUN : 7:00 AM - 8:00 PM
                </div>
            </div>
        </div>
    </div>
    <a class="uk-position-bottom-left uk-position-small arrows" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-bottom-left uk-position-small arrows" href="#" uk-slidenav-next uk-slideshow-item="next" style="margin-left:70px;"></a>
</div>
</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="s1">
                    <h2>WELCOME TO MAMATI BEAUTY CENTER & SPA</h2>
                    <div class="left-pos"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="s1r">
                    <div class="aboutC">
                        <p>Welcome to Mamati Spa the perfect experience between luxury, beauty, originality and
                            sophistication. Where Mamati Spa takes you on an introductory journey to the origins
                            of the art of beauty and relaxation . We offer our customers a wide range of
                            integrated and advanced services to ensure your satisfaction .
                            We welcome you under the fingertips of specialists and under the care of experts and
                            in complete privacy . Also we offer you oriental care mixed with Moroccan, European
                            and Asian rituals. We dedicated luxury suites for you to take you to the creativity
                            tablet . Elegance are our slogan .</p>
                        <div class="text-left">
                            <a href="#" class="btn btn-6">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="items">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img1">
                    <img id="1" src="<?= site_url('assets/images/Home/items/Hairdressing ServicesBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>HAIRDRESSING SERVICES</h2>
                        <!-- <a href="/hairdressing-services.html" class="btn btn-5">Read more</a> -->
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img2">
                    <img id="2" src="<?= site_url('assets/images/Home/items/Make-up ServicesBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>MAKE-UP SERVICES</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img3">
                    <img id="3" src="<?= site_url('assets/images/Home/items/NAILS SERVICESBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>NAILS SERVICES</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img4">
                    <img id="4" src="<?= site_url('assets/images/Home/items/BODY TREATMENTBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>BODY TREATMENT</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img5">
                    <img id="5" src="<?= site_url('assets/images/Home/items/MASSAGEBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>MESSAGE</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img6">
                    <img id="6" src="<?= site_url('assets/images/Home/items/SIGNATURE MAMATI MASSAGEBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>SIGNATURE MAMATI MESSAGE</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img7">
                    <img id="7" src="<?= site_url('assets/images/Home/items/FACIALBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>FACIAL</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img8">
                    <img id="8" src="<?= site_url('assets/images/Home/items/Royal PavilionBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>Royal Pavilion</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img9">
                    <img id="9" src="<?= site_url('assets/images/Home/items/the formula day spaBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>the formula day spa</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img10">
                    <img id="10" src="<?= site_url('assets/images/Home/items/PACKAGESBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>PACKAGES</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img11">
                    <img id="11" src="<?= site_url('assets/images/Home/items/SPECIAL BATHBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>SPECIAL BATH</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img12">
                    <img id="12" src="<?= site_url('assets/images/Home/items/KIDS BEAUTYBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>KIDS BEAUTY</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img13">
                    <img id="13" src="<?= site_url('assets/images/Home/items/EYE LASHES EXTENSIONBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>EYE LASHES EXTENSION</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img14">
                    <img id="14" src="<?= site_url('assets/images/Home/items/SALT CAVEBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>SALT CAVE</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img15">
                    <img id="15" src="<?= site_url('assets/images/Home/items/HAIR EXTENTIONBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>HAIR EXTENTION</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img16">
                    <img id="16" src="<?= site_url('assets/images/Home/items/NOSE PIERCINGBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>NOSE PIERCING</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img17">
                    <img id="17" src="<?= site_url('assets/images/Home/items/MASSAGE THERAPISTBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>MASSAGE THERAPIST</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img18">
                    <img id="18" src="<?= site_url('assets/images/Home/items/LPG SLIM FIRM AND FITBK.jpg'); ?>" />
                    <div class="text-left">
                        <h2>LPG SLIM FIRM AND FIT</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="HomeServices" id="img19">
                    <img id="19" src="<?= site_url('assets/images/Home/items/Henna servicesBK.jpeg'); ?>" />
                    <div class="text-left">
                        <h2>Henna services</h2>
                        <div class="btna-div">
                            <a class="btn-5" href="#">
                                <span class="readMore">Read more</span>
                                <span uk-icon="arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>