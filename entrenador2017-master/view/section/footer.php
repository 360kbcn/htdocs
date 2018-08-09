		<footer class="footer">
		  <div class="col-md-8">
		    <p class="text-center">Práctica del módulo 3 del curso de desarrollo de aplicaciones web 2017</p>
		  </div>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript">
			var nextinput = 1;

			function AddInput(){

			nextinput++;

			var camp;

			camp = '<div class="form-group col-lg-12"><div class="input-group"><input type="text" class="form-control" name="resposta_' + nextinput + '"><span class="input-group-addon"><input type="radio" name="resposta_ok" value="' + nextinput + '"></span></div></div>';

			$("#inputs").append(camp);
			}
			</script>
	</body>
</html>

