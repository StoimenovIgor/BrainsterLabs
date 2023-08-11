<!doctype html>
<html lang="en">
    <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bd71ef9677.js" crossorigin="anonymous"></script>

    <title>Form</title>
  </head>
  <body class="myBg">

    
    <div class="transition transition-1 is-active"></div>

   

   <!--Success-->   

    <div class="container">
  <div class="row">
      <div class="col-12">
          <h2 class="complete res">Вашето барање е испратено</h2>
          <h2 class="complete text-success"><span>успешно!</span></h2>
          <p class="text-center p-font">Ви благодариме за вашиот интерес.</p>
      </div>
  </div>
      <div class="row">
          <div class="col-12 col-md-6 mt-1">
              <a class="btn btn-primary d-block" href="./index.html">Назад на почетна</a>
          </div>
          <div class="col-12 col-md-6 mt-1">
              <a class="btn btn-danger text-white d-block" href="./form.html">Вработи наш студент</a>
          </div>
      </div>
</div>

<div class="footer myBorder fixed-bottom">
    <h5 class="text-center">
      Изработено со ♥ од студентите на Brainster
    </h5>
  </div>


  
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

 
  <script>

          (function() {
          'use strict';
          window.addEventListener('load', function() {
        
          var forms = document.getElementsByClassName('needs-validation');

          var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
          form.classList.add('was-validated');
              }, false);
              });
                 }, false); 
        })();
        
          window.onload = () => {
          const transition_el = document.querySelector(".transition");
          const anchors = document.querySelectorAll("a");
          setTimeout(() => {
            transition_el.classList.remove("is-active");
          }, 500);

          for (let i = 0; i < anchors.length; i++) {
            const anchor = anchors[i];
            anchor.addEventListener("click", (e) => {
              e.preventDefault();
              let target = e.currentTarget.href;

              transition_el.classList.add("is-active");

              setTimeout(() => {
                window.location.href = target;
              }, 500);
            });
          }
        };
      
</script>

  </body>
  </html>