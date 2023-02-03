@extends('frontHome')

@section('title', 'Dashboard')
@section('isi')
    <div class="pt-3"></div>
    <div class="container">

        <a class="btn m-5 btn-creative btn-primary" href="/login">Silahkan Login Terlebih Dahulu<i
                class="bi bi-box-arrow-in-right ms-2"></i></a>

        <div class="card service-card bg-primary mb-3">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="service-text">
                        <h5>10 Pelanggan</h5>
                        <p class="mb-0">Total Keseluruhan Pelanggan.</p>
                    </div>
                    <div class="service-img">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="70" height="70" x="0" y="0"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="">
                            <g>
                                <path style=""
                                    d="M371.613,227.096v5.795c0,7.101,1.145,14.155,3.39,20.891l13.126,39.378h24.774v-90.839h-16.516
                        C382.705,202.322,371.613,213.413,371.613,227.096z"
                                    fill="#5a4146" data-original="#5a4146" class=""></path>
                                <path style=""
                                    d="M484.684,244.251l-13.974,48.91l-66.065-57.806c-9.122,0-16.516-7.395-16.516-16.516l0,0
                        c0-13.682,11.092-24.774,24.774-24.774h57.806c9.122,0,16.516,7.395,16.516,16.516v15.522
                        C487.226,232.24,486.37,238.348,484.684,244.251z"
                                    fill="#694b4b" data-original="#694b4b"></path>
                                <rect x="404.64" y="317.94" style="" width="49.548" height="36.549"
                                    fill="#e6af78" data-original="#e6af78"></rect>
                                <path style=""
                                    d="M404.645,333.104c7.659,3.112,16.011,4.864,24.774,4.864s17.115-1.752,24.774-4.864v-15.169h-49.548
                        L404.645,333.104L404.645,333.104z"
                                    fill="#d29b6e" data-original="#d29b6e"></path>
                                <path style=""
                                    d="M494.031,349.351l-39.84-11.382l-24.772,16.439l-24.774-16.44l-39.838,11.383
                        c-10.636,3.039-17.968,12.76-17.968,23.821v60.376c0,4.561,3.697,8.258,8.258,8.258h148.645c4.561,0,8.258-3.697,8.258-8.258
                        v-60.376C512,362.11,504.667,352.39,494.031,349.351z"
                                    fill="#d5dced" data-original="#d5dced"></path>
                                <polygon style=""
                                    points="437.677,441.805 421.161,441.805 425.29,354.484 433.548,354.484 " fill="#afb9d2"
                                    data-original="#afb9d2"></polygon>
                                <path style=""
                                    d="M429.419,326.193L429.419,326.193c-27.365,0-49.548-22.184-49.548-49.548v-9.675
                        c0-4.38,1.74-8.581,4.837-11.679l14.975-14.975c3.171-3.171,7.507-4.994,11.989-4.853c26.398,0.833,49.764,6.488,62.537,18.963
                        c3.127,3.054,4.759,7.326,4.759,11.696v10.523C478.968,304.01,456.784,326.193,429.419,326.193z"
                                    fill="#f0c087" data-original="#f0c087"></path>
                                <path style=""
                                    d="M404.645,269.018c0-9.526,8-17.098,17.507-16.492c16.671,1.064,41.409,3.85,56.586,11.15
                        c-0.495-3.484-1.992-6.773-4.529-9.251c-12.773-12.475-36.139-18.13-62.537-18.963l-0.001,0.001v-0.001
                        c-4.481-0.141-8.818,1.683-11.988,4.853l-14.974,14.974c-3.098,3.097-4.838,7.298-4.838,11.679v9.675
                        c0,22.596,15.141,41.621,35.82,47.579c-6.883-8.492-11.045-19.272-11.045-31.063L404.645,269.018L404.645,269.018z"
                                    fill="#e6af78" data-original="#e6af78"></path>
                                <path style=""
                                    d="M478.968,397.779c0-6.571,2.61-12.872,7.256-17.518l21.257-21.257
                        c2.841,4.061,4.519,8.95,4.519,14.169v60.376c0,4.561-3.697,8.258-8.258,8.258h-24.774L478.968,397.779L478.968,397.779z"
                                    fill="#c7cfe2" data-original="#c7cfe2"></path>
                                <path style=""
                                    d="M433.548,371h-8.258c-2.28,0-4.129-1.849-4.129-4.129v-12.387h16.516v12.387
                        C437.677,369.151,435.829,371,433.548,371z"
                                    fill="#959cb5" data-original="#959cb5"></path>
                                <g>
                                    <path style=""
                                        d="M429.419,354.409L415.422,365.1c-2.411,1.842-5.897,1.104-7.354-1.558l-12.556-22.93l5.054-7.709
                            c1.121-1.71,3.51-2.001,5.009-0.611L429.419,354.409z"
                                        fill="#c7cfe2" data-original="#c7cfe2"></path>
                                    <path style=""
                                        d="M429.419,354.409l13.997,10.692c2.411,1.842,5.897,1.104,7.354-1.558l12.556-22.93l-5.054-7.709
                            c-1.121-1.71-3.51-2.001-5.009-0.611L429.419,354.409z"
                                        fill="#c7cfe2" data-original="#c7cfe2"></path>
                                </g>
                                <path style=""
                                    d="M147.822,322.745c-7.057-18.698-12.654-50.841-13.863-67.576
                        c-2.3-31.846-26.299-57.806-58.741-57.806s-56.441,25.961-58.741,57.806c-1.209,16.734-6.806,48.878-13.863,67.576
                        c-1.555,4.122,0.24,8.667,4.299,10.507c7.562,3.427,23.685,10.141,43.13,12.756h50.349c19.354-2.621,35.59-9.339,43.13-12.756
                        C147.582,331.412,149.377,326.867,147.822,322.745z"
                                    fill="#5a4146" data-original="#5a4146" class=""></path>
                                <path style=""
                                    d="M143.523,333.253c4.058-1.84,5.854-6.385,4.298-10.507c-7.056-18.698-12.654-50.841-13.862-67.576
                        c-2.299-31.846-26.299-57.806-58.74-57.806c-0.082,0-0.163,0-0.245,0.001c-24.893,0.101-33.69,34.05-12.261,46.717
                        c1.287,0.761,2.112,1.127,2.112,1.127l18.769,100.8h16.799C119.747,343.386,135.983,336.669,143.523,333.253z"
                                    fill="#694b4b" data-original="#694b4b"></path>
                                <path style=""
                                    d="M134.95,362.588l-26.724-13.361c-5.596-2.798-9.131-8.518-9.13-14.774l0.002-24.775h-49.55v24.776
                        c0,6.256-3.534,11.974-9.13,14.772l-26.724,13.362C5.301,366.784,0,375.362,0,384.745v48.802c0,4.56,3.697,8.258,8.258,8.258
                        h132.129c4.561,0,8.258-3.698,8.258-8.258v-48.801C148.645,375.362,143.343,366.784,134.95,362.588z"
                                    fill="#e6af78" data-original="#e6af78"></path>
                                <path style=""
                                    d="M74.323,342.709c8.892,0,17.409-1.833,25.217-5.096c-0.205-1.041-0.444-2.076-0.444-3.161
                        l0.002-24.775h-49.55v24.776c0,1.091-0.239,2.131-0.446,3.176C56.915,340.875,65.428,342.709,74.323,342.709z"
                                    fill="#d29b6e" data-original="#d29b6e"></path>
                                <path style=""
                                    d="M134.95,362.588l-19.038-9.519c-8.828,13.632-24.139,22.673-41.589,22.673
                        s-32.762-9.041-41.59-22.674l-19.038,9.52C5.302,366.784,0,375.362,0,384.745v48.802c0,4.561,3.697,8.258,8.258,8.258h132.129
                        c4.561,0,8.258-3.697,8.258-8.258v-48.801C148.645,375.362,143.343,366.784,134.95,362.588z"
                                    fill="#d5dced" data-original="#d5dced"></path>
                                <path style=""
                                    d="M74.323,326.193L74.323,326.193c-25.192,0-45.992-18.8-49.137-43.135
                        c-0.456-3.526,1.239-6.983,4.413-8.584c3.802-1.918,9.327-5.152,14.617-9.872c5.891-5.256,9.347-10.799,11.299-14.868
                        c1.681-3.504,5.545-5.486,9.311-4.525c29.076,7.416,48.871,22.543,56.053,28.719c1.928,1.658,3.039,4.103,2.841,6.639
                        C121.719,306.097,100.368,326.193,74.323,326.193z"
                                    fill="#f0c087" data-original="#f0c087"></path>
                                <path style=""
                                    d="M120.878,273.927c-7.181-6.176-26.977-21.303-56.053-28.719c-3.766-0.961-7.63,1.021-9.311,4.525
                        c-1.478,3.082-3.921,7.008-7.546,11.016c-0.001,0.01-0.004,0.018-0.005,0.028c-1.125,1.275-2.323,2.553-3.747,3.825
                        c-5.29,4.721-10.815,7.954-14.617,9.872c-3.174,1.601-4.868,5.059-4.413,8.585c2.825,21.855,19.927,39.251,41.625,42.569
                        c-9.887-6.726-17.262-15.976-17.262-32.466v-11.776c1.876-1.385,3.765-2.766,5.663-4.46c4.59-4.096,8.597-8.833,11.81-13.933
                        c22.243,6.941,37.323,18.502,43.04,23.418c1.565,1.372,5.449,4.952,9.993,9.215c1.955-4.705,3.248-9.753,3.663-15.058
                        C123.917,278.031,122.806,275.586,120.878,273.927z"
                                    fill="#e6af78" data-original="#e6af78"></path>
                                <path style=""
                                    d="M5.034,369.859C1.853,374.081,0,379.26,0,384.745v48.802c0,4.561,3.697,8.258,8.258,8.258h24.774
                        v-41.61c0-5.017-2.281-9.763-6.199-12.897L5.034,369.859z"
                                    fill="#c7cfe2" data-original="#c7cfe2"></path>
                                <path style=""
                                    d="M374.643,351.318l-69.095-25.126L256,342.709l-49.548-16.516l-69.095,25.126
                        c-13.054,4.747-21.744,17.153-21.744,31.043v51.186c0,4.56,3.697,8.258,8.258,8.258h264.258c4.561,0,8.258-3.698,8.258-8.258
                        v-51.186C396.387,368.471,387.698,356.065,374.643,351.318z"
                                    fill="#ff507d" data-original="#ff507d"></path>
                                <polygon style=""
                                    points="247.349,359.226 239.484,441.805 272.516,441.805 264.651,359.226 "
                                    fill="#707487" data-original="#707487"></polygon>
                                <path style=""
                                    d="M264.67,370.571h-17.34c-3.193,0-5.781-2.588-5.781-5.781v-22.081h28.901v22.081
                        C270.451,367.982,267.863,370.571,264.67,370.571z"
                                    fill="#5b5d6e" data-original="#5b5d6e"></path>
                                <path style=""
                                    d="M387.498,359.855c5.576,5.985,8.889,13.956,8.889,22.506v51.186c0,4.561-3.697,8.258-8.258,8.258
                        h-41.29v-27.608c0-8.761,3.48-17.163,9.675-23.357L387.498,359.855z"
                                    fill="#d23c69" data-original="#d23c69"></path>
                                <path style=""
                                    d="M346.839,155.889V86.709c0-9.122-7.395-16.516-16.516-16.516h-99.097
                        c-36.486,0-66.065,29.578-66.065,66.065v19.631c0,8.876,1.431,17.694,4.238,26.114l2.749,8.247c0.842,2.526,1.271,5.171,1.271,7.834
                        v4.238H338.58v-4.238c0-2.663,0.429-5.308,1.271-7.834l2.749-8.247C345.408,173.582,346.839,164.764,346.839,155.889z"
                                    fill="#5a4146" data-original="#5a4146" class=""></path>
                                <path style=""
                                    d="M206.452,103.741c0,18.528,15.02,33.548,33.548,33.548h4.645l2.242,65.032h91.693v-4.238
                        c0-2.663,0.429-5.308,1.271-7.834l2.749-8.247c2.807-8.42,4.238-17.238,4.238-26.114V86.709c0-9.122-7.395-16.516-16.516-16.516H240
                        C221.472,70.193,206.452,85.213,206.452,103.741z"
                                    fill="#694b4b" data-original="#694b4b"></path>
                                <rect x="206.45" y="268.39" style="" width="99.1" height="74.32"
                                    fill="#e6af78" data-original="#e6af78"></rect>
                                <path style=""
                                    d="M206.452,296.31c14.588,8.451,31.477,13.366,49.548,13.366s34.961-4.915,49.548-13.366v-27.924
                        h-99.097L206.452,296.31L206.452,296.31z"
                                    fill="#d29b6e" data-original="#d29b6e"></path>
                                <g>
                                    <path style=""
                                        d="M256,342.709l-26.338,26.338c-3.54,3.54-9.391,3.141-12.417-0.847l-27.309-35.984l7.143-15.053
                            c2.108-4.442,7.606-6.07,11.792-3.49L256,342.709z"
                                        fill="#d23c69" data-original="#d23c69"></path>
                                    <path style=""
                                        d="M256,342.709l26.338,26.338c3.54,3.54,9.391,3.141,12.417-0.847l27.309-35.984l-7.143-15.053
                            c-2.108-4.442-7.606-6.07-11.792-3.49L256,342.709z"
                                        fill="#d23c69" data-original="#d23c69"></path>
                                </g>
                                <path style=""
                                    d="M256,293.161L256,293.161c-45.608,0-82.581-36.973-82.581-82.581v-9.675
                        c0-4.38,1.74-8.581,4.837-11.679l6.841-6.841c3.097-3.097,4.837-7.298,4.837-11.679V150.91c0-3.824,2.568-7.146,6.289-8.025
                        c19.531-4.613,80.308-15.54,121.669,14.88c2.686,1.975,4.171,5.22,4.171,8.554v4.387c0,4.38,1.74,8.581,4.837,11.679l6.841,6.841
                        c3.097,3.097,4.837,7.298,4.837,11.679v9.675C338.581,256.188,301.608,293.161,256,293.161z"
                                    fill="#f0c087" data-original="#f0c087"></path>
                                <path style=""
                                    d="M317.893,157.766c-29.09-21.395-67.731-22.321-94.925-19.392
                        c-11.471,1.235-20.949,3.144-26.743,4.512c-3.721,0.879-6.289,4.201-6.289,8.025v19.795c0,4.381-1.74,8.582-4.838,11.68
                        l-6.841,6.841c-3.098,3.098-4.838,7.299-4.838,11.68v9.674c0,42.224,31.71,76.985,72.602,81.92
                        c-14.249-14.839-23.054-34.948-23.054-57.146v-60.361c0-8.369,6.223-15.363,14.526-16.404c19.818-2.485,56.116-3.979,84.57,12.118
                        v-4.388C322.065,162.986,320.577,159.74,317.893,157.766z"
                                    fill="#e6af78" data-original="#e6af78"></path>
                                <path style=""
                                    d="M124.502,359.855c-5.576,5.985-8.889,13.956-8.889,22.506v51.186c0,4.561,3.697,8.258,8.258,8.258
                        h41.29v-27.608c0-8.761-3.48-17.163-9.675-23.357L124.502,359.855z"
                                    fill="#d23c69" data-original="#d23c69"></path>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="card service-card bg-warning mb-3">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="service-text">
                        <h5>Rp. 1.000.000</h5>
                        <p class="mb-0">Total Pendapatan Tahun Ini</p>
                    </div>
                    <div class="service-img">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="70" height="70" x="0"
                            y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512"
                            xml:space="preserve" class="">
                            <g>
                                <g id="Artboard_23" data-name="Artboard 23">
                                    <path
                                        d="M8.477,62A23,23,0,0,1,37.909,26.962l4.933,4.523A22.993,22.993,0,0,1,45.718,36L44,58.965A23.087,23.087,0,0,1,41.523,62Z"
                                        style="" fill="#2d9739" data-original="#2d9739"></path>
                                    <path
                                        d="M45.718,36a22.993,22.993,0,0,0-2.876-4.515l-4.933-4.524-.087-.059a17.692,17.692,0,0,0-19.63,0A23,23,0,0,0,14.477,62H41.523A23.087,23.087,0,0,0,44,58.965Z"
                                        style="" fill="#44bc59" data-original="#44bc59" class=""></path>
                                    <path
                                        d="M44.473,33.761a23.078,23.078,0,0,0-1.631-2.276l-2.207-2.024A14.871,14.871,0,0,1,37.208,31.2l-4.372,1.49A1.248,1.248,0,0,0,32,33.878v6.87a1.222,1.222,0,0,0,1.86,1.067l4.393-2.746A28.882,28.882,0,0,0,44.473,33.761Z"
                                        style="" fill="#2d9739" data-original="#2d9739"></path>
                                    <rect x="18" y="19" width="14" height="4" rx="2"
                                        style="" fill="#ffc239" data-original="#ffc239"></rect>
                                    <circle cx="25" cy="43" r="12" style="" fill="#abe4a3"
                                        data-original="#abe4a3"></circle>
                                    <path
                                        d="M25,31a11.927,11.927,0,0,0-6.548,1.952,11.991,11.991,0,0,0,16.6,16.6A11.991,11.991,0,0,0,25,31Z"
                                        style="" fill="#cdf8c8" data-original="#cdf8c8"></path>
                                    <path d="M20,19l-2.78-5c-.685-1.662.249-4,1.78-4H31c1.531,0,2.465,2.338,1.78,4L30,19Z"
                                        style="" fill="#2d9739" data-original="#2d9739"></path>
                                    <path
                                        d="M25,42a2,2,0,1,1,2-2h2a4,4,0,0,0-3-3.858V35H24v1.142A3.992,3.992,0,0,0,25,44a2,2,0,1,1-2,2H21a4,4,0,0,0,3,3.858V51h2V49.858A3.992,3.992,0,0,0,25,42Z"
                                        style="" fill="#2d9739" data-original="#2d9739"></path>
                                    <rect x="2" y="61" width="60" height="2" style=""
                                        fill="#ffc239" data-original="#ffc239"></rect>
                                    <rect x="37" y="43" width="4" height="16" style=""
                                        fill="#ffc239" data-original="#ffc239"></rect>
                                    <rect x="44" y="36" width="4" height="23" style=""
                                        fill="#ffc239" data-original="#ffc239"></rect>
                                    <rect x="51" y="29" width="4" height="30" style=""
                                        fill="#ffc239" data-original="#ffc239"></rect>
                                    <path
                                        d="M36.628,40.084a11.99,11.99,0,0,0-4.5-6.724,1.246,1.246,0,0,0-.125.518v6.87a1.222,1.222,0,0,0,1.86,1.067Z"
                                        style="" fill="#abe4a3" data-original="#abe4a3"></path>
                                    <rect x="58" y="23" width="4" height="36" style=""
                                        fill="#ffc239" data-original="#ffc239"></rect>
                                    <rect x="30" y="47" width="4" height="12" style=""
                                        fill="#ffc239" data-original="#ffc239"></rect>
                                    <path
                                        d="M20,19a1.979,1.979,0,0,0-.974.263A2,2,0,0,0,21,21H31a1.979,1.979,0,0,0,.974-.263A2,2,0,0,0,30,19Z"
                                        style="" fill="#ffd55d" data-original="#ffd55d"></path>
                                    <path
                                        d="M32.78,14c.685-1.662-.249-4-1.78-4H20.637A1.49,1.49,0,0,0,19.2,11.981l.008.019,1.481,2.664A4.545,4.545,0,0,0,24.665,17h6.447Z"
                                        style="" fill="#44bc59" data-original="#44bc59" class=""></path>
                                    <path d="M32,47v9a2,2,0,0,0,2,2V47Z" style="" fill="#ffd55d"
                                        data-original="#ffd55d"></path>
                                    <path d="M39,43V56a2,2,0,0,0,2,2V43Z" style="" fill="#ffd55d"
                                        data-original="#ffd55d"></path>
                                    <path d="M46,36V56a2,2,0,0,0,2,2V36Z" style="" fill="#ffd55d"
                                        data-original="#ffd55d"></path>
                                    <path d="M53,29V56a2,2,0,0,0,2,2V29Z" style="" fill="#ffd55d"
                                        data-original="#ffd55d"></path>
                                    <path d="M60,23V56a2,2,0,0,0,2,2V23Z" style="" fill="#ffd55d"
                                        data-original="#ffd55d"></path>
                                    <path
                                        d="M59.505,14.269a1,1,0,0,1-1.236,1.236L53,14h0c-2.52,8.377-7.434,16.522-14.747,21.092L33.86,37.838A1.222,1.222,0,0,1,32,36.771V29.9a1.248,1.248,0,0,1,.836-1.186l4.372-1.49C43.058,25.231,48.791,19.184,50,13l-4.459-2.229a1,1,0,0,1-.107-1.727L54.859,2.76a1,1,0,0,1,1.516.557Z"
                                        style="" fill="#f3a606" data-original="#f3a606"></path>
                                    <path
                                        d="M33.86,35.246,38.253,32.5c6.793-4.245,11.516-11.576,14.174-19.312a1.986,1.986,0,0,1,2.429-1.25l3.413.975a.982.982,0,0,0,.814-.124L56.375,3.317a1,1,0,0,0-1.516-.557L45.434,9.044a1,1,0,0,0,.107,1.727L50,13c-1.209,6.184-6.942,12.231-12.792,14.225l-4.372,1.49A1.248,1.248,0,0,0,32,29.9V34.18A1.222,1.222,0,0,0,33.86,35.246Z"
                                        style="" fill="#ffc239" data-original="#ffc239"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="card service-card bg-success mb-3">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="service-text">
                        <h5>300 m3</h5>
                        <p class="mb-0">Total Pemakaian Air</p>
                    </div>
                    <div class="service-img">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="70" height="70" x="0"
                            y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                            xml:space="preserve" class="">
                            <g>
                                <path
                                    d="m465.465 371.42a36.489 36.489 0 0 0 -42.238-18.9l-83.119 22.693a95.92 95.92 0 0 1 -16.165 2.951c7.762-8.388 15.6-19.927 15.851-36.616a21.338 21.338 0 0 0 -21.335-21.642h-.05l-119.464.273a117.073 117.073 0 0 0 -37.749 6.334l-57.986 19.875-33.87 13v95.967l34.753 8.645 83.3 18.528a117.561 117.561 0 0 0 25.447 2.795h71.293a118.026 118.026 0 0 0 49.62-11.015l114.514-53.48a36.525 36.525 0 0 0 17.2-49.414z"
                                    fill="#ffd18d" data-original="#ffd18d"></path>
                                <path
                                    d="m261.7 384.7c16.4 0 45.126 4.565 62.243-6.533 7.762-8.387 15.6-19.927 15.851-36.616a1.123 1.123 0 0 1 -.008-.219c-4.258 19.828-47.277 39.382-78.086 43.368z"
                                    fill="#965930" opacity=".25" data-original="#965930"></path>
                                <path
                                    d="m458.355 381.788-117.563 54.9a121.168 121.168 0 0 1 -50.941 11.312h-73.191a120.694 120.694 0 0 1 -26.124-2.869l-85.517-19.021-35.678-8.875v38.127l34.753 8.645 83.3 18.528a117.565 117.565 0 0 0 25.447 2.795h71.293a118.025 118.025 0 0 0 49.621-11.015l114.514-53.48a36.519 36.519 0 0 0 19.072-44.935 37.627 37.627 0 0 1 -8.986 5.888z"
                                    fill="#965930" opacity=".25" data-original="#965930"></path>
                                <path
                                    d="m64.416 319.888h31.184a21.74 21.74 0 0 1 21.74 21.74v127.3a21.741 21.741 0 0 1 -21.74 21.739h-31.184a21.741 21.741 0 0 1 -21.741-21.741v-127.3a21.741 21.741 0 0 1 21.741-21.738z"
                                    fill="#2ecc71" data-original="#2ecc71"></path>
                                <path
                                    d="m42.675 426.667v42.259a21.765 21.765 0 0 0 21.74 21.741h31.185a21.764 21.764 0 0 0 21.739-21.741v-42.259z"
                                    fill="#105e30" opacity=".25" data-original="#105e30"></path>
                                <path
                                    d="m330.781 158.825h.028l-.138-.191c-2.542-4.4-74.671-137.3-74.671-137.3s-72.129 132.9-74.671 137.3l-.138.191h.028a86.206 86.206 0 1 0 149.562 0z"
                                    fill="#3498db" stroke="#3498db" stroke-miterlimit="10" stroke-width="10.667"
                                    data-original="#3498db" class=""></path>
                                <path
                                    d="m294.545 246.25a100.5 100.5 0 0 1 -99.795-112.179c-7.479 13.74-12.766 23.428-13.422 24.564l-.138.191h.028a86.218 86.218 0 1 0 152.939 79.3 100.07 100.07 0 0 1 -39.612 8.124z"
                                    fill="#2980b9" data-original="#2980b9" class=""></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card bg-danger mb-3 bg-img" style="background-image: url('img/core-img/1.png')">
        <div class="card-body direction-rtl p-3">
        <h5 class="text-white">Login Untuk Memulai Sesi</h5>
        <p class="mb-4 text-white">Already designed more than 100+ pages for your needs. Such as - Authentication, Chats, eCommerce, Blog &amp; Miscellaneous pages.</p><a class="btn btn-warning" href="pages.html">All pages</a>
        </div>
    </div> --}}

        {{-- <a class="affan-page-item" href="{{ route('catat-tagihan') }}"> --}}
        {{-- <div class="icon-wrapper"><i class="bi bi-pencil"></i></div>Login Untuk Memulai Sesi</a> --}}

    </div>
@endsection

@section('additionalCSS')

@endsection
@section('additionalJS')

@endsection