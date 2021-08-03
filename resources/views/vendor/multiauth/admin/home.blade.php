@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <x-Breadcrumb></x-Breadcrumb>
                <div class="col-lg-12 col-xl-6">
                    <div class="icon-cards-row">
                        <div class="glide dashboard-numbers">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-clock"></i>
                                                <p class="card-text mb-0">Pending Orders</p>
                                                <p class="lead text-center">16</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-basket-coins"></i>
                                                <p class="card-text mb-0">Completed Orders</p>
                                                <p class="lead text-center">32</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-arrow-refresh"></i>
                                                <p class="card-text mb-0">Refund Requests</p>
                                                <p class="lead text-center">2</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button">
                                <i class="simple-icon-refresh"></i>
                            </button>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recent Orders</h5>
                            <div class="scroll dashboard-list-with-thumbs">
                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/marble-cake-thumb.jpg" alt="Marble Cake"
                                             class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Marble Cake</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Latashia Nagy - 100-148 Warwick
                                                    Trfy, Kansas City, USA</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/fruitcake-thumb.jpg" alt="Fruitcake"
                                             class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Fruitcake</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Marty Otte - 166-156 Rue de
                                                    Varennes, Gatineau, QC J8T 8G4, Canada</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/chocolate-cake-thumb.jpg" alt="Chocolate Cake"
                                             class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-1 position-absolute badge-top-right">PROCESS</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Chocolate Cake</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Linn Ronning - Rasen 2-14, 98547
                                                    Kühndorf, Germany</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
