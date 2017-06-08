<section class="content-wrapper">
	<div class="content">

		<div class="row">
			<div class="col-xs-12">
				<div class="box box-info">

					<div class="box-header with-border">
						<h3 class="box-title">{{$data.title}}</h3>
					</div>
					<!--main form-->
					<form class="form-horizontal">
						<div class="box-body">

							<!--name-->
							<div class="form-group">
								<label for="inputName" class="col-sm-2 control-label">Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="inputName" placeholder=""
										   value="Double / 3 Of Sence / Native Raw">
								</div>
							</div>

							<!--cover-->
							<div class="form-group">
								<label for="exampleInputFile" class="col-sm-2 control-label">Image</label>
								<div class="col-sm-9">
									<img src="https://img.discogs.com/dLO717G3hJJ__MZYXxldME50D7U=/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-3309594-1327601301.jpeg.jpg"
										 width="150px">
									{*<input type="file" id="exampleInputFile" class="form-control border-none" style="border: none" placeholder="Update">*}
									<button class="btn" style="margin-left: 10px; margin-top: 117px;">update</button>
								</div>
							</div>

							<!--artistNme-->
							<div class="form-group">
								<label for="inputFormat" class="col-sm-2 control-label">Artist</label>

								<div class="col-sm-9">
									<input type="text" class="form-control" id="inputFormat" placeholder=""
										   value="Dope On Plastic Mc's">
								</div>
							</div>

							<!--label-->
							<div class="form-group">
								<label for="inputLabel" class="col-sm-2
                                control-label">Label</label>

								<div class="col-sm-9">
									<input type="text" class="form-control" id="inputLabel" placeholder=""
										   value="Mad Science Records ‎– MS-002">
								</div>
							</div>

							<!--release year-->
							<div class="form-group">
								<label for="inputYear" class="col-sm-2 control-label">Year</label>

								<div class="col-sm-9 date">
									<input type="text" class="form-control pull-right" id="datepicker" placeholder=""
										   value="2011">
								</div>
							</div>

							<!--release country-->
							<div class="form-group">
								<label for="inputCountry" class="col-sm-2 control-label">Country</label>

								<div class="col-sm-9">
									<input type="text" class="form-control" id="inputCountry" placeholder=""
										   value="Japan">
								</div>
							</div>


							{*<!--artisname-->*}
							{*<div class="form-group">*}
							{*<label for="inputNumber" class="col-sm-2 control-label">Price</label>*}

							{*<div class="col-sm-9">*}
							{*<input type="number" class="form-control" id="inputNumber" placeholder="Price"*}
							{*value="444">*}
							{*</div>*}
							{*</div>*}

							<!--genre-->
							<div class="form-group">
								<label for="inputGerne" class="col-sm-2 control-label">Gerne</label>

								<div class="col-sm-9">
									<input type="text" class="form-control" id="inputGerne" placeholder=""
										   value="Hip Hop ">
								</div>
							</div>

							<!--format-->
							<div class="form-group">
								<label for="inputFormat" class="col-sm-2 control-label">Format</label>

								<div class="col-sm-9">
									<input type="text" class="form-control" id="inputFormat" placeholder=""
										   value="Vinyl, 12  33 ⅓ RPM">
								</div>
							</div>

							<!--price-->
							<div class="form-group">
								<label for="inputPrice" class="col-sm-2 control-label">Market Price</label>

								<div class="col-sm-9">
									<input type="" class="form-control" id="inputPrice" placeholder="" value="2183">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPrice" class="col-sm-2 control-label">Lowest Price</label>

								<div class="col-sm-9">
									<input type="text" class="form-control" id="inputPrice" placeholder="" value="NULL">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPrice" class="col-sm-2 control-label">median Price</label>

								<div class="col-sm-9">
									<input type="text" class="form-control" id="inputPrice" placeholder="" value="NULL">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPrice" class="col-sm-2 control-label">Highest Price</label>

								<div class="col-sm-9">
									<input type="text" class="form-control" id="inputPrice" placeholder="" value="NULL">
								</div>
							</div>
							<!--track-->
							<div class="form-group">
								<label for="inputPrice" class="col-sm-2 control-label">Track</label>

								<div class="col-sm-9">
									<table class="table table-hover" style="border: 1px #ddd solid">
										<tr>
											<th>Index</th>
											<th>track</th>
											<th>Duration</th>
											<th> </th>
										</tr>

										<tr class="list-item">
											<td>1</td>
											<td>Double</td>
											<td></td>
											<td><span class="fa fa-remove"</td>
										</tr>

									</table>
									<div style="width: 100%; text-align: right ;margin-top: -15px">
										<button type="button" class="btn">＋</button>
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
