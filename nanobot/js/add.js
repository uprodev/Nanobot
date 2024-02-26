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


	$(document).on('change', 'input[name="category"]', function(){

		$.ajax({
			url: "/wp-admin/admin-ajax.php",
			data: $("#filter_posts_case_cat").serialize(),
			type: 'POST',
			beforeSend: function (xhr) {},
			success: function (data) {
				if($('.more_posts_case_cat_wrap').length > 0) $('.more_posts_case_cat_wrap').remove();
				$("#response_posts_case_cat").html(data);
			},
		});
		return false;
	});


	$(document).on('click', '.more_posts_case_cat', function(e){
		e.preventDefault();
		let _this = $(this); 

		let data = {
			'action': 'more_posts_case_cat',
			'query': _this.attr('data-param-posts'),
			'page': this_page,
		}

		const parent = e.target.closest('.filter-list__foter');
		parent && parent?.classList.add('_loader');

		$.ajax({
			url: '/wp-admin/admin-ajax.php',
			data: data,
			type: 'POST',
			success:function(data){
				if (data) {
					$('#response_posts_case_cat .filter-list__body').append(data);

					this_page++;                      
					if (this_page == _this.attr('data-max-pages')) {
						_this.remove();              
					}
				} else {                              
					_this.remove();                    
				}
			},
			complete: function() {
				parent && parent?.classList.remove('_loader');
			}
		});
	});



});
