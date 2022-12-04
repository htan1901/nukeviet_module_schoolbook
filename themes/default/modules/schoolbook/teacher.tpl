<!-- BEGIN: main -->
<div class="table-responsive" style="margin-bottom: 10%;background-color: azure;">
	<div id="top">

		<table style="width:100%;">
			<tr>
				<td>
					<p> <b>{LANG.full_name} </b>{HOTEN}</pơ>
				</td>
				<td>
					<p> <b>{LANG.role} </b>{VAITRO}</p>
				</td>

			</tr>
			<tr>
				<td>
					<a> <b>{LANG.school}</b>{TRUONG}</a>
				</td>
				<td>
					<a> <b>{LANG.timestamp} </b>{PHIEN}</a>
				</td>
			</tr>

		</table>

		<p style="text-align: center; font-size: x-large; font-weight: bold; margin: 20px 0 20px 0;">DANH SÁCH LỚP PHỤ TRÁCH
			</>
	</div>

	<div>
		<!-- BEGIN: main_class -->
		<div id="main_class" style="margin: 20px 0 20px 0;">
			<label>Lớp chủ nhiệm</label><br>
			<form action="{URL_ACTION}" method="get" style="margin: 0 10px 0 10px;">
				<div style="display: inline; margin: 0 10px 0 10px;">
					<input type="hidden" name="ma_lop" value="{MA_LOP}">
					<input type="submit" name="lop" value="{TEN_LCN}" class="button main-class-button">
				</div>
			</form>
		</div>
		<!-- END: main_class -->

		<!-- BEGIN: teaching_class -->
		<div id="teaching_class" style="margin: 20px 0 20px 0;">
			<label>Lớp giảng dạy</label><br>
			<div style="margin: 0 10px 0 10px;">
				<!-- BEGIN: teaching_loop -->
				<form action="{URL_CLASS}" method="get" style="display: inline; margin: 0 10px 0 10px;">
					<input type="hidden" name="ma_lop" value="{teaching_row.ma_lop}">
					<input type="submit" name="lop" value="{teaching_row.ten_lop}" class="button teaching-class-button">
				</form>
				<!-- END: teaching_loop -->
			</div>
		</div>
		<!-- END: teaching_class -->

		<!-- BEGIN: manage_class -->
		<div id="manage_class" style="margin: 20px 0 20px 0;">
			<label>Quản lý lớp</label><br>
			<div style="margin: 0 10px 0 10px;">
				<!-- BEGIN: manage_loop -->
				<form action="{URL_CLASS}" method="get" style="display: inline; margin: 0 10px 0 10px;">
					<input type="hidden" name="ma_lop" value="{manage_row.ma_lop}">
					<input type="submit" name="lop" value="{manage_row.ten_lop}" class="button">
				</form>
				<!-- END: manage_loop -->
			</div>
		</div>
		<!-- END: manage_class -->

	</div>

	<!-- BEGIN: empty-->
	<div>
		<p style="text-align: center; margin: 20px 0 20px 0; font-size: large;">{LANG.empty_responsible}</p>
	</div>
	<!-- END: empty-->
	<style>
		.button {
			display: inline-block;
			border-radius: 4px;
			background-color: #4caf9d;
			border: none;
			color: black;
			text-align: center;
			font-size: 17px;
			width: 70px;
			height: 30px;
			transition: all 0.5s;
			cursor: pointer;
			margin: 5px;
			border: 2px solid black;
			color: aliceblue;
		}

		.main-class-button {
			background-color: #f4511e;
		}

		.teaching-class-button {
			background-color: #087E8B;
		}

		.button:hover {
			opacity: 0.5;
		}
	</style>
</div>
<!-- END: main -->