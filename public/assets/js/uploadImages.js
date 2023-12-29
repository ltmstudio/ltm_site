//  <script src="/jquery.js"></script> 
$("#js-file").change(function(){
	if (window.FormData === undefined) {
		alert('В вашем браузере загрузка файлов не поддерживается');
	} else {
		var formData = new FormData();
		$.each($("#js-file")[0].files, function(key, input){
			formData.append('images[]', input);
		});
 
		$.ajax({
            headers: {
                'X-CSRF-TOKEN': $(this).attr('csrf')
            },
			type: 'post',
			url: '/ru/ajax-tmp',
			cache: false,
			contentType: false,
			processData: false,
			data: formData,
			dataType : 'json',
			success: function(msg){
				msg.forEach(function(row) {
					$('.img-list').append('<div class="img-item"><img src="/storage/'+row+'"><a herf="#" onclick="remove_img(this); return false;">x</a><input type="hidden" name="imagesss[]" value="'+row+'"></div>');
				});
				$("#js-file").val('');
                console.log(msg); 
			}
		});
	}
});
 
/* Удаление загруженной картинки */
function remove_img(target){
	$(target).parent().remove();
}
