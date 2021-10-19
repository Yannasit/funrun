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
    <div class="row">
      <div class="col-md-6">
        <label for="ID_card" class="form-label">รหัสบัตรประชาชน</label>
        <input type="text" name="ID_card" class="form-control" id="..." ;">
      </div>
      <div class="col-md-6">
        <label for="inputName" class="form-label">ชื่อ</label>
        <input type="text" name="Name" class="form-control" id="..." ;">
      </div>

      <div class="col-md-6">
        <label for="inputAge" class="form-label">อายุ</label>
        <input type="text" name="Age" class="form-control" id="..." ;">
      </div>
      <div class="col-md-6">
        <label for="inputEmail" class="form-label">อีเมล์</label>
        <input type="text" name="Email" class="form-control" id="..." ;">
      </div>
      <div class="col-md-6">
        <label for="inputID" class="form-label">ไอดีสมาชิก</label>
        <input type="text" name="ID" class="form-control" id="..." ;">
      </div>
      <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">ประเภทการวิ่ง</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            <label class="form-check-label" for="gridRadios1">
              FUN RUN
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">
              MINI MARATHON
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            <label class="form-check-label" for="gridRadios3">
              VIP
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            <label class="form-check-label" for="gridRadios3">
              Super VIP
            </label>
          </div>
        </div>
    </div>
      </fieldset>
      <a class="btn btn-outline-success" href="/register">ลงทะเบียน</a>
        <a class="btn btn-outline-danger" href="/index">ยกเลิก</a>
    </div>
  </div>

</body>

</html>