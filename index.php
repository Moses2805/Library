<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="shortcut icon" type="image/jpg" href="img/1200px-Japanese_Map_symbol_(Library).svg.png" />

    <!-- Bootstrapp for CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="margin-bottom: 1%">

    <div class="uploads"></div>


    <div class="dropzone" id="dropzone">

        <div class="info-drop">
            <h3 class="mt-4 fw-500 fs-40">Drop it like it hot</h3>
        </div>
    </div>

    <div class="box">



        <div class="container">

            <!-- header section -->

            <header>
                <div class="row">


                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

                            <div class="col-2 d-lg-flex justify-content-evenly col-xl-2 col-lg-2">
                                <div class="sumnotes-logo c">
                                    <img src="img/Group 3.svg" alt="sumnotes-logo">
                                </div>
                                <p class="color-26272f fs-20 fw-600 lh-24">Sumnotes</p>
                            </div>
                            <div class="col-4 ul-info col-xl-4 col-lg-4">

                                <ul class="navbar-nav d-flex justify-content-evenly">

                                    <li class="nav-item">
                                        <a class="nav-link active color-202429 fs-16 fw-500 lh-24" aria-current="page" href="#">Library</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link color-9497aa fs-16 fw-500 lh-24" href="#">Pricing
                                            Plan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link color-9497aa fs-16 fw-500 lh-24" href="#">Contacts</a>
                                    </li>

                                </ul>
                            </div>


                            <div class="col-3 notif_photo d-flex justify-content-around col-xl-3 col-lg-3">
                                <div class="notification c">
                                    <img src="img/icons8-notification (4) 1.svg" alt="notification">
                                </div>
                                <div class="name-div d-flex justify-content-center">
                                    <p class="color-black fs-14 lh-24">Elizabeth Norton</p>
                                    <img src="img/Group 7234.svg" alt="Elizabeth Norton">
                                </div>
                            </div>
                        </div>
                    </nav>




                </div>

                <hr class="for_header bg-a8a8af">

                <div class="row d-flex justify-content-between">
                    <div class="col-12 col-xl-6">
                        <form>
                            <a href="#"><img src="img/icons8-search (4) 1.svg" alt="search_anything" class="search_input"></a>

                            <input maxlength="15" type="text" id="search_anything" placeholder="Search for assets, highlights, tags" class="bg-f8f8fa br-60 bs">
                            <img src="img/black_cancel.svg" alt="cancel" class="bg_nonactive" id="cancel">

                        </form>
                    </div>

                    <div class="col-4 d-flex justify-content-evenly tagssort col-xl-4">
                        <div class="sort bg-f8f8fa br-60 text-right bs c lh-24" id="sort_id">
                            <p class=" color-616875 fs-14">Sort By</p>
                            <img src="img/icons8-filter (4) 1.svg" alt="filter">
                        </div>

                        <div class="bg_nonactive" id="bg_showed_sort">
                            <div class="showed_sort bg-white br-12">
                                <p class="color-black fs-14 text-center c lh-16">By Date</p>
                                <hr class="bg-ecf0f6 text-center">
                                <p class="color-black fs-14 text-center c lh-16">By Tags</p>
                                <hr class="bg-ecf0f6 text-center">
                                <p class="color-black fs-14 text-center c lh-16">By Annotations</p>
                                <hr class="bg-ecf0f6 text-center">
                                <p class="color-black fs-14 text-center c lh-16">By Something</p>
                            </div>
                        </div>


                        <div class="tags bg-f8f8fa br-60 text-right bs c lh-24">
                            <p class="my_tags color-616875 fs-14">Tags</p>
                            <img src="img/icons8-tags 2.svg" alt="tags">
                        </div>

                        <div class="tags_modal_bg bg_nonactive bg-black-opac z-1">
                            <div class="tags_modal bg-white br-12">
                                <div class="tags_modal_header">
                                    <h5 class="color-202429 fs-22 fw-600">My Tags</h5>
                                    <img src="img/icons8-delete (3) 1.svg" alt="delete_icon" class="tags_delete c">
                                </div>

                                <hr class="header_hr bg-e0e0e9">


                                <div class="tags_modal_main">
                                    <div class="row">
                                        <div class="showed_tags_bg_1">
                                            <div class="showed_tags_1 bg-ecf0f6 br-100">
                                                <p class="color-5041ff fs-14 text-center lh-24">Science</p>
                                                <img src="img/blue_tags.svg" alt="tags" class="square-24">
                                            </div>
                                        </div>

                                        <div class="showed_tags_bg_1">
                                            <div class="showed_tags_1 bg-ecf0f6 br-100">
                                                <p class="color-e31ae7 fs-14 text-center lh-24">Old Movies</p>
                                                <img src="img/pink_tags.svg" alt="tags" class="square-24">
                                            </div>
                                        </div>

                                        <div class="showed_tags_bg_1">
                                            <div class="showed_tags_1 bg-ecf0f6 br-100">
                                                <p class="color-ff551f fs-14 text-center">Architecture</p>
                                                <img src="img/orange_tags.svg" alt="tags" class="square-24">

                                            </div>
                                        </div>


                                        <div class="showed_tags_bg_1">
                                            <div class="showed_tags_1 bg-ecf0f6 br-100">
                                                <p class="color-f4a60e fs-14 text-center lh-24">Web Designer</p>
                                                <img src="img/yellow_tags.svg" alt="tags" class="square-24">

                                            </div>
                                        </div>

                                        <div class="showed_tags_bg_1">
                                            <div class="showed_tags_1 bg-ecf0f6 br-100">
                                                <p class="color-5041ff fs-14 text-center lh-24">Chemistry</p>
                                                <img src="img/blue_tags.svg" alt="tags" class="square-24">

                                            </div>
                                        </div>

                                        <div class="showed_tags_bg_1">
                                            <div class="showed_tags_1 bg-ecf0f6 br-100">
                                                <p class="color-fb124a fs-14 text-center lh-24">Spider-Man</p>
                                                <img src="img/red_tags.svg" alt="tags" class="square-24">

                                            </div>
                                        </div>

                                        <div class="showed_tags_bg_1">
                                            <div class="showed_tags_1 bg-ecf0f6 br-100">
                                                <p class="color-5041ff fs-14 text-center lh-24">Science</p>
                                                <img src="img/blue_tags.svg" alt="tags" class="square-24">

                                            </div>
                                        </div>

                                        <div class="showed_tags_bg_1">
                                            <div class="showed_tags_1 bg-ecf0f6 br-100">
                                                <p class="color-e31ae7 fs-14 text-center lh-24">Old Movies</p>
                                                <img src="img/pink_tags.svg" alt="tags" class="square-24">

                                            </div>
                                        </div>

                                        <div class="showed_tags_bg_1">
                                            <div class="showed_tags_1 bg-ecf0f6 br-100">
                                                <p class="color-ff551f fs-14 text-center lh-24">Architecture</p>
                                                <img src="img/orange_tags.svg" alt="tags" class="square-24">

                                            </div>
                                        </div>

                                        <div class="showed_tags_bg_1">
                                            <div class="showed_tags_1 bg-ecf0f6 br-100">
                                                <p class="color-fb124a fs-14 text-center lh-24">Spider-Man</p>
                                                <img src="img/red_tags.svg" alt="tags" class="square-24">

                                            </div>
                                        </div>

                                        <div class="showed_tags_bg_1">
                                            <div class="showed_tags_1 bg-ecf0f6 br-100">
                                                <p class="color-5041ff fs-14 text-center lh-24">Organic Chemistry
                                                </p>
                                                <img src="img/blue_tags.svg" alt="tags" class="square-24">

                                            </div>
                                        </div>

                                        <div class="showed_tags_bg_1">
                                            <div class="showed_tags_1 bg-ecf0f6 br-100">
                                                <p class="color-f4a60e fs-14 text-center lh-24">Interface</p>
                                                <img src="img/yellow_tags.svg" alt="tags" class="square-24">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>



            <!-- ___________________________________________________________________________________________ -->


            <!-- main section -->

            <main>

                <div class="row d-flex justify-content-between">
                    <div class="error_file col-xl-3">
                        <div class="hidden_element">
                            <div class="control-file bg-ecf0f6 br-12">
                                <p class="fs-12">You can't upload files of this type.</p>
                            </div>
                        </div>

                    </div>


                    <div class="success_file col-xl-3">

                        <div class="hidden_element">

                            <div class="more_about_success br-12 bg-ecf0f6" style="padding: 20px;">

                                <div class="info_installing d-flex justify-content-between align-items-baseline">
                                    <h6>Sync with Kindle</h6>
                                    <p class="precent">0%</p>
                                </div>

                                <div class="progress_bar" style="--width: 10"></div>
                                <br>

                                <div class="installing-success">
                                    <p class="fs-12">installing new book</p>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>


                <div class="row first-card-line d-flex justify-content-between">

                    <h6 class="color-9497aa fs-18 fw-500 lh-24">Frequently Viewed</h6>

                    <div class="col-12 col-xl-3 mt-3 col-lg-6">
                        <div class="card card_for_upload bg-white br-12 bs">
                            <div class="card-body">
                                <div class="icon-plus bg-fffbe8 br-50">
                                    <img src="img/icons8-plus (1) 1.svg" alt="plus">

                                </div>
                                <a href="#" class="show_popup">
                                    <div class="upload bg-ffd504 br-12">
                                        <img src="img/icons8-upload (8) 1.svg" alt="upload">
                                        <p class="color-black fs-16 fw-500 text-center lh-24">Upload</p>
                                    </div>


                                </a>

                                <div class=" modal-bg bg_nonactive bg-black-opac z-1">
                                    <div class="modal bg-white br-12">
                                        <div class="modal-header">
                                            <h5 class="color-202429 fs-22 fw-600">
                                                File Uploader
                                            </h5>
                                            <img src="img/Group 8026.svg" alt="icon_delete" class="delete square-24 c">
                                        </div>

                                        <hr class="first_hr bg-e0e0e9 z-1">

                                        <div class="modal-main">
                                            <div class="where-from col-12 bg-white br-12 bs c">
                                                <img src="img/Group 8016.svg" alt="from_computer" class="square-40 z-1">
                                                <p class="color-202429 fs-14 fw-500 text-center z-1">From Computer
                                                </p>
                                            </div>
                                            <div class="where-from col-12 bg-white br-12 bs c">
                                                <img src="img/icons8-google-drive 1.svg" alt="from_drive" class="square-40 z-1">
                                                <p class="color-202429 fs-14 fw-500 text-center z-1">Google Drive
                                                </p>
                                            </div>
                                            <div class="where-from col-12 bg-white br-12 bs c">
                                                <img src="img/Group 8022.svg" alt="from_dropbox" class="square-40 z-1">
                                                <p class="color-202429 fs-14 fw-500 text-center z-1">Dropbox</p>
                                            </div>
                                            <div class="where-from col-12 bg-white br-12 bs c">
                                                <img src="img/Group 8024.svg" alt="from_one-drive" class="square-40 z-1">
                                                <p class="color-202429 fs-14 fw-500 text-center z-1">One Drive</p>
                                            </div>
                                        </div>
                                        <hr class="last_hr bg-e0e0e9 z-1">

                                        <div class="modal-footer">
                                            <p class="color-202429 fs-16 fw-500">Sync from a vendor</p>
                                            <div class="modal_infos">
                                                <div class="info_boxs bg-white br-12 square-80 bs c">
                                                    <img src="img/Group 8028.svg" alt="box" class="square-34">
                                                    <span class="color-a1aab9 fs-12 text-center z-1">Last seen 3
                                                        hours ago</span>
                                                </div>
                                                <div class="info_boxs bg-white br-12 square-80 bs c">
                                                    <img src="img/Kindle.svg" alt="box" class="square-34">
                                                    <span class="color-a1aab9 fs-12 text-center z-1">Last seen 2
                                                        days ago</span>
                                                </div>
                                                <div class="info_boxs bg-white br-12 square-80 bs c">
                                                    <img src="img/HI.svg" alt="box" class="square-34">
                                                </div>
                                                <div class="info_boxs bg-white br-12 square-80 bs c">
                                                    <img src="img/Kobo.svg" alt="box" class="square-34">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <br>
                                <a href="#">
                                    <div class="import bg-ecf0f6 br-12">
                                        <img src="img/icons8-ipad (1) 1.svg" alt="import">
                                        <p class="color-black fs-16 fw-500 text-center lh-24">Import</p>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 col-xl-3 standart-card col-lg-6">
                        <div class="card bg-white br-12 bs c">
                            <div class="card-header bg-eff1f4">
                                <img src="img/Group 8123.svg" alt="pdf" class="pdf">
                                <img src="img/Group 7873.svg" alt="for_more" class="for_more">


                                <div class="bg_nonactive" style="transition: all 0.7s;">

                                    <div class="card_events bg-white br-12" id="dropdown">
                                        <p class="fs-14 text-center c lh-16">Dublicate</p>
                                        <p class="fs-14 text-center c lh-16">Share</p>
                                        <p class="color-ff4034 fs-14 text-center c lh-16">Delete</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="color-9497aa fs-14 lh-16">15 sep 2020</span>
                                <p class="research color-202429 fs-16 fw-500 lh-24">Important cancer research</p>
                                <span class="file-type color-9497aa fs-14">PDF file</span>
                                <p class="infos color-ff9d02 fs-14 lh-24">14 annotations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 col-xl-3 standart-card col-lg-6">
                        <div class="card bg-white br-12 bs c">
                            <div class="card-header">
                                <img src="img/Group 8123.svg" alt="pdf" class="pdf">
                                <img src="img/Group 7873.svg" alt="for_more" class="for_more">


                                <div class="bg_nonactive" style="transition: all 0.5s;">

                                    <div class="card_events bg-white br-12" id="dropdown">
                                        <p class="fs-14 text-center c lh-16">Dublicate</p>
                                        <p class="fs-14 text-center c lh-16">Share</p>
                                        <p class="color-ff4034 fs-14 text-center c lh-16">Delete</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="color-9497aa fs-14 lh-16">15 sep 2020</span>
                                <p class="research color-202429 fs-16 fw-500 lh-24">Important cancer research</p>
                                <span class="file-type color-9497aa fs-14 lh-16">PDF file</span>
                                <p class="infos color-ff9d02 fs-14 lh-24">14 annotations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 col-xl-3 standart-card col-lg-6">
                        <div class="card bg-white br-12 bs c">
                            <div class="card-header bg-eff1f4">
                                <img src="img/Group 8123.svg" alt="pdf" class="pdf">
                                <img src="img/Group 7873.svg" alt="for_more" class="for_more">


                                <div class="bg_nonactive" style="transition: all 0.5s;">

                                    <div class="card_events bg-white br-12" id="dropdown">
                                        <p class="fs-14 text-center c lh-16">Dublicate</p>
                                        <p class="fs-14 text-center c lh-16">Share</p>
                                        <p class="color-ff4034 fs-14 text-center c lh-16">Delete</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="color-9497aa fs-14 lh-16">15 sep 2020</span>
                                <p class="research color-202429 fs-16 fw-500 lh-24">Important cancer research</p>
                                <span class="file-type color-9497aa fs-14 lh-16">PDF file</span>
                                <p class="infos color-ff9d02 fs-14 lh-24">14 annotations</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-between first-card-line mt-5">

                    <h6 class="color-9497aa fs-18 fw-500 lh-24">All Files</h6>

                    <div class="col-12 mt-3 standart-card col-xl-3 col-lg-6">
                        <div class="card bg-white br-12 bs c">
                            <div class="card-header bg-eff1f4">
                                <img src="img/Group 8123.svg" alt="pdf" class="pdf">
                                <img src="img/Group 7873.svg" alt="for_more" class="for_more">


                                <div class="bg_nonactive" style="transition: all 0.5s;">

                                    <div class="card_events bg-white br-12" id="dropdown">
                                        <p class="fs-14 text-center c lh-16">Dublicate</p>
                                        <p class="fs-14 text-center c lh-16">Share</p>
                                        <p class="color-ff4034 fs-14 text-center c lh-16">Delete</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="color-9497aa fs-14 lh-16">15 sep 2020</span>
                                <p class="research color-202429 fs-16 fw-500 lh-24">Important cancer research</p>
                                <span class="file-type color-9497aa fs-14 lh-16">PDF file</span>
                                <p class="infos color-ff9d02 fs-14 lh-24">14 annotations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 standart-card col-xl-3 col-lg-6">
                        <div class="card bg-white br-12 bs c">
                            <div class="card-header bg-eff1f4">
                                <img src="img/Group 8123.svg" alt="pdf" class="pdf">
                                <img src="img/Group 7873.svg" alt="for_more" class="for_more">


                                <div class="bg_nonactive" style="transition: all 0.5s;">

                                    <div class="card_events bg-white br-12" id="dropdown">
                                        <p class="fs-14 text-center c lh-16">Dublicate</p>
                                        <p class="fs-14 text-center c lh-16">Share</p>
                                        <p class="color-ff4034 fs-14 text-center c lh-16">Delete</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="color-9497aa fs-14 lh-16">15 sep 2020</span>
                                <p class="research color-202429 fs-16 fw-500 lh-24">Important cancer research</p>
                                <span class="file-type color-9497aa fs-14 lh-16">PDF file</span>
                                <p class="infos color-ff9d02 fs-14 lh-24">14 annotations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 standart-card col-xl-3 col-lg-6">
                        <div class="card bg-white br-12 bs c">
                            <div class="card-header bg-eff1f4">
                                <img src="img/Group 8123.svg" alt="pdf" class="pdf">
                                <img src="img/Group 7873.svg" alt="for_more" class="for_more">


                                <div class="bg_nonactive" style="transition: all 0.5s;">

                                    <div class="card_events bg-white br-12" id="dropdown">
                                        <p class="fs-14 text-center c lh-16">Dublicate</p>
                                        <p class="fs-14 text-center c lh-16">Share</p>
                                        <p class="color-ff4034 fs-14 text-center c lh-16">Delete</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="color-9497aa fs-14 lh-16">15 sep 2020</span>
                                <p class="research color-202429 fs-16 fw-500 lh-24">Important cancer research</p>
                                <span class="file-type color-9497aa fs-14 lh-16">PDF file</span>
                                <p class="infos color-ff9d02 fs-14 lh-24">14 annotations</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-3 standart-card col-xl-3 col-lg-6">
                        <div class="card bg-white br-12 bs c">
                            <div class="card-header bg-eff1f4">
                                <img src="img/Group 8123.svg" alt="pdf" class="pdf">
                                <img src="img/Group 7873.svg" alt="for_more" class="for_more">


                                <div class="bg_nonactive" style="transition: all 0.5s;">

                                    <div class="card_events bg-white br-12" id="dropdown">
                                        <p class="fs-14 text-center c lh-16">Dublicate</p>
                                        <p class="fs-14 text-center c lh-16">Share</p>
                                        <p class="color-ff4034 fs-14 text-center c lh-16">Delete</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="color-9497aa fs-14 lh-16">15 sep 2020</span>
                                <p class="research color-202429 fs-16 fw-500 lh-24">Important cancer research</p>
                                <span class="file-type color-9497aa fs-14 lh-16">PDF file</span>
                                <p class="infos color-ff9d02 fs-14 lh-24">14 annotations</p>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

        </div>

        <!-- _______________________________________________________________________________ -->


        <!-- footer section -->

        <footer class="bg-f9fafd">
            <div class="row footer-row d-flex justify-content-between">
                <div class="col-12 col-xl-3">
                    <div class="sumnotes-logo-info">
                        <img src="img/Group 3.svg" alt="sumnotes">
                        <p class="class-black fs-24 fw-500">Sumnotes</p>
                    </div>

                    <div class="footer-info">
                        <p class="color-616875 fs-16">We summarize annotations from PDF files and summarize while
                            you focus on what matters.</p>
                    </div>


                </div>

                <div class="col-3 col-xl-1">
                    <h5 class="color-black fs-14 fw-600">
                        PRODUCTS
                    </h5>
                    <ul>
                        <li class="color-616875 fs-16 lh-28">
                            Pricing
                        </li>
                    </ul>
                </div>

                <div class="col-3 col-xl-2">
                    <div class="h5">
                        <h5 class="color-black fs-14 fw-600">COMPANY</h5>
                        <ul>
                            <li class="color-616875 fs-16 lh-28">Blog</li>
                            <li class="color-616875 fs-16 lh-28">Contact Us</li>
                        </ul>
                    </div>
                </div>

                <div class="col-3 col-xl-2">
                    <div class="h5">
                        <h5 class="color-black fs-16 fw-600">LEGAL</h5>
                        <ul>
                            <li class="color-616875 fs-16 lh-28">Terms of Service</li>
                            <li class="color-616875 fs-16 lh-28">Privacy Police</li>
                            <li class="color-616875 fs-16 lh-28">FAQ</li>
                        </ul>
                    </div>
                </div>

                <div class="col-3 col-xl-2">
                    <img src="img/Group 196.svg" alt="instagram" class="c">
                    <img src="img/Group 197.svg" alt="twitter" class="c">

                </div>
            </div>

            <div class="row about_site d-flex justify-content-between">
                <div class="col-6 col-xl-3">
                    <div class="mail-info">
                        <p class="color-616875 fs-16">Send us an email at</p>
                        <a href="#">info@sumnotes.com</a>
                    </div>
                </div>

                <div class="col-6 col-xl-4">
                    <div class="about_more">
                        <p class="color-616875 fs-14 text-right">?? 2020 Sumnotes Inc ??? Copyrights are reserved</p>
                    </div>
                </div>

            </div>

        </footer>

        <!-- __________________________________________________________________________________ -->



    </div>




    <!-- Bootstrapp for JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <script src="js/script.js"></script>

</body>

</html>