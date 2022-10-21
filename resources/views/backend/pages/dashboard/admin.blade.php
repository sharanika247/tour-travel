@extends('backend.master')
@section('main')
{{--  card --}}
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money color-success border-success"></i>
                </div>
                <div class="stat-content dib">
                    <div class="stat-text">Total Profit</div>
                    <div class="stat-digit">1,012</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                </div>
                <div class="stat-content dib">
                    <div class="stat-text">New Customer</div>
                    <div class="stat-digit">961</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
                </div>
                <div class="stat-content dib">
                    <div class="stat-text">Active Projects</div>
                    <div class="stat-digit">770</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Referral</div>
                    <div class="stat-digit">2,781</div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- table --}}
{{-- <div class="row">
    <!-- /# column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title pr">
                <h4>All Exam Result</h4>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table student-data-table m-t-20">
                        <thead>
                            <tr>
                                <th><label><input type="checkbox" value=""></label>Exam Name</th>
                                <th>Subject</th>
                                <th>Grade Point</th>
                                <th>Percent Form</th>
                                <th>Percent Upto</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Class Test</td>
                                <td>Mathmatics</td>
                                <td>
                                    4.00
                                </td>
                                <td>
                                    95.00
                                </td>
                                <td>
                                    100
                                </td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>Mathmatics</td>
                                <td>
                                    4.00
                                </td>
                                <td>
                                    95.00
                                </td>
                                <td>
                                    100
                                </td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>English</td>
                                <td>
                                    4.00
                                </td>
                                <td>
                                    95.00
                                </td>
                                <td>
                                    100
                                </td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>Bangla</td>
                                <td>
                                    4.00
                                </td>
                                <td>
                                    95.00
                                </td>
                                <td>
                                    100
                                </td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>Mathmatics</td>
                                <td>
                                    4.00
                                </td>
                                <td>
                                    95.00
                                </td>
                                <td>
                                    100
                                </td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>English</td>
                                <td>
                                    4.00
                                </td>
                                <td>
                                    95.00
                                </td>
                                <td>
                                    100
                                </td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>Mathmatics</td>
                                <td>
                                    4.00
                                </td>
                                <td>
                                    95.00
                                </td>
                                <td>
                                    100
                                </td>
                                <td>20/04/2017</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div> --}}
<!-- /# row -->

{{-- cal and task --}}
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="year-calendar"></div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-title">
                <h4>Task</h4>

            </div>
            <div class="todo-list">
                <div class="tdl-holder">
                    <div class="tdl-content">
                        <ul>
                            <li>
                                <label>
                                    <input type="checkbox"><i></i><span>22,Dec Publish The Final
                                        Exam Result</span>
                                    <a href='#' class="ti-close"></a>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" checked><i></i><span>First Jan Start Our
                                        School</span>
                                    <a href='#' class="ti-close"></a>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox"><i></i><span>Recently Our Maganement
                                        Programme Start</span>
                                    <a href='#' class="ti-close"></a>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" checked><i></i><span>Check out some
                                        Popular courses</span>
                                    <a href='#' class="ti-close"></a>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" checked><i></i><span>First Jan Start Our
                                        School</span>
                                    <a href='#' class="ti-close"></a>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" checked><i></i><span>Connect with one new
                                        person</span>
                                    <a href='#' class="ti-close"></a>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <input type="text" class="tdl-new form-control"
                        placeholder="Write new item and hit 'Enter'...">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /# row -->


@endsection