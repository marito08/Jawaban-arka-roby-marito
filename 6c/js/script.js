$(document).ready(function(){
	$(".editModal").on("click", function(){
	var id = $(this).attr("id");
	console.log(id);
		$.ajax({
			url: "detail.php",
			type:"GET",
			data: {id_product: id,},
			success:function(ajaxData){
				$("#editdataModal").html(ajaxData);
				$("#editdataModal").modal('show',{backdrop: 'true'});
			}
		})
	})
})