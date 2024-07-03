@extends('website.index')
@section('content')
    <div class="background-image"></div>
    <div class="wines-wrapper">
        <section class="container wines-section">
            <h1>Wines</h1>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 card wine-card">
                            <div class="row g-0">
                                <div class="col-12 col-md-6 col-lg-5">
                                    <img src="images/gallery/1.jpg" class="rounded img-fluid" alt="">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
