<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>ลงทะเบียน</title>

  <link rel="stylesheet" href="/style/register.css">
</head>

<body>
  <div class="container">
<h1>ลงทะเบียนวิ่ง</h1>
<form action="/add" method="POST" class="signin-form">
    <div class="row">
      <div class="col-md-6">
        <label for="id_card" class="form-label">รหัสบัตรประชาชน</label>
        <input type="text" name="id_card" class="form-control" id="id_card" value="<?= set_value('id_card'); ?>">
      </div>
      <div class="col-md-6">
        <label for="inputname" class="form-label">ชื่อ</label>
        <input type="text" name="name" class="form-control" id="name" value="<?= set_value('name'); ?>">
      </div>
      <div class="col-md-6">
        <label for="inputage" class="form-label">อายุ</label>
        <input type="text" name="age" class="form-control" id="age" value="<?= set_value('age'); ?>">
      </div>
      <div class="col-md-6">
        <label for="inputemail" class="form-label">อีเมล์</label>
        <input type="text" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>">
      </div>
      <div class="col-md-6">
        <label for="password" class="form-label">รหัสผ่าน</label>
        <input type="password" name="password" class="form-control" id="password" value="<?= set_value('password'); ?>">
      </div>
      
      
     <div class="button">
       <button type="submit" class="btn btn-primary">
         บันทึกข้อมูล
       </button>
       
     </div>
    </div>
  </div>
</form>
</body>

</html>