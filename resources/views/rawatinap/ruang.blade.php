<div class="content-wrapper">
      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Rawat Inap - Ruang
                </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-link btn-float text-default"><i
                            class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i>
                        <span>Invoices</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i>
                        <span>Schedule</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Ruangan</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <a href="#" class="breadcrumb-elements-item">
                        <i class="icon-comment-discussion mr-2"></i>
                        Support
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Settings
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                            <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- Main charts -->
        <div class="row">
        </div>
        <!-- /main charts -->


        <!-- Dashboard content -->
        <div class="row">
            <div class="col-xl-12">
                <!--Tabel -->
                <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Tabel Ruang</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="card-body">
                            <div class="col-lg-4">
                                <button type="button" class="btn bg-success btn-labeled btn-labeled-left" data-toggle="modal" data-target="#modal_theme_success"><b><i class="icon-reading"></i></b> Tambah Ruangan</button>
                            </div>
                        </div>
    
                        <table class="table table-togglable table-hover footable-loaded footable default">
                            <thead>
                                <tr>
                                    <th data-toggle="true" class="footable-visible footable-first-column">No.</th>
                                    <th data-hide="phone,tablet" class="footable-visible">Nama Ruang</th>
                                    <th data-hide="phone,tablet" data-name="Date Of Birth" class="footable-visible">Kelas</th>
                                    <th data-hide="phone,tablet" data-name="Date Of Birth" class="footable-visible">Status</th>
                                    <th class="text-center footable-visible footable-last-column" style="width: 30px;"><i class="icon-menu-open2"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                @php $no = 1; @endphp
                                @foreach ($ruang as $data) 
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>{{$no++}}</td>
                                    <td class="footable-visible">{{$data->nama_ruang}}</td>
                                    <td class="footable-visible">{{$data->nama_kelas}}</td>
                                    <td class="footable-visible"><span class="badge badge-success">{{$data->status_ruang}}</span></td>
                                    <td class="text-center footable-visible footable-last-column">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
    
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                <!--/Tabel-->
            </div>
        </div>
        <!-- /dashboard content -->

        <!--Modal Form Pendaftaran -->
        <div id="modal_theme_success" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-full">
						<div class="modal-content">
							<div class="modal-header bg-success">
								<h6 class="modal-title">Form Rawat Inap</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								 <div class="col-xl-12">
                                    <!-- Form -->
                                            <div class="card-body">
                                                <form action="#">
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">ID Kelas:</label>
                                                        <div class="col-lg-9">
                                                            <input type="number" class="form-control" placeholder="Fuad Ari ">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                      <label class="col-lg-3 col-form-label">Status</label>
                                                      <div class="col-lg-6">
                                                          <select class="form-control">
                                                              <option value="opt1" disabled>Pilih Status</option>
                                                              <option value="opt2">Penuh</option>
                                                              <option value="opt3">Kosong</option>
                                                          </select>
                                                        </div>
                                                    </div>
                                                  </form>
                                    <!-- /Form -->
                                </div>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-success">Save changes</button>
							</div>
						</div>
					</div>
				</div>
        <!--End Modal Pendaftaran-->

    </div>
    <!-- /content area -->

  


</div>
