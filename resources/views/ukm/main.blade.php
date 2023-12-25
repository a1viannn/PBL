<!DOCTYPE html>
<html lang="en">

<head>
    @include('ukm.head')
</head>

<body>

    <!-- Navbar -->
    @include('ukm.navbar')

    <!-- Hero Section -->
    <section id="hero">
        <div class="container">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline">
                    <h1>Website UKM Olahraga Politeknik Negeri Banyuwangi</h1>
                    <p>AUTHOR :</p>
                    <p>UKM Olahraga</p>
                </div>
            </div>
            <img src="{{ asset('image/pembuatan-website-olahraga.png') }}" alt=""
                class="accent-img position-absolute start-0 w-100" style="top:80px;">
        </div>
    </section>

    <!-- Section 1 -->
    <section id="information">
        <div class="container">
            <div class="row">
                <div class="col-12 info-tagline">
                    <h2>PRESTASI UKM OLAHRAGA</h2>


                </div>

                <!-- Carausel Section -->
                <div class="continer justify-content-center align-items-center vh-100 posi-section">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image1.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image2.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image3.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image4.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image1.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image2.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image3.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image4.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image1.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image2.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image3.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image4.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section id="footer">
        @include('ukm.footer')
    </section>

    {{-- Script --}}
    @include('ukm.script')

</body>

</html>
