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
<div class="container">
    <div class="row">
        <img src="/storage/image/favicon.ico" alt="Logo" width="150px" height="150px" style="margin-top: 10px;">
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
            <b>Print Date: </b> {{ date('m/d/Y', strtotime("+1 day")) }}
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Statement of Account</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{-- <b> MSC No.:</b> {{ $member['memberID'] }} --}}
                    </td>
                    <td>
                        {{-- <b> Name:</b> {{ $fullname }} --}}
                    </td>
                    <td>
                        {{-- <b> Bdate:</b> {{ $member['birthDate'] }} --}}
                    </td>
                    <td>
                        {{-- <b> Contact No.:</b> {{ $member['contactNum'] }} --}}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{-- <b>Package:</b> {{ $member['description'] }} --}}
                    </td>
                    <td>
                        {{-- @if ($member['mop'] == 1)
                                <b>Mode:</b> Regular
                            @else
                                <b>Mode:</b> Indigent
                            @endif --}}

                    </td>
                    <td>
                        {{-- <b>TAP:</b> P{{ $member['amount'] }} --}}
                    </td>
                    <td>
                        {{-- <b> Discounted:</b> --}}
                    </td>
                </tr>
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

        <table class="table table-striped table-bordered">
            <thead>
                <th>Member's Name</th>
                <th>Address</th>
                <th>Birth Date</th>
                <th>Contact Number</th>
                <th>Gender</th>
                <th>Mode of Payment</th>
                <th>Total Collected</th>
            </thead>
            <tbody>
                @foreach ($report as $r)
                    <tr>
                        <td>
                            {{ $r['firstName'] . ' ' . $r['middleName'] . ' ' . $r['lastName'] }}
                        </td>
                        <td>
                            {{ $r['addressbrgy'] . ' ' . $r['addresscity'] . ' ' . $r['addressprovince'] }}
                        </td>
                        <td>
                            {{ $r['birthDate'] }}
                        </td>
                        <td>
                            {{ $r['contactNum'] }}
                        </td>
                        <td>
                            {{ $r['gender'] }}
                        </td>
                        <td>
                            @if ($r['mop'] == 1)
                                Regular
                            @else
                                Indigent
                            @endif
                        </td>
                        <td>
                            {{ $r['amountpaid'] }}

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <table class="table table-striped table-bordered text-right">
            <thead>
            </thead>
            <tbody>
                <tr>
                    {{-- <td> <b> Amount Package:</b> P{{ $balance }}</td> --}}
                </tr>
                <tr>
                    <td> <b> Collected:</b>
                        @if ($total > 0)
                            P{{ $total }}
                        @else
                            P0
                        @endif
                    </td>
                </tr>
                <tr>
                    {{-- <td> <b> Outstanding Balance:</b> P{{ $outstanding }}</td> --}}
                </tr>
            </tbody>
        </table>

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
    </div>
</div>

<body>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
