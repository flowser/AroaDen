
    <?php $inc = 1; ?>
  
    @foreach ($files as $file)

      <?php      
        $idfiles = $file->idfiles;
        $info = json_decode($file->info);

        $originalName = $info->originalName;
        $fsFilename = $info->fsFilename;
        $fsFilenameNoExt = $info->fsFilenameNoExt;        
        $extension = $info->extension;
        $thumb_file = $thumb_dir.'/'.$fsFilenameNoExt.'.'.$default_img_type;
      ?>

      <div class="col-sm-2 pad10 pad_top_bot text-center">

        @if ( in_array($extension, $img_extensions) )

          <div class="img_container">
            <a class="img_popup<?php echo $inc; ?>" href="{!! $user_dir.'/'.$fsFilename !!}">
              <img class="img_file_view" src="{!! $thumb_file !!}" title="{!! $originalName !!}">
            </a>
            <script>
              $(document).ready(function() {
                $('a.img_popup<?php echo $inc; ?>').colorbox({
                  maxWidth: '99%',
                  maxHeight: '99%'
                });
              });
            </script>
          </div>

          <?php $inc++; ?>

        @else

          <i class="fa fa-file-o fa-3x" title="{!! $originalName !!}"></i>

        @endif
             
  	    <p class="filena wrap fonsi12" title="{!! $originalName !!}">
          {!! $originalName !!} 
  	    </p>

  	    <button type="button" class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown">
  	      <i class="fa fa-list"></i> &nbsp;
  	      <span class="caret"></span> 
  	    </button> 
  	    <ul class="dropdown-menu" role="menu">
          <li>
            <a href="{!! url("$main_route/$id").'/'.$idfiles.'/download' !!}"> 
              <i class="fa fa-download" aria-hidden="true"></i> {{ @trans('aroaden.download') }}
            </a>
          </li>

          <hr>
        	      
          <li>
            <form action="{!! url("$main_route/deleteFile/$idfiles") !!}" method="POST">  
              {!! csrf_field() !!}

              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="id" value="{!! $id !!}" />          

      	      <button type="submit" class="btn btn-sm btn-danger mar10"> 
                <i class="fa fa-trash" aria-hidden="true"></i> {{ @trans('aroaden.delete') }}
              </button>
            </form> 
  	      </li>
  	    </ul>
    	</div>
     	
    @endforeach