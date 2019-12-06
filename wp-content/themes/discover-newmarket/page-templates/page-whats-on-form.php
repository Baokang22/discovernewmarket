<?php /*Template Name: Whats On - Form */ get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

	<section class="content-generic">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<form id="whatson" class="whatson-form">
				<input type="text" class="full" name="eventname" id="" placeholder="Event name *" required>
				<input type="date" class="half" name="start-date" id="" placeholder="Start date *" required>
				<input type="date" class="half" name="end-date" id="" placeholder="End date *" required>
				<input type="text" class="half" name="location" id="" placeholder="Location *" required>
				<input type="tel" class="half" name="phone" id="" placeholder="Phone Number">
				<input type="email" class="half" name="email" id="" placeholder="Email *" required>
				<input type="text" class="half" name="website" id="" placeholder="Website">
				<textarea name="description" placeholder="Event description" rows="4" required></textarea>
				<input type="file" id="fileinput" accept=".png,.jpg,jpeg" name="file" required>
				<p style="text-align: center; margin-bottom: 20px;">For better quality please upload images on landscape orientation only.</p>
				<button type="submit">Submit</button>
			</form>
			<div class="form-message">
			</div>
		</div>
	</section>

	<script>
		(function($){
			$('#whatson').on('submit', function(e){
				e.preventDefault();
				var formData = new FormData();
				var dataForm = $(this).serializeArray();
				$.each(dataForm, function(key, input){
					formData.append(input.name, input.value);
				});
				var fileForm = $('#fileinput').prop('files')[0];
    			formData.append('file', fileForm);
				formData.append('action', 'add_event');

				$('#whatson button').text('Processing');
				$.ajax({
					type: "POST",
					url: "<?php echo admin_url('admin-ajax.php'); ?>",
					contentType: false,
					processData: false,
					data: formData,
					error: function(jqXHR, textStatus, errorThrown){                                        
						//console.error("The following error occured: " + textStatus, errorThrown);                         
						$('.form-message').html('');
						$('.form-message').append('<div class="message-error">An error occured submiting your event, please try again later.</div>');
					},
					success: function(data) {                                       
						//console.log("Hooray, it worked! - "+data);
						$('#whatson').trigger("reset");
						$('.form-message').html('');
						$('.form-message').append('<div class="message-success">Event submited with success.</div>');
					},
					complete: function() {
						$('#whatson button').text('Submit');
					}
				});
			});
		})(jQuery);
	</script>

	<!-- Latest News -->
	<?php get_template_part( 'inc/carousels/news'); ?>
	<!-- Latest News -->
	<!-- Talk of the Town -->
	<?php get_template_part( 'inc/feeds/social-feed'); ?>
	<!-- Talk of the Town -->
<?php endwhile; ?>
<?php get_footer(); ?>