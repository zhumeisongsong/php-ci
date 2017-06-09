<!--list-->
<section class="content-wrapper">
	<div class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header list-box-header">
						<h3 class="box-title">Record List</h3>
						<button class="btn btn-primary add-btn" id="add_detial_btn">+add</button>

						<div class="box-tools">
							<div class="input-group input-group-sm" style="width: 150px;">
								<input type="text" name="table_search" class="form-control pull-right"
									   placeholder="Search">

								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.box-header -->

					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>Name</th>
								<th>Artist</th>
								<th>Status</th>
							</tr>
							{foreach $data.records as $record}
								<tr class="list-item" data-id="{$record.id}">
									<td>{$record.albumName}</td>
									<td>{$record.artistName}</td>
									<td><span class="label label-primary">vaild</span></td>
								</tr>
							{/foreach}
						</table>
					</div>
					<!-- /.box-body -->

					<div class="box-footer clearfix pagination-con">
						{$data.page_list}
					</div>
					<!-- /.box-footer -->
				</div>
			</div>
		</div>
	</div>


</section>
