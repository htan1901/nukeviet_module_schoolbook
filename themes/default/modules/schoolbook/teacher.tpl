<!-- BEGIN: main -->
<div class="table-responsive" style="margin-bottom: 10%;background-color: azure;">
	<div id="top">

		<table style="width:100%;">
			<tr id="top_table_row_1">
				<td>
					<a> <b>Họ tên:</b>{HOTEN}</a>
				</td>
				<td>
					<a> <b>Vai trò:</b>{VAITRO}</a>
				</td>

			</tr>
			<tr id="top_table_row_2">
				<td>
					<a> <b>Trường:</b>{TRUONG}</a>
				</td>
				<td>
					<a> <b>Phiên đăng nhập:</b>{PHIEN}</a>
				</td>
			</tr>

		</table>

		<h1 style="text-align: center">DANH SÁCH LỚP PHỤ TRÁCH</h1>
	</div>
	<div id="center">
		<!-- BEGIN: main_class -->
		<label>Lớp chủ nhiệm</label><br>
		<table id="center_table_dslop" style="text-align: center;width: 100%;border: 2px solid black; margin: 10px 0 0 10px;">
			<div style="display: inline; margin: 0 10px 0 10px;">
				<button class="btnlop_cn" style="background: #4CAF50;">{TEN_LCN}</button>
			</div>
		</table>
		<!-- END: main_class -->

		<!-- BEGIN: teaching_class -->
		<label>Lớp giảng dạy</label>
		<table id="center_table_lopgd" style="text-align: center;width: 100%; border: 2px solid black;">
			<tr id="center_table_lopgd_row_1">
				<td>
					<button id="btnlop_gd_1" style="background: #4c5eaf;"> 11B3</button>
				</td>
				<td>
					<button id="btnlop_gd_2" style="background: #4c5eaf;"> 11B3</button>
				</td>
				<td>
					<button id="btnlop_gd_3" style="background: #4c5eaf;"> 11B3</button>
				</td>
				<td>
					<button id="btnlop_gd_4" style="background: #4c5eaf;"> 11B3</button>
				</td>
			</tr>
			<tr id="center_table_lopgd_row_2">
				<td>
					<button id="btnlop_gd_5" style="background: #4c5eaf;"> 11B3</button>
				</td>
				<td>
					<button id="btnlop_gd_6" style="background: #4c5eaf;"> 11B3</button>
				</td>
				<td>
					<button id="btnlop_gd_7" style="background: #4c5eaf;"> 11B3</button>
				</td>
				<td>
					<button id="btnlop_gd_8" style="background: #4c5eaf;"> 11B3</button>
				</td>
			</tr>
		</table>
		<!-- END: teaching_class -->

		<!-- BEGIN: manage_class -->
		<label>Quản lý lớp</label><br>
		<table id="center_table_dslop" style="text-align: center;width: 100%;border: 2px solid black; margin: 10px 0 0 10px;">
			<!-- BEGIN: loop -->
			<div style="display: inline; margin: 0 10px 0 10px;">
				<button id="btnlop_1" style="background: #4caf9d;">{row.ten_lop}</button>
			</div>
			<!-- END: loop -->
		</table>
		<!-- END: manage_class -->

	</div>
	<div id="bottom">

	</div>
</div>
<!-- END: main -->