<div class='table-responsive'>
    <table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Title</th>
            <th class="text-center">Description</th>
            <th class="text-center">Date Created</th>
            <th class="text-center">Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $list)
        <tr>
            <td class="text-center">{{ $cnt++ }}</td>
            <td class="col-md-2">{{ $list->title }}</td>
            <td class="col-md-6">{{ $list->description }}</td>
            <td class="text-center">{{ $list->created_at }}</td>
            <td class="text-center">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal" id="edit-btn" onclick="editproject('{{ $list->id }}')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal" id="edit-btn" onclick="predestroyproject('{{ $list->id }}')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>


<script>
   
    function editproject(id){
        
        var url =  "{{ route('projectsviewedit') }}",
            data = {};
     
            data['id'] = id;
            
            $.post(url,data,function(result){
                $("#modal-result").html(result);
            });
    }
    
    function predestroyproject(id){
        
        var url =  "{{ route('projectsviewpredestroy') }}",
            data = {};
     
            data['id'] = id;
            
            $.post(url,data,function(result){
                $("#modal-result").html(result);
            });
    }

</script>    