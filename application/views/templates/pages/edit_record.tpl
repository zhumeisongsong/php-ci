<section class="content-wrapper">
	<div class="content">

		<div class="row">
			<div class="col-xs-12">
				<div class="box box-info">

					<div class="box-header with-border">
						<h3 class="box-title">{$data.title}</h3>
					</div>

					<!--main form-->
					{php}
						$attr = array('class'=>'form-horizontal','id'=>'record_detail_form');

						echo validation_errors();
						echo form_open('record/submit',$attr);
					{/php}

					<div class="box-body">
						<!--name-->
						<div class="form-group">
							<label for="albumName" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="albumName" name="albumName" placeholder=""
									   value="{$data.record[0].albumName}">
							</div>
						</div>

						<!--cover-->
						<div class="form-group">
							<label for="exampleInputFile" class="col-sm-2 control-label">Image</label>
							<div class="col-sm-9">
								<img src="{$data.record[0].coverUrl}"
									 width="150px">

								<button class="btn" style="margin-left: 10px; margin-top: 117px;">update</button>
							</div>
						</div>

						<!--artistNme-->
						<div class="form-group">
							<label for="inputFormat" class="col-sm-2 control-label">Artist</label>

							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputFormat" placeholder=""
									   value="{$data.record[0].artistName}">
							</div>
						</div>

						<!--label-->
						<div class="form-group">
							<label for="inputLabel" class="col-sm-2
						control-label">Label</label>

							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputLabel" placeholder=""
									   value="{$data.record[0].label}">
							</div>
						</div>

						<!--release year-->
						<div class="form-group">
							<label for="inputYear" class="col-sm-2 control-label">Year</label>

							<div class="col-sm-9 date">
								<input type="text" class="form-control pull-right" id="datepicker" placeholder=""
									   value="{$data.record[0].releaseYear}">

							</div>
						</div>

						<!--release country-->
						<div class="form-group">
							<label for="inputCountry" class="col-sm-2 control-label">Country</label>

							<div class="col-sm-9">

								<select class="select_country" id="select_country" style="width: 100%; height: 34px; border-radius: 0"
										data-country="{$data.record[0].releaseCountry}">
									{include file="../include/country_list.tpl"}
								</select>
							</div>
						</div>

						<!--genre-->
						<div class="form-group">
							<label for="inputGerne" class="col-sm-2 control-label">Gerne</label>

							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputGerne" placeholder=""
									   value="{$data.record[0].genre}">
							</div>
						</div>

						<!--format-->
						<div class="form-group">
							<label for="inputFormat" class="col-sm-2 control-label">Format</label>

							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputFormat" placeholder=""
									   value="{$data.record[0].format}">
							</div>
						</div>

						<!--price-->
						<div class="form-group">
							<label for="inputPrice" class="col-sm-2 control-label">Market Price</label>

							<div class="col-sm-9">
								<input type="number" class="form-control" id="inputPrice" placeholder=""
									   value="{$data.record[0].marketPrice}">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPrice" class="col-sm-2 control-label">Lowest Price</label>

							<div class="col-sm-9">
								<input type="number" class="form-control" id="inputPrice" placeholder=""
									   value="{$data.record[0].lowestPrice}">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPrice" class="col-sm-2 control-label">Median Price</label>

							<div class="col-sm-9">
								<input type="number" class="form-control" id="inputPrice" placeholder=""
									   value="{$data.record[0].medianPrice}">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPrice" class="col-sm-2 control-label">Highest Price</label>

							<div class="col-sm-9">
								<input type="number" class="form-control" id="inputPrice" placeholder=""
									   value="{$data.record[0].highestPrice}">
							</div>
						</div>

						<!--track-->
						<div class="form-group">
							<label for="inputPrice" class="col-sm-2 control-label">Track</label>

							<div class="col-sm-9">
								<table class="table table-hover" style="border: 1px #ddd solid">
									<tr>
										<th>Index</th>
										<th>Name</th>
										<th>Duration</th>
										<th></th>
									</tr>
									{foreach $data.record_track as $track}
										<tr class="list-item">
											<td>{$track@iteration}</td>
											<td>{$track.name}</td>
											<td>{$track.duration}</td>
											<td><span class="fa fa-remove"></span></td>
										</tr>
									{/foreach}

								</table>
								<div style="width: 100%; text-align: right ;margin-top: -15px">
									<button type="button" class="btn">Add track</button>
								</div>

							</div>
						</div>


					</div>

					<div class="box-footer" style="text-align: center">
						<button type="submit" class="btn" id="detail_cancel"
								style="margin-right: 20px">Cancel
						</button>
						<button type="submit" class="btn btn-primary color-pink" id="detail_submit">Submit</button>
					</div>

					</form>
				</div>
			</div>
		</div>

	</div>

</section>
