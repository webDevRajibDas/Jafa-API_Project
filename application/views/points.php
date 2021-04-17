<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ＪＡＦＡ（ダブルポイント）</title>
	<link rel="stylesheet" type="text/css" href="resources/bootstrap/dist/css/bootstrap.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.css">
	<style type="text/css">
		table th{
			text-align: center;
		}
		.editable_field{
			border: 0;
			width: 100%;
			padding: 3px;
		}
		input{
			background-color: transparent;
		}
		.table-condensed{
			width: 215px;
		}
		.table th, .table td {
		    padding: 2px 5px; 
		}
		.table-striped tbody tr:nth-of-type(odd) {
		    background-color: #CCFFFF;
		}
		.modal-backdrop {
		   background-color: transparent;
		}
		.member_accounts_detail {
		  	position: fixed;
		  	/*left: auto; */
		  	right: 0px !important;
		 	bottom: 0;
		  	top: auto;
		}
		@media (min-width: 992px){
			.modal-lg {
			    max-width: 1000px;
			    /*position: fixed;*/
			    bottom: 0px;

			}
		}
		
	</style>
</head>
<body">
	<div class="container-fluid" style="margin-top: 20px;">
		<div class="row">
			<div class="col-md-4" style="font-size: 32px;">
				<h3>総括表（ジャコス集計）メイン画面</h3>
			</div>
			
			<div class="col-md-8" style="font-size: 28px;">
				<a href="<?= base_url() ?>" class="btn btn-warning btn-lg float-right">戻る</a>
				<!-- <a href="member_margine" class="btn btn-success btn-lg float-right" style="margin-right: 10px;">加盟企業別</a> -->
				<!-- <a href="shop_margine" class="btn btn-danger btn-lg float-right" style="margin-right: 10px;">ショップ別</a> -->
				<!-- <a href="shop_margine" class="btn btn-primary btn-lg float-right" style="margin-right: 10px;">会員別</a> -->
				<!-- <a href="purchase" class="btn btn-success btn-lg float-right" style="margin-right: 10px;">購入履歴</a> -->
				
				<button type="button" class="btn btn-primary btn-lg float-right" data-toggle="modal" data-target="#size_unit" style="margin-right: 10px;">単位</button>
				<a href="setting_point_sharing" class="btn btn-secondary btn-lg float-right" style="margin-right: 10px;"><i class="fa fa-cog"></i> 設定点</a>
				<a href="kamitein_list" class="btn btn-info btn-lg float-right" style="margin-right: 10px;">加盟店REFARAL</a>
				<a href="admin_company_point" class="btn btn-info btn-lg float-right" style="margin-right: 10px;">加盟機関による</a>
				<a href="upload_referal_fee" class="btn btn-info btn-lg float-right" style="margin-right: 10px; ">紹介料をアップロード</a>
				<!-- <a href="upload_permanent_referal_fee" class="btn btn-info btn-lg float-right" style="margin-right: 10px;">Upload Permanent Referal Fee</a> -->
				
			</div>
			

			<!-- <div class="col-md-6">
				<h4>ポイント計算書　一覧表</h4>
				
			</div>
			<div class="col-md-3">
				<a href="#" class="btn btn-link" style="font-size: 24px;">→支払</a>
			</div>
			<div class="col-md-3">
				<div class="float-right" style="font-size: 26px;">
					
					<button  onclick="$('input#select_month_datepicker').focus()" style="background-color: #FFC000; border: 2px solid green;" class="btn btn-default btn-sm">期間</button>
					: <span id="show_dateSetting">
						<?php echo date('m月'). date('1日').'～'.date('m月末日'); ?>
					</span>

					<input style="margin-top: 20px; position: fixed; border:none; width: 1px; height: 1px;"  id="select_month_datepicker">

				</div>
			</div> -->
			<div class="col-md-12" style="margin-top: 20px;">
				<table class="table table-bordered table-striped" style="font-size: 26px; border: 3px solid blue;">
					
					<thead>
						<tr>
							<th colspan="3">
								<h4 style="text-align: left;">ポイント計算書　一覧表</h4>
							</th>
							<th colspan="2" style="text-align: left;border-left: 6px double black; border-right: 0;">
								<a href="#" class="btn btn-link" style="font-size: 24px; text-align: left;">→支払</a>
							</th>
							<th colspan="6" style="border-left: 0;padding-top: 0">
								<div class="float-right" style="font-size: 26px; padding-bottom: 10px;">
									
									<button  onclick="$('input#select_month_datepicker').focus()" style="background-color: #FFC000; border: 2px solid green;" class="btn btn-default btn-sm">期間</button>
									: <span id="show_dateSetting">
										<?php echo date('m月'). date('1日').'～'.date('m月末日'); ?>
									</span>
 
									<input style="margin-top: 20px; position: fixed; border:none; width: 1px; height: 1px;"  id="select_month_datepicker">
 
								</div>
							</th>
						</tr>
						<tr>
							<th width="10%" style="vertical-align: middle;" rowspan="2">加盟企業</th>
							<th style="vertical-align: middle;" rowspan="2">商品売上金額</th>
							<th style="border-right: 6px double black; vertical-align: middle;" rowspan="2">チャリン<sup>２</sup></th>
							<th colspan="2">加盟企業</th>
							<th colspan="2">会員計</th>
							<th colspan="2" style="border-right: 6px double black;">支払計</th>
							<th colspan="2">当社粗利</th>
							
						</tr>
						<tr>
							<th>手数料率</th>
							<th>手数料</th>
							<th>手数料率</th>
							<th>手数料</th>
							<th>手数料率</th>
							<th style="border-right: 6px double black;">手数料</th>
							<th>手数料率</th>
							<th>手数料</th>
						</tr>						
					</thead>
					<tbody id="member_company_list">
						<th colspan="11">
							<img src="<?= base_url() ?>resource/img/ajax/ajax-loader.gif">
						</th>
					</tbody>
				</table>  
			</div>		   	
		</div>

		<!-- Card Stared -->
		<div class="card col-md-5 col-sm-12" id="product_case_message" style="background-color: #DAEEF3; border: 2px solid #486994; border-radius: 10px; position: fixed; max-width: 500px;
