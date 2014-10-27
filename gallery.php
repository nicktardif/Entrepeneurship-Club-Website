<html>
	<head>
		<script>
			window.fbAsyncInit = function() {
				FB.init({
					appId      : '1552434401656292',
					xfbml      : true,
					version    : 'v2.1'
				});
			};

			(function(d, s, id){
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) {return;}
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));

			function PrintPhotoResponse() {
				FB.api(
					"/{10150523830803070}",
					function (response) {
						if (response && !response.error) {
							console.log(response);
						}
						else {
							console.log("Response was bad");
						}
					}
				
				);
			}
		</script>
	</head>

	<body>
		<button id="button1" onclick="PrintPhotoResponse()">Push Me</button>
	</body>
</html>
