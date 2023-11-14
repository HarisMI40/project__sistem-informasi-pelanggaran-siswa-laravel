<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">

                        <div>
                            <h4 class="mb-1 mt-1">{{ \Str::limit('Reza Khoirul Wijaya Putra', 20, ' ...') }}</h4>
                            <p class="text-muted mb-0">(Siswa terakhir yang melanggar)</p>
                        </div>
                        <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                                    class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                        </p>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end mt-2">
                            <div id="orders-chart" data-colors="[&quot;--bs-success&quot;]" style="min-height: 46px;">
                            </div>
                        </div>
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">5,643</span></h4>
                            <p class="text-muted mb-0">Siswa Melanggar Hari Ini</p>
                        </div>
                        <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                                    class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                        </p>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end mt-2">
                            <div id="customers-chart" data-colors="[&quot;--bs-primary&quot;]"
                                style="min-height: 46px;">
                            </div>
                        </div>
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">45,254</span></h4>
                            <p class="text-muted mb-0">Rata Rata Point Siswa / Hari</p>
                        </div>
                        <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                                    class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week
                        </p>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">

                <div class="card">
                    <div class="card-body">
                        <div class="float-end mt-2">
                            <div id="growth-chart" data-colors="[&quot;--bs-warning&quot;]" style="min-height: 40px;">

                            </div>
                        </div>
                        <div>
                            <h4 class="mb-1 mt-1">+ <span data-plugin="counterup">12.58</span>%</h4>
                            <p class="text-muted mb-0">Perkembangan Siswa</p>
                        </div>
                        <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                                    class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                        </p>
                    </div>
                </div>
            </div> <!-- end col-->
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i
                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Yearly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                </div>
                            </div>
                        </div>

                        <h4 class="card-title mb-4">Siswa Teratas</h4>


                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i
                                        class="mdi mdi-circle-medium text-primary me-2"></i>
                                    Abdulloh
                                </p>
                            </div>

                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-primary" role="progressbar"
                                        aria-valuenow="52" aria-valuemin="0" aria-valuemax="52" style="width: 10%">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-info me-2"></i>
                                    iPhones
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-info" role="progressbar" style="width: 45%"
                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="45">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i
                                        class="mdi mdi-circle-medium text-success me-2"></i>
                                    Android
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-success" role="progressbar"
                                        style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="48">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i
                                        class="mdi mdi-circle-medium text-warning me-2"></i>
                                    Tablets
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-warning" role="progressbar"
                                        style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i
                                        class="mdi mdi-circle-medium text-purple me-2"></i>
                                    Cables
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-purple" role="progressbar"
                                        style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="63">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                    </div> <!-- end card-body-->
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i
                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Yearly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                </div>
                            </div>
                        </div>

                        <h4 class="card-title mb-4">Kelas Teratas</h4>


                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i
                                        class="mdi mdi-circle-medium text-primary me-2"></i>
                                    Abdulloh
                                </p>
                            </div>

                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-primary" role="progressbar"
                                        aria-valuenow="52" aria-valuemin="0" aria-valuemax="52" style="width: 10%">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i
                                        class="mdi mdi-circle-medium text-info me-2"></i>
                                    iPhones
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-info" role="progressbar"
                                        style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i
                                        class="mdi mdi-circle-medium text-success me-2"></i>
                                    Android
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-success" role="progressbar"
                                        style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="48">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i
                                        class="mdi mdi-circle-medium text-warning me-2"></i>
                                    Tablets
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-warning" role="progressbar"
                                        style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i
                                        class="mdi mdi-circle-medium text-purple me-2"></i>
                                    Cables
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-purple" role="progressbar"
                                        style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="63">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                    </div> <!-- end card-body-->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton5"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton5">
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Yearly</a>
                                <a class="dropdown-item" href="#">Weekly</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Pelanggaran</h4>

                    <div class="mt-1">
                        <ul class="list-inline main-chart mb-0">
                            {{-- <li class="list-inline-item chart-border-left me-0 border-0">
                                <h3 class="text-primary">$<span data-plugin="counterup">2,371</span><span
                                        class="text-muted d-inline-block font-size-15 ms-3">Income</span></h3>
                            </li> --}}
                            <li class="list-inline-item chart-border-left me-0">
                                <h3><span data-plugin="counterup">258</span><span
                                        class="text-muted d-inline-block font-size-15 ms-3">Siswa telah melanggar
                                        20 peraturan pada tanggal 20 Juni 2023</span>
                                </h3>
                            </li>
                            {{-- <li class="list-inline-item chart-border-left me-0">
                                <h3><span data-plugin="counterup">3.6</span>%<span
                                        class="text-muted d-inline-block font-size-15 ms-3">Conversation Ratio</span>
                                </h3>
                            </li> --}}
                        </ul>
                    </div>

                    <div class="mt-3">
                        <div id="sales-analytics-chart"
                            data-colors="[&quot;--bs-primary&quot;, &quot;#dfe2e6&quot;, &quot;--bs-warning&quot;]"
                            class="apex-charts" dir="ltr" style="min-height: 358px;">
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div>
        </div>
        <script>
            function getChartColorsArray(chartId) {
                if (null !== document.getElementById(chartId)) {
                    var colorsAttribute = document.getElementById(chartId).getAttribute("data-colors");
                    if (colorsAttribute) {
                        return JSON.parse(colorsAttribute).map(function(color) {
                            var cleanedColor = color.replace(" ", "");
                            if (-1 === cleanedColor.indexOf(",")) {
                                var computedColor = getComputedStyle(document.documentElement).getPropertyValue(
                                    cleanedColor);
                                return computedColor || cleanedColor;
                            }
                            var colorComponents = cleanedColor.split(",");
                            return 2 != colorComponents.length ? cleanedColor : "rgba(" + getComputedStyle(document
                                    .documentElement).getPropertyValue(colorComponents[0]) + "," + colorComponents[1] +
                                ")";
                        });
                    }
                }
            }

            var options1, chart1;
            var BarchartTotalReveueColors = getChartColorsArray("total-revenue-chart");
            if (BarchartTotalReveueColors) {
                options1 = {
                    series: [{
                        data: [25, 66, 41, 89, 63, 25, 44, 20, 36, 40, 54]
                    }],
                    fill: {
                        colors: BarchartTotalReveueColors
                    },
                    chart: {
                        type: "bar",
                        width: 70,
                        height: 40,
                        sparkline: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            columnWidth: "50%"
                        }
                    },
                    labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
                    xaxis: {
                        crosshairs: {
                            width: 1
                        }
                    },
                    tooltip: {
                        fixed: {
                            enabled: false
                        },
                        x: {
                            show: false
                        },
                        y: {
                            title: {
                                formatter: function(val) {
                                    return "";
                                }
                            }
                        },
                        marker: {
                            show: false
                        }
                    }
                };
                chart1 = new ApexCharts(document.querySelector("#total-revenue-chart"), options1);
                chart1.render();
            }

            var options, chart;
            var RadialchartOrdersChartColors = getChartColorsArray("orders-chart");
            if (RadialchartOrdersChartColors) {
                options = {
                    fill: {
                        colors: RadialchartOrdersChartColors
                    },
                    series: [70],
                    chart: {
                        type: "radialBar",
                        width: 45,
                        height: 45,
                        sparkline: {
                            enabled: true
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    plotOptions: {
                        radialBar: {
                            hollow: {
                                margin: 0,
                                size: "60%"
                            },
                            track: {
                                margin: 0
                            },
                            dataLabels: {
                                show: false
                            }
                        }
                    }
                };
                chart = new ApexCharts(document.querySelector("#orders-chart"), options);
                chart.render();
            }

            var options2, chart2;
            var BarchartGrowthColors = getChartColorsArray("growth-chart");
            if (BarchartGrowthColors) {
                options2 = {
                    series: [{
                        data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
                    }],
                    fill: {
                        colors: BarchartGrowthColors
                    },
                    chart: {
                        type: "bar",
                        width: 70,
                        height: 40,
                        sparkline: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            columnWidth: "50%"
                        }
                    },
                    labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
                    xaxis: {
                        crosshairs: {
                            width: 1
                        }
                    },
                    tooltip: {
                        fixed: {
                            enabled: false
                        },
                        x: {
                            show: false
                        },
                        y: {
                            title: {
                                formatter: function(val) {
                                    return "";
                                }
                            }
                        },
                        marker: {
                            show: false
                        }
                    }
                };
                chart2 = new ApexCharts(document.querySelector("#growth-chart"), options2);
                chart2.render();
            }

            var options, chart;
            var LinechartsalesColors = getChartColorsArray("sales-analytics-chart");
            if (LinechartsalesColors) {
                options = {
                    chart: {
                        height: 343,
                        type: "line",
                        stacked: false,
                        toolbar: {
                            show: false
                        }
                    },
                    stroke: {
                        width: [0, 2, 4],
                        curve: "smooth"
                    },
                    plotOptions: {
                        bar: {
                            columnWidth: "30%"
                        }
                    },
                    colors: LinechartsalesColors,
                    series: [{
                            name: "Tawuran",
                            type: "column",
                            data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
                        },
                        {
                            name: "Merusak Fasilitas Sekolah",
                            type: "area",
                            data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
                        },
                        {
                            name: "Bolos Sekolah",
                            type: "line",
                            data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
                        }
                    ],
                    fill: {
                        opacity: [.85, .25, 1],
                        gradient: {
                            inverseColors: false,
                            shade: "light",
                            type: "vertical",
                            opacityFrom: .85,
                            opacityTo: .55,
                            stops: [0, 100, 100, 100]
                        }
                    },
                    labels: ["01/01/2003", "02/01/2003", "03/01/2003", "04/01/2003", "05/01/2003", "06/01/2003",
                        "07/01/2003", "08/01/2003", "09/01/2003", "10/01/2003", "11/01/2003"
                    ],
                    markers: {
                        size: 0
                    },
                    xaxis: {
                        type: "datetime"
                    },
                    yaxis: {
                        title: {
                            text: "Points"
                        }
                    },
                    tooltip: {
                        shared: true,
                        intersect: false,
                        y: {
                            formatter: function(val) {
                                return undefined !== val ? val.toFixed(0) + " points" : val;
                            }
                        }
                    },
                    grid: {
                        borderColor: "#f1f1f1"
                    }
                };
                chart = new ApexCharts(document.querySelector("#sales-analytics-chart"), options);
                chart.render();
            }
            ``
        </script>
    </div>