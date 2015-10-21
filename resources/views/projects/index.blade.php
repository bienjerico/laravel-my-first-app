@extends('master')


@section('title')
    <title>{{ $title }}</title>
@stop


@section('content')

    <div class="clearfix">&nbsp;</div>
    <!-- Trigger the modal with a button -->
    <div class="text-right">
        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal" id="newprojectmodal" name="newprojectmodal">New Project</button>
    </div>
    <div class="clearfix">&nbsp;</div>

    <!-- Modal -->
    <div id="modal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
              <div id='modal-result'></div>
          </div>
        </div>

      </div>
    </div>
    
    
    <div id='result-projects'>
       <div class="progress hide">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
          <span class="sr-only"></span>
        </div>
      </div>
    </div>

@stop


@section('footer')
    
@stop


@section('javascript')
<script>
    $(function(){
        result_projects();
    });
    
    $("#newprojectmodal").click(function(){
        var url =  "{{ route('projectsviewcreate') }}";

            $.post(url,function(result){
                $("#modal-result").html(result);
            });
    });

    function result_projects(){

        var url =  "{{ route('projectsviewlist') }}";

        $('.progress-bar').css('width', '70%');
        setTimeout(function() {
            $('.progress').removeClass('hide').addClass('show');
        }, 200);


            $.post(url,function(result){
                $('.progress-bar').css('width', '100%');
                setTimeout(function() {
                    $('.progress').removeClass('show').addClass('hide');
                }, 200);

                $("#result-projects").html(result);
            });

    }
</script>    
@stop

