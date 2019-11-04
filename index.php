
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
        <p id="demo"></p>
        <input type="text" id="onkyup">
        <div class="spnar"></div>
        <img id="spnar" src="">

        <div class="mamun">
            <p class="result"></p>
        </div>

        <form onsubmit="return false" action="" method="post">
            <label for="ff">name</label>
            <input type="text" name="name" id="name">

            <label for="fflll">password</label>
            <input type="text" name="password" id="password">

            <button type="submit" id="sumniit">send</button>
        </form>
        <p class="login"></p>


        <!-- Dom create -->
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-4 mx-auto">
              <input type="text" class="form-control my-5" id="input-feild">
              <ul class="list-group" id="fieldlist">
                  
              </ul>
            </div>
          </div>
    </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>




    <script>

        //data submit on jquery
        $(document).ready(function(){
            
            $("#sumniit").on("click",function(){
                var name = $("#name").val();
                var pass = $("#password").val();
                $(".spnar").html('<img src="pic/pic.gif" alt="">');

                setTimeout(function(){
                    $.post( "ajax_core.php",{uname:name,upass:pass}, function( data ){
                     $(".spnar img").remove();
                     $(".login").html(data);

                });
                },1000);

            });


        })







    // if (window.XMLHttpRequest) {
        
    //     xmlhttp = new XMLHttpRequest();

    // } else {
        
    //     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    // }



    // function loadDoc(my_text) {
    //     var xhttp = new XMLHttpRequest();
    //     document.getElementById("spnar").src = "pic/pic.gif";

    //     setTimeout(function(){ 
    //          xhttp.open("GET", "ajax_core.php?text="+my_text, true);
    //         xhttp.send();
    //         xhttp.onreadystatechange = function() {
    //         if (this.readyState == 4 && this.status == 200) {
    //             document.getElementById("demo").innerHTML = this.responseText;
    //             document.getElementById("spnar").src = "";
    //         }
    //     };

    //      }, 1000);
        
        
    // }


    // jquery ajax

        $(document).ready(function(){
          

            // $("#onkyup").keyup( function(){
            //     var value = $(this).val();

            //     $(".spnar").html('<img src="pic/pic.gif" alt="">');
            //     setTimeout(function(){
            //         $.get( "ajax_core.php?text="+value, function( data ) {
            //       $( ".result" ).html( data );
            //     $(".spnar").html('<img src="" alt="">');

            //     });

            //     },1000);
            // });

            //axios

            $("#onkyup").keyup( function(){
                var value = $(this).val();

                $(".spnar").html('<img src="pic/pic.gif" alt="">');
                setTimeout(function(){
                    axios.get( "ajax_core.php?text="+value)
                    .then(function(data){
                        console.log(data);
                        $( ".result" ).html(data.data);
                        $(".spnar").html('<img src="" alt="">');
                    })
                    .catch(function (error) {
                    // handle error
                    console.log(error);
                    })
                },1000);
            });


           




        });

        

        //dom create 
        let input = document.querySelector('#input-feild')
        let ul = document.querySelector('#fieldlist')

        input.addEventListener('keypress',function(e){
            if(e.keyCode === 13){
                let name = e.target.value
                createli(ul,name)
                e.target.value =''
            }
        })

        function createli(ul,name){
            let li = document.createElement('li')
            li.className='list-group-item d-flex'
            li.innerHTML = name
            ul.appendChild(li)

            let span = document.createElement('span')
            span.className='ml-auto'
            span.innerText='x'
            li.style.cursor='pointer'
            li.appendChild(span)
            span.addEventListener('click',function(){
                ul.removeChild(li)
                
            })
        }

        
</script>





  </body>
</html>

