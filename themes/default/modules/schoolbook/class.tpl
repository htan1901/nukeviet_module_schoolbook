<script src="{$NV_BASE_SITEURL}{$NV_ASSETS_DIR}/js/schoolbook.js">

</script>
<!-- BEGIN: main -->
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
		<p> <b>{LANG.class}</b>{LOP}</p>
		<br>
	</div>
	<table id="table_date" style="width: 100%; margin-top: 30px;">
		<tr>
			<td>
				<select id="nam_hoc" style="text-align: center;">
					<option value="" selected> Năm Học </option>
					<option value="nam_2020-2021">2020-2021</option>
					<option value="nam_2021-2022">2021-2022</option>
					<option value="nam_2022-2023">2022-2023</option>

				</select>
			</td>
			<td>
				<select id="hoc_ki" style="text-align: center;">
					<option value="" selected> Học Kì </option>
					<option value="hoc_ki_1">1</option>
					<option value="hoc_ki_2">2</option>
				</select>
			</td>
			<td>
				<select id="tuan" style="text-align: center;">
					<option value="" selected> Tuần </option>
					<option value="tuan_1">1</option>
					<option value="tuan_2">2</option>
					<option value="tuan_3">3</option>
					<option value="tuan_4">4</option>
				</select>
			</td>
		</tr>
	</table>
	<style>
		#table_date {
			border-collapse: collapse;
			width: 100%;
		}

		#table_date td,
		#table_date th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#table_date tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#table_date tr:hover {
			background-color: #ddd;
		}

		#table_date th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: white;
		}
	</style>
	<!-- BEGIN: schedule-->
	<div id="center" style="margin-top: 30px;">
		<style>

		</style>

		<table style="width: 50%;">
			<tr>
				<td>
					<input id="btn_edit" type="button" value="edit">
				</td>
				<td>
					<input id="btn_save" type="button" value="save">
				</td>
				<td>
					<input id="btn_delete" type="button" value="delete">
				</td>
				<td>
					<input id="btn_cancel" type="button" value="cancel">
				</td>
			</tr>
		</table>

		<div>
			<table id="so_dau_bai" style="text-align: center;width: 100%;border: 2px solid black; margin: 10px 0 0 10px;">
				<tr class="table_row">
					<th class="table_col">Ngày dạy</th>
					<th class="table_col">Tiết</th>
					<th class="table_col">Tên môn học</th>
					<th class="table_col">Bài học</th>
					<th class="table_col">Nhận xét</th>
					<th class="table_col">Xếp loại</i></th>
					<th class="table_col">Trạng Thái</th>
				</tr>
				<!-- BEGIN: subject_loop-->
				<tr class="table_row" id="{ROW_NUM}">
					<td class="table_col">{subject.ngay_day}</td>
					<td class="table_col">{subject.tiet_bat_dau}</td>
					<td class="table_col">{subject.ten_mon_hoc}</td>
					<td class="table_col">{subject.bai_hoc}</td>
					<td class="table_col">{subject.nhan_xet}</td>
					<td class="table_col">{subject.xep_loai}</td>
					<td class="table_col">
						<input type="checkbox" name="trang_thai" {check}>
					</td>
				</tr>
				<!-- END: subject_loop-->
			</table>
		</div>
	</div>
	<!-- END: schedule-->
	<style>
		#so_dau_bai {
			border-collapse: collapse;
			width: 80%;
		}

		#so_dau_bai td,
		#so_dau_bai th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#so_dau_bai tr {
			text-align: left;
		}

		#so_dau_bai tr:hover {
			background-color: #ddd;
		}

		#so_dau_bai th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: center;
			background-color: #4CAF50;
			color: white;
		}
	</style>
</div>
<script>
</script>
<!-- END: main -->