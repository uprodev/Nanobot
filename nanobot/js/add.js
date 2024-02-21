jQuery(document).ready(function($) {


	$('a.more_posts2').click(function(e){
		e.preventDefault()
		let _this = $(this);
		let current = parseInt(_this.attr('data-current'))
		let data = {
			'action': 'more_posts',
			'query': _this.attr('data-param-posts'),
			'page': this_page,
			'current' :current,
			'max' : _this.attr('data-max-pages'),
			'base': _this.attr('data-base'),
		}
		$.ajax({
			url: '/wp-admin/admin-ajax.php',
			data: data,
			type: 'POST',
			beforeSend: function( xhr){
				$('body').addClass('loading');
			},
			success:function(data){
				if (data != 0) {
					$('body').removeClass('loading');
					$('ul.posts-list').append(data.posts);
					$('.pagination-wrap').html(data.pagenavi);
					_this.attr('data-current', current+1);

					this_page++;



					if (this_page == parseInt(_this.attr('data-max-pages'))) {
						_this.remove();
					}

					if(window.adaptiveFontSizeHandler) window.adaptiveFontSizeHandler();
					if(window.bgDecors) {
						if(window.bgDecors.length) window.bgDecors.forEach(f => f());
					}
				} else {
			 		_this.remove();
				}
			}
		});

	})

	$(window).scroll(function(){
		let _this = $('a.more_posts0');

		if(_this.length > 0){

			if(window.innerWidth > 767) bottomOffset = 2000;
			else bottomOffset = 3000;

			let data = {
				'action': 'more_posts',
				'query': _this.attr('data-param-posts'),
				'page': this_page,
			}

			if( $(document).scrollTop() > ($(document).height() - bottomOffset) && !$('body').hasClass('loading')){
				$.ajax({
					url: '/wp-admin/admin-ajax.php',
					data: data,
					type: 'POST',
					beforeSend: function( xhr){
						$('body').addClass('loading');
					},
					success:function(data){
						if (data != 0) {
							$('body').removeClass('loading');
							$('ul.posts-list').append(data);
							this_page++;
							if (this_page == _this.attr('data-max-pages')) {
								_this.remove();
							}

							if(window.adaptiveFontSizeHandler) window.adaptiveFontSizeHandler();
							if(window.bgDecors) {
								if(window.bgDecors.length) window.bgDecors.forEach(f => f());
							}
						} else {
							_this.remove();
						}
					}
				});
			}

		}

	});




});
