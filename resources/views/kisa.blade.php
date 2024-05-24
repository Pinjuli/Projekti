<!-- Tänne kisailija pystyy lisäämään kuvia ja kertomaan missä on käynyt -->


<!-- Button jonka avulla voi lisätä kuvan -->
<!-- <input type="file" id="upload" hidden/>
<label for="upload">Valitse kuva</label> -->

<!-- Tämä on vielä kesken. Kuvan voi valita mutta kuva ei ilmesty minnekään. -->

<div class = "row"> 

  <div class = "col-sm-2">   

  </div> 


      @error('otsikko') 

      <div class="form-error bg-danger"> 

           {{ $message }} 

      </div> 

  @enderror 

  </div> 

</div> 

<br><br><br><br>


<div class="test">
<input type="file" id="fileInput" accept="image/*">
<div id="preview"></div>
</div>

<script>
document.getElementById('fileInput').addEventListener('change', function(event) {
    var files = event.target.files;
    var preview = document.getElementById('preview');
    
    // Clear any existing content
    preview.innerHTML = '';

    // Loop through all selected files
    for (var i = 0; i < files.length; i++) {
      var file = files[i];

      // Only process image files
      if (!file.type.match('image.*')) {
        continue;
      }

      var imgContainer = document.createElement('div');
      imgContainer.style.marginTop = '-20px'; // Spacing between each image container

      var img = document.createElement('img');
      img.src = URL.createObjectURL(file);
      img.style.height = '200px';
      img.style.display = 'block'; // Ensure the image is displayed in a block to put it on a new line
      img.style.marginTop = '-10px';



      // Append the image and file info to the container
      imgContainer.appendChild(img);
     

      // Append the container to the preview div
      preview.appendChild(imgContainer);
    }
  });
  </script>

<style>


  

    #file-chosen{
        margin-left: 40%;
        font-family: sans-serif;
    }


    .col-sm-2{
    
      text-align: center;
    }

    input{
      text-align: center;
    }

    .test{
      margin-top: 10%;
      margin-left: 45%;
    }

    .test2{
      margin-top: 10%;
    }

    img{
      margin-top: -7%;
      margin-left: -15%;
    }
</style>


