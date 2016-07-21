$('textarea').autoResize();
var vis = false;
function showDiv() { /*=====показать форму добавления комментария====*/
	if (!vis) {
		$('#comment').fadeIn(400);
		vis = true;
	} else {
		$('#comment').fadeOut(400);
		vis = false;
	}
}

var visCom = false;
function showCom() { /*====показать комментарии статьи====*/
	if (!visCom) {
		$('.block_comments').fadeIn(400);
		visCom = true;
	} else {
		$('.block_comments').fadeOut(400);
		visCom = false;
	}
}

var visFormCom = false;
function editCom(ic) {  /*=====показываем форму редактирования комментария====*/
	//alert(ic);
	if (!visFormCom) {
		$("span[ic="+ic+"]").hide();
		$(".edit_comment_form[ic="+ic+"]").fadeIn(400);

		visFormCom = true;
	} else {
		$(".edit_comment_form[ic="+ic+"]").hide();
		$("span[ic="+ic+"]").fadeIn(400);
		visFormCom = false;
	}
};

$('.saveChange').on('click', function() {
	var id_c = $(this).attr('ic');
	var edittext = $(".change_text[individual="+id_c+"]").val();
	if (edittext !== '') {
		$.post('../../i_want_to_upd_comment',
			   {id: id_c, text: edittext}).done(function(data) {
			//alert(data);
			if (data === "okay") {
				$('.answer[inum='+id_c+']').hide();
				$('.answer[inum='+id_c+']').html('');
				$('.answer[inum='+id_c+']').html("<i class=\"link_obl\">Редактирование завершено</i>");
				$('.answer[inum='+id_c+']').fadeIn(500);
				setTimeout(function() {
					$('.answer[inum='+id_c+']').fadeOut(500);
				},1000);
				$(".edit_comment_form[ic="+id_c+"]").hide();
				//$("span[ic="+id_c+"]").fadeIn(400);
				setTimeout(function() {
					document.location.reload();  
				}, 1000);
			}
			if (data === "dont") alert("Ошибка. Попробуйте позже");
		})
	}
})

function del_com(ic) { /*=====удаляем комментарий====*/
	//alert(ic);
	if (confirm("Вы хотите удалить комментарий?")) {
		$.post('../../i_want_to_del_comment',
			   {id: ic}).done(function(data) {
			//alert(data);
			if (data === "okay") {
				document.location.reload();

			}
			if (data === "dont") alert("Ошибка. Попробуйте позже");
		})
	}
}

$('#send_comment').on('click', function() {
	var id_u = $('.comment_text').attr('i_u');
	var comment = $('.comment_text').val();
	var address = location.href;
	//var id = address.match(/\d+/);
	var id = address.slice(address.search(/\d+/));
	if (comment !== '') {
		$.ajax({
			url: '../../i_want_to_add_comment',
			type: 'post',
			data: {comment: comment, art: id, id_u: id_u}
		}).done(function(data) {
			//data = data.substr(data.length-4,4);
			//alert(data);
			if (data === "okay") {
				document.location.reload();
			}
			if (data === "dont") alert("Ошибка. Попробуйте позже");
		})
	}
})