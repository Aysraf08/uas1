@extends('templite.layout')

@section('isi')
	<!-- row -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-6">
				<!-- Card -->
				<div class="card">
					<div class="form-validation">
						<form class="form-valide" action="/laporan" method="post" onsubmit='disableButton()'>
							@csrf

							<div class="card-header">
								<h4 class="card-title">Form Laporan</h4>
							</div>
							<div class="card-body">  
								@if ($message = Session::get('success'))
        							<div style="color: red;">{{ $message }}</div>
								@endif
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-pekerjaan">Tanggal Dan Jam<span class="text-danger">*</span></label>
									<div class="col-lg-5">
											<input type="text" name="tanggal" class="form-control" value="{{ date('Y-m-d') }}" id="mdate" data-dtp="dtp_mPO8a">
									</div>
									<div class="col-lg-3">
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                            <input type="text" name="jam" class="form-control" value=""> 
                                        </div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-pekerjaan">Judul Pekerjaan<span class="text-danger">*</span></label>
									<div class="col-lg-8">
										<input type="text" class="form-control" id="val-pekerjaan" name="judul_pekerjaan">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-despekerjaan">Deskripsi Pekerjaan<span class="text-danger">*</span></label>
									<div class="col-lg-8">
										<textarea class="form-control" id="val-despekerjaan" name="deskripsi_pekerjaan" rows="5" placeholder="Pekerjaan anda"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label">
										<a href="javascript:void()">Data akan dikirim</a> <span class="text-danger">*</span>
									</label>
									<div class="col-lg-8">
										<label class="css-control css-control-primary css-checkbox" for="val-terms">
											<input id="cek" type="checkbox" class="css-control-input mr-2" id="val-terms" name="val-terms" value="1">
											<span class="css-control-indicator"></span> Saya Setuju</label>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-8 ml-auto">
										<button type="submit" id="btn" name="submit" class="btn btn-primary">Kirim</button>
										<label id="status_kirim" hidden="true">Processing.....</label>
									</div>
								</div>
		                    </div>
		                </form>
		                <script>
						    function disableButton() {
						        var status_kirim = document.getElementById('status_kirim');
						        status_kirim.hidden = false;
						        var btn = document.getElementById('btn');						        
						        btn.disabled = true;
						        btn.innerText = 'Posting...'
						    }
						</script>
		            </div>
                </div>
                <!-- Card -->
            </div>
            <div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Kegiatan Hari Ini</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped verticle-middle" style="min-width: 25rem !important;">
								<tr>
									<th scope="col" width="150px">Tanggal</th>
									<th scope="col">Pekerjaan</th>
									<th scope="col" width="80px"></th>
								</tr>
								@foreach ($data_laporan as $data)
					                <tr>
					                	<td>{{ $data->tanggal }}</td>
					                	<td data-toggle="modal" data-target="#exampleModalCenter{{ $data->id }}">{{ $data->judul_pekerjaan }}</td>
										<td>
											<div class="d-flex">
												<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="modal" data-target="#edit_modal{{ $data->id }}"><i class="fa fa-pencil"></i></a>
												<form action="/laporan/{{ $data->id }}" method="post">
													@method('DELETE')
													@csrf
													<button class="btn btn-danger shadow btn-xs sharp" onclick="return confrim('Yakin Ingin Menghapus?')"><i class="fa fa-trash"></i></button>
												</form>
											</div>
										</td>

	                                    <!-- Button trigger modal -->
	                                    
	                                    <!-- Modal Detail -->
	                                    <div class="modal fade" id="exampleModalCenter{{ $data->id }}">
	                                        <div class="modal-dialog modal-dialog-centered" role="document">
	                                            <div class="modal-content">
	                                                <div class="modal-header">
	                                                    <h5 class="modal-title">{{ $data->judul_pekerjaan }}</h5>
	                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
	                                                    </button>
	                                                </div>
	                                                <div class="modal-body">
														<label>Tanggal Pengerjaan : {{ $data->tanggal }}</label><br>
														<p>{{ $data->deskripsi_pekerjaan }}</p>
	                                                </div>
	                                                <div class="modal-footer">
	                                                	<a href="">
	                                                    	<button type="button" class="btn btn-primary">Hapus Data</button>
	                                                	</a>
	                                                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    
	                                    <!-- Modal Edit -->
	                                    <div class="modal fade" id="edit_modal{{ $data->id }}">
	                                        <div class="modal-dialog modal-dialog-centered" role="document">
	                                            <div class="modal-content">
	                                                <div class="modal-header">
	                                                    <h5 class="modal-title">EDIT</h5>
	                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
	                                                    </button>
	                                                </div>
													<div class="modal-body">
														<form action="/laporan/{{ $data->id }}" method="post">
															@method('PUT')	
															@csrf
																<div class="form-group row">
																	<label class="col-lg-4 col-form-label" for="val-pekerjaan">Tanggal Dan Jam<span class="text-danger">*</span></label>
																	<div class="col-lg-5">
																			<input type="text" name="tanggal" class="form-control" value="{{ $data->tanggal }}" id="mdate" data-dtp="dtp_mPO8a">
																	</div>
																	<div class="col-lg-3">
																		<div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
																			<input type="text" name="jam" class="form-control" value="{{ $data->jam }}"> 
																		</div>
																	</div>
																</div>
								
																<div class="form-group row">
																	<label class="col-lg-4 col-form-label" for="val-pekerjaan">Judul Pekerjaan<span class="text-danger">*</span></label>
																	<div class="col-lg-8">
																		<input type="text" class="form-control" id="val-pekerjaan" value="{{ $data->judul_pekerjaan }}" name="judul_pekerjaan">
																	</div>
																</div>
								
																<div class="form-group row">
																	<label class="col-lg-4 col-form-label" for="val-despekerjaan">Deskripsi Pekerjaan<span class="text-danger">*</span></label>
																	<div class="col-lg-8">
																		<textarea class="form-control" id="val-despekerjaan" name="deskripsi_pekerjaan" rows="5" placeholder="Pekerjaan anda">{{ $data->deskripsi_pekerjaan }}</textarea>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-lg-4 col-form-label">
																		<a href="javascript:void()">Data akan diedit</a> <span class="text-danger">*</span>
																	</label>
																	<div class="col-lg-8">
																		<label class="css-control css-control-primary css-checkbox" for="val-terms">
																			<input id="cek" type="checkbox" class="css-control-input mr-2" id="val-terms" name="val-terms" value="1">
																			<span class="css-control-indicator"></span> Saya Setuju</label>
																	</div>
																</div>
																<div class="form-group row">
																	<div class="col-lg-8 ml-auto">
																		<button type="submit" name="edit" class="btn btn-primary">Edit</button>
																	</div>
																</div>
														</form>
													</div>
	                                            </div>
	                                        </div>
	                                    </div>
					                </tr> 
								@endforeach                  
                            </table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection