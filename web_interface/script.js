$( document ).ready(function() {
    console.log( "ready!" );

		$.fn.redraw = function() {
			return this.hide( 0, function() {
					$( this ).show();
			} );
		}

		function exec_command(command_val) {
			$.ajax({
					url: 'http://localhost/command.php',
					type: 'GET',
					data: { val: command_val },
					success: function(data) {
						console.log("Pushed command: " + new_val);
					}
			 });
		}

		var slider = document.getElementById("interval_slider");
		var output = document.getElementById("output");
		output.innerHTML = slider.value;

		slider.oninput = function() {
		    output.innerHTML = this.value;
		}

		$('#interval_slider').slider({
        range: "min",
        min: 0,
        max: 100,
        value: $("span", this).text(),
				disabled: true,
    });

		var auto = false;

		$("#auto").click(function() {
			auto = !auto;
			$("#auto").html( auto == true ? "Auto: On" : "Auto: Off");
			if(auto) {
				$("#throw").prop("disabled",true);
				$("#dispense").prop("disabled",true);
				$('#interval_slider').slider({ disabled: false });
			} else {
				$("#throw").prop("disabled",false);
				$("#dispense").prop("disabled",false);
				$('#interval_slider').slider({ disabled: true });
			}

			$("#throw").toggleClass("grey");
			$("#dispense").toggleClass("grey");
			$("#auto").toggleClass("grey");

			$("#throw").redraw();
			$("#dispense").redraw();
			$("#auto").redraw();

			$('#buttons').hide().show(0);

			//exec_command(auto ? 1 : 0);
		});

		/*
		$("#throw").click(function() {
			alert("Throw");
			exec_command(2);
		});

		$("#dispense").click(function() {
			alert("Dispense");
			exec_command(3);
		});
		*/


});
