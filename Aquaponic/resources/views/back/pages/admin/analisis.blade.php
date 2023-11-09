@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Analysis')
@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Analysis</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Analysis
                    </li>
                </ol>
            </nav>
        </div>

    </div>
</div>

<div class="bg-white pd-20 card-box mb-30">
    <div id="chart1" data-highcharts-chart="0">
        <div id="highcharts-10tc24j-0" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 317px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
        <svg version="1.1" class="highcharts-root" xmlns="http://www.w3.org/2000/svg" width="317" height="400" viewBox="0 0 317 400">
                <desc>Created with Highcharts 6.0.7</desc>
                <defs>
                    <clipPath id="highcharts-10tc24j-1">
                        <rect x="0" y="0" width="231" height="213" fill="none"></rect>
                    </clipPath>
                </defs>
                <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="317" height="400" rx="0" ry="0"></rect>
                <rect fill="none" class="highcharts-plot-background" x="76" y="82" width="231" height="213"></rect>
                <g class="highcharts-pane-group"></g>
                <g class="highcharts-grid highcharts-xaxis-grid ">
                    <path fill="none" class="highcharts-grid-line" d="M 77.5 82 L 77.5 295" opacity="1"></path>
                    <path fill="none" class="highcharts-grid-line" d="M 142.5 82 L 142.5 295" opacity="1"></path>
                    <path fill="none" class="highcharts-grid-line" d="M 207.5 82 L 207.5 295" opacity="1"></path>
                    <path fill="none" class="highcharts-grid-line" d="M 271.5 82 L 271.5 295" opacity="1"></path>
                </g>
                <g class="highcharts-grid highcharts-yaxis-grid ">
                    <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 76 295.5 L 307 295.5" opacity="1"></path>
                    <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 76 242.5 L 307 242.5" opacity="1"></path>
                    <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 76 189.5 L 307 189.5" opacity="1"></path>
                    <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 76 135.5 L 307 135.5" opacity="1"></path>
                    <path fill="none" stroke="#e6e6e6" stroke-width="1" class="highcharts-grid-line" d="M 76 81.5 L 307 81.5" opacity="1"></path>
                </g>
                <rect fill="none" class="highcharts-plot-border" x="76" y="82" width="231" height="213"></rect>
                <g class="highcharts-axis highcharts-xaxis ">
                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 77.5 295 L 77.5 305" opacity="1"></path>
                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 142.5 295 L 142.5 305" opacity="1"></path>
                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 207.5 295 L 207.5 305" opacity="1"></path>
                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 271.5 295 L 271.5 305" opacity="1"></path>
                    <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" d="M 76 295.5 L 307 295.5"></path>
                </g>
                <g class="highcharts-axis highcharts-yaxis "><text x="25.140625" text-anchor="middle" transform="translate(0,0) rotate(270 25.140625 188.5)" class="highcharts-axis-title" style="color:#666666;fill:#666666;" y="188.5">
                        <tspan>Number of Employees</tspan>
                    </text>
                    <path fill="none" class="highcharts-axis-line" d="M 76 82 L 76 295"></path>
                </g>
                <g class="highcharts-series-group">
                    <g class="highcharts-series highcharts-series-0 highcharts-spline-series highcharts-color-0 " transform="translate(76,82) scale(1 1)" clip-path="url(#highcharts-10tc24j-1)">
                        <path fill="none" d="M 2.2647058823509 166.21029 C 2.2647058823509 166.21029 21.676470588233563 159.905064 34.617647058822 157.084305 C 47.5588235294104 154.26354600000002 54.02941176470459 155.76050999999998 66.970588235293 152.106495 C 79.91176470588138 148.45248 86.3823529411756 147.30313199999938 99.323529411764 138.81423 C 112.26470588235438 130.32532799999936 118.7352941176496 120.370134000001 131.67647058824 109.661985 C 144.617647058828 98.95383600000099 151.088235294122 93.81521100000002 164.02941176471 85.27348500000001 C 176.970588235298 76.73175900000001 183.44117647059198 74.24732700000001 196.38235294118 66.95335500000002 C 209.323529411768 59.65938300000002 228.73529411765 48.80362500000001 228.73529411765 48.80362500000001" class="highcharts-graph" stroke="#7cb5ec" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                        <path fill="none" d="M -7.7352941176491 166.21029 L 2.2647058823509 166.21029 C 2.2647058823509 166.21029 21.676470588233563 159.905064 34.617647058822 157.084305 C 47.5588235294104 154.26354600000002 54.02941176470459 155.76050999999998 66.970588235293 152.106495 C 79.91176470588138 148.45248 86.3823529411756 147.30313199999938 99.323529411764 138.81423 C 112.26470588235438 130.32532799999936 118.7352941176496 120.370134000001 131.67647058824 109.661985 C 144.617647058828 98.95383600000099 151.088235294122 93.81521100000002 164.02941176471 85.27348500000001 C 176.970588235298 76.73175900000001 183.44117647059198 74.24732700000001 196.38235294118 66.95335500000002 C 209.323529411768 59.65938300000002 228.73529411765 48.80362500000001 228.73529411765 48.80362500000001 L 238.73529411765 48.80362500000001" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" class="highcharts-tracker"></path>
                    </g>
                    <g class="highcharts-markers highcharts-series-0 highcharts-spline-series highcharts-color-0  highcharts-tracker" transform="translate(76,82) scale(1 1)">
                        <path fill="#7cb5ec" visibility="hidden" d="M 436 135.91908 A 0 0 0 1 1 436 135.91908 Z" class="highcharts-halo highcharts-color-0" fill-opacity="0.25"></path>
                        <path fill="#7cb5ec" d="M 442 135.91908 A 6 6 0 1 1 441.99999700000023 135.913080001 Z" stroke="#ffffff" stroke-width="1" visibility="hidden"></path>
                    </g>
                    <g class="highcharts-series highcharts-series-1 highcharts-spline-series highcharts-color-1 " transform="translate(76,82) scale(1 1)" clip-path="url(#highcharts-10tc24j-1)">
                        <path fill="none" d="M 2.2647058823509 186.46446 C 2.2647058823509 186.46446 21.676470588233563 187.37184 34.617647058822 187.37184 C 47.5588235294104 187.37184 54.02941176470459 181.440855 66.970588235293 181.32477 C 79.91176470588138 181.208685 86.3823529411756 181.32477 99.323529411764 181.208685 C 112.26470588235438 181.0926 118.7352941176496 178.39815 131.67647058824 178.39815 C 144.617647058828 178.39815 151.088235294122 180.74967 164.02941176471 180.74967 C 176.970588235298 180.74967 183.44117647059198 174.56351100000003 196.38235294118 172.401135 C 209.323529411768 170.23875900000002 228.73529411765 169.93779 228.73529411765 169.93779" class="highcharts-graph" stroke="#434348" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                        <path fill="none" d="M -7.7352941176491 186.46446 L 2.2647058823509 186.46446 C 2.2647058823509 186.46446 21.676470588233563 187.37184 34.617647058822 187.37184 C 47.5588235294104 187.37184 54.02941176470459 181.440855 66.970588235293 181.32477 C 79.91176470588138 181.208685 86.3823529411756 181.32477 99.323529411764 181.208685 C 112.26470588235438 181.0926 118.7352941176496 178.39815 131.67647058824 178.39815 C 144.617647058828 178.39815 151.088235294122 180.74967 164.02941176471 180.74967 C 176.970588235298 180.74967 183.44117647059198 174.56351100000003 196.38235294118 172.401135 C 209.323529411768 170.23875900000002 228.73529411765 169.93779 228.73529411765 169.93779 L 238.73529411765 169.93779" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" class="highcharts-tracker"></path>
                    </g>
                    <g class="highcharts-markers highcharts-series-1 highcharts-spline-series highcharts-color-1  highcharts-tracker" transform="translate(76,82) scale(1 1)">
                        <path fill="#434348" visibility="hidden" d="M 436 221.1132 A 0 0 0 1 1 436 221.1132 Z" class="highcharts-halo highcharts-color-1" fill-opacity="0.25"></path>
                        <path fill="#434348" d="M 436 215.1132 L 442 221.1132 436 227.1132 430 221.1132 Z" stroke="#ffffff" stroke-width="1" visibility="hidden"></path>
                    </g>
                    <g class="highcharts-series highcharts-series-2 highcharts-spline-series highcharts-color-2 " transform="translate(76,82) scale(1 1)" clip-path="url(#highcharts-10tc24j-1)">
                        <path fill="none" d="M 2.2647058823509 200.49264 C 2.2647058823509 200.49264 21.676470588233563 194.12607 34.617647058822 194.12607 C 47.5588235294104 194.12607 54.02941176470459 195.954675 66.970588235293 195.954675 C 79.91176470588138 195.954675 86.3823529411756 192.384795 99.323529411764 191.943885 C 112.26470588235438 191.502975 118.7352941176496 191.943885 131.67647058824 191.502975 C 144.617647058828 191.062065 151.088235294122 189.586401 164.02941176471 187.038495 C 176.970588235298 184.490589 183.44117647059198 181.960575 196.38235294118 178.763445 C 209.323529411768 175.56631499999997 228.73529411765 171.052845 228.73529411765 171.052845" class="highcharts-graph" stroke="#90ed7d" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                        <path fill="none" d="M -7.7352941176491 200.49264 L 2.2647058823509 200.49264 C 2.2647058823509 200.49264 21.676470588233563 194.12607 34.617647058822 194.12607 C 47.5588235294104 194.12607 54.02941176470459 195.954675 66.970588235293 195.954675 C 79.91176470588138 195.954675 86.3823529411756 192.384795 99.323529411764 191.943885 C 112.26470588235438 191.502975 118.7352941176496 191.943885 131.67647058824 191.502975 C 144.617647058828 191.062065 151.088235294122 189.586401 164.02941176471 187.038495 C 176.970588235298 184.490589 183.44117647059198 181.960575 196.38235294118 178.763445 C 209.323529411768 175.56631499999997 228.73529411765 171.052845 228.73529411765 171.052845 L 238.73529411765 171.052845" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" class="highcharts-tracker"></path>
                    </g>
                    <g class="highcharts-markers highcharts-series-2 highcharts-spline-series highcharts-color-2  highcharts-tracker" transform="translate(76,82) scale(1 1)">
                        <path fill="#90ed7d" visibility="hidden" d="M 436 237.3558 A 0 0 0 1 1 436 237.3558 Z" class="highcharts-halo highcharts-color-2" fill-opacity="0.25"></path>
                        <path fill="#90ed7d" d="M 430 231.3558 L 442 231.3558 442 243.3558 430 243.3558 Z" stroke="#ffffff" stroke-width="1" visibility="hidden"></path>
                    </g>
                    <g class="highcharts-series highcharts-series-3 highcharts-spline-series highcharts-color-3 " transform="translate(76,82) scale(1 1)" clip-path="url(#highcharts-10tc24j-1)">
                        <path fill="none" d="M 66.970588235293 204.49278 C 66.970588235293 204.49278 86.3823529411756 201.55742699999988 99.323529411764 200.040015 C 112.26470588235438 198.5226029999999 118.7352941176496 199.0959990000002 131.67647058824 196.90572 C 144.617647058828 194.71544100000023 151.088235294122 193.19696399999998 164.02941176471 189.08862 C 176.970588235298 184.980276 183.44117647059198 176.364 196.38235294118 176.364 C 209.323529411768 176.364 228.73529411765 176.548245 228.73529411765 176.548245" class="highcharts-graph" stroke="#f7a35c" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                        <path fill="none" d="M 56.97058823529299 204.49278 L 66.970588235293 204.49278 C 66.970588235293 204.49278 86.3823529411756 201.55742699999988 99.323529411764 200.040015 C 112.26470588235438 198.5226029999999 118.7352941176496 199.0959990000002 131.67647058824 196.90572 C 144.617647058828 194.71544100000023 151.088235294122 193.19696399999998 164.02941176471 189.08862 C 176.970588235298 184.980276 183.44117647059198 176.364 196.38235294118 176.364 C 209.323529411768 176.364 228.73529411765 176.548245 228.73529411765 176.548245 L 238.73529411765 176.548245" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" class="highcharts-tracker"></path>
                    </g>
                    <g class="highcharts-markers highcharts-series-3 highcharts-spline-series highcharts-color-3  highcharts-tracker" transform="translate(76,82) scale(1 1)">
                        <path fill="#f7a35c" visibility="hidden" d="M 436 244.05216000000001 A 0 0 0 1 1 436 244.05216000000001 Z" class="highcharts-halo highcharts-color-3" fill-opacity="0.25"></path>
                        <path fill="#f7a35c" d="M 436 238.05216000000001 L 442 250.05216000000001 430 250.05216000000001 Z" stroke="#ffffff" stroke-width="1" visibility="hidden"></path>
                    </g>
                    <g class="highcharts-series highcharts-series-4 highcharts-spline-series highcharts-color-4 " transform="translate(76,82) scale(1 1)" clip-path="url(#highcharts-10tc24j-1)">
                        <path fill="none" d="M 2.2647058823509 199.25298 C 2.2647058823509 199.25298 21.676470588233563 206.66538 34.617647058822 206.66538 C 47.5588235294104 206.66538 54.02941176470459 205.49707500000002 66.970588235293 204.368175 C 79.91176470588138 203.23927500000002 86.3823529411756 201.02088 99.323529411764 201.02088 C 112.26470588235438 201.02088 118.7352941176496 203.426715 131.67647058824 203.426715 C 144.617647058828 203.426715 151.088235294122 202.39366500000003 164.02941176471 200.41596 C 176.970588235298 198.43825500000003 183.44117647059198 193.53819 196.38235294118 193.53819 C 209.323529411768 193.53819 228.73529411765 193.711785 228.73529411765 193.711785" class="highcharts-graph" stroke="#8085e9" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                        <path fill="none" d="M -7.7352941176491 199.25298 L 2.2647058823509 199.25298 C 2.2647058823509 199.25298 21.676470588233563 206.66538 34.617647058822 206.66538 C 47.5588235294104 206.66538 54.02941176470459 205.49707500000002 66.970588235293 204.368175 C 79.91176470588138 203.23927500000002 86.3823529411756 201.02088 99.323529411764 201.02088 C 112.26470588235438 201.02088 118.7352941176496 203.426715 131.67647058824 203.426715 C 144.617647058828 203.426715 151.088235294122 202.39366500000003 164.02941176471 200.41596 C 176.970588235298 198.43825500000003 183.44117647059198 193.53819 196.38235294118 193.53819 C 209.323529411768 193.53819 228.73529411765 193.711785 228.73529411765 193.711785 L 238.73529411765 193.711785" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" class="highcharts-tracker"></path>
                    </g>
                    <g class="highcharts-markers highcharts-series-4 highcharts-spline-series highcharts-color-4  highcharts-tracker" transform="translate(76,82) scale(1 1)">
                        <path fill="#8085e9" visibility="hidden" d="M 543 248.40288 A 0 0 0 1 1 543 248.40288 Z" class="highcharts-halo highcharts-color-4" fill-opacity="0.25"></path>
                        <path fill="#8085e9" d="M 537 242.40288 L 549 242.40288 543 254.40288 Z" stroke="#ffffff" stroke-width="1" visibility="hidden"></path>
                    </g>
                </g><text x="159" text-anchor="middle" class="highcharts-title" style="color:#333333;font-size:18px;fill:#333333;" y="24">
                    <tspan>Solar Employment Growth by</tspan>
                    <tspan dy="21" x="159">Sector, 2010-2016</tspan>
                    <title>Solar Employment Growth by Sector, 2010-2016</title>
                </text><text x="159" text-anchor="middle" class="highcharts-subtitle" style="color:#666666;fill:#666666;" y="66">
                    <tspan>Source: thesolarfoundation.com</tspan>
                </text>
                <g class="highcharts-legend" transform="translate(41,329)">
                    <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="235" height="56" visibility="visible"></rect>
                    <g>
                        <g>
                            <g class="highcharts-legend-item highcharts-spline-series highcharts-color-0 highcharts-series-0" transform="translate(8,3)">
                                <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#7cb5ec" stroke-width="2"></path><text x="21" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" y="15">
                                    <tspan>Installation</tspan>
                                </text>
                            </g>
                            <g class="highcharts-legend-item highcharts-spline-series highcharts-color-1 highcharts-series-1" transform="translate(114.97575378417969,3)">
                                <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#434348" stroke-width="2"></path><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start">
                                    <tspan>Manufacturing</tspan>
                                </text>
                            </g>
                            <g class="highcharts-legend-item highcharts-spline-series highcharts-color-2 highcharts-series-2" transform="translate(8,18)">
                                <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#90ed7d" stroke-width="2"></path><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start">
                                    <tspan>Sales &amp; Distribution</tspan>
                                </text>
                            </g>
                            <g class="highcharts-legend-item highcharts-spline-series highcharts-color-3 highcharts-series-3" transform="translate(8,33)">
                                <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#f7a35c" stroke-width="2"></path><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start">
                                    <tspan>Project Development</tspan>
                                </text>
                            </g>
                            <g class="highcharts-legend-item highcharts-spline-series highcharts-color-4 highcharts-series-4" transform="translate(172.15728759765625,33)">
                                <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#8085e9" stroke-width="2"></path><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start">
                                    <tspan>Other</tspan>
                                </text>
                            </g>
                        </g>
                    </g>
                </g>
                <g class="highcharts-axis-labels highcharts-xaxis-labels "><text x="78.264705882351" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="314" opacity="1">2010</text><text x="142.97058823529" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="314" opacity="1">2012</text><text x="207.67647058824" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="314" opacity="1">2014</text><text x="272.38235294118" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="314" opacity="1">2016</text></g>
                <g class="highcharts-axis-labels highcharts-yaxis-labels "><text x="61" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="299" opacity="1">0</text><text x="61" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="246" opacity="1">50k</text><text x="61" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="193" opacity="1">100k</text><text x="61" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="139" opacity="1">150k</text><text x="61" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="86" opacity="1">200k</text></g><text x="307" class="highcharts-credits" text-anchor="end" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="395">Highcharts.com</text>
                <g class="highcharts-label highcharts-tooltip highcharts-color-0" style="cursor:default;pointer-events:none;white-space:nowrap;" transform="translate(446,-9999)" opacity="0" visibility="visible">
                    <path fill="none" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 131.5 0.5 C 134.5 0.5 134.5 0.5 134.5 3.5 L 134.5 41.5 C 134.5 44.5 134.5 44.5 131.5 44.5 L 72.5 44.5 66.5 50.5 60.5 44.5 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path>
                    <path fill="none" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 131.5 0.5 C 134.5 0.5 134.5 0.5 134.5 3.5 L 134.5 41.5 C 134.5 44.5 134.5 44.5 131.5 44.5 L 72.5 44.5 66.5 50.5 60.5 44.5 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path>
                    <path fill="none" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 131.5 0.5 C 134.5 0.5 134.5 0.5 134.5 3.5 L 134.5 41.5 C 134.5 44.5 134.5 44.5 131.5 44.5 L 72.5 44.5 66.5 50.5 60.5 44.5 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path>
                    <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 131.5 0.5 C 134.5 0.5 134.5 0.5 134.5 3.5 L 134.5 41.5 C 134.5 44.5 134.5 44.5 131.5 44.5 L 72.5 44.5 66.5 50.5 60.5 44.5 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#7cb5ec" stroke-width="1"></path><text x="8" style="font-size:12px;color:#333333;fill:#333333;" y="20">
                        <tspan style="font-size: 10px">2014</tspan>
                        <tspan style="fill:#7cb5ec" x="8" dy="15">●</tspan>
                        <tspan dx="0"> Installation: </tspan>
                        <tspan style="font-weight:bold" dx="0">97 031</tspan>
                    </text>
                </g>
            </svg></div>
    </div>
</div>

@endsection
