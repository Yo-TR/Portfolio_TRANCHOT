
			formulaire['type'] = $('.form-item').attr('data-Type');
			$('.form-item').each(function(index, el) {
				formulaire[this.name] = $(this).val();
			});