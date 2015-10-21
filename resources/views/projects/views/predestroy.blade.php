
<div id='result-message'></div>

<div class="text-center">Are you sure do you want delete "{{ $projects->title }}" title?</div>

    <div class="clearfix">&nbsp;</div>
    
    <button type="button" class="btn btn-danger" id="destroy-btn" onclick="destroyproject('{{ $projects->id }}')">Delete</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    
    
    <script>
       function destroyproject(id){
 
            var url =  "{{ route('projectsdestroy',$projects->id) }}",
                data = {},
                message = "";

                data['id']  = id;

                $.post(url, data, function(result){
                    
                        message += "<div class='alert alert-success'>"+result+"</div>";
                         $("#modal-result").html(message);
                         
                         result_projects();
                         
                         setTimeout(function() {
                             $("#modal").modal('toggle');
                              $("#modal-result").html("");
                         },800);

                        
                        
                        
                        
                }).error(function(result){
                     result = JSON.parse(result.responseText);
                     message += "<div class='alert alert-danger'>";
                      $.each( result, function( key, value ) {
                          message += value+"</br>";
                      });
                      message += "</div>";
                       $("#result-message").html(message);
                      
                });
                
                
        };
</script> 