@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<table>
<tr>
<th><div id="container" style="height: 400px; width: 400px"></th><br>
<th><div id="container2" style="height: 400px; width: 400px"></th><br>
</tr>
<tr>
<td><div id="container3" style="height: 400px; width: 400px"></div><br></td>
</tr>
</table>
@stop

 @section('js')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    // Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Apkah Dosen Menguasai Materi Dan Menyanpaikan Dengan Baik'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Sangat Tidak Setuju',
            y: 10
        }, {
            name: 'Tidak Setuju',
            y: 10.85
        }, {
            name: 'Agak Setuju',
            y: 4.67
        },{
            name: 'Setuju',
            y: 4.67
        },
        {
            name: 'Sangat Setuju',
            y: 4.18,
            sliced: true,
            selected: true
        }]
    }]
});
</script>

<script>
    // Build the chart
    Highcharts.chart('container2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Perkuliahaan dimulai dan diakhiri tepat waktu '
    },
    subtitle: {
        text: ''
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Modul Evaluasi Dosen'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: "Browsers",
            colorByPoint: true,
            data: [
                {
                    name: "Sangat Tidak Setuju",
                    y: 62.74,
                    drilldown: "Sangat Tidak Setuju"
                },
                {
                    name: "Tidak Setuju",
                    y: 10.57,
                    drilldown: "Tidak Setuju"
                },
                // {
                //     name: "Internet Explorer",
                //     y: 7.23,
                //     drilldown: "Internet Explorer"
                // },
                {
                    name: "Agak Setuju",
                    y: 5.58,
                    drilldown: "Agak Setuju"
                },
                {
                    name: "Setuju",
                    y: 4.02,
                    drilldown: "Setuju"
                },
                {
                    name: "Sangat Setuju",
                    y: 1.92,
                    drilldown: "Sangat Setuju"
                }
            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: "Chrome",
                id: "Chrome",
                data: [
                    [
                        "v65.0",
                        0.1
                    ],
                    [
                        "v64.0",
                        1.3
                    ],
                    [
                        "v63.0",
                        53.02
                    ],
                    [
                        "v62.0",
                        1.4
                    ],
                    [
                        "v61.0",
                        0.88
                    ],
                    [
                        "v60.0",
                        0.56
                    ],
                    [
                        "v59.0",
                        0.45
                    ],
                    [
                        "v58.0",
                        0.49
                    ],
                    [
                        "v57.0",
                        0.32
                    ],
                    [
                        "v56.0",
                        0.29
                    ],
                    [
                        "v55.0",
                        0.79
                    ],
                    [
                        "v54.0",
                        0.18
                    ],
                    [
                        "v51.0",
                        0.13
                    ],
                    [
                        "v49.0",
                        2.16
                    ],
                    [
                        "v48.0",
                        0.13
                    ],
                    [
                        "v47.0",
                        0.11
                    ],
                    [
                        "v43.0",
                        0.17
                    ],
                    [
                        "v29.0",
                        0.26
                    ]
                ]
            },
            {
                name: "Firefox",
                id: "Firefox",
                data: [
                    [
                        "v58.0",
                        1.02
                    ],
                    [
                        "v57.0",
                        7.36
                    ],
                    [
                        "v56.0",
                        0.35
                    ],
                    [
                        "v55.0",
                        0.11
                    ],
                    [
                        "v54.0",
                        0.1
                    ],
                    [
                        "v52.0",
                        0.95
                    ],
                    [
                        "v51.0",
                        0.15
                    ],
                    [
                        "v50.0",
                        0.1
                    ],
                    [
                        "v48.0",
                        0.31
                    ],
                    [
                        "v47.0",
                        0.12
                    ]
                ]
            },
            // {
            //     name: "Internet Explorer",
            //     id: "Internet Explorer",
            //     data: [
            //         [
            //             "v11.0",
            //             6.2
            //         ],
            //         [
            //             "v10.0",
            //             0.29
            //         ],
            //         [
            //             "v9.0",
            //             0.27
            //         ],
            //         [
            //             "v8.0",
            //             0.47
            //         ]
            //     ]
            // },
            {
                name: "Safari",
                id: "Safari",
                data: [
                    [
                        "v11.0",
                        3.39
                    ],
                    [
                        "v10.1",
                        0.96
                    ],
                    [
                        "v10.0",
                        0.36
                    ],
                    [
                        "v9.1",
                        0.54
                    ],
                    [
                        "v9.0",
                        0.13
                    ],
                    [
                        "v5.1",
                        0.2
                    ]
                ]
            },
            {
                name: "Edge",
                id: "Edge",
                data: [
                    [
                        "v16",
                        2.6
                    ],
                    [
                        "v15",
                        0.92
                    ],
                    [
                        "v14",
                        0.4
                    ],
                    [
                        "v13",
                        0.1
                    ]
                ]
            },
            {
                name: "Opera",
                id: "Opera",
                data: [
                    [
                        "v50.0",
                        0.96
                    ],
                    [
                        "v49.0",
                        0.82
                    ],
                    [
                        "v12.1",
                        0.14
                    ]
                ]
            }
        ]
    }
});

</script>
   <!-- word cloud chart -->
 <script>
Highcharts.chart('container3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: 'Diskusi materi dan pembahasan tugas/ujian berjalan baik, didalam/luar kelas',
        align: 'center',
        verticalAlign: 'middle',
        y: 150
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: true,
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '75%'],
            size: '110%'
        }
    },
    series: [{
        type: 'pie',
        name: 'Browser share',
        innerSize: '50%',
        data: [
            ['Sangat Tidak Setuju', 58.9],
            ['Tidak Setuju', 13.29],
            ['Agak Setuju', 13],
            ['Setuju', 3.78],
            ['Sangat Setuju', 3.42],
            // {
            //     name: 'Other',
            //     y: 7.61,
            //     dataLabels: {
            //         enabled: false
            //     }
            // }
        ]
    }]
});
</script>
@stop

