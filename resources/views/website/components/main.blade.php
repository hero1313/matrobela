
    @extends('website.index')
    @section('content')
    <!--პირველი სექცია-->
    <section class="first-section">
        <div class="container-lg first-section-container">
            <p>Sip, savour, and speak to the world with our exquisite wines.</p>
            <a href="about-us.html"><button>DISCOVER MORE</button></a>
        </div>
    </section>
    <!--მეორე სექცია-->
    <section>
        <div class="container about-us">
            <div>
                <h3>About us</h3>
                <p>
                    Matrobela Wines winery is located in kisiskhevi, a charming village near telavi, a capital town of
                    Kakheti,
                    key wine region in the east of Georgia. Matrobela Wines company was established in 2015 with a
                    strong sense of
                    responsibility and devotion to the centuries old Georgian tradition of wine making - georgia's
                    uninterrupted
                    tradition of wine making which stretches back 8000 years.
                </p>
                <a href="about-us.html"><button class="about-button">DISCOVER MORE</button></a>
            </div>
        </div>
    </section>
    <!--ღვინოების სექცია-->
    <section class="container wines-section">
        <h3>Wines</h3>
        <div class="container">
            <div class="row">
                <div class="col-11">
                    <div class="mb-3 card wine-card">
                        <div class="row g-0">
                            <div class="col-12 col-md-6 col-lg-5">
                                <img src="/assets/website/image/gallery/1.jpg" class="img-fluid rounded-start" alt="">
                            </div>
                            <div class="col-12 col-md-6 col-lg-7">
                                <div class="card-body wine-card-body">
                                    <h3 class="card-title">Rkatsiteli</h3>
                                    <p>2023</p>
                                    <div class="fade_rule"></div>
                                    <div class="mt-2 d-flex">
                                        <p>red</p>
                                        <div class="mx-2 vl"></div>
                                        <p>dry</p>
                                    </div>
                                    <p class="card-text">This wine is made of ancient Georgian grape variety -
                                        Rkatsiteli harvested in the village kisiskhevi. It has floral aromas of yellow
                                        fruit and wild flowers. This wine is well-integrated, giving an overall balance
                                        with long finnish in the end and pleasant acidity. The wine is perfect with
                                        salads, chicken and fish at 10 to 12 C.</p>
                                    <a href="wines.html"><button class="about-button">DISCOVER MORE</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wines-section-arrow col-1">
                    <a href="//next-slide"><i class="fa-solid fa-chevron-right fa-2xl" style="color: #201717;"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--ნიუს სექცია-->
    <section class="container news-section">
        <h3>News</h3>
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="news.html">
                        <div class="news-section-img-wrapper">
                            <img src="/assets/website/image/gallery/2.jpg" alt="">
                            <div class="news-section-img-text">
                                <p>ONE SIP</p>
                            </div>
                        </div>
                        <button class="news-section-about-button">DISCOVER MORE</button>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="news.html">
                        <div class="news-section-img-wrapper">
                            <img src="/assets/website/image/gallery/3.jpg" alt="">
                            <div class="news-section-img-text">
                                <p>ONE SIP</p>
                            </div>
                        </div>
                        <button class="news-section-about-button">DISCOVER MORE</button>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="news.html">
                        <div class="news-section-img-wrapper">
                            <img src="/assets/website/image/gallery/4(69).jpg" alt="">
                            <div class="news-section-img-text">
                                <p>ONE SIP</p>
                            </div>
                        </div>
                        <button class="news-section-about-button">DISCOVER MORE</button>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="news.html">
                        <div class="news-section-img-wrapper">
                            <img src="/assets/website/image/gallery/5.png" alt="">
                            <div class="news-section-img-text">
                                <p>ONE SIP</p>
                            </div>
                        </div>
                        <button class="news-section-about-button">DISCOVER MORE</button>
                    </a>
                </div>

            </div>
        </div>

    </section>
    @stop
    