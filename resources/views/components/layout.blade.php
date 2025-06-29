<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Creative Coder</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />

    {{-- ckeditor css --}}
		<link rel="stylesheet" href="/ckeditor/ckeditor5.css">
  </head>
  <body id="home">
    <x-navBar/>
        {{$slot}}
    <x-footer/>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>
    {{-- ckeditor js --}}
    <script type="importmap">
      {
        "imports": {
          "ckeditor5": "/ckeditor/ckeditor5.js",
          "ckeditor5/": "/ckeditor/"
        }
      }
		</script>
		<script src="https://cdn.ckbox.io/ckbox/2.6.1/ckbox.js" crossorigin></script>
		<script type="module" src="/ckeditor/main.js"></script>
  </body>
</html>