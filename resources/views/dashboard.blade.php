
@extends('layouts.template')

@section('isi')
<?php
// $data = file_get_contents($confiq->linkstatus);
// $json = json_decode($data, TRUE);

?>
<div class="container-fluid">

                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3">
                        <div class="card bg-warning text-white  card-hover">
                            <div class="card-body">
                                <h4 class="card-title">Antrian</h4>
                                <h3 class="white-text m-b-0"><i class=" ti-list"></i> {{$antrian}}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-lg-3">
                        <div class="card bg-success text-white card-hover">
                            <div class="card-body">
                                <h4 class="card-title">Ulangtahun</h4>
                                <h3 class="white-text m-b-0"><i class="ti-arrow-up"></i> {{$ultah}}</h3> 
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-lg-3">
                        <div class="card bg-danger text-white  card-hover">
                            <div class="card-body">
                                <h4 class="card-title">Berkala</h4>
                                <h3 class="white-text m-b-0"><i class="ti-arrow-up"></i>{{$berkala}}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-lg-3">
                        <div class="card bg-purple text-white  card-hover">
                            <div class="card-body">
                                <h4 class="card-title">GAGAL</h4>
                                <h3 class="white-text m-b-0"><i class="ti-arrow-up"></i> {{$sms}}</h3>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                

                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Antrian Pesan</h4>
                                    </div>
d
                                </div>
s
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-4 col-xl-6">
                        <div class="card card-hover">
                            <div class="card-body" style="background:url(../../assets/images/background/active-bg.png) no-repeat top center;">
                                <div class="p-t-20 text-center">
                                    <i class="mdi mdi-file-chart display-4 text-orange d-block"></i>
                                    <h3>{{$status}}</h3>
                                    <span>Active Visitors on Site</span>
                                    <!-- Progress -->
                                    <div class="progress m-t-40" style="height:4px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-orange" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!-- Progress -->
                                    <!-- row -->
                                    <button data-toggle="modal" data-target="#verticalcenter" class="waves-effect waves-light m-t-20 btn btn-lg btn-info accent-4 m-b-20" {{$con}}>Scan Barcode</button>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- modal scan -->

								<div id="verticalcenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="vcenter">Modal Heading</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                            <iframe src="{{$confiq->linkbarcode}}" frameborder="0" height="450" width="100%"></iframe>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

<!-- modal scan -->
                    <div class="col-lg-8 col-xl-6">
                        <div class="card card-hover">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">

                                </div>
                                <!-- column -->
                                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Perangkat</h4>
                                <h6 class="card-subtitle">Exporting data from a table can often be a key part of a complex application. The Buttons extension for DataTables provides three plug-ins that provide overlapping functionality for data export.  You can refer full documentation from here <a href="https://datatables.net/">Datatables</a></h6>
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-striped table-bordered display">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                <!-- column -->
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->

            </div>


{{url('/')}}
	{{asset('/')}}
@endsection
