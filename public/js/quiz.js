 
    $( document ).ready(function() {
        var maxq = parseInt($("#questionsCount").text()) + 1;

        var currentId = 0;
        var selectedOption = 0;
        var correctAnswers = 0;
        var incorrectAnswers = 0;

    	$('.radio-inline').click(function(e) {

            var id = parseInt($(this).data('id'));

            var optionId = parseInt($(this).data('option'));
            selectedOption=optionId;

			if(id==1) $('.button').addClass('hide');
			if(id!=(maxq-1)){
                $('#next').removeClass('hide');

            }
            
			var next = (id+1);

			$('#next').data('id',next);
            

		});
		$('#next').click(function(e) {
			var id = $(this).data('id');

            checkAnswer(selectedOption)

            $('#next').addClass('hide');

			if(id==(maxq-1)) {
                $('#submit').removeClass('hide');
                $('#next').addClass('hide');

            }


			$('.question').addClass('hide');
			$('#question-'+id).removeClass('hide');
			var next = id+1;
			$('#next').data('id',next);
            currentId += 1;
            $("#currentId").text(currentId);

		});


        function checkAnswer(id) {

            var formData = {
                'optionId': id
            };

            axios.post('/api/check-answer', formData)
                .then(function (response) {

                    if(response.data.isCorrect == 1) {
                        alert("პასუხი სწორია")
                        correctAnswers += 1;
                    }
                    else {
                        alert("პასუხი არასწორია")
                        incorrectAnswers += 1;

                    }

                })
                .catch(function (error) {
                    alert("Error in API");
            });
        }

        $("#submit").on('click', function(e) {
            $("#correctAnswers").text(correctAnswers);
            $("#results").removeClass('hide');
            $(this).addClass('hide');
            e.preventDefault();
        });
    });