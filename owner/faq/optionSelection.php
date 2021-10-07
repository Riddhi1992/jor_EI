<script>
    $(document).ready(function(){
        $("#team1").change(function(){
            var anotherTeam = $("#team2").val();
            var team = $(this).val();
            if(team !='' && team==anotherTeam){
                alert("This team already selected.");
                $('option:selected',this).removeAttr('selected');
                $("option:first",this).attr('selected','selected');
            }
        });
            
        $("#team2").change(function(){
            var anotherTeam = $("#team1").val();
            var team = $(this).val();
            if(team !='' && team==anotherTeam){
                alert("This team already selected.");
                $('option:selected',this).removeAttr('selected');
                $("option:first",this).attr('selected','selected');
                
            }
        });
    });
</script>