<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @if($errors)
    @foreach($errors->all() as $error){
      {{ $error}}
    }
    @endforeach
    @endif
    <form method="post">
      {{ csrf_field() }}
      <label for="title"> Title </label>
      <input type="text" name="title" value="{{ old('title') }}">
      <input type="submit" name="submit" value="Submit">
    </form>

  </body>
</html>
