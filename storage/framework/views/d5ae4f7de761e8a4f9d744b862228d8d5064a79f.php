<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Wisata Adat Sulsel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center mt-2">Data Wisata Adat Sulsel</h2>
    <div class="container mt-3">
        <a href="/tambah" class="btn btn-primary">Tambah Data</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Tempat Wisata</th>
                <th scope="col">Penjelasan Singkat</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $WisataAdatSulsel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                    <td><?php echo e($item->nama_tempat_wisata); ?></td>
                    <td><?php echo e($item->penjelasan_singkat); ?></td>
                    <td>
                        <a href="<?php echo e('/lihat/' .$item->id); ?>" class="btn btn-info">Lihat</a>
                        <a href="<?php echo e('/edit/' .$item->id); ?>" class="btn btn-success">Edit</a>
                        <a onclick="return confirm('Yakin Untuk Menghapus?')" href="<?php echo e('/hapus/' .$item->id); ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\crud_jusni\resources\views/index.blade.php ENDPATH**/ ?>