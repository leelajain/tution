
<!--
<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>
-->
<script>
    $('#standard').on('change',function(){
        
        if( $(this).val()>0 && $(this).val()<11 ){
            $("#schoolSubjects").show()
        }
        else{
            $("#schoolSubjects").hide()
        }
    }); 
    $('#standard').on('change',function(){
        if( $(this).val()==="Engineering"){
            $("#engiDegreeDetails").show()
            $("#semesterDetails").show()
        }
        else{
            $("#engiDegreeDetails").hide()
            $("#semesterDetails").hide()
        }
    }); 
    $('#standard').on('change',function(){
        if( $(this).val()==="Commerce"){
            $("#commerceDetails").show()
            $("#commerce_semester").show()
        }
        else{
            $("#commerceDetails").hide()
            $("#commerce_semester").hide()
        }
    });
    $('#commerceDetails,#commerce_semester').on('change',function(){
        if( $("#commerceDetails").val()==="fybcom" && $("#commerce_semester").val()==="1"){
            $("#commercesubjects").show()
        }
        else{
            $("#commercesubjects").hide()
        }
    });
    
    $('#course').on('change',function(){
        if( $(this).val()==="course1"){
            $("#subjects").show()
        }
        else{
            $("#subjects").hide()
        }
    });
    // Activate Next Step
        $(document).ready(function() {
            var navListItems = $('ul.setup-panel li a'),
            allWells = $('.setup-content');

        allWells.hide();
        navListItems.click(function(e)
        {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this).closest('li');

            if (!$item.hasClass('disabled')) {
                navListItems.closest('li').removeClass('active');
                $item.addClass('active');
                allWells.hide();
                $target.show();
            }
        });

        $('ul.setup-panel li.active a').trigger('click');

        // DEMO ONLY //
        $('#activate-step-2').on('click', function(e) {
            $('ul.setup-panel li:eq(1)').removeClass('disabled');
            $('ul.setup-panel li a[href="#step-2"]').trigger('click');
            $(this).remove();
        })

        $('#activate-step-3').on('click', function(e) {
            $('ul.setup-panel li:eq(2)').removeClass('disabled');
            $('ul.setup-panel li a[href="#step-3"]').trigger('click');
            $(this).remove();
        })

        $('#activate-step-4').on('click', function(e) {
            $('ul.setup-panel li:eq(3)').removeClass('disabled');
            $('ul.setup-panel li a[href="#step-4"]').trigger('click');
            $(this).remove();
        })

        $('#activate-step-3').on('click', function(e) {
            $('ul.setup-panel li:eq(2)').removeClass('disabled');
            $('ul.setup-panel li a[href="#step-3"]').trigger('click');
            $(this).remove();
        })
         });
        function Calculate()
        {
            
          var resources = document.getElementById('Resources').value;
          var minutes = document.getElementById('Minutes').value; 
          var payamount = document.getElementById('Payamount').value;
         
          document.getElementById('answer').value=parseFloat(resources) - parseFloat(minutes);
         
          document.form1.submit();
        }
 
    
  $('#Installment').on('change',function(){
        if( $(this).val()==="Yes"){
            $("#installmenttype").show()
            
        }
        else{
            $("#installmenttype").hide()
            
        }
    }); 
   

</script>
