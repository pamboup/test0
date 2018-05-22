  $(document).ready(function(){
        $('#suiviAutoComple').change(function(e){
            e.preventDefault();

            //ajax get
            $.get('suiviAutoCompleRoute', { sujet:document.getElementById('suiviAutoComple').value }, function(data){
              //console.log(data[0]);

              //alert(document.getElementById('idenfant').selectedIndex].value);
              // document.getElementById('pam').value

              if(data[0]){

                document.getElementsByName("suiviVisiteNum")[0].value = data[0].suiviVisiteNum + 1;
                document.getElementsByName("suiviLieu")[0].value = data[0].suiviLieu;
                document.getElementsByName("suiviRegion")[0].value = data[0].suiviRegion;
                document.getElementsByName("suiviCommune")[0].value = data[0].suiviCommune;
                document.getElementsByName("suiviPersonResp")[0].value = data[0].suiviPersonResp;
                document.getElementsByName("suiviPersonRenc")[0].value = data[0].suiviPersonRenc;
                document.getElementsByName("suiviSituation")[0].value = data[0].suiviSituation;
                document.getElementsByName("suiviEvaluPersRenc")[0].value = data[0].suiviEvaluPersRenc;
                document.getElementsByName("suiviEvaluEnf")[0].value = data[0].suiviEvaluEnf;

                document.getElementsByName("suiviVisiteNum")[0].parentElement.classList.remove('is-empty');
                document.getElementsByName("suiviLieu")[0].parentElement.classList.remove('is-empty');
                document.getElementsByName("suiviRegion")[0].parentElement.classList.remove('is-empty');
                document.getElementsByName("suiviCommune")[0].parentElement.classList.remove('is-empty');
                document.getElementsByName("suiviPersonResp")[0].parentElement.classList.remove('is-empty');
                document.getElementsByName("suiviPersonRenc")[0].parentElement.classList.remove('is-empty');

              }

              else{

                document.getElementsByName('suiviVisiteNum')[0].value = 1;
                document.getElementsByName("suiviLieu")[0].value = "";
                document.getElementsByName("suiviRegion")[0].value = "";
                document.getElementsByName("suiviCommune")[0].value = "";
                document.getElementsByName("suiviPersonResp")[0].value = "";
                document.getElementsByName("suiviPersonRenc")[0].value = "";
                document.getElementsByName("suiviSituation")[0].value = "";
                document.getElementsByName("suiviEvaluPersRenc")[0].value = "";
                document.getElementsByName("suiviEvaluEnf")[0].value = "";

             // document.getElementsByName('suiviVisiteNum')[0].parentElement.classList.add('is-empty');
                document.getElementsByName("suiviLieu")[0].parentElement.classList.add('is-empty');
                document.getElementsByName("suiviRegion")[0].parentElement.classList.add('is-empty');
                document.getElementsByName("suiviCommune")[0].parentElement.classList.add('is-empty');
                document.getElementsByName("suiviPersonResp")[0].parentElement.classList.add('is-empty');
                document.getElementsByName("suiviPersonRenc")[0].parentElement.classList.add('is-empty');

              }

              //console.log(data[0].ageenf);
            });
        });

       /* $('form').submit(function(e){
            e.preventDefault();

            //ajax post
            $.post(
              'categrories',
              {name:'pam'},
              function(data){
              console.log(data);

            });
        });
        */


  });
 /*function autocomplet(param){
      var min_length = 1; // min caracters to display the autocomplete
      var getLink = "categrories";
      var getData = {
          _token: "{{ csrf_token() }}"
      }
      $.ajax({
          url: getLink,
          type: 'GET',
          data: getData,
          success:function(data){
          }
      });
     /*if (keyword.length >= min_length){
        $.ajax({
          url: getLink,
          type: 'POST',
          data: getData,
          success:function(data){
            $('#article_list_id').show();
            $('#article_list_id').html(data);
          }
        });
      }
      else {
        $('#article_list_id').hide();
      }
}*/
