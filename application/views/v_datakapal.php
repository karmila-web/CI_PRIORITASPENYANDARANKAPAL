
				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800" align="center">Data Kapal Pendaftar</h1><hr>
					<p class="mb-4">
						<a href="<?= base_url() ?>controller_utama/dashboard" class="btn btn-warning btn-sm"><i class="fa fa-home"></i><b> Home</b></a>
						<a href="<?= base_url() ?>controller_utama/v_tambahdatakapal" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> <b>Tambah Data Kapal</b>
				</a></p>
					<!-- <a href="<?php // echo base_url() ?>controller_utama/v_tambahdatakapal" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> <b>Tambah Data Kapal</b></a> -->
					<!-- <hr> -->

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr align="center">
											<th width="2%">No</th>
											<th width="30%">Nama Kapal</th>
											<th width="20%">Jenis Kapal</th>
											<th width="20%">Pengangkutan</th>
											<th width="6%">LOA</th>
											<th width="10%">Aksi</th>							
										</tr>
									</thead>
									<tfoot>
										<tr align="center">
											<th width="2%">No</th>
											<th width="30%">Nama Kapal</th>
											<th width="20%">Jenis Kapal</th>
											<th width="20%">Pengangkutan</th>
											<th width="6%">LOA</th>
											<th width="10%">Aksi</th>
										</tr>
									</tfoot>
									<tbody>
									<?php 
										$no=1;
										foreach ($datakapal as $d_kapal) :
									?>

									<tr>
										<td align="center"><?= $no++; ?></td>
										<td><?= $d_kapal->nama_kapal ?></td>
										<td><?= $d_kapal->jenis_kapal ?></td>
										<td><?= $d_kapal->pengangkutan ?></td>
										<td><?= $d_kapal->LOA ?></td>
										<td align="center"><a class="btn btn-danger" href="<?= base_url() ?>controller_utama/hapus_datakapal/<?= $d_kapal->id_kapal?>" role="button"><i class="fa fa-trash"></i></a> || <a class="btn btn-warning" href="<?= base_url() ?>controller_utama/v_editdatakapal/<?= $d_kapal->id_kapal ?>"><i class="fa fa-edit"></i></a></td>
										<!-- <td align="center"><a class="btn btn-success" href="" role="button">Proses</a></a></td> -->
									</tr> 
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->


