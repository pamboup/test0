<style type="text/css">
	.image-preview-input {
		position: relative;
		overflow: hidden;
		margin: 0px;
		color: #333;
		background-color: #fff;
		border-color: #ccc;
	}
	.image-preview-input input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		margin: 0;
		padding: 0;
		font-size: 20px;
		cursor: pointer;
		opacity: 0;
		filter: alpha(opacity=0);
	}
	.image-preview-input-title {
		margin-left:0px;
	}
</style>

<form action="{{ route('piecesJointesFormRoute') }}" method="POST" enctype='multipart/form-data'>
  {{ csrf_field() }}
			<!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

	<div class="wizard-header">
		<h3 class="wizard-title">
			Formulaire pour joindre un fichier scanné
		</h3>
		<!--<h5>This information will let us know more about you.</h5> -->
	</div>

	<div class="wizard-navigation" style="display:none">
	  <div class="row">
		<ul>
			<li><a href="#piecesJointes" data-toggle="tab">Ne veut pas qu'on l'enlève</a></li>
		</ul>
	  </div>
	</div>
            <!-- image-preview-filename input [CUT FROM HERE]-->

  <div class="tab-content"  style="padding-top:0px">
    <div class="tab-pane" id="piecesJointes">

        <div class="col-sm-12">

  <div class="form-group label-floating" style="width: 200px">
    <label class="control-label">Enfant</label>
      <input name="idenfant" list="idenfantlist" type="text" value="{{ old('idenfant') }}"
          class="form-control" id="suiviAutoComple">

      <datalist id="idenfantlist">
        <select id="idenfant">
          <option></option>
          @foreach (\App\Enfants::all() as $enfant)
             <option value="{{ $enfant->id }}">
                {{ $enfant->id.' '.$enfant->prenomenf.' '.$enfant->nomenf.' '.$enfant->surnomsenf }}
             </option>
          @endforeach
       </select>
      </datalist>
  </div>
  </div>


  <div class="col-sm-12">

    <div class="form-group label-floating">
      <label class="control-label">Détails</label>
        <input name="details" type="text" value="{{ old('details') }}" class="form-control">
    </div>

  </div>


  <div class="col-sm-12">

  <div class="input-group image-preview text-center" style="width:90%;">
		<span class="input-group-btn" style="padding:0;">
			<div class="btn btn-default image-preview-input">
				<span class="glyphicon glyphicon-folder-open"></span>
				<span class="image-preview-input-title">Fichier</span>
        <input type="file" accept="image/png, image/jpeg, image/jpg, image/gif" name="photo"
            value="{{ old('photo') }}"/> <!-- rename it -->
			</div>
		</span>
		<span class="input-group-btn" style="padding:0">
			<!-- image-preview-clear button -->
			<button type="button" class="btn btn-default image-preview-clear" style="display:none;">
				<span class="glyphicon glyphicon-remove"></span> Enlever
			</button>
			<!-- image-preview-input -->
		</span><br>
		<input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
	</div>


      </div>
    </div>
  </div>



	<div class="wizard-footer">
		<div class="pull-right">
			<input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
			<input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Valider' />
		</div>
		<div class="pull-left">
			<input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
		</div>
		<div class="clearfix"></div>
	</div>
</form>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).on('click', '#close-preview', function(){
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        },
         function () {
           $('.image-preview').popover('hide');
        }
    );
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Fichier");
    });
    // Create the preview image
    $(".image-preview-input input:file").change(function (){
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Changer");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }
        reader.readAsDataURL(file);
    });
});
</script>