right: 10px;
bottom: 10px;
padding: 4px;">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12">
						<p style="font-size: 20px;">１、全体の売上と支払いの計算をしています。　
						</p>
						<p style="font-size: 20px;">
						２、「期間」を押すと、期間設定ができます。　
						</p>
						<p style="font-size: 20px;">
						３、加盟企業を押すと、明細が見られます。　
						</p>	
						<button id="close_case_message" style="margin: 0px 200px; background-color: #FFFF99; border: 2px solid green" id="coo" class="btn btn-default btn-lg">確認</button>

					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- Card Ended  -->
		<div class="modal fade member_accounts_detail" id="member_accounts_detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content"  style="background: #FFFF99; min-height: 600px; width: 1250px;">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">明細画面。。。</h5>
					<button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
					戻る
					</button>
				</div>
				<div class="modal-body">
					<!-- 明細画面。。。 -->
					<table class="table table-striped" id="company_member_details" style="background-color: white">
						<tr>
							<th colspan="6">
								<img src="<?= base_url() ?>resource/img/ajax/ajax-loader.gif">
							</th>
						</tr>
					</table>
				</div>
		    </div>
		  </div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="size_unit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 60px;">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <!-- <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">戻る</span>
		        </button>
		      </div> -->
		      <div class="modal-body">
				<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">単位一覧</a>
					<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">追加</a>
					
				</div>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" style="max-height: 300px; overflow: auto; ">
						<table class="table table-bordered">
							<thead>
								<tr class="bg-primary">
									<th>#</th>
									<td>単位</td>
								</tr>
							</thead>
							<tbody id="product_size_list" style="">
								
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						<form class="form-horizontal">
							<fieldset>
								<!-- Text input-->
								<div class="form-group" style="padding: 0;">
									<label class="control-label" for="textinput">単位</label>  
									<!-- <div class="col-md-9"> -->
										<input id="unit_name" name="unit_name" type="text" placeholder="" class="form-control input-md">
										<span class="help-block"></span>  
									<!-- </div> -->
								</div>
								<button type="button" class="btn btn-primary" id="save_unit">保存</button>

							</fieldset>
						</form>
					</div>
					
				</div>
				
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">戻る</button>
		        
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<input type="hidden" id="base_url" value="<?= base_url() ?>" name="">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
	

	
	<script>

		
		jQuery(document).ready(function($) {
			$("#barcode").click(function(event) {
				$("#barcode").val('');
			});

			$("#save_unit").click(function(event) {
				event.preventDefault();

				var base_url = $("#base_url").val();
				var unit_name = $("#unit_name").val();
				$.ajax({
					url: base_url+'main_controller/save_product_size_unit',
					type: 'POST',
					data: {unit_name: unit_name}
				})
				.done(function(response) {
					var resData = JSON.parse(response);
					if (resData.success == 1) {
						get_product_unit_size()
						$("#unit_name").val('');
						console.log("success");
						console.log(resData);
					} else {
						$("#unit_name").val('');
						console.log("success");
						console.log(resData);
					}
					
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
				
			});
			get_product_unit_size()
			function get_product_unit_size() {
				var base_url = $("#base_url").val();
				$.get(base_url+'main_controller/get_product_size', function(data) {
					var resData = JSON.parse(data);
					var htmlData = "";
					for (var i = 0; i < resData.length; i++) {
						htmlData += "<tr>";
							htmlData += "<td>"+(i+1)+"</td>";
							htmlData += "<td>"+resData[i].unit_name+"</td>";
						htmlData += "<tr>";
					}
					$("#product_size_list").html(htmlData);					
				});
				
			}


			function addCommas(nStr)
			{
			    nStr += '';
			    x = nStr.split('.');
			    x1 = x[0];
			    x2 = x.length > 1 ? '.' + x[1] : '';
			    var rgx = /(\d+)(\d{3})/;
			    while (rgx.test(x1)) {
			        x1 = x1.replace(rgx, '$1' + ',' + '$2');
			    }
			    return x1 + x2;
			}

			// comma input
			$(document).on("keyup","input.comma", function(){
			  // skip for arrow keys
			  if(event.which >= 37 && event.which <= 40) return;
			  // format number
			  $(this).val(function(index, value) {
				return value
				.replace(/\D/g, "")
				.replace(/\B(?=(\d{3})+(?!\d))/g, ",")
				;
			  });
			});
		
			$.fn.datepicker.dates['en'] = {
			        days: ["日", "月", "火", "水", "木", "金", "土"],
			        daysShort: ["日", "月", "火", "水", "木", "金", "土"],
			        daysMin: ["日", "月", "火", "水", "木", "金", "土"],
			        months: ["１月", "２月", "３月", "４月", "５月", "６月", "７月", "８月", "９月", "１０月", "１１月  ", "１２月"],
			        monthsShort: ["１月", "２月", "３月", "４月", "５月", "６月", "７月", "８月", "９月", "１０月", "１１月 ", "１２月"],
			        today: "Today",
			        clear: "Clear",
			        format: "mm/dd/yyyy",
			        titleFormat: "MM yyyy年", /* Leverages same syntax as 'format' */
			        weekStart: 0
			    };
			$('input#select_month_datepicker').datepicker({
				format: 'yyyy年mm月',
				viewMode: "months",
				minViewMode: "months",
				autoclose: true,
				todayHighlight: false,
				orientation: "auto",
			});

			$("#select_month_datepicker").change(function(event) {
				var fuldate = $(this).val();
				var yearRes = fuldate.split("年");
				var monthRes = yearRes[1].split("月");
				$("#show_dateSetting").text(monthRes[0]+'月1日～'+monthRes[0]+'月末日');
				
			});

			$(document).delegate('.editable_field', 'change', function(event) {
				event.preventDefault();
				var base_url = $("#base_url").val();
				var member_com_id = $(this).attr('data-attr-member-id');
				var field_name = $(this).attr('data-attr-member-field_name');
				var percentage = $(this).val();
				var total_val = 75;
				var member_parcentage = 0;
				var com_parcentage = 0;
				if (field_name == 'com_mar') {
					com_parcentage = percentage;
					member_parcentage = (total_val - percentage);
				}else{
					member_parcentage = percentage
					com_parcentage = (total_val - percentage);;
				}
				// alert(com_parcentage);
				// alert(member_parcentage);
				// console.log(member_com_id);
				// console.log(field_name);
				// return false;
				if (member_com_id !=='') {
					
					if (member_com_id!="") {
						$.ajax({
							url: base_url+'main_controller/save_percentage',
							type: 'POST',
							data: {company_id: member_com_id, com_mar_percentage:com_parcentage, member_mar_percentage:member_parcentage},
						})
						.done(function(data) {
							get_all_member_company()
							console.log("success");
						})
						.fail(function() {
							console.log("error");
						})
						.always(function() {
							console.log("complete");
						});
					}
				}
			});



			function get_all_member_company() {
				var base_url = $("#base_url").val();
				$.get(base_url+'main_controller/get_company_summary', function(data) {
					var response = JSON.parse(data);
					
					var tableHtml = '';
					if (response.all_company.length>0) {
						var total_sales_amount = 0;
						var item_sales_amount = 0;
						var total_charin = 0;
						var com_total = 0;
						var member_total = 0;
						var com_member = 0;
						var chalin_two = 0;
						var service_total = 0;
						for (var i = 0; i < response.all_company.length; i++) {
							// console.log();
							// return false;
							// console.log(response.all_company[i].major_company);
							item_sales_amount = response.all_company[i].item_sales_amount;
							chalin_two = response.all_company[i].chalin_two;
							if (item_sales_amount==null) {
								item_sales_amount = 0;
							}
							if (chalin_two ==null) {
								chalin_two = 0;
							}
							var com_mar = 75;
							var member_mar = 0;
							if (response.all_company[i].com_mar > 0) {
								com_mar = response.all_company[i].com_mar;
								member_mar = response.all_company[i].member_mar;
							}
							// if (response.all_company[i].com_mar > 0 && response.all_company[i].member_mar == 0) {
							// 	member_mar = (75-com_mar);
							// }

							// member_mar = 75-com_mar;

							var service_amount = ((chalin_two*25)/100);
							service_total += service_amount;
							if (response.all_company[i].major_company == 0) {
								
								total_sales_amount += parseInt(item_sales_amount);
								total_charin += parseInt(chalin_two);
								com_total += ((parseInt(chalin_two)*com_mar)/100);
								member_total += ((parseInt(chalin_two)*member_mar)/100);
								com_member += ((parseInt(chalin_two)*(parseInt(com_mar)+parseInt(member_mar)))/100);
								tableHtml += '<tr>';
								
								tableHtml += '<td><a class="company_member_list"  style="text-decoration: underline;" href="'+response.all_company[i].user_id+'">'+response.all_company[i].company_name+'</a></td>';

								tableHtml += '<td class="text-right">'+addCommas(item_sales_amount)+'</td>'
								tableHtml += '<td style="border-right: 6px double black" class="text-right">'+addCommas(chalin_two)+'</td>'
								tableHtml += '<td class="text-right"><div style="width:100px; padding:0;" class="col-sm-11 float-left"><input type="text" data-attr-member-id="'+response.all_company[i].user_id+'" data-attr-member-field_name="com_mar" id="a_purcheger" maxlength="3" name="a_purcheger" class="text-right editable_field member_chalin_two_'+response.all_company[i].user_id+'" value="'+com_mar+'"></div><div class="col-sm-1 float-left text-left" style="padding-left:0;padding-top:3px;">%</div></td>';
								tableHtml += '<td class="text-right">'+Math.floor(((chalin_two*com_mar)/100)).toLocaleString('en')+'</td>';
								tableHtml += '<td class="text-right"><div style="width:100px; padding:0;" class="col-sm-11 float-left"><input type="text" data-attr-member-id="'+response.all_company[i].user_id+'" data-attr-member-field_name="member_mar" id="a_purcheger" maxlength="3" name="a_purcheger" class="text-right editable_field member_chalin_two_'+response.all_company[i].user_id+'" value="'+member_mar+'"></div><div class="col-sm-1 float-left text-left" style="padding-left:0;padding-top:3px;">%</div></td>';
								tableHtml += '<td class="text-right">'+Math.floor(((chalin_two*member_mar)/100)).toLocaleString('en')+'</td>';
								tableHtml += '<td class="text-right">'+(parseInt(com_mar)+parseInt(member_mar))+'%</td>';
								tableHtml += '<td class="text-right">'+Math.floor(((chalin_two*((parseInt(com_mar)+parseInt(member_mar))))/100)).toLocaleString('en')+'</td>';
								tableHtml += '<td style="border-left: 6px double black" class="text-right">'+(25)+'%</td>';
								tableHtml += '<td class="text-right">'+Math.floor(service_amount)+'</td>';
								tableHtml += '</tr>';
							}else{
								total_sales_amount += parseInt(response.all_company[i].item_sales_amount);
								total_charin += parseInt(response.all_company[i].chalin_two);
								var jacos_count = ((response.all_company[i].chalin_two*50)/100);
								
								com_total += jacos_count;
								com_member += jacos_count;
								// console.log(total_25);
								// total_25 += ((response.jacos.chalin_two*25)/100);;

								var total_25_jacos50 = (com_total+jacos_count);
								tableHtml += '<tr class="bg-primary text-light">';

								tableHtml += '<td><a class="text-light company_member_list"  style="text-decoration: underline;" href="'+response.all_company[i].user_id+'">'+response.all_company[i].company_name+'</a></td>';

								tableHtml += '<td class="text-right">'+addCommas(item_sales_amount)+'</td>'
								tableHtml += '<td style="border-right: 6px double black" class="text-right">'+addCommas(chalin_two)+'</td>'
								tableHtml += '<td class="text-right"><div style="width:100px; padding:0;" class="col-sm-11 float-left"><input type="text" data-attr-member-id="'+response.all_company[i].user_id+'" data-attr-member-field_name="com_mar" id="a_purcheger" maxlength="3" name="a_purcheger" class="text-right text-light editable_field member_chalin_two_'+response.all_company[i].user_id+'" value="'+com_mar+'"></div><div class="col-sm-1 float-left text-left" style="padding-left:0;padding-top:3px;">%</div></td>';
								tableHtml += '<td class="text-right">'+Math.floor(((chalin_two*com_mar)/100)).toLocaleString('en')+'</td>';
								tableHtml += '<td class="text-right"><div style="width:100px; padding:0;" class="col-sm-11 float-left"><input type="text" data-attr-member-id="'+response.all_company[i].user_id+'" data-attr-member-field_name="member_mar" id="a_purcheger" maxlength="3" name="a_purcheger" class="text-right text-light editable_field member_chalin_two_'+response.all_company[i].user_id+'" value="'+member_mar+'"></div><div class="col-sm-1 float-left text-left" style="padding-left:0;padding-top:3px;">%</div></td>';
								tableHtml += '<td class="text-right">'+Math.floor(((chalin_two*member_mar)/100)).toLocaleString('en')+'</td>';
								tableHtml += '<td class="text-right">'+(parseInt(com_mar)+parseInt(member_mar))+'%</td>';
								tableHtml += '<td class="text-right">'+Math.floor(((chalin_two*((parseInt(com_mar)+parseInt(member_mar))))/100)).toLocaleString('en')+'</td>';
								tableHtml += '<td style="border-left: 6px double black" class="text-right">'+(100-(parseInt(com_mar)+parseInt(member_mar)))+'%</td>';
								tableHtml += '<td class="text-right">'+Math.floor(service_amount)+'</td>';
								tableHtml += '</tr>';
							}						
						}

						
						tableHtml += '<tr style="background-color: yellow;"><th>計</th><th class="text-right">'+total_sales_amount.toLocaleString('en')+'</th>	<th style="border-right: 6px double black" class="text-right" id="all_purch_total">'+Math.floor(total_charin).toLocaleString('en')+'</th>';
						tableHtml += '<th>&nbsp</th>';
						tableHtml += '<th class="text-right">'+Math.floor(com_total).toLocaleString('en')+'</th>';
						tableHtml += '<th>&nbsp</th>';
						tableHtml += '<th class="text-right">'+Math.floor(member_total).toLocaleString('en')+'</th>';
						tableHtml += '<th>&nbsp</th>';
						
						
						tableHtml += '<th style="border-right: 6px double black" class="text-right">'+Math.floor(com_member).toLocaleString('en')+'</th>';
						
						tableHtml += '<th></th>';
						tableHtml += '<th class="text-right">'+Math.floor(service_total).toLocaleString('en')+'</th>';
						tableHtml += '</tr>';
						
						$( "#member_company_list" ).html( tableHtml );
					}
					
				});
			}

			
			get_all_member_company()

			$(document).mouseup(function (e){
				var hide_enter_outside = $("#product_case_message");
				if (!hide_enter_outside.is(e.target) && hide_enter_outside.has(e.target).length === 0)
				{
				    hide_enter_outside.removeClass('d-block').addClass('d-none');
				}
			});

			$("#close_case_message").click(function(event) {
				event.preventDefault();
				$("#product_case_message").removeClass('d-block').addClass('d-none'); 
			});

			$(document).on("click",".company_member_list",function(event) {
				event.preventDefault()
				var user_id = $(this).attr('href');
				var company_name = $(this).text();

				var base_url = $("#base_url").val();
				$('#member_accounts_detail').modal();
				$.ajax({
					url: base_url+'main_controller/get_company_member',
					type: 'POST',
					data: {user_id: user_id},
				})
				.done(function(data) {
					var response = JSON.parse(data);
					console.log(response.company_details);	
					var com_mar = parseInt(response.company_details.com_mar);
					var member_mar = parseInt(response.company_details.member_mar);
					var total_commition = com_mar+member_mar;
					var service_charge = 100-total_commition;

					var htmlData = "";
					if (response.members.length>0) {
						htmlData += '<thead>';
						htmlData += '<tr>';
							htmlData += '<th width="5%">加盟企業</th>';
							htmlData += '<th>会員</th>';
							htmlData += '<th>商品売上金額</th>';
							htmlData += '<th style="border-right: 6px double black">チャリン<sup>２</sup></th>';
							htmlData += '<th>加盟企業 ('+com_mar+'%)</th>';
							htmlData += '<th>会員計 ('+member_mar+'%)</th>';
							htmlData += '<th style="border-right: 6px double black">支払計 ('+(total_commition)+'%)</th>';
							htmlData += '<th>当社粗利 ('+service_charge+'%)</th>';
						htmlData += '</tr>';
						htmlData += '</thead>';
						htmlData += '<tbody>'
						htmlData += '<tr>'
							htmlData += '<td style="vertical-align: middle; text-align: center;" width="30%" rowspan="'+(response.members.length+1)+'">'+response.company_details.fullname+'</td>'
						htmlData += '</tr>'
						var total_charin = 0;
						var total_amount = 0;
						var total_25 = 0;
						var total_50 = 0;
						var total_75 = 0;
						var total_service_charge = 0;
						for (var i = 0; i< response.members.length; i++) {
							// console.log(response[i].total_salse_amount);
							var item_sales_amount = response.members[i].total_salse_amount;
							if (item_sales_amount==null) {
								item_sales_amount = 0;
							}
							var chalin_two = response.members[i].chalin_two;
							if (chalin_two==null) {
								chalin_two = 0;
							}
							total_25 += ((chalin_two*com_mar)/100);
							total_50 += ((chalin_two*member_mar)/100);
							total_75 += (chalin_two*total_commition)/100;
							total_charin += parseInt(chalin_two);
							total_amount += parseInt(item_sales_amount);
							total_service_charge += (chalin_two*service_charge)/100;
							htmlData += '<tr>';
								htmlData += '<td><a class="member_purchase_list" href="'+base_url+'purchase_list/'+response.members[i].user_id+'">'+response.members[i].fullname+'</a></td>';
								htmlData += '<td style="text-align: right;">'+parseInt(item_sales_amount).toLocaleString('en')+'</td>';
								htmlData += '<td style="text-align: right; border-right: 6px double black; text-align:right;">'+chalin_two+'</td>';
								htmlData += '<td style="text-align: right">'+((chalin_two*com_mar)/100)+'</td>';
								htmlData += '<td style="text-align: right">'+((chalin_two*member_mar)/100)+'</td>';
								htmlData += '<td style="text-align: right; border-right: 6px double black">'+((chalin_two*total_commition)/100)+'</td>';
								htmlData += '<td style="text-align: right">'+((chalin_two*service_charge)/100)+'</td>';
							htmlData += '</tr>';
						}
						htmlData += '<tr style="background-color: yellow;"><th>計</th><th class="text-right"></th><th class="text-right">'+total_amount.toLocaleString('en')+'</th>	<th style="border-right: 6px double black" class="text-right" id="">'+total_charin+'</th><th class="text-right">'+total_25.toFixed(2)+'</th><th class="text-right">'+total_50.toFixed(2)+'</th><th style="border-right: 6px double black" class="text-right">'+total_75.toFixed(2)+'</th><th class="text-right">'+total_service_charge.toFixed(2)+'</th>						</tr>';
					}else{
						htmlData += '<tr>';
							htmlData += '<td><center><h3>会員は利用できません。</h3><center></td>';
						htmlData += '</tr>';
					}
					
					htmlData += '</tbody>'
					
					$("#company_member_details").html(htmlData)
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
				
			});
			$(document).on("click",".member_purchase_list",function(event) {
				event.preventDefault()
				var url = $(this).attr('href');
				window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=20,width=1200,height=700");
			});
			
		});
	</script>
</body>
</html>