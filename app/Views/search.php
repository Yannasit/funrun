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
    <title>ค้นหาผู้เข้าแข่งขัน</title>

    <link rel="stylesheet" href="/style/search.css">
</head>

<body>
    <div class="row justify-content-md-center">
        <div class="col-sm-8">
            <table class="table table-striped table-bordered table-hover table-responsive-sm" id="member-list">
                <thead class="thead-light">
                    <tr style="text-align: center;">
                        <th>รหัสบัตรประชาชน</th>
                        <th>ชื่อ</th>
                        <th>อายุ</th>
                        <th>อีเมล์</th>

                    </tr>
                </thead>
                <tbody>
                    <?php if ($member) : ?>
                        <?php foreach ($member as $member) : ?>
                            <tr style="text-align: center;">
                                <td><?php echo $member['id_card']; ?></td>
                                <td><?php echo $member['name']; ?></td>
                                <td><?php echo $member['age']; ?></td>
                                <td><?php echo $member['email']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table><br>
            <div class="container">

                <div style="float: right;">
                    <a href="/index" class="btn btn-primary">กลับหน้าหลัก</a>
                </div>


            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#member-list').DataTable();
            });
        </script>
        <script src="/main.js"></script>
</body>

</html>