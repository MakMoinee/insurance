<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="/storage/image/favicon.ico">
    <title>Report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


<body id="body" style="margin-left: -156px;">
    <div class="container">
        <div class="row">
            <img src="/storage/image/favicon.ico" alt="Logo" width="150px" height="150px"
                style="margin-top: 10px;">
            <div class="text-center" style="margin-left: 150px;">
                <h4 style="margin-top: 20px; text-transform: capitalize !important;"><b> SALVADOR INDIGENT MEMORIAL
                        SERVICES</b>
                </h4>
                <p style="margin-top: -10px;">
                    Purok 8, Sinayawan, Valencia City, Bukidnon
                </p>
                <p style="margin-top: -15px;">
                    TIN: 776-384-273-000
                </p>
                <p style="margin-top: -15px;">
                    Cel. No.: 09267921987/ 09059703189
                </p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-right">
                <b>Year: </b> {{ date('Y', strtotime('now')) }},
                <b>Print Date: </b> {{ date('m/d/Y', strtotime('now')) }}
            </div>
            <table id="tbl1" class="table table-striped table-bordered" name="tbl">
                <thead>
                    <tr>
                        <th>Statement of Account</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <b> Address:</b>
                            {{ $address }}
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <b> Collector:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            APC: <b>SALVADOR,ELINA P.</b>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                </tbody>
            </table>

            <table id="tbl2" class="table table-striped table-bordered"
                style="table-layout:auto; width: 720px; padding:10px;" name="tbl">
                <thead>
                    <th>
                        <h6>Name</h6>
                    </th>
                    <th>Addr</th>
                    <th>Birth Date</th>
                    <th>Cont Num</th>
                    <th>Gender</th>
                    <th>MOP</th>
                    <th>Prev</th>
                    <th>Jan</th>
                    <th>Feb</th>
                    <th>Mar</th>
                    <th>Apr</th>
                    <th>May</th>
                    <th>Jun</th>
                    <th>Jul</th>
                    <th>Aug</th>
                    <th>Sep</th>
                    <th>Oct</th>
                    <th>Nov</th>
                    <th>Dec</th>
                    <th>Total</th>
                </thead>
                <tbody>
                    @foreach ($report as $r)
                        <tr>
                            <td> {{ $r['firstName'] . ' ' . $r['middleName'] . ' ' . $r['lastName'] }}</td>
                            <td> {{ $r['addresspurok'] . ' ' . $r['addressbrgy'] . ' ' . $r['addresscity'] . ' ' . $r['addressprovince'] }}
                            </td>
                            <td>
                                {{ $r['birthDate'] }}
                            </td>
                            <td>
                                {{ $r['contactNum'] }}
                            </td>
                            <td>

                                @if ($r['gender'] == 'Female')
                                    F
                                @else
                                    M
                                @endif
                            </td>
                            <td>
                                @if ($r['mop'] == 1)
                                    Regular
                                @else
                                    Indigent
                                @endif
                            </td>
                            <td>
                                @if (array_key_exists($r['memberID'], $prev))
                                    {{ $prev[$r['memberID']] }}
                                @else
                                    0
                                @endif

                            </td>
                            <td>
                                @if (array_key_exists($r['memberID'], $dateSet))
                                    @if (array_key_exists('Jan', $dateSet[$r['memberID']]))
                                        {{ $dateSet[$r['memberID']]['Jan'] }}
                                    @else
                                        0
                                    @endif
                                @else
                                    0
                                @endif
                            </td>
                            <td>
                                @if (array_key_exists($r['memberID'], $dateSet))
                                    @if (array_key_exists('Feb', $dateSet[$r['memberID']]))
                                        {{ $dateSet[$r['memberID']]['Feb'] }}
                                    @else
                                        0
                                    @endif
                                @else
                                    0
                                @endif
                            </td>
                            <td>
                                @if (array_key_exists($r['memberID'], $dateSet))
                                    @if (array_key_exists('Mar', $dateSet[$r['memberID']]))
                                        {{ $dateSet[$r['memberID']]['Mar'] }}
                                    @else
                                        0
                                    @endif
                                @else
                                    0
                                @endif
                            </td>
                            <td>
                                @if (array_key_exists($r['memberID'], $dateSet))
                                    @if (array_key_exists('Apr', $dateSet[$r['memberID']]))
                                        {{ $dateSet[$r['memberID']]['Apr'] }}
                                    @else
                                        0
                                    @endif
                                @else
                                    0
                                @endif
                            </td>
                            <td>
                                @if (array_key_exists($r['memberID'], $dateSet))
                                    @if (array_key_exists('May', $dateSet[$r['memberID']]))
                                        {{ $dateSet[$r['memberID']]['May'] }}
                                    @else
                                        0
                                    @endif
                                @else
                                    0
                                @endif
                            </td>
                            <td>
                                @if (array_key_exists($r['memberID'], $dateSet))
                                    @if (array_key_exists('Jun', $dateSet[$r['memberID']]))
                                        {{ $dateSet[$r['memberID']]['Jun'] }}
                                    @else
                                        0
                                    @endif
                                @else
                                    0
                                @endif
                            </td>
                            <td>
                                @if (array_key_exists($r['memberID'], $dateSet))
                                    @if (array_key_exists('Jul', $dateSet[$r['memberID']]))
                                        {{ $dateSet[$r['memberID']]['Jul'] }}
                                    @else
                                        0
                                    @endif
                                @else
                                    0
                                @endif
                            </td>
                            <td>
                                @if (array_key_exists($r['memberID'], $dateSet))
                                    @if (array_key_exists('Aug', $dateSet[$r['memberID']]))
                                        {{ $dateSet[$r['memberID']]['Aug'] }}
                                    @else
                                        0
                                    @endif
                                @else
                                    0
                                @endif
                            </td>
                            <td>
                                @if (array_key_exists($r['memberID'], $dateSet))
                                    @if (array_key_exists('Sep', $dateSet[$r['memberID']]))
                                        {{ $dateSet[$r['memberID']]['Sep'] }}
                                    @else
                                        0
                                    @endif
                                @else
                                    0
                                @endif
                            </td>
                            <td>
                                @if (array_key_exists($r['memberID'], $dateSet))
                                    @if (array_key_exists('Oct', $dateSet[$r['memberID']]))
                                        {{ $dateSet[$r['memberID']]['Oct'] }}
                                    @else
                                        0
                                    @endif
                                @else
                                    0
                                @endif
                            </td>
                            <td>
                                @if (array_key_exists($r['memberID'], $dateSet))
                                    @if (array_key_exists('Nov', $dateSet[$r['memberID']]))
                                        {{ $dateSet[$r['memberID']]['Nov'] }}
                                    @else
                                        0
                                    @endif
                                @else
                                    0
                                @endif
                            </td>
                            <td>
                                @if (array_key_exists($r['memberID'], $dateSet))
                                    @if (array_key_exists('Dec', $dateSet[$r['memberID']]))
                                        {{ $dateSet[$r['memberID']]['Dec'] }}
                                    @else
                                        0
                                    @endif
                                @else
                                    0
                                @endif
                            </td>
                            <td>
                                @if (array_key_exists($r['memberID'], $totalSet))
                                    {{ $totalSet[$r['memberID']] }}
                                @else
                                    0
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- <table id="tbl3" class="table table-striped table-bordered text-right" name="tbl">
                <thead>
                </thead>
                <tbody>
                    <tr> --}}
            {{-- <td> <b> Amount Package:</b> P{{ $balance }}</td> --}}
            {{-- </tr>
                    <tr>
                        <td> <b> Collected:</b>
                            @if ($total > 0)
                                P{{ $total }}
                            @else
                                P0
                            @endif
                        </td>
                    </tr>
                    <tr> --}}
            {{-- <td> <b> Outstanding Balance:</b> P{{ $outstanding }}</td> --}}
            {{-- </tr>
                </tbody>
            </table> --}}

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p><b>Prepared By:</b></p>
                    </div>
                    <div class="col-md-12" style="margin-top: 20px">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>ELSA APA-AP</b></p>
                                <hr style="margin-top: -15px; background:black;width: 105px;position: relative;"
                                    align="left">
                                <p style="margin-top: -15px;">ENCODER</p>
                            </div>
                            <div class="col-md-3">
                                <p><b>ELJAEN BARCELONA</b></p>
                                <hr style="margin-top: -15px; background:black;width: 105px;position: relative;"
                                    align="left">
                                <p style="margin-top: -15px;">ACCOUNTING</p>
                            </div>
                            <div class="col-md-3">
                                <p><b>ELINA P. SALVADOR</b></p>
                                <hr style="margin-top: -15px; background:black;width: 105px;position: relative;"
                                    align="left">
                                <p style="margin-top: -15px;">CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="container" style="margin-bottom: 50px;margin-top: 20px;">
                <div class="row">
                    <a id="dlink" style="display:none;"></a>
                    {{-- onclick="exportTableToExcel('tbl','report_{{ strtotime(now()) }}')">Export to --}}
            {{-- <button class="btn btn-primary" type="submit"
                        onclick="tableToExcel('tbl','report_{{ strtotime(now()) }}.xls')">Export to
                        excel sheet</button>
                </div> --}}
            {{-- </div>  --}}
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>
        function exportTableToExcel(tableID, filename = '') {
            var downloadLink;
            var dataType = 'application/vnd.ms-excel';
            var tableSelect = document.getElementById(tableID);
            var tableSelect1 = document.getElementById(tableID);
            var tableSelect2 = document.getElementById(tableID);
            var tableSelect3 = document.getElementById(tableID);
            var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

            // Specify file name
            filename = filename ? filename + '.xls' : 'excel_data.xls';

            // Create download link element
            downloadLink = document.createElement("a");

            document.body.appendChild(downloadLink);

            if (navigator.msSaveOrOpenBlob) {
                var blob = new Blob(['\ufeff', tableHTML], {
                    type: dataType
                });
                navigator.msSaveOrOpenBlob(blob, filename);
            } else {
                // Create a link to the file
                downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

                // Setting the file name
                downloadLink.download = filename;

                //triggering the function
                downloadLink.click();
            }
        }
    </script>

</body>

</html>
