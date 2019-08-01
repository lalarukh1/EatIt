<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row justify-content-between d-none d-lg-flex">
                <div class="col-3 p-2 pl-4 justify-content-start">
                    <div class="d-flex align-items-center">Logo</div>
                </div>
                <div class="col-9 justify-content-end">
                    <ul class="nav justify-content-end mx-3">
                        <li class="nav-item">
                            <h6 class="px-3 pb-1 pt-2 d-flex align-items-center">
                                <img src="https://img.icons8.com/ios/15/000000/user.png">
                                <span class="p-1">Profile</span>
                            </h6>
                        </li>
                        <li class="nav-item">
                            <h6 class="px-3 pb-1 pt-2 d-flex align-items-center">
                                <img src="https://img.icons8.com/ios/15/000000/settings.png">
                                <span class="p-1">Settings</span>
                            </h6>
                        </li>
                        <li class="nav-item">
                            <h6 class="px-3 pb-1 pt-2 d-flex align-items-center">
                                <img src="https://img.icons8.com/ios/15/000000/user.png">
                                <span class="p-1">Restaurants</span>
                            </h6>
                        </li>
                    </ul></div>

            </div>
            <div class="row">
                <div class="col m-0 p-0">
                    <img src="https://via.placeholder.com/1440x200">
                </div>
            </div>
            <div class="row mt-n3 mt-lg-5">
                <div class="col m-0 p-0">
                    <div class="form">
                        <div class="form-group justify-content-center">
                            <div class="col-md-12 col-lg-4 offset-lg-4">
                                <input type="text" class="form-control" placeholder="Enter postcode">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="section my-4 my-lg-3">
                <div class="row">
                    <div class="col text-center">
                        <h3 class="h3 py-4 py-lg-1">Choose Your Dietary Requirement</h3>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col text-right ">
                        <div class="logo border rounded d-inline-block px-3 pt-2 m-2 px-lg-5">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="50" height="50" fill="url(#pattern0)"/>
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0" transform="scale(0.02)"/>
                                </pattern>
                                <image id="image0" width="50" height="50" xlink:href="data:image/png;base64,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"/>
                            </defs>
                        </svg>
                            <p class="py-1 text-center m-0">Halal</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="logo border rounded d-inline-block px-3 pt-2 m-2 px-lg-5">
                            <img src="https://img.icons8.com/ios/50/000000/natural-food.png">
                            <p class="py-1 text-center m-0">Veg</p>
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col text-right">
                        <div class="logo border rounded d-inline-block px-3 pt-2 m-2 px-lg-5">
                            <img src="https://img.icons8.com/ios/50/000000/leaf.png">
                            <p class="py-1 text-center m-0">Vegan</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="logo border rounded d-inline-block px-3 pt-2 m-2 px-lg-5">
                            <img src="https://img.icons8.com/ios/50/000000/healthy-eating.png">
                            <p class="py-1 text-center m-0">Diet</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="button">
                <div class="row justify-content-center">
                    <button type="button" class="btn btn-dark px-5">Search</button>
                </div>
            </section>
            <section class="bottom-bar mt-5 d-lg-none">
                <div class="row border-top p-1">
                    <div class="col text-center">
                        <img src="https://img.icons8.com/ios/25/000000/user.png">
                        <p class="m-0"> Profile </p>
                    </div>
                    <div class="col text-center">
                        <img src="https://img.icons8.com/ios/25/000000/settings.png">
                        <p class="m-0"> Settings </p>
                    </div>
                    <div class="col text-center">
                        <img src="https://img.icons8.com/ios/25/000000/summary-list.png">
                        <p class="m-0"> Restaurants </p>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
