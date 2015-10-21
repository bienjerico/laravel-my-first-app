    <div id='result-message'></div>
     
    <div class="input-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',$projects->title ,['class' => 'form-control']) !!}
    </div>
    <div class="clearfix">&nbsp;</div>

    <div class="input-group">
        {!! Form::label('description','Description:') !!}
        {!! Form::textarea('description',$projects->description,['class' => 'form-control']) !!}
    </div>
    
    <div class="clearfix">&nbsp;</div>
    
    <button type="button" class="btn btn-primary" id="update-btn" onclick="updateproject('{{ $projects->id }}')">Update</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    
    
    <script>
       function updateproject(id){
 
            var url =  "{{ route('projectsupdate',$projects->id) }}",
                data = {},
                title = $("#title"),
                description = $("#description"),
                message = "";

                data['id']  = id;
                data['title'] = title.val();
                data['description'] = description.val();
          

                $.post(url, data, function(result){
                    
                        message += "<div class='alert alert-success'>"+result+"</div>";
                         $("#result-message").html(message);
                        
                        result_projects();
                        
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