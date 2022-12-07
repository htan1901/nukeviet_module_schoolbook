<!-- BEGIN: main -->
<link rel="stylesheet" href="{NV_BASE_SITEURL}themes/default/css/schoolbook_class.css">
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
		<form action="get" class="filter-section" 
		style="width: 60%;
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
			<br><span>Tuần</span>
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
			<form action="{URL_ACTION}" method="post">
				<tr class="table_row">
					<td hidden>
						<input name="ma_mon_hoc" class="row_id" value="{subject.ma_mon_hoc}">
					</td>
					<td class="table_col" style="width: 10%;">
						<span>{day_of_week}</span> 
						<br>
						<input type="date" name="ngay_day" class="input_ngayday" value="{subject.ngay_day}" readonly>
					</td>
					<td class="table_col">
						<button name="save" title="edit" class="button_save" hidden>
							<img
								src="{NV_BASE_SITEURL}themes/default/images/icons/check.png" alt=""
								style="width: 100%; height: 100%;">
						</button>
						<button title="cancel" class="button_cancel" onclick="cancel({num})" hidden>
							<img
								src="{NV_BASE_SITEURL}themes/default/images/icons/multiply.png" alt=""
								style="width: 100%; height: 100%;">
						</button>
						<span title="edit" class="button_edit span_button" onclick="edit({num})">
							<img
								src="{NV_BASE_SITEURL}themes/default/images/icons/edit.png" alt=""
								style="width: 100%; height: 100%;">
						</span>
						<button title="edit" class="button_remove" onclick="">
							<img
								src="{NV_BASE_SITEURL}themes/default/images/icons/delete.png" alt=""
								style="width: 100%; height: 100%;">
						</button>
					</td>
					<td class="table_col">{subject.tiet_bat_dau}</td>
					<td class="table_col">{subject.ten_mon_hoc}</td>
					<td class="table_col">
						<textarea name="textarea_baihoc" readonly class="textarea_baihoc">{subject.bai_hoc}</textarea>
					</td>
					<td class="table_col">
						<textarea name="textarea_nhanxet" readonly class="textarea_nhanxet">{subject.nhan_xet}</textarea>
					</td>
					<td class="table_col">
						<input name="number_xeploai" readonly type="number" min="0" max="10" style="text-align: center" class="number_xeploai"
							value="{subject.xep_loai}">
					</td>
					<td class="table_col">{subject.ho_ten}</td>
					<td class="table_col" {hidden}>
						<input type="checkbox" name="trang_thai" {check} class="input_trangthai">
					</td>
				</tr>
			</form>
			<!-- END: subject_loop-->
		</table>
	</div>
</div>
<style>

	.textarea_baihoc,
	.textarea_nhanxet,
	.number_xeploai,
	.input_ngayday {
		resize: none;
		background-color: transparent;
		border: none;
	}

	.input_ngayday {
		width: 80%;
	}

	.span_button, button{
		margin: 0 5px 0 5px;
		padding: 0;
		display: inline-block;
		width: 25px;
		height: 25px;
		cursor: pointer;
		background-color: transparent;
		border: none;
	}

	span:hover, button:hover {
		opacity: 0.5;
	}
</style>
<!-- END: schedule-->
<!-- BEGIN: script -->
<script>
	var editButtons = document.getElementsByClassName('button_edit');
	var cancelButtons = document.getElementsByClassName('button_cancel');
	var saveButtons = document.getElementsByClassName('button_save');
	var removeButtons = document.getElementsByClassName('button_remove');
	var textAreaBaiHocs = document.getElementsByClassName('textarea_baihoc');
	var rowIDs = document.getElementsByClassName('row_id');
	var textAreaNhanXets = document.getElementsByClassName('textarea_nhanxet');
	var numberXepLoais = document.getElementsByClassName('number_xeploai');
	var inputTrangThais = document.getElementsByClassName('input_trangthai');

	function edit(index) {

		// kiem tra xem row co duoc phep sua hay khong
		if (!inputTrangThais[index].checked) {
			window.alert("Bạn không có quyền sửa nội dung dòng này!");
			return;
		}

		changeToEditState(index);
	}

	function cancel(index) {
		if (confirm("Bạn muốn hủy thay đổi!")) {
			changeToNormalState(index);
			return;
		}
	}

	function changeToNormalState(index) {
		// cho phep sua cac truong duoc sua
		textAreaBaiHocs[index].readOnly = true;
		textAreaNhanXets[index].readOnly = true;
		numberXepLoais[index].readOnly = true;

		// thay doi css cho de nhin
		textAreaBaiHocs[index].style.backgroundColor = 'transparent';
		textAreaBaiHocs[index].style.border = 'none';

		textAreaNhanXets[index].style.backgroundColor = 'transparent';
		textAreaNhanXets[index].style.border = 'none';

		numberXepLoais[index].style.backgroundColor = 'transparent';
		numberXepLoais[index].style.border = 'none';

		// hien thi nut huy va luu
		cancelButtons[index].hidden = true;
		saveButtons[index].hidden = true;
		editButtons[index].hidden = false;
		removeButtons[index].hidden = false;
	}

	function changeToEditState(index) {
		// cho phep sua cac truong duoc sua
		textAreaBaiHocs[index].readOnly = false;
		textAreaNhanXets[index].readOnly = false;
		numberXepLoais[index].readOnly = false;

		textAreaBaiHocs[index].focus();

		// thay doi css cho de nhin
		textAreaBaiHocs[index].style.backgroundColor = '#fff';
		textAreaBaiHocs[index].style.border = '2px solid #ccc';
		textAreaBaiHocs[index].style.borderRadius = '4px';

		textAreaNhanXets[index].style.backgroundColor = '#fff';
		textAreaNhanXets[index].style.border = '2px solid #ccc';
		textAreaNhanXets[index].style.borderRadius = '4px';

		numberXepLoais[index].style.backgroundColor = '#fff';
		numberXepLoais[index].style.border = '2px solid #ccc';
		numberXepLoais[index].style.borderRadius = '4px';

		// hien thi nut huy va luu
		cancelButtons[index].hidden = false;
		saveButtons[index].hidden = false;
		editButtons[index].hidden = true
		removeButtons[index].hidden = true;
	}
</script>
<!-- END: script -->
</div>
<!-- END: main -->