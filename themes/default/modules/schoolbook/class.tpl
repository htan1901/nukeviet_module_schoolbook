<!-- BEGIN: main -->
<link rel="stylesheet" href="{NV_BASE_SITEURL}themes/default/css/schoolbook_class.css">
<script src="{NV_BASE_SITEURL}themes/default/js/schoolbook_class.js"></script>
<div class="table-responsive" style="margin-bottom: 10%;background-color: azure;">
	<div id="top">
		<table style="width: 100%;">
			<tr>
				<td>
					<p> <b>{LANG.full_name}</b>{HOTEN}</p>
				</td>
				<td>
					<p> <b>{LANG.role}</b>{VAITRO}</p>
				</td>
			</tr>

			<tr>
				<td>
					<p> <b>{LANG.school}</b>{TRUONG}</p>
				</td>
				<td>
					<p> <b>{LANG.timestamp}</b>{PHIEN}</p>
				</td>
			</tr>
		</table>
	</div>

	<div style="text-align: center; width: 100%;">
		<p><b>{LANG.class}: </b>{LOP}</p>
		<p><b>{LANG.gvcn}: </b>{TEN_GVCN}</p>
		<br>
	</div>

	<div class="functions-section">
		<form action="get" class="filter-section" style="width: 60%;
					height: 100%;
					display: inline;
					float: left;">
			<select>
				<option value="" selected disabled> Chọn năm học</option>
				<option value=""> Năm x </option>
				<option value=""> Năm y </option>
			</select>

			<select>
				<option value="" selected disabled> Chọn học kỳ</option>
				<option value=""> HK I </option>
				<option value=""> HK II </option>
			</select>

			<select>
				<option value="" selected disabled> Chọn tuần</option>
				<option value=""> Tuan x </option>
				<option value=""> Tuan y </option>
				<option value=""> Tuan z </option>
			</select>

			<input type="submit">
		</form>

		<form action="get" class="export-to-file" style="width: 30%;
								height: 100%;
								display: inline;
								float: left;">
			<!-- <select required="required">
				<option value="Excel" selected disabled> Excel</option>
				<option value="PDF"> PDF </option>
			</select> -->
			<!-- <i> 
				<img src="{NV_BASE_SITEURL}themes/default/images/icons/icons8-edit-32.png" alt="" srcset=""> 
				<input type="submit" name="type" value="Excel">
			</i> -->
			<button>
				<img src="{NV_BASE_SITEURL}themes/default/images/icons/icons8-microsoft-excel-2019-48.png" alt="export-to-excel"
					style="width: 30px;">
			</button>
			Xuất Excel
		</form>
	</div>

	<div style="width: 100%; margin: 10px 0 10px 0;">
		<br>
		<p class="title" style="font-weight: 600; text-align: center;">
			<span>Tuần</span>
		</p>
	</div>

	<!-- BEGIN: schedule-->
	<div style="width: 100%">
		<table id="so_dau_bai" style="text-align: center;width: 100%;">
			<tr class="table_row">
				<th class="table_col"> Thứ / Ngày</th>
				<th class="table_col"> Đặc quyền </th>
				<th class="table_col"> Tiết </th>
				<th class="table_col"> Môn học </th>
				<th class="table_col"> Bài học </th>
				<th class="table_col"> Nhận xét</th>
				<th class="table_col"> Đánh giá </th>
				<th class="table_col"> Ký tên </i></th>
				<th class="table_col" {hidden}>{LANG.status}</th>
			</tr>
			<!-- BEGIN: subject_loop-->
			<tr class="table_row">
				<td class="table_col">Thứ.../{subject.ngay_day}</td>
				<td class="table_col">
					<button title="edit" class="edit-btn" {edit_button_id}><img
							src="{NV_BASE_SITEURL}themes/default/images/icons/icons8-edit-32.png" alt=""
							style="width: 100%; height: 100%;"></button>
					<button title="cancel" class="cancel-btn"><img
							src="{NV_BASE_SITEURL}themes/default/images/icons/icons8-cancel-48.png"
							style="width: 100%; height: 100%;" /></button>
				</td>
				<td class="table_col">{subject.tiet_bat_dau}</td>
				<td class="table_col" >{subject.ten_mon_hoc}</td>
				<td class="table_col">
					<textarea readonly {subject_unit_id}>{subject.bai_hoc}</textarea>
				</td>
				<td class="table_col">
					<textarea readonly {subject_evaluate_id}>{subject.nhan_xet}</textarea>
				</td>
				<td class="table_col">
					<input readonly type="number" min="0" max="10" style="text-align: center">
				</td>
				<td class="table_col">{subject.ho_ten}</td>
				<td class="table_col" {hidden}>
					<input type="checkbox" name="trang_thai" {check}>
				</td>
			</tr>
			<!-- END: subject_loop-->
		</table>
	</div>
</div>
<style>
	textarea {
		resize: none;
		background-color: transparent;
		border: none;


		/* 
			border: 2px solid #ccc;
			border-radius: 4px;
			background-color: #f8f8f8;
			resize: none; */
	}

	button {
		width: 40px;
		height: 30px;
		cursor: pointer;
		background-color: transparent;
		border: none;
	}

	button:hover {
		opacity: 0.5;
	}
</style>
<!-- END: schedule-->
</div>
<!-- END: main -->