let input = '';
let count = 0 ;
let  uploadedFile ='' ;
const EXTENSIONS = ['png' , 'jpg' , 'svg' , 'jpeg' ,'gif'] ;

function uploadImage()
{
     input = document.getElementById('single-image') ;

      uploadedFile = input.value ;

     if (uploadedFile == ''){

         alert("please Upload an image ") ;

     }else{

         let extention = uploadedFile.substring(uploadedFile.lastIndexOf('.') + 1).toLowerCase();
         let uploadedElementExists = document.getElementById("image").children;

          if ( count >0 ||uploadedElementExists ){
             document.getElementById("loadedImage").remove();
           }

          if(EXTENSIONS.includes(extention)){

              if(input.files && input.files[0]){
                  var reader = new FileReader() ;

                  reader.onload = function(event){
                      $('#image').append('<img  src = "'+event.target.result +'" id = "loadedImage" width="200px" height="150px" style="margin-left:30%; border-radius: 10% ; box-shadow:3px 4px 2px 1px #9cada4" > ')
                      console.log(event.target.result )
                  }
                  reader.readAsDataURL(input.files[0]);
              }

          }else{
              var wrongExtention = " you upload a wrong Extention ,approved extensions are 'png' , 'jpg' , 'svg' , 'jpeg' ,'gif' "
              $('#image').append('<label style=" color: red"  id="loadedImage">' + wrongExtention + '</label>')

          }
         count+=1;

     }


}
